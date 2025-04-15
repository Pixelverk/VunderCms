A modified version of WonderCMS v3.5.0, which is a lovely flat-file cms project in PHP.

I wanted to make it a bit more usable by changing how page editing works, incorporating some plugins as a standard, etc. etc.  

# Local dev setup
Just do something like this, it's a php file...
* Launch Apache from Xampp or equivalent tool
* Throw everything in a folder, htdocs in Xampp
* Visit localhost/folderName
* Enjoy

The theme folder has all the design / template stuff.

Settings, page/block data and everything else is in data/database.json.

The admin login PW should be "cE1IwMNt" at localhost/folder/loginURL/.

If database.json is removed, it will be regenerated with a new password on next page load.

No security needed here, just throw the plaintext PW in the readme. Who cares!

A lot of the editing/saving action is in the wcms-admin.js file.

# Theme building
Creating a new site using this CMS is all about replacing the theme.

This is how I plan to build new sites and page layouts quickly.

1. Get a html site template that someone else spent several hours designing
2. Put any assets into the theme/assets folder, and html pages in the theme/layouts folder
3. Extract head, header and footer html into their respective theme/includes files
4. Add php tags like asset() and page() to the /includes files to get urls and page info
5. Convert each .html in /layouts into .php pages, adding asset(), block() and page() tags as needed 
6. Make sure to include the global Wcms instance in each layout file, ```<?php global $Wcms ?>```

An editable part of a layout is created by calling Wcms->block().

There are two arguments, the block name and some optional default content, like this;

```<?= $Wcms->block('testingbuttons', '<div class="mt-8"> <a href="#" class="btn-custom">Get Started</a> </div>'); ?>```

WonderCMS had the ```<?= $Wcms->page('content') ?>``` tag for wysiwig editing, but it's not very useful now with my block() changes. Might make it work again in the future.

# Work so far
I've included index-350.php as a reminder of what WonderCMS looked like when I started.

Most changes from WonderCMS 3.5.0 can be found in the changelog.md file.

# TO DO
- [x] Make sure regenerating the database.json still works as intended
- [x] Make the onpage form-based block editing work for a, button, btn and img tags.
- [x] Clean up the onpage editing experience, my inefficient JS
- [ ] Improve the onpage editing experience, CSS could be better and form elements need labels.
- [ ] Test my block editing experience with unnecessarily nested html elements...
- [x] Move menu items one layer up in the database.json, don't know why they are under 'config'.
- [ ] Make the settings modal easier to use or just a bit more easy to read. 
- [ ] Figure out how the editing of page names via the settings modal should behave
- [x] Fix alert CSS so it doesn't block the menu items
- [x] Clean up unnecessary white space in block save strings
- [ ] Add head/footer js strings that can be set in settings modal, for stuff like analytics scripts.
- [ ] Figure out how to make to set the home menuitem slug to '.' instead of 'home' without editing db.
- [ ] Figure out how subpages work and if I ruined them with my changes yet...
- [ ] Either remove the <?= $Wcms->page('content') ?> block or make it use WonderCMS summernote wysiwyg editing.
- [ ] Make it easy to create pages based on default.php (currently done by navigating to non-existent page url)
- [ ] Make it easy to create pages based on chosen layout (currently done by switching layout in settings)

Related to existing WonderCMS plugins
- [ ] Get Wcms Simple Statistics plugin to work without errors.
- [ ] Incorporate the Wcms SimpleBlog plugin / make own blog solution
- [ ] Improve the Swedish translation plugin, mostly the content
- [ ] The Wcms contact form plugin seems unseful as well
- [x] The Wcms simple SEO seems useful for sitemap / robots.txt, added and works as expected.

Maybe
- [ ] Explore using HTMX for editing / saving block content