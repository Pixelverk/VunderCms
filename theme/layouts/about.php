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

    <!-- Start About Section -->
    <section class="py-20 bg-white">
        <div class="container">
            <div class="grid grid-cols-1">
                <div>
                    <img src="<?= $Wcms->asset("images/about_page_img.jpg") ?>" class="rounded-[30px] mx-auto block" alt="">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 mt-16 gap-[30px]">
                <div>
                    <h2 class="font-bold capitalize text-[32px]"><?= $Wcms->block('heroHeading', 'We’re an aspiring team of coders and creatives') ?></h2>
                    <div class="mt-6">
                        <p class="mb-1 text-muted"><i class="mdi mdi-check-circle text-custom text-xl relative top-[2px]"></i> We Commit To Our Craft.</p>
                        <p class="mb-0 text-muted"><i class="mdi mdi-check-circle text-custom text-xl relative top-[2px]"></i> We Dig Deeper In Workspace.</p>
                    </div>
                </div>
                <div>
                    <p class="text-muted mb-4">Today, we're proud to empower individuals and small business owners around the world. Everyone deserves a website, and we're excited to see what you create. Simplify Communications, Elevate Experiences, Engage And Inspire People Everywhere.</p>
                    <p class="text-muted">Good Design And Good Relationships Come From Collaboration. We're Excited To Start A Visual Dialogue, Learn About You, And Make Something Beautiful Together.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

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

    <!-- Start Funfact -->
    <section class="py-20 bg-white">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <h2 class="font-bold text-[32px] md:text-[40px] capitalize mb-2 relative z-10"><span class="bg-[#dff1f0] h-[70px] w-[70px] inline-block absolute rounded-full -z-10 -top-[15px]"></span>Trust Us And Feel Free To Try Our Service</h2>
                    <p class="text-muted mx-auto text-lg max-w-[600px] mt-6">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mt-16 gap-[30px]">
                <div class="text-center">
                    <div class="h-14 w-14 leading-[56px] bg-custom/20 rounded-[5px] inline-block">
                        <img src="<?= $Wcms->asset("images/icon/chart-bar.svg") ?>" alt="" class="mx-auto inline-block w-7">
                    </div>
                    <div class="fun_content mt-6">
                        <h1 class="font-bold mb-0 text-[46px]"     
                        data-vanilla-counter 
                        data-start-at="0" 
                        data-end-at="99.45" 
                        data-time="1000" 
                        data-delay="0" 
                        data-format="{}%"></h1>
                        <p class="mt-4 text-muted">Their separate existence is a myth. For science, sport, etc, their pronunciation.</p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="h-14 w-14 leading-[56px] bg-custom/20 rounded-[5px] inline-block">
                        <img src="<?= $Wcms->asset("images/icon/dollar.svg") ?>" alt="" class="mx-auto inline-block w-7">
                    </div>
                    <div class="fun_content mt-6">
                        <h1 class="font-bold mb-0 text-[46px]"
                        data-vanilla-counter 
                        data-start-at="0" 
                        data-end-at="12" 
                        data-time="3000" 
                        data-delay="0" 
                        data-format="{}M"></h1>
                        <p class="mt-4 text-muted">Their separate existence is a myth. For science, sport, etc, their pronunciation.</p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="h-14 w-14 leading-[56px] bg-custom/20 rounded-[5px] inline-block">
                        <img src="<?= $Wcms->asset("images/icon/clock.svg") ?>" alt="" class="mx-auto inline-block w-7">
                    </div>
                    <div class="fun_content mt-6">
                        <h1 class="font-bold mb-0 text-[46px]"
                        data-vanilla-counter 
                        data-start-at="2800" 
                        data-end-at="3200" 
                        data-time="3000" 
                        data-delay="0" 
                        data-format="{}+"
                        ></h1>
                        <p class="mt-4 text-muted">Their separate existence is a myth. For science, sport, etc, their pronunciation.</p>
                    </div>
                </div>
                <div class="text-center">
                    <div class="h-14 w-14 leading-[56px] bg-custom/20 rounded-[5px] inline-block">
                        <img src="<?= $Wcms->asset("images/icon/flower.svg") ?>" alt="" class="mx-auto inline-block w-7">
                    </div>
                    <div class="fun_content mt-6">
                        <h1 class="font-bold mb-0 text-[46px]"
                        data-vanilla-counter 
                        data-start-at="22" 
                        data-end-at="45" 
                        data-time="3000" 
                        data-delay="0" 
                        data-format="R{}"
                        ></h1>
                        <p class="mt-4 text-muted">Their separate existence is a myth. For science, sport, etc, their pronunciation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Funfact -->

    <!-- Start Team -->
    <section class="py-20 bg-white">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <h2 class="font-bold text-[32px] md:text-[40px] capitalize mb-2 relative z-10"><span class="bg-[#dff1f0] h-[70px] w-[70px] inline-block absolute rounded-full -z-10 -top-[15px]"></span>Team Better Crew For Your Startup</h2>
                    <p class="text-muted mx-auto text-lg max-w-[600px] mt-6">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-16 gap-[30px]">
                <div class="text-center">
                    <img src="<?= $Wcms->asset("images/team/1.jpg") ?>" class="mx-auto rounded-[30px] block">
                    <div class="mt-4">
                        <h4 class="font-bold text-2xl">Hannah Sharpe</h4>
                        <p class="text-muted mt-2">CEO, Co-Founder</p>
                    </div>
                    <div class="bg-[#e7e7e7] h-px w-4/5 mx-auto my-5"></div>
                    <div>
                        <ul class="flex items-center space-x-3 justify-center">
                            <li class="shrink-0">
                                <a href="#" class="text-dark hover:text-custom duration-300 px-2 leading-10 rounded-full block text-[26px] text-center"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="shrink-0">
                                <a href="#" class="text-dark hover:text-custom duration-300 px-2 leading-10 rounded-full block text-[26px] text-center"><i class="mdi mdi-google-plus"></i></a>
                            </li>
                            <li class="shrink-0">
                                <a href="#" class="text-dark hover:text-custom duration-300 px-2 leading-10 rounded-full block text-[26px] text-center"><i class="mdi mdi-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <img src="<?= $Wcms->asset("images/team/2.jpg") ?>" class="mx-auto rounded-[30px] block">
                    <div class="mt-4">
                        <h4 class="font-bold text-2xl">Clee Carter</h4>
                        <p class="text-muted mt-2">Managing Partner</p>
                    </div>
                    <div class="bg-[#e7e7e7] h-px w-4/5 mx-auto my-5"></div>
                    <div>
                        <ul class="flex items-center space-x-3 justify-center">
                            <li class="shrink-0">
                                <a href="#" class="text-dark hover:text-custom duration-300 px-2 leading-10 rounded-full block text-[26px] text-center"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="shrink-0">
                                <a href="#" class="text-dark hover:text-custom duration-300 px-2 leading-10 rounded-full block text-[26px] text-center"><i class="mdi mdi-google-plus"></i></a>
                            </li>
                            <li class="shrink-0">
                                <a href="#" class="text-dark hover:text-custom duration-300 px-2 leading-10 rounded-full block text-[26px] text-center"><i class="mdi mdi-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <img src="<?= $Wcms->asset("images/team/3.jpg") ?>" class="mx-auto rounded-[30px] block">
                    <div class="mt-4">
                        <h4 class="font-bold text-2xl">Mary Merrill</h4>
                        <p class="text-muted mt-2">Operations Director</p>
                    </div>
                    <div class="bg-[#e7e7e7] h-px w-4/5 mx-auto my-5"></div>
                    <div>
                        <ul class="flex items-center space-x-3 justify-center">
                            <li class="shrink-0">
                                <a href="#" class="text-dark hover:text-custom duration-300 px-2 leading-10 rounded-full block text-[26px] text-center"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="shrink-0">
                                <a href="#" class="text-dark hover:text-custom duration-300 px-2 leading-10 rounded-full block text-[26px] text-center"><i class="mdi mdi-google-plus"></i></a>
                            </li>
                            <li class="shrink-0">
                                <a href="#" class="text-dark hover:text-custom duration-300 px-2 leading-10 rounded-full block text-[26px] text-center"><i class="mdi mdi-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <img src="<?= $Wcms->asset("images/team/4.jpg") ?>" class="mx-auto rounded-[30px] block">
                    <div class="mt-4">
                        <h4 class="font-bold text-2xl">Kyle Pratt</h4>
                        <p class="text-muted mt-2">Software Engineer</p>
                    </div>
                    <div class="bg-[#e7e7e7] h-px w-4/5 mx-auto my-5"></div>
                    <div>
                        <ul class="flex items-center space-x-3 justify-center">
                            <li class="shrink-0">
                                <a href="#" class="text-dark hover:text-custom duration-300 px-2 leading-10 rounded-full block text-[26px] text-center"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="shrink-0">
                                <a href="#" class="text-dark hover:text-custom duration-300 px-2 leading-10 rounded-full block text-[26px] text-center"><i class="mdi mdi-google-plus"></i></a>
                            </li>
                            <li class="shrink-0">
                                <a href="#" class="text-dark hover:text-custom duration-300 px-2 leading-10 rounded-full block text-[26px] text-center"><i class="mdi mdi-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team -->

    <!-- Start Client Logo -->
    <section class="pt-20 pb-36 bg-white relative">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <h2 class="font-bold text-[32px] md:text-[40px] capitalize mb-2 relative z-10"><span class="bg-[#dff1f0] h-[70px] w-[70px] inline-block absolute rounded-full -z-10 -top-[15px]"></span><span data-vanilla-counter 
                        data-start-at="9600" 
                        data-end-at="10000" 
                        data-time="1000" 
                        data-delay="0" 
                        data-format="{}+"></span> Companies</h2>
                    <p class="text-muted mx-auto text-lg max-w-[600px] mt-6">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 bg-custom rounded mt-12 py-10 gap-[30px] items-center">
                <div class="p-5">
                    <img src="<?= $Wcms->asset("images/clients/5.png") ?>" alt="logo-img" class="mx-auto block">
                </div>
                <div class="p-5">
                    <img src="<?= $Wcms->asset("images/clients/6.png") ?>" alt="logo-img" class="mx-auto block">
                </div>
                <div class="p-5">
                    <img src="<?= $Wcms->asset("images/clients/7.png") ?>" alt="logo-img" class="mx-auto block">
                </div>
                <div class="p-5">
                    <img src="<?= $Wcms->asset("images/clients/8.png") ?>" alt="logo-img" class="mx-auto block">
                </div>
            </div>
        </div>
    </section>
    <!-- End Client Logo -->

    <?php include 'theme/includes/footer.php';?>

    <!-- All Javascript -->
    <!-- vanilla counter -->
    <script src="<?= $Wcms->asset("js/vanilla-counter.js") ?>"></script>

    <!-- Tobii Js -->
    <script src="<?= $Wcms->asset("js/tobii.min.js") ?>"></script>

    <!-- Custom Js   -->
    <script src="<?= $Wcms->asset("js/custom.js") ?>"></script>

    <script>
        // VanillaCounter
        VanillaCounter();

        // Tobii
        const tobii = new Tobii()
    </script>

    <!-- Admin JavaScript. More JS libraries can be added below -->
    <?= $Wcms->js() ?>
</body>

</html>