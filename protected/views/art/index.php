<?php
/* @var $this ArtController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Art',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Art', 'url'=>array('art/create/'.$id)),
	array('label'=>'<i class="icon icon-list"></i> Manage Art', 'url'=>array('art/admin/'.$id)),
);
?>

<h1>Art</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
