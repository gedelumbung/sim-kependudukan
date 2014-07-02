<?php
/* @var $this KematianController */
/* @var $model Kematian */

$this->breadcrumbs=array(
	'Kematian'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Kematian', 'url'=>array('kematian/index/'.$id)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kematian', 'url'=>array('kematian/admin/'.$id)),
);
?>

<h3>Create Kematian</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>