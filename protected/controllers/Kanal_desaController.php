<?php

class Kanal_desaController extends Controller
{
	public $layout='main';

	public function actionView($id)
	{
	   $criteria_des= new CDbCriteria;  
	   $criteria_des->condition ='id_desa_kelurahan = "'.$id.'" ';
	   $desa = DesaKelurahan::model()->find($criteria_des);

	   $model['attr_wilayah'] = $desa;

      if(empty($id)) return false;

	   //data kependudukan
	   $model['penduduk'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun, b.jk FROM tbl_rt a join tbl_art b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") group by a.tahun ")->queryAll();

	   $model['penduduk_pria'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun, b.jk FROM tbl_rt a join tbl_art b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") and b.jk = 'Laki-Laki' group by a.tahun ")->queryAll();

	   $model['penduduk_wanita'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun, b.jk FROM tbl_rt a join tbl_art b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") and b.jk = 'Perempuan' group by a.tahun ")->queryAll();

	   $model['penduduk_meninggal'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_kematian b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") group by a.tahun ")->queryAll();

	   $model['penduduk_miskin'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_sosial_ekonomi b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") and b.kategori_miskin='Ya' group by a.tahun ")->queryAll();

	   //data kesehatan
	   
	   $model['penduduk_kurang_gizi'] = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.kurang_gizi='Ya') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
	   
	   $model['penduduk_kb'] = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.memakai_alat_kb='Ya') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();

	  	//data ketenagakerjaan
	   
	   $model['penduduk_bekerja'] = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.bekerja='Ya') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
	   
	   $model['penduduk_menganggur'] = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.bekerja='Tidak') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();

	   //data teknologi dan komunikasi
	   
	   $model['penduduk_telepon'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_tik b on a.id_rt=b.id_rt where b.telepon ='Ya' or b.handphone='Ya' and a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
	   
	   $model['penduduk_komputer'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_tik b on a.id_rt=b.id_rt where b.komputer ='Ya' and a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
	   
	   $model['penduduk_internet'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_tik b on a.id_rt=b.id_rt where b.internet ='Ya' and a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();

	   //data perumahan
	   
	   $model['penduduk_tidak_layak_huni'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_perumahan_survey b on a.id_rt=b.id_rt where b.kondisi_atap_rumah='Baik' and kondisi_dinding_rumah='Baik' and kondisi_lantai_rumah='Baik' and a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
	   
	   $model['penduduk_sanitasi_buruk'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_sanitasi_penerangan_survey b on a.id_rt=b.id_rt where b. kepemilikan_jamban ='Tidak Memiliki'  and a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
	   
	   $model['penduduk_layak_huni'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_perumahan_survey b on a.id_rt=b.id_rt where b.kondisi_atap_rumah='Baik' and kondisi_dinding_rumah='Buruk' and kondisi_lantai_rumah='Buruk' and a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();

	   //data pendidikan
	   
	   $model['penduduk_putus_sekolah'] = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.partisipasi_sekolah='Ya') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();


		$this->render('index', array(
				'model' => $model,
				'id' => $id
			));
   }

   public function actionGrafik_Penduduk($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun, b.jk FROM tbl_rt a join tbl_art b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") group by a.tahun ")->queryAll();
   	$title = 'Grafik Penduduk';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Pria($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun, b.jk FROM tbl_rt a join tbl_art b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") and b.jk = 'Laki-Laki' group by a.tahun ")->queryAll();
   	$title = 'Grafik Laki-Laki';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Perempuan($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun, b.jk FROM tbl_rt a join tbl_art b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") and b.jk = 'Perempuan' group by a.tahun ")->queryAll();
   	$title = 'Grafik Perempuan';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Meninggal($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_kematian b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") group by a.tahun ")->queryAll();
   	$title = 'Grafik Meninggal';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Miskin($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_sosial_ekonomi b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") and b.kategori_miskin='Ya' group by a.tahun ")->queryAll();
   	$title = 'Grafik Miskin';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Kurang_Gizi($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.kurang_gizi='Ya') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
   	$title = 'Grafik Kurang Gizi';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Alat_Kontrasepsi($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.memakai_alat_kb='Ya') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
   	$title = 'Grafik Pengguna Alat Kontrasepsi';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Bekerja($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.bekerja='Ya') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
   	$title = 'Grafik Bekerja';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Menganggur($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.bekerja='Tidak') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
   	$title = 'Grafik Menganggur';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Telepon($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_tik b on a.id_rt=b.id_rt where b.telepon ='Ya' or b.handphone='Ya' and a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
   	$title = 'Grafik Telepon';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Komputer($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_tik b on a.id_rt=b.id_rt where b.komputer ='Ya' and a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
   	$title = 'Grafik Komputer';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Internet($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_tik b on a.id_rt=b.id_rt where b.internet ='Ya' and a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
   	$title = 'Grafik Internet';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Tidak_Layak_Huni($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_perumahan_survey b on a.id_rt=b.id_rt where b.kondisi_atap_rumah='Baik' and kondisi_dinding_rumah='Baik' and kondisi_lantai_rumah='Baik' and a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
   	$title = 'Grafik Tidak Layak Huni';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Sanitasi_Buruk($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_sanitasi_penerangan_survey b on a.id_rt=b.id_rt where b. kepemilikan_jamban ='Tidak Memiliki'  and a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
   	$title = 'Grafik Sanitasi Buruk';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Layak_Huni($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_perumahan_survey b on a.id_rt=b.id_rt where b.kondisi_atap_rumah='Baik' and kondisi_dinding_rumah='Buruk' and kondisi_lantai_rumah='Buruk' and a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
   	$title = 'Grafik Layak Huni';

   	$this->renderGraph($id,$title,$model);
   }

   public function actionGrafik_Putus_Sekolah($id)
   {
   	$model = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.partisipasi_sekolah='Ya') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
   	$title = 'Grafik Putus Sekolah';

   	$this->renderGraph($id,$title,$model);
   }

   private function renderGraph($id,$title,$model)
   {
   	$this->layout = 'main_grafik';
		
		$adapter = array();
		foreach ($model as $p) {
			array_push($adapter, array($p['jumlah'],$p['tahun']));
		}

		$this->render('grafik_penduduk', array(
				'adapter' => $adapter,
				'title' => $title,
				'id' => $id
			));
   }
}