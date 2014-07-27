<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<?php
$gridDataProvider = new CArrayDataProvider(array(
    array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
    array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript','usage'=>'<span class="inlinebar">1,3,16,5,12,5</span>'),
    array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,4,4,7,5,9,10</span>'),
	array('id'=>4, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript','usage'=>'<span class="inlinebar">1,3,16,5,12,5</span>'),
    array('id'=>5, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
));
?>

<style type="text/css">
.nav-list>li>a, .nav-list .nav-header {
    margin: 0px 10px;
}
</style>

<script type="text/javascript">
$(function()
{
    $('#wrapper') .css({'height': (($(window).height()) - 300)+'px'});

    $(window).resize(function(){
        $('#wrapper') .css({'height': (($(window).height()) - 300)+'px'});
    });
});
</script>


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
                <th rowspan="2">Sumber</th>
                <th rowspan="2">Grafik</th>
            </tr>
            <tr>
                <th>2010</th><th>2011</th><th>2012</th><th>2013</th><th>2014</th>        
            </tr>
            </thead>
            <tbody>   
            <tr>
                <td align="center"><b>1</b></td>
                <td><b>Data Umum</b></td>
                <td><b>1. Geografi</b></td>
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
                    <td><table class="noborder" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top"></td><td valign="top">1.&nbsp;Luas Wilayah</td></tr></tbody></table></td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: left;"></td>
                    <td align="center"><a href="http://103.255.15.12/sipd_diy/data_profil#" chart-title="Grafik Series Data DIY Tahun 2010 s/d 2014" data-url="http://103.255.15.12/sipd_diy/data_profil/view_chart/55/0/2/2010-2014" class="chart-icon tiptip green" onclick="viewChart($(this));">chart</a></td>            
                </tr>
                        <tr>
                    <td></td>
                    <td></td>
                    <td><table class="noborder" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top"></td><td>&nbsp;&nbsp;&nbsp;</td><td valign="top">a.&nbsp;Daratan</td></tr></tbody></table></td>
                                            <td style="text-align: right; color: black">
                        3.185,8            </td>
                                            <td style="text-align: right; color: black">
                        3.185,8            </td>
                                            <td style="text-align: right; color: black">
                        3.185,8            </td>
                                            <td style="text-align: right; color: black">
                        3.185,8            </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                <td style="text-align: center;">&nbsp;Km2</td>
                    <td style="text-align: left;">Badan Pusat Statistik</td>
                    <td align="center"><a href="http://103.255.15.12/sipd_diy/data_profil#" chart-title="Grafik Series Data DIY Tahun 2010 s/d 2014" data-url="http://103.255.15.12/sipd_diy/data_profil/view_chart/2206/0/109/2010-2014" class="chart-icon tiptip green" onclick="viewChart($(this));">chart</a></td>            
                </tr>
                        <tr>
                    <td></td>
                    <td></td>
                    <td><table class="noborder" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top"></td><td>&nbsp;&nbsp;&nbsp;</td><td valign="top">b.&nbsp;Laut 12 mil</td></tr></tbody></table></td>
                                            <td style="text-align: right; color: black">
                        2.511,31            </td>
                                            <td style="text-align: right; color: black">
                        2.511,31            </td>
                                            <td style="text-align: right; color: black">
                        2.511,31            </td>
                                            <td style="text-align: right; color: black">
                        2.511,31            </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                <td style="text-align: center;">&nbsp;Km2</td>
                    <td style="text-align: left;">......</td>
                    <td align="center"><a href="http://103.255.15.12/sipd_diy/data_profil#" chart-title="Grafik Series Data DIY Tahun 2010 s/d 2014" data-url="http://103.255.15.12/sipd_diy/data_profil/view_chart/167/0/112/2010-2014" class="chart-icon tiptip green" onclick="viewChart($(this));">chart</a></td>            
                </tr>
                        <tr>
                    <td></td>
                    <td></td>
                    <td><table class="noborder" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top"></td><td valign="top">2.&nbsp;Topografi</td></tr></tbody></table></td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: left;">Badan Pertanahan Nasional</td>
                    <td align="center"><a href="http://103.255.15.12/sipd_diy/data_profil#" chart-title="Grafik Series Data DIY Tahun 2010 s/d 2014" data-url="http://103.255.15.12/sipd_diy/data_profil/view_chart/59/0/5/2010-2014" class="chart-icon tiptip green" onclick="viewChart($(this));">chart</a></td>            
                </tr>
                        <tr>
                    <td></td>
                    <td></td>
                    <td><table class="noborder" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top"></td><td>&nbsp;&nbsp;&nbsp;</td><td valign="top">a.&nbsp;Luas Kemiringan Lahan (rata-rata)</td></tr></tbody></table></td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                <td style="text-align: center;">&nbsp;</td>
                    <td style="text-align: left;">Badan Pertanahan Nasional</td>
                    <td align="center"><a href="http://103.255.15.12/sipd_diy/data_profil#" chart-title="Grafik Series Data DIY Tahun 2010 s/d 2014" data-url="http://103.255.15.12/sipd_diy/data_profil/view_chart/60/0/5/2010-2014" class="chart-icon tiptip green" onclick="viewChart($(this));">chart</a></td>            
                </tr>
                                <tr>
                    <td></td>
                    <td></td>
                    <td><table class="noborder" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top"></td><td>&nbsp;&nbsp;&nbsp;</td><td valign="top"><table cellspacing="0" cellpadding="0" border="0" valign="top"><tbody><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Luas Kemiringan Lahan (rata-rata)&nbsp;<span class="trebuchet"><i>(dalam&nbsp;Persen)</i></span>&nbsp;</td></tr></tbody></table></td></tr></tbody></table></td>
                                            <td style="text-align: right; color: black">
                        &nbsp;            </td>
                                            <td style="text-align: right; color: black">
                        &nbsp;            </td>
                                            <td style="text-align: right; color: black">
                        &nbsp;            </td>
                                            <td style="text-align: right; color: black">
                        &nbsp;            </td>
                                            <td style="text-align: right; color: black">
                        &nbsp;            </td>
                                <td style="text-align: center;">%</td>
                    <td style="text-align: center;">Badan Pertanahan Nasional</td>
                    <td align="center"><a href="http://103.255.15.12/sipd_diy/data_profil#" chart-title="Grafik DIY Tahun 2010 s/d 2014" data-url="http://103.255.15.12/sipd_diy/data_profil/view_chart/60/0/5/2010-2014" class="chart-icon tiptip green" onclick="viewChart($(this));">chart</a></td>            
                </tr>       
                        <tr>
                    <td></td>
                    <td></td>
                    <td><table class="noborder" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top"></td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td valign="top">1).&nbsp;Datar (0-2 %)</td></tr></tbody></table></td>
                                            <td style="text-align: right; color: black">
                        90.933,83            </td>
                                            <td style="text-align: right; color: black">
                        90.933,83            </td>
                                            <td style="text-align: right; color: black">
                        90.933,83            </td>
                                            <td style="text-align: right; color: black">
                        90.933,83            </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                <td style="text-align: center;">&nbsp;Ha</td>
                    <td style="text-align: left;">Badan Pertanahan Nasional</td>
                    <td align="center"><a href="http://103.255.15.12/sipd_diy/data_profil#" chart-title="Grafik Series Data DIY Tahun 2010 s/d 2014" data-url="http://103.255.15.12/sipd_diy/data_profil/view_chart/61/0/5/2010-2014" class="chart-icon tiptip green" onclick="viewChart($(this));">chart</a></td>            
                </tr>
                        <tr>
                    <td></td>
                    <td></td>
                    <td><table class="noborder" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top"></td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td valign="top">2).&nbsp;Bergelombang (3-15 %)</td></tr></tbody></table></td>
                                            <td style="text-align: right; color: black">
                        33.322,91            </td>
                                            <td style="text-align: right; color: black">
                        33.322,91            </td>
                                            <td style="text-align: right; color: black">
                        33.322,91            </td>
                                            <td style="text-align: right; color: black">
                        33.322,91            </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                <td style="text-align: center;">&nbsp;Ha</td>
                    <td style="text-align: left;">Badan Pertanahan Nasional</td>
                    <td align="center"><a href="http://103.255.15.12/sipd_diy/data_profil#" chart-title="Grafik Series Data DIY Tahun 2010 s/d 2014" data-url="http://103.255.15.12/sipd_diy/data_profil/view_chart/62/0/5/2010-2014" class="chart-icon tiptip green" onclick="viewChart($(this));">chart</a></td>            
                </tr>
                        <tr>
                    <td></td>
                    <td></td>
                    <td><table class="noborder" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top"></td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td valign="top">3).&nbsp;Curam (16-40 %)</td></tr></tbody></table></td>
                                            <td style="text-align: right; color: black">
                        30.228,3            </td>
                                            <td style="text-align: right; color: black">
                        30.228,3            </td>
                                            <td style="text-align: right; color: black">
                        30.228,3            </td>
                                            <td style="text-align: right; color: black">
                        30.228,3            </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                <td style="text-align: center;">&nbsp;Ha</td>
                    <td style="text-align: left;">Badan Pertanahan Nasional</td>
                    <td align="center"><a href="http://103.255.15.12/sipd_diy/data_profil#" chart-title="Grafik Series Data DIY Tahun 2010 s/d 2014" data-url="http://103.255.15.12/sipd_diy/data_profil/view_chart/63/0/5/2010-2014" class="chart-icon tiptip green" onclick="viewChart($(this));">chart</a></td>            
                </tr>
                        <tr>
                    <td></td>
                    <td></td>
                    <td><table class="noborder" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top"></td><td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td><td valign="top">4).&nbsp;Sangat Curam (&gt;40 %)</td></tr></tbody></table></td>
                                            <td style="text-align: right; color: black">
                        16.045,12            </td>
                                            <td style="text-align: right; color: black">
                        16.045,12            </td>
                                            <td style="text-align: right; color: black">
                        16.045,12            </td>
                                            <td style="text-align: right; color: black">
                        16.045,12            </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                <td style="text-align: center;">&nbsp;Ha</td>
                    <td style="text-align: left;">Badan Pertanahan Nasional</td>
                    <td align="center"><a href="http://103.255.15.12/sipd_diy/data_profil#" chart-title="Grafik Series Data DIY Tahun 2010 s/d 2014" data-url="http://103.255.15.12/sipd_diy/data_profil/view_chart/64/0/5/2010-2014" class="chart-icon tiptip green" onclick="viewChart($(this));">chart</a></td>            
                </tr>
                        <tr>
                    <td></td>
                    <td></td>
                    <td><table class="noborder" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top"></td><td>&nbsp;&nbsp;&nbsp;</td><td valign="top">b.&nbsp;Ketinggian Diatas Permukaan Laut (rata-rata)</td></tr></tbody></table></td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                            <td style="text-align: right; color: n/a">
                        n/a            </td>
                                            <td style="text-align: right; color: black">
                                    </td>
                                <td style="text-align: center;">&nbsp;m</td>
                    <td style="text-align: left;">Badan Pertanahan Nasional</td>
                    <td align="center"><a href="http://103.255.15.12/sipd_diy/data_profil#" chart-title="Grafik Series Data DIY Tahun 2010 s/d 2014" data-url="http://103.255.15.12/sipd_diy/data_profil/view_chart/65/0/5/2010-2014" class="chart-icon tiptip green" onclick="viewChart($(this));">chart</a></td>            
                </tr>
                    
            </tbody>
        </table>
    </div>

    
    
</div>

    
    
</div><!--/row-->
