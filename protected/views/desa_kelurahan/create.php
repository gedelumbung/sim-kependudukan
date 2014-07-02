<?php
/* @var $this Desa_kelurahanController */
/* @var $model DesaKelurahan */

$this->breadcrumbs=array(
	'Desa Kelurahan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List DesaKelurahan', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage DesaKelurahan', 'url'=>array('admin')),
);
?>

<h3>Create DesaKelurahan</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>