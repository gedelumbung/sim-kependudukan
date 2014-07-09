<?php
/* @var $this Pengeluaran_panganController */
/* @var $model PengeluaranPangan */

$this->breadcrumbs=array(
	'Pengeluaran Pangan'=>array('index'),
	$model->id_pengeluaran_rt=>array('view','id'=>$model->id_pengeluaran_rt),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-eye-open"></i> View Pengeluaran Pangan', 'url'=>array('view', 'id'=>$model->id_rt)),
);
?>

<h3>Update Pengeluaran Pangan <?php echo $model->id_pengeluaran_rt; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->id_rt)); ?>