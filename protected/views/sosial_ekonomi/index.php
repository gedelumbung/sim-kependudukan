<?php
/* @var $this Sosial_ekonomiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sosial Ekonomi',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create SosialEkonomi', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage SosialEkonomi', 'url'=>array('admin')),
);
?>

<h1>Sosial Ekonomi</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
