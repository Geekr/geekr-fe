<?php $this->load->view('layout/header'); ?>
        <!--/PAGE HEAD-->
         <div class="top_line"></div>      
        <!--WELCOME AREA-->
        <?php foreach($ruta->result() as $row): ?>
        <div class="tag_line">
            <div class="container">
                <div class="row">
                <div class="span12">
                    <div class="welcome">
                        <h3><span class="colored"><?=$row->full_title?></span></h3>
                        <a class="subpage_block" href="home">Home </a>
                        <div class="subpage_breadcrumbs_dv"></div>
                        <span><?=$row->categoria?></span>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <!--/WELCOME AREA-->
            

        <!--MAIN CONTENT AREA-->
        <div class="main_content_area">
             <div class="container">
                 <div class="row">
                     <!--START BLOG CONTENT-->
                     <div class="span12">
                        <div class="row" style="margin-bottom:50px;">
                            <!-- POST IMAGE -->

                            <div class="span8">
                               <div class="row">
                                <div class="span12 blog_item nolink" style="margin-bottom:0px;">
                                    <div class="view view-first">
                                        <img src="images/gallery/games1.jpg" alt="" />                                      
                                    </div>   
                                </div>
                            </div> 
                            </div>
                            <!--POST TEXT-->
                            <div class="span12">
                                <div class="blog_item">
                                    <!--Post info and Title-->
                                    <div class="blog_head">
                                        <div style=" margin-bottom:-5px !important;"></div>
                                    </div>
                                    <!--Post content-->
                                    <div class="blog_post_item_description">
                                        <div class="blog_head blog_inner">
                                            <h4><?=$row->mid_title?></h4>
                                            <div class="meta">
                                                <span><b>Por</b> <a href="#"><?=$row->nombre_autor?></a></span>
                                                <span><a href="#"><?=$row->categoria?></a></span>
                                                <!--<span class="last-item"><a href="#">1 Comments</a></span>-->
                                            </div>
                                        </div> 
                                        <?=$row->full_description?>
                                        <span>tags:</span><span class="label" style="margin-left:5px;"><?=$row->tag1?></span>
                                        <span class="label" style="margin-left:5px;"><?=$row->tag2?></span>
                                        </span><span class="label" style="margin-left:5px;"><?=$row->tag3?></span>
                                        
                                    </div>
                                </div>  
                            </div>

                           <div class="span12">                                
                                    <div class="share">
                                        <span style="float:left; margin-right:10px;">Share this Story:</span>
                                        <div style="float:left">
                                        <!-- AddThis Button BEGIN -->
                                        <div class="addthis_toolbox addthis_default_style ">
                                        <a class="addthis_counter addthis_pill_style"></a>
                                        </div>
                                        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                                        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f88195d6026781e"></script>
                                        <!-- AddThis Button END -->
                                        </div>
                                    </div>
                                </div>

                        <!-- ABOUT AUTHOR-->
                        <?php foreach($ruta->result() as $row): ?> 
                        <div class="span12">
                            <div class="author" style="padding-top:50px;">
                                <ul id="myTab" class="nav nav-tabs">
                                    <li class="active"><a href="#home" data-toggle="tab">Comentarios del autor</a></li>
                                </ul>
                                
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="home">
                                        <a href="#"><img src="images/users/<?=$row->image_autor?>.jpg" class="img-polaroid" align="left" style="margin-right: 20px; margin-bottom: 20px;"></a>
                                        <p><?=$row->intro_autor?></p>                                     
                                        <?=$row->bio_autor?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                  </div>                
                </div>
             </div>
         </div> 
        <!--END MAIN CONTENT AREA-->

        <!--FOOTER-->

<?php $this->load->view('layout/footer'); ?>