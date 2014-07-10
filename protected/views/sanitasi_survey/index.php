<?php
/* @var $this Sanitasi_surveyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sanitasi Survey',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create SanitasiSurvey', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage SanitasiSurvey', 'url'=>array('admin')),
);
?>

<h1>Sanitasi Survey</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
