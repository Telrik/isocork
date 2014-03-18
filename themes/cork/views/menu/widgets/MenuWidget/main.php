<div class="navbar-wrapper">
    <div class="container">
        <?php
        $this->widget('bootstrap.widgets.TbNavbar', array(
            'collapse' => true,
            //'type' => 'inverse',
            'fixed' => false,
            'fluid' => true,
            'brand' => 'isocork77.ru',
            'brandUrl' => array('/' . Yii::app()->defaultController . '/index/'),
            'items' => array(
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'items' => $this->params['items'],
                ),
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'items' => $this->controller->yupe->getLanguageSelectorArray(),
                    'htmlOptions' => array(
                        'class' => 'pull-right',
                    ),
                )
            ),
        ));
        ?>
    </div>
</div>