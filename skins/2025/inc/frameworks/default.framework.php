<header>
    <? 
    $json = '{ "logo_src":"/core/admin/structure/v1/ignitr_logo_120.png", "navbar-nav-class":"ms-auto mb-2 mb-lg-0"}';
    //  "defaultname":"Overview",
    $this->bsResponsiveNav( 1, $json, '5.3' );
    ?>
</header>

<section id="layout">
    <? $this->setLayout() ?>
</section>

<footer>
    <div class="container-fluid">

        <div class="row">
            <div class="col">
                <a href="https://instagram.com" target="_blank"><i class="fa-icon fa-brands fa-square-instagram"></i></a>
                <a href="https://facebook.com" target="_blank"><i class="fa-icon fa-brands fa-facebook"></i></a>
            </div>
            <div class="col text-end">
                <? // $this->widget( 'sparks', 'single', 633 ) ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p class="branding text-center">
                    Site proudly designed and built by <a href="https://space2burn.com" target="_blank" rel="noopener noreferrer">Space2Burn</a> – © 2025 – All Rights Reserved
                </p>
            </div>
        </div>

    </div>
</footer>
