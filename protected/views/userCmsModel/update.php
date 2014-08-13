<?php
/* @var $this UserCmsModelController */
/* @var $model UserCmsModel */

$this->breadcrumbs=array(
	'User Cms Model'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List UserCmsModel', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create UserCmsModel', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> View UserCmsModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage UserCmsModel', 'url'=>array('admin')),
);
?>

<h3>Update UserCmsModel <?php echo $model->id; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>