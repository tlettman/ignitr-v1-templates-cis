
<section class="mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 feature-content bg-mid-green">
                <h1 class="color-white"><?=$page['h1']?></h1>
                <p class="color-white">CIS utilizes the products it purchases from manufacturers worldwide to support small mom-and-pop grocery stores, non-profits, discount retailers, and various other channels.</p>
            </div>
            <div class="col-12 col-md-6 bg-hero_2 bg-cover feature-bg">
                &nbsp;
            </div>
        </div>
    </div>
</section>

<section class="py-5">
  <div class="container ruled-rows">

    <div id="non-profits" class="row">

        <div class="col-md-6 pe-md-5 mb-5 mb-md-0">
            <img src="/templates/cis/skins/2025/assets/images/sm/volunteer-essential-food.jpg" alt="Our Story" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h2>Non Profits</h2>
            <h3>Food banks, relief/emergency programs, feeding programs</h3>
            <p>CIS provides value-priced items to the non-profit community across the US. This sector includes food banks, relief/emergency programs, and feeding programs.</p>
            <p>These channels allow CIS to provide an avenue for our manufacturing partners to work through some of their most restrictive closeout labels without affecting their regular distribution. Our everyday inventory of over 400 items provides even the smallest food pantries a cost effective means of procuring their most vital needs.</p>
            <p>If you are a manufacturer looking to move a sensitive labeled closeout or a food bank, relief/emergency program, or feeding program looking for more information, please feel free to contact anyone on the CIS sales staff.</p>
        </div>
    </div>

    <div id="price-impact-stores" class="row">
        <div class="col-md-6 pe-md-5 mb-5 mb-md-0">
            <img src="/templates/cis/skins/2025/assets/images/sm/defocused-supermarket.jpg" alt="Our Goal" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h2>Price Impact Stores</h2>
            <h3>Banana box stores, salvage stores, dollar stores, closeout stores</h3>
            <p>CIS is very active in providing products to price impact stores including, Banana Box Stores, Salvage Stores, Closeout Discount Stores and so on. These stores really do NO advertising and are typically off the beaten path and operate with a limited selection of items.</p>
            <p>This retail format depends on purchasing items that allow them to be priced below the big box Grocery stores and traditional discount chains. CIS can offer stores with this format, excellent selection and pricing for a “wall of values”, end cap displays and pallet displays.</p>
            <p>CIS control labels can often be sold for significantly less than the big grocery store chains can offer their own private labeled items. We strive to be the lowest priced provider and are always looking for new customers.</p>
        </div>
    </div>

    <div id="alternative-retail" class="row">
        <div class="col-md-6 pe-md-5 mb-5 mb-md-0">
            <img src="/templates/cis/skins/2025/assets/images/sm/Sale_blurred.png" alt="Our Goal" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h2>Alternative Retail</h2>
            <h3>Mom and pop grocery, fleet and farm, export, deep discount</h3>
            <p>Alternative retail channels make up the bulk of the customers we sell our closeouts, overstocks, discontinued, excess inventories and discount continuity lines to.</p>
            <p>These store groups include dollar/discounts stores, farm & fleet stores, Amish/ Hutterite/Mennonite communities, C-stores and export retail stores which are located across the USA, Canada and Mexico. Many of these stores are positioned in rural areas and are the backbone of discount food sales to smaller communities.</p>
            <p>Since we cover all, or most, of the freight costs on our deliveries, we supply these groups with mixed trucks and mixed pallets that they would otherwise be unable to purchase directly from manufacturers due to limited resources and limited buying power.</p>
            <p>We invite any dollar/discounts stores, farm & fleet stores, Amish/ Hutterite/ Mennonite communities, C-stores and export retail stores to contact us directly as we would love to be your source for discount grocery items at delivered prices.</p>
        </div>
    </div>

    <div id="food-service" class="row">
        <div class="col-md-6 pe-md-5 mb-5 mb-md-0">
            <img src="/templates/cis/skins/2025/assets/images/sm/frozen-vegetables-mix.jpg" alt="Our Goal" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h2>Food Service</h2>
            <p>A portion of our business involves food service opportunities that we come across in our everyday search for retail closeout inventories.</p>
            <p>We have placed items such as 6#10 cans, bulk frozen and dry items, ready to bake and pre-baked pies, french fries, cookie dough pucks, etc… into a variety of feeder programs, correctional institutions, bakeries/deli’s and other food service oriented end users.</p>
            <p>Contact us directly if you have food service items you are looking for help moving or if you are a food service supplier looking for opportunity buys.</p>
        </div>
    </div>


  </div>
</section>

<?
require_once $this->inc.'snippets/banners/lowestpriced.php';
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
