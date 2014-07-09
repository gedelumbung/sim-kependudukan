<?php
/* @var $this KbController */
/* @var $model ArtPerorangan */

$this->breadcrumbs=array(
	'Art Perorangan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List ArtPerorangan', 'url'=>array('index', 'id' => $id)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage ArtPerorangan', 'url'=>array('admin', 'id' => $id)),
);
?>

<h3>Create Art Perorangan - Keterangan Fertilitas / Keluarga Berencana</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $id)); ?>