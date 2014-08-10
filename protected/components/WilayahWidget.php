<?php

class WilayahWidget extends CWidget {

    public function run() {

		$provinsi = new Provinsi();
		$no_prov = 1;
		foreach($provinsi->findAll() as $prov)
		{
		  ?>
		      <li><a href="<?php echo Yii::app()->baseUrl; ?>/kanal_prov/<?php echo $prov->id_provinsi; ?>"><span class="number"></span><?php echo $no_prov; ?><span class="text"><?php echo $prov->provinsi; ?></span></a>
		          <ul>
		              <?php
		                  $criteria_kab = new CDbCriteria;  
		                  $criteria_kab->condition ='id_provinsi = "'.$prov->id_provinsi.'" ';
		                  $kabupaten = Kabupaten::model()->findAll($criteria_kab);
		                  foreach($kabupaten as $kab)
		                  {
		                      ?>
		                          <li><a href="<?php echo Yii::app()->baseUrl; ?>/kanal_kab/<?php echo $kab->id_kabupaten; ?>"><span class="text"><i class="fa fa-database"></i> <?php echo $kab->kabupaten; ?></span></a>
		                              <ul>
		                                  <?php
		                                      $criteria_kec= new CDbCriteria;  
		                                      $criteria_kec->condition ='id_kabupaten = "'.$kab->id_kabupaten.'" ';
		                                      $kecamatan = Kecamatan::model()->findAll($criteria_kec);
		                                      foreach($kecamatan as $kec)
		                                      {
		                                          ?>
		                                              <li><a href="<?php echo Yii::app()->baseUrl; ?>/kanal_kec/<?php echo $kec->id_kecamatan; ?>"><span class="text"><i class="fa fa-database"></i> <?php echo $kec->kecamatan; ?></span></a>

		                                              <ul>
		                                                  <?php
		                                                      $criteria_des= new CDbCriteria;  
		                                                      $criteria_des->condition ='id_kecamatan = "'.$kec->id_kecamatan.'" ';
		                                                      $desa = DesaKelurahan::model()->findAll($criteria_des);
		                                                      foreach($desa as $des)
		                                                      {
		                                                          ?>
		                                                              <li><a href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/<?php echo $des->id_desa_kelurahan; ?>"><span class="text"><i class="fa fa-database"></i> <?php echo $des->desa_kelurahan; ?></span></a>

		                                                              

		                                                              </li>
		                                                          <?php
		                                                      }
		                                                  ?>
		                                              </ul>

		                                              </li>
		                                          <?php
		                                      }
		                                  ?>
		                              </ul>
		                          </li>
		                      <?php
		                  }
		              ?>
		          </ul>
		      </li>
		  <?php
		   $no_prov++;
		}
    }
}