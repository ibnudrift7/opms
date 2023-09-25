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
                        <li <?php if ($_GET['name'] == 'investor'): ?>class="active"<?php endif ?> >
                                <a class="nav-link dropdown-toggle" href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'investor')); ?>" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo Tt::t('front', 'INFORMASI INVESTOR') ?>
                                </a>
                                <ul class="dropdown-menu <?php if ($_GET['name'] == 'investor'): ?>show<?php endif ?>" aria-labelledby="navbarDropdown_1">
                                  <li <?php if ($_GET['sub'] == 'investor_prospektus_penawaran_umum'): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'investor', 'sub'=>'investor_prospektus_penawaran_umum')); ?>"><?php echo Tt::t('front', 'Prospektus penawaran umum') ?></a></li>
                                  <li <?php if ($_GET['sub'] == 'investor_akuntan_publik'): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'investor', 'sub'=>'investor_akuntan_publik')); ?>"><?php echo Tt::t('front', 'Akuntan Publik') ?></a></li>
                                  <li <?php if ($_GET['sub'] == 'investor_penjamin_pelaksana'): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'investor', 'sub'=>'investor_penjamin_pelaksana')); ?>"><?php echo Tt::t('front', 'Penjamin Pelaksana Emisi Efek') ?></a></li>
                                  <li <?php if ($_GET['sub'] == 'investor_penjamin_emisi'): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'investor', 'sub'=>'investor_penjamin_emisi')); ?>"><?php echo Tt::t('front', 'Penjamin Emisi Efek') ?></a></li>

                                  <li <?php if ($_GET['sub'] == 'rups'): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'investor', 'sub'=>'rups')); ?>"><?php echo Tt::t('front', 'RUPS') ?></a></li>
                                </ul>
                          </li>

                        <li <?php if ($_GET['name'] == 'financial'): ?>class="active"<?php endif ?> >
                                <a class="nav-link dropdown-toggle" href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'financial')); ?>" id="navbarDropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo Tt::t('front', 'INFORMASI FINANSIAL') ?>
                                </a>
                                <ul class="dropdown-menu <?php if ($_GET['name'] == 'financial'): ?>show<?php endif ?>" aria-labelledby="navbarDropdown_2">
                                  <li <?php if ($_GET['sub'] == 'financial_ikhtisar_laporan'): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'financial', 'sub'=>'financial_ikhtisar_laporan' )); ?>"><?php echo Tt::t('front', 'Ikhtisar Laporan Keuangan Penting') ?></a></li>
                                  <li <?php if ($_GET['sub'] == 'financial_laporan_tahunan'): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'financial', 'sub'=>'financial_laporan_tahunan' )); ?>"><?php echo Tt::t('front', 'Laporan Tahunan') ?></a></li>
                                </ul>
                          </li>

                        <li <?php if ($_GET['name'] == 'governance'): ?>class="active"<?php endif ?> >
                            <a class="nav-link dropdown-toggle" href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'governance')); ?>" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo Tt::t('front', 'TATA KELOLA PERUSAHAAN') ?>
                            </a>
                            <ul class="dropdown-menu <?php if ($_GET['name'] == 'governance'): ?>show<?php endif ?>" aria-labelledby="navbarDropdown_3">
                              <li <?php if ($_GET['sub'] == 'informasi_tata_kelola'): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'governance', 'sub'=> 'informasi_tata_kelola' )); ?>"><?php echo Tt::t('front', 'INFORMASI TATA KELOLA PERUSAHAAN') ?></a></li>
                              <li <?php if ($_GET['sub'] == 'struktur_organisasi'): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'governance', 'sub'=> 'struktur_organisasi' )); ?>"><?php echo Tt::t('front', 'STRUKTUR ORGANISASI') ?></a></li>
                              <li <?php if ($_GET['sub'] == 'pemegang_saham'): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'governance', 'sub'=> 'pemegang_saham' )); ?>"><?php echo Tt::t('front', 'pemegang saham dan presentasi kepemilikan') ?></a></li>
                              <li <?php if ($_GET['sub'] == 'fungsi_corporate_secretary'): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'governance', 'sub'=> 'fungsi_corporate_secretary' )); ?>"><?php echo Tt::t('front', 'FUNGSI, TUGAS, KEWENANGAN DAN TANGGUNG JAWAB CORPPORATE SECRETARY') ?></a></li>
                              <li <?php if ($_GET['sub'] == 'fungsi_komite_audit'): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'governance', 'sub'=> 'fungsi_komite_audit' )); ?>"><?php echo Tt::t('front', 'FUNGSI, TUGAS, KEWENANGAN DAN TANGGUNG JAWAB KOMITE AUDIT') ?></a></li>
                              <li <?php if ($_GET['sub'] == 'fungsi_unit_audit'): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'governance', 'sub'=> 'fungsi_unit_audit' )); ?>"><?php echo Tt::t('front', 'FUNGSI, TUGAS, KEWENANGAN DAN TANGGUNG JAWAB UNIT AUDIT INTERNAL') ?></a></li>
                            </ul>
                      </li>
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

                        <div id="data_tscroll" class="outers_box_list">

                            <?php if ($_GET['sub'] == 'rups'): ?>
                            <div class="lists_item" id="section-investor-1">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>Pengumuman Rapat umum pemegang saham Tahunan 2019</h4>
                                    <!-- <p>2019</p> -->
                                    <div class="py-1"></div>
                                    <a target="_blank" href="<?php echo Yii::app()->baseUrl.'/document/saham-opms.pdf' ?>" class="btn btns_download"><i class="fa fa-download"></i> &nbsp;DOWNLOAD</a>
                                </div>
                            </div>
                            <?php endif ?>

                            <?php if ($_GET['sub'] == 'investor_prospektus_penawaran_umum'): ?>
                            <div class="lists_item" id="section-investor-1">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>prospektus penawaran umum</h4>
                                    <p>21 January 2020</p>
                                    <div class="py-1"></div>
                                    <a target="_blank" href="<?php echo Yii::app()->baseUrl.'/document/prospektus-opms.pdf' ?>" class="btn btns_download"><i class="fa fa-download"></i> &nbsp;DOWNLOAD</a>
                                </div>
                            </div>
                            <?php endif ?>

                            <?php if ($_GET['sub'] == 'investor_akuntan_publik'): ?>
                            <div class="lists_item" id="section-investor-2">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>AKUNTAN PUBLIK</h4>
                                    <p>Kantor Akuntan Publik Morhan dan rekan.<br>Generali Tower, 8th floor Grand Rubina Business Park At Rasuna Epicentrum<br>Jalan Haji R. Rasuna Said, Jakarta Selatan<br>Daerah Khusus Ibukota Jakarta 12940<br>Telepon: (021) 29115611</p>
                                </div>
                            </div>
                            <?php endif ?>
                            
                            <?php if ($_GET['sub'] == 'investor_penjamin_pelaksana'): ?>
                            <div class="lists_item" id="section-investor-3">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>PENJAMIN PELAKSANA EMISI efek</h4>
                                    <p>PT Sinarmas Sekuritas</p>
                                </div>
                            </div>
                            <?php endif ?>

                            <?php if ($_GET['sub'] == 'investor_penjamin_emisi'): ?>
                            <div class="lists_item" id="section-investor-4">
                                <div class="lines_red mb-2"></div>
                                <div class="in_texts pb-2">
                                    <h4>PENJAMIN EMISI efek</h4>
                                    <p>PT Indo Capital Sekuritas</p>
                                </div>
                            </div>
                            <?php endif ?>
                            
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
                            <?php if ($_GET['sub'] == 'financial_ikhtisar_laporan'): ?>
                            <div class="lists_item" id="section-financial-1">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>Ikhtisar Laporan Keuangan Penting</h4>
                                    <div class="row">
                                        <div class="col-md-15">
                                            <p>31 Desember 2019</p>
                                            <div class="py-1"></div>
                                            <a target="_blank" href="<?php echo Yii::app()->baseUrl.'/document/31-Desember-2019.pdf' ?>" class="btn btns_download"><i class="fa fa-download"></i> &nbsp;DOWNLOAD</a>
                                        </div>
                                        <div class="col-md-15">
                                            <p>September 2019</p>
                                            <div class="py-1"></div>
                                            <a target="_blank" href="<?php echo Yii::app()->baseUrl.'/document/final-opms-2019.pdf' ?>" class="btn btns_download"><i class="fa fa-download"></i> &nbsp;DOWNLOAD</a>
                                        </div>
                                        <div class="col-md-15">
                                            <p>April 2019</p>
                                            <div class="py-1"></div>
                                            <a target="_blank" href="<?php echo Yii::app()->baseUrl.'/document/Ihktisar-Laporan-Keuangan-Penting.pdf' ?>" class="btn btns_download"><i class="fa fa-download"></i> &nbsp;DOWNLOAD</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif ?>

                            <?php if ($_GET['sub'] == 'financial_laporan_tahunan'): ?>
                            <div class="lists_item" id="section-financial-2">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>Laporan Tahunan 2019</h4>
                                    <div class="row">
                                        <div class="col-md-15">
                                            <!-- <p>10 June 2020</p> -->
                                            <p>Annual Report 2019</p>
                                            <div class="py-1"></div>
                                            <a target="_blank" href="<?php echo Yii::app()->baseUrl.'/document/AR2019-OPMS-AllPages-small.pdf' ?>" class="btn btns_download"><i class="fa fa-download"></i> &nbsp;DOWNLOAD</a>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                            <?php endif ?>

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
                            <?php if ($_GET['sub'] == 'informasi_tata_kelola'): ?>
                            <div class="lists_item" id="section-governance-1">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>INFORMASI TATA KELOLA PERUSAHAAN</h4>
                                    <p>21 January 2020</p>
                                    <div class="py-1"></div>
                                    <a target="_blank" href="<?php echo Yii::app()->baseUrl.'/document/TATA-KELOLA.pdf' ?>" class="btn btns_download"><i class="fa fa-download"></i> &nbsp;DOWNLOAD</a>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if ($_GET['sub'] == 'struktur_organisasi'): ?>
                            <div class="lists_item" id="section-governance-2">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4>STRUKTUR ORGANISASI</h4>
                                    <img src="<?php echo Yii::app()->baseUrl.'/asset/images/banners-gov_1.jpg'; ?>" alt="" class="img img-fluid">
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if ($_GET['sub'] == 'pemegang_saham'): ?>
                            <div class="lists_item" id="section-governance-3">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2 contents">
                                    <h4>pemegang saham dan presentasi kepemilikan</h4>
                                    <div class="py-2"></div>
                                    <img src="<?php echo Yii::app()->baseUrl.'/asset/images/banners-gov_latest.jpg'; ?>" alt="" class="img img-fluid">
                                    <div class="py-4"></div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if ($_GET['sub'] == 'fungsi_corporate_secretary'): ?>
                            <div class="lists_item" id="section-governance-4">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2 contents">
                                    <h4>FUNGSI, TUGAS, KEWENANGAN DAN TANGGUNG JAWAB CORPPORATE SECRETARY</h4>
                                    <div class="py-2"></div>
                                    <ol><li>Memberikan masukan kepada Direksi Perseroan untuk mematuhi ketentuan-ketentuan yang berlaku, termasuk tapi tidak terbatas Undang-Undang Nomor 40 Tahun 2007 tentang Perseroan Terbatas, Undang- Undang Nomor 8 Tahun 1995 tentang Pasar Modal serta peraturan-peraturan yang berlaku di Republik Indonesia dan sesuai dengan norma-norma <em>corporate governance </em>secara umum.</li><li>Mengikuti perkembangan Pasar Modal khususnya peraturan-peraturan yang berlaku di bidang Pasar Modal.</li><li>Sebagai penghubung antara Perseroan dengan Otoritas Jasa Keuangan, Bursa Efek Indonesia, <em>stakeholder </em>dan masyarakat.</li><li>Memelihara hubungan yang baik antara Perseroan dengan media massa.</li><li>Memberikan pelayanan kepada masyarakat (pemodal)  atas setiap informasi yang dibutuhkan pemodal yang berkaitan dengan kondisi Perseroan.</li><li>Melaksanakan kegiatan-kegiatan yang mendukung kegiatan Perseroan tersebut di atas antara lain Laporan Tahunan, Rapat Umum Pemegang Saham, Keterbukaan Informasi dan lain sebagainya.</li><li>Mempersiapkan praktik <em>Good Corporate Governance (GCG) </em>di lingkungan Perseroan.</li><li>Menjaga dan mempersiapkan dokumentasi Perseroan, termasuk notulen dari Rapat.</li></ol>                                    
                                    <div class="py-4"></div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if ($_GET['sub'] == 'fungsi_komite_audit'): ?>
                            <div class="lists_item" id="section-governance-5">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2 contents">
                                    <h4>FUNGSI, TUGAS, KEWENANGAN DAN TANGGUNG JAWAB KOMITE AUDIT</h4>
                                    <div class="py-2"></div>
                                    <p><strong>HUBUNGAN KERJA </strong></p>
                                    <p>Komite Audit mempunyai hubungan kerja langsung dan bertanggung jawab kepada Dewan Komisaris serta hubungan kerja tidak langsung dengan auditor internal.</p>
                                    <p><strong>TUGAS</strong></p>
                                    <ol></ol>
                                    <p>Masa tugas anggota Komite Audit tidak boleh lebih lama dari masa jabatan Dewan Komisaris sebagaimana diatur dalam Anggaran Dasar dan dapat dipilih kembali hanya untuk satu periode berikutnya.</p>
                                    <p><strong>KEWENANGAN</strong></p>
                                    <ol></ol>
                                    <p>Dalam melaksanakan tugasnya Komite Audit mempunyai wewenang sebagai berikut:</p>
                                    <ol><li>mengakses dokumen, data, dan informasi  tentang karyawan, dana, aset, dan sumber daya perusahaan yang diperlukan;</li><li>berkomunikasi langsung dengan karyawan, termasuk Direksi dan pihak yang menjalankan fungsi audit internal, manajemen risiko, dan Akuntan terkait tugas dan tanggung jawab Komite Audit;</li><li>melibatkan pihak independen di luar anggota Komite Audit yang diperlukan untuk membantu pelaksanaan tugasnya (jika diperlukan); dan</li><li>melakukan kewenangan lain yang diberikan oleh Dewan Komisaris.</li></ol>
                                    <p></p>
                                    <p><strong>TANGGUNG JAWAB KOMITE AUDIT</strong></p>
                                    <p>Dalam menjalankan fungsinya, Komite Audit memiliki tugas dan tanggung jawab antara lain sebagai berikut:</p>
                                    <ol><li>melakukan penelaahan atas informasi keuangan yang akan dikeluarkan Perseroan kepada publik dan/atau pihak otoritas antara lain laporan keuangan, proyeksi, dan laporan lainnya terkait dengan informasi keuangan Perseroan;</li><li>melakukan penelaahan atas ketaatan terhadap peraturan perundang-undangan yang berhubungan dengan kegiatan Perseroan;</li><li>memberikan pendapat independen dalam hal terjadi perbedaan pendapat antara manajemen dan Akuntan atas jasa yang diberikannya;</li><li>memberikan rekomendasi kepada Dewan Komisaris mengenai penunjukan Akuntan yang didasarkan pada independensi, ruang lingkup penugasan, dan fee;</li><li>melakukan penelaahan atas pelaksanaan pemeriksaan oleh auditor internal dan mengawasi pelaksanaan tindak lanjut oleh Direksi atas temuan auditor internal;</li><li>melakukan penelaahan terhadap aktivitas pelaksanaan manajemen risiko yang dilakukan oleh Direksi, jika Perseroan tidak memiliki fungsi pemantau risiko di bawah Dewan Komisaris;</li><li>menelaah pengaduan yang berkaitan dengan proses akuntansi dan pelaporan keuangan Perseroan;</li><li>menelaah dan memberikan saran kepada Dewan Komisaris terkait dengan adanya potensi benturan kepentingan; dan</li><li>menjaga kerahasiaan dokumen, data dan informasi Perseroan</li></ol>
                                    <p></p>
                                    <p><strong>PELAPORAN</strong></p>
                                    <ol><li>Komite Audit wajib membuat laporan kepada Dewan Komisaris atas setiap penugasan yang diberikan.</li><li>Komite Audit wajib membuat laporan tahunan pelaksanaan kegiatan Komite Audit yang diungkapkan dalam Laporan Tahunan Perseroan.</li><li>Emiten atau Perusahaan Publik wajib menyampaikan kepada Otoritas Jasa Keuangan informasi mengenai pengangkatan dan pemberhentian Komite Audit dalam jangka waktu paling lama 2 (dua) hari kerja setelah pengangkatan atau pemberhentian.</li></ol>
                                    <p>Informasi mengenai pengangkatan dan pemberhentian sebagaimana dimaksud dalam huruf c wajib dimuat dalam laman (<em>website</em>) bursa dan/atau laman (<em>website</em>) Perseroan.</p>
                                    <div class="py-4"></div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if ($_GET['sub'] == 'fungsi_unit_audit'): ?>
                            <div class="lists_item" id="section-governance-6">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2 contents">
                                    <h4>FUNGSI, TUGAS, KEWENANGAN DAN TANGGUNG JAWAB UNIT AUDIT INTERNAL</h4>
                                    <div class="py-2"></div>
                                    <p>Dalam melaksanakan tugasnya, Unit Audit Internal memiliki tugas sebagai berikut:</p>
                                    <ol><li>Menyusun rencana kerja audit tahunan termasuk anggaran dan sumber dayanya dan  berkoordinasi dengan komite audit perusahaan. </li><li>Melakukan <em>special audit </em>atas permintaan dari manajemen.</li><li>Menggunakan analisa resiko untuk mengembangkan rencana audit.</li><li>Membantu direksi dalam memenuhi tanggung jawab pengelolaan perusahaan dengan melakukan pemeriksaan dan penilaian atas efisiensi dan efektifitas di bidang keuangan, akuntansi, operasional,  sumber daya manusia, pemasaran, teknologi informasi dan kegiatan lainnya. </li><li>Berpartisipasi sebagai penasehat dalam merancang suatu sistem.</li><li>Meyakinkan semua harta perusahaan sudah dilaporkan dan dijaga dari kerusakan dan kehilangan</li><li>Menilai kualitas prestasi unit kerja di lingkungan PT Shield On Service,, Tbk., dengan memberikan saran perbaikan dan informasi yang obyektif tentang kegiatan yang diperiksa pada semua tingkatan manajemen.</li><li>Melaksanakan Audit Operasional dan ketaatan atas kegiatan manajemen yang bertujuan untuk memastikan bahwa kebijakan, rencana serta prosedur perusahaan dan hukum yang berlaku telah dijalankan sebagaimana mestinya.</li><li>Membuat laporan hasil audit dan menyampaikan laporan tersebut kepada Direktur Utama dan Dewan Komisaris atas temuan yang signifikan sebagai hasil dari pemeriksaan yang dilakukan.</li><li>Memantau, menganalisis dan melaporkan pelaksanaan tindak lanjut perbaikan yang telah disarankan.</li></ol>
                                    <p></p>
                                    <p><strong>Unit Audit Internal bertanggung jawab kepada Dewan Direksi dalam hal:</strong></p>
                                    <ol><li>Mengevaluasi hasil penilaian atas kecukupan dan efektivitas struktur pengendalian intern perusahaan dan pengelolaan risiko yang ditetapkan dalam misi dan ruang lingkup pekerjaan auditor internal sehingga dapat membantu proses pengambilan keputusan oleh management.</li><li>Menyampaikan laporan atas setiap temuan yang signifikan terkait proses pengendalian perusahaan dan anak perusahaannya, termasuk memberikan saran perbaikan yang dapat dilaksanakan.</li><li>Memberikan informasi atau laporan secara periodik mengenai hasil audit yang telah dicapai dengan sasaran yang telah ditetapkan dalam rencana audit tahunan dan kecukupan jumlah auditor yang diperlukan dalam pelaksanaan tugasnya.</li><li>Berkoordinasi dengan berbagai pihak baik intern dan ekstern seperti : eksternal audit, legal dan lain-lain.</li></ol>
                                    <p></p>
                                    <p><strong>Wewenang Unit Audit Internal</strong></p>
                                    <ol></ol>
                                    <p>Dalam melaksanakan tugasnya, Unit Audit Internal memiliki wewenang sebagai berikut :<br><br></p>
                                    <ol><li>Mengakses catatan atau informasi yang relevan tentang karyawan, dana, asset serta sumber daya perusahaan lainnya yang terkait dengan pelaksanaan tugas.</li><li>Melakukan verifikasi dan uji kehandalan terhadap informasi yang diperoleh, dalam kaitannya dengan  pelaksanaan tugas.</li><li>Mengadakan rapat secara berkala dan insidentil dengan Direksi, Dewan Komisaris melalui Komite Audit .</li><li>Melakukan koordinasi kegiatannya dengan kegiatan eksternal auditor.</li><li>Meminta saran dan pendapat dari pihak ketiga atau tenaga ahli jika diperlukan dalam pelaksanaan tugas.</li></ol><p></p>
                                    <p><strong>Kode Etik Unit Audit Internal</strong></p>
                                    <ol></ol>
                                    <p>Dalam melaksanakan tugasnya Unit Audit Internal mengacu pada Standar Profesi Audit Internal (SPAI) dari Konsorsium Organisasi Profesi Audit Internal dan <em>Code of Ethic</em> dari <em>The Institute of Internal Auditor</em> <br><br></p>

                                    <p><strong>Persyaratan Auditor Internal</strong></p>
                                    <ol></ol>
                                    <p>Persyaratan auditor internal yang duduk dalam Unit Audit Internal : </p>
                                    <ol><li>Memiliki integritas dan perilaku yang profesional, independen, jujur, dan obyektif dalam pelaksanaan tugasnya; </li><li>Memiliki pengetahuan dan pengalaman mengenai teknis audit dan disiplin ilmu lain yang relevan dengan bidang tugasnya; </li><li>Memiliki pengetahuan tentang peraturan perundang-undangan di bidang pasar modal dan peraturan perundang-undangan terkait lainnya; </li><li>Memiliki kecakapan untuk berinteraksi dan berkomunikasi baik lisan maupun tertulis secara efektif; </li><li>Wajib mematuhi standar profesi yang dikeluarkan oleh asosiasi Audit Internal; </li><li>Wajib mematuhi kode etik Audit Internal; </li><li>Wajib menjaga kerahasiaan informasi dan/atau data perusahaan terkait dengan pelaksanaan tugas dan tanggung jawab Audit Internal kecuali diwajibkan berdasarkan peraturan perundang-undangan atau penetapan/putusan pengadilan; </li><li>Memahami prinsip-prinsip tata kelola perusahaan yang baik dan manajemen risiko; dan </li><li>Bersedia meningkatkan pengetahuan, keahlian dan kemampuan profesionalismenya secara terus-menerus. </li></ol>
                                    <p><br><br></p>
                                    <p><strong>Pola Hubungan</strong></p><p><strong>Hubungan dengan Auditan</strong><strong></strong></p><ol></ol>
                                    <p>Dalam setiap penugasan pengawasan, Audit Internal memberikan penjelasan kepada pimpinan unit kerja selaku Auditan untuk:</p>
                                    <ol><li>Menjelaskan tujuan dan ruang lingkup penugasan yang dilaksanakan sebelum kegiatan tersebut dimulai.</li><li>Membahas permasalahan-permasalahan yang ditemui dan rekomendasi pada saat penyelesaian penugasan.</li><li>Mendapatkan dukungan sepenuhnya dari Auditan dalam pelaksanaan tugasnya, serta memantau tindak lanjut atas rekomendasi dari hasil temuan Audit Internal dalam rangka perbaikan dan peningkatan kinerja unit kerja perusahaan.</li><li>Tanggung jawab terhadap pengendalian resiko dan pencegahan kecurangan tetap ada pada manajemen setiap unit kerja perusahaan</li></ol><p><strong>Hubungan dengan Komite Audit</strong></p>

                                    <p>Audit Internal berkoordinasi dengan Komite Audit dengan cara :</p>
                                    <ol><li>Menyampaikan Program Kerja Pengawasan Tahunan ( PKPT ).</li><li>Menyampaikan tembusan Laporan Hasil Audit (LHA) kepada Komite Audit tentang kecukupan pengendalian internal atas ijin Direktur Utama.</li><li>Menyampaikan tembusan laporan mengenai  kecurangan dan memberikan informasi tentang status kasus yang sedang diinvestigasi atas ijin Direktur Utama.</li></ol>
                                    <p><strong>Peningkatan Kualitas Audit Internal </strong></p>
                                    <p>Dalam rangka menjamin tingkat kualitas kinerja Audit Internal yang professional dan konsisten, diperlukan peningkatan kompetensi personil Internal Audit secara berkesinambungan.</p>
                                    <p></p>
                                    <div class="py-4"></div>
                                </div>
                            </div>
                            <?php endif; ?>
                            
                            
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