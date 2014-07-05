<?php
/* @var $this KesehatanController */
/* @var $model ArtPerorangan */

$this->breadcrumbs=array(
	'Art Perorangan'=>array('index'),
	$model->id_art_perorangan=>array('view','id'=>$model->id_art_perorangan),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Kesehatan Art', 'url'=>array('index', 'id'=>$model->Art->id_rt)),
	array('label'=>'<i class="icon icon-adjust"></i> Create Kesehatan Art', 'url'=>array('create', 'id'=>$model->Art->id_rt)),
	array('label'=>'<i class="icon icon-eye-open"></i> View Kesehatan Art', 'url'=>array('view', 'id'=>$model->id_art_perorangan)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kesehatan Art', 'url'=>array('admin', 'id'=>$model->Art->id_rt)),
);
?>

<h3>Update Art Perorangan <?php echo $model->id_art_perorangan; ?> - Keterangan Kesehatan</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->Art->id_rt)); ?>