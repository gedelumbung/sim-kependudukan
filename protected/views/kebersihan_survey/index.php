<?php
/* @var $this Kebersihan_surveyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kebersihan Survey',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create KebersihanSurvey', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage KebersihanSurvey', 'url'=>array('admin')),
);
?>

<h1>Kebersihan Survey</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
