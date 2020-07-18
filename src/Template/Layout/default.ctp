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


$controller = $this->request->getParam('controller');
$action = $this->request->getParam('action');

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="webroot/font/icomoon/style.css">

    <link rel="stylesheet" href="webroot/css/bootstrap.min.css">
    <link rel="stylesheet" href="webroot/css/w3.css">
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

            header {
                padding-top: 15px !important;
                padding-bottom: 0px !important;
            }
        }
    </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div style="background-color: #f6f5f5" class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar site-navbar-target" role="banner" style="background-color: white; height: 100px">

        <div class="container">
            <div class="row align-items-center position-relative">

                <div class="col-3 ">

                    <div id="header-logo-row" class="site-logo row">
                        <a href="<?= $this->Url->build([
                            "controller" => "Pages",
                            "action" => "display",
                        ]); ?>"><img width="60px" src="webroot/img/logo.png"></a>
                        <div>
                            <p style="color:black;font-size: 14px;padding: 5px 0px 0px 5px;margin: 0px;">
                                北京大湖建设工程有限公司</p>
                            <p style="color:black;font-size: 14px;padding: 0px 0px 0px 5px;">Beijing GreatLake
                                Contractors Co., LTD</p>
                        </div>
                    </div>
                </div>

                <div class="col-9  text-right">


                    <span class="d-inline-block d-lg-none"><a href="#"
                                                              class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span
                                    class="icon-menu h3 text-white"></span></a></span>


                    <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">
                            <li id="home">
                                <div class="dropdown">
                                    <button type="button"  class="btn dropdown-toggle <?= strcmp($controller, 'Pages') === 0 && strcmp($action, 'aboutUs') === 0 ? "active" : ""; ?> <?= strcmp($controller, 'Pages') === 0 && strcmp($action, 'chairmanMessage') === 0 ? "active" : ""; ?>" data-toggle="dropdown">
                                        关于我们
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="about_us">公司简介</a>
                                        <a class="dropdown-item" href="chairman_message">董事长寄语</a>
                                    </div>
                                </div>
                            </li>
                            <li id="news">
                                <a href="news" class=" <?= strcmp($controller, 'News') === 0 && strcmp($action, 'index') === 0 ? "active" : "" ?> nav-link" style="text-align: center">公司新闻</a></li>

                            <li id="qualification">
                                <div class="dropdown">
                                    <button type="button"  class="btn dropdown-toggle <?= strcmp($controller, 'Pages') === 0 && strcmp($action, 'license') === 0 ? "active" : ""; ?> <?= strcmp($controller, 'Pages') === 0 && strcmp($action, 'qualification') === 0 ? "active" : ""; ?>" data-toggle="dropdown">
                                        公司资质
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="license">公司证照</a>
                                        <a class="dropdown-item" href="qualification">资质证照</a>


                                    </div>
                                </div>
                            </li>
                            <li id="qualification">
                                <div class="dropdown">
                                    <button type="button"  class="btn dropdown-toggle " data-toggle="dropdown">
                                        工程项目
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="coal_project">煤炭深加工项目</a>
                                        <a class="dropdown-item" href="decoration_project">室内装修项目</a>
                                        <a class="dropdown-item" href="oil_project">石油化工项目</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="design_project">工程设计院项目</a>


                                    </div>
                                </div>
                            </li>
                            <li id="Services">
                                <a <?= strcmp($controller, 'Pages') === 0 && strcmp($action, 'services') === 0 ? "class='active' " : "" ?>
                                        href="services" class="nav-link" style="text-align: center">服务内容</a></li>
                            <li id="contact">
                                <a <?= strcmp($controller, 'Pages') === 0 && strcmp($action, 'contact') === 0 ? "class='active' " : "" ?>
                                        href="contact" class="nav-link" style="text-align: center">联系我们</a></li>

                        </ul>
                    </nav>
                </div>


            </div>
        </div>

    </header>
    <div >
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
                        <div class="col-lg-6">
                            <h2 class="footer-heading mb-4">友商链接</h2>
                            <ul class="list-unstyled">
                                <li><a href="http://www.mohurd.gov.cn">中华人民共和国住房和城乡建设部</a></li>
                                <li><a href="https://www.cncec.cn/">中国化学工程集团有限公司</a></li>
                                <li><a href="http://hqcec.cnpc.com.cn/">中国寰球工程公司</a></li>
                                <li><a href="http://www.scccnce.com.cn/">中国化学工程第六建设有限公司</a></li>
                                <li><a href="http://www.cncec16.icoc.me/cn/">中国化学工程第十六建设有限公司</a></li>
                                <li><a href="http://www.zsceccl.cn/">中石化工建设有限公司</a></li>
                                <li><a href="http://www.scccnce.com.cn/">中国化学工程第六建设有限公司</a></li>
                                <li><a href="https://www.worleyparsons.com/">北京沃利工程技术有限公司</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="footer-heading mb-4">站内链接</h2>
                            <ul class="list-unstyled">
                                <li id="home">
                                    <a <?= strcmp($controller, 'Pages') === 0 && strcmp($action, 'display') === 0 ? "class='active' " : "" ?>
                                            href="<?= $this->Url->build([
                                                "controller" => "Pages",
                                                "action" => "display",
                                            ]); ?>" style="text-align: center">公司简介</a>
                                </li>
                                <li id="qualification"><a href="qualification" style="text-align: center">公司资质</a></li>
                                <li id="projects"><a href="projects" style="text-align: center">工程项目</a></li>
                                <li id="Services"><a href="services" style="text-align: center">业务内容</a></li>
                                <li id="contact"><a href="contact" style="text-align: center">联系我们</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5" style="padding: 0px !important;">
                        <p>
                            北京大湖建设工程有限公司 版权所有2020
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

