<?php $this->load->view('layout/header'); ?>

        <!-- START TOP LINE-->
        <div class="top_line"></div>
        <!-- END TOP LINE-->        
        <!--/PAGE HEAD-->
            
        <!--WELCOME AREA-->
        <div class="tag_line">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="welcome">
                           <div class="social">
                                <a href="#"><img src="assets/images/social_fb.png" alt="facebook"></a>
                           </div>
                           <div class="social">
                                <a href=""><img src="assets/images/social_tw.png" alt="facebook"></a>
                           </div>
                           <div class="social">
                                <a href=""><img src="assets/images/social_gplus.png" alt="facebook"></a>
                           </div>                                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/WELCOME AREA-->

        <!-- START REVOLUTION SLIDER 2.0.3 -->                        
                      
        <div id="fullwidthbanner_container">
            <div id="fullwidthbanner">
                
            <link rel='stylesheet' id='rev-google-font' href='http://fonts.googleapis.com/css?family==Open+Sans:300italic,400italic,600italic,700italic,800italic,300,600,700,800' type='text/css' media='all' />               

            <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner_container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:440px;height:440;">

                <div id="rev_slider_2_1" class="rev_slider fullwidthbanner_container" style="display:none;max-height:440px;height:440;">                     
                    <ul>
                        <li data-transition="random" data-slotamount="7" data-masterspeed="300" >
                                        
                            <img src="images/gallery/retro_stripe1.png" >
                                                                    
                            <div class="tp-caption lfb"  
                                 data-x="460" 
                                 data-y="16" 
                                 data-speed="1500" 
                                 data-start="500" 
                                 data-easing="easeInOutElastic"  ><img src="images/gallery/ipad1.png" alt="Image 1">
                             </div>
                                            
                            <div class="tp-caption lfb"  
                                 data-x="346" 
                                 data-y="120" 
                                 data-speed="1500" 
                                 data-start="1000" 
                                 data-easing="easeInOutElastic"  ><img src="images/gallery/ipad21.png" alt="Image 2">
                             </div>
                                            
                            <div class="tp-caption very_large_text lfl"  
                                 data-x="-150" 
                                 data-y="42" 
                                 data-speed="1500" 
                                 data-start="1500" 
                                 data-easing="easeInOutElastic"  >Builder is awesome
                             </div>
                                            
                            <div class="tp-caption big_white lfl"  
                                 data-x="-144" 
                                 data-y="104" 
                                 data-speed="1500" 
                                 data-start="2500" 
                                 data-easing="easeOutElastic"  >HTML TEMPLATE
                             </div>
                                            
                            <div class="tp-caption small_text sfb"  
                                 data-x="-140" 
                                 data-y="186" 
                                 data-speed="1500" 
                                 data-start="3500" 
                                 data-easing="easeOutExpo"  >Powerful HTML template designed in a clean and minimalistic style.<br>This template is very flexible, easy for customizing and well documented, <br>approaches for personal and professional use. 
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>                        
        <!-- END REVOLUTION SLIDER -->
            

        <!--MAIN CONTENT AREA-->
        <div class="main_content_area">
             <div class="container inner_content">
                    <!--START RECOMENDADOS CONTENT-->
                <?php foreach($fav->result() as $row): ?>                  
                <div class="row">                                   
                    <div class="span4 portfolio_item block <?=$row->categoria?> recomendado">
                        <div class="view view-first">
                            <a href=""><img src="images/blog/<?=$row->categoria?>/<?=$row->slug?>/<?=$row->image?>.jpg" rel="prettyPhoto"></a>
                            <div class="mask">
                                <a href="images/blog/<?=$row->categoria?>/<?=$row->slug?>/<?=$row->image?>.jpg" rel="prettyPhoto" title="Item-Landscape" class="info"></a>
                                <a href="images/blog/<?=$row->categoria?>/<?=$row->slug?>/<?=$row->image?>.jpg" class="link"></a></div>
                        </div>
                        <div class="descr">
                            <h5><a href="<?=$row->categoria?>/ver_post/<?=$row->slug?>"><?=$row->short_title?></a></h5>
                            <p class="clo"><?=$row->mid_description?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>                
             </div>
             <div class="container-fluid">
                <?php foreach($posts->result() as $row): ?>
                <div class="row-fluid item" style="border-top:1px solid #ededed;border-bottom:1px solid #ededed;margin:15px 0;background-color:rgb(249, 249, 249);">
                    <div class="span5 thumb">
                        <div class="view view-first">
                            <a href=""><img src="images/blog/<?=$row->categoria?>/<?=$row->slug?>/<?=$row->image?>.jpg" rel="prettyPhoto"></a>
                            <div class="mask">
                                <a href="images/blog/<?=$row->categoria?>/<?=$row->slug?>/<?=$row->image?>.jpg" rel="prettyPhoto" title="Portada game" class="info"></a>
                                <a href="random/ver_post/<?=$row->slug?>" class="link"></a>
                            </div>
                        </div>
                    </div>                    
                    <div class="span6 descripcion" style="padding:35px 10px 15px 25px;display:inline-block;">
                        <h4><a href="random/ver_post/<?=$row->slug?>"><?=$row->mid_title?></a></h4>
                        <p><?=$row->mid_description?></p>
                    </div>                    
                </div>
                <?php endforeach; ?>                                         
            </div>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <section style="padding:0px !important;float:right;">                         
                                <?=$this->pagination->create_links();?>
                        </section>   
                    </div>           
                </div>
            </div>
         </div>
        </div>   

        <!--END MAIN CONTENT AREA-->
<?php $this->load->view('layout/footer'); ?>

