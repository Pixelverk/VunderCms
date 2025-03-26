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
                <div class="mt-4">
                    <a class='btn-custom py-2 px-[15px]' href='contact/'>Contact US</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner -->

    <!-- Start Services -->
    <section class="py-20 bg-white">
        <div class="container">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-[30px]">
                <div class="text-center p-4">
                    <div>
                        <i class="mdi mdi-compass-rose text-white/80 text-[40px] leading-[84px] text-center w-[84px] h-[84px] inline-block bg-custom rounded-[10px]"></i>
                    </div>
                    <div class="mt-6">
                        <h4 class="font-bold text-2xl">Easy access</h4>
                        <p class="text-muted mt-4">Take Ehya wherever you go so that you know what’s going on with your money at all times.</p>
                    </div>
                </div>
                <div class="text-center p-4">
                    <div>
                        <i class="mdi mdi-drag-variant text-white/80 text-[40px] leading-[84px] text-center w-[84px] h-[84px] inline-block bg-custom rounded-[10px]"></i>
                    </div>
                    <div class="mt-6">
                        <h4 class="font-bold text-2xl">Budgets that work</h4>
                        <p class="text-muted mt-4">Create budgets you can actually stick to, and can actually see how you’re spending your money.</p>
                    </div>
                </div>
                <div class="text-center p-4">
                    <div>
                        <i class="mdi mdi-google-circles-extended text-white/80 text-[40px] leading-[84px] text-center w-[84px] h-[84px] inline-block bg-custom rounded-[10px]"></i>
                    </div>
                    <div class="mt-6">
                        <h4 class="font-bold text-2xl">Total control</h4>
                        <p class="text-muted mt-4">Take a full control of your expenses. Landy will control of help you to do that anywhere anytime.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Start Conetent -->
    <section class="py-20 bg-white">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-[30px]">
                <div class="max-w-[450px] mx-auto">
                    <p class="[&>span]:bg-custom tracking-[6px] text-xs uppercase [&>span]:h-3 z-10 [&>span]:w-[60px] [&>span]:inline-block [&>span]:absolute [&>span]:opacity-10 relative "><span></span>Perfact Design</p>
                    <h3 class="font-bold text-[40px] capitalize mt-6">It’s everything you’ll ever need.</h3>
                    <p class="text-muted mt-6">Create custom landing pages with Landik that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                    <div class="mt-10">
                        <a href="#" class="btn-custom rounded-full">Explore</a>
                    </div>
                </div>
                <div>
                    <img src="<?= $Wcms->asset("images/about_com.jpg") ?>" alt="com" class="mx-auto rounded-[30px]">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-[30px] mt-16">
                <div>
                    <img src="<?= $Wcms->asset("images/about_com.jpg") ?>" alt="com" class="mx-auto rounded-[30px]">
                </div>
                <div class="max-w-[450px] mx-auto">
                    <p class="[&>span]:bg-custom tracking-[6px] text-xs uppercase [&>span]:h-3 z-10 [&>span]:w-[60px] [&>span]:inline-block [&>span]:absolute [&>span]:opacity-10 relative "><span></span>User Interface</p>
                    <h3 class="font-bold text-[40px] capitalize mt-6">Unlimited Features Awaiting For You</h3>
                    <p class="text-muted mt-6">Create custom landing pages with Landik that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                    <div class="mt-10">
                        <a href="#" class="btn-custom rounded-full">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Conetent -->

    <!-- Start Faq -->
    <section class="py-20 bg-light">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <h2 class="font-bold text-[32px] md:text-[40px] capitalize mb-2 relative z-10"><span class="bg-[#dff1f0] h-[70px] w-[70px] inline-block absolute rounded-full -z-10 -top-[15px]"></span>Want To Ask Something From Us?</h2>
                    <p class="text-muted mx-auto text-lg max-w-[600px] mt-6">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 mt-16">
                <div class="mx-auto w-full max-w-[650px]">
                    <div class="accordion-container faq space-y-2.5">
                        <div class="ac mt-0 bg-white border-none">
                            <h2 class="ac-header">
                                <button
                                    type="button"
                                    class="ac-trigger !p-5 relative !flex w-full items-center justify-between gap-2 !text-lg !font-nunito !font-semibold !text-dark after:!hidden">
                                    <span class="leading-[22px]">What does royalty free mean?</span>
                                    <div class="leading-[22px]">
                                        <i class="mdi mdi-plus plus text-xl font-bold leading-[0px]"></i>
                                        <i class="mdi mdi-minus minus text-xl font-bold leading-[0px]"></i>
                                    </div>
                                </button>
                            </h2>
                            <div class="ac-panel">
                                <p class="ac-text !p-[26px] !pt-[6px] !font-nunito !text-[15px] !font-normal !leading-[22px] !text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <div class="ac mt-0 bg-white border-none">
                            <h2 class="ac-header">
                                <button
                                    type="button"
                                    class="ac-trigger !p-5 relative !flex w-full items-center justify-between gap-2 !text-lg !font-nunito !font-semibold !text-dark after:!hidden">
                                    <span class="leading-[22px]">What do you mean by item and end product?</span>
                                    <div class="leading-[22px]">
                                        <i class="mdi mdi-plus plus text-xl font-bold leading-[0px]"></i>
                                        <i class="mdi mdi-minus minus text-xl font-bold leading-[0px]"></i>
                                    </div>
                                </button>
                            </h2>
                            <div class="ac-panel">
                                <p class="ac-text !p-[26px] !pt-[6px] !font-nunito !text-[15px] !font-normal !leading-[22px] !text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <div class="ac mt-0 bg-white border-none">
                            <h2 class="ac-header">
                                <button
                                    type="button"
                                    class="ac-trigger !p-5 relative !flex w-full items-center justify-between gap-2 !text-lg !font-nunito !font-semibold !text-dark after:!hidden">
                                    <span class="leading-[22px]">What are some examples of permitted end products?</span>
                                    <div class="leading-[22px]">
                                        <i class="mdi mdi-plus plus text-xl font-bold leading-[0px]"></i>
                                        <i class="mdi mdi-minus minus text-xl font-bold leading-[0px]"></i>
                                    </div>
                                </button>
                            </h2>
                            <div class="ac-panel">
                                <p class="ac-text !p-[26px] !pt-[6px] !font-nunito !text-[15px] !font-normal !leading-[22px] !text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <div class="ac mt-0 bg-white border-none">
                            <h2 class="ac-header">
                                <button
                                    type="button"
                                    class="ac-trigger !p-5 relative !flex w-full items-center justify-between gap-2 !text-lg !font-nunito !font-semibold !text-dark after:!hidden">
                                    <span class="leading-[22px]">Am i allowed to modify the item that i purchased?</span>
                                    <div class="leading-[22px]">
                                        <i class="mdi mdi-plus plus text-xl font-bold leading-[0px]"></i>
                                        <i class="mdi mdi-minus minus text-xl font-bold leading-[0px]"></i>
                                    </div>
                                </button>
                            </h2>
                            <div class="ac-panel">
                                <p class="ac-text !p-[26px] !pt-[6px] !font-nunito !text-[15px] !font-normal !leading-[22px] !text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <div class="ac mt-0 bg-white border-none">
                            <h2 class="ac-header">
                                <button
                                    type="button"
                                    class="ac-trigger !p-5 relative !flex w-full items-center justify-between gap-2 !text-lg !font-nunito !font-semibold !text-dark after:!hidden">
                                    <span class="leading-[22px]">I'm not sure if my use is covered. what should i do?</span>
                                    <div class="leading-[22px]">
                                        <i class="mdi mdi-plus plus text-xl font-bold leading-[0px]"></i>
                                        <i class="mdi mdi-minus minus text-xl font-bold leading-[0px]"></i>
                                    </div>
                                </button>
                            </h2>
                            <div class="ac-panel">
                                <p class="ac-text !p-[26px] !pt-[6px] !font-nunito !text-[15px] !font-normal !leading-[22px] !text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Faq -->

    <?php include 'theme/includes/footer.php';?>

    <!-- All Javascript -->
    <!-- Accordion Js -->
    <script src="<?= $Wcms->asset("js/accordion.min.js") ?>"></script>

    <!-- Custom Js   -->
    <script src="<?= $Wcms->asset("js/custom.js") ?>"></script>

    <script>
        // Accordion
        new Accordion('.accordion-container', {
        duration: 200,
        });
    </script>

    <!-- Admin JavaScript. More JS libraries can be added below -->
    <?= $Wcms->js() ?>

</body>

</html>