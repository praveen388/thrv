@extends('layout.mainlayout')
@section('content')
@csrf
<div class="container top-nav-container"><nav id="main-nav" class="navbar navbar-justified navbar-default" role="navigation">
<div class="navbar-header btn-group visible-xs visible-sm"><button type="button" class="btn btn-primary pull-left" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span> <i class="icon-reorder"></i> Menu</button> <a class="btn btn-primary pull-right" href="/contact-us"><span class="sr-only">Contact Us</span><i class="icon-phone"></i> Contact</a> <button type="button" class="btn btn-primary pull-right" data-toggle="collapse" data-target=".top-search"> <span class="sr-only">RV Search</span><i class="icon-search"></i> Search</button></div>
<div class="collapse navbar-collapse">


<ul class="nav navbar-nav">
<li class="dropdown"><a data-toggle="dropdown" href="#">New RVs</a><b data-toggle="dropdown"><i class="icon-plus" aria-hidden="true"></i></b>
<ul class="dropdown-menu">
<li><a href="/new-rvs-for-sale">New RVs</a></li>
<li><a href="/brands">Our Brands</a></li>
</ul>
</li>
<li class="dropdown"><a data-toggle="dropdown" href="#">Used RVs</a><b data-toggle="dropdown"><i class="icon-plus" aria-hidden="true"></i></b>
<ul class="dropdown-menu">
<li><a href="/used-rvs-for-sale">Used RVs for Sale</a></li>
<li><a href="/consign-your-rv">Consignments</a></li>
</ul>
</li>
<li class="dropdown"><a data-toggle="dropdown" href="#">Get Financing</a><b data-toggle="dropdown"><i class="icon-plus" aria-hidden="true"></i></b>
<ul class="dropdown-menu">
<li><a href="/rv-financing">RV Financing</a></li>
<li><a href="/rv-financing-pre-approval">Get Approved Now</a></li>
</ul>
</li>
<li><a href="/consign-your-rv">Consignments</a></li>
<li><a href="/rv-specials">Specials</a></li>
<li class="dropdown"><a data-toggle="dropdown" href="#">Parts</a><b data-toggle="dropdown"><i class="icon-plus" aria-hidden="true"></i></b>
<ul class="dropdown-menu">
<li><a href="/rv-parts">Parts</a></li>
<li><a href="/rv-parts-near-me">RV Parts near Me</a></li>
</ul>
</li>
<li class="dropdown"><a data-toggle="dropdown" href="#">Service</a><b data-toggle="dropdown"><i class="icon-plus" aria-hidden="true"></i></b>
<ul class="dropdown-menu">
<li><a href="/rv-service-near-me">RV Service near Me</a></li>
<li><a href="/rv-brake-service-near-me">RV Brake Service</a></li>
<li><a href="/rv-battery-service-near-me">RV Battery Service</a></li>
<li><a href="/splendide-washer-and-dryer-for-rvs">RV Washer/Dryer</a></li>
</ul>
</li>
<li class="dropdown"><a data-toggle="dropdown" href="#">About Us</a><b data-toggle="dropdown"><i class="icon-plus" aria-hidden="true"></i></b>
<ul class="dropdown-menu">
<li><a href="/rv-dealer-near-me">RV Dealer near Me</a></li>
<li><a href="/used-rv-dealer-near-me">Used RV Dealer near Me</a></li>
<li><a href="/rv-reviews-california">RV Reviews</a></li>
<li><a href="/rv-comparisons-california">RV Comparisons</a></li>
<li><a href="/top-rv-manufacturers-california">Top RV Manufacturers California</a></li>
<li><a href="/the-different-types-of-rvs-for-sale-california">Different Types of RVS</a></li>
<li><a href="/blog/">Blog</a></li>
</ul>
</li>
<li class="dropdown"><a data-toggle="dropdown" href="#">Contact Us</a><b data-toggle="dropdown"><i class="icon-plus" aria-hidden="true"></i></b>
<ul class="dropdown-menu">
<li><a href="/contact-us">Contact Us</a></li>
<li><a href="https://www.google.com/maps" target="_blank" rel="noopener">Directions</a></li>
</ul>
</li>
</ul>
</div>
</nav></div>
<div id="top-search-container">
<div class="container">
<div class="collapse top-search">
    <div role="form" id="topSearchForm" class="SearchPanel form-inline">





<div class="form-group SearchRow ConditionWrapper"><label for="condition">New or Used</label><select id="condition" class="form-control condition" name="condition">
<option value="">New and Used</option>
<option value="1">New Only</option>
<option value="0">Used Only</option>
</select></div>


<div class="form-group SearchRow TypesWrapper"><label for="types">RV Type</label>

        <select name="types" id="types" class="form-control DropDownList types">

<option value="" selected="selected">All Types</option>
<option value="3">Destination Trailer</option>
<option value="4">Expandable</option>
<option value="5">Fifth Wheel</option>
<option value="7">Folding Pop-Up Camper</option>
<option value="9">Motor Home Class A</option>
<option value="10">Motor Home Class A - Diesel</option>
<option value="13">Motor Home Class B</option>
<option value="14">Motor Home Class B+</option>
<option value="15">Motor Home Class B+ - Diesel</option>
<option value="16">Motor Home Class C</option>
<option value="17">Motor Home Class C - Diesel</option>
<option value="22">Park Models</option>
<option value="102">Teardrop Trailer</option>
<option value="26">Toy Hauler Fifth Wheel</option>
<option value="28">Toy Hauler Travel Trailer</option>
<option value="29">Travel Trailer</option>
        </select>

</div>


<div class="form-group SearchRow BrandsWrapper"><label for="Brand">Brand</label>

        <select name="Brand" id="Brand" class="form-control DropDownList Brand">

