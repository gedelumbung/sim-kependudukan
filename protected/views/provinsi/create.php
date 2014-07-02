<?php
/* @var $this ProvinsiController */
/* @var $model Provinsi */

$this->breadcrumbs=array(
	'Provinsi'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Provinsi', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Provinsi', 'url'=>array('admin')),
);
?>

<h3>Create Provinsi</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>