<section class="front-overlay-content">
    <div class="front-overlay-wrap">
        <h1><span>Nhập nội dung cần tìm và Enter</span></h1>                
        <div class="search-box">
            <form id="searchform2" class="header-search" method="get" action="https://maclife.vn/">
                <input placeholder="Nhap noi dung can tim" type="text" name="s" id="s">
                <input type="submit" value="Search" class="buttonicon">
            </form>
            <div class="clear"></div>
        </div>
    </div><!-- end .front-overlay-wrap -->
</section>

<div class="wrap-middle" style="position: relative">
    <div class="wrap-content">
        <ul class="modern-articles modern-grid">
            <?php if (!empty($data['home_posts']['data'])):?>
            <?php foreach ($data['home_posts']['data'] as $hp): ?>
                <?php echo $this->element('item_post_list', array('post' => $hp));?>
            <?php endforeach; endif;?>
        </ul>
        <div class="clear"></div>
        <?php echo $this->Paginate->render($data['home_posts']['total'], $params['limit']); ?>
    </div>

    <div class="sidebar-wrapper">
        <aside id="sidebar" class="sb-right">
            <div class="widget adrotate_widgets">
                <div class="a-single a-13">
                    <a class="gofollow" data-track="MTMsMCwxLDYw" target="_blank" href="https://macbookgiasi.vn/" data-wpel-link="external" rel="nofollow external noopener noreferrer">
                        <img src="https://maclife.vn/images/banner_macbookgiasi.gif" alt="MacbookGiasi" style="width:300px;height:350px;border:1;">
                    </a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="widget adrotate_widgets">
                <div class="a-single a-9">
                    <a class="gofollow" data-track="OSwwLDEsNjA=" target="_blank" href="https://kfs.com.vn" data-wpel-link="external" rel="nofollow external noopener noreferrer">
                        <img src="https://maclife.vn/wp-content/uploads/2019/08/kfs_logo.gif" style="width:300px;height:224px;border:1;">
                    </a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="widget adrotate_widgets">
                <div class="a-single a-3">
                    <a target="_blank" href="http://hangdang.vn" data-wpel-link="external" rel="nofollow external noopener noreferrer">
                        <img src="https://maclife.vn/wp-content/uploads/2019/08/hangdang.gif" alt="Hang Dang VN" style="width:300px;height:334px;border:1;">
                    </a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="widget adrotate_widgets">
                <div class="a-single a-15">
                    <a target="_blank" href="https://laptopvang.com" data-wpel-link="external" rel="nofollow external noopener noreferrer">
                        <img src="https://maclife.vn/wp-content/uploads/2019/08/laptop_Vang.jpg" alt="LaptopVang" style="width:300px;height:350px;border:1;">
                    </a>
                </div>
            </div>
            <div class="clear"></div>			
            <div class="widget widget_wpt">
                <div id="wpt_widget-3_content" data-widget-number="3" class="wpt_widget_content wpt-load8" data-style="" data-pagination-style="">
                    <div class="wpt-loader"></div>
                    <ul class="wpt-tabs has-3-tabs">
                        <li class="tab_title">
                            <a href="#" id="popular-tab">
                                <i class="fa fa-area-chart"></i> Top 7 days				
                            </a>
                        </li>
                        <li class="tab_title">
                            <a href="#" id="popular-3-tab">
                                <i class="fa fa-area-chart"></i> Top 30 days				
                            </a>
                        </li>
                        <li class="tab_title">
                            <a href="#" id="popular-10-tab">
                                <i class="fa fa-area-chart"></i> All times				
                            </a>
                        </li>
                    </ul> <!--end .tabs-->
                    <div class="clear"></div>
                    <div class="inside">
                        <div class="wpt_acc_title">
                            <a href="#" id="popular-tab">
                                <i class="fa fa-area-chart"></i> Top 7 days				
                            </a>
                        </div>
                        <div id="popular-tab-content" class="tab-content">
                        </div><!--end .tab-content-->
                        <div class="wpt_acc_title">
                            <a href="#" id="popular-3-tab">
                                <i class="fa fa-area-chart"></i> Top 30 days				
                            </a>
                        </div>
                        <div id="popular-3-tab-content" class="tab-content">
                        </div><!--end .tab-content-->
                        <div class="wpt_acc_title">
                            <a href="#" id="popular-10-tab">
                                <i class="fa fa-area-chart"></i> All times				
                            </a>
                        </div>
                        <div id="popular-10-tab-content" class="tab-content">
                        </div><!--end .tab-content-->
                        <div class="clear"></div>
                    </div> <!--end .inside -->
                    <div class="clear"></div>			
                </div><!--end .wpt_widget_content -->
            </div>
            <div class="clear"></div>			
            <div class="widget widget_easy_facebook_page_plugin"><div id="fb-root"></div>
                <script>
                    (function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.async = true;
                        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=395202813876688";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script> 
                <div class="efbl-like-box 1">
                    <div class="fb-page" data-animclass="fadeIn " data-href="https://www.facebook.com/maclifevietnam" data-hide-cover=false data-width="300" data-height="" data-show-facepile=true  data-show-posts=false data-adapt-container-width=true data-hide-cta=false data-small-header="false"></div> 
                </div>
            </div>
            <div class="clear"></div>			
            <div class="widget widget_wpt">
                <div id="wpt_widget-4_content" data-widget-number="4" class="wpt_widget_content wpt-load8" data-style="" data-pagination-style="">
                    <div class="wpt-loader"></div>
                    <ul class="wpt-tabs has-2-tabs">
                        <li class="tab_title">
                            <a href="#" id="latest-tab">
                                <i class="fa fa-archive"></i> Mới cập nhật				
                            </a>
                        </li>
                        <li class="tab_title">
                            <a href="#" id="comments-9-tab">
                                <i class="fa fa-comment-o"></i> Comments				
                            </a>
                        </li>
                    </ul> <!--end .tabs-->
                    <div class="clear"></div>
                    <div class="inside">
                        <div class="wpt_acc_title">
                            <a href="#" id="latest-tab">
                                <i class="fa fa-archive"></i> Mới cập nhật				
                            </a>
                        </div>
                        <div id="latest-tab-content" class="tab-content">
                        </div><!--end .tab-content-->
                        <div class="wpt_acc_title">
                            <a href="#" id="comments-9-tab">
                                <i class="fa fa-comment-o"></i> Comments				
                            </a>
                        </div>
                        <div id="comments-9-tab-content" class="tab-content"></div><!--end .tab-content-->
                        <div class="clear"></div>
                    </div> <!--end .inside -->
                    <div class="clear"></div>			
                </div><!--end .wpt_widget_content -->
            </div>
            <div class="clear"></div>			
            <div class="widget widget_tag_cloud">
                <div class="widget-title">
                    <h3>Most used tags</h3>
                </div>
                <div class="clear"></div>
                <div class="tagcloud">
                    <a href="https://maclife.vn/tag/3d" class="tag-cloud-link tag-link-383 tag-link-position-1" style="font-size: 10.24pt;" aria-label="3d (23 items)" data-wpel-link="internal">3d<span class="tagcount"> 23 items</span></a>
                    <a href="https://maclife.vn/tag/2020" class="tag-cloud-link tag-link-1058 tag-link-position-2" style="font-size: 8pt;" aria-label="2020 (17 items)" data-wpel-link="internal">2020<span class="tagcount"> 17 items</span></a>
                </div>
            </div>
            <div class="clear"></div>	  	
        </aside>
    </div>    <!-- end #sidebar (right) --> 
    <div class="clear"></div>
</div>