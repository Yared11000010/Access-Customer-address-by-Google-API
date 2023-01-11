@extends('fontend.layout')
@section('content')
<section class="page_title corner-title overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Shop</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Shop
                    </li>
                </ol>
                <div class="divider-15 d-none d-xl-block"></div>
            </div>
        </div>
    </div>
</section>
<div class="main-content my-lg-5  my-md-2">
    <!--shop  area start-->
    <div class="main_shop_content shop_inverse_content mt-lg-5 mt-md-3">
        <div class="divider-top-lg"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-12 ">
                    <div class="card px-2 py-4 px-md-4 py-md-3 bg-white shadow rounded">
                        <!--sidebar widget start-->
                        <aside class="sidebar_content shop_sidebar">
                            <div class="content_inner">
                                                                <div class="content_list content_categories">
                                    <h3>Categories</h3>
                                    <ul>
                                                                                                                                                                <li class="content_sub_categories sub_categories1">
                                            <input type="checkbox" class="custom-control-input cats" id="cat-87" value="coffee-product-1" hidden="">
                                            <a class=""><label class="custom-control-label" for="cat-87">Coffee Product</label></a>
                                                                                                                                                                                                                                                                    </li>
                                        <br>
                                                                                                                                                                                                        <li class="content_sub_categories sub_categories2">
                                            <input type="checkbox" class="custom-control-input cats" id="cat-32" value="fast-food-1" hidden="">
                                            <a class=""><label class="custom-control-label" for="cat-32"> Fast Food</label></a>
                                                                                                                                                                                                                                                                    </li>
                                        <br>
                                                                                                                                                                                                        <li class="content_sub_categories sub_categories3">
                                            <input type="checkbox" class="custom-control-input cats" id="cat-29" value="home-supplies-utilities-stationery-1" hidden="">
                                            <a class=""><label class="custom-control-label" for="cat-29"> Home Supplies, Utilities &amp; Stationery</label></a>
                                                                                                                                                                                                                                                                    </li>
                                        <br>
                                                                                                                                                                                                        <li class="content_sub_categories sub_categories4">
                                            <input type="checkbox" class="custom-control-input cats" id="cat-30" value="beverages-1" hidden="">
                                            <a class=""><label class="custom-control-label" for="cat-30">Beverages</label></a>
                                                                                                                                                                                                                                                                    </li>
                                        <br>
                                                                                                                                                                                                        <li class="content_sub_categories sub_categories5">
                                            <input type="checkbox" class="custom-control-input cats" id="cat-28" value="baby-need-s-1" hidden="">
                                            <a class=""><label class="custom-control-label" for="cat-28"> Baby Need's</label></a>
                                                                                                                                                                                                                                                                    </li>
                                        <br>
                                                                                                                                                                                                        <li class="content_sub_categories sub_categories6">
                                            <input type="checkbox" class="custom-control-input cats" id="cat-31" value="vegetables-1" hidden="">
                                            <a class=""><label class="custom-control-label" for="cat-31">Vegetables</label></a>
                                                                                                                                                                                                                                                                    </li>
                                        <br>
                                                                                                                                                            </ul>
                                </div>
                                                                <br>
                                <div class="content_list content_filter">
                                    <h3>Filter by price</h3>
                                    <form action="#" method="GET" id="filter">
                                        <input type="hidden" name="s" value="">
                                        <input type="hidden" name="section" value="">
                                        <input type="hidden" name="category" value="">
                                        <input type="hidden" name="sub-category" value="">
                                        <input type="hidden" name="sort" value="">
                                        <input type="hidden" name="discount_filter" value="">
                                        <input type="hidden" name="out_of_stock" value="">
                                        <div>
                                            <h5 class="mb-3 name title-sec">Price</h5>
                                            <div class="row">
                                                <div class="col">
                                                    <div id="slider-range" data-min="4" data-max="3249" data-selected-min="4" data-selected-max="3249" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 100%;"></a></div>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="number" name="min_price" value="4" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <input type="number" name="max_price" value="3249" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <br>
                                                    <button type="submit" name="submit" class="btn btn-primary btn-block">Filter</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!--sidebar widget end-->
                </div>
                <div class="col-xl-9 col-lg-8 col-12 mt-3 mt-lg-0">
                    <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow rounded mb-3">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--shop wrapper start-->
                        <!--shop toolbar start-->
                        
                        <div class="shop_toolbar_content">
                            <div class="shop_toolbar_btn">
                                <button data-role="grid-view" type="button" class="active btn-grid-view" data-toggle="tooltip" title="" data-bs-original-title="grid" aria-label="grid"></button>
                                <button data-role="list-view" type="button" class="btn-list-view" data-toggle="tooltip" title="" data-bs-original-title="List" aria-label="List"></button>
                                <p>12 Items out of 59 Items</p>
                            </div>
                            <div class="">
                                <select name="orderby" id="sort" class="relevant_sort">
                                    <option value=""> Relevent </option>
                                    <option value="new">Sort by Newness</option>
                                    <option value="old">Sort by Oldness</option>
                                    <option value="low">Sort by price:low to high</option>
                                    <option value="high">Sort by price:high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                                        <!--shop toolbar end-->
                    
                    <div class="row right_shop_content grid-view">
                                                                        <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="single_product_content  py-4  py-md-3 bg-white shadow rounded mb-3">
                                                                <div class="inner_product_content">

                                    <a class="img_content" href="product/britannia-rusk-toastea-bake-rusk-1.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/1250-2022-04-06.jpg" alt="https://ecartvendor.wrteam.co.in/upload/images/1250-2022-04-06.jpg" src="index.htmlpublic/images/placeholder.png"></a>

                                    <div class="share_links inner product_data">
                                                                                <form action="https://ecartmultivendorweb.thewrteam.in/cart/single/add" method="POST">
                                            <input type="hidden" class="id" name="id" value="456" data-id="456">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-845" data-min="1" min="1" max="999814" data-max="999814" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="845" name="varient" value="845" data-price="$ 30" data-mrp="Free" data-savings="" checked="">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-846" data-min="1" min="1" max="30000001" data-max="30000001" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="846" name="varient" value="846" data-price="$ 70" data-mrp="$ 90" data-savings="23 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="britannia-rusk-toastea-bake-rusk-1" data-slug="britannia-rusk-toastea-bake-rusk-1">
                                            <ul>
                                                                                                <li class="productmodal" data-bs-toggle="modal" data-bs-target="#modal_box"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a></li>
                                                                                                <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                                <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="456"></a></li>
                                                                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="product_content inner_grid_content">
                                    <h4 class="product_name">
                                        <a href="product/britannia-rusk-toastea-bake-rusk-1.html"> Britannia Rusk Toastea Bake ... </a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price" id="price_456"><!--Tax Including Price--> $ 35.4</span>
                                        <span class="old_price" id="mrp_456"></span>
                                                                            </div>
                                </div>
                                <div class="product_content inner_list_content">
                                    <h4 class="product_name"><a href="product/britannia-rusk-toastea-bake-rusk-1.html">Britannia Rusk Toastea Bake Rusk</a></h4>
                                    <div class="price_box">
                                        <span class="current_price"><!--Tax Including Price--> $ 35.4</span>
                                        <span class="old_price"></span>
                                                                            </div>
                                    <div class="product_desc">
                                        <p> About this item


	Goodness of wheat cherished in the crunchy texture of these bake rusks to fill each rusk with ample nutrition and nourishment
	Infused elaichi essence releas... </p>
                                    </div>
                                    <div class="share_links list_action_right inner product_data">
                                        <ul>
                                                                                        <input type="hidden" class="id" name="id" value="456" data-id="456">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-845" data-min="1" min="1" max="999814" data-max="999814" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="845" name="varient" value="845" data-price="$ 30" data-mrp="Free" data-savings="" checked="">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-846" data-min="1" min="1" max="30000001" data-max="30000001" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="846" name="varient" value="846" data-price="$ 70" data-mrp="$ 90" data-savings="23 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="britannia-rusk-toastea-bake-rusk-1" data-slug="britannia-rusk-toastea-bake-rusk-1">
                                                                                        <li class="add_to_cart productmodal" data-bs-toggle="modal" data-bs-target="#modal_box" data-tab="login"><a title="Add to cart">Add to cart</a></li>
                                                                                        <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                    <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="456"></a></li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                                                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="single_product_content  py-4  py-md-3 bg-white shadow rounded mb-3">
                                                                <div class="inner_product_content">

                                    <a class="img_content" href="product/bikano-navratan-mixture-1.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/4468-2022-04-06.jpg" alt="https://ecartvendor.wrteam.co.in/upload/images/4468-2022-04-06.jpg" src="index.htmlpublic/images/placeholder.png"></a>

                                    <div class="share_links inner product_data">
                                                                                <form action="https://ecartmultivendorweb.thewrteam.in/cart/single/add" method="POST">
                                            <input type="hidden" class="id" name="id" value="457" data-id="457">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-847" data-min="1" min="1" max="999984" data-max="999984" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="847" name="varient" value="847" data-price="$ 179" data-mrp="$ 247" data-savings="28 % Off" checked="">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-848" data-min="1" min="1" max="10000000001" data-max="10000000001" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="848" name="varient" value="848" data-price="$ 300" data-mrp="$ 500" data-savings="40 % Off" checked="">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-849" data-min="1" min="1" max="1000000001" data-max="1000000001" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="849" name="varient" value="849" data-price="$ 700" data-mrp="$ 1000" data-savings="30 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="bikano-navratan-mixture-1" data-slug="bikano-navratan-mixture-1">
                                            <ul>
                                                                                                <li class="productmodal" data-bs-toggle="modal" data-bs-target="#modal_box"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a></li>
                                                                                                <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                                <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="457"></a></li>
                                                                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="product_content inner_grid_content">
                                    <h4 class="product_name">
                                        <a href="product/bikano-navratan-mixture-1.html"> Bikano Navratan Mixture </a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price" id="price_457"><!--Offer Price--> $ 179</span>
                                        <span class="old_price" id="mrp_457"><s><!--M.R.P.:--> $ 247</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_457">28 % Off</span>
                                                                            </div>
                                </div>
                                <div class="product_content inner_list_content">
                                    <h4 class="product_name"><a href="product/bikano-navratan-mixture-1.html">Bikano Navratan Mixture</a></h4>
                                    <div class="price_box">
                                        <span class="current_price"><!--Offer Price--> $ 179</span>
                                        <span class="old_price"><s><!--M.R.P.:--> $ 247</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_457">28 % Off</span>
                                                                            </div>
                                    <div class="product_desc">
                                        <p> About this item


	Desh ka namkeen
	Added Preservatives : No


