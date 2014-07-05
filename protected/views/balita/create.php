<?php
/* @var $this BalitaController */
/* @var $model ArtPerorangan */

$this->breadcrumbs=array(
	'Art Perorangan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Balita', 'url'=>array('index', 'id' => $id)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Balita', 'url'=>array('admin', 'id' => $id)),
);
?>

<h3>Create Art Perorangan - Kesehatan Balita</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $id)); ?>