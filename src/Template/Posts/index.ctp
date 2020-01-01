<div class="wrap-fullwidth">
    <div class="single-content">
        <article>
            <div class="post">
                <div class="media-single-content">
                    <h1 class="article-title"><?php echo $data['name'];?></h1>
                    <div class="meta-art">
                        <div class="single-date"><?php echo date('d-m-Y', $data['created']);?></div>                    
                        <div class="single-thumb">
                            <div class="thumbs-rating-container" id="thumbs-rating-<?php echo $data['id'];?>" data-content-id="<?php echo $data['id'];?>">
                                <span class="thumbs-rating-up thumbs-rating-voted" onclick="thumbs_rating_vote(<?php echo $data['id'];?>, 1);"><i class="fa fa-thumbs-o-up"></i> <?php echo $data['total_like'];?></span> 
                                <span class="thumbs-rating-down thumbs-rating-voted" onclick="thumbs_rating_vote(<?php echo $data['id'];?>, 2);"><i class="fa fa-thumbs-o-down"></i> <?php echo $data['total_dislike'];?></span>
                                <span class="thumbs-rating-already-voted" data-text="You already voted!"></span>
                            </div>
                        </div><!-- end .home-data -->
                    </div><!-- end .meta-art --> 
                    <div class="clear"></div>
                    <img width="389" height="259" src="<?php echo $data['image'];?>" class="attachment-showcase_wp_thumbnail-single-image size-showcase_wp_thumbnail-single-image wp-post-image" alt="" sizes="(max-width: 389px) 100vw, 389px">                                                 
                    <div class="clear"></div>
                </div>

                <div class="entry">
                    <h3>
                        <span id="result_box" class="" lang="vi">
                            <?php echo $data['description'];?>
                        </span>
                    </h3>
                    <div class="itemFullText">
                        <?php echo $data['detail'];?>
                    </div>
                    <div class="post-meta">Cập nhật lần cuối: <?php echo date('d-m-Y H:i:s', $data['updated']);?></div>
                    <div id="author-bio-box" style="background: #f8f8f8; border-top: 2px solid #588093; border-bottom: 2px solid #588093; color: #333333">
                        <h3>
                            <a style="color: #025a7f;" href="<?php echo $BASE_URL;?>" title="<?php echo $_settings['company']['author_name'];?>" rel="author" data-wpel-link="internal"><?php echo $_settings['company']['author_name'];?></a>
                        </h3>
                        <div class="bio-gravatar">
                            <img alt="<?php echo $_settings['company']['author_name'];?>" src="<?php echo $_settings['company']['author_logo'];?>" class="avatar avatar-70 photo" height="70" width="70">
                        </div>
                        <p class="bio-description"><?php echo $_settings['company']['author_description'];?></p>
                        <div class="clear"></div>
                    </div>
                    <script type="text/javascript">
                        jQuery(document).ready(function ($) {
                            $.post('<?php echo $BASE_URL;?>/ajax/postview', {action: 'wpt_view_count', id: '<?php echo $data['id'];?>'});
                        });
                    </script>
                    <div class="clear"></div>
                </div>
            </div>
        </article>

        <div class="clear"></div>
    </div>

    <div class="sidebar-wrapper">
        <aside id="small-sidebar">
            <div class="widget widget_showcase_wp_toplikes">
                <div class="widget-title">
                    <h3>Top by likes</h3>
                </div>
                <div class="clear"></div>

                <ul class="article_list">
                    <li>                             
                        <a href="https://maclife.vn/cleanmymac-cong-cu-don-dep-toi-uu-thong-hieu-qua-nhat.html" data-wpel-link="internal"> <img width="130" height="78" src="https://maclife.vn/wp-content/uploads/2017/04/cleanmymac-130x78.png" class="attachment-showcase_wp_thumbnail-widget-small size-showcase_wp_thumbnail-widget-small wp-post-image" alt="" srcset="https://maclife.vn/wp-content/uploads/2017/04/cleanmymac-130x78.png 130w, https://maclife.vn/wp-content/uploads/2017/04/cleanmymac-299x178.png 299w" sizes="(max-width: 130px) 100vw, 130px" /></a>

                        <div class="content-il">
                            <a href="https://maclife.vn/cleanmymac-cong-cu-don-dep-toi-uu-thong-hieu-qua-nhat.html" title="CleanMyMac 3.9.9  + Cleanmymac X 4 Final &#8211; công cụ dọn dẹp, tối ưu hệ thống hiệu quả nhất" data-wpel-link="internal"><h3> CleanMyMac 3.9.9  + Cleanmymac X 4 Final & .. </h3></a>
                            <div class="an-display-time"> 
                                May 2, 2019 
                                <div class="widget-list-data">
                                    <div  class="thumbs-rating-container" id="thumbs-rating-5418" data-content-id="5418"><span class="thumbs-rating-up thumbs-rating-voted" onclick="thumbs_rating_vote(5418, 1);"><i class="fa fa-thumbs-o-up"></i> 174</span> <span class="thumbs-rating-down thumbs-rating-voted" onclick="thumbs_rating_vote(5418, 2);"><i class="fa fa-thumbs-o-down"></i> 71</span><span class="thumbs-rating-already-voted" data-text="You already voted!"></span></div>          </div><!-- end .widget-list-data --> 
                            </div><!-- end .an-display-time -->
                        </div><!-- end .content-il -->
                    </li>
                </ul>
            </div>
        </aside>
    </div>

    <div class="sidebar-wrapper">
        <aside id="sidebar" class="sb-right">
            <div class="widget widget_showcase_wp_article_cat">
                <div class="widget-title">
                    <h3>Newest games</h3>
                </div>
                <div class="clear"></div>
                <ul class="article_list">
                    <li>                             
                        <a href="https://maclife.vn/mini-gamethe-gardens-between-tuyet-pham-game-phieu-luu-giai-do.html" data-wpel-link="internal"> <img width="130" height="78" src="https://maclife.vn/wp-content/uploads/2019/09/The-Gardens-Between-maclife-130x78.jpeg" class="attachment-showcase_wp_thumbnail-widget-small size-showcase_wp_thumbnail-widget-small wp-post-image" alt="" /></a>

                        <div class="content-il">
                            <a href="https://maclife.vn/mini-gamethe-gardens-between-tuyet-pham-game-phieu-luu-giai-do.html" title="[Mini Game]The Gardens Between &#8211; Tuyệt phẩm game phiêu lưu, giải đố" data-wpel-link="internal"><h3> [Mini Game]The Gardens Between &#8211; Tuy .. </h3></a>
                            <div class="an-display-time"> Dec 23, 2019 <span><a href="https://maclife.vn/mini-gamethe-gardens-between-tuyet-pham-game-phieu-luu-giai-do.html#comments" data-wpel-link="internal">1 <i class="fa fa-comments"></i></a></span></div>
                        </div>
                    </li>
                    <div class="clear"></div>
                </ul>
            </div>

            <div class="widget widget_showcase_wp_toptags">	
                <div class="widget-title">
                    <h3>Most used Tags</h3>
                </div>
                <div class="clear"></div>
                <div class="tagcloud">
                    <a href="https://maclife.vn/tag/adobe" class="tag-cloud-link tag-link-265 tag-link-position-1" style="font-size: 22pt;" aria-label="adobe (101 items)" data-wpel-link="internal">
                        adobe
                        <span class="tagcount"> 101 items</span>
                    </a>
                    <a href="https://maclife.vn/tag/phan-mem-chinh-sua-anh" class="tag-cloud-link tag-link-244 tag-link-position-2" style="font-size: 18.566037735849pt;" aria-label="phần mềm chỉnh sửa ảnh (75 items)" data-wpel-link="internal">
                        phần mềm chỉnh sửa ảnh
                        <span class="tagcount"> 75 items</span>
                    </a>
                </div>
            </div>
        </aside>
    </div>
    <div class="clear"></div>
</div>