<option value="" selected="selected">All Brands</option>
<option value="Apex Nano">Apex Nano</option>
<option value="Attitude Limited">Attitude Limited</option>
<option value="Attitude Metal">Attitude Metal</option>
<option value="Attitude Pro-Lite">Attitude Pro-Lite</option>
<option value="Attitude Wide Lite">Attitude Wide Lite</option>
<option value="Attitude Widebody">Attitude Widebody</option>
<option value="Autumn Ridge Single Axle">Autumn Ridge Single Axle</option>
<option value="Avenger">Avenger</option>
<option value="Avenger LT">Avenger LT</option>
<option value="Brookstone">Brookstone</option>
<option value="Bullet">Bullet</option>
<option value="Cargo Trailer">Cargo Trailer</option>
<option value="Cedar Creek">Cedar Creek</option>
<option value="Cedar Creek Cottage">Cedar Creek Cottage</option>
<option value="Cedar Creek Hathaway Edition">Cedar Creek Hathaway Edition</option>
<option value="Cherokee Cascade">Cherokee Cascade</option>
<option value="Cherokee Grey Wolf">Cherokee Grey Wolf</option>
<option value="Coleman Lantern Series">Coleman Lantern Series</option>
<option value="Concord">Concord</option>
<option value="Cougar">Cougar</option>
<option value="Cross Trek XL">Cross Trek XL</option>
<option value="Cruiser">Cruiser</option>
<option value="Cruiser Aire">Cruiser Aire</option>
<option value="Crusader">Crusader</option>
<option value="Crusader LITE">Crusader LITE</option>
<option value="Embrace">Embrace</option>
<option value="EVO ATS">EVO ATS</option>
<option value="Flagstaff Micro Lite">Flagstaff Micro Lite</option>
<option value="Four Winds">Four Winds</option>
<option value="Genesis Special Edition">Genesis Special Edition</option>
<option value="Genesis Supreme">Genesis Supreme</option>
<option value="Hideout">Hideout</option>
<option value="Hideout Single Axle">Hideout Single Axle</option>
<option value="Hurricane">Hurricane</option>
<option value="Imagine">Imagine</option>
<option value="Imagine XLS">Imagine XLS</option>
<option value="International Serenity">International Serenity</option>
<option value="Jay Feather">Jay Feather</option>
<option value="Jay Feather Micro">Jay Feather Micro</option>
<option value="LaCrosse">LaCrosse</option>
<option value="Lance Travel Trailers">Lance Travel Trailers</option>
<option value="Micro Minnie">Micro Minnie</option>
<option value="Mobile Suites">Mobile Suites</option>
<option value="Momentum">Momentum</option>
<option value="Momentum G-Class">Momentum G-Class</option>
<option value="Momentum M-Class">Momentum M-Class</option>
<option value="Montana High Country">Montana High Country</option>
<option value="No Boundaries">No Boundaries</option>
<option value="North Trail">North Trail</option>
<option value="Northland">Northland</option>
<option value="Open Range">Open Range</option>
<option value="Open Range Conventional">Open Range Conventional</option>
<option value="Open Range Light">Open Range Light</option>
<option value="Overnighter">Overnighter</option>
<option value="Passport">Passport</option>
<option value="Passport GT">Passport GT</option>
<option value="Passport SL">Passport SL</option>
<option value="Phoenix">Phoenix</option>
<option value="Phoenix Lite">Phoenix Lite</option>
<option value="Phoenix X-Edition">Phoenix X-Edition</option>
<option value="Powerlite">Powerlite</option>
<option value="R Pod">R Pod</option>
<option value="Rage'n">Rage'n</option>
<option value="Range Lite">Range Lite</option>
<option value="Range Lite Air">Range Lite Air</option>
<option value="Reflection">Reflection</option>
<option value="Reflection 150 Series">Reflection 150 Series</option>
<option value="Roamer">Roamer</option>
<option value="Rockwood GEO Pro">Rockwood GEO Pro</option>
<option value="Rockwood Mini Lite">Rockwood Mini Lite</option>
<option value="Rockwood Roo">Rockwood Roo</option>
<option value="Rockwood Signature Ultra Lite">Rockwood Signature Ultra Lite</option>
<option value="Rockwood Ultra Lite">Rockwood Ultra Lite</option>
<option value="Salem">Salem</option>
<option value="Salem Cruise Lite">Salem Cruise Lite</option>
<option value="Sandstorm">Sandstorm</option>
<option value="Sanibel">Sanibel</option>
<option value="Shockwave">Shockwave</option>
<option value="Solitude">Solitude</option>
<option value="Solitude S-Class">Solitude S-Class</option>
<option value="Sonic">Sonic</option>
<option value="Sonoma">Sonoma</option>
<option value="Spirit Ultra Lite">Spirit Ultra Lite</option>
<option value="Spirit XTR">Spirit XTR</option>
<option value="Springdale">Springdale</option>
<option value="Springdale Mini">Springdale Mini</option>
<option value="Sprinter Campfire Edition">Sprinter Campfire Edition</option>
<option value="Stealth">Stealth</option>
<option value="Sunseeker">Sunseeker</option>
<option value="Sunset Trail">Sunset Trail</option>
<option value="T@B 400">T@B 400</option>
<option value="Tracer">Tracer</option>
<option value="Transcend">Transcend</option>
<option value="Transcend Xplor">Transcend Xplor</option>
<option value="Triton">Triton</option>
<option value="Vengeance Rogue">Vengeance Rogue</option>
<option value="Vibe Extreme Lite">Vibe Extreme Lite</option>
<option value="Voltage">Voltage</option>
<option value="Wildcat Maxx">Wildcat Maxx</option>
<option value="Wildwood">Wildwood</option>
<option value="Wildwood FSX">Wildwood FSX</option>
<option value="Wildwood Select">Wildwood Select</option>
<option value="Wildwood X-Lite">Wildwood X-Lite</option>
<option value="Zinger">Zinger</option>
<option value="Zinger Lite">Zinger Lite</option>
        </select>

</div>


<div class="form-group SearchRow FloorplansWrapper"><label for="Features-prop-4">Features</label>

        <select name="Features-prop-4" id="Features-prop-4" class="form-control DropDownList Features-prop-4">

<option value="" selected="selected">All Features</option>
<option value="61">Bath and a Half</option>
<option value="12">Bunk Over Cab</option>
<option value="17">Bunkhouse</option>
<option value="27">Front Bath</option>
<option value="11">Front Bedroom</option>
<option value="69">Front Cargo Deck</option>
<option value="62">Front Entertainment</option>
<option value="4">Front Kitchen</option>
<option value="1">Front Living</option>
<option value="60">Kitchen Island</option>
<option value="63">Loft</option>
<option value="68">Murphy Bed</option>
<option value="65">Outdoor Entertainment</option>
<option value="58">Outdoor Kitchen</option>
<option value="20">Rear Bath</option>
<option value="8">Rear Bedroom</option>
<option value="57">Rear Entertainment</option>
<option value="6">Rear Kitchen</option>
<option value="3">Rear Living Area</option>
<option value="26">Rear Twin</option>
<option value="55">Side Ramp</option>
<option value="25">Two Entry/Exit Doors</option>
<option value="64">Two Full Baths</option>
<option value="59">U Shaped Dinette</option>
<option value="28">V-Nose</option>
<option value="66">Walk-Thru Bath</option>
<option value="70">Wheelchair Accessible</option>
        </select>

</div>


<div class="form-group SearchRow StockNumberWrapper"><label for="SearchStockNumber">Stock # or Model</label><input name="stockNumber" type="text" id="SearchStockNumber" class="form-control SearchStockNumber" placeholder="Stock # or Model"/></div>
        <button type="submit" name="SearchButton" class="btn btn-primary SearchButton ">Search</button>


        <div class="clearBoth"></div>

    </div>


</div>
</div>
</div>
</div>
<div id="rv-types">
<div class="container">


<nav class="rv-types">
<ul>
<li><a href="#"><img src=" {{asset('assets/images/rv-types-fw.png')}}" alt=""/></a> <span class="rv-types-content"><span class="rv-types-title"><a href="/product/fifth-wheel">Fifth Wheels</a></span><span><a href="/product/fifth-wheel/new">New</a> | <a href="/product/fifth-wheel/used">Used</a></span></span></li>
<li><a href="#"><img src="{{asset('assets/images/rv-types-tt.png')}}" alt=""/></a> <span class="rv-types-content"><span class="rv-types-title"><a href="/product/travel-trailer">Travel Trailers</a></span><span><a href="/product/travel-trailer/new">New</a> | <a href="/product/travel-trailer/used">Used</a></span></span></li>
<li><a href="#"><img src="{{asset('assets/images/rv-types-th.png')}}" alt=""/></a> <span class="rv-types-content"><span class="rv-types-title"><a href="/product/toy-hauler">Toy Hauler</a></span><span><a href="/product/toy-hauler/new">New</a> | <a href="/product/toy-hauler/used">Used</a></span></span></li>
<li><a href="#"><img src="{{asset('assets/images/rv-types.png')}}" data-assetid="16400138"/></a> <span class="rv-types-content"><span class="rv-types-title"><a href="/product/motor-home-class-a">Class A</a></span><span><a href="/product/motor-home-class-a/used">Used</a></span></span></li>
<li><a href="#"><img src="{{asset('assets/images/rv-types-class-c.png')}}" alt=""/></a> <span class="rv-types-content"><span class="rv-types-title"><a href="/product/motor-home-class-c">Class C</a></span><span><a href="/product/motor-home-class-c/used">Used</a></span></span></li>
<li><a href="#"><img src="{{asset('assets/images/rv-types-other.png')}}" alt=""/></a> <span class="rv-types-content"><span class="rv-types-title"><a href="/product/other">Other RVs</a></span><span><a href="/product/other/new">New</a> | <a href="/product/other/used">Used</a></span></span></li>
</ul>
</nav>
</div>
</div>
<div id="rv-demand">
<div class="container">
<div class="row">
<div class="col-12 text-center"><img src="{{asset('assets/images/unit_photo.png')}}" style="margin-top: 20px;" alt="California RV Show Beating Prices"></div>
</div>
</div>
</div>
<div class="
">
    <div id="mainContainer" class="row">
        <section id="main" class="
">
            
    <div class="pageContent">
        
        <div class="container">
