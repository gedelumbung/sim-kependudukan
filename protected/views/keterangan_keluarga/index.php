<?php
/* @var $this Keterangan_keluargaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Keterangan Keluarga',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create KeteranganKeluarga', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage KeteranganKeluarga', 'url'=>array('admin')),
);
?>

<h1>Keterangan Keluarga</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
