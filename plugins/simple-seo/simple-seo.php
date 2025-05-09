<?php

global $Wcms;

$Wcms->addListener('settings', function ($args) {
    global $Wcms;

    $doc = new DOMDocument();
    @$doc->encoding = 'utf-8';
    @$doc->loadHTML(mb_convert_encoding($args[0], 'HTML-ENTITIES', 'UTF-8'));

    /* Input element for header height */

    $label = $doc->createElement('p');
    $label->setAttribute('class', 'subTitle');
    $label->nodeValue = 'SEO (Search Engine Optimization)';

    $doc->getElementById('general')->insertBefore($label, $doc->getElementById('general')->lastChild);

    $wrapper = $doc->createElement('div');
    $wrapper->setAttribute('class', 'change');

    $form = $doc->createElement('form');
    $form->setAttribute('action', $Wcms->url());
    $form->setAttribute('method', 'post');

    $button = $doc->createElement('input');
    $button->setAttribute('type', 'submit');
    $button->setAttribute('class', 'btn btn-info');
    $button->setAttribute('value', 'Generate sitemap.txt and robots.txt');
    $button->setAttribute('name', 'sitemap');
    $form->appendChild($button);

    $token = $doc->createElement('input');
    $token->setAttribute('type', 'hidden');
    $token->setAttribute('value', $Wcms->getToken());
    $token->setAttribute('name', 'token');
    $form->appendChild($token);

    $wrapper->appendChild($form);

    $doc->getElementById('general')->insertBefore($wrapper, $doc->getElementById('general')->lastChild);

    $args[0] = preg_replace('~<(?:!DOCTYPE|/?(?:html|body))[^>]*>\s*~i', '', $doc->saveHTML());

    if (! isset($_POST['sitemap']) || ! $Wcms->verifyFormActions()) {
        return $args;
    }

    $BASE_URL = $Wcms->url();

    $output = [$BASE_URL];

    // CMS pages
    foreach ($Wcms->get('menuItems') as $item) {
  	    extractSlugs($item, $output, $BASE_URL);
    }

    // Blog pages
    if (is_dir(__DIR__  . '/../simple-blog')) {
        try {
            include_once __DIR__ . '/../simple-blog/class.SimpleBlog.php';
            $Blog = new SimpleBlog(false);
            $Blog->init();

            foreach ($Blog->get('posts') as $slug => $item) {
                $output[] = $BASE_URL . $Blog->slug . '/' . $slug;
            }
        } catch (Exception $e) {
            // Fail gracefully, probably different plugin with same name
        }
    }

    // Store pages
    if (is_dir(__DIR__ . '/../simple-store')) {
        // Todo: add store items
    }

    $output[] = '';

    $sitemap = join("\n", $output);

    $robots = <<<TXT
User-agent: *
Allow: /

Sitemap: {$Wcms->url('sitemap.txt')}

TXT;

    file_put_contents(__DIR__ . '/../../sitemap.txt', $sitemap);
    file_put_contents(__DIR__ . '/../../robots.txt', $robots);

    $Wcms->alert('success', 'Updated sitemap - robots.txt and sitemap.txt generated.');

    return $args;
});

function extractSlugs($item, &$output, $prevSlug): void
{
   if ($item->visibility === 'show') {
      $output[] = $prevSlug . $item->slug;
   }

   foreach ($item->subpages as $subpage) {
      extractSlugs($subpage, $output, $prevSlug . $item->slug . '/');
   }
}
