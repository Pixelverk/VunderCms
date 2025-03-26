<footer class="bg-themedark pt-[60px] pb-[30px]">
    <div class="container">
        <div class="items-center grid md:grid-cols-2 grid-cols-1 gap-[30px]">
            <div>
                <img src="<?= $Wcms->asset("images/logo-light.png") ?>" alt="" class="h-[30px] mx-auto md:ml-0" />
            </div>
            <div>
                <form class="relative mx-auto md:mr-0 max-w-[380px]">
                    <input type="text" class="py-[14px] px-[15px] w-full text-sm outline-none pr-[150px] pl-5 rounded-[6px] text-white bg-white/[0.04] border border-white/[0.001]" placeholder="Email" />
                    <button type="submit" class="absolute tracking-[1px] font-normal text-[15px] rounded-[5px] capitalize top-1 right-1 outline-none text-sm py-[10px] px-[30px] bg-custom text-white border border-custom">
                        Subcribe
                    </button>
                </form>
            </div>
        </div>
        <div class="bg-white/[0.07] h-[1px] w-full my-10 mt-12"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px] items-center">
            <div>
                <ul class="flex md:flex-row flex-col gap-y-2.5 items-center text-center md:text-left">
                    <li class="text-white hover:text-custom after:hidden duration-300 md:after:inline-block md:after:text-white md:after:mx-5 md:after:top-1 md:after:relative md:after:content-['*']">
                        <a href="#">Demo</a>
                    </li>
                    <li class="text-white hover:text-custom after:hidden duration-300 md:after:inline-block md:after:text-white md:after:mx-5 md:after:top-1 md:after:relative md:after:content-['*']">
                        <a href="#">Pages</a>
                    </li>
                    <li class="text-white hover:text-custom duration-300"><a href="#">Support</a></li>
                </ul>
            </div>
            <div>
                <ul class="flex items-center space-x-3 md:justify-end justify-center">
                    <li>
                        <a href="#" class="text-white w-[38px] h-[38px] leading-[38px] hover:text-custom duration-300 hover:-translate-y-1 rounded-full block bg-white/5 text-lg text-center"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#" class="text-white w-[38px] h-[38px] leading-[38px] hover:text-custom duration-300 hover:-translate-y-1 rounded-full block bg-white/5 text-lg text-center"><i class="mdi mdi-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" class="text-white w-[38px] h-[38px] leading-[38px] hover:text-custom duration-300 hover:-translate-y-1 rounded-full block bg-white/5 text-lg text-center"><i class="mdi mdi-reddit"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-1 mt-4">
            <div class="col-lg-12">
                <div class="text-center mt-4 bg-white/[0.03] py-3.5 px-3 rounded">
                    <p class="text-white">&copy; 2023 Landik. Design and coded by ThemesBoss.</p>
                </div>
            </div>
        </div>
    </div>
</footer>