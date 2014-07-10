<?php
/* @var $this Kebersihan_surveyController */
/* @var $model KebersihanSurvey */

$this->breadcrumbs=array(
	'Kebersihan Survey'=>array('index'),
	$model->id_kebersihan_survey=>array('view','id'=>$model->id_kebersihan_survey),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-eye-open"></i> View Kebersihan Survey', 'url'=>array('view', 'id'=>$model->id_rt)),
);
?>

<h3>Update Kebersihan Survey <?php echo $model->id_kebersihan_survey; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->id_rt)); ?>