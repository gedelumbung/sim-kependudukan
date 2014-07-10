<?php
/* @var $this Info_tambahan_surveyController */
/* @var $model InformasiTambahanSurvey */

$this->breadcrumbs=array(
	'Informasi Tambahan Survey'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kebersihan Survey', 'url'=>array('info_tambahan_survey/index/'.$id)),
);
?>

<h3>Create Informasi Tambahan Survey</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>