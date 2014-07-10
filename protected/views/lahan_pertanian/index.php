<?php
/* @var $this Lahan_pertanianController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lahan Pertanian',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create LahanPertanian', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage LahanPertanian', 'url'=>array('admin')),
);
?>

<h1>Lahan Pertanian</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
