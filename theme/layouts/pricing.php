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

    <!-- Start Price -->
    <section class="py-20 bg-white relative">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <h2 class="font-bold text-[32px] md:text-[40px] capitalize mb-2 relative z-10"><span class="bg-[#dff1f0] h-[70px] w-[70px] inline-block absolute rounded-full -z-10 -top-[15px]"></span>Choose The Right Plan For Your Landik</h2>
                    <p class="text-muted mx-auto text-lg max-w-[600px] mt-6">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px] mt-16 items-center">
                <div id="tab-buttons" class="space-y-[22px] ">
                    <a href="javascript:void(0)" onclick="changeTab(event, 0)" class="sm:flex active-price-tab space-y-[14px] block py-5 px-4 bg-white text-dark border-2 rounded-lg border-[#e7e7e7]/50 justify-between items-center">
                       <div class="text-center sm:text-left">
                            <h5 class="font-bold text-xl">Starter</h5>
                            <p class="bg-custom/20 text-custom py-1.5 px-3 rounded-full mt-2 inline-block text-[13px] active-price-tab-budges">20% Save</p>
                        </div>
                        <h2 class="text-[42px] text-center sm:text-right font-bold">$29<sub class="font-normal text-xs relative -bottom-1">/Per Month</sub></h2>
                    </a>
                    <a href="javascript:void(0)" onclick="changeTab(event, 1)" class="sm:flex space-y-[14px] block py-5 px-4 bg-white text-dark border-2 rounded-lg border-[#e7e7e7]/50 justify-between items-center">
                        <div class="text-center sm:text-left">
                             <h5 class="font-bold text-xl">Enterprice</h5>
                             <p class="bg-custom/20 text-custom py-1.5 px-3 rounded-full mt-2 inline-block text-[13px] active-price-tab-budges">25% Save</p>
                         </div>
                         <h2 class="text-[42px] text-center sm:text-right font-bold">$59<sub class="font-normal text-xs relative -bottom-1">/Per Month</sub></h2>
                     </a>
                     <a href="javascript:void(0)" onclick="changeTab(event, 2)" class="sm:flex space-y-[14px] block py-5 px-4 bg-white text-dark border-2 rounded-lg border-[#e7e7e7]/50 justify-between items-center">
                        <div class="text-center sm:text-left">
                             <h5 class="font-bold text-xl">Starter</h5>
                             <p class="bg-custom/20 text-custom py-1.5 px-3 rounded-full mt-2 inline-block text-[13px] active-price-tab-budges">30% Save</p>
                         </div>
                         <h2 class="text-[42px] text-center sm:text-right font-bold">$89<sub class="font-normal text-xs relative -bottom-1">/Per Month</sub></h2>
                     </a>
                </div>
                <div id="tab-panels">
                    <div class="md:max-w-[400px] mx-auto border border-[#e7e7e7]/60 relative overflow-hidden py-[60px] px-[46px] rounded-lg">
                        <div class="bg-custom/[0.07] w-[200px] h-[400px] absolute -top-[2px] inline-block -right-[130px] rounded-[20px] -rotate-[34deg]"></div>
                        <div class="space-y-[26px]">
                            <p class="mt-0 font-bold"><i class="mdi mdi-check-circle text-custom mr-1"></i> 2GB Cloud Storage</p>
                            <p class="mt-0 font-bold"><i class="mdi mdi-check-circle text-custom mr-1"></i> 100GB CDN Bandwidth</p>
                            <p class="mt-0 font-bold"><i class="mdi mdi-check-circle text-custom mr-1"></i> 98.88% Uptime Guarantee</p>
                            <p class="mt-0 font-bold"><i class="mdi mdi-check-circle text-custom mr-1"></i> Email Power Tools</p>
                        </div>
                        <div class="mt-12 text-right">
                            <a href="#" class="btn-custom rounded-full">Get Started</a>
                        </div>
                    </div>
                    <div class="md:max-w-[400px] hidden mx-auto border border-[#e7e7e7]/60 relative overflow-hidden py-[60px] px-[46px] rounded-lg">
                        <div class="bg-custom/[0.07] w-[200px] h-[400px] absolute -top-[2px] inline-block -right-[130px] rounded-[20px] -rotate-[34deg]"></div>
                        <div class="space-y-[26px]">
                            <p class="mt-0 font-bold"><i class="mdi mdi-check-circle text-custom mr-1"></i> 20GB Cloud Storage</p>
                            <p class="mt-0 font-bold"><i class="mdi mdi-check-circle text-custom mr-1"></i> 1TB CDN Bandwidth</p>
                            <p class="mt-0 font-bold"><i class="mdi mdi-check-circle text-custom mr-1"></i> 99.95% Uptime Guarantee</p>
                            <p class="mt-0 font-bold"><i class="mdi mdi-check-circle text-custom mr-1"></i> Personal Account Manager</p>
                        </div>
                        <div class="mt-12 text-right">
                            <a href="#" class="btn-custom rounded-full">Get Started</a>
                        </div>
                    </div>
                    <div class="md:max-w-[400px] hidden mx-auto border border-[#e7e7e7]/60 relative overflow-hidden py-[60px] px-[46px] rounded-lg">
                        <div class="bg-custom/[0.07] w-[200px] h-[400px] absolute -top-[2px] inline-block -right-[130px] rounded-[20px] -rotate-[34deg]"></div>
                        <div class="space-y-[26px]">
                            <p class="mt-0 font-bold"><i class="mdi mdi-check-circle text-custom mr-1"></i> 100TB CDN Bandwidth</p>
                            <p class="mt-0 font-bold"><i class="mdi mdi-check-circle text-custom mr-1"></i> API/Formulas Support*</p>
                            <p class="mt-0 font-bold"><i class="mdi mdi-check-circle text-custom mr-1"></i> 99.99% Uptime Guarantee</p>
                            <p class="mt-0 font-bold"><i class="mdi mdi-check-circle text-custom mr-1"></i> Enterprise SLA</p>
                        </div>
                        <div class="mt-12 text-right">
                            <a href="#" class="btn-custom rounded-full">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Price -->

    <!-- Start Pricing -->
    <section class="py-20">
        <div class="container">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <h2 class="font-bold text-[32px] md:text-[40px] capitalize mb-2 relative z-10"><span class="bg-[#dff1f0] h-[70px] w-[70px] inline-block absolute rounded-full -z-10 -top-[15px]"></span>Simple Plan For Everyone</h2>
                    <p class="text-muted mx-auto text-lg max-w-[600px] mt-6">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 mt-16">
                <div id="tab-buttons-two" class="flex items-center gap-3 justify-center">
                    <a href="javascript:void(0)" onclick="changePrice(event, 0)" class="active-price-tab font-semibold rounded-[5px] block py-2 px-4 bg-white text-dark border-2 border-[#e7e7e7]/50">
                        Monthly
                    </a>
                    <a href="javascript:void(0)" onclick="changePrice(event, 1)" class="font-semibold rounded-[5px] block py-2 px-4 bg-white text-dark border-2 border-[#e7e7e7]/50">
                        Yearly
                    </a>
                </div>
            </div>
            <div id="tab-panels-two">
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px] mt-12">
                        <div class="border-2 text-center border-[#f1f1f1] relative overflow-hidden py-12 px-6 rounded-lg">
                            <h4 class="font-bold text-2xl">Landik Starter</h4>
                            <div class="py-6 space-x-2.5">
                                <i class="mdi mdi-star text-custom h-[30px] w-[30px] leading-[30px] rounded-md inline-block bg-custom/20"></i>
                            </div>
                            <p class="text-muted max-w-[300px] mx-auto">Nulla metus metus vel tincidunt sed euismod nibh volutpat.</p>
                            <div class="h-px w-full bg-[#e7e7e7] my-12"></div>
                            <h3 class="font-bold mb-1 text-[40px]">$19.99</h3>
                            <p class="text-muted">Per Year</p>
                            <div class="mt-12">
                                <a href="#" class="btn-custom">Choose Plan</a>
                            </div>
                        </div>
                        <div class="border-2 text-center border-[#f1f1f1] relative overflow-hidden py-12 px-6 rounded-lg">
                            <h4 class="font-bold text-2xl">Landik Enterprice</h4>
                            <div class="py-6 space-x-2.5">
                                <i class="mdi mdi-star text-custom h-[30px] w-[30px] leading-[30px] rounded-md inline-block bg-custom/20"></i>
                                <i class="mdi mdi-star text-custom h-[30px] w-[30px] leading-[30px] rounded-md inline-block bg-custom/20"></i>
                            </div>
                            <p class="text-muted max-w-[300px] mx-auto">Nulla metus metus vel tincidunt sed euismod nibh volutpat.</p>
                            <div class="h-px w-full bg-[#e7e7e7] my-12"></div>
                            <h3 class="font-bold mb-1 text-[40px]">$29.99</h3>
                            <p class="text-muted">Per Year</p>
                            <div class="mt-12">
                                <a href="#" class="btn-custom">Choose Plan</a>
                            </div>
                        </div>
                        <div class="border-2 text-center border-[#f1f1f1] relative overflow-hidden py-12 px-6 rounded-lg">
                            <h4 class="font-bold text-2xl">Landik Unlimited</h4>
                            <div class="py-6 space-x-2.5">
                                <i class="mdi mdi-star text-custom h-[30px] w-[30px] leading-[30px] rounded-md inline-block bg-custom/20"></i>
                                <i class="mdi mdi-star text-custom h-[30px] w-[30px] leading-[30px] rounded-md inline-block bg-custom/20"></i>
                                <i class="mdi mdi-star text-custom h-[30px] w-[30px] leading-[30px] rounded-md inline-block bg-custom/20"></i>
                            </div>
                            <p class="text-muted max-w-[300px] mx-auto">Nulla metus metus vel tincidunt sed euismod nibh volutpat.</p>
                            <div class="h-px w-full bg-[#e7e7e7] my-12"></div>
                            <h3 class="font-bold mb-1 text-[40px]">$49.99</h3>
                            <p class="text-muted">Per Year</p>
                            <div class="mt-12">
                                <a href="#" class="btn-custom">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px] mt-12">
                        <div class="border-2 text-center border-[#f1f1f1] relative overflow-hidden py-12 px-6 rounded-lg">
                            <h4 class="font-bold text-2xl">Landik Starter</h4>
                            <div class="py-6 space-x-2.5">
                                <i class="mdi mdi-star text-custom h-[30px] w-[30px] leading-[30px] rounded-md inline-block bg-custom/20"></i>
                            </div>
                            <p class="text-muted max-w-[300px] mx-auto">Nulla metus metus vel tincidunt sed euismod nibh volutpat.</p>
                            <div class="h-px w-full bg-[#e7e7e7] my-12"></div>
                            <h3 class="font-bold mb-1 text-[40px]">$199.99</h3>
                            <p class="text-muted">Per Year</p>
                            <div class="mt-12">
                                <a href="#" class="btn-custom">Choose Plan</a>
                            </div>
                        </div>
                        <div class="border-2 text-center border-[#f1f1f1] relative overflow-hidden py-12 px-6 rounded-lg">
                            <h4 class="font-bold text-2xl">Landik Enterprice</h4>
                            <div class="py-6 space-x-2.5">
                                <i class="mdi mdi-star text-custom h-[30px] w-[30px] leading-[30px] rounded-md inline-block bg-custom/20"></i>
                                <i class="mdi mdi-star text-custom h-[30px] w-[30px] leading-[30px] rounded-md inline-block bg-custom/20"></i>
                            </div>
                            <p class="text-muted max-w-[300px] mx-auto">Nulla metus metus vel tincidunt sed euismod nibh volutpat.</p>
                            <div class="h-px w-full bg-[#e7e7e7] my-12"></div>
                            <h3 class="font-bold mb-1 text-[40px]">$299.99</h3>
                            <p class="text-muted">Per Year</p>
                            <div class="mt-12">
                                <a href="#" class="btn-custom">Choose Plan</a>
                            </div>
                        </div>
                        <div class="border-2 text-center border-[#f1f1f1] relative overflow-hidden py-12 px-6 rounded-lg">
                            <h4 class="font-bold text-2xl">Landik Unlimited</h4>
                            <div class="py-6 space-x-2.5">
                                <i class="mdi mdi-star text-custom h-[30px] w-[30px] leading-[30px] rounded-md inline-block bg-custom/20"></i>
                                <i class="mdi mdi-star text-custom h-[30px] w-[30px] leading-[30px] rounded-md inline-block bg-custom/20"></i>
                                <i class="mdi mdi-star text-custom h-[30px] w-[30px] leading-[30px] rounded-md inline-block bg-custom/20"></i>
                            </div>
                            <p class="text-muted max-w-[300px] mx-auto">Nulla metus metus vel tincidunt sed euismod nibh volutpat.</p>
                            <div class="h-px w-full bg-[#e7e7e7] my-12"></div>
                            <h3 class="font-bold mb-1 text-[40px]">$499.99</h3>
                            <p class="text-muted">Per Year</p>
                            <div class="mt-12">
                                <a href="#" class="btn-custom">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing -->

    <?php include 'theme/includes/footer.php';?>

    <!-- All Javascript -->

    <!-- Custom Js   -->
    <script src="<?= $Wcms->asset("js/custom.js") ?>"></script>

    <script>
        // Price Tab One
        function changeTab(event, index) {
            var tabButtons = document.getElementById('tab-buttons').children;
            var tabPanels = document.getElementById('tab-panels').children;

            for (var i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove('active-price-tab');
                tabPanels[i].classList.add('hidden');
            }
            tabButtons[index].classList.add('active-price-tab');
            tabPanels[index].classList.remove('hidden');
        }

        // Price Tab Two
        function changePrice(event, index) {
            var tabButtons = document.getElementById('tab-buttons-two').children;
            var tabPanels = document.getElementById('tab-panels-two').children;

            for (var i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove('active-price-tab');
                tabPanels[i].classList.add('hidden');
            }
            tabButtons[index].classList.add('active-price-tab');
            tabPanels[index].classList.remove('hidden');
        }
    </script>

    <!-- Admin JavaScript. More JS libraries can be added below -->
    <?= $Wcms->js() ?>

</body>

</html>