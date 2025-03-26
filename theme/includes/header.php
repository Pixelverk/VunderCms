<?php global $Wcms ?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed w-full horizontal-nav">
        <div class="container">
            <div class="flex items-center justify-between">
                <a class='navbar-brand' href='<?= $Wcms->url() ?>'>
                    <img src="<?= $Wcms->asset("images/logo-dark.png") ?>" class="mr-2 w-[130px]" alt="logo">
                </a>
                <button class="navbar-toggler hidden text-end mobile-menu-button">
                    <span class="navbar-toggler-icon">
                        <i class="ti-menu icon-align-right"></i>
                    </span>
                </button>
                <div class="navbar-collapse flex-1 mobile-menu hidden min-[991px]:block" id="navbarNav">
                    <ul class="navbar-nav justify-end horizontal-menu">
                        <?= $Wcms->menu() ?>
                        <button class="btn btn-sm btn-custom navbar-btn btn-rounded">Call to Action</button>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>