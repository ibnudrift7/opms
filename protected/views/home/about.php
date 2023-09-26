<section class="cover-insides" style="background-image: url(<?php echo Yii::app()->baseUrl . ImageHelper::thumb(1920, 539, '/images/static/' . $this->setting['about_hero_image'], array('method' => 'adaptiveResize', 'quality' => '90')) ?>) !important; background-size: cover !important;">
    <div class="begrond">
        <div class="prelative container">
            <div class="teks">
                <div class="row">
                    <div class="col-md-60">
                        <h1 class="teks-cover"><?php echo $this->setting['about_hero_title'] ?></h1>
                    </div>
                    <div class="col-md-60 ">
                        <div class="teks"><?php echo $this->setting['about_hero_subtitle'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-sec-1">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-30">
                <div class="box-content-left">
                    <div class="title">
                        <p><?php echo $this->setting['about1_title'] ?></p>
                    </div>
                    <div class="caption">
                        <p><?php echo $this->setting['about1_subtitle'] ?></p>
                    </div>
                    <div class="content">
                        <?php echo $this->setting['about1_content'] ?>
                    </div>
                </div>
            </div>
            <div class="col-md-30">
                <div class="box-content-right">
                    <div class="image">
                        <img src="<?php echo Yii::app()->baseUrl . ImageHelper::thumb(692, 596, '/images/static/' . $this->setting['about1_image'], array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-sec-2">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-30">
                <div class="box-content-left">
                    <div class="image">
                        <img src="<?php echo Yii::app()->baseUrl . ImageHelper::thumb(670, 415, '/images/static/' . $this->setting['about2_image'], array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-30">
                <div class="box-content-right">
                    <div class="content">
                        <h5><?php echo $this->setting['about2_title'] ?></h5>
                        <?php echo $this->setting['about2_content'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-sec-3">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-60">
                <div class="title-atas">
                    <p><?php echo $this->setting['about3_title'] ?></p>
                </div>
            </div>
            <div class="col-md-30">
                <div class="box-content-left">
                    <div class="content">
                        <?php echo $this->setting['about3_contents'] ?>
                    </div>
                </div>
            </div>
            <div class="col-md-30">
                <div class="box-content-right">
                    <div class="title">
                        <h5>VISION</h5>
                        <?php echo $this->setting['about3_visi'] ?>
                    </div>
                    <div class="title">
                        <h5>MISSION</h5>
                        <?php echo $this->setting['about3_misi'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-sec-4">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-60">
                <div class="box-content-title">
                    <div class="title">
                        <p><?php echo $this->setting['about4_smalltitle'] ?></p>
                    </div>
                    <div class="caption">
                        <p><?php echo $this->setting['about4_title'] ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-4"></div>

        <div class="row">
            <div class="col-md-15">
                <div class="lefts_cont">
                    <?php echo $this->setting['about4_contents'] ?>
                </div>
            </div>
            <div class="col-md-45">
                <div class="fulls_banner">
                    <img class="img img-fluid" src="<?php echo Yii::app()->baseUrl . ImageHelper::thumb(2000, 1321, '/images/static/' . $this->setting['about4_image'], array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                </div>
            </div>
        </div>

        <?php /*
        <?php
            $mod_orang = [
                1 => 
                [
                    'gambar' => 'aboutcon2',
                    'nama' => 'Sumardi Wijaya',
                    'pangkat' => 'Komisaris Utama',
                    'info' => '<p>Menjabat sebagai Komisaris Utama Perseroan sejak 2012</p><p>Memperoleh gelar dari Sekolah Guru Tionghoa, Ujung Pandang pada tahun 1964.</p>',
                ],
                [
                    'gambar' => 'aboutcon3',
                    'nama' => 'Kentarto',
                    'pangkat' => 'Komisaris Independen',
                    'info'=>'<p>Menjabat sebagai Komisaris Independen Perseroan sejak 2019</p><p>Memperoleh gelar Diploma dari Institute Teknologi 10 Nopember Surabaya pada tahun 1986, Sarjana Electro dan Lingkungan dari Institute Teknologi Pembangunan Surabaya pada tahun 2000 dan Magister Lingkungan dari Institute Teknologi 10 Nopember Surabaya pada tahun 2002.</p>',
                ],
                [
                    'gambar' => 'aboutcon0',
                    'nama' => 'Meilyna Widjaja',
                    'pangkat' => 'Direktur Utama',
                    'info'=>'<p>Menjabat sebagai Direktur Utama Perseroan sejak 2019</p><p>Memperoleh gelar Bachelor of Science in Marketing dari University of San Fransisco pada tahun 1997 dan Master of International Management dari Thunderbird Graduate School of International Management pada tahun 2000.</p>',
                ],
                [
                    'gambar' => 'aboutcon1',
                    'nama' => 'Hendry',
                    'pangkat' => 'Direktur',
                    'info'=>'<p>Menjabat sebagai Direktur Perseroan sejak 2019</p><p>Memperoleh gelar Bachelor of Science in Finance Arizona State University Tempe pada tahun 2000.</p>',
                ],
                [
                    'gambar' => 'aboutcon4',
                    'nama' => 'Alan Priyambodo Krisnamurti',
                    'pangkat' => 'Direktur',
                    'info'=>'<p>Menjabat sebagai Direktur Perseroan sejak 2019</p><p>Memperoleh gelar Sarjana Manajemen Keuangan dari STIE</p><p>Malangkucecwara Malang, Jawa Timur pada tahun 1998.</p>',
                ],
                
                
                
            ];
        ?>
        <div class="row">
            <?php foreach($mod_orang as $key => $value): ?>
            <div class="col-md-12 col-30">
                <div class="box-content-dalam">
                    <div class="image">
                        <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?><?php echo $value['gambar'] ?>.jpg" alt="" >
                    </div>
                    <div class="nama">
                        <p><?php echo $value['nama'] ?></p>
                    </div>
                    <div class="jabatan">
                        <p><?php echo $value['pangkat'] ?></p>
                    </div>
                    <div class="infos_desc">
                        <?php echo $value['info']; ?>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>

        <div class="py-5"></div>

        <div class="row">
            <div class="col-md-60">
                <div class="box-content-title">
                    <?php if (Yii::app()->language == 'en'): ?>
                    <div class="title">
                        <p>CORPORATE SECRETARY and AUDIT COMMITTEE PT Optima Prima Metal Sinergi</p>
                    </div>
                    <?php else: ?>
                    <div class="title">
                        <p>DEWAN KOMITE SEKRETARIS DAN AUDIT PT Optima Prima Metal Sinergi</p>
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <?php
        $mod_orang2 = [
            1 => 
            [
                'gambar' => 'banns_rubby_nn1',
                'nama' => 'Rubbyanto Ping Hauw Handjaja K',
                'pangkat' => 'Sekertaris Perusahaan',
                'info' => '<p>Memperoleh gelar Sarjana Ekonomi jurusan Akuntansi dari Universitas Surabaya tahun 2000 Manajer Akuntansi dan Perpajakan PT Asian Prima Indosteel (2012-2015), Senior Manager Akuntansi dan Perpajakan PT Asian Prima Indosteel (2015-2019), Corporate Secretary Perseroan (2019-sekarang).</p>',
            ],
            [
                'gambar' => 'banns_rubby_nn2',
                'nama' => 'Kentarto',
                'pangkat' => 'Ketua Komite Audit',
                'info'=>'<p>Menjabat sebagai Komisaris Independen Perseroan sejak 2019</p><p>Memperoleh gelar Diploma dari Institute Teknologi 10 Nopember Surabaya pada tahun 1986, Sarjana Electro dan Lingkungan dari Institute Teknologi Pembangunan Surabaya pada tahun 2000 dan Magister Lingkungan dari Institute Teknologi 10 Nopember Surabaya pada tahun 2002.</p>',
            ],                            
        ];
    ?>
    <div class="row">
        <?php foreach($mod_orang2 as $key => $value): ?>
        <div class="col-md-12 col-30">
            <div class="box-content-dalam">
                <div class="image">
                    <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?><?php echo $value['gambar'] ?>.jpg" alt="" >
                </div>
                <div class="nama">
                    <p><?php echo $value['nama'] ?></p>
                </div>
                <div class="jabatan">
                    <p><?php echo $value['pangkat'] ?></p>
                </div>
                <div class="infos_desc">
                    <?php echo $value['info']; ?>
                </div>
            </div>
        </div>
        <?php endforeach ?>

        <div class="clear clearfix"></div>

    </div>
    */ ?>

</section>

<?php echo $this->renderPartial('//layouts/_layform_bottom', array()); ?>

<style type="text/css">
    section.about-sec-4 {
        /*display: none;
        opacity: 0;
        visibility: hidden;*/
    }

    section.about-sec-4 .box-content-dalam .image {
        /*display: none;*/
    }

    section.about-sec-4 .box-content-dalam .nama {
        font-size: 15px;
    }

    .lefts_cont p {
        margin-bottom: 2rem;
    }
</style>