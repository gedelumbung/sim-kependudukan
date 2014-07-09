<?php
/* @var $this TikController */
/* @var $model Tik */

$this->breadcrumbs=array(
	'Tik'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Teknologi & Komunikasi', 'url'=>array('tik/index/'.$id)),
);
?>

<h3>Create Teknologi & Komunikasi</h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>