<div class="banner-get-approved"><img src="{{asset('assets/images/icon-get-approved-check.png')}}" alt="icon-check" data-assetid="16399962">
<div class="banner-get-approved-content">
<div class="banner-get-approved-title">Get Pre-Approved in Seconds!</div>
<div class="banner-get-approved-list">
<ul>
<li>No effect on credit score</li>
<li>Instant decision if you qualify</li>
<li>No SSN or DOB</li>
</ul>
</div>
</div>
<a href="/rv-financing-pre-approval" class="btn btn-primary btn-xl">Learn More</a></div>
</div>
<div class="home-featured">
<div class="container"><a class="featured-prev"><i class="icon-caret-left "> </i></a>
<div class="headline">Featured RVs</div>


    <!--tow rating goodness-->
    <!--end tow rating goodness-->
    <div class="unit-list">

        <div class='unitContainer gridMode mode-freeze'>

                <div id="slideshowWrap" class='cycle-slideshow' data-cycle-fx="carousel" data-cycle-timeout="3000" data-cycle-carousel-visible="5" data-cycle-carousel-fluid="true" data-cycle-slides="li.unit" data-cycle-paused=true data-cycle-swipe="true" data-cycle-carousel-vertical="false" data-cycle-prev=".featured-prev" data-cycle-next=".featured-next">


                <ol class="unitListCompact">

    <li class='unit newUnit Travel-Trailer Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-coachmen-rv-spirit-ultra-lite-2252md-1942306-29">New 2022 Coachmen RV Spirit Ultra Lite 2252MD</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_1.jpg') }}" alt="New 2022 Coachmen RV Spirit Ultra Lite 2252MD Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-coachmen-rv-spirit-ultra-lite-2252md-1942306-29">New 2022 Coachmen RV Spirit Ultra Lite 2252MD</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$53,229</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$13,230</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$39,999</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit altUnit newUnit Travel-Trailer Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-crossroads-rv-zinger-zr340mb-1887890-29">New 2022 CrossRoads RV Zinger ZR340MB</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_2.jpg') }}" alt="New 2022 CrossRoads RV Zinger ZR340MB Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-crossroads-rv-zinger-zr340mb-1887890-29">New 2022 CrossRoads RV Zinger ZR340MB</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$68,316</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$19,317</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$48,999</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit newUnit Travel-Trailer Nipomo active-status has-sale-price year-2021'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2021-crossroads-rv-zinger-lite-zr211rd-1546376-29">New 2021 CrossRoads RV Zinger Lite ZR211RD</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202106281059382751151499.jpg') }}" alt="New 2021 CrossRoads RV Zinger Lite ZR211RD Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2021-crossroads-rv-zinger-lite-zr211rd-1546376-29">New 2021 CrossRoads RV Zinger Lite ZR211RD</a></div>
                <span class="salesPitch">Lowest Price On The West Coast!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$34,300</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$6,301</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$27,999</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit altUnit newUnit Travel-Trailer Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-forest-river-rv-rockwood-mini-lite-2513s-1979151-29">New 2022 Forest River RV Rockwood Mini Lite 2513S</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202208300835425224678346.jpg') }}" alt="New 2022 Forest River RV Rockwood Mini Lite 2513S Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-forest-river-rv-rockwood-mini-lite-2513s-1979151-29">New 2022 Forest River RV Rockwood Mini Lite 2513S</a></div>
                <span class="salesPitch">Buy today and camp tomorrow!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$59,191</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$12,892</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$46,299</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit newUnit Travel-Trailer Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-forest-river-rv-wildwood-23rk-1951924-29">New 2022 Forest River RV Wildwood 23RK</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202208090709047353553246.jpg') }}" alt="New 2022 Forest River RV Wildwood 23RK Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-forest-river-rv-wildwood-23rk-1951924-29">New 2022 Forest River RV Wildwood 23RK</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$51,778</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$13,779</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$37,999</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit altUnit newUnit Travel-Trailer Nipomo active-status year-2023'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2023-grand-design-imagine-2600rb-2043233-29">New 2023 Grand Design Imagine 2600RB</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_tech_drawing_202205230208507693872418.jpg') }}" alt="New 2023 Grand Design Imagine 2600RB Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2023-grand-design-imagine-2600rb-2043233-29">New 2023 Grand Design Imagine 2600RB</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li class="noPriceWrapper"><span class="noPrice">Call or Text for Best Price 805-929-8095</span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit newUnit Travel-Trailer Nipomo active-status year-2023'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2023-grand-design-transcend-xplor-221rb-1930210-29">New 2023 Grand Design Transcend Xplor 221RB</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202207120359115205746386.jpg') }}" alt="New 2023 Grand Design Transcend Xplor 221RB Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2023-grand-design-transcend-xplor-221rb-1930210-29">New 2023 Grand Design Transcend Xplor 221RB</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$42,952</span></span>
</li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit altUnit newUnit Travel-Trailer Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-highland-ridge-rv-open-range-conventional-ot20fbs-1850395-29">New 2022 Highland Ridge RV Open Range Conventional OT20FBS</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_20220517070802471845027.jpg') }}" alt="New 2022 Highland Ridge RV Open Range Conventional OT20FBS Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-highland-ridge-rv-open-range-conventional-ot20fbs-1850395-29">New 2022 Highland Ridge RV Open Range Conventional OT20FBS</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$33,016</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$4,017</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$28,999</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit newUnit Travel-Trailer Nipomo active-status has-sale-price year-2023'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2023-highland-ridge-rv-range-lite-rl261bh-1957099-29">New 2023 Highland Ridge RV Range Lite RL261BH</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_2022080909570803491344.jpg') }}" alt="New 2023 Highland Ridge RV Range Lite RL261BH Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2023-highland-ridge-rv-range-lite-rl261bh-1957099-29">New 2023 Highland Ridge RV Range Lite RL261BH</a></div>
                <span class="salesPitch">Buy today and camp tomorrow!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$48,841</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$8,342</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$40,499</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit altUnit newUnit Travel-Trailer Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-keystone-rv-hideout-26bhwe-1862102-29">New 2022 Keystone RV Hideout 26BHWE</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202205190557185665881677.jpg') }}" alt="New 2022 Keystone RV Hideout 26BHWE Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-keystone-rv-hideout-26bhwe-1862102-29">New 2022 Keystone RV Hideout 26BHWE</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$48,617</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$13,118</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$35,499</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit newUnit Travel-Trailer Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-lance-lance-travel-trailers-1985-1964562-29">New 2022 Lance Lance Travel Trailers 1985</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202208161016172880647328.jpg') }}" alt="New 2022 Lance Lance Travel Trailers 1985 Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-lance-lance-travel-trailers-1985-1964562-29">New 2022 Lance Lance Travel Trailers 1985</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$72,720</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$11,721</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$60,999</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit altUnit newUnit Travel-Trailer Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-prime-time-rv-avenger-26dbsle-1870979-29">New 2022 Prime Time RV Avenger 26DBSLE</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202205310604552875408936.jpg') }}" alt="New 2022 Prime Time RV Avenger 26DBSLE Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-prime-time-rv-avenger-26dbsle-1870979-29">New 2022 Prime Time RV Avenger 26DBSLE</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$41,055</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$9,056</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$31,999</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit newUnit Travel-Trailer Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-prime-time-rv-tracer-230bhsle-1935341-29">New 2022 Prime Time RV Tracer 230BHSLE</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202207220647018599677907.jpg') }}" alt="New 2022 Prime Time RV Tracer 230BHSLE Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-prime-time-rv-tracer-230bhsle-1935341-29">New 2022 Prime Time RV Tracer 230BHSLE</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$41,809</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$7,810</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$33,999</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit altUnit newUnit Toy-Hauler-Travel-Trailer Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-forest-river-rv-no-boundaries-nb10-dot-6-1969986-28">New 2022 Forest River RV No Boundaries NB10.6</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202208250658503600478504.jpg') }}" alt="New 2022 Forest River RV No Boundaries NB10.6 Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-forest-river-rv-no-boundaries-nb10-dot-6-1969986-28">New 2022 Forest River RV No Boundaries NB10.6</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$32,567</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$6,068</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$26,499</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit newUnit Toy-Hauler-Travel-Trailer Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-forest-river-rv-stealth-fq2715g-1636947-28">New 2022 Forest River RV Stealth FQ2715G</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202110201049270065323825.jpg') }}" alt="New 2022 Forest River RV Stealth FQ2715G Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-forest-river-rv-stealth-fq2715g-1636947-28">New 2022 Forest River RV Stealth FQ2715G</a></div>
                <span class="salesPitch">Buy today and camp tomorrow!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$75,961</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$22,962</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$52,999</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit altUnit newUnit Toy-Hauler-Travel-Trailer Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-genesis-supreme-overnighter-12-14-dot-6-fk-1667800-28">New 2022 Genesis Supreme Overnighter 12-14.6 FK</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202111231219117587508378.jpg') }}" alt="New 2022 Genesis Supreme Overnighter 12-14.6 FK Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-genesis-supreme-overnighter-12-14-dot-6-fk-1667800-28">New 2022 Genesis Supreme Overnighter 12-14.6 FK</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$39,145</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$8,146</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$30,999</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit newUnit Fifth-Wheel Nipomo active-status year-2023'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2023-grand-design-reflection-150-series-298bh-1975478-5">New 2023 Grand Design Reflection 150 Series 298BH</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202208260735403674031217.jpg') }}" alt="New 2023 Grand Design Reflection 150 Series 298BH Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2023-grand-design-reflection-150-series-298bh-1975478-5">New 2023 Grand Design Reflection 150 Series 298BH</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$84,081</span></span>
