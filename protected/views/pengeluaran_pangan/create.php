<?php
/* @var $this Pengeluaran_panganController */
/* @var $model PengeluaranPangan */

$this->breadcrumbs=array(
	'Pengeluaran Pangan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Pengeluaran Pangan', 'url'=>array('pengeluaran_pangan/index/'.$id)),
);
?>

<h3>Create Pengeluaran Pangan</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>