<?php
spl_autoload_register(function ($class_name) {
    include 'dashboard/lib/' . $class_name . '.php';
});
?>
<!DOCTYPE html>
<html>
<head>
    <head>
        <meta charset="utf-8">

        <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Use title if it's in the page YAML frontmatter -->
        <title>XAMPP Custom Dashboard</title>

        <meta name="description" content="XAMPP is an easy to install Apache distribution containing MariaDB, PHP and Perl." />
        <meta name="keywords" content="xampp, apache, php, perl, mariadb, open source distribution" />

        <link href="dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" />
        <link href="dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <script src="dashboard/javascripts/modernizr.js" type="text/javascript"></script>


        <link href="dashboard/images/favicon.png" rel="icon" type="image/png" />
    </head>
</head>

<body>

    <body class="index">
        <div id="fb-root"></div>
        <!-- <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=277385395761685";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script> -->
        <div class="contain-to-grid">
            <nav class="top-bar" data-topbar>
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="index.php">Home</a></h1>
                    </li>
                    <li class="toggle-topbar menu-icon">
                        <a href="#">
                            <span>Menu</span>
                        </a>
                    </li>
                </ul>

                <section class="top-bar-section">
                    <!-- Right Nav Section -->
                    <ul class="right">
                        <li class=""><a href="index.php?action=addForm">Add Project</a></li>
                        <li class=""><a target="_blank" href="dashboard/action/phpinfo.php">PHPInfo</a></li>
                        <li class=""><a target="_blank" href="/phpmyadmin/">phpMyAdmin</a></li>
                        <!-- <li class=""><a target="_blank" href="">Original Dashboard</a></li> -->
                        <li class=""><a target="_blank" href="http://sisa.kess.com.pl/">About Modder</a></li>
                    </ul>
                </section>
            </nav>
        </div>

        <div id="wrapper">
            <div class="hero">
                <div class="row">
                    <div class="large-12 columns">
                        <h1><img src="/dashboard/images/xampp-logo.svg" />XAMPP <span>Custom Dashboard by Sisa</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <?php
                        include 'dashboard/router.php';
                    ?>
                </div>
            </div>
        </div>

        <footer>
            <div class="row">
                <div class="large-12 columns">
                    <div class="row">
                        <div class="large-4 columns">
                            <p class="text-left">Copyright (c) 2017, Apache Friends modify by Sisa</p>
                        </div>
                        <div class="large-4 columns">
                            <p class="text-right">Mod Version: Alpha</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JS Libraries -->
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="/dashboard/javascripts/all.js" type="text/javascript"></script>
    </body>

</body>

</html>