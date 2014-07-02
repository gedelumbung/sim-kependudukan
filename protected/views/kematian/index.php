<?php
/* @var $this KematianController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kematian',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Kematian', 'url'=>array('kematian/create/'.$id)),
	array('label'=>'<i class="icon icon-list"></i> Manage Kematian', 'url'=>array('kematian/admin/'.$id)),
);
?>

<h1>Kematian</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
