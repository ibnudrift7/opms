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
                        <?php 
                        $criteria = new CDbCriteria;
                        $criteria->with = array('description');
                        $criteria->addCondition('t.type = :type');
                        $criteria->params[':type'] = 'reportcat';
                        $criteria->addCondition('t.parent_id = :parent_id');
                        $criteria->params[':parent_id'] = 0;

                        $mod_parents = PrdCategory::model()->findAll($criteria);
                        ?>
                        <?php foreach ($mod_parents as $ke_par => $val): ?>
                        <li <?php if ($_GET['category'] == $val->id): ?>class="active"<?php endif ?> >
                                <a class="nav-link dropdown-toggle" href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'name'=>'investor')); ?>" id="navbarDropdown_<?php echo $ke_par ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo strtoupper($val->description->name); ?>
                                </a>
                                <?php 
                                $criteria = new CDbCriteria;
                                $criteria->with = array('description');
                                $criteria->addCondition('t.type = :type');
                                $criteria->params[':type'] = 'reportcat';
                                $criteria->addCondition('t.parent_id = :parent_id');
                                $criteria->params[':parent_id'] = $val->id;
                                $criteria->order = 't.sort asc';
                                $subs_data = PrdCategory::model()->findAll($criteria);
                                ?>
                                <ul class="dropdown-menu <?php if ($_GET['category'] == $val->id): ?>show<?php endif ?>" aria-labelledby="navbarDropdown_<?php echo $ke_par ?>">
                                    <?php foreach ($subs_data as $key => $value): ?>
                                    <li <?php if ($_GET['sub'] == $value->id): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'category'=> $val->id, 'sub'=> $value->id)); ?>"><?php echo strtoupper($value->description->name); ?></a></li>
                                    <?php endforeach ?>
                                </ul>
                          </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-43">
                <div class="py-3"></div>
                <div class="inners_right">
                    <?php 

                    $criteria = new CDbCriteria;
                    $criteria->with = array('description');
                    $criteria->addCondition('t.type = :type');
                    $criteria->params[':type'] = 'reportcat';

                    $criteria->addCondition('t.parent_id = :parent_id');
                    $criteria->params[':parent_id'] = intval($_GET['category']);
                    
                    $data_par = PrdCategory::model()->find($criteria);
                    
                    // -------------------

                    $criteria = new CDbCriteria;
                    $criteria->with = array('description');
                    $criteria->addCondition('t.type = :type');
                    $criteria->params[':type'] = 'reportcat';

                    $criteria->addCondition('t.parent_id = :parent_id');
                    $criteria->params[':parent_id'] = intval($_GET['category']);
                    $criteria->addCondition('t.id = :ids');
                    $criteria->params[':ids'] = intval($_GET['sub']);
                    
                    $data_sub = PrdCategory::model()->find($criteria);
                    ?>
                    <div class="row tops_block">
                            <div class="col-md-40">
                                <h3 class="titles_top"><?php echo strtoupper($data_par->description->name) ?></h3>
                            </div>
                            <div class="col-md-20">
                                <div class="bcl_back text-right"><a class="btn btn-link" onclick="window.history.back();" href="#">Back</a></div>
                            </div>
                        </div>

                        <div class="outers_box_list">
                            <div class="lists_item" id="section-financial-1">
                                <div class="lines_red mb-4"></div>
                                <div class="in_texts pb-2">
                                    <h4><?php echo ucwords($data_sub->description->name) ?></h4>

                                    <?php if ($data_sub->description->desc): ?>
                                        <?php echo $data_sub->description->desc ?>
                                    <?php endif ?>
                                    <div class="py-2"></div>
                                    <?php 
                                    // list pdf
                                    $pdfs_all = Pdf::model()->findAll('category_id = :category_id order by sort asc', array(':category_id'=>$data_sub->id));
                                    ?>
                                    <?php if ($pdfs_all): ?>
                                    <div class="row">
                                        <?php foreach ($pdfs_all as $key => $value): ?>
                                        <div class="col">
                                            <p><?php echo $value->nama ?></p>
                                            <div class="py-1"></div>
                                            <a target="_blank" href="<?php echo Yii::app()->baseUrl.'/images/pdf/'. $value->file ?>" class="btn btns_download"><i class="fa fa-download"></i> &nbsp;DOWNLOAD</a>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                    <?php endif ?>

                                </div>
                            </div>
                            <div class="clear clearfix"></div>
                        </div>

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