<?php
/* @var $this Rumah_tanggaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rumah Tangga',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create RumahTangga', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage RumahTangga', 'url'=>array('admin')),
);
?>

<h1>Rumah Tangga</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
