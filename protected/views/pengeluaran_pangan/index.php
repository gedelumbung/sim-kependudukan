<?php
/* @var $this Pengeluaran_panganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pengeluaran Pangan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create PengeluaranPangan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage PengeluaranPangan', 'url'=>array('admin')),
);
?>

<h1>Pengeluaran Pangan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
