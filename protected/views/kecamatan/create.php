<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */

$this->breadcrumbs=array(
	'Kecamatan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Kecamatan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kecamatan', 'url'=>array('admin')),
);
?>

<h3>Create Kecamatan</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>