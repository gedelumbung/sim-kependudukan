<?php
/* @var $this Info_tambahan_surveyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Informasi Tambahan Survey',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create InformasiTambahanSurvey', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage InformasiTambahanSurvey', 'url'=>array('admin')),
);
?>

<h1>Informasi Tambahan Survey</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
