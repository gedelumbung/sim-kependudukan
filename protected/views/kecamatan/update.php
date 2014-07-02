<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */

$this->breadcrumbs=array(
	'Kecamatan'=>array('index'),
	$model->id_kecamatan=>array('view','id'=>$model->id_kecamatan),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Kecamatan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Kecamatan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> View Kecamatan', 'url'=>array('view', 'id'=>$model->id_kecamatan)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kecamatan', 'url'=>array('admin')),
);
?>

<h3>Update Kecamatan <?php echo $model->id_kecamatan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>