</li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit altUnit newUnit Fifth-Wheel Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-highland-ridge-rv-open-range-of376fbh-1870983-5">New 2022 Highland Ridge RV Open Range OF376FBH</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202205310601224128726595.jpg') }}" alt="New 2022 Highland Ridge RV Open Range OF376FBH Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-highland-ridge-rv-open-range-of376fbh-1870983-5">New 2022 Highland Ridge RV Open Range OF376FBH</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$116,989</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$30,990</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$85,999</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit newUnit Fifth-Wheel Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-prime-time-rv-sanibel-3102rswb-1737880-5">New 2022 Prime Time RV Sanibel 3102RSWB</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202203031027376293567399.jpg') }}" alt="New 2022 Prime Time RV Sanibel 3102RSWB Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-prime-time-rv-sanibel-3102rswb-1737880-5">New 2022 Prime Time RV Sanibel 3102RSWB</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$95,234</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$25,735</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$69,499</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit altUnit newUnit Fifth-Wheel Nipomo active-status has-sale-price year-2022'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2022-shasta-rvs-phoenix-lite-274bh-1895333-5">New 2022 Shasta RVs Phoenix Lite 274BH</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202206100517196578265589.jpg') }}" alt="New 2022 Shasta RVs Phoenix Lite 274BH Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2022-shasta-rvs-phoenix-lite-274bh-1895333-5">New 2022 Shasta RVs Phoenix Lite 274BH</a></div>
                <span class="salesPitch">Buy today and camp tomorrow!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$83,394</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$19,395</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$63,999</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit newUnit Toy-Hauler-Fifth-Wheel Nipomo active-status has-sale-price year-2023'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2023-eclipse-attitude-pro-lite-3220sag-1671323-26">New 2023 Eclipse Attitude Pro-Lite 3220SAG</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202112010946301341062164.jpg') }}" alt="New 2023 Eclipse Attitude Pro-Lite 3220SAG Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2023-eclipse-attitude-pro-lite-3220sag-1671323-26">New 2023 Eclipse Attitude Pro-Lite 3220SAG</a></div>
                <span class="salesPitch">Buy today and camp tomorrow!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$96,425</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$26,426</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$69,999</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit altUnit newUnit Toy-Hauler-Fifth-Wheel Nipomo active-status has-sale-price year-2023'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2023-genesis-supreme-36-ck-1982251-26">New 2023 Genesis Supreme 36 CK</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202208300930201501784761.jpg') }}" alt="New 2023 Genesis Supreme 36 CK Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2023-genesis-supreme-36-ck-1982251-26">New 2023 Genesis Supreme 36 CK</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$105,997</span></span>
</li>
<li><span class="youSave"><span class="youSaveLabel">Savings:</span> <span class="youSaveText">$25,998</span></span></li>
<li><span class="salePrice"><span class="salePriceLabel">Sale Price:</span> <span class="salePriceText">$79,999</span></span></li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>
    <li class='unit newUnit Toy-Hauler-Fifth-Wheel Nipomo active-status year-2023'>
        <div class="row detailsContainer" data-finance-percent-down="" data-finance-interest-rate="" data-finance-months="">
            <div class="col-md-5 col-sm-12 photoContainer">
                <div class="hidden h3 unit-title unit-title-top"><a href="/product/new-2023-grand-design-momentum-376ths-1953033-26">New 2023 Grand Design Momentum 376THS</a></div>
                    <img class="img1" src="{{ asset('assets/images/unit_photo_202208090810214232749971.jpg') }}" alt="New 2023 Grand Design Momentum 376THS Photo"/>
                <div class="hidden-list-mode h3 unit-title"><a href="/product/new-2023-grand-design-momentum-376ths-1953033-26">New 2023 Grand Design Momentum 376THS</a></div>
                <span class="salesPitch">Camping Ready and In Stock!</span>
            </div>
            <div class="col-md-4 col-sm-12 pricingContainer">
                    <ul class="unitPricing">
                        <li><span class="regPrice"><span class="regPriceLabel">MSRP:</span> <span class="regPriceText">$176,103</span></span>
</li>

                    </ul>
            </div>
        </div>
        <div class="clear"></div>
    </li>

                </ol>

                <div class="cycle-prev"><span class="hide">Previous Inventory Unit</span> <i class='icon-chevron-left'> </i> </div>
                <div class="cycle-next"><span class="hide">Next Inventory Unit</span> <i class='icon-chevron-right'> </i> </div>
                <div class="cycle-pager"></div>
                </div>
        </div>



      
    </div>
    <!-- GAP marketing variables -->

