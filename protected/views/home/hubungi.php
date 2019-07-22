<section class="cover-insides">
    <div class="begrond">
        <div class="prelative container">
                <div class="teks">
                    <div class="row">
                        <div class="col-md-60">
                            <h1 class="teks-cover"><?php echo Tt::t('front', 'Hubungi Kami') ?></h1>
                        </div>
                        <div class="col-md-60 ">
                            <?php if (Yii::app()->language == 'en'): ?>
                            <div class="teks">A new face in the world of scrap metal trading in Indonesia</div>
                            <?php else: ?>
                            <div class="teks">Sebuah wajah baru di dunia perdagangan besi bekas di Indonesia</div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

<section class="hubungi-sec-1">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-25">
                <div class="merah">
                    <p><?php echo Tt::t('front', 'KANTOR PUSAT') ?></p>
                </div>
                <div class="biru">
                    <p>PT Optima Prima Metal Sinergi
                    </p>
                </div>
                <div class="alamat">
                    <p>Jl. Margomulyo Permai blok AC no 10 Surabaya, Jawa Timur - Indonesia</p>
                    <p class="teksmap"><a href="#">View on Google Map</a>
                    </p>
                </div>
                <div class="kontak">
                    <table>
                        <tr>
                            <td>Telephone</td>
                            <td>(031) 7495673</td>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <td>(031) 7490073</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>info@opms.co.id</td>
                        </tr>
                        <tr>
                            <td>Whatsapp</td>
                            <td>082 333 112268 (Click to chat)</td>
                        </tr>
                    </table>

                </div>
            </div>
            <div class="col-md-35">
                <div class="row">
                    <div class="col-md-60">
                        <div class="box-content">
                            <div class="content">
                                <?php if (Yii::app()->language == 'en'): ?>
                                <div class="title">
                                    <p>Online contact form</p>
                                </div>
                                <div class="subtitle">
                                    <p>Let's talk with our team at OPMS. We will welcome all your questions and needs!</p>
                                </div>    
                                <?php else: ?>
                                <div class="title">
                                    <p>Formulir kontak online</p>
                                </div>
                                <div class="subtitle">
                                    <p>Mari berbicara dengan tim kami di Kirana Food. Kami akan menyambut semua pertanyaan dan kebutuhan anda!</p>
                                </div>
                                <?php endif ?>

                                <form class="fieldd">
                                    <div class="form-row">
                                        <div class="form-group col-md-15">
                                            <label for="inputEmail4"><?php echo Tt::t('front', 'Nama Perusahaan') ?></label>
                                            <input type="text" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-15">
                                            <label for="inputEmail4"><?php echo Tt::t('front', 'Nama') ?></label>
                                            <input type="text" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-15">
                                            <label for="inputEmail4"><?php echo Tt::t('front', 'Telepon') ?></label>
                                            <input type="nama" class="form-control" id="inputEmail4" placeholder="">
                                        </div>
                                        <div class="form-group col-md-15">
                                            <label for="inputEmail4"><?php echo Tt::t('front', 'Email') ?></label>
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-60">
                                            <label for="inputEmail4"><?php echo Tt::t('front', 'Pesan') ?></label>
                                            <textarea class="form-control" rows="5" id="comment"></textarea>
                                        </div>

                                    </div>
                                </form>

                                <button class="form-control">submit</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>