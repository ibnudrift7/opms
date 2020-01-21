<section class="cover-insides hubinvest">
    <div class="begrond">
        <div class="prelative container">
                <div class="teks">
                    <div class="row">
                        <?php if (Yii::app()->language == 'en'): ?>
                        <div class="col-md-60">
                            <h1 class="teks-cover">investor relations</h1>
                        </div>
                        <div class="col-md-60 ">
                            <div class="teks">Get closer to the latest information at PT. Optima Prima Metal Sinergi at this time.</div>
                        </div>    
                        <?php else: ?>
                        <div class="col-md-60">
                            <h1 class="teks-cover">hubungan investor</h1>
                        </div>
                        <div class="col-md-60 ">
                            <div class="teks">Lebih dekat dengan berbagai informasi terkini di PT. Optima Prima Metal Sinergi saat ini.</div>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
        </div>
    </div>
</section>

<section class="hub-investor-sec-1">
    <div class="prelative container">
        <div class="py-4"></div>
        
        <div class="row outers_block_investor_page">
            <div class="col-md-17">
                <div class="py-3"></div>
                <div class="lefts_menu">
                    <ul class="list-unstyled">
                        <li <?php if ($_GET['name'] == 'investor'): ?>class="active"<?php endif ?> ><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'investor')); ?>">INFORMASI INVESTOR</a></li>
                        <li <?php if ($_GET['name'] == 'financial'): ?>class="active"<?php endif ?> ><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'financial')); ?>">INFORMASI FINANSIAL</a></li>
                        <li <?php if ($_GET['name'] == 'governance'): ?>class="active"<?php endif ?> ><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'governance')); ?>">tata kelola perusahaan</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-43">
                <div class="py-3"></div>
                <div class="inners_right">
                    <?php if (isset($_GET['name']) && $_GET['name'] == 'investor'): ?>
                        <div class="row tops_block">
                            <div class="col-md-40">
                                <h3 class="titles_top">INFORMASI INVESTOR</h3>
                            </div>
                            <div class="col-md-20">
                                <div class="bcl_back text-right"><a class="btn btn-link" onclick="window.history.back();" href="#">Back</a></div>
                            </div>
                        </div>

                        <div class="outers_box_list">
                            <div class="lists_item">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>prospektus penawaran umum</h4>
                                    <p>21 January 2020</p>
                                    <div class="py-1"></div>
                                    <a target="_blank" href="<?php echo Yii::app()->baseUrl.'/document/prospektus-opms.pdf' ?>" class="btn btns_download"><i class="fa fa-download"></i> &nbsp;DOWNLOAD</a>
                                </div>
                            </div>
                            <div class="lists_item">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>AKUNTAN PUBLIK</h4>
                                    <p>Kantor Akuntan Publik Morhan dan rekan.<br>Generali Tower, 8th floor Grand Rubina Business Park At Rasuna Epicentrum<br>Jalan Haji R. Rasuna Said, Jakarta Selatan<br>Daerah Khusus Ibukota Jakarta 12940<br>Telepon: (021) 29115611</p>
                                </div>
                            </div>
                            <div class="lists_item">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>PENJAMIN PELAKSANA EMISI efek</h4>
                                    <p>PT Sinarmas Sekuritas</p>
                                </div>
                            </div>
                            <div class="lists_item">
                                <div class="lines_red mb-2"></div>
                                <div class="in_texts pb-2">
                                    <h4>PENJAMIN EMISI efek</h4>
                                    <p>PT Indo Capital Sekuritas</p>
                                </div>
                            </div>
                            
                            <div class="clear clearfix"></div>
                        </div>
                    <?php endif ?>

                    <?php if (isset($_GET['name']) && $_GET['name'] == 'financial'): ?>
                        <div class="row tops_block">
                            <div class="col-md-40">
                                <h3 class="titles_top">INFORMASI FINANSIAL</h3>
                            </div>
                            <div class="col-md-20">
                                <div class="bcl_back text-right"><a class="btn btn-link" onclick="window.history.back();" href="#">Back</a></div>
                            </div>
                        </div>

                        <div class="outers_box_list">
                            <div class="lists_item">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>ikhtisar data keuangan penting</h4>
                                    <p>21 January 2020</p>
                                    <div class="py-1"></div>
                                    <a target="_blank" href="<?php echo Yii::app()->baseUrl.'/document/IKHTISA-DATA-KEUANGAN-PENTING.pdf' ?>" class="btn btns_download"><i class="fa fa-download"></i> &nbsp;DOWNLOAD</a>
                                </div>
                            </div>
                            <div class="lists_item">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>LAPORAN TAHUNAN</h4>
                                    <p>21 January 2020</p>
                                    <div class="py-1"></div>
                                    <a target="_blank" href="<?php echo Yii::app()->baseUrl.'/document/laporan-keuangan.pdf' ?>" class="btn btns_download"><i class="fa fa-download"></i> &nbsp;DOWNLOAD</a>
                                </div>
                            </div>
                            
                            
                            <div class="clear clearfix"></div>
                        </div>
                    <?php endif ?>

                    <?php if (isset($_GET['name']) && $_GET['name'] == 'governance'): ?>
                        <div class="row tops_block">
                            <div class="col-md-40">
                                <h3 class="titles_top">tata kelola perusahaan</h3>
                            </div>
                            <div class="col-md-20">
                                <div class="bcl_back text-right"><a class="btn btn-link" onclick="window.history.back();" href="#">Back</a></div>
                            </div>
                        </div>

                        <div class="outers_box_list">
                            <div class="lists_item">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>INFORMASI TATA KELOLA PERUSAHAAN</h4>
                                    <p>21 January 2020</p>
                                    <div class="py-1"></div>
                                    <a target="_blank" href="<?php echo Yii::app()->baseUrl.'/document/TATA-KELOLA.pdf' ?>" class="btn btns_download"><i class="fa fa-download"></i> &nbsp;DOWNLOAD</a>
                                </div>
                            </div>
                            <div class="lists_item">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>STRUKTUR ORGANISASI</h4>
                                    <img src="<?php echo Yii::app()->baseUrl.'/asset/images/banners-gov_1.jpg'; ?>" alt="" class="img img-fluid">
                                </div>
                            </div>

                            <div class="lists_item">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2 contents">
                                    <h4>pemegang saham dan presentasi kepemilikan</h4>
                                    <p>HUBUNGAN KEPEMILIKAN, PENGURUSAN DAN PENGAWASAN ANTARA PERSEROAN DENGAN PEMEGANG SAHAM BERBENTUK BADAN HUKUM</p>
                                    <p><strong>A. Hubungan Kepemilikan antara Perseroan dengan Pemegang Saham Berbentuk Badan Hukum</strong></p>
                                    <img src="<?php echo Yii::app()->baseUrl.'/asset/images/banners-gov_2.jpg'; ?>" alt="" class="img img-fluid">
                                    <p>Keterangan: Meilyna Widjaja merupakan pengendali Perseroan</p>
                                    <p>&nbsp;</p>
                                    <p><strong>A. Hubungan Pengurus dan Pengawasan</strong></p>
                                    <p>Berikut ini adalah tabel hubungan pengurusan dan pengawasan Perseroan dengan pemegang saham Perseroan.</p>
                                    <img src="<?php echo Yii::app()->baseUrl.'/asset/images/banners-gov_3.jpg'; ?>" alt="" class="img img-fluid">
                                </div>
                            </div>
                            
                            
                            <div class="clear clearfix"></div>
                        </div>
                    <?php endif ?>

                    <div class="clear clearfix"></div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</section>

<?php echo $this->renderPartial('//layouts/_layform_bottom', array()); ?>

<style type="text/css">
    section.cover-insides{
        background-repeat: no-repeat; 
    }

    section.hub-investor-sec-1{
        margin-bottom: 50px;
    }
</style>