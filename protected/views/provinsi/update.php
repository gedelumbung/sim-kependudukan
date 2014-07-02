<?php
/* @var $this ProvinsiController */
/* @var $model Provinsi */

$this->breadcrumbs=array(
	'Provinsi'=>array('index'),
	$model->id_provinsi=>array('view','id'=>$model->id_provinsi),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Provinsi', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Provinsi', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> View Provinsi', 'url'=>array('view', 'id'=>$model->id_provinsi)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Provinsi', 'url'=>array('admin')),
);
?>

<h3>Update Provinsi <?php echo $model->id_provinsi; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>