<?php
/* @var $this PerumahanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perumahan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Perumahan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Perumahan', 'url'=>array('admin')),
);
?>

<h1>Perumahan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
