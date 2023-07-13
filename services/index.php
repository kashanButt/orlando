<?php

$settings = include_once '../settings.php';
$site_name = $settings["site"]["site_name"];
$base_url = $settings["site"]["base_url"];
$file_url = $settings["site"]["file_url"];
$img_url = $settings["assets"]["images"];

include_once '../partials/header.php';

?>
<div class="homeBanner banner serviceBanner">
    <div class="bannerContent">
        <h1>SCHEDULE A CAR SERVICE</h1>
        <button class="btn">Request a Service</button>
    </div>
</div>
<div class="serviceCenter flex">
    <div class="content">
        <h2><span class="span">Name</span> Service Center</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat molestias unde obcaecati itaque commodi
            corrupti aliquid blanditiis cum facilis sapiente sequi sed odio, temporibus numquam nihil laboriosam debitis
            minima? Nihil, eius aspernatur.</p>
        <h3>Our Services Include</h3>
        <div class="services flex">
            <div class="list">
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
            <div class="list">
                <span>
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
    <div class="image">
        <img src="<?php echo $img_url ?>service/service-center.webp" alt="">
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
<?php include_once '../partials/footer.php'; ?>