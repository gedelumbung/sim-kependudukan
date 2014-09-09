<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Graphs & Charts';
$this->breadcrumbs=array(
	'Graphs & Charts',
);
?>
<div class="page-header">
  <h1>Grafik Perkembangan </h1>
</div>


<div class="row-fluid">
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk",
		));
		
	?>
  		<div class="jumlah-penduduk" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Pria",
		));
		
	?>
  		<div class="penduduk-pria" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
</div>

<div class="row-fluid">
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Wanita",
		));
		
	?>
  		<div class="penduduk-wanita" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Meninggal",
		));
		
	?>
  		<div class="penduduk-meninggal" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
</div>

<div class="row-fluid">
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Miskin",
		));
		
	?>
  		<div class="penduduk-miskin" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Kurang Gizi",
		));
		
	?>
  		<div class="penduduk-kurang-gizi" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
</div>

<div class="row-fluid">
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Yang Menggunakan KB",
		));
		
	?>
  		<div class="penduduk-kb" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Bekerja",
		));
		
	?>
  		<div class="penduduk-bekerja" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
</div>

<div class="row-fluid">
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Yang Bekerja",
		));
		
	?>
  		<div class="penduduk-menganggur" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Yang Menggunakan Telepon",
		));
		
	?>
  		<div class="penduduk-telepon" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
</div>

<div class="row-fluid">
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Yang Menggunakan Komputer",
		));
		
	?>
  		<div class="penduduk-komputer" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Yang Menggunakan Internet",
		));
		
	?>
  		<div class="penduduk-internet" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
</div>

<div class="row-fluid">
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Dengan Rumah Tidak Layak Huni",
		));
		
	?>
  		<div class="penduduk-tidak-layak-huni" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Dengan Sanitasi Buruk",
		));
		
	?>
  		<div class="penduduk-sanitasi-buruk" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
</div>

<div class="row-fluid">
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Dengan Rumah Layak Huni",
		));
		
	?>
  		<div class="penduduk-layak-huni" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
  <div class="span6">
  	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"<i class='icon-tint'></i> Jumlah Penduduk Yang Putus Sekolah",
		));
		
	?>
  		<div class="penduduk-putus-sekolah" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
	<?php $this->endWidget();?>
  </div>
</div>


</div>

<script type="text/javascript">
	$(document).ready(function() {

		function generate(selector,data)
		{
			$.plot($(selector), data, 
			{
				series: {
					pie: { 
						show: true,
						highlight: {
							opacity: 0.1
						},
						radius: 1,
						stroke: {
							color: '#fff',
							width: 2
						},
						startAngle: 2,
					    combine: {
		                    color: '#353535',
		                    threshold: 0.05
		                },
		                label: {
		                    show: true,
		                    radius: 1,
		                    formatter: function(label, series){
		                        return '<div class="pie-chart-label">'+label+'&nbsp;'+Math.round(series.percent)+'%</div>';
		                    }
		                }
					},
					grow: {	active: false}
				},
				legend:{show:false},
				grid: {
		            hoverable: true,
		            clickable: true
		        },
		        tooltip: true, //activate tooltip
				tooltipOpts: {
					content: "%s : %y.1"+"%",
					shifts: {
						x: -30,
						y: -50
					}
				}
			});																	
		}

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk", function( data ) {
	  		generate(".jumlah-penduduk",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_pria", function( data ) {
	  		generate(".penduduk-pria",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_wanita", function( data ) {
	  		generate(".penduduk-wanita",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_meninggal", function( data ) {
	  		generate(".penduduk-meninggal",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_miskin", function( data ) {
	  		generate(".penduduk-miskin",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_kurang_gizi", function( data ) {
	  		generate(".penduduk-kurang-gizi",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_kb", function( data ) {
	  		generate(".penduduk-kb",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_bekerja", function( data ) {
	  		generate(".penduduk-bekerja",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_menganggur", function( data ) {
	  		generate(".penduduk-menganggur",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_telepon", function( data ) {
	  		generate(".penduduk-telepon",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_komputer", function( data ) {
	  		generate(".penduduk-komputer",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_internet", function( data ) {
	  		generate(".penduduk-internet",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_tidak_layak_huni", function( data ) {
	  		generate(".penduduk-tidak-layak-huni",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_sanitasi_buruk", function( data ) {
	  		generate(".penduduk-sanitasi-buruk",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_layak_huni", function( data ) {
	  		generate(".penduduk-layak-huni",JSON.parse(data))
		});

		$.get("<?php echo Yii::app()->baseUrl; ?>/kanal_kab_rest/jumlah_penduduk_putus_sekolah", function( data ) {
	  		generate(".penduduk-putus-sekolah",JSON.parse(data))
		});
	});

</script>
