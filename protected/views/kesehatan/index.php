<?php
/* @var $this KesehatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Art Perorangan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Kesehatan Art', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Kesehatan Art', 'url'=>array('admin')),
);
?>

<h1>Art Perorangan - Keterangan Kesehatan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
