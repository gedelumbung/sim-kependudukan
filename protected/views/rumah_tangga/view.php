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

<style type="text/css">
	ul li {
		list-style: none;
	}
	ul li ul{
		margin-left: 0px;
	}
	.span12 ul li ul li{
		font-size: 14px;
		font-weight: bold;
	}
	h3{
		font-family: 'Telex', Arial;
		font-size: 20px;
	}
</style>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
	Data Rumah Tangga Pendukung
</div>
</div>
<div class="portlet-content">


<div class="row-fluid">
	<div class="span12 alert alert-danger">
		<h3 class="fa fa-briefcase"><strong> Keterangan Rumah Tangga</strong></h3>
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Keterangan Anggota Rumah Tangga', 'url'=>array('art/index/'.$id)),
							array('label'=>'<i class="icon icon-list"></i> Kejadian Kematian di Rumah Tangga', 'url'=>array('kematian/index/'.$id)),
							array('label'=>'<i class="icon icon-list"></i> Keterangan Keluarga Rumah Tangga', 'url'=>array('keterangan_keluarga/index/'.$id)),
			   		),
			   	),
			 ),
		));?>
	</div>
</div>
<div class="row-fluid">
	<div class="span12 alert alert-danger">
		<h3 class="fa fa-drupal"><strong> Keterangan Perorangan</strong></h3>
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Keterangan Kesehatan', 'url'=>array('kesehatan/index', 'id'=>$id)),
							array('label'=>'<i class="icon icon-list"></i> Keterangan Balita', 'url'=>array('balita/index', 'id'=>$id)),
							array('label'=>'<i class="icon icon-list"></i> Keterangan Pendidikan', 'url'=>array('pendidikan/index', 'id'=>$id)),
							array('label'=>'<i class="icon icon-list"></i> Keterangan Ketenagakerjaan', 'url'=>array('ketenagakerjaan/index', 'id'=>$id)),
							array('label'=>'<i class="icon icon-list"></i> Keterangan Fertilitas / Keluarga Berencana', 'url'=>array('kb/index', 'id'=>$id)),
			   		),
			   	),
			 ),
		));?>
	</div>
</div>
<div class="row-fluid">
	<div class="span6 alert alert-danger">
		<h3 class="fa fa-building"><strong> Keterangan Perumahan</strong></h3>
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Keterangan Perumahan', 'url'=>array('perumahan/index', 'id'=>$id)),
			   		),
			   	),
			 ),
		));?>
	</div>
	<div class="span6 alert alert-danger">
		<h3 class="fa fa-fax"><strong> Keterangan Teknologi</strong></h3>
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Keterangan Teknologi & Komunikasi', 'url'=>array('tik/index', 'id'=>$id)),
			   		),
			   	),
			 ),
		));?>
	</div>
</div>
<div class="row-fluid">
	<div class="span12 alert alert-danger">
		<h3 class="fa fa-file-archive-o"><strong> Keterangan Pengeluaran Rumah Tangga</strong></h3>
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Pengeluaran Rumah Tangga Pangan', 'url'=>array('pengeluaran_pangan/index', 'id'=>$id)),
							array('label'=>'<i class="icon icon-list"></i> Pengeluaran Rumah Tangga Non Pangan', 'url'=>array('pengeluaran_non_pangan/index', 'id'=>$id)),
			   		),
			   	),
			 ),
		));?>
	</div>
</div>

<div class="row-fluid">
	<div class="span6 alert alert-danger">
		<h3 class="fa fa-building"><strong> Keterangan Sosial Ekonomi</strong></h3>
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Keterangan Sosial Ekonomi Lainnya', 'url'=>array('sosial_ekonomi/index', 'id'=>$id)),
			   		),
			   	),
			 ),
		));?>
	</div>
	<div class="span6 alert alert-danger">
		<h3 class="fa fa-fax"><strong> Keterangan Luas Lahan Pertanian</strong></h3>
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Keterangan Luas Lahan Pertanian', 'url'=>array('lahan_pertanian/index', 'id'=>$id)),
			   		),
			   	),
			 ),
		));?>
	</div>
</div>


<div class="row-fluid">
	<div class="span12 alert alert-danger">
		<h3 class="fa fa-building"><strong> Keterangan Perumahan Hasil Survey</strong></h3>
		<?php 
			 $this->widget('zii.widgets.CMenu', array(
			 /*'type'=>'list',*/
			 'encodeLabel'=>false,
			 'items'=>array(
			   array(
			   	'label'=>'',
			   	'items'=>array(
							array('label'=>'<i class="icon icon-list"></i> Perumahan', 'url'=>array('perumahan_survey/index', 'id'=>$id)),
							array('label'=>'<i class="icon icon-list"></i> Sanitasi dan Penerangan', 'url'=>array('sanitasi_survey/index', 'id'=>$id)),
							array('label'=>'<i class="icon icon-list"></i> Kebersihan (untuk bagian ini, lakukan pengamatan)', 'url'=>array('kebersihan_survey/index', 'id'=>$id)),
							array('label'=>'<i class="icon icon-list"></i> Informasi Tambahan (lakukan pengamatan)', 'url'=>array('info_tambahan_survey/index', 'id'=>$id)),
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
