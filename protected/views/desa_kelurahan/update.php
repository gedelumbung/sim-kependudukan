<?php
/* @var $this Desa_kelurahanController */
/* @var $model DesaKelurahan */

$this->breadcrumbs=array(
	'Desa Kelurahan'=>array('index'),
	$model->id_desa_kelurahan=>array('view','id'=>$model->id_desa_kelurahan),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List DesaKelurahan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create DesaKelurahan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> View DesaKelurahan', 'url'=>array('view', 'id'=>$model->id_desa_kelurahan)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage DesaKelurahan', 'url'=>array('admin')),
);
?>

<h3>Update DesaKelurahan <?php echo $model->id_desa_kelurahan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>