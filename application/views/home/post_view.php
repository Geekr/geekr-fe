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


                    <?php foreach($ruta->result() as $row): ?> 
                    <div class="span12">
                        <div class="author" style="padding-top:25px;">
                            <ul id="myTab" class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Comentarios del autor</a></li>
                                <li><a href="#profile" data-toggle="tab">Aspectos a favor</a></li>
                                <li><a href="#private" data-toggle="tab">Aspectos en contra</a></li>
                            </ul>
                            
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <a href="#"><img src="images/gallery/avatar.jpg" class="img-polaroid" align="left" style="margin-right: 20px; margin-bottom: 20px;"></a>
                                    <p><?=$row->bio_autor?></p>                                     
                                    <p> 
                                        <b>Support requests</b> must go through this <a href="http://orange-idea.com/forum/">support forum</a>. Any comments, emails, Facebook messages or tweets which contains support requests will be directed back to this forum with a default message.
                                    </p>

                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                                </div>
                              
                                <div class="tab-pane fade" id="private">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
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