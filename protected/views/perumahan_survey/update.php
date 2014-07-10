<?php
/* @var $this Perumahan_surveyController */
/* @var $model PerumahanSurvey */

$this->breadcrumbs=array(
	'Perumahan Survey'=>array('index'),
	$model->id_perumahan_survey=>array('view','id'=>$model->id_perumahan_survey),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-eye-open"></i> View Perumahan Survey', 'url'=>array('view', 'id'=>$model->id_rt)),
);
?>

<h3>Update Perumahan - Survey <?php echo $model->id_perumahan_survey; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->id_rt)); ?>