<a class="featured-next"><i class="icon-caret-right "> </i></a></div>
</div>
<div class="home-brands">
<div class="container">
<div class="headline">Our Brands</div>
<div class='brandIcons clearfix'>
            <a href="/product-eclipse/attitude-limited">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202201060514092043747960.png') }}" alt="Attitude Limited"/>
            </a>               <a href="/product-eclipse/attitude-widebody">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202201100113509344293920.png') }}" alt="Attitude Widebody"/>
            </a>               <a href="/product-prime-time-rv/avenger">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202208150440453440561226.png') }}" alt="Avenger"/>
            </a>               <a href="/product-prime-time-rv/avenger-lt">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202211170821082609820601.png') }}" alt="Avenger LT"/>
            </a>               <a href="/product-coachmen-rv/brookstone">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202209130439183890973554.png') }}" alt="Brookstone"/>
            </a>               <a href="/product-forest-river-rv/cedar-creek">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202106230117550423693569.png') }}" alt="Cedar Creek"/>
            </a>               <a href="/product-forest-river-rv/cedar-creek-cottage">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_20210716010327416968741.png') }}" alt="Cedar Creek Cottage"/>
            </a>               <a href="/product-crossroads-rv/cruiser">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202108131109296309723549.png') }}" alt="Cruiser"/>
            </a>               <a href="/product-prime-time-rv/crusader-lite">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202107150255567695061254.png') }}" alt="Crusader LITE"/>
            </a>               <a href="/product-eclipse/eclpise-attitude-toy-haulers-brand">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/mfg_logo_201503090146359150451422.png') }}" alt="Eclpise Attitude Toy Haulers"/>
            </a>               <a href="/product-cruiser/embrace">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202108191114528476527509.png') }}" alt="Embrace"/>
            </a>               <a href="/product-genesis-supreme/genesis-special-edition">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202112080224549330910208.png') }}" alt="Genesis Special Edition"/>
            </a>               <a href="/product-genesis-supreme/genesis-supreme">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202207051234530404150138.png') }}" alt="Genesis Supreme"/>
            </a>               <a href="/product-keystone-rv/hideout-rvs-brand">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_201705231230345946497890.png') }}" alt="Hideout RVs"/>
            </a>               <a href="/product-grand-design/imagine">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202205230208497801104372.png') }}" alt="Imagine"/>
            </a>               <a href="/product-grand-design/imagine-xls">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202206210247573857714200.png') }}" alt="Imagine XLS"/>
            </a>               <a href="/product-prime-time-rv/lacrosse">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202209140415241220116609.png') }}" alt="LaCrosse"/>
            </a>               <a href="/product-lance/lance-travel-trailers">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202211101214037477623279.png') }}" alt="Lance Travel Trailers"/>
            </a>               <a href="/product-grand-design/momentum-brand">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/mak10226.png') }}" alt="Momentum"/>
            </a>               <a href="/product-grand-design/momentum-g-class">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202206020231545093694908.png') }}" alt="Momentum G-Class"/>
            </a>               <a href="/product-forest-river-rv/no-boundaries">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202207290227558338326736.png') }}" alt="No Boundaries"/>
            </a>               <a href="/product-highland-ridge-rv/open-range">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202208231110447202642907.png') }}" alt="Open Range"/>
            </a>               <a href="/product-highland-ridge-rv/open-range-conventional">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202208120830201615954270.png') }}" alt="Open Range Conventional"/>
            </a>               <a href="/product-highland-ridge-rv/open-range-light">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202208191227118978797598.png') }}" alt="Open Range Light"/>
            </a>               <a href="/product-genesis-supreme/overnighter">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202111030525031251639777.png') }}" alt="Overnighter"/>
            </a>               <a href="/product-keystone-rv/passport-gt">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202208080206210987484616.png') }}" alt="Passport GT"/>
            </a>               <a href="/product-keystone-rv/passport-sl">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202208150117295017832681.png') }} " alt="Passport SL"/>
            </a>               <a href="/product-shasta-rvs/phoenix">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202105160157587950155220.png') }} " alt="Phoenix"/>
            </a>               <a href="/product-shasta-rvs/phoenix-lite">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202105160159317447624368.png') }} " alt="Phoenix Lite"/>
            </a>               <a href="/product-shasta-rvs/phoenix-x-edition">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202201040253192709029955.png') }} " alt="Phoenix X-Edition"/>
            </a>               <a href="/product-highland-ridge-rv/range-lite">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202208220552129358298390.png') }} " alt="Range Lite"/>
            </a>               <a href="/product-highland-ridge-rv/range-lite-air">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202111050146513384920299.png') }} " alt="Range Lite Air"/>
            </a>               <a href="/product-grand-design/reflection">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202206031253443285705643.png') }} " alt="Reflection"/>
            </a>               <a href="/product-grand-design/reflection-150-series">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202206220534083181057827.png') }} " alt="Reflection 150 Series"/>
            </a>               <a href="/product-highland-ridge-rv/roamer">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202111080125359055014308.png') }} " alt="Roamer"/>
            </a>               <a href="/product-forest-river-rv/rockwood-brand">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/mfg_logo_201412090613205252160646.png') }} " alt="Rockwood"/>
            </a>               <a href="/product-forest-river-rv/rockwood-geo-pro">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202208031214027097579410.png') }} " alt="Rockwood GEO Pro"/>
            </a>               <a href="/product-forest-river-rv/rockwood-roo">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202208041126032412982758.png') }}" alt="Rockwood Roo"/>
            </a>               <a href="/product-prime-time-rv/sanibel">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202207050133202390070532.png') }}" alt="Sanibel"/>
            </a>               <a href="/product-grand-design/solitude">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202206230245052062318638.png') }}" alt="Solitude"/>
            </a>               <a href="/product-grand-design/solitude-s-class">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202206221220460824420620.png') }}" alt="Solitude S-Class"/>
            </a>               <a href="/product-coachmen-rv/spirit-ultra-lite">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202107190119480112165359.png') }}" alt="Spirit Ultra Lite"/>
            </a>               <a href="/product-coachmen-rv/spirit-xtr">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202107211128436155996596.png') }}" alt="Spirit XTR"/>
            </a>               <a href="/product-forest-river-rv/stealth">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202210281115300871093822.png') }}" alt="Stealth"/>
            </a>               <a href="/product-crossroads-rv/sunset-trail">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202206070102510722099308.png') }}" alt="Sunset Trail"/>
            </a>               <a href="/product-prime-time-rv/tracer">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202210030753241774932993.png') }}" alt="Tracer"/>
            </a>               <a href="/product-grand-design/transcend">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202003080735023840582588.png') }}" alt="Transcend"/>
            </a>               <a href="/product-grand-design/transcend-xplor">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202205260600261253466737.png') }}" alt="Transcend Xplor"/>
            </a>               <a href="/product-dutchmen-rv/triton">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202211011205358412264445.png') }}" alt="Triton"/>
            </a>               <a href="/product-dutchmen-rv/voltage">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202106170135333666112619.png') }}" alt="Voltage"/>
            </a>               <a href="/product-forest-river-rv/wildwood-brand">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/mak11070.png') }}" alt="Wildwood"/>
            </a>               <a href="/product-forest-river-rv/wildwood-fsx">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202205260225382183740996.png') }}" alt="Wildwood FSX"/>
            </a>               <a href="/product-forest-river-rv/wildwood-select">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202204191222310830643822.png') }}" alt="Wildwood Select"/>
            </a>               <a href="/product-crossroads-rv/zinger">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202209020150316515137148.png') }}" alt="Zinger"/>
            </a>               <a href="/product-crossroads-rv/zinger-lite">
                    <img src="https://assets-cdn.interactcp.com/interactrv/images/common/loading-wheel.gif" data-src="{{ asset('assets/images/brand_logo_202209070718232980745825.png') }}" alt="Zinger Lite"/>
            </a>   </div>
