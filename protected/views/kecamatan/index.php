<?php
/* @var $this KecamatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kecamatan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Kecamatan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Kecamatan', 'url'=>array('admin')),
);
?>

<h1>Kecamatan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
