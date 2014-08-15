<div class="row-fluid" id="wrapper" style="position: relative;">
<div class="span3" id="sidebar" style="height:100%; position:relative;">
        <ul class="nav-list">  
            <li class="nav-header">1. Data Wilayah</li>
            <?php
                $this->widget('WilayahWidget');
            ?>
        </ul>
</div>
<div class="center span9" id="contentpane" style="height:100%; position: relative;">
    
    <div>
        <table class="data">
            <caption>Wilayah Desa/Kelurahan : <?php echo $model['attr_wilayah']['desa_kelurahan']; ?>
                <a href="" class="btn btn-small btn-primary pull-right"><i class="icon-print icon-white"></i> Print</a>
                <a href="" class="btn btn-small btn-primary pull-right"><i class="icon-share icon-white"></i> Export Excel</a>
            </caption>
            <thead>
            <tr>
                <?php
                    $tahun_awal = Yii::app()->params['year'];
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_penduduk/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_pria/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_perempuan/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_meninggal/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_miskin/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_kurang_gizi/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_alat_kontrasepsi/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_bekerja/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_menganggur/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_telepon/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_komputer/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_internet/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_tidak_layak_huni/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_sanitasi_buruk/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_layak_huni/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
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
                <td><a class="btn btn-small btn-primary test-popup-link" href="<?php echo Yii::app()->baseUrl; ?>/kanal_desa/grafik_putus_sekolah/<?php echo $id; ?>"><i class="icon-signal icon-white"></i> Grafik</a></td>
            </tr>
                    
            </tbody>
        </table>
    </div>

    
    
</div>

    
    
</div><!--/row-->
<?php
$this->widget("ext.magnific-popup.EMagnificPopup", array('target' => '.test-popup-link', 'type' => 'iframe'));
?>