</div>
</div>
<div class="featured-btns">
<div class="container">
<ul>
<li class="featured-btn-new-used"><a href="/rv-search" class="featured-btn"><span class="featured-btn-img-container"><svg xmlns="http://www.w3.org/2000/svg" width="93" height="46" viewbox="0 0 93 46" fill="none"> <path d="M32.1162 40.0331C32.9073 43.424 35.966 45.9737 39.6048 45.9737C43.2435 45.9737 46.3022 43.424 47.0933 40.0331H50.2311V40.0594H66.8957V40.0331H77.311H78.9722H89.4667V45.7897H93V33.7771H89.4667V36.5371H78.9722V23.1314C78.9722 22.6583 78.9195 22.2114 78.7876 21.7646L73.1712 2.26057C72.7757 0.92 71.5364 0 70.1389 0H9.22881C7.64672 0 6.27559 1.18286 6.06464 2.73371V18.2686H4.42983C2.00397 18.2686 0 20.24 0 22.6846V31.9897C0 34.4343 2.00397 36.4057 4.42983 36.4057H6.06464V37.3257L6.09101 37.4834C6.38106 38.9554 7.67309 40.0331 9.17607 40.0331H32.1162ZM75.4389 28.0469H63.4414V25.1291H75.4389V28.0469ZM61.4902 21.4754H59.8554V23.4206H61.4902V36.5371H52.5251V11.0137H61.4902V21.4754ZM50.5739 28.0469H9.59796V25.1291H50.5739V28.0469ZM9.59796 29.2297H50.5739V36.5371H47.1196C46.3022 33.1463 43.2699 30.6491 39.6311 30.6491C35.9923 30.6491 32.96 33.1726 32.1426 36.5371H9.59796V29.2297ZM43.7973 38.2983C43.7973 40.5851 41.9251 42.4514 39.6311 42.4514C37.3371 42.4514 35.465 40.5851 35.465 38.2983C35.465 36.0114 37.3371 34.1451 39.6311 34.1451C41.9251 34.1451 43.7973 36.0114 43.7973 38.2983ZM63.4414 36.5371V29.2297H75.4389V36.5371H63.4414ZM69.8489 3.52229L75.3862 22.7371C75.4125 22.8686 75.4389 23 75.4389 23.1314V23.9726H63.4414V9.04229H50.5475V23.9463H9.59796V3.496H69.8489V3.52229ZM4.42983 32.9097C3.92883 32.9097 3.50695 32.4891 3.50695 31.9897V22.6846C3.50695 22.1851 3.92883 21.7646 4.42983 21.7646H6.06464V32.9097H4.42983Z" fill="white"></path> </svg></span><span class="featured-btn-title">New &amp; Used RVs</span> <span class="featured-btn-content">Price and selection is important to us because we know it’s important to you, too!</span> <span class="btn">SHOP NOW</span> </a></li>
<li class="featured-btn-service"><a href="/rv-service" class="featured-btn"><span class="featured-btn-img-container"><svg xmlns="http://www.w3.org/2000/svg" width="83" height="73" viewbox="0 0 83 73" fill="none"> <path d="M82.3 62.9C82.3 62.9 79.4 58.1 78.9 53.9C78.2 48.4 75.7 38.2 70.5 34.4C68.2 32.8 57.3 30.1 56.1 29.8C55.4 29.6 54.8 30 54.6 30.7C54.4 31.4 54.8 32 55.5 32.2C60 33.3 67.6 35.4 69.1 36.4C73 39.2 75.7 47.6 76.5 54.2C77.1 58.9 80.1 64 80.3 64.2C80.5 64.6 80.9 64.8 81.4 64.8C81.6 64.8 81.8 64.7 82 64.6C82.5 64.3 82.7 63.5 82.3 62.9Z" fill="white"></path> <path d="M65.6 59.2C55.7 57.9 54.2 51.1 53.7 48.6C53.5 47.8 53.1 47.3 52.8 46.8C52.8 46.8 52.8 46.7 52.7 46.7C52.4 46.4 52 45.9 51.4 45.3C51.4 45.3 51.4 45.2 51.3 45.2C50.9 44.8 50.5 44.4 50.1 43.9C47.4 41.1 43.4 37 42.4 35.4C41.2 33.4 41.4 32.7 42.3 31.8C43.4 30.7 44.1 30.9 47 33C48.1 33.8 48.9 34.4 49.5 34.8C49.6 34.9 49.7 34.9 49.8 35C50.6 35.6 51.1 36 51.8 36.5C52.7 37.2 53.7 38 55.6 39.3C56.8 40.2 58 40.6 59.2 41C60.6 41.5 62.1 42 63.8 43.5C64.3 44 65.1 43.9 65.6 43.4C66.1 42.9 66 42.1 65.5 41.6C63.4 39.8 61.6 39.2 60 38.6C58.9 38.2 58 37.9 57.1 37.3C55.3 35.9 54.2 35.1 53.4 34.5C52.8 34.1 52.3 33.7 51.7 33.3V4.2C51.7 1.9 49.8 0 47.5 0H12C10.9 0 9.9 0.4 9 1.3L1.3 9.1C0.4 9.9 0 10.9 0 12V68C0 70.3 1.9 72.2 4.2 72.2H47.4C49.7 72.2 51.6 70.3 51.6 68V51C52.7 54.6 55.6 60.5 65.2 61.7C65.3 61.7 65.3 61.7 65.4 61.7C66 61.7 66.6 61.2 66.6 60.6C66.8 59.9 66.3 59.3 65.6 59.2ZM47.5 69.7H4.2C3.2 69.7 2.4 68.9 2.4 67.9V12.1H10.2C11.6 12.1 12.7 10.9 12.7 9.5V6.5C12.7 5.8 12.1 5.3 11.5 5.3C10.9 5.3 10.3 5.9 10.3 6.5V9.6H4.3L10.8 3C11.2 2.6 11.6 2.5 12 2.5H47.4C48.4 2.5 49.2 3.3 49.2 4.3V31.7C49 31.5 48.7 31.4 48.5 31.2C46.1 29.5 43.4 27.5 40.6 30.2C37.8 32.7 39.5 35.6 40.3 36.9C41.4 38.7 45.4 42.8 48.3 45.8C48.6 46.1 48.9 46.4 49.2 46.7V68C49.2 68.9 48.4 69.7 47.5 69.7Z" fill="white"></path> <path d="M56.1 63.5C55.4 63.3 54.7 63.7 54.6 64.4C54.4 65.1 54.8 65.8 55.5 65.9C58 66.6 59.2 69.2 59.2 69.2C59.4 69.7 59.9 69.9 60.3 69.9C60.5 69.9 60.6 69.9 60.8 69.8C61.4 69.5 61.7 68.8 61.4 68.1C61.3 68.1 59.7 64.6 56.1 63.5Z" fill="white"></path> <path d="M16.4 18.8H42.3C43 18.8 43.5 18.2 43.5 17.6C43.5 17 42.9 16.4 42.3 16.4H16.4C15.7 16.4 15.2 17 15.2 17.6C15.2 18.2 15.7 18.8 16.4 18.8Z" fill="white"></path> <path d="M16.4 29.2H34.5C35.2 29.2 35.7 28.6 35.7 28C35.7 27.4 35.1 26.8 34.5 26.8H16.4C15.7 26.8 15.2 27.4 15.2 28C15.2 28.6 15.7 29.2 16.4 29.2Z" fill="white"></path> <path d="M16.4 24H42.3C43 24 43.5 23.4 43.5 22.8C43.5 22.2 42.9 21.6 42.3 21.6H16.4C15.7 21.6 15.2 22.2 15.2 22.8C15.2 23.4 15.7 24 16.4 24Z" fill="white"></path> <path d="M9.5 18.8H11C11.7 18.8 12.2 18.2 12.2 17.6C12.2 17 11.6 16.4 11 16.4H9.5C8.8 16.4 8.3 17 8.3 17.6C8.3 18.2 8.8 18.8 9.5 18.8Z" fill="white"></path> <path d="M12.2 28C12.2 27.3 11.6 26.8 11 26.8H9.5C8.8 26.8 8.3 27.4 8.3 28C8.3 28.6 8.9 29.2 9.5 29.2H11C11.6 29.2 12.2 28.6 12.2 28Z" fill="white"></path> <path d="M9.5 24H11C11.7 24 12.2 23.4 12.2 22.8C12.2 22.2 11.6 21.6 11 21.6H9.5C8.8 21.6 8.3 22.2 8.3 22.8C8.3 23.4 8.8 24 9.5 24Z" fill="white"></path> <path d="M30.3 45.4C30.9 42 29.9 38.5 27.4 36C24.4 33 19.9 32.1 15.9 33.7C15.5 33.9 15.2 34.2 15.2 34.6C15.2 35 15.2 35.4 15.5 35.7L20.2 40.4L20 43.4L17 43.6L12.3 39C12 38.7 11.6 38.6 11.2 38.7C10.8 38.8 10.4 39.1 10.3 39.4C8.69999 43.4 9.59999 47.9 12.6 50.9C15 53.3 18.6 54.4 22 53.8L33.4 65.2C34.5 66.3 36 66.9 37.5 66.9C39 66.9 40.5 66.3 41.6 65.2C42.8 64.1 43.4 62.6 43.4 61C43.4 59.4 42.8 57.9 41.7 56.8L30.3 45.4ZM39.9 63.4C38.6 64.7 36.5 64.7 35.2 63.4L23.2 51.5C23 51.3 22.6 51.1 22.3 51.1C22.2 51.1 22.1 51.1 22 51.1C19.3 51.8 16.3 51 14.3 49C12.5 47.2 11.7 44.7 12 42.2L15.6 45.8C15.9 46.1 16.2 46.2 16.6 46.2L21.3 45.9C21.9 45.9 22.4 45.4 22.5 44.7L22.8 40C22.8 39.6 22.7 39.3 22.4 39L18.8 35.4C21.3 35 23.8 35.8 25.6 37.7C27.6 39.7 28.4 42.6 27.7 45.4C27.6 45.8 27.7 46.3 28 46.6L40 58.5C40.6 59.1 41 60 41 60.9C40.9 61.9 40.6 62.7 39.9 63.4Z" fill="white"></path> <path d="M37.7 59.2C37.3 58.7 36.5 58.6 35.9 59C35.4 59.4 35.3 60.2 35.7 60.8L36.2 61.4C36.4 61.7 36.8 61.8 37.2 61.8C37.5 61.8 37.8 61.7 38 61.5C38.5 61.1 38.6 60.3 38.2 59.7L37.7 59.2Z" fill="white"></path> </svg></span><span class="featured-btn-title">RV Service &amp; Repair</span> <span class="featured-btn-content">We have specialists on staff who can handle a range of issues for almost any RV available!</span> <span class="btn">CONTACT US</span> </a></li>
<li class="featured-btn-financing"><a href="/rv-financing" class="featured-btn"><span class="featured-btn-img-container"><svg xmlns="http://www.w3.org/2000/svg" width="56" height="78" viewbox="0 0 56 78" fill="none"> <path d="M30.1161 70.5367H27.6626V68.0219L23.2464 63.0537C23.1238 62.931 23.0624 62.8083 23.0011 62.6857L17.2355 46.9222C17.1741 46.6156 16.5608 44.5915 17.7262 43.1807C18.5235 42.322 19.7503 42.0153 21.345 42.322C24.1051 42.8127 26.4359 45.8182 27.8466 48.2103V25.2705C27.8466 22.8784 29.7481 20.9157 32.0788 20.9157C34.4096 20.9157 36.3111 22.8784 36.3111 25.2705H33.8576C33.8576 24.2278 33.0602 23.3691 32.0788 23.3691C31.0975 23.3691 30.3001 24.2278 30.3001 25.2705V50.4797C30.3001 50.7251 30.2388 50.9704 30.0548 51.1544L29.2574 52.3198C29.012 52.6878 28.5827 52.8719 28.1533 52.8105C27.724 52.7492 27.356 52.5038 27.1719 52.0745C26.0066 49.437 23.3078 45.0822 20.9157 44.6528C20.1183 44.5301 19.6889 44.5915 19.5663 44.7141C19.3822 44.9595 19.4436 45.6955 19.5663 46.0022L25.2092 61.4589L29.8094 66.6112C29.9934 66.8565 30.1161 67.1019 30.1161 67.4085V70.5367Z" fill="white"></path> <path d="M36.3111 25.2705H33.8576V46.6155H36.3111V25.2705Z" fill="white"></path> <path d="M36.3111 46.3702H33.8576V39.6846C33.8576 37.2924 35.759 35.3297 38.0898 35.3297C40.4206 35.3297 42.322 37.2924 42.322 39.6846H39.8686C39.8686 38.6418 39.0712 37.7831 38.0898 37.7831C37.1084 37.7831 36.3111 38.6418 36.3111 39.6846V46.3702Z" fill="white"></path> <path d="M42.322 39.6845H39.8686V47.1676H42.322V39.6845Z" fill="white"></path> <path d="M48.333 42.3833H45.8795C45.8795 41.3406 45.0821 40.4819 44.1008 40.4819C43.1194 40.4819 42.322 41.3406 42.322 42.3833H39.8686C39.8686 39.9912 41.77 38.0285 44.1008 38.0285C46.4315 38.0285 48.333 39.9912 48.333 42.3833Z" fill="white"></path> <path d="M48.333 42.3834H45.8795V48.517H48.333V42.3834Z" fill="white"></path> <path d="M54.3439 44.9595H51.8905C51.8905 43.9167 51.0931 43.058 50.1117 43.058C49.1303 43.058 48.333 43.9167 48.333 44.9595H45.8795C45.8795 42.5673 47.7809 40.6046 50.1117 40.6046C52.4425 40.6046 54.3439 42.5673 54.3439 44.9595Z" fill="white"></path> <path d="M51.8291 70.9047H49.3757V68.1445C49.3757 67.9605 49.437 67.7765 49.4984 67.5925L51.8905 63.0536V44.9594H54.3439V63.299C54.3439 63.483 54.2826 63.667 54.2213 63.851L51.8291 68.3899V70.9047Z" fill="white"></path> <path d="M56 77.897H53.5465V71.7634H26.7426V77.897H24.2892V70.5367C24.2892 69.862 24.8412 69.3099 25.5159 69.3099H54.7119C55.3866 69.3099 55.9387 69.862 55.9387 70.5367V77.897H56Z" fill="white"></path> <path d="M20.8543 21.6517H20.1183C17.4195 21.6517 15.2727 19.4436 15.2727 16.8061C15.2727 14.1687 17.4808 11.9606 20.1183 11.9606H20.8543C22.8784 11.9606 24.7185 13.2486 25.3932 15.0887L23.1238 15.9474C22.7557 15.0274 21.8357 14.3527 20.8543 14.3527H20.1183C18.7689 14.3527 17.7262 15.4567 17.7262 16.7448C17.7262 18.0942 18.8302 19.1369 20.1183 19.1369H20.8543V21.6517Z" fill="white"></path> <path d="M20.6703 28.8894H19.9343C17.9102 28.8894 16.0701 27.6013 15.3954 25.7612L17.6648 24.9025C18.0329 25.8226 18.9529 26.4973 19.9343 26.4973H20.6703C22.0197 26.4973 23.0624 25.3932 23.0624 24.1051C23.0624 22.7557 21.9584 21.713 20.6703 21.713H19.9343V19.2596H20.6703C23.3691 19.2596 25.5159 21.4677 25.5159 24.1051C25.5159 26.7426 23.3078 28.8894 20.6703 28.8894Z" fill="white"></path> <path d="M21.7744 8.58707H19.3209V13.1259H21.7744V8.58707Z" fill="white"></path> <path d="M21.7744 27.6627H19.3209V32.2015H21.7744V27.6627Z" fill="white"></path> <path d="M20.425 40.7886C9.1391 40.7886 0 31.6495 0 20.425C0 9.20044 9.1391 0 20.425 0C31.7108 0 40.8499 9.1391 40.8499 20.425C40.8499 22.2037 40.6046 23.9211 40.1752 25.6386L37.7831 25.0252C38.1511 23.5531 38.3965 22.0197 38.3965 20.4863C38.3352 10.4885 30.3001 2.45345 20.425 2.45345C10.4885 2.45345 2.45345 10.4885 2.45345 20.425C2.45345 30.3614 10.4885 38.3965 20.425 38.3965C22.3264 38.3965 24.2278 38.0898 26.0066 37.5378L26.7426 39.8686C24.7185 40.4819 22.5717 40.7886 20.425 40.7886Z" fill="white"></path> </svg></span><span class="featured-btn-title">New &amp; Used RVs</span> <span class="featured-btn-content">Price and selection is important to us because we know it’s important to you, too!</span> <span class="btn">LEARN MORE</span> </a></li>
<li class="featured-btn-specialists"><a href="/rv-search" class="featured-btn"><span class="featured-btn-img-container"><svg xmlns="http://www.w3.org/2000/svg" width="72" height="62" viewbox="0 0 72 62" fill="none"> <path d="M47.8058 62C47.6348 62 47.4637 61.9576 47.3069 61.8729L36.0187 55.9863L24.7304 61.8729C24.3741 62.0564 23.9322 62.0282 23.6044 61.7882C23.2766 61.5483 23.1056 61.153 23.1768 60.7577L25.329 48.3069L16.1929 39.484C15.9079 39.2017 15.7938 38.7782 15.9221 38.3971C16.0504 38.0159 16.3782 37.7336 16.7915 37.6771L29.4196 35.8561L35.0637 24.5205C35.249 24.1534 35.6196 23.9276 36.0187 23.9276C36.432 23.9276 36.8026 24.1534 36.9736 24.5205L42.6177 35.8561L55.2458 37.6771C55.6449 37.7336 55.9869 38.0159 56.1152 38.3971C56.2435 38.7782 56.1295 39.2017 55.8444 39.484L46.7083 48.3069L48.8605 60.7577C48.9318 61.153 48.7607 61.5624 48.4329 61.7882C48.2476 61.9435 48.0338 62 47.8058 62ZM36.0187 53.7559C36.1897 53.7559 36.3607 53.7983 36.5175 53.883L46.3948 59.0214L44.5134 48.1375C44.4564 47.7987 44.5704 47.4458 44.8269 47.2058L52.8085 39.4982L41.7626 37.8889C41.4205 37.8324 41.1069 37.6207 40.9644 37.3101L36.0329 27.4003L31.1014 37.3101C30.9446 37.6207 30.6453 37.8324 30.3033 37.8889L19.243 39.4699L27.2246 47.1776C27.4812 47.4176 27.5952 47.7705 27.5382 48.1093L25.6426 59.0073L35.5198 53.8688C35.6766 53.7841 35.8476 53.7559 36.0187 53.7559Z" fill="white"></path> <path d="M21.5948 51.7796H1.07062C0.643033 51.7796 0.258205 51.5255 0.0871708 51.1302C-0.0838637 50.735 0.00165357 50.2832 0.300964 49.9868L4.91889 45.2295L0.300964 40.4863C0.00165357 40.1758 -0.0838637 39.7241 0.0871708 39.3429C0.258205 38.9476 0.643033 38.6935 1.07062 38.6935H12.7722C13.3566 38.6935 13.8412 39.1735 13.8412 39.7523C13.8412 40.3311 13.3566 40.811 12.7722 40.811H3.57912L7.17085 44.5096C7.56993 44.9189 7.56993 45.5683 7.17085 45.9777L3.57912 49.6762H21.5948C22.1791 49.6762 22.6637 50.1562 22.6637 50.735C22.6637 51.2996 22.1934 51.7796 21.5948 51.7796Z" fill="white"></path> <path d="M70.8527 51.7796H50.3143C49.7299 51.7796 49.2453 51.2996 49.2453 50.7208C49.2453 50.1421 49.7299 49.6621 50.3143 49.6621H68.3299L64.7382 45.9636C64.3391 45.5542 64.3391 44.9048 64.7382 44.4954L68.3299 40.7969H59.1368C58.5525 40.7969 58.0679 40.3169 58.0679 39.7382C58.0679 39.1594 58.5525 38.6794 59.1368 38.6794H70.8384C71.266 38.6794 71.6508 38.9335 71.8219 39.3288C71.9929 39.724 71.9074 40.1758 71.6081 40.4722L66.9902 45.2295L71.6081 49.9868C71.9074 50.2974 71.9929 50.7491 71.8219 51.1302C71.6651 51.5255 71.2803 51.7796 70.8527 51.7796Z" fill="white"></path> <path d="M36.1897 14.1448C32.2559 14.1448 29.049 10.9686 29.049 7.0724C29.049 3.17623 32.2559 0 36.1897 0C40.1235 0 43.3304 3.17623 43.3304 7.0724C43.3304 10.9686 40.1235 14.1448 36.1897 14.1448ZM36.1897 2.11749C33.4389 2.11749 31.187 4.33379 31.187 7.0724C31.187 9.81102 33.4247 12.0273 36.1897 12.0273C38.9405 12.0273 41.1925 9.81102 41.1925 7.0724C41.1925 4.33379 38.9548 2.11749 36.1897 2.11749Z" fill="white"></path> <path d="M24.6734 34.9668C24.6021 34.9668 24.5166 34.9527 24.4454 34.9385C23.8752 34.8115 23.5047 34.2468 23.6187 33.6822L26.0844 22.3466C26.9681 18.2951 30.6311 15.3589 34.8214 15.3589H37.7433C41.9906 15.3589 45.6679 18.3516 46.5088 22.4736L48.775 33.6963C48.889 34.2751 48.5184 34.8256 47.9341 34.9385C47.3497 35.0515 46.7939 34.6844 46.6798 34.1057L44.4136 22.883C43.7865 19.7491 40.9787 17.4763 37.7433 17.4763H34.8214C31.6431 17.4763 28.8495 19.7068 28.1796 22.7983L25.7139 34.1339C25.5998 34.628 25.158 34.9668 24.6734 34.9668Z" fill="white"></path> <path d="M14.0977 19.8902C10.6343 19.8902 7.81223 17.0952 7.81223 13.6648C7.81223 10.2345 10.6343 7.43942 14.0977 7.43942C17.5612 7.43942 20.3833 10.2345 20.3833 13.6648C20.3833 17.0952 17.5612 19.8902 14.0977 19.8902ZM14.0977 9.55691C11.8173 9.55691 9.95016 11.4062 9.95016 13.6648C9.95016 15.9235 11.8173 17.7728 14.0977 17.7728C16.3782 17.7728 18.2453 15.9235 18.2453 13.6648C18.2453 11.3921 16.3782 9.55691 14.0977 9.55691Z" fill="white"></path> <path d="M4.56257 37.0842C4.49131 37.0842 4.4343 37.0842 4.36303 37.0701C3.77867 36.9572 3.40809 36.4066 3.50786 35.8278L5.24671 26.7932C5.24671 26.7791 5.24671 26.7791 5.24671 26.765C6.01637 23.2217 9.23752 20.6384 12.9005 20.6384H15.409C19.129 20.6384 22.3502 23.2641 23.0913 26.8779C23.2053 27.4567 22.8348 28.0072 22.2504 28.1202C21.666 28.2331 21.1102 27.8661 20.9961 27.2873C20.4688 24.6616 18.1171 22.7559 15.409 22.7559H12.9148C10.2495 22.7559 7.912 24.6193 7.35614 27.2026L5.61729 36.2231C5.51752 36.7313 5.06142 37.0842 4.56257 37.0842Z" fill="white"></path> <path d="M57.9824 19.8902C54.5189 19.8902 51.6968 17.0952 51.6968 13.6648C51.6968 10.2345 54.5189 7.43942 57.9824 7.43942C61.4458 7.43942 64.2679 10.2345 64.2679 13.6648C64.2679 17.0952 61.4458 19.8902 57.9824 19.8902ZM57.9824 9.55691C55.7019 9.55691 53.8348 11.4062 53.8348 13.6648C53.8348 15.9235 55.7019 17.7728 57.9824 17.7728C60.2628 17.7728 62.1299 15.9235 62.1299 13.6648C62.1299 11.3921 60.2628 9.55691 57.9824 9.55691Z" fill="white"></path> <path d="M67.5033 37.0842C67.0044 37.0842 66.5483 36.7313 66.4486 36.2231L64.7097 27.2026C64.1396 24.6334 61.8021 22.7559 59.1511 22.7559H56.6426C53.9345 22.7559 51.5971 24.6616 51.0555 27.2873C50.9414 27.8661 50.3713 28.2331 49.8012 28.1202C49.2168 28.0072 48.8463 27.4426 48.9603 26.8779C49.6872 23.2641 52.9226 20.6384 56.6426 20.6384H59.1511C62.8141 20.6384 66.0352 23.2076 66.8049 26.765C66.8049 26.7791 66.8049 26.7791 66.8049 26.7932L68.5437 35.8278C68.6577 36.4066 68.2729 36.9572 67.6886 37.0701C67.6458 37.0701 67.5745 37.0842 67.5033 37.0842Z" fill="white"></path> </svg></span><span class="featured-btn-title">RV Specialists</span> <span class="featured-btn-content">Trust the Trailer Hitch RV team qualified RV specialists to help you find your dream trailer.</span> <span class="btn">SHOP NOW</span> </a></li>
</ul>
</div>
</div>
<div class="home-content">
<div class="container">
<div class="home-content-wrapper">
<div class="home-content-container">
<h1>Welcome to Trailer Hitch RV</h1>
<p>Trailer Hitch RV has been proud to serve the RV needs of those in California since 1968. We are a family-owned and -operated dealership selling new and used RVs. We were even the first RV dealer in the state of the California to sell fifth wheel trailers.</p>
<p>Today, you'll find fifth wheels, travel trailers, toy haulers, and more. Along with our sales experts, our experienced service technicians are here to take care of your trailer whether you’re on the road often or just occasionally. Let our staff be there for all of your trailer needs!</p>
<br><a href="/about-us" class="btn btn-xl btn-secondary">Learn More</a></div>
<div class="home-content-img"><img src="{{ asset('assets/images/home-content-img.jpg') }}" alt="dealership"></div>
</div>
</div>
</div>
    </div>

        </section>
    </div>
</div>




@endsection
