<?php
/* @var $this KabupatenController */
/* @var $model Kabupaten */

$this->breadcrumbs=array(
	'Kabupaten'=>array('index'),
	$model->id_kabupaten=>array('view','id'=>$model->id_kabupaten),
	'Update',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Kabupaten', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Kabupaten', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-eye-open"></i> View Kabupaten', 'url'=>array('view', 'id'=>$model->id_kabupaten)),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Kabupaten', 'url'=>array('admin')),
);
?>

<h3>Update Kabupaten <?php echo $model->id_kabupaten; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>