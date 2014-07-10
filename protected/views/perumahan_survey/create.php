<?php
/* @var $this Perumahan_surveyController */
/* @var $model PerumahanSurvey */

$this->breadcrumbs=array(
	'Perumahan Survey'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Perumahan - Survey', 'url'=>array('perumahan_survey/index/'.$id)),
);
?>

<h3>Create Perumahan - Survey</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>