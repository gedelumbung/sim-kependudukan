<div class="row-fluid" id="wrapper" style="position: relative;">
<div class="span3" id="sidebar" style="height:100%; position:relative;">
        <ul class="nav-list">  
            <li class="nav-header">1. Data Wilayah</li>
            <?php
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
            ?>
        </ul>
</div>
<div class="center span9" id="contentpane" style="height:100%; position: relative;">
    
    <div>
        <table class="data">
            <caption>DIY</caption>
            <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Kelompok Data</th>
                <th rowspan="2">Jenis Data</th>
                <th colspan="5">Tahun</th>
                <th rowspan="2">Satuan</th>
                <th rowspan="2">Grafik</th>
            </tr>
            <tr>
                <th>2010</th><th>2011</th><th>2012</th><th>2013</th><th>2014</th>        
            </tr>
            </thead>
            <tbody>   
            <tr>
                <td align="center"><b>1</b></td>
                <td><b>Data Kependudukan</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>1. Jumlah Penduduk</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <table class="noborder" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td valign="top"></td><td valign="top">A. Laki-Laki</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>   
                <td></td>  
                <td></td>      
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <table class="noborder" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td valign="top"></td><td valign="top">B. Perempuan</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>   
                <td></td>  
                <td></td>      
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <table class="noborder" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td valign="top"></td><td valign="top">C. Meninggal</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>   
                <td></td>  
                <td></td>      
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <table class="noborder" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td valign="top"></td><td valign="top">D. Miskin</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>   
                <td></td>  
                <td></td>      
            </tr>
            <tr>
                <td align="center"><b>2</b></td>
                <td><b>Data Kesehatan</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>1. Kurang Gizi</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>2. Pengguna Alat Kontrasepsi</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td align="center"><b>3</b></td>
                <td><b>Data Ketenagakerjaan</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>1. Bekerja</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>2. Menganggur</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td align="center"><b>4</b></td>
                <td><b>Data Teknologi & Komunikasi</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>1. Telepon</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>2. Komputer</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>3. Internet</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td align="center"><b>5</b></td>
                <td><b>Data Perumahan</b></td>
                <td><b></b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>1. Tidak Layak Huni</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <table class="noborder" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr>
                                <td valign="top">
                                    <table class="noborder" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td valign="top"></td><td valign="top">A. Sanitasi Buruk</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>   
                <td></td>  
                <td></td>  
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>2. Layak Huni</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td align="center"><b>6</b></td>
                <td><b>Data Pendidikan</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>1. Putus Sekolah</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
                    
            </tbody>
        </table>
    </div>

    
    
</div>

    
    
</div><!--/row-->
