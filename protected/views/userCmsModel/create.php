<?php
/* @var $this UserCmsModelController */
/* @var $model UserCmsModel */

$this->breadcrumbs=array(
	'User Cms Model'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List UserCmsModel', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage UserCmsModel', 'url'=>array('admin')),
);
?>

<h3>Create UserCmsModel</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>