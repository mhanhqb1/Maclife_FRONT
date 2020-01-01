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
            <?php echo $this->element('facebook');?>
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
                                <i class="fa fa-thumbs-o-up"></i> Top like				
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
                                <i class="fa fa-comment-o"></i> Top like				
                            </a>
                        </div>
                        <div id="comments-9-tab-content" class="tab-content"></div><!--end .tab-content-->
                        <div class="clear"></div>
                    </div> <!--end .inside -->
                    <div class="clear"></div>			
                </div><!--end .wpt_widget_content -->
            </div>
            <div class="clear"></div>			
            <?php if (!empty($data['home_tags'])): ?>
            <?php echo $this->element('list_home_tag', array('tags' => $data['home_tags']));?>
            <?php endif;?>
        </aside>
        <div class="clear"></div>
    </div>    <!-- end #sidebar (right) --> 
    <div class="clear"></div>
</div>
<div class="clear"></div>