<?php
/* @var $this Pengeluaran_non_panganController */
/* @var $model PengeluaranNonMakanan */

$this->breadcrumbs=array(
	'Pengeluaran Non Makanan'=>array('index'),
	$model->id_pengeluaran_non_makanan=>array('view','id'=>$model->id_pengeluaran_non_makanan),
	'Update',
);


$this->menu=array(
	array('label'=>'<i class="icon icon-eye-open"></i> View Pengeluaran Non Pangan', 'url'=>array('view', 'id'=>$model->id_rt)),
);
?>

<h3>Update PengeluaranNonMakanan <?php echo $model->id_pengeluaran_non_makanan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->id_rt)); ?>