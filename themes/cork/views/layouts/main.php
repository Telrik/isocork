<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language; ?>">
<head prefix="og: http://ogp.me/ns#
    fb: http://ogp.me/ns/fb#
    article: http://ogp.me/ns/article#">
    <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
    <meta charset="<?php echo Yii::app()->charset; ?>"/>
    <meta name="keywords" content="<?php echo $this->keywords; ?>"/>
    <meta name="description" content="<?php echo $this->description; ?>"/>
    <meta property="og:title" content="<?php echo CHtml::encode($this->pageTitle); ?>"/>
    <meta property="og:description" content="<?php echo $this->description; ?>"/>
    <?php
    $mainAssets = Yii::app()->AssetManager->publish(Yii::app()->theme->basePath . "/web/");

    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/flexslider.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/prettyPhoto.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/camera.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/jquery.bxslider.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/style.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/green.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/bootstrap-switch.css');
    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/fix.css');

    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/blog.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/prettify.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/modernizr.custom.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/toucheffects.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.easing.1.3.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.bxslider.min.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.prettyPhoto.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.cookie.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/jquery.flexslider.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/bootstrap-switch.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/animate.js');

    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/custom.js');
    ?>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>
        jQuery(document).ready(function ($) {
            $("#make-wide").click(function () {
                if ($('#wrapper').hasClass("boxed")) {
                    $.cookie($('#wrapper').removeClass("boxed"));
                    $('#root-container').removeClass("container");
                } else {
                    $.cookie($('#wrapper').addClass("boxed"));
                    $('#root-container').addClass("container");
                }
                return false;
            });
        });
    </script>
</head>

<body>

<div id="wrapper" class="boxed">
    <!-- start header -->
    <header>
        <div class="top">
            <div class="container">
                <div class="row">
                    <a href="#" id="make-wide" class="btn btn-inverse btn-mini pull-left" style="margin-right:10px;margin-left:10px;margin-bottom:10px">
                        <i class="fa fa-arrow-left"></i> <i class="fa fa-flask"></i> <i class="fa fa-arrow-right"></i>
                    </a>

                    <div class="pull-right">
                        <p class="topcontact"><i class="icon-phone"></i> +7 929 6078021, +7 985 6006130, +7 495 6516119</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row nomargin">
                <div class="span1">
                    <div class="logo">
                        <a href="/"><img src="/web/images/cork-logo.png" alt=""/></a>
                    </div>
                </div>
                <div class="span11">
                    <?php $this->widget('application.modules.menu.widgets.MenuWidget', array('name' => 'top-menu')); ?>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <?php if ($this->id == 'site' && $this->action->id == 'index') $this->renderPartial('//layouts/_slider'); ?>

    <?php //$this->widget('application.components.widgets.HomeCarousel', array('limit' => 32)); ?>

    <!-- container -->
    <div id='root-container' class='container'>
        <!-- flashMessages -->
        <?php $this->widget('yupe\widgets\YFlashMessages'); ?>
        <!-- breadcrumbs -->
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumbs',
            array(
                'links' => $this->breadcrumbs,
            )
        );?>
        <div class="row-fluid">
            <div class="span12">
                <!-- content -->
                <section class="span12 content">
                    <?php echo $content; ?>
                </section>
                <!-- content end-->
            </div>
        </div>

        <!-- footer -->
        <?php $this->renderPartial('//layouts/_footer'); ?>
        <!-- footer end -->

    </div>

    <!-- container end -->
    <?php $this->widget(
        "application.modules.contentblock.widgets.ContentBlockWidget",
        array("code" => "STAT", "silent" => true)
    ); ?>
</body>
</html>
