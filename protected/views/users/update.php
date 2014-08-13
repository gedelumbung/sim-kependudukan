<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'User'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Users', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Users', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> View Users', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Users', 'url'=>array('admin')),
);
?>

<h3>Update Users <?php echo $model->id; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>