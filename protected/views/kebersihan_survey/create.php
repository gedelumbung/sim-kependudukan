<?php
/* @var $this Kebersihan_surveyController */
/* @var $model KebersihanSurvey */

$this->breadcrumbs=array(
	'Kebersihan Survey'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kebersihan Survey', 'url'=>array('kebersihan_survey/index/'.$id)),
);
?>

<h3>Create Kebersihan Survey</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>