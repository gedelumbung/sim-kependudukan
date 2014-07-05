<?php
/* @var $this KetenagakerjaanController */
/* @var $model ArtPerorangan */

$this->breadcrumbs=array(
	'Art Perorangan'=>array('index'),
	$model->id_art_perorangan=>array('view','id'=>$model->id_art_perorangan),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List ArtPerorangan', 'url'=>array('index', 'id'=>$model->Art->id_rt)),
	array('label'=>'<i class="icon icon-adjust"></i> Create ArtPerorangan', 'url'=>array('create', 'id'=>$model->Art->id_rt)),
	array('label'=>'<i class="icon icon-eye-open"></i> View ArtPerorangan', 'url'=>array('view', 'id'=>$model->id_art_perorangan)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage ArtPerorangan', 'url'=>array('admin', 'id'=>$model->Art->id_rt)),
);
?>

<h3>Update ArtPerorangan <?php echo $model->id_art_perorangan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$model->Art->id_rt)); ?>