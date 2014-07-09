<?php
/* @var $this KetenagakerjaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Art Perorangan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Ketenagakerjaan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Ketenagakerjaan', 'url'=>array('admin')),
);
?>

<h1>Art Perorangan - Ketenagakerjaan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
