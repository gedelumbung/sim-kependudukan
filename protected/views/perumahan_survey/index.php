<?php
/* @var $this Perumahan_surveyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perumahan Survey',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create PerumahanSurvey', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage PerumahanSurvey', 'url'=>array('admin')),
);
?>

<h1>Perumahan Survey</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
