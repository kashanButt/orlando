<?php

$settings = include_once '../settings.php';
$site_name = $settings["site"]["site_name"];
$base_url = $settings["site"]["base_url"];
$file_url = $settings["site"]["file_url"];
$img_url = $settings["assets"]["images"];

include_once '../partials/header.php';
?>
<div class="homeBanner banner aboutUs">
    <div class="bannerContent">
        <h1>ABOUT US</h1>
        <button class="btn">Request A Service</button>
    </div>
</div>
<div class="serviceCenter flex">
    <div class="content">
        <h2><span class="span">About</span> Us</h2>
        <p class="bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quasi doloremque tempore
            quas dicta similique, natus odio magni iure ducimus placeat nobis necessitatibus tenetur perspiciatis fugiat
            autem veniam nulla commodi nostrum? Quas.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat molestias unde obcaecati itaque commodi
            corrupti aliquid blanditiis cum facilis sapiente sequi sed odio, temporibus numquam nihil laboriosam debitis
            minima? Nihil, eius aspernatur.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed quibusdam voluptates dolorum excepturi
            accusamus assumenda eos qui facere similique voluptas? Nesciunt natus quas optio neque quibusdam animi
            corporis corrupti eligendi soluta quo!
        </p>
    </div>
    <div class="image" style="height: 400px;">
        <img src="<?php echo $img_url ?>Aboutus/about-us.webp" alt="" style="height: 100%;">
    </div>
</div>
<div class="serviceCenter flex">
    <div class="image">
        <img src="<?php echo $img_url ?>Aboutus/our-vision.webp" alt="">
    </div>
    <div class="content">
        <h2><span class="span">Core</span> Values</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat molestias unde obcaecati itaque commodi
            corrupti aliquid blanditiis cum facilis sapiente sequi sed odio, temporibus numquam nihil laboriosam debitis
            minima? Nihil, eius aspernatur.</p>
        <div class="services flex">
            <div class="list" style="width: 100%;">
                <span class="icons">
                    <i class="fa-solid fa-check" style="color: #ffffff;"></i>General Automotive Repair
                </span><br>
                <span>
                    <i class="fa-solid fa-check" style="color: #ffffff;"></i>Preventative Car Maintenance
                </span><br>
                <span>
                    <i class="fa-solid fa-check" style="color: #ffffff;"></i>Air Conditioning and Heater Service
                </span><br>
                <span>
                    <i class="fa-solid fa-check" style="color: #ffffff;"></i>Cooling System and Radiator Repair
                </span><br>
                <span>
                    <i class="fa-solid fa-check" style="color: #ffffff;"></i>Synthetic Motor Oil Replacement
                </span>
            </div>
        </div>
    </div>
</div>
<div class="mediaGallery banner">
    <h2 class="heading">Media Gallery</h2>
    <hr>
    <div class="gallery flex">
        <div class="slide">
            <img src="<?php echo $img_url ?>Aboutus/product-gallery-one.webp" alt="">
        </div>
        <div class="slide">
            <img src="<?php echo $img_url ?>Aboutus/product-gallery-two.webp" alt="">
        </div>
        <div class="slide">
            <img src="<?php echo $img_url ?>Aboutus/product-gallery-three.webp" alt="">
        </div>
    </div>
    <div class="sliderHandles flex">
        <div class="handleRight">
            <i class="fa-solid fa-angle-up" style="color: #ffffff;"></i>
        </div>
        <div class="handleLeft">
            <i class="fa-solid fa-angle-up" style="color: #ffffff;"></i>
        </div>
    </div>
</div>
<div class="customerTestimonials banner flex">
    <div class="advantages">
        <h2>Our Advantages</h2>
        <div class="tabs banner">
            <div class="tabHeader banner flex">
                <div class="icon">
                    <i class="fa-solid fa-car" style="color: #000000;"></i>
                </div>
                <div class="tabHeading">
                    <h4>Do you want to sell your car?</h4>
                </div>
                <div class="openIcon">
                    <i class="fa-solid fa-plus" style="color: #0a0a0a;"></i>
                </div>
            </div>
            <div class="tabInfo banner display-none">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae labore corrupti praesentium iste? Quo
                    debitis temporibus vel, provident alias fuga at quia aliquam nisi ad voluptatem? Dolorum vel ab
                    maiores beatae tempore.</p>
            </div>
        </div>
        <div class="tabs banner">
            <div class="tabHeader banner flex">
                <div class="icon">
                    <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i>
                </div>
                <div class="tabHeading">
                    <h4>Are you looking for a new car?</h4>
                </div>
                <div class="openIcon">
                    <i class="fa-solid fa-plus" style="color: #0a0a0a;"></i>
                </div>
            </div>
            <div class="tabInfo banner display-none">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae labore corrupti praesentium iste? Quo
                    debitis temporibus vel, provident alias fuga at quia aliquam nisi ad voluptatem? Dolorum vel ab
                    maiores beatae tempore.</p>
            </div>
        </div>
        <div class="tabs banner">
            <div class="tabHeader banner flex">
                <div class="icon">
                    <i class="fa-solid fa-car" style="color: #000000;"></i>
                </div>
                <div class="tabHeading">
                    <h4>How to schedule a service online?</h4>
                </div>
                <div class="openIcon">
                    <i class="fa-solid fa-plus" style="color: #0a0a0a;"></i>
                </div>
            </div>
            <div class="tabInfo banner display-none">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae labore corrupti praesentium iste? Quo
                    debitis temporibus vel, provident alias fuga at quia aliquam nisi ad voluptatem? Dolorum vel ab
                    maiores beatae tempore.</p>
            </div>
        </div>
    </div>
    <div class="testimonials banner">
        <h2>Customer Testimonials</h2>
        <hr>
        <div class="customer banner flex">
            <div class="image">
                <img src="<?php echo $img_url ?>/Aboutus/client-image.webp" alt="">
            </div>
            <div class="content">
                <h3>Motor is absolutely wonderfull!</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo doloribus beatae non deleniti et ut
                    numquam corporis, fugit consectetur ab autem nulla dolores dicta tenetur eveniet magni rem id
                    dignissimos ad ipsum.</p>
                <span>Baxton Ion</span>
            </div>
        </div>
        <hr>
        <div class="sliderBtns flex">
            <div class="rightBtn">
                <i class="fa-solid fa-angle-up" style="color: #ffffff;"></i>
            </div>
            <div class="leftBtn">
                <i class="fa-solid fa-angle-up" style="color: #ffffff;"></i>
            </div>
        </div>
    </div>
</div>
<?php include_once '../partials/footer.php'; ?>