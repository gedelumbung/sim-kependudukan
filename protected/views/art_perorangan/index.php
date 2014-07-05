<?php
/* @var $this Art_peroranganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Art Perorangan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create ArtPerorangan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage ArtPerorangan', 'url'=>array('admin')),
);
?>

<h1>Art Perorangan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
