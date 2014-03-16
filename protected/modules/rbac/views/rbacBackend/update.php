<?php
$this->breadcrumbs = array(
    'Действия' => array('admin'),
    $model->name => array('view', 'id' => $model->name),
    'Редактирование',
);

$this->menu = array(
    array('label' => Yii::t('RbacModule.rbac', 'Roles'), 'items' => array(
        array('icon' => 'list-alt', 'label' => Yii::t('RbacModule.rbac', 'Manage roles'), 'url' => array('/rbac/rbacBackend/index')),
        array('icon' => 'plus-sign', 'label' => Yii::t('RbacModule.rbac', 'Create role'), 'url' => array('/rbac/rbacBackend/create')),
    )),
    array('label' => Yii::t('RbacModule.rbac', 'Assign'), 'items' => array(
        array('icon' => 'list-alt', 'label' => Yii::t('RbacModule.rbac', 'Assign roles'), 'url' => array('/user/tokensBackend/index')),
    )),
);

?>

<h1>Редактирование действия "<?php echo $model->description; ?>" (<?php echo $model->getType() . ' ' . $model->name;?>
    )</h1>

<?php echo $this->renderPartial(
    '_form',
    array('model' => $model, 'operations' => $operations, 'tasks' => $tasks, 'listModels' => $listModels)
); ?>