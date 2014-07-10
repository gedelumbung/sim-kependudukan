<?php
/* @var $this Sanitasi_surveyController */
/* @var $model SanitasiSurvey */

$this->breadcrumbs=array(
	'Sanitasi Survey'=>array('index'),
	$model->id_sanitasi_penerangan_survey=>array('view','id'=>$model->id_sanitasi_penerangan_survey),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-eye-open"></i> View Sanitasi Survey', 'url'=>array('view', 'id'=>$model->id_rt)),
);
?>

<h3>Update Sanitasi - Survey <?php echo $model->id_sanitasi_penerangan_survey; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->id_rt)); ?>