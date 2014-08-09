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
            <caption>Wilayah Kabupaten : <?php echo $model['attr_wilayah']['kabupaten']; ?></caption>
            <thead>
            <tr>
                <?php
                    $tahun_awal = 2013;
                ?>
                <th rowspan="2">No</th>
                <th rowspan="2">Kelompok Data</th>
                <th rowspan="2">Jenis Data</th>
                <th colspan="<?php echo date('Y')-$tahun_awal+1; ?>">Tahun</th>
                <th rowspan="2">Grafik</th>
            </tr>
            <tr>
                <?php
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        echo '<th>'.$tahun.'</th>';
                    }
                ?>       
            </tr>
            </thead>
            <tbody>   
            <tr>
                <td align="center"><b>1</b></td>
                <td><b>Data Kependudukan</b></td>
                <td></td>
                <?php
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        echo '<td></td>';
                    }
                ?>   
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>1. Jumlah Penduduk</b></td>
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk'])>0)
                        {
                            if($model['penduduk'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk'][$i]['jumlah']."</td>";
                                array_push($model['penduduk'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?>
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_pria'])>0)
                        {
                            if($model['penduduk_pria'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_pria'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_pria'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_pria'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?> 
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_wanita'])>0)
                        {
                            if($model['penduduk_wanita'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_wanita'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_wanita'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_wanita'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?>     
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_meninggal'])>0)
                        {
                            if($model['penduduk_meninggal'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_meninggal'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_meninggal'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_meninggal'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?>
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_miskin'])>0)
                        {
                            if($model['penduduk_miskin'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_miskin'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_miskin'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_miskin'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?> 
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
            </tr>
            <tr>
                <td align="center"><b>2</b></td>
                <td><b>Data Kesehatan</b></td>
                <td></td>
                <?php
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        echo '<td></td>';
                    }
                ?>  
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>1. Kurang Gizi</b></td>
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_kurang_gizi'])>0)
                        {
                            if($model['penduduk_kurang_gizi'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_kurang_gizi'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_kurang_gizi'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_kurang_gizi'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?>  
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>2. Pengguna Alat Kontrasepsi</b></td>
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_kb'])>0)
                        {
                            if($model['penduduk_kb'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_kb'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_kb'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_kb'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?>  
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
            </tr>
            <tr>
                <td align="center"><b>3</b></td>
                <td><b>Data Ketenagakerjaan</b></td>
                <td></td>
                <?php
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        echo '<td></td>';
                    }
                ?>  
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>1. Bekerja</b></td>
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_bekerja'])>0)
                        {
                            if($model['penduduk_bekerja'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_bekerja'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_bekerja'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_bekerja'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?> 
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>2. Menganggur</b></td>
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_menganggur'])>0)
                        {
                            if($model['penduduk_menganggur'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_menganggur'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_menganggur'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_menganggur'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?> 
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
            </tr>
            <tr>
                <td align="center"><b>4</b></td>
                <td><b>Data Teknologi & Komunikasi</b></td>
                <td></td>
                <?php
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        echo '<td></td>';
                    }
                ?>  
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>1. Telepon</b></td>
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_telepon'])>0)
                        {
                            if($model['penduduk_telepon'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_telepon'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_telepon'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_telepon'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?> 
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>2. Komputer</b></td>
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_komputer'])>0)
                        {
                            if($model['penduduk_komputer'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_komputer'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_komputer'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_komputer'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?> 
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>3. Internet</b></td>
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_internet'])>0)
                        {
                            if($model['penduduk_internet'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_internet'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_internet'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_internet'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?> 
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
            </tr>
            <tr>
                <td align="center"><b>5</b></td>
                <td><b>Data Perumahan</b></td>
                <td><b></b></td>
                <?php
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        echo '<td></td>';
                    }
                ?>  
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>1. Tidak Layak Huni</b></td>
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_tidak_layak_huni'])>0)
                        {
                            if($model['penduduk_tidak_layak_huni'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_tidak_layak_huni'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_tidak_layak_huni'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_tidak_layak_huni'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?> 
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_sanitasi_buruk'])>0)
                        {
                            if($model['penduduk_sanitasi_buruk'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_sanitasi_buruk'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_sanitasi_buruk'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_sanitasi_buruk'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?> 
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>2. Layak Huni</b></td>
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_layak_huni'])>0)
                        {
                            if($model['penduduk_layak_huni'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_layak_huni'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_layak_huni'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_layak_huni'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?>  
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
            </tr>
            <tr>
                <td align="center"><b>6</b></td>
                <td><b>Data Pendidikan</b></td>
                <td></td>
                <?php
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        echo '<td></td>';
                    }
                ?>  
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>1. Putus Sekolah</b></td>
                <?php
                    $i = 0;
                    for($tahun=$tahun_awal;$tahun<=date('Y');$tahun++)
                    {
                        if(count($model['penduduk_putus_sekolah'])>0)
                        {
                            if($model['penduduk_putus_sekolah'][$i]['tahun']==$tahun)
                            {
                                echo "<td>".$model['penduduk_putus_sekolah'][$i]['jumlah']."</td>";
                                array_push($model['penduduk_putus_sekolah'],array(
                                        'tahun'=>0
                                    ));
                            }
                            else
                            {
                                array_push($model['penduduk_putus_sekolah'],array(
                                        'tahun'=>0
                                    ));
                                echo "<td>0</td>";
                                $i--;
                            }
                        }
                        else
                        {
                            echo "<td>0</td>";
                        }
                        $i++;
                    }
                ?> 
                <td><a class="btn btn-small btn-primary"><i class="icon-signal icon-white"></i> Grafik</a></td>
            </tr>
                    
            </tbody>
        </table>
    </div>

    
    
</div>

    
    
</div><!--/row-->
