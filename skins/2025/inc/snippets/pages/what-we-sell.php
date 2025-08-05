
<section class="mb-4">
    <div class="row">
        <div class="col-12 col-md-6 feature-content bg-brand-teal">
            <h1 class="color-white"><?=$page['h1']?></h1>
            <p class="color-white">CIS sells the products it purchases both domestically and internationally, including closeouts, problematic inventory, low-cost imports, and everyday continuity lines. Our offerings encompass both shelf-stable grocery items and health & beauty care products.</p>
        </div>
        <div class="col-12 col-md-6 bg-hero_3 bg-cover feature-bg">
            &nbsp;
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container ruled-rows">

        <div id="closeouts" class="row">
            <div class="col-md-6 pe-md-5 mb-5 mb-md-0 d-none d-sm-block">
                <img src="/templates/cis/skins/2025/assets/images/sm/RF_Canned__veg.png" alt="Closeouts" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>Closeouts</h2>
                <h3>Show great value</h3>
                <p>CIS has an excellent track record in the closeout food industry. You name the reason you have a frozen or dry grocery item available – and odds are we have dealt with it.</p>
                <p>Several of our people have experience dating to the late 80’s. CIS is one of a very few companies who will buy a large inventory [100 truckloads or more] of closeout product without having to pre-sell the inventory first. At our warehouse in MN, CIS carries a large inventory of closeouts, and invites any vendor to visit us at any time. Our expertise has been utilized by small vendors all the way up to the largest food companies in the world. Some of our recent deals include 1 pallet of olive oil to 122 TL’s of canned peas, and we are always looking for more.</p>
                <p>We will work with you on your time frame and your terms. We adhere to the EXACT restrictions on every closeout deal, and pride ourselves on burying sensitive labels. We have a long track record with some of the largest private labels in the US.</p>
                <p>CIS also does well with “Name Brand “ closeout inventories. Our Non-Retail channels have allowed us to put “Name Brand” products into areas that do not affect their regular channels.</p>
            </div>
        </div>

    </div>

    <?
    require_once $this->inc.'snippets/banners/privatelabels.php';
    ?>

    <div class="container ruled-rows">

        <div id="continuity-lines" class="row">
            <div class="col-md-6 pe-md-5 mb-5 mb-md-0">
                <img src="/templates/cis/skins/2025/assets/images/sm/blurred_grocery.jpg" alt="Continuity Lines" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>Continuity Lines</h2>
                <h3>Everyday convenience</h3>
                <p>Although a lot of time and energy goes into purchasing the best possible closeouts, excess inventories, overruns, etc for our customers, CIS has evolved into much more of a limited assortment wholesaler. Over the years our product selection has grown to meet the needs of our ever growing customer base. We strive to carry a wide assortment of high volume every day items that you can mix in with the closeout deals you will find on our inventory list.</p>
                <p>Whether you are buying for one store or a hundred, please let us know if there is a value line of products you think we should be carrying. Our willing and experienced buying staff will gladly do the research on our end to see if we can make a new line work for our distribution.</p>
                <p>If you are a manufacturer producing a high volume price conscious line, please contact anyone on the CIS sales team to discuss the possibility of doing business together.</p>
            </div>
        </div>

        <div id="low-cost-imports" class="row">
            <div class="col-md-6 pe-md-5 mb-5 mb-md-0">
                <img src="/templates/cis/skins/2025/assets/images/sm/grains.jpg" alt="Low Cost Imports" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>Low Cost Imports</h2>
                <h3>Price relief on dry grocery items</h3>
                <p>While closeouts and continuity lines make up the bulk of the items we inventory in our warehouse, low cost import items provide us the avenue to carry high volume items that we are unable to currently source domestically.</p>
                <p>We have strong business relationships with several successful import companies as well as numerous manufacturer direct contacts that quote us prices delivered into our warehouse outside of Minneapolis/St. Paul, Minnesota.</p>
                <p>Our imported products from Asia, South America, Central America, Europe, The Middle East and Canada are of first rate quality that compare to the national brands at a fraction of the price.</p>
                <p>We invite international manufacturers and importers to contact us directly to discuss your item or a line of products for us to consider for our limited assortment wholesale grocery business.</p>
            </div>
        </div>

  </div>
</section>

<?
require_once $this->inc.'snippets/banners/shippingyard.php';
require_once $this->inc.'snippets/sections/section-6.php';
?>



<script>
  $(document).ready(function () {
    if (window.location.hash) {
      const target = $(window.location.hash);
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 600); // adjust speed if needed
      }
    }
  });
</script>
