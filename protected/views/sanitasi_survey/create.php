<?php
/* @var $this Sanitasi_surveyController */
/* @var $model SanitasiSurvey */

$this->breadcrumbs=array(
	'Sanitasi Survey'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Sanitasi Survey', 'url'=>array('sanitasi_survey/index/'.$id)),
);
?>

<h3>Create Sanitasi Survey</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>