<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="<?= $Wcms->getSiteLanguage() ?>">

<?php include 'theme/includes/head.php';?>

<body class="antialiased text-base font-nunito">
    <!-- Admin settings panel and alerts -->
	<?= $Wcms->settings() ?>
    <?= $Wcms->alerts() ?>

    <?php include 'theme/includes/header.php';?>

    <!-- Start banner -->
    <section class="md:pt-[170px] pt-[120px] pb-20 md:pb-[90px] bg-cover bg-[url(../images/bg-pages.jpg)] relative">
        <div class="container">
            <div class="grid grid-cols-1">
                <h1 class="font-bold text-[36px]"><?= $Wcms->page('title') ?></h1>
                <p class="mt-2"><?= $Wcms->page('description') ?></p>
            </div>
        </div>
    </section>
    <!-- End banner -->

    <!-- Start Contact -->
    <section class="py-20">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="w-full mx-auto">
					<?= $Wcms->page('content') ?>
                    <?= $Wcms->block('testblock', 'testContent') ?>
                    <?= $Wcms->block('anotherblock', 'This default text is given in page template') ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

    <?php include 'theme/includes/footer.php';?>

    <!-- All Javascript -->
    <!-- Custom Js   -->
    <script src="<?= $Wcms->asset("js/custom.js") ?>"></script>

    <!-- Admin JavaScript. More JS libraries can be added below -->
    <?= $Wcms->js() ?>

</body>

</html>