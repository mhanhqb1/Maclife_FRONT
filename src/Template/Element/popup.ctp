<?php if(!$isCookieFanPage) : ?>
<div class="main_popup">
    <div class="fanpage_popup">
        <img src="images/popup_close.png" class="popup_close" style="    position: relative; left: 279px; top: 26px; z-index: 99; cursor: pointer"/>
        <?php echo $this->element('facebook');?>
    </div>
</div>
<?php endif; ?>