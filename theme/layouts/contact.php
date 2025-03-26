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
                <div class="max-w-[500px] w-full mx-auto">
                    <form class="space-y-6">
                        <div>
                            <input type="text" class="form-input rounded-md !h-[55px] bg-white border !border-[#ced4da] focus:!border-custom" placeholder="Your name..." required="">
                        </div>
                        <div>
                            <input type="text" class="form-input rounded-md !h-[55px] bg-white border !border-[#ced4da] focus:!border-custom" placeholder="Your email..." required="">
                        </div>
                        <div>
                            <input type="email" class="form-input rounded-md !h-[55px] bg-white border !border-[#ced4da] focus:!border-custom" placeholder="Your subject..." required="">
                        </div>
                        <div>
                            <textarea rows="5" class="form-input rounded-md bg-white border !border-[#ced4da] focus:!border-custom h-auto" placeholder="Your message..." required="" spellcheck="false"></textarea>        
                        </div>
                        <div>
                            <button type="button" class="btn-custom w-full">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-dark/[0.04] h-[1px] my-[70px] w-full inline-block"></div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-[30px]">
                <div class="text-center">
                    <div class="bg-custom/20 w-[50px] h-[50px] flex items-center mx-auto justify-center leading-[50px] rounded-lg">
                        <img src="<?= $Wcms->asset("images/icon/mail.svg") ?>" alt="mail" class="mx-auto inline-block h-[30px]">
                    </div>
                    <h4 class="mt-4 font-bold text-xl">Email</h4>
                    <p class="mt-2 text-muted"><?= $Wcms->block('contact_email')?></p>
                </div>
                <div class="text-center">
                    <div class="bg-custom/20 w-[50px] h-[50px] flex items-center mx-auto justify-center leading-[50px] rounded-lg">
                        <img src="<?= $Wcms->asset("images/icon/active-call.svg") ?>" alt="mail" class="mx-auto inline-block h-[30px]">
                    </div>
                    <h4 class="mt-4 font-bold text-xl">Telephone</h4>
                    <p class="mt-2 text-muted"><?= $Wcms->block('contact_phone')?></p>
                </div>
                <div class="text-center">
                    <div class="bg-custom/20 w-[50px] h-[50px] flex items-center mx-auto justify-center leading-[50px] rounded-lg">
                        <img src="<?= $Wcms->asset("images/icon/time-schedule.svg") ?>" alt="mail" class="mx-auto inline-block h-[30px]">
                    </div>
                    <h4 class="mt-4 font-bold text-xl">Business Hours</h4>
                    <p class="mt-2 text-muted"><?= $Wcms->block('contact_days')?></p>
                    <p class="mt-1 text-muted"><?= $Wcms->block('contact_hours')?></p>
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