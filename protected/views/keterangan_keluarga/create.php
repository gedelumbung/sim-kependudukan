<?php
/* @var $this Keterangan_keluargaController */
/* @var $model KeteranganKeluarga */

$this->breadcrumbs=array(
	'Keterangan Keluarga'=>array('index','id'=>$id),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage KeteranganKeluarga', 'url'=>array('keterangan_keluarga/index/'.$id)),
);
?>

<h3>Create Keterangan Keluarga</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>