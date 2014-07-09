<?php
/* @var $this Pengeluaran_non_panganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pengeluaran Non Makanan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create PengeluaranNonMakanan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage PengeluaranNonMakanan', 'url'=>array('admin')),
);
?>

<h1>Pengeluaran Non Makanan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
