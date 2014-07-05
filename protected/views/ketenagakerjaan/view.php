<?php
/* @var $this KetenagakerjaanController */
/* @var $model ArtPerorangan */

$this->breadcrumbs=array(
	'Art Perorangan'=>array('index'),
	$model->id_art_perorangan,
);

$this->menu=array(
	array('label'=>'<i class="icon icon-list"></i> List ArtPerorangan', 'url'=>array('index', 'id'=>$model->Art->id_rt)),
	array('label'=>'<i class="icon icon-adjust"></i> Create ArtPerorangan', 'url'=>array('create', 'id'=>$model->Art->id_rt)),
	array('label'=>'<i class="icon icon-share"></i> Update ArtPerorangan', 'url'=>array('update', 'id'=>$model->id_art_perorangan)),
	array('label'=>'<i class="icon icon-trash"></i> Delete ArtPerorangan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_art_perorangan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'<i class="icon icon-list-alt"></i> Manage ArtPerorangan', 'url'=>array('admin', 'id'=>$model->Art->id_rt)),
);
?>

<h3>View ArtPerorangan #<?php echo $model->id_art_perorangan; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_art_perorangan',
		'id_art',
		'no_urut_ibu_kandung',
		'kehadiran_wawancara',
		'keluhan_panas',
		'keluhan_batuk',
		'keluhan_pilek',
		'keluhan_asma',
		'keluhan_diare',
		'keluhan_sakit_kepala',
		'keluhan_sakit_gigi',
		'keluhan_lainnya',
		'implikasi_keluhan',
		'lama_implikasi',
		'masih_implikasi',
		'pengobatan_sendiri',
		'jenis_pengobatan_sendiri',
		'pengobatan_jalan',
		'berobat_jalan_rs_pemerintah',
		'berobat_jalan_rs_swasta',
		'berobat_jalan_poliklinik',
		'berobat_jalan_puskesmas',
		'berobat_jalan_nakes',
		'berobat_jalan_batra',
		'berobat_jalan_dukun',
		'berobat_jalan_lainnya',
		'rawat_inap',
		'rawat_inap_rs_pemerintah',
		'rawat_inap_rs_swasta',
		'rawat_inap_puskesmas',
		'rawat_inap_nakes',
		'rawat_inap_batra',
		'rawat_inap_lainnya',
		'jamkesmas',
		'jamkesda',
		'jampersal',
		'bpjs',
		'umur_balita',
		'penolong_kelahiran_1',
		'penolong_kelahiran_2',
		'imunisasi_bcg',
		'imunisasi_dpt',
		'imunisasi_polio',
		'imunisasi_campak',
		'imunisasi_hepatitis_b',
		'asi',
		'lama_pemberian_asi',
		'diberi_asi_saja',
		'asi_24_jam',
		'pemeriksaan_kehamilan',
		'pemeriksaan_kehamilan_trisemester_1',
		'pemeriksaan_kehamilan_trisemester_2',
		'pemeriksaan_kehamilan_trisemester_3',
		'partisipasi_sekolah',
		'berhenti_sekolah',
		'pendidikan_tertinggi',
		'penyelenggara_pendidikan',
		'tingkat_tertinggi',
		'ijazah_tertinggi',
		'membaca_menulis',
		'bekerja',
		'sekolah',
		'mengurus_rt',
		'lainnya',
		'kegiatan_terbanyak',
		'tidak_bekerja_sementara',
		'mencari_pekerjaan',
		'membuat_usaha',
		'alasan_tidak_bekerja',
		'jika_ada_tawaran',
		'hari_kerja',
		'jumlah_jam_kerja_seminggu',
		'lapangan_usaha',
		'jenis_pekerjaan',
		'jabatan_pekerjaan',
		'gaji',
		'umur_saat_nikah',
		'jumlah_tahun_nikah',
		'anak_lahir_hidup_laki',
		'anak_lahir_hidup_perempuan',
		'anak_lahir_masih_hidup_laki',
		'anak_lahir_masih_hidup_perempuan',
		'anak_meninggal_laki',
		'anak_meninggal_perempuan',
		'alat_kb',
		'alat_kb_dipakai',
	),
)); ?>

</div>
</div>
