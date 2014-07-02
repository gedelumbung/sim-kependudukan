<?php
/* @var $this KabupatenController */
/* @var $model Kabupaten */

$this->breadcrumbs=array(
	'Kabupaten'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Kabupaten', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kabupaten', 'url'=>array('admin')),
);
?>

<h3>Create Kabupaten</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>