<?php
/* @var $this PendidikanController */
/* @var $model ArtPerorangan */

$this->breadcrumbs=array(
	'Art Perorangan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List ArtPerorangan', 'url'=>array('index', 'id'=>$id)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage ArtPerorangan', 'url'=>array('admin', 'id'=>$id)),
);
?>

<h3>Create Art Perorangan - Keterangan Pendidikan</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>