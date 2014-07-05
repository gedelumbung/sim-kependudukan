<?php
/* @var $this PendidikanController */
/* @var $data ArtPerorangan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_art_perorangan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_art_perorangan), array('view', 'id'=>$data->id_art_perorangan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_art')); ?>:</b>
	<?php echo CHtml::encode($data->id_art); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_urut_ibu_kandung')); ?>:</b>
	<?php echo CHtml::encode($data->no_urut_ibu_kandung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kehadiran_wawancara')); ?>:</b>
	<?php echo CHtml::encode($data->kehadiran_wawancara); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluhan_panas')); ?>:</b>
	<?php echo CHtml::encode($data->keluhan_panas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluhan_batuk')); ?>:</b>
	<?php echo CHtml::encode($data->keluhan_batuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluhan_pilek')); ?>:</b>
	<?php echo CHtml::encode($data->keluhan_pilek); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('keluhan_asma')); ?>:</b>
	<?php echo CHtml::encode($data->keluhan_asma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluhan_diare')); ?>:</b>
	<?php echo CHtml::encode($data->keluhan_diare); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluhan_sakit_kepala')); ?>:</b>
	<?php echo CHtml::encode($data->keluhan_sakit_kepala); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluhan_sakit_gigi')); ?>:</b>
	<?php echo CHtml::encode($data->keluhan_sakit_gigi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluhan_lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->keluhan_lainnya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('implikasi_keluhan')); ?>:</b>
	<?php echo CHtml::encode($data->implikasi_keluhan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lama_implikasi')); ?>:</b>
	<?php echo CHtml::encode($data->lama_implikasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('masih_implikasi')); ?>:</b>
	<?php echo CHtml::encode($data->masih_implikasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pengobatan_sendiri')); ?>:</b>
	<?php echo CHtml::encode($data->pengobatan_sendiri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_pengobatan_sendiri')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_pengobatan_sendiri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pengobatan_jalan')); ?>:</b>
	<?php echo CHtml::encode($data->pengobatan_jalan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berobat_jalan_rs_pemerintah')); ?>:</b>
	<?php echo CHtml::encode($data->berobat_jalan_rs_pemerintah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berobat_jalan_rs_swasta')); ?>:</b>
	<?php echo CHtml::encode($data->berobat_jalan_rs_swasta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berobat_jalan_poliklinik')); ?>:</b>
	<?php echo CHtml::encode($data->berobat_jalan_poliklinik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berobat_jalan_puskesmas')); ?>:</b>
	<?php echo CHtml::encode($data->berobat_jalan_puskesmas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berobat_jalan_nakes')); ?>:</b>
	<?php echo CHtml::encode($data->berobat_jalan_nakes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berobat_jalan_batra')); ?>:</b>
	<?php echo CHtml::encode($data->berobat_jalan_batra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berobat_jalan_dukun')); ?>:</b>
	<?php echo CHtml::encode($data->berobat_jalan_dukun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berobat_jalan_lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->berobat_jalan_lainnya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rawat_inap')); ?>:</b>
	<?php echo CHtml::encode($data->rawat_inap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rawat_inap_rs_pemerintah')); ?>:</b>
	<?php echo CHtml::encode($data->rawat_inap_rs_pemerintah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rawat_inap_rs_swasta')); ?>:</b>
	<?php echo CHtml::encode($data->rawat_inap_rs_swasta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rawat_inap_puskesmas')); ?>:</b>
	<?php echo CHtml::encode($data->rawat_inap_puskesmas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rawat_inap_nakes')); ?>:</b>
	<?php echo CHtml::encode($data->rawat_inap_nakes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rawat_inap_batra')); ?>:</b>
	<?php echo CHtml::encode($data->rawat_inap_batra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rawat_inap_lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->rawat_inap_lainnya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jamkesmas')); ?>:</b>
	<?php echo CHtml::encode($data->jamkesmas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jamkesda')); ?>:</b>
	<?php echo CHtml::encode($data->jamkesda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jampersal')); ?>:</b>
	<?php echo CHtml::encode($data->jampersal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bpjs')); ?>:</b>
	<?php echo CHtml::encode($data->bpjs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('umur_balita')); ?>:</b>
	<?php echo CHtml::encode($data->umur_balita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penolong_kelahiran_1')); ?>:</b>
	<?php echo CHtml::encode($data->penolong_kelahiran_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penolong_kelahiran_2')); ?>:</b>
	<?php echo CHtml::encode($data->penolong_kelahiran_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imunisasi_bcg')); ?>:</b>
	<?php echo CHtml::encode($data->imunisasi_bcg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imunisasi_dpt')); ?>:</b>
	<?php echo CHtml::encode($data->imunisasi_dpt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imunisasi_polio')); ?>:</b>
	<?php echo CHtml::encode($data->imunisasi_polio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imunisasi_campak')); ?>:</b>
	<?php echo CHtml::encode($data->imunisasi_campak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imunisasi_hepatitis_b')); ?>:</b>
	<?php echo CHtml::encode($data->imunisasi_hepatitis_b); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asi')); ?>:</b>
	<?php echo CHtml::encode($data->asi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lama_pemberian_asi')); ?>:</b>
	<?php echo CHtml::encode($data->lama_pemberian_asi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diberi_asi_saja')); ?>:</b>
	<?php echo CHtml::encode($data->diberi_asi_saja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asi_24_jam')); ?>:</b>
	<?php echo CHtml::encode($data->asi_24_jam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pemeriksaan_kehamilan')); ?>:</b>
	<?php echo CHtml::encode($data->pemeriksaan_kehamilan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pemeriksaan_kehamilan_trisemester_1')); ?>:</b>
	<?php echo CHtml::encode($data->pemeriksaan_kehamilan_trisemester_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pemeriksaan_kehamilan_trisemester_2')); ?>:</b>
	<?php echo CHtml::encode($data->pemeriksaan_kehamilan_trisemester_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pemeriksaan_kehamilan_trisemester_3')); ?>:</b>
	<?php echo CHtml::encode($data->pemeriksaan_kehamilan_trisemester_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partisipasi_sekolah')); ?>:</b>
	<?php echo CHtml::encode($data->partisipasi_sekolah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berhenti_sekolah')); ?>:</b>
	<?php echo CHtml::encode($data->berhenti_sekolah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendidikan_tertinggi')); ?>:</b>
	<?php echo CHtml::encode($data->pendidikan_tertinggi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penyelenggara_pendidikan')); ?>:</b>
	<?php echo CHtml::encode($data->penyelenggara_pendidikan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tingkat_tertinggi')); ?>:</b>
	<?php echo CHtml::encode($data->tingkat_tertinggi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ijazah_tertinggi')); ?>:</b>
	<?php echo CHtml::encode($data->ijazah_tertinggi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membaca_menulis')); ?>:</b>
	<?php echo CHtml::encode($data->membaca_menulis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bekerja')); ?>:</b>
	<?php echo CHtml::encode($data->bekerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sekolah')); ?>:</b>
	<?php echo CHtml::encode($data->sekolah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mengurus_rt')); ?>:</b>
	<?php echo CHtml::encode($data->mengurus_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->lainnya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kegiatan_terbanyak')); ?>:</b>
	<?php echo CHtml::encode($data->kegiatan_terbanyak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tidak_bekerja_sementara')); ?>:</b>
	<?php echo CHtml::encode($data->tidak_bekerja_sementara); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mencari_pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->mencari_pekerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membuat_usaha')); ?>:</b>
	<?php echo CHtml::encode($data->membuat_usaha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alasan_tidak_bekerja')); ?>:</b>
	<?php echo CHtml::encode($data->alasan_tidak_bekerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jika_ada_tawaran')); ?>:</b>
	<?php echo CHtml::encode($data->jika_ada_tawaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hari_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->hari_kerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_jam_kerja_seminggu')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_jam_kerja_seminggu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lapangan_usaha')); ?>:</b>
	<?php echo CHtml::encode($data->lapangan_usaha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_pekerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jabatan_pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->jabatan_pekerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gaji')); ?>:</b>
	<?php echo CHtml::encode($data->gaji); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('umur_saat_nikah')); ?>:</b>
	<?php echo CHtml::encode($data->umur_saat_nikah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_tahun_nikah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_tahun_nikah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anak_lahir_hidup_laki')); ?>:</b>
	<?php echo CHtml::encode($data->anak_lahir_hidup_laki); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anak_lahir_hidup_perempuan')); ?>:</b>
	<?php echo CHtml::encode($data->anak_lahir_hidup_perempuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anak_lahir_masih_hidup_laki')); ?>:</b>
	<?php echo CHtml::encode($data->anak_lahir_masih_hidup_laki); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anak_lahir_masih_hidup_perempuan')); ?>:</b>
	<?php echo CHtml::encode($data->anak_lahir_masih_hidup_perempuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anak_meninggal_laki')); ?>:</b>
	<?php echo CHtml::encode($data->anak_meninggal_laki); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anak_meninggal_perempuan')); ?>:</b>
	<?php echo CHtml::encode($data->anak_meninggal_perempuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alat_kb')); ?>:</b>
	<?php echo CHtml::encode($data->alat_kb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alat_kb_dipakai')); ?>:</b>
	<?php echo CHtml::encode($data->alat_kb_dipakai); ?>
	<br />

	*/ ?>

</div>