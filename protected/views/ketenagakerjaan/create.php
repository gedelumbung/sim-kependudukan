<?php
/* @var $this KetenagakerjaanController */
/* @var $model ArtPerorangan */

$this->breadcrumbs=array(
	'Art Perorangan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Ketenagakerjaan', 'url'=>array('index', 'id' => $id)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Ketenagakerjaan', 'url'=>array('admin', 'id' => $id)),
);
?>

<h3>Create Art Perorangan - Ketenagakerjaan</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $id)); ?>