<?php
$mainAssets = Yii::app()->AssetManager->publish(Yii::app()->theme->basePath . "/web/");
Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/camera/camera.js');
Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/camera/setting.js');
?>
<!-- section featured -->
<section id="featured">
    <!-- slideshow start here -->
    <div class="camera_wrap" id="camera-slide">

        <!-- slide 1 here -->
        <div data-src="img/slides/camera/slide1/img1.jpg">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row">
                        <div class="span6">

                            <h2 style="text-shadow: 3px 4px 2px rgba(150, 150, 150, 1);margin-top:200px" class="animated fadeInDown"><strong>Напыляемое<span style="text-shadow: 3px 4px 2px #000;" class="colored">&nbsp;пробковое&nbsp;покрытие</span></strong></h2>
                            <a class="btn btn-large btn-danger" href="#buy-now"><i class="fa fa-rub"></i> Заказать прямо сейчас с 5% скидкой</a>

                            <!--<a href="#" class="btn btn-success btn-large animated fadeInUp">
                                <i class="icon-link"></i> Read more
                            </a>
                            <a href="#" class="btn btn-theme btn-large animated fadeInUp">
                                <i class="icon-download"></i> Download
                            </a>-->
                        </div>
                        <div class="span6">
                            <img src="/web/images/vedro.png" alt="" class="animated bounceInDown delay1"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- slide 2 here -->
        <div data-src="img/slides/camera/slide2/img1.jpg">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <img src="/web/images/colors-circle.png" alt=""/>
                        </div>
                        <div class="span6">
                            <h2 class="animated fadeInDown"><strong>Заказать <span class="colored">обратный звонок</span></strong></h2>

                            <p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi dissentiet cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne, dolores appetere vim ut. Sea no tamquam reprimique.</p>

                            <form>
                                <div class="input-append">
                                    <input class="span3 input-large" type="text">
                                    <button class="btn btn-danger btn-large" type="submit">Заказать</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- slide 3 here -->
        <!--<div data-src="img/slides/camera/slide2/img1.jpg">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row">
                        <div class="span12 aligncenter">
                            <h2 class="animated fadeInDown"><strong><span class="colored">Responsive</span> and <span class="colored">cross broswer</span> compatibility</strong></h2>

                            <p class="animated fadeInUp">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                            <img src="img/slides/camera/slide3/browsers.png" alt="" class="animated bounceInDown delay1"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    <!-- slideshow end here -->

</section>
<!-- /section featured -->