<?php
/* @var $this KabupatenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kabupaten',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Kabupaten', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Kabupaten', 'url'=>array('admin')),
);
?>

<h1>Kabupaten</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
