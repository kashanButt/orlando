<?php

$settings = include_once 'settings.php';
$site_name = $settings["site"]["site_name"];
$base_url = $settings["site"]["base_url"];
$file_url = $settings["site"]["file_url"];
$img_url = $settings["assets"]["images"];

include_once './partials/header.php';
?>
<div class="homeSearchOptions banner">
    <h2>Select Your Car</h2>
    <div class="searchOptions">
        <form method="post" class="flex">
            <div class="condition">
                <select name="homeSearchCondition" id="homeSearchCondition">
                    <option value="">Choose Condition</option>
                </select>
            </div>
            <div class="make">
                <select name="homeSearchMake" id="homeSearchMake">
                    <option value="">Choose Make</option>
                </select>
            </div>
            <div class="model">
                <select name="homeSearchModel" id="homeSearchModel">
                    <option value="">Choose Model</option>
                </select>
            </div>
            <div class="year">
                <select name="homeSearchYear" id="homeSearchYear">
                    <option value="">Choose Year</option>
                </select>
            </div>
            <div class="searchBtn">
                <button type="submit">Search</button>
            </div>
        </form>
    </div>
</div>
<div class="homeBanner banner" style="margin-top: 0;">
    <div class="bannerContent">
        <h1>READY FOR YOUR DREAM<br />CAR</h1>
        <button class="btn">Browse Car</button>
    </div>
</div>
<!-- <div class="homeSlider">
    <div class="slider-wrapper">
        <div class="slides-container" id="slides-container">
            <div class="slide">
                <img src="<?php echo $img_url; ?>/home/icons/car.svg" alt="">
                <h4>Car Name</h4>
                <span class="tags">Description</span>
                <p class="price">5400.9$</p>
            </div>
        </div>
    </div>
</div> -->
<div class="homeCarCompanies">
    <h2 class="heading">We Have</h2>
    <div class="companies flex">
        <div class="company">
            <img src="<?php echo $img_url ?>/home/Icons/pngegg-1.svg" alt="">
        </div>
        <div class="company">
            <img src="<?php echo $img_url ?>/home/Icons/pngegg-2.svg" alt="">
        </div>
        <div class="company">
            <img src="<?php echo $img_url ?>/home/Icons/pngegg-3.svg" alt="">
        </div>
        <div class="company">
            <img src="<?php echo $img_url ?>/home/Icons/pngegg-4.svg" alt="">
        </div>
        <div class="company">
            <img src="<?php echo $img_url ?>/home/Icons/pngegg-5.svg" alt="">
        </div>
        <div class="company">
            <img src="<?php echo $img_url ?>/home/Icons/pngegg-6.svg" alt="">
        </div>
        <div class="company">
            <img src="<?php echo $img_url ?>/home/Icons/pngegg-7.svg" alt="">
        </div>
        <div class="company">
            <img src="<?php echo $img_url ?>/home/Icons/pngegg.svg" alt="">
        </div>
    </div>
</div>
<div class="homeRecentCars banner">
    <h2 class="heading">Recent <span class="span">Cars</span></h2>
    <div class="recentCars flex banner">
        <div class="cars">
            <img src="<?php echo $img_url ?>/home/product-img.webp" alt="home product image">
            <h3>Black Sports Car</h3>
            <span class="price">4000.52 $</span><br />
            <button class="btn">Buy Now</button>
        </div>
        <div class="cars">
            <img src="<?php echo $img_url ?>/home/product-img.webp" alt="home product image">
            <h3>Black Sports Car</h3>
            <span class="price">4000.52 $</span><br />
            <button class="btn">Buy Now</button>
        </div>
        <div class="cars">
            <img src="<?php echo $img_url ?>/home/product-img.webp" alt="home product image">
            <h3>Black Sports Car</h3>
            <span class="price">4000.52 $</span><br />
            <button class="btn">Buy Now</button>
        </div>
    </div>
</div>
<div class="homeServiceInfo banner flex">
    <div class="service">
        <div class="content">
            <img src="<?php echo $img_url ?>/home/Icons/car.svg" alt="home product image">
            <h3>Looking for a Car?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dignissimos sunt odio aut sint nesciunt,
                nisi
                in soluta ratione dolorem, voluptate porro quo accusamus quisquam nam, distinctio quasi eaque dolor?</p>
            <button class="btn">Buy Dream Car</button>
        </div>
    </div>
    <div class="service">
        <div class="content">
            <img src="<?php echo $img_url ?>/home/Icons/wheel.svg" alt="home product image">
            <h3>Car Parts</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dignissimos sunt odio aut sint nesciunt,
                nisi
                in soluta ratione dolorem, voluptate porro quo accusamus quisquam nam, distinctio quasi eaque dolor?</p>
            <button class="btn">Buy Dream Car</button>
        </div>
    </div>
    <div class="service">
        <div class="content">
            <img src="<?php echo $img_url ?>/home/Icons/oil icon.svg" alt="home product image">
            <h3>Car Servicing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dignissimos sunt odio aut sint nesciunt,
                nisi
                in soluta ratione dolorem, voluptate porro quo accusamus quisquam nam, distinctio quasi eaque dolor?</p>
            <button class="btn">Buy Dream Car</button>
        </div>
    </div>
