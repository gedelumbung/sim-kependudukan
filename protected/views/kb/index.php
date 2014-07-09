<?php
/* @var $this KbController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Art Perorangan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create ArtPerorangan', 'url'=>array('create', 'id' => $id)),
	array('label'=>'<i class="icon icon-list"></i> Manage ArtPerorangan', 'url'=>array('admin', 'id' => $id)),
);
?>

<h1>Art Perorangan - Keterangan Fertilitas / Keluarga Berencana</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
