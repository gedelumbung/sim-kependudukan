<?php
/* @var $this Keterangan_keluargaController */
/* @var $model KeteranganKeluarga */

$this->breadcrumbs=array(
	'Keterangan Keluarga'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List KeteranganKeluarga', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage KeteranganKeluarga', 'url'=>array('admin')),
);
?>

<h3>Create KeteranganKeluarga</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>