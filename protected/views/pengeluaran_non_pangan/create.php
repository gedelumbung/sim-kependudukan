<?php
/* @var $this Pengeluaran_non_panganController */
/* @var $model PengeluaranNonMakanan */

$this->breadcrumbs=array(
	'Pengeluaran Non Makanan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Pengeluaran Non Makanan', 'url'=>array('index', 'id' => $id)),
);
?>

<h3>Create PengeluaranNonMakanan</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>