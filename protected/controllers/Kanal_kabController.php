<?php

class Kanal_kabController extends Controller
{
	public function actionView($id)
	{
		$merge_id = '';
      $criteria_kab = new CDbCriteria;  
      $criteria_kab->condition ='id_kabupaten = "'.$id.'" ';
      $kabupaten = Kabupaten::model()->find($criteria_kab);

   	//fetch id
		$criteria_kec= new CDbCriteria;  
		$criteria_kec->condition ='id_kabupaten = "'.$kabupaten['id_kabupaten'].'" ';
		$kecamatan = Kecamatan::model()->findAll($criteria_kec);
		foreach($kecamatan as $kec)
		{
		   $criteria_des= new CDbCriteria;  
		   $criteria_des->condition ='id_kecamatan = "'.$kec->id_kecamatan.'" ';
		   $desa = DesaKelurahan::model()->findAll($criteria_des);
		   foreach($desa as $des)
		   {
				if(empty($merge_id))
				{
					$merge_id = $des->id_desa_kelurahan;
				}
				else
				{
					$merge_id .= ','.$des->id_desa_kelurahan;
				}
		   }
		}

	   $model['attr_wilayah'] = $kabupaten;

	   //data kependudukan
	   $model['penduduk'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun, b.jk FROM tbl_rt a join tbl_art b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$merge_id.") group by a.tahun ")->queryAll();

	   $model['penduduk_pria'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun, b.jk FROM tbl_rt a join tbl_art b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$merge_id.") and b.jk = 'Laki-Laki' group by a.tahun ")->queryAll();

	   $model['penduduk_wanita'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun, b.jk FROM tbl_rt a join tbl_art b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$merge_id.") and b.jk = 'Perempuan' group by a.tahun ")->queryAll();

	   $model['penduduk_meninggal'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_kematian b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$merge_id.") group by a.tahun ")->queryAll();

	   $model['penduduk_miskin'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_sosial_ekonomi b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$merge_id.") and b.kategori_miskin='Ya' group by a.tahun ")->queryAll();

	   //data kesehatan
	   
	   $model['penduduk_kurang_gizi'] = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.kurang_gizi='Ya') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$merge_id.")  group by a.tahun ")->queryAll();
	   
	   $model['penduduk_kb'] = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.memakai_alat_kb='Ya') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$merge_id.")  group by a.tahun ")->queryAll();

	  	//data ketenagakerjaan
	   
	   $model['penduduk_bekerja'] = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.bekerja='Ya') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$merge_id.")  group by a.tahun ")->queryAll();
	   
	   $model['penduduk_menganggur'] = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.bekerja='Tidak') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$merge_id.")  group by a.tahun ")->queryAll();

	   //data teknologi dan komunikasi
	   
	   $model['penduduk_telepon'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_tik b on a.id_rt=b.id_rt where b.telepon ='Ya' or b.handphone='Ya' and a.id_desa_kelurahan in (1,2)  group by a.tahun ")->queryAll();
	   
	   $model['penduduk_komputer'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_tik b on a.id_rt=b.id_rt where b.komputer ='Ya' and a.id_desa_kelurahan in (1,2)  group by a.tahun ")->queryAll();
	   
	   $model['penduduk_internet'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_tik b on a.id_rt=b.id_rt where b.internet ='Ya' and a.id_desa_kelurahan in (1,2)  group by a.tahun ")->queryAll();

	   //data perumahan
	   
	   $model['penduduk_tidak_layak_huni'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_perumahan_survey b on a.id_rt=b.id_rt where b.kondisi_atap_rumah='Baik' and kondisi_dinding_rumah='Baik' and kondisi_lantai_rumah='Baik' and a.id_desa_kelurahan in (".$merge_id.")  group by a.tahun ")->queryAll();
	   
	   $model['penduduk_sanitasi_buruk'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_sanitasi_penerangan_survey b on a.id_rt=b.id_rt where b. kepemilikan_jamban ='Tidak Memiliki'  and a.id_desa_kelurahan in (".$merge_id.")  group by a.tahun ")->queryAll();
	   
	   $model['penduduk_layak_huni'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_perumahan_survey b on a.id_rt=b.id_rt where b.kondisi_atap_rumah='Baik' and kondisi_dinding_rumah='Buruk' and kondisi_lantai_rumah='Buruk' and a.id_desa_kelurahan in (".$merge_id.")  group by a.tahun ")->queryAll();

	   //data pendidikan
	   
	   $model['penduduk_putus_sekolah'] = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.partisipasi_sekolah='Ya') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$merge_id.")  group by a.tahun ")->queryAll();

		$this->render('index', array(
				'model' => $model
			));
      
	}
}