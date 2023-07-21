<?php

$settings = include_once '../settings.php';
$site_name = $settings["site"]["site_name"];
$base_url = $settings["site"]["base_url"];
$file_url = $settings["site"]["file_url"];
$img_url = $settings["assets"]["images"];

include_once '../partials/header.php';
?>
<div class="homeBanner banner contactBanner">
    <div class="bannerContent">
        <h1>Contact Us</h1>
    </div>
</div>
<div class="contactPageForm">
    <h1 class="heading">Contact Us</h1>
    <div class="form">
        <form method="post" class="flex">
            <div class="section flex">
                <div class="sub-section">
                    <span>First Name</span><br>
                    <input type="text" name="contactFormFName" id="contactFormFName" required><br>
                    <span>Email</span><br>
                    <input type="email" name="contactFormEmail" id="contactFormEmail" required>
                </div>
                <div class="sub-section">
                    <span>Last Name</span><br>
                    <input type="text" name="contactFormLName" id="contactFormLName" required><br>
                    <span>Phone</span><br>
                    <input type="number" name="contactFormPhone" id="contactFormPhone" required>
                </div>
            </div>
            <div class="section">
                <span>Comment</span><br>
                <textarea name="contactFormComment" id="contactFormComment" cols="85" rows="6"></textarea><br>
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>
</div>
<div class="contactPageAddress flex">
    <div class="address">
        <div class="info banner flex">
            <div class="img">
                <i class="fa-solid fa-location-dot" style="color: #000000;"></i>
            </div>
            <div class="content">
                <h3>Address</h3>
                <p>Your location,</p>
                <p>City, Sate,</p>
                <p>Zip</p>
            </div>
        </div>
        <div class="info banner flex">
            <div class="img">
                <i class="fa-solid fa-phone" style="color: #000000;"></i>
            </div>
            <div class="content">
                <h3>Phone</h3>
                <p>+1 234 567 8900</p>
            </div>
        </div>
        <div class="info banner flex">
            <div class="img">
                <i class="fa-solid fa-clock" style="color: #000000;"></i>
            </div>
            <div class="content">
                <h3>Timing</h3>
                <p>Mon - Fri: 08:00 AM - 06:00 PM</p>
                <p>Sat: 09:00 AM - 06:00 PM</p>
                <p>Subday: Closed</p>
            </div>
        </div>
    </div>
    <div class="location">
        <img src="<?php echo $img_url ?>/Contact/location.webp" alt="location">
    </div>
</div>
<?php include_once '../partials/footer.php'; ?>