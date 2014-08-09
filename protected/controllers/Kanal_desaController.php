<?php

class Kanal_desaController extends Controller
{
	public function actionView($id)
	{
	   $criteria_des= new CDbCriteria;  
	   $criteria_des->condition ='id_desa_kelurahan = "'.$id.'" ';
	   $desa = DesaKelurahan::model()->find($criteria_des);

	   $model['attr_wilayah'] = $desa;

	   //data kependudukan
	   $model['penduduk'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun, b.jk FROM tbl_rt a join tbl_art b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") group by a.tahun ")->queryAll();

	   $model['penduduk_pria'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun, b.jk FROM tbl_rt a join tbl_art b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") and b.jk = 'Laki-Laki' group by a.tahun ")->queryAll();

	   $model['penduduk_wanita'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun, b.jk FROM tbl_rt a join tbl_art b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") and b.jk = 'Perempuan' group by a.tahun ")->queryAll();

	   $model['penduduk_meninggal'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_kematian b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") group by a.tahun ")->queryAll();

	   $model['penduduk_miskin'] = Yii::app()->db->createCommand("SELECT count(a.id_rt) as jumlah, a.tahun FROM tbl_rt a join tbl_sosial_ekonomi b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.") and b.kategori_miskin='Ya' group by a.tahun ")->queryAll();

	   //data kesehatan
	   
	   $model['penduduk_kurang_gizi'] = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.kurang_gizi='Ya') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();
	   
	   $model['penduduk_kb'] = Yii::app()->db->createCommand("SELECT b.jumlah, a.tahun FROM tbl_rt a join (select count(x.id_art) as jumlah, x.id_rt from tbl_art x join tbl_art_perorangan y on x.id_art=y.id_art where y.memakai_alat_kb='Ya') b on a.id_rt=b.id_rt where a.id_desa_kelurahan in (".$id.")  group by a.tahun ")->queryAll();

		$this->render('index', array(
				'model' => $model
			));
   }
}