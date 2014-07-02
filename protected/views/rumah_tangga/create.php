<?php
/* @var $this Rumah_tanggaController */
/* @var $model RumahTangga */

$this->breadcrumbs=array(
	'Rumah Tangga'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List RumahTangga', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage RumahTangga', 'url'=>array('admin')),
);
?>

<h3>Create RumahTangga</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>