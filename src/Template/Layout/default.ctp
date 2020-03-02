<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="webroot/font/icomoon/style.css">

    <link rel="stylesheet" href="webroot/css/bootstrap.min.css">
    <link rel="stylesheet" href="webroot/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="webroot/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="webroot/css/owl.carousel.min.css">
    <link rel="stylesheet" href="webroot/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="webroot/font/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="webroot/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="webroot/css/style.css">
    <style>
        @media only screen and (min-width: 600px) {
            #header-logo-row {
                min-width: 600px;
            }

            .col-lg-5 {
                padding-top: 60px;
            }
        }

        @media only screen and (max-width: 600px) {

            #header-logo-row {
                min-width: 180px;
            }

            header{
                padding-top: 15px  !important;
                padding-bottom: 0px !important;
            }
        }
    </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar site-navbar-target" role="banner" style="background-color: white">

        <div class="container">
            <div class="row align-items-center position-relative">

                <div class="col-3 ">

                    <div id="header-logo-row" class="site-logo row">
                        <a href="<?= $this->Url->build([
                            "controller" => "Pages",
                            "action" => "display",
                        ]); ?>"><img width="60px" src="webroot/img/logo.png"></a>
                        <div >
                            <p style="color:black;font-size: 14px;padding: 5px 0px 0px 5px;margin: 0px;">
                                北京大湖建设工程有限公司</p>
                            <p style="color:black;font-size: 14px;padding: 0px 0px 0px 5px;">Beijing GreatLake
                                Contractors Co,LTD</p>
                        </div>
                    </div>
                </div>

                <div class="col-9  text-right">


                    <span class="d-inline-block d-lg-none"><a href="#"
                                                              class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span
                                    class="icon-menu h3 text-white"></span></a></span>


                    <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">
                            <li class="active"><a href="index.html" class="nav-link" style="text-align: center">公司简介</a>
                            </li>
                            <li><a href="index.html" class="nav-link" style="text-align: center">关于我们</a></li>
                            <li><a href="index.html" class="nav-link" style="text-align: center">公司资质</a></li>
                            <li><a href="index.html" class="nav-link" style="text-align: center">工程项目</a></li>
                            <li><a href="index.html" class="nav-link" style="text-align: center">服务内容</a></li>
                            <li><a href="index.html" class="nav-link" style="text-align: center">联系我们</a></li>

                        </ul>
                    </nav>
                </div>


            </div>
        </div>

    </header>
    <div>
        <?= $this->fetch('content') ?>
    </div>
    <footer class="site-footer" style="padding-bottom: 0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h2 class="footer-heading mb-4">关于我们</h2>
                    <p>写点啥</p>
                </div>
                <div class="col-lg-8 ml-auto">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2 class="footer-heading mb-4">友商链接</h2>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h2 class="footer-heading mb-4">站内链接</h2>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5" style="padding: 0px !important;">
                        <p>
                            Copyright info
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

</div>

<script src="webroot/js/jquery-3.3.1.min.js"></script>
<script src="webroot/js/popper.min.js"></script>
<script src="webroot/js/bootstrap.min.js"></script>
<script src="webroot/js/owl.carousel.min.js"></script>
<script src="webroot/js/jquery.sticky.js"></script>
<script src="webroot/js/jquery.waypoints.min.js"></script>
<script src="webroot/js/jquery.animateNumber.min.js"></script>
<script src="webroot/js/jquery.fancybox.min.js"></script>
<script src="webroot/js/jquery.easing.1.3.js"></script>
<script src="webroot/js/bootstrap-datepicker.min.js"></script>
<script src="webroot/js/aos.js"></script>

<script src="webroot/js/main.js"></script>

</body>

</html>

