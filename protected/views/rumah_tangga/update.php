<?php
/* @var $this Rumah_tanggaController */
/* @var $model RumahTangga */

$this->breadcrumbs=array(
	'Rumah Tangga'=>array('index'),
	$model->id_rt=>array('view','id'=>$model->id_rt),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List RumahTangga', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create RumahTangga', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> View RumahTangga', 'url'=>array('view', 'id'=>$model->id_rt)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage RumahTangga', 'url'=>array('admin')),
);
?>

<h3>Update RumahTangga <?php echo $model->id_rt; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>