<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php  
        wp_head();
    ?>
</head>

<body>
    <header>
        <div class="info-nav">
            <div class="social hide-m">
                <a href="<?php echo get_gcf("Header", "Instagram")?>" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="<?php echo get_gcf("Header", "Facebook")?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
            </div>
            <div class="logo hide-m">
                <a href="<?php echo home_url(); ?>"><?php the_custom_logo(); ?></a>
            </div>

            <div class="dropdown hide-d">
                <div class="topnav">
                    <div class=""><a href="#home" class="active"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-auto.png"></a></div>
                    <div id="myLinks">
                        <?php wp_nav_menu(array("theme-location" => "main-menu")) ?>
                    </div>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>

            <div class="phone hide-m"><?php echo get_gcf("Header", "Phone")?></div>
        </div>
        <div class="main-nav hide-m">
            <?php wp_nav_menu(array("theme-location" => "main-menu")) ?>
        </div>

        <script>
        function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
        </script>
    </header>