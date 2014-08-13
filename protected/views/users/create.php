<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'User'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Users', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Users', 'url'=>array('admin')),
);
?>

<h3>Create Users</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>