
<div id="page-contact">

    <section class="mb-4">
        <div class="row">
            <div class="col-12 col-md-6 feature-content bg-orange">
                <h1 class="color-white"><?=$page['h1']?></h1>
                <p class="color-white">Don&#39;t hesitate to reach out to us with questions. We are here to answer questions and help fulfill your grocery needs.</p>
            </div>
            <div class="col-12 col-md-6 bg-hero_5 bg-cover feature-bg">
                &nbsp;
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">

            <div class="row">
                <div class="col-12 col-md-6 pe-md-5">
                    <?
                    $this->standaloneEngine( 47 );
                    ?>
                </div>
                <div class="col-12 col-md-6 ps-md-5">

                    <?
                    $page = $this->kablamo( true );
                    echo $page['html'];
                    ?>

                </div>
            </div>


        </div>
    </section>

</div>