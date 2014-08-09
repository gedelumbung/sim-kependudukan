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
		       $merge_id .= $des->id_desa_kelurahan.',';
		   }
		}

	   $model['attr_wilayah'] = $kabupaten;

		$this->render('index', array(
				'model' => $model
			));
      
	}
}