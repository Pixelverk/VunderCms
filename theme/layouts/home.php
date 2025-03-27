<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="<?= $Wcms->getSiteLanguage() ?>">

<?php include 'theme/includes/head.php';?>

<body class="antialiased text-base font-nunito">
    <!-- Admin settings panel and alerts -->
	<?= $Wcms->settings() ?>
    <?= $Wcms->alerts() ?>

    <?php include 'theme/includes/header.php';?>
    
    <!-- Start Home -->
    <section class="pt-[124px] pb-20 bg-cover bg-right-bottom md:bg-center bg-[url('../images/home-2.png')] bg-white">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="max-w-[570px]">
                    <div>
                        <a href="#" data-type="youtube" data-id="YjhrligRTbE"  class="text-custom lightbox">
                            <i class="mdi mdi-play shadow-[0px_0px_0px_4px_rgb(230,242,241)] text-[34px] inline-block w-16 leading-[64px] h-16 rounded-full bg-white text-center"></i>
                        </a>
                    </div>
                    <div class="mt-6">
                        <!--<h1 class="md:text-[46px] text-[36px] font-bold capitalize leading-[1.2]"><? #$Wcms->block('heroHeading'); ?></h1> -->
                        <?= $Wcms->block('heroHeading', "<h1 class='md:text-[46px] text-[36px] font-bold capitalize leading-[1.2]'>great hero heading default text</h1>"); ?>
                        <p class="text-muted mt-6"><?= $Wcms->block('heroDescription', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime The standard chunk of those interested.'); ?></p>
                        <?= $Wcms->block('testingspans', '
                        <div class="mt-4">
                            <p class="mb-0 text-muted"><span class="w-2 h-2 inline-block rounded-full mr-2 relative top-[-2px] bg-custom"></span>Satisfied Guarantee</p>
                            <p class="mb-0 mt-2 text-muted"><span class="w-2 h-2 inline-block rounded-full mr-2 relative top-[-2px] bg-custom"></span>Awesome Support 24/7</p>
                        </div>
                        '); ?>
                        <?= $Wcms->block('testingbuttons', '
                        <div class="mt-8">
                            <a href="#" class="btn-custom">Get Started</a>
                        </div>
                        '); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Home -->

    <!-- Start Logo -->
    <section class="py-20">
        <div class="container bg-light rounded">
            <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4 space-y-4 md:space-y-0 items-center">
                <?= $Wcms->block(
                'image1',
                '<div class="md:py-9 py-5">
                    <img src="theme/assets/images/clients/1.png" alt="logo-img" class="mx-auto block" />
                </div>'); ?>
                <div class="md:py-9 py-5">
                    <img src="<?= $Wcms->asset("images/clients/2.png") ?>" alt="logo-img" class="mx-auto block" />
                </div>
                <div class="md:py-9 py-5">
                    <img src="<?= $Wcms->asset("images/clients/3.png") ?>" alt="logo-img" class="mx-auto block" />
                </div>
                <div class="md:py-9 py-5">
                    <img src="<?= $Wcms->asset("images/clients/4.png") ?>" alt="logo-img" class="mx-auto block" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Logo -->

    <!-- Start Services -->
    <section class="py-20 bg-white">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <h2 class="font-bold text-[32px] md:text-[40px] capitalize mb-2 relative z-10"><span class="bg-[#dff1f0] h-[70px] w-[70px] inline-block absolute rounded-full -z-10 -top-[15px]"></span><?= $Wcms->block('testingheading1', 'solution made for you.'); ?></h2>
                    <p class="text-muted mx-auto text-lg max-w-[600px] mt-6">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                </div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-[30px] mt-16">
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

     <!-- Start Features -->
     <section class="py-20">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <h2 class="font-bold text-[32px] md:text-[40px] capitalize mb-2 relative z-10"><span class="bg-[#dff1f0] h-[70px] w-[70px] inline-block absolute rounded-full -z-10 -top-[15px]"></span>Landik provide Unique smart features</h2>
                    <p class="text-muted mx-auto text-lg max-w-[600px] mt-6">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px] mt-16 items-center">
                <div>
                    <img src="<?= $Wcms->asset("images/features/1.png") ?>" alt="" class="img-fluid mx-auto d-block" />
                </div>
                <div class="mt-4">
                    <h2 class="capitalize text-3xl leading-[1.4] max-w-[450px]">Speed up your workflow with our features.</h2>
                    <p class="text-muted mt-6 max-w-[500px] text-lg leading-[1.4] mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    <div class="mt-6 space-y-4">
                        <div>
                            <div class="bg-custom/[0.15] inline-block h-[42px] w-[42px] leading-[42px] text-center rounded-[6px]">
                                <img src="<?= $Wcms->asset("images/icon/features-1.png") ?>" alt="" class="mx-auto inline-block w-[26px]" />
                            </div>
                            <span class="text-muted inline-block ml-2">Built with latest Bootstrap</span>
                        </div>
                        <div>
                            <div class="bg-custom/[0.15] inline-block h-[42px] w-[42px] leading-[42px] text-center rounded-[6px]">
                                <img src="<?= $Wcms->asset("images/icon/features-2.png") ?>" alt="" class="w-[26px] inline-block mx-auto" />
                            </div>
                            <span class="text-muted ml-2">Awesome Support 24/7</span>
                        </div>
                        <div>
                            <div class="bg-custom/[0.15] inline-block h-[42px] w-[42px] leading-[42px] text-center rounded-[6px]">
                                <img src="<?= $Wcms->asset("images/icon/features-3.png") ?>" alt="" class="w-[26px] inline-block mx-auto" />
                            </div>
                            <span class="text-muted ml-2">Well documented and structured code</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features -->

    <!-- Start Cta -->
    <section class="py-20 bg-white relative">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="text-center rounded-[15px] py-[60px] px-[30px] bg-custom relative text-white">
                    <div class="bg-[url(../images/wave-mask.png)] absolute inset-0 bg-cover bg-center bg-no-repeat w-full h-full"></div>
                    <h2 class="font-bold text-[40px] capitalize relative z-10">Get Started with Landik</h2>
                    <p class="mx-auto max-w-[600px] text-lg leading-[1.5] mt-6 text-[#f7f7f7] relative">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    <div class="mt-10 relative z-10">
                        <div class="text-center">
                            <a href="#" data-type="youtube" data-id="YjhrligRTbE" class="lightbox border-[3px] inline-block rounded-full p-[7px]">
                                <i class="mdi mdi-play presentation_icon rounded-full bg-white inline-block text-center text-custom text-[35px] leading-[65px] duration-200 h-[65px] w-[65px]"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cta -->

    <!-- Start Client -->
    <section class="bg-light pt-20">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px] items-center">
                <div class="md:order-1 order-2">
                    <img src="<?= $Wcms->asset("images/client_side.png") ?>" alt="" class="mx-auto">
                </div>
                <div class="relative client-sec md:order-2 order-1">
                    <h2 class="font-bold text-[32px] md:text-[40px] capitalize mb-2 relative z-10"><span class="bg-[#dff1f0] h-[70px] w-[70px] inline-block absolute rounded-full -z-10 -top-[15px]"></span>What Our Users Have To Say.</h2>
                    <p class="text-muted mx-auto text-lg max-w-[600px] mt-6">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    <div class="mt-12 mb-10">
                        <p class="text-muted">More Over <span class="text-custom">3200+ Customers</span></p>
                    </div>
                    <div class="swiper client-side select-none">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="flex items-start gap-8">
                                    <div class="testi-icon testi-left h-[52px] text-center w-[52px] leading-[52px] rounded-full text-white bg-custom inline-block text-[42px] shrink-0">
                                        <i class="mdi mdi-format-quote-open"></i>
                                    </div>
                                    <div class="testi-desc">
                                        <h3 class="capitalize text-2xl leading-[1.6] font-semibold">“We all know the stigma around build times and the ever expanding arsenal of tooling in modern web apps.”</h3>
                                        <h5 class="mt-6 font-bold text-xl">Robert Goodwin</h5>
                                        <p class="text-muted mt-1">California USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex items-start gap-8">
                                    <div class="testi-icon testi-left h-[52px] text-center w-[52px] leading-[52px] rounded-full text-white bg-custom inline-block text-[42px] shrink-0">
                                        <i class="mdi mdi-format-quote-open"></i>
                                    </div>
                                    <div class="testi-desc">
                                        <h3 class="capitalize text-2xl leading-[1.6] font-semibold">“We all know the stigma around build times and the ever expanding arsenal of tooling in modern web apps.”</h3>
                                        <h5 class="mt-6 font-bold text-xl">Robert Goodwin</h5>
                                        <p class="text-muted mt-1">California USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex items-start gap-8">
                                    <div class="testi-icon testi-left h-[52px] text-center w-[52px] leading-[52px] rounded-full text-white bg-custom inline-block text-[42px] shrink-0">
                                        <i class="mdi mdi-format-quote-open"></i>
                                    </div>
                                    <div class="testi-desc">
                                        <h3 class="capitalize text-2xl leading-[1.6] font-semibold">“We all know the stigma around build times and the ever expanding arsenal of tooling in modern web apps.”</h3>
                                        <h5 class="mt-6 font-bold text-xl">Robert Goodwin</h5>
                                        <p class="text-muted mt-1">California USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="flex items-start gap-8">
                                    <div class="testi-icon testi-left h-[52px] text-center w-[52px] leading-[52px] rounded-full text-white bg-custom inline-block text-[42px] shrink-0">
                                        <i class="mdi mdi-format-quote-open"></i>
                                    </div>
                                    <div class="testi-desc">
                                        <h3 class="capitalize text-2xl leading-[1.6] font-semibold">“We all know the stigma around build times and the ever expanding arsenal of tooling in modern web apps.”</h3>
                                        <h5 class="mt-6 font-bold text-xl">Robert Goodwin</h5>
                                        <p class="text-muted mt-1">California USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="swiper-pagination space-x-2"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Client -->

    <!-- Start Price -->
    <section class="py-20">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <h2 class="font-bold text-[32px] md:text-[40px] capitalize mb-2 relative z-10"><span class="bg-[#dff1f0] h-[70px] w-[70px] inline-block absolute rounded-full -z-10 -top-[15px]"></span>What’s our monthly pricing subscription</h2>
                    <p class="text-muted mx-auto text-lg max-w-[600px] mt-6">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-16 gap-[30px]">
                <div class="py-10 px-[25px] relative">
                    <div class="text-center">
                        <h6 class="text-dark/40 leading-5">Starter Plan</h6>
                    </div>
                    <div class="mt-10 text-center">
                        <h1 class="mb-0 text-[56px] font-semibold">$29<sub class="text-custom text-sm">/Per Month</sub></h1>
                    </div>
                    <div class="w-full h-[1px] bg-[#efefef] my-10"></div>
                    <div class="text-dark/50 px-[30px] text-center">
                        <p class="mb-0 leading-[1.5]">Nulla metus metus vel tincidunt sed euismod nibh Quisque volutpat.</p>
                    </div>
                    <div class="text-center mt-12">
                        <a href="#" class="btn-custom-light">Join Now</a>
                    </div>
                </div>
                <div class="py-10 px-[25px] relative text-white overflow-hidden shadow-[0_0.75rem_6rem_rgb(56,65,74,0.3)] active bg-custom rounded mx-auto">
                    <div class="bg-white py-[6px] text-center w-[200px] absolute top-[22px] -right-[62px] rotate-45">
                        <h6 class="uppercase text-custom text-xs">Best &nbsp;Plan</h6>
                    </div>
                    <div class="text-center">
                        <h6 class="mb-0 text-white/80">Enterprice Plan</h6>
                    </div>
                    <div class="mt-10 text-white text-center">
                        <h1 class="mb-0 text-[56px] font-semibold">$39<sub class="text-sm">/Per Month</sub></h1>
                    </div>
                    <div class="bg-[#efefef]/20 w-full h-[1px] my-10"></div>
                    <div class="px-[30px] text-center">
                        <p class="mb-0 text-white/80">Nulla metus metus vel tincidunt sed euismod nibh Quisque volutpat.</p>
                    </div>
                    <div class="text-center mt-12">
                        <a href="#" class="btn-white hover:-translate-y-[3px]">Join Now</a>
                    </div>
                </div>
                <div class="py-10 px-[25px] relative">
                    <div class="text-center">
                        <h6 class="text-dark/40 leading-5">Unlimited Plan</h6>
                    </div>
                    <div class="mt-10 text-center">
                        <h1 class="mb-0 text-[56px] font-semibold">$49<sub class="text-custom text-sm">/Per Month</sub></h1>
                    </div>
                    <div class="w-full h-[1px] bg-[#efefef] my-10"></div>
                    <div class="text-dark/50 px-[30px] text-center">
                        <p class="mb-0 leading-[1.5]">Nulla metus metus vel tincidunt sed euismod nibh Quisque volutpat.</p>
                    </div>
                    <div class="text-center mt-12">
                        <a href="#" class="btn-custom-light">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Price -->

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

    <!-- Start Contact -->
    <section class="py-20 bg-[url('../images/contact.jpg')] relative bg-cover">
        <div class="absolute inset-0 w-full h-full bg-dark/50"></div>
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="bg-white md:py-20 md:px-[60px] px-5 py-[60px] relative max-w-[600px] md:ml-0 mx-auto rounded">
                    <div class="text-center">
                        <h2 class="font-bold text-[32px] md:text-[40px] capitalize mb-2 relative z-10"><span class="bg-[#dff1f0] h-[70px] w-[70px] inline-block absolute rounded-full -z-10 -top-[15px]"></span>Still Need Help?</h2>
                        <p class="mx-auto text-lg max-w-[600px] mt-6">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                        <div class="pt-12">
                            <button class="btn-custom w-3/4" onclick="toggleModal('modal-id')">Get In Touch</button>
                        </div>
                        <div>
                            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
                                <div class="relative w-full my-6 mx-auto max-w-[500px]">
                                    <div class="rounded relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                        <div class="flex items-center justify-between p-4 border-b border-[#dee2e6]">
                                            <h3 class="text-xl font-bold">
                                                Contact Us
                                            </h3>
                                            <button class="ml-auto bg-transparent border-0 text-dark" onclick="toggleModal('modal-id')">
                                                <span class="bg-transparent stroke-dark block">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-dark">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                      </svg>
                                                      
                                                </span>
                                            </button>
                                        </div>
                                        <div class="relative p-3 flex-auto">
                                            <form class="space-y-6">
                                                <div>
                                                    <input type="text" class="form-input bg-[#f8f9fa] border !border-[#edf0f3] focus:!border-custom" placeholder="Your name..." required="">
                                                </div>
                                                <div>
                                                    <input type="email" class="form-input bg-[#f8f9fa] border !border-[#edf0f3] focus:!border-custom" placeholder="Your email..." required="">
                                                </div>
                                                <div>
                                                    <input type="text" class="form-input bg-[#f8f9fa] border !border-[#edf0f3] focus:!border-custom" placeholder="Your Subject.." required="">
                                                </div>
                                                <div>
                                                    <textarea rows="4" class="form-input bg-[#f8f9fa] border !border-[#edf0f3] focus:!border-custom h-auto" rows="4" placeholder="Your message..." required=""></textarea>        
                                                </div>
                                                <button class="btn-custom w-full" type="submit">Send Message</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden fixed inset-0 z-40 bg-dark/60" id="modal-id-backdrop"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

    <?php include 'theme/includes/footer.php';?>

    <!-- All Javascript -->
    <!-- Accordion Js -->
    <script src="<?= $Wcms->asset("js/accordion.min.js") ?>"></script>
    
    <!-- Swiper Js -->
    <script src="<?= $Wcms->asset("js/swiper-bundle.min.js") ?>"></script>

    <!-- Tobii Js -->
    <script src="<?= $Wcms->asset("js/tobii.min.js") ?>"></script>

    <!-- Custom Js   -->
    <script src="<?= $Wcms->asset("js/custom.js") ?>"></script>

    <script>
        // Accordion
        new Accordion('.accordion-container', {
        duration: 200,
        });
        // Swiper
        var swiper = new Swiper(".client-side", {
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 30,
            delay: 3000,
            autoHeight: true,
            pagination: {
                el: ".swiper-pagination",
            },
        });

        // Tobii
        const tobii = new Tobii()
    </script>

    <!-- Admin JavaScript. More JS libraries can be added below -->
    <?= $Wcms->js() ?>
</body>

</html>