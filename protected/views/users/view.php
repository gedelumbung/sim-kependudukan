<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'User'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List Users', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create Users', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update Users', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'<i class="icon icon-trash"></i> Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage Users', 'url'=>array('admin')),
);
?>

<h3>View Users #<?php echo $model->id; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'nama',
		'email',
	),
)); ?>

</div>
</div>
