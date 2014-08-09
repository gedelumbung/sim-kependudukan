<?php

class Kanal_kecController extends Controller
{
	public function actionView($id)
	{
		$merge_id = '';

		$criteria_kec= new CDbCriteria;  
		$criteria_kec->condition ='id_kecamatan = "'.$id.'" ';
		$kecamatan = Kecamatan::model()->find($criteria_kec);

		//fetch id desa
	   $criteria_des= new CDbCriteria;  
	   $criteria_des->condition ='id_kecamatan = "'.$kecamatan['id_kecamatan'].'" ';
	   $desa = DesaKelurahan::model()->findAll($criteria_des);
	   foreach($desa as $des)
	   {
	       $merge_id .= $des->id_desa_kelurahan.',';
	   }

	   $model['attr_wilayah'] = $kecamatan;

		$this->render('index', array(
				'model' => $model
			));
	}
}