&nbsp;


	
		
			Flavour
			Spicy
		
		
			Brand
			Bikano
		
		
			Weight
			1000 Grams
		
		
		... </p>
                                    </div>
                                    <div class="share_links list_action_right inner product_data">
                                        <ul>
                                                                                        <input type="hidden" class="id" name="id" value="457" data-id="457">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-847" data-min="1" min="1" max="999984" data-max="999984" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="847" name="varient" value="847" data-price="$ 179" data-mrp="$ 247" data-savings="28 % Off" checked="">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-848" data-min="1" min="1" max="10000000001" data-max="10000000001" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="848" name="varient" value="848" data-price="$ 300" data-mrp="$ 500" data-savings="40 % Off" checked="">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-849" data-min="1" min="1" max="1000000001" data-max="1000000001" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="849" name="varient" value="849" data-price="$ 700" data-mrp="$ 1000" data-savings="30 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="bikano-navratan-mixture-1" data-slug="bikano-navratan-mixture-1">
                                                                                        <li class="add_to_cart productmodal" data-bs-toggle="modal" data-bs-target="#modal_box" data-tab="login"><a title="Add to cart">Add to cart</a></li>
                                                                                        <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                    <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="457"></a></li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                                                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="single_product_content  py-4  py-md-3 bg-white shadow rounded mb-3">
                                                                <div class="inner_product_content">

                                    <a class="img_content" href="product/himalaya-baby-basket-gift-pack-violet.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/7494-2022-04-07.jpg" alt="https://ecartvendor.wrteam.co.in/upload/images/7494-2022-04-07.jpg" src="index.htmlpublic/images/placeholder.png"></a>

                                    <div class="share_links inner product_data">
                                                                                <form action="https://ecartmultivendorweb.thewrteam.in/cart/single/add" method="POST">
                                            <input type="hidden" class="id" name="id" value="482" data-id="482">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-878" data-min="1" min="1" max="999985" data-max="999985" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="878" name="varient" value="878" data-price="$ 777" data-mrp="$ 950" data-savings="19 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="himalaya-baby-basket-gift-pack-violet" data-slug="himalaya-baby-basket-gift-pack-violet">
                                            <ul>
                                                                                                <li class="add_to_cart addtocart_single" data-id="482" data-varient="878" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a></li>
                                                                                                <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                                <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="482"></a></li>
                                                                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="product_content inner_grid_content">
                                    <h4 class="product_name">
                                        <a href="product/himalaya-baby-basket-gift-pack-violet.html"> Himalaya Baby Basket Gift Pa... </a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price" id="price_482"><!--Offer Price--> $ 777</span>
                                        <span class="old_price" id="mrp_482"><s><!--M.R.P.:--> $ 950</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_482">19 % Off</span>
                                                                            </div>
                                </div>
                                <div class="product_content inner_list_content">
                                    <h4 class="product_name"><a href="product/himalaya-baby-basket-gift-pack-violet.html">Himalaya Baby Basket Gift Pack (Violet)</a></h4>
                                    <div class="price_box">
                                        <span class="current_price"><!--Offer Price--> $ 777</span>
                                        <span class="old_price"><s><!--M.R.P.:--> $ 950</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_482">19 % Off</span>
                                                                            </div>
                                    <div class="product_desc">
                                        <p> 
	This gift basket for kids is also ideal for your own little one's use
	Baby massage oil 100ml, baby powder 200g, diaper rash cream 20g, gentle baby wipes 72 count, gentle b... </p>
                                    </div>
                                    <div class="share_links list_action_right inner product_data">
                                        <ul>
                                                                                        <input type="hidden" class="id" name="id" value="482" data-id="482">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-878" data-min="1" min="1" max="999985" data-max="999985" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="878" name="varient" value="878" data-price="$ 777" data-mrp="$ 950" data-savings="19 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="himalaya-baby-basket-gift-pack-violet" data-slug="himalaya-baby-basket-gift-pack-violet">
                                                                                        <li class="add_to_cart addtocart_single" data-id="482" data-varient="878" data-qty="1"><a title="Add to cart">Add to cart</a></li>
                                                                                        <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                    <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="482"></a></li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                                                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="single_product_content  py-4  py-md-3 bg-white shadow rounded mb-3">
                                                                <div class="content_label">
                                    <span class="sold-out">Out of Stock</span>
                                </div>
                                                                <div class="inner_product_content">

                                    <a class="img_content" href="product/tata-q-cheesy-chicken-pasta-1.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/1959-2022-04-07.jpg" alt="https://ecartvendor.wrteam.co.in/upload/images/1959-2022-04-07.jpg" src="index.htmlpublic/images/placeholder.png"></a>

                                    <div class="share_links inner product_data">
                                                                                                                                        <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="474"></a></li>
                                                                                            
                                        
                                    </div>
                                </div>
                                <div class="product_content inner_grid_content">
                                    <h4 class="product_name">
                                        <a href="product/tata-q-cheesy-chicken-pasta-1.html"> Tata Q Cheesy Chicken Pasta </a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price" id="price_474"><!--Tax Including Offer Price--> $ 271.4</span>
                                        <span class="old_price" id="mrp_474"><s><!--M.R.P.:--> $ 295</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_474">8 % Off</span>
                                                                            </div>
                                </div>
                                <div class="product_content inner_list_content">
                                    <h4 class="product_name"><a href="product/tata-q-cheesy-chicken-pasta-1.html">Tata Q Cheesy Chicken Pasta</a></h4>
                                    <div class="price_box">
                                        <span class="current_price"><!--Tax Including Offer Price--> $ 271.4</span>
                                        <span class="old_price"><s><!--M.R.P.:--> $ 295</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_474">8 % Off</span>
                                                                            </div>
                                    <div class="product_desc">
                                        <p> About this product\n\n\n	Instant solution for all your food cravings\n	Heat for just 60 seconds and your delicious meal is ready! No additional ingredients or cooking required!\n	P... </p>
                                    </div>
                                    <div class="share_links list_action_right inner product_data">
                                        <ul>
                                                                                                                                    <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="474"></a></li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                                                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="single_product_content  py-4  py-md-3 bg-white shadow rounded mb-3">
                                                                <div class="inner_product_content">

                                    <a class="img_content" href="product/pampers-all-round-protection-pants-xl-112.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/6225-2022-04-07.jpg" alt="https://ecartvendor.wrteam.co.in/upload/images/6225-2022-04-07.jpg" src="index.htmlpublic/images/placeholder.png"></a>

                                    <div class="share_links inner product_data">
                                                                                <form action="https://ecartmultivendorweb.thewrteam.in/cart/single/add" method="POST">
                                            <input type="hidden" class="id" name="id" value="475" data-id="475">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-871" data-min="1" min="1" max="999913" data-max="999913" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="871" name="varient" value="871" data-price="$ 1655" data-mrp="$ 2000" data-savings="18 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="pampers-all-round-protection-pants-xl-112" data-slug="pampers-all-round-protection-pants-xl-112">
                                            <ul>
                                                                                                <li class="add_to_cart addtocart_single" data-id="475" data-varient="871" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a></li>
                                                                                                <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                                <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="475"></a></li>
                                                                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="product_content inner_grid_content">
                                    <h4 class="product_name">
                                        <a href="product/pampers-all-round-protection-pants-xl-112.html"> Pampers All round Protection... </a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price" id="price_475"><!--Offer Price--> $ 1655</span>
                                        <span class="old_price" id="mrp_475"><s><!--M.R.P.:--> $ 2000</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_475">18 % Off</span>
                                                                            </div>
                                </div>
                                <div class="product_content inner_list_content">
                                    <h4 class="product_name"><a href="product/pampers-all-round-protection-pants-xl-112.html">Pampers All round Protection Pants (XL) 112</a></h4>
                                    <div class="price_box">
                                        <span class="current_price"><!--Offer Price--> $ 1655</span>
                                        <span class="old_price"><s><!--M.R.P.:--> $ 2000</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_475">18 % Off</span>
                                                                            </div>
                                    <div class="product_desc">
                                        <p> About this item


	New Pampers all round-protection pants – best diapers for 2X Protection for your baby
	Anti Rash&nbsp;– India’s only diapers containing Lotion with Aloe Ve... </p>
                                    </div>
                                    <div class="share_links list_action_right inner product_data">
                                        <ul>
                                                                                        <input type="hidden" class="id" name="id" value="475" data-id="475">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-871" data-min="1" min="1" max="999913" data-max="999913" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="871" name="varient" value="871" data-price="$ 1655" data-mrp="$ 2000" data-savings="18 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="pampers-all-round-protection-pants-xl-112" data-slug="pampers-all-round-protection-pants-xl-112">
                                                                                        <li class="add_to_cart addtocart_single" data-id="475" data-varient="871" data-qty="1"><a title="Add to cart">Add to cart</a></li>
                                                                                        <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                    <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="475"></a></li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                                                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="single_product_content  py-4  py-md-3 bg-white shadow rounded mb-3">
                                                                <div class="inner_product_content">

                                    <a class="img_content" href="product/himalaya-gentle-baby-wipes-72-pieces-pack-of-2.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/7941-2022-04-07.jpg" alt="https://ecartvendor.wrteam.co.in/upload/images/7941-2022-04-07.jpg" src="index.htmlpublic/images/placeholder.png"></a>

                                    <div class="share_links inner product_data">
                                                                                <form action="https://ecartmultivendorweb.thewrteam.in/cart/single/add" method="POST">
                                            <input type="hidden" class="id" name="id" value="477" data-id="477">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-873" data-min="1" min="1" max="10000001" data-max="10000001" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="873" name="varient" value="873" data-price="$ 250" data-mrp="$ 350" data-savings="29 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="himalaya-gentle-baby-wipes-72-pieces-pack-of-2" data-slug="himalaya-gentle-baby-wipes-72-pieces-pack-of-2">
                                            <ul>
                                                                                                <li class="add_to_cart addtocart_single" data-id="477" data-varient="873" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a></li>
                                                                                                <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                                <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="477"></a></li>
                                                                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="product_content inner_grid_content">
                                    <h4 class="product_name">
                                        <a href="product/himalaya-gentle-baby-wipes-72-pieces-pack-of-2.html"> Himalaya Gentle Baby Wipes -... </a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price" id="price_477"><!--Offer Price--> $ 250</span>
                                        <span class="old_price" id="mrp_477"><s><!--M.R.P.:--> $ 350</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_477">29 % Off</span>
                                                                            </div>
                                </div>
                                <div class="product_content inner_list_content">
                                    <h4 class="product_name"><a href="product/himalaya-gentle-baby-wipes-72-pieces-pack-of-2.html">Himalaya Gentle Baby Wipes - 72 Pieces (Pack of 2)</a></h4>
                                    <div class="price_box">
                                        <span class="current_price"><!--Offer Price--> $ 250</span>
                                        <span class="old_price"><s><!--M.R.P.:--> $ 350</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_477">29 % Off</span>
                                                                            </div>
                                    <div class="product_desc">
                                        <p> About this item


	Wipe gently with the power of herbs
	Indian Aloe: Moisturizes the skin
	Indian Lotus: Keeps skin soft and supple
	Free from Alcohols, Silicones &amp; Lanolin, ... </p>
                                    </div>
                                    <div class="share_links list_action_right inner product_data">
                                        <ul>
                                                                                        <input type="hidden" class="id" name="id" value="477" data-id="477">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-873" data-min="1" min="1" max="10000001" data-max="10000001" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="873" name="varient" value="873" data-price="$ 250" data-mrp="$ 350" data-savings="29 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="himalaya-gentle-baby-wipes-72-pieces-pack-of-2" data-slug="himalaya-gentle-baby-wipes-72-pieces-pack-of-2">
                                                                                        <li class="add_to_cart addtocart_single" data-id="477" data-varient="873" data-qty="1"><a title="Add to cart">Add to cart</a></li>
                                                                                        <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                    <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="477"></a></li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                                                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="single_product_content  py-4  py-md-3 bg-white shadow rounded mb-3">
                                                                <div class="inner_product_content">

                                    <a class="img_content" href="product/little-s-baby-pants-diapers-with-wetness-indicator-and-12-hours-absorption.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/4097-2022-04-07.jpg" alt="https://ecartvendor.wrteam.co.in/upload/images/4097-2022-04-07.jpg" src="index.htmlpublic/images/placeholder.png"></a>

                                    <div class="share_links inner product_data">
                                                                                <form action="https://ecartmultivendorweb.thewrteam.in/cart/single/add" method="POST">
                                            <input type="hidden" class="id" name="id" value="478" data-id="478">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-874" data-min="1" min="1" max="999961" data-max="999961" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="874" name="varient" value="874" data-price="$ 1099" data-mrp="$ 1596" data-savings="32 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="little-s-baby-pants-diapers-with-wetness-indicator-and-12-hours-absorption" data-slug="little-s-baby-pants-diapers-with-wetness-indicator-and-12-hours-absorption">
                                            <ul>
                                                                                                <li class="add_to_cart addtocart_single" data-id="478" data-varient="874" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a></li>
                                                                                                <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                                <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="478"></a></li>
                                                                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="product_content inner_grid_content">
                                    <h4 class="product_name">
                                        <a href="product/little-s-baby-pants-diapers-with-wetness-indicator-and-12-hours-absorption.html"> Little's Baby Pants Diapers ... </a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price" id="price_478"><!--Offer Price--> $ 1099</span>
                                        <span class="old_price" id="mrp_478"><s><!--M.R.P.:--> $ 1596</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_478">32 % Off</span>
                                                                            </div>
                                </div>
                                <div class="product_content inner_list_content">
                                    <h4 class="product_name"><a href="product/little-s-baby-pants-diapers-with-wetness-indicator-and-12-hours-absorption.html">Little's Baby Pants Diapers with Wetness Indicator and 12 Hours Absorption</a></h4>
                                    <div class="price_box">
                                        <span class="current_price"><!--Offer Price--> $ 1099</span>
                                        <span class="old_price"><s><!--M.R.P.:--> $ 1596</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_478">32 % Off</span>
                                                                            </div>
                                    <div class="product_desc">
                                        <p> About this item


	Choosing the right diaper size based on baby weight is important. The diaper capacity may vary among babies depending on the volume of pee and posture
	Upto ... </p>
                                    </div>
                                    <div class="share_links list_action_right inner product_data">
                                        <ul>
                                                                                        <input type="hidden" class="id" name="id" value="478" data-id="478">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-874" data-min="1" min="1" max="999961" data-max="999961" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="874" name="varient" value="874" data-price="$ 1099" data-mrp="$ 1596" data-savings="32 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="little-s-baby-pants-diapers-with-wetness-indicator-and-12-hours-absorption" data-slug="little-s-baby-pants-diapers-with-wetness-indicator-and-12-hours-absorption">
                                                                                        <li class="add_to_cart addtocart_single" data-id="478" data-varient="874" data-qty="1"><a title="Add to cart">Add to cart</a></li>
                                                                                        <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                    <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="478"></a></li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                                                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="single_product_content  py-4  py-md-3 bg-white shadow rounded mb-3">
                                                                <div class="inner_product_content">

                                    <a class="img_content" href="product/fresh-potato-500gm-promo-1.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/2169-2022-04-07.jpg" alt="https://ecartvendor.wrteam.co.in/upload/images/2169-2022-04-07.jpg" src="index.htmlpublic/images/placeholder.png"></a>

                                    <div class="share_links inner product_data">
                                                                                <form action="https://ecartmultivendorweb.thewrteam.in/cart/single/add" method="POST">
                                            <input type="hidden" class="id" name="id" value="499" data-id="499">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-895" data-min="1" min="1" max="154" data-max="154" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="895" name="varient" value="895" data-price="$ 28" data-mrp="$ 30" data-savings="7 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="fresh-potato-500gm-promo-1" data-slug="fresh-potato-500gm-promo-1">
                                            <ul>
                                                                                                <li class="add_to_cart addtocart_single" data-id="499" data-varient="895" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a></li>
                                                                                                <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                                <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="499"></a></li>
                                                                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="product_content inner_grid_content">
                                    <h4 class="product_name">
                                        <a href="product/fresh-potato-500gm-promo-1.html"> Fresh Potato, 500gm. (Promo) </a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price" id="price_499"><!--Offer Price--> $ 28</span>
                                        <span class="old_price" id="mrp_499"><s><!--M.R.P.:--> $ 30</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_499">7 % Off</span>
                                                                            </div>
                                </div>
                                <div class="product_content inner_list_content">
                                    <h4 class="product_name"><a href="product/fresh-potato-500gm-promo-1.html">Fresh Potato, 500gm. (Promo)</a></h4>
                                    <div class="price_box">
                                        <span class="current_price"><!--Offer Price--> $ 28</span>
                                        <span class="old_price"><s><!--M.R.P.:--> $ 30</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_499">7 % Off</span>
                                                                            </div>
                                    <div class="product_desc">
                                        <p> About this item


	High source of fibre
	Good source of Vitamin B6, C, Potassium, and Magnesium
	Can be used in multiple dishes and snacks
	&nbsp;
 </p>
                                    </div>
                                    <div class="share_links list_action_right inner product_data">
                                        <ul>
                                                                                        <input type="hidden" class="id" name="id" value="499" data-id="499">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-895" data-min="1" min="1" max="154" data-max="154" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="895" name="varient" value="895" data-price="$ 28" data-mrp="$ 30" data-savings="7 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="fresh-potato-500gm-promo-1" data-slug="fresh-potato-500gm-promo-1">
                                                                                        <li class="add_to_cart addtocart_single" data-id="499" data-varient="895" data-qty="1"><a title="Add to cart">Add to cart</a></li>
                                                                                        <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                    <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="499"></a></li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                                                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="single_product_content  py-4  py-md-3 bg-white shadow rounded mb-3">
                                                                <div class="inner_product_content">

                                    <a class="img_content" href="product/fresh-beans-french-1.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/3326-2022-04-07.jpg" alt="https://ecartvendor.wrteam.co.in/upload/images/3326-2022-04-07.jpg" src="index.htmlpublic/images/placeholder.png"></a>

                                    <div class="share_links inner product_data">
                                                                                <form action="https://ecartmultivendorweb.thewrteam.in/cart/single/add" method="POST">
                                            <input type="hidden" class="id" name="id" value="505" data-id="505">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-901" data-min="1" min="1" max="100000001" data-max="100000001" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="901" name="varient" value="901" data-price="$ 14" data-mrp="$ 24" data-savings="42 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="fresh-beans-french-1" data-slug="fresh-beans-french-1">
                                            <ul>
                                                                                                <li class="add_to_cart addtocart_single" data-id="505" data-varient="901" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a></li>
                                                                                                <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                                <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="505"></a></li>
                                                                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="product_content inner_grid_content">
                                    <h4 class="product_name">
                                        <a href="product/fresh-beans-french-1.html"> Fresh Beans French </a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price" id="price_505"><!--Offer Price--> $ 14</span>
                                        <span class="old_price" id="mrp_505"><s><!--M.R.P.:--> $ 24</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_505">42 % Off</span>
                                                                            </div>
                                </div>
                                <div class="product_content inner_list_content">
                                    <h4 class="product_name"><a href="product/fresh-beans-french-1.html">Fresh Beans French</a></h4>
                                    <div class="price_box">
                                        <span class="current_price"><!--Offer Price--> $ 14</span>
                                        <span class="old_price"><s><!--M.R.P.:--> $ 24</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_505">42 % Off</span>
                                                                            </div>
                                    <div class="product_desc">
                                        <p> About this item


	Populary used with potatoes and onions in making curries
	Good source of protein, thiamin, riboflavin, niacin, calcium, iron, magnesium, phosphorus, potassiu... </p>
                                    </div>
                                    <div class="share_links list_action_right inner product_data">
                                        <ul>
                                                                                        <input type="hidden" class="id" name="id" value="505" data-id="505">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-901" data-min="1" min="1" max="100000001" data-max="100000001" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="901" name="varient" value="901" data-price="$ 14" data-mrp="$ 24" data-savings="42 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="fresh-beans-french-1" data-slug="fresh-beans-french-1">
                                                                                        <li class="add_to_cart addtocart_single" data-id="505" data-varient="901" data-qty="1"><a title="Add to cart">Add to cart</a></li>
                                                                                        <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                    <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="505"></a></li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                                                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="single_product_content  py-4  py-md-3 bg-white shadow rounded mb-3">
                                                                <div class="inner_product_content">

                                    <a class="img_content" href="product/fresh-curry-leaves-1.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/4129-2022-04-07.jpg" alt="https://ecartvendor.wrteam.co.in/upload/images/4129-2022-04-07.jpg" src="index.htmlpublic/images/placeholder.png"></a>

                                    <div class="share_links inner product_data">
                                                                                <form action="https://ecartmultivendorweb.thewrteam.in/cart/single/add" method="POST">
                                            <input type="hidden" class="id" name="id" value="506" data-id="506">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-902" data-min="1" min="1" max="10000001" data-max="10000001" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="902" name="varient" value="902" data-price="$ 10" data-mrp="$ 23" data-savings="57 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="fresh-curry-leaves-1" data-slug="fresh-curry-leaves-1">
                                            <ul>
                                                                                                <li class="add_to_cart addtocart_single" data-id="506" data-varient="902" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a></li>
                                                                                                <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                                <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="506"></a></li>
                                                                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="product_content inner_grid_content">
                                    <h4 class="product_name">
                                        <a href="product/fresh-curry-leaves-1.html"> Fresh Curry Leaves </a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price" id="price_506"><!--Offer Price--> $ 10</span>
                                        <span class="old_price" id="mrp_506"><s><!--M.R.P.:--> $ 23</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_506">57 % Off</span>
                                                                            </div>
                                </div>
                                <div class="product_content inner_list_content">
                                    <h4 class="product_name"><a href="product/fresh-curry-leaves-1.html">Fresh Curry Leaves</a></h4>
                                    <div class="price_box">
                                        <span class="current_price"><!--Offer Price--> $ 10</span>
                                        <span class="old_price"><s><!--M.R.P.:--> $ 23</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_506">57 % Off</span>
                                                                            </div>
                                    <div class="product_desc">
                                        <p> About this item


	Good source of carbohydrates, fiber, calcium, phosphorous, and irons
	Rich in vitamins A, B, C, and E
	Curry leaves help improve digestion
 </p>
                                    </div>
                                    <div class="share_links list_action_right inner product_data">
                                        <ul>
                                                                                        <input type="hidden" class="id" name="id" value="506" data-id="506">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-902" data-min="1" min="1" max="10000001" data-max="10000001" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="902" name="varient" value="902" data-price="$ 10" data-mrp="$ 23" data-savings="57 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="fresh-curry-leaves-1" data-slug="fresh-curry-leaves-1">
                                                                                        <li class="add_to_cart addtocart_single" data-id="506" data-varient="902" data-qty="1"><a title="Add to cart">Add to cart</a></li>
                                                                                        <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                    <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="506"></a></li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                                                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="single_product_content  py-4  py-md-3 bg-white shadow rounded mb-3">
                                                                <div class="inner_product_content">

                                    <a class="img_content" href="product/american-2-pieces.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/4559-2022-04-07.jpg" alt="https://ecartvendor.wrteam.co.in/upload/images/4559-2022-04-07.jpg" src="index.htmlpublic/images/placeholder.png"></a>

                                    <div class="share_links inner product_data">
                                                                                <form action="https://ecartmultivendorweb.thewrteam.in/cart/single/add" method="POST">
                                            <input type="hidden" class="id" name="id" value="507" data-id="507">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-903" data-min="1" min="1" max="999957" data-max="999957" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="903" name="varient" value="903" data-price="$ 22" data-mrp="$ 47" data-savings="54 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="american-2-pieces" data-slug="american-2-pieces">
                                            <ul>
                                                                                                <li class="add_to_cart addtocart_single" data-id="507" data-varient="903" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a></li>
                                                                                                <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                                <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="507"></a></li>
                                                                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="product_content inner_grid_content">
                                    <h4 class="product_name">
                                        <a href="product/american-2-pieces.html"> Fresh Sweet Corn - American ... </a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price" id="price_507"><!--Offer Price--> $ 22</span>
                                        <span class="old_price" id="mrp_507"><s><!--M.R.P.:--> $ 47</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_507">54 % Off</span>
                                                                            </div>
                                </div>
                                <div class="product_content inner_list_content">
                                    <h4 class="product_name"><a href="product/american-2-pieces.html">Fresh Sweet Corn - American (2 Pieces)</a></h4>
                                    <div class="price_box">
                                        <span class="current_price"><!--Offer Price--> $ 22</span>
                                        <span class="old_price"><s><!--M.R.P.:--> $ 47</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_507">54 % Off</span>
                                                                            </div>
                                    <div class="product_desc">
                                        <p> About this item


	Rich in vitamins B3 and B6
	It has a nice earthy flavour and a crunchy texture
	It is widely used to make salads
 </p>
                                    </div>
                                    <div class="share_links list_action_right inner product_data">
                                        <ul>
                                                                                        <input type="hidden" class="id" name="id" value="507" data-id="507">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-903" data-min="1" min="1" max="999957" data-max="999957" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="903" name="varient" value="903" data-price="$ 22" data-mrp="$ 47" data-savings="54 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="american-2-pieces" data-slug="american-2-pieces">
                                                                                        <li class="add_to_cart addtocart_single" data-id="507" data-varient="903" data-qty="1"><a title="Add to cart">Add to cart</a></li>
                                                                                        <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                    <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="507"></a></li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                                                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="single_product_content  py-4  py-md-3 bg-white shadow rounded mb-3">
                                                                <div class="inner_product_content">

                                    <a class="img_content" href="product/fresh-broccoli-1.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/8348-2022-04-07.jpg" alt="https://ecartvendor.wrteam.co.in/upload/images/8348-2022-04-07.jpg" src="index.htmlpublic/images/placeholder.png"></a>

                                    <div class="share_links inner product_data">
                                                                                <form action="https://ecartmultivendorweb.thewrteam.in/cart/single/add" method="POST">
                                            <input type="hidden" class="id" name="id" value="508" data-id="508">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-904" data-min="1" min="1" max="999968" data-max="999968" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="904" name="varient" value="904" data-price="$ 19" data-mrp="$ 35" data-savings="46 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="fresh-broccoli-1" data-slug="fresh-broccoli-1">
                                            <ul>
                                                                                                <li class="add_to_cart addtocart_single" data-id="508" data-varient="904" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a></li>
                                                                                                <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                                <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="508"></a></li>
                                                                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="product_content inner_grid_content">
                                    <h4 class="product_name">
                                        <a href="product/fresh-broccoli-1.html"> Fresh Broccoli </a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price" id="price_508"><!--Offer Price--> $ 19</span>
                                        <span class="old_price" id="mrp_508"><s><!--M.R.P.:--> $ 35</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_508">46 % Off</span>
                                                                            </div>
                                </div>
                                <div class="product_content inner_list_content">
                                    <h4 class="product_name"><a href="product/fresh-broccoli-1.html">Fresh Broccoli</a></h4>
                                    <div class="price_box">
                                        <span class="current_price"><!--Offer Price--> $ 19</span>
                                        <span class="old_price"><s><!--M.R.P.:--> $ 35</s></span>
                                                                                <span class="discount-percentage discount-product" id="savings_508">46 % Off</span>
                                                                            </div>
                                    <div class="product_desc">
                                        <p> About this item


                                        Fresh, hygienic and natural
                                        Good source of Vitamin A, B6, C, and Magnesium
                                        Can be used in salads or soups
                                        Store in cool and dry place, away from direct ... </p>
                                    </div>
                                    <div class="share_links list_action_right inner product_data">
                                        <ul>
                                                                                        <input type="hidden" class="id" name="id" value="508" data-id="508">
                                                                                        <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" id="qty-904" data-min="1" min="1" max="999968" data-max="999968" data-max-allowed="11" value="1" readonly="" data-qty="1">
                                            <input type="hidden" class="varient" data-varient="904" name="varient" value="904" data-price="$ 19" data-mrp="$ 35" data-savings="46 % Off" checked="">
                                                                                        <input type="hidden" class="slug" value="fresh-broccoli-1" data-slug="fresh-broccoli-1">
                                                                                        <li class="add_to_cart addtocart_single" data-id="508" data-varient="904" data-qty="1"><a title="Add to cart">Add to cart</a></li>
                                                                                        <li class="quick_button productmodal"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="fas fa-eye"></span></a></li>
                                                                                                                                    <li class="wishlist"><a title="Add to Wishlist" class="save" data-id="508"></a></li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                    </div>

                                                            <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                                                                                                                <li class="">
                                    <a href="shop2679.html?page=1" class="active">1  </a>
                                </li>
                                                                                                                                                                <li class="">
                                    <a href="shop4658.html?page=2" class="btn btn-primary pull-right">2  </a>
                                </li>
                                                                                                                                                                <li class="">
                                    <a href="shop9ba9.html?page=3" class="btn btn-primary pull-right">3  </a>
                                </li>
                                                                                                                                                                <li class="">
                                    <a href="shopfdb0.html?page=4" class="btn btn-primary pull-right">4  </a>
                                </li>
                                                                                                                                                                <li class="">
                                    <a href="shopaf4d.html?page=5" class="btn btn-primary pull-right">5  </a>
                                </li>
                                                                                            </ul>
                        </div>
                    </div>
                                                            <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
        <div class="divider-bottom-lg"></div>
    </div>
    <!--shop  area end-->
</div>
@endsection