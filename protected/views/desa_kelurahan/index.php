<?php
/* @var $this Desa_kelurahanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Desa Kelurahan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create DesaKelurahan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage DesaKelurahan', 'url'=>array('admin')),
);
?>

<h1>Desa Kelurahan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
