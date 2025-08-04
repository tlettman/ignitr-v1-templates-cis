<header class="position-fixed top-0 start-0 w-100 z-3">
    <div class="position-relative">
        <div id="topbar" class="bg-brand-dark-blue color-white text-end no-margin">
            <? $this->widget( 'sparks', 'single', 638 ) ?>
        </div>

        <? 
        $json = '{ "logo_src":"/templates/cis/skins/2025/assets/logos/CIS_logo.png", "navbar-nav-class":"ms-auto mb-2 mb-lg-0"}';
        //  "defaultname":"Overview",
        $this->bsResponsiveNav( 1, $json, '5.3' );
        ?> 

        <div class="bg-swoosh_solid bg-cover position-absolute z-n1 top-0 start-0 w-100 h-100">&nbsp;</div>
        
    <div>
</header>

<section id="layout">
    <? $this->setLayout() ?>
</section>

<footer class="bg-brand-dark-blue color-white">
    <div class="container-fluid">

        <div class="row">
            <div class="col-6 col-md-2">
                <? $this->simpleNav( 1, 'flex-column align-items-start' ) ?>
            </div>
            <div class="col-6 col-md-2">
                <? $this->widget( 'sparks', 'single', 639 ) ?>
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
