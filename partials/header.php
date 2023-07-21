<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        echo $site_name;
        ?>
    </title>
    <link rel="stylesheet" href="<?php echo $base_url ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="header sticky">
            <div class="upperHeader">
                <div class="icons">
                    <i class="fa-brands fa-facebook" style="color: #ffffff;"></i>
                    <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                </div>
                <div class="header-info">
                    <div class="phone">
                        <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
                        <p>+12 345 6789</p>
                    </div>
                    <div class="location">
                        <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i>
                        <p>4-6 Kingsland, Spur Tree, Manchester, Jamaica</p>
                    </div>
                    <div class="workHours">
                        <i class="fa-regular fa-calendar-days" style="color: #ffffff;"></i>
                        <p>Work Hours</p>
                    </div>
                </div>
            </div>
            <div class="headerNav">
                <div class="headerLogo">

                </div>
                <div class="navigation">
                    <nav>
                        <ul>
                            <li><a href="<?php echo $base_url; ?>">Home</a></li>
                            <li><a href="<?php echo $base_url; ?>\inventory">Inventory</a></li>
                            <li><a href="<?php echo $base_url; ?>\services">Services</a></li>
                            <li><a href="<?php echo $base_url; ?>\about-us">About Us</a></li>
                            <li><a href="<?php echo $base_url; ?>\contact-us">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>