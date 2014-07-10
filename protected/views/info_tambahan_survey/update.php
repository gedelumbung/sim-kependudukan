<?php
/* @var $this Info_tambahan_surveyController */
/* @var $model InformasiTambahanSurvey */

$this->breadcrumbs=array(
	'Informasi Tambahan Survey'=>array('index'),
	$model->id_informasi_tambahan_survey=>array('view','id'=>$model->id_informasi_tambahan_survey),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-eye-open"></i> View Informasi Tambahan Survey', 'url'=>array('view', 'id'=>$model->id_rt)),
);
?>

<h3>Update Informasi Tambahan Survey <?php echo $model->id_informasi_tambahan_survey; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->id_rt)); ?>