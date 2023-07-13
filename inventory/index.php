<?php

$settings = include_once '../settings.php';
$site_name = $settings["site"]["site_name"];
$base_url = $settings["site"]["base_url"];
$file_url = $settings["site"]["file_url"];
$img_url = $settings["assets"]["images"];

include_once '../partials/header.php';

?>
<div class="homeBanner banner inventoryBanner">
    <div class="bannerContent">
        <h1>WELCOME TO INVENTORY</h1>
    </div>
</div>
<div class="inventoryHeading banner">
    <div class="content">
        <h2>Vehicle For Sale</h2>
        <p><span>26</span> Matches</p>
    </div>
</div>
<div class="inventoryView banner flex">
    <div class="tools">
        <form method="post">
            <div class="conditionSearch search">
                <h3>Condition</h3>
                <input type="radio" name="used" id="used">Used <br>
                <input type="radio" name="new" id="new">New <br>
                <input type="radio" name="reserved" id="reserved">Reserved <br>
                <input type="radio" name="sold" id="sold">Sold <br>
            </div>
            <div class="makeSearch search">
                <h3>Make</h3>
                <input type="radio" name="toyota" id="toyota">Toyota <br>
                <input type="radio" name="honda" id="honda">Honda <br>
                <input type="radio" name="bmw" id="bmw">bmw <br>
                <input type="radio" name="sold" id="sold">Sold <br>
            </div>
            <div class="yearSearch search">
                <h3>Year</h3>
                <input type="radio" name="1999" id="1999">1999 <br>
                <input type="radio" name="2000" id="2000">2000 <br>
                <input type="radio" name="2001" id="2001">2001 <br>
                <input type="radio" name="2002" id="2002">2002 <br>
            </div>
        </form>
    </div>
    <div class="inventory">
        <div class="stock flex">
            <div class="invImg">
            </div>
            <div class="invContent">
                <div class="headingPrice flex">
                    <div class="heading">
                        <h3>Toyota Aqua 2021</h3>
                    </div>
                    <div class="priceTag">
                        <span class="tag">
                            $145,000
                        </span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium sunt, deserunt sit impedit quod
                    quasi, eum repudiandae maiores, rerum et nam suscipit a.</p>
                <div class="carSpecs flex">
                    <div class="mileage">
                        <img src="<?php echo $img_url ?>/inventory/" alt="">
                        <p>4000 Km</p>
                    </div>
                    <div class="fuelType">
                        <img src="<?php echo $img_url ?>/inventory/" alt="">
                        <p>Hybrid</p>
                    </div>
                    <div class="engine">
                        <img src="<?php echo $img_url ?>/inventory/" alt="">
                        <p>1500</p>
                    </div>
                </div>
                <button class="view-more btn">View More</button>
            </div>
        </div>
        <div class="stock flex">
            <div class="invImg">
            </div>
            <div class="invContent">
                <div class="headingPrice flex">
                    <div class="heading">
                        <h3>Toyota Aqua 2021</h3>
                    </div>
                    <div class="priceTag">
                        <span class="tag">
                            $145,000
                        </span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium sunt, deserunt sit impedit quod
                    quasi, eum repudiandae maiores, rerum et nam suscipit a.</p>
                <div class="carSpecs flex">
                    <div class="mileage">
                        <img src="<?php echo $img_url ?>/inventory/" alt="">
                        <p>4000 Km</p>
                    </div>
                    <div class="fuelType">
                        <img src="<?php echo $img_url ?>/inventory/" alt="">
                        <p>Hybrid</p>
                    </div>
                    <div class="engine">
                        <img src="<?php echo $img_url ?>/inventory/" alt="">
                        <p>1500</p>
                    </div>
                </div>
                <button class="view-more btn">View More</button>
            </div>
        </div>
        <div class="stock flex">
            <div class="invImg">
            </div>
            <div class="invContent">
                <div class="headingPrice flex">
                    <div class="heading">
                        <h3>Toyota Aqua 2021</h3>
                    </div>
                    <div class="priceTag">
                        <span class="tag">
                            $145,000
                        </span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium sunt, deserunt sit impedit quod
                    quasi, eum repudiandae maiores, rerum et nam suscipit a.</p>
                <div class="carSpecs flex">
                    <div class="mileage">
                        <img src="<?php echo $img_url ?>/inventory/" alt="">
                        <p>4000 Km</p>
                    </div>
                    <div class="fuelType">
                        <img src="<?php echo $img_url ?>/inventory/" alt="">
                        <p>Hybrid</p>
                    </div>
                    <div class="engine">
                        <img src="<?php echo $img_url ?>/inventory/" alt="">
                        <p>1500</p>
                    </div>
                </div>
                <button class="view-more btn">View More</button>
            </div>
        </div>
    </div>
</div>
<?php
include_once '../partials/footer.php';
?>