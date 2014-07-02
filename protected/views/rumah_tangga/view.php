<?php
/* @var $this Rumah_tanggaController */
/* @var $model RumahTangga */

$this->breadcrumbs=array(
	'Rumah Tangga'=>array('index'),
	$model->id_rt,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List RumahTangga', 'url'=>array('index')),
	array('label'=>'<i class="icon icon-adjust"></i> Create RumahTangga', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-share"></i> Update RumahTangga', 'url'=>array('update', 'id'=>$model->id_rt)),
	array('label'=>'<i class="icon icon-trash"></i> Delete RumahTangga', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_rt),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage RumahTangga', 'url'=>array('admin')),
);
?>

<h3>View RumahTangga #<?php echo $model->id_rt; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
	Data Rumah Tangga Pendukung
</div>
</div>
<div class="portlet-content">


<div class="row-fluid">
	<div class="span6">
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'Keterangan Rumah Tangga',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Keterangan Anggota Rumah Tangga', 'url'=>array('art/index/'.$id)),
							array('label'=>'<i class="icon icon-list"></i> Kejadian Kematian di Rumah Tangga', 'url'=>array('kematian/index/'.$id)),
							array('label'=>'<i class="icon icon-list"></i> Keterangan Keluarga Rumah Tangga', 'url'=>array('keterangan_keluarga/index/'.$id)),
			   		),
			   	),
			 ),
		));?>
	</div>
	<div class="span6">
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'Keterangan Perorangan',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Keterangan Kesehatan', 'url'=>array('index')),
							array('label'=>'<i class="icon icon-list"></i> Keterangan Balita', 'url'=>array('index')),
							array('label'=>'<i class="icon icon-list"></i> Keterangan Pendidikan', 'url'=>array('index')),
							array('label'=>'<i class="icon icon-list"></i> Keterangan Ketenagakerjaan', 'url'=>array('index')),
							array('label'=>'<i class="icon icon-list"></i> Keterangan Fertilitas / Keluarga Berencana', 'url'=>array('index')),
			   		),
			   	),
			 ),
		));?>
	</div>
</div>
<div class="row-fluid">
	<div class="span6">
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'Keterangan Perumahan',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Keterangan Perumahan', 'url'=>array('index')),
			   		),
			   	),
			 ),
		));?>
	</div>
	<div class="span6">
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'Keterangan Teknologi',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Keterangan Teknologi & Komunikasi', 'url'=>array('index')),
			   		),
			   	),
			 ),
		));?>
	</div>
</div>
<div class="row-fluid">
	<div class="span6">
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'Keterangan Pengeluaran Rumah Tangga',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Pengeluaran Rumah Tangga Pangan', 'url'=>array('index')),
							array('label'=>'<i class="icon icon-list"></i> Pengeluaran Rumah Tangga Non Pangan', 'url'=>array('index')),
			   		),
			   	),
			 ),
		));?>
	</div>
	<div class="span6">
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'Keterangan Sosial Ekonomi Lainnya',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Keterangan Sosial Ekonomi Lainnya', 'url'=>array('index')),
			   		),
			   	),
			 ),
		));?>
	</div>
</div>
<div class="row-fluid">
	<div class="span6">
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'Keterangan Luas Lahan Pertanian',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Keterangan Luas Lahan Pertanian', 'url'=>array('index')),
			   		),
			   	),
			 ),
		));?>
	</div>
	<div class="span6">
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'Keterangan Sosial Ekonomi Lainnya',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Keterangan Sosial Ekonomi Lainnya', 'url'=>array('index')),
			   		),
			   	),
			 ),
		));?>
	</div>
</div>


</div>
</div>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
	Data Rumah Tangga Utama
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_rt',
		'DesaKelurahan.Provinsi.provinsi',
		'DesaKelurahan.Kabupaten.kabupaten',
		'DesaKelurahan.Kecamatan.kecamatan',
		'DesaKelurahan.desa_kelurahan',
		'nama_krt',
		'suku_krt',
		'jumlah_art',
		'jumlah_anak',
		'jumlah_art_meninggal',
		'tahun',
	),
)); ?>

</div>
</div>
