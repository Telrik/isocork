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
    $mainAssets = Yii::app()->AssetManager->publish(
        Yii::app()->theme->basePath . "/web/"
    );

    Yii::app()->clientScript->registerCssFile($mainAssets . '/css/yupe.css');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/blog.js');
    Yii::app()->clientScript->registerScriptFile($mainAssets . '/js/holder.js');
    ?>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<?php $this->widget('application.modules.menu.widgets.MenuWidget', array('name' => 'top-menu')); ?>

<?php $this->widget('application.components.widgets.HomeCarousel', array('limit' => 32)); ?>

<!-- container -->
<div class='container'>
    <!-- flashMessages -->
    <?php $this->widget('yupe\widgets\YFlashMessages'); ?>
    <!-- breadcrumbs -->
    <?php $this->widget(
        'bootstrap.widgets.TbBreadcrumbs',
        array(
            'links' => $this->breadcrumbs,
        )
    );?>
    <div class="row">
        <!-- content -->
        <section class="span9 content">
            <?php echo $content; ?>
        </section>
        <!-- content end-->
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
