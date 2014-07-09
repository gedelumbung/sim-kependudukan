<?php
/* @var $this TikController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tik',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Tik', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Tik', 'url'=>array('admin')),
);
?>

<h1>Tik</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
