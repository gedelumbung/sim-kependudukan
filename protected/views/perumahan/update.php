<?php
/* @var $this PerumahanController */
/* @var $model Perumahan */

$this->breadcrumbs=array(
	'Perumahan'=>array('index'),
	$model->id_perumahan=>array('view','id'=>$model->id_perumahan),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-eye-open"></i> View KeteranganKeluarga', 'url'=>array('view', 'id'=>$model->id_rt)),
);
?>

<h3>Update Perumahan <?php echo $model->id_perumahan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->id_rt)); ?>