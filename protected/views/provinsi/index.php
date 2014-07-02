<?php
/* @var $this ProvinsiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Provinsi',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Provinsi', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Provinsi', 'url'=>array('admin')),
);
?>

<h1>Provinsi</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
