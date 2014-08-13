<?php
/* @var $this UserCmsModelController */
/* @var $model UserCmsModel */

$this->breadcrumbs=array(
	'User Cms Model'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List UserCmsModel', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create UserCmsModel', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update UserCmsModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'<i class="icon icon-trash"></i> Delete UserCmsModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage UserCmsModel', 'url'=>array('admin')),
);
?>

<h3>View UserCmsModel #<?php echo $model->id; ?></h3>

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
		'password',
		'nama',
		'email',
		'status',
	),
)); ?>

</div>
</div>
