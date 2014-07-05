<?php
/* @var $this Keterangan_keluargaController */
/* @var $model KeteranganKeluarga */

$this->breadcrumbs=array(
	'Keterangan Keluarga'=>array('index','id'=>$model->id_rt),
	$model->id_rt=>array('view','id'=>$model->id_rt),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-eye-open"></i> View KeteranganKeluarga', 'url'=>array('view', 'id'=>$model->id_rt)),
);
?>

<h3>Update Keterangan Keluarga <?php echo $model->id_keterangan_keluarga; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->id_rt)); ?>