</div>
<div class="homeRecentCars banner">
    <h2 class="heading">Most Selling <span class="span">Cars</span></h2>
    <div class="recentCars flex banner">
        <div class="cars">
            <img src="<?php echo $img_url ?>/home/product-img.webp" alt="home product image">
            <h3>Black Sports Car</h3>
            <span class="price">4000.52 $</span><br />
            <button class="btn">Buy Now</button>
        </div>
        <div class="cars">
            <img src="<?php echo $img_url ?>/home/product-img.webp" alt="home product image">
            <h3>Black Sports Car</h3>
            <span class="price">4000.52 $</span><br />
            <button class="btn">Buy Now</button>
        </div>
        <div class="cars">
            <img src="<?php echo $img_url ?>/home/product-img.webp" alt="home product image">
            <h3>Black Sports Car</h3>
            <span class="price">4000.52 $</span><br />
            <button class="btn">Buy Now</button>
        </div>
    </div>
</div>
<div class="homeWhyChooseUs banner">
    <h2 class="heading">Why Choose Us</h2>
    <div class="whyChooseUs banner flex">
        <div class="financing">
            <img src="<?php echo $img_url ?>/home/Icons/finance icon.svg" alt="">
            <h4>Financing Made Easy</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic recusandae eum ea eaque. Incidunt tempore
                voluptatem quasi error voluptatibus ut odio? A reprehenderit molestias molestiae recusandae sint, fugiat
                distinctio quod deserunt consequuntur?</p>
        </div>
        <div class="brands">
            <img src="<?php echo $img_url ?>/home/Icons/meter icon.svg" alt="">
            <h4>Wide Range of Brands</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic recusandae eum ea eaque. Incidunt tempore
                voluptatem quasi error voluptatibus ut odio? A reprehenderit molestias molestiae recusandae sint, fugiat
                distinctio quod deserunt consequuntur?</p>
        </div>
        <div class="trust">
            <img src="<?php echo $img_url ?>/home/Icons/trust icon.svg" alt="">
            <h4>Trusted by Thousands</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic recusandae eum ea eaque. Incidunt tempore
                voluptatem quasi error voluptatibus ut odio? A reprehenderit molestias molestiae recusandae sint, fugiat
                distinctio quod deserunt consequuntur?</p>
        </div>
        <div class="maintenance">
            <img src="<?php echo $img_url ?>/home/Icons/maintenance icon.svg" alt="">
            <h4>Car Service & Maintenance</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic recusandae eum ea eaque. Incidunt tempore
                voluptatem quasi error voluptatibus ut odio? A reprehenderit molestias molestiae recusandae sint, fugiat
                distinctio quod deserunt consequuntur?</p>
        </div>
    </div>
    <button class="btn">Learn More</button>
</div>
<div class="homeBlogs">
    <h2 class="heading">The Latest New Car Releases and Expert Reviews</h2>
    <div class="blogs flex">
        <div class="blog">
            <img src="<?php echo $img_url ?>/home/blog-img-01.webp" alt="">
            <span>Expert View</span>
            <h4>2023 Land Rover Sport Review: A Recular Mix of Elegance and Awkwardness</h4>
            <hr class="hr">
            <div class="blogProfile flex">
                <div class="profileImg">
                    <img src="" alt="">
                </div>
                <div class="profileInfo">
                    <span>Jennifer Gelger</span>
                    <span>News Editor</span>
                </div>
            </div>
        </div>
        <div class="blog">
            <img src="<?php echo $img_url ?>/home/blog-img-02.webp" alt="">
            <span>Expert View</span>
            <h4>2023 Land Rover Sport Review: A Recular Mix of Elegance and Awkwardness</h4>
            <hr class="hr">
            <div class="blogProfile flex">
                <div class="profileImg">
                    <img src="" alt="">
                </div>
                <div class="profileInfo">
                    <span>Jennifer Gelger</span>
                    <span>News Editor</span>
                </div>
            </div>
        </div>
        <div class="blog">
            <img src="<?php echo $img_url ?>/home/blog-img-03.webp" alt="">
            <span>Expert View</span>
            <h4>2023 Land Rover Sport Review: A Recular Mix of Elegance and Awkwardness</h4>
            <hr class="hr">
            <div class="blogProfile flex">
                <div class="profileImg">
                    <img src="" alt="">
                </div>
                <div class="profileInfo">
                    <span>Jennifer Gelger</span>
                    <span>News Editor</span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once './partials/footer.php'; ?>