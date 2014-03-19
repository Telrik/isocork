<?php
$this->pageTitle = Yii::t('FeedbackModule.feedback', 'Contacts');
$this->breadcrumbs = array(Yii::t('FeedbackModule.feedback', 'Contacts'));
Yii::import('application.modules.feedback.FeedbackModule');
Yii::import('application.modules.install.InstallModule');
?>

<?php $this->widget('yupe\widgets\YFlashMessages'); ?>
<h1><?php echo Yii::t('FeedbackModule.feedback', 'Contacts'); ?></h1>

<div class="row-fluid">
    <div class="span4">
        <h4>Телефон: +79296078021</h4>
    </div>
    <div class="span8">

        <div style="padding: 5px; border: 1px solid #CCC">
            <?php
            Yii::import('ext.gmap.*');
            $gMap = new EGMap();
            $gMap->zoom = 13;
            $gMap->setWidth('100%');
            $gMap->setHeight('300');

            $gMap->setCenter(25.279704, 55.453685);

            // Create marker
            $marker = new EGMapMarker(25.279704, 55.453685, array('title' => 'Our location'));
            $gMap->addMarker($marker);
            $gMap->renderMap();
            ?>
        </div>

        <br/>

        <div class="form">
            <?php $form = $this->beginWidget(
                'bootstrap.widgets.TbActiveForm',
                array(
                    'id' => 'feedback-form',
                    'type' => 'vertical',
                    'inlineErrors' => true,
                    'htmlOptions' => array(
                        'class' => 'well',
                    )
                )
            ); ?>

            <p class="note"><?php echo Yii::t('FeedbackModule.feedback', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('FeedbackModule.feedback', 'are required.'); ?></p>

            <?php echo $form->errorSummary($model); ?>

            <?php if ($model->type): ?>
                <div class='row-fluid control-group <?php echo $model->hasErrors('type') ? 'error' : ''; ?>'>
                    <?php echo $form->dropDownListRow($model, 'type', $module->types, array('class' => 'span6', 'required' => true)); ?>
                </div>
            <?php endif; ?>

            <div class='row-fluid control-group <?php echo $model->hasErrors('name') ? 'error' : ''; ?>'>
                <?php echo $form->textFieldRow($model, 'name', array('class' => 'span6', 'required' => true)); ?>
            </div>

            <div class='row-fluid control-group <?php echo $model->hasErrors('email') ? 'error' : ''; ?>'>
                <?php echo $form->textFieldRow($model, 'email', array('class' => 'span6', 'required' => true)); ?>
            </div>

            <div class='row-fluid control-group <?php echo $model->hasErrors('theme') ? 'error' : ''; ?>'>
                <?php echo $form->textFieldRow($model, 'theme', array('class' => 'span6', 'required' => true)); ?>
            </div>

            <div class='row-fluid control-group <?php echo $model->hasErrors('text') ? 'error' : ''; ?>'>
                <?php echo $form->textAreaRow($model, 'text', array('class' => 'span8', 'rows' => 10, 'required' => true)); ?>
            </div>

            <?php if ($module->showCaptcha && !Yii::app()->user->isAuthenticated()): ?>
                <?php if (CCaptcha::checkRequirements()): ?>

                    <?php echo $form->labelEx($model, 'verifyCode'); ?>

                    <?php $this->widget(
                        'CCaptcha',
                        array(
                            'showRefreshButton' => true,
                            'imageOptions' => array(
                                'width' => '150',
                            ),
                            'buttonOptions' => array(
                                'class' => 'btn',
                            ),
                            'buttonLabel' => '<i class="icon-repeat"></i>',
                        )
                    ); ?>

                    <div class='row-fluid control-group <?php echo $model->hasErrors('verifyCode') ? 'error' : ''; ?>'>
                        <?php echo $form->textFieldRow($model, 'verifyCode', array('placeholder' => Yii::t('FeedbackModule.feedback', 'Insert symbols you see on image'), 'class' => 'span6', 'required' => true)); ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php
            $this->widget(
                'bootstrap.widgets.TbButton',
                array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'label' => Yii::t('FeedbackModule.feedback', 'Send message'),
                )
            ); ?>


            <?php $this->endWidget(); ?>
        </div>

    </div>
</div>