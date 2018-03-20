<style class="customize">
<?php
    $customize = (array)json_decode($json, true);
    if($customize):
?>

    <?php //================= Font Body Typography ====================== ?>
    <?php if(isset($customize['font_family_primary'])  && $customize['font_family_primary'] != '---'){ ?>
        body,
        .post-style-grid.v2 .post-categories a,
        .post-style-list.small .post-title a, .portfolio-v1 .content .category a,
        .pricing-table .plan-name, .block.block-blocktabs .ui-widget, .block.block-blocktabs .ui-tabs-nav > li > a,
        .gva-mega-menu .block-blocktabs .ui-widget, .gva-mega-menu .block-blocktabs .ui-tabs-nav > li > a,
        .widget.gsc-heading .title-sub, .gsc-hover-box .box-title
        {
            font-family: '<?php echo $customize['font_family_primary'] ?>'!important;
        }
    <?php } ?> 

    <?php if(isset($customize['font_family_second'])  && $customize['font_family_second'] != '---'){ ?>
        .pager[data-drupal-views-infinite-scroll-pager] a.button,
        .page-notfound .big-title, .page-notfound .action a, .post-block .post-title a, .post-block .post-meta,
        .post-block .post-categories a, .post-style-grid.v2 .post-title a, .portfolio-v1 .content .title a,
        .portfolio-v2 .content-inner .title, .portfolio-v2 .content-inner .category, .testimonial-node-v1 .content-inner .title,
        .testimonial-node-v2 .info .title, .testimonial-node-v3 .content-inner .title, .team-node-v1 .team-name,
        .team-node-v1 .team-position, .team-node-v2 .team-name, .team-node-v2 .team-position, .team-node-v3 .team-name,
        .team-node-v3 .team-position, .text-big, .text-large, .nav-tabs > li > a, .owl-carousel.carousel-thumbnail.text.top .owl-dots .owl-dot,
        .owl-carousel.carousel-thumbnail.text.vertical .owl-dots .owl-dot, .btn, .node-link a:not(.btn-theme), .btn-theme, .btn-theme-submit,
        .progress-label, .pricing-table .content-wrap .plan-price .price-value span, .pricing-table .content-wrap .plan-price .price-value div.value,
        .pricing-table .content-wrap .plan-price .interval, .pricing-table .plan-signup a, .wrap-block-f-col h3, .rotate-text .primary-text,
        .block .block-title > span, .block.block-simplenews input#edit-subscribe, .navigation .gva_menu > li > a, .navigation .gva_menu .sub-menu > li > a,
        .more-link a, .small-list .item-list ul > li a, .tags-list .item-list > ul > li a, .widget.gsc-call-to-action .title,
        .widget.milestone-block .milestone-number, .widget.milestone-block .milestone-text, .gsc-box-info .content .subtitle,
        .gsc-hover-background .front h2, .gsc-button,
        h1, h2, h3, h4, h5, h6,
        .h1, .h2, .h3, .h4, .h5, .h6
        {
            font-family: '<?php echo $customize['font_family_second'] ?>'!important;
        }
    <?php } ?> 

    <?php if(isset($customize['font_body_size'])  && $customize['font_body_size']){ ?>
        body{
            font-size: <?php echo ($customize['font_body_size'] . 'px'); ?>;
        }
    <?php } ?>    

    <?php if(isset($customize['font_body_weight'])  && $customize['font_body_weight']){ ?>
        body{
            font-weight: <?php echo $customize['font_body_weight']; ?>;
        }
    <?php } ?>    

    <?php //================= Body ================== ?>

    <?php if(isset($customize['body_bg_image'])  && $customize['body_bg_image']){ ?>
        body{
            background-image:url('<?php echo drupal_get_path('theme', 'gavias_mion') .'/images/patterns/'. $customize['body_bg_image']; ?>');
        }
    <?php } ?> 
    <?php if(isset($customize['body_bg_color'])  && $customize['body_bg_color']){ ?>
        body{
            background-color: <?php echo $customize['body_bg_color'] ?>!important;
        }
    <?php } ?> 
    <?php if(isset($customize['body_bg_position'])  && $customize['body_bg_position']){ ?>
        body{
            background-position:<?php echo $customize['body_bg_position'] ?>;
        }
    <?php } ?> 
    <?php if(isset($customize['body_bg_repeat'])  && $customize['body_bg_repeat']){ ?>
        body{
            background-repeat: <?php echo $customize['body_bg_repeat'] ?>;
        }
    <?php } ?> 


    <?php //================= Theme color primary ================== ?>
    <?php if(isset($customize['theme_color'])  && $customize['theme_color']){ ?>
        .btn-link:hover, .btn-link:focus, 
        .pagination > li > a:hover, .pagination > li > a:focus, .pagination > li > span:hover, .pagination > li > span:focus,
        a:hover, a:focus, a:active, ul.feature-list > li:after, .breadcrumb-content-inner .gva-breadcrumb-content .breadcrumb-links nav.breadcrumb li a:hover,
        .topbar i, .stuck.header-main .navigation .gva_menu > li > a:hover,
        .footer a:hover, .copyright a:hover, .page-notfound .action a, .post-block .post-categories a, 
        .style-dark .post-block .post-title a:hover, .post-style-stick .item-list > ul > li:not(:first-child) .post-title a:hover,
        .post-style-stick .item-list > ul > li:first-child .post-title a:hover, .post-style-list.small .post-title a:hover,
        .testimonial-node-v1 .quote:after, .testimonial-node-v2 .quote:after, .testimonial-node-v3 .quote:after,
        .team-node-v1 .team-socials a:hover, .team-node-v1 .team-socials a:active, .team-node-v1 .team-socials a:focus,
        .team-node-v1:hover .team-position, .team-node-v3 .team-socials a:hover, .team-node-v3 .team-socials a:active, .team-node-v3 .team-socials a:focus,
        .service-node-v1 .service-content ul > li:after, .service-node-v2 .service-content ul > li:after,
        .service-node-v3 .service-content ul > li:after, a.blue, .text-theme, .nav-tabs > li > a:hover, .nav-tabs > li > a:focus, .nav-tabs > li > a:active,
        .nav-tabs > li.active > a, .nav-tabs > li > a.active, 
        .nav-tabs.drupal-tabs > li.is-active > a, .owl-carousel .owl-nav > div:hover i,
        .owl-carousel.carousel-thumbnail.text.top .owl-dots .owl-dot.active,.owl-carousel.carousel-thumbnail.text.vertical .owl-dots .owl-dot.active,
        .pricing-table .plan-signup a:hover,.wrap-block-f-col .wrap-icon .inner-icon, .wrap-block-f-col:hover h3,
        .panel .panel-heading .panel-title > a:after, .block .block-title,.block.style-higlight .more-link a:hover, .block.block-blocktabs .ui-tabs-nav > li.ui-tabs-active > a,
        body.logged-in.node--type-page-full .help .control-panel:hover, body.logged-in.node--type-page .help .control-panel:hover,
        nav.breadcrumb ol > li a:hover, .navigation .gva_menu > li > a:hover, .navigation .gva_menu > li > a.is-active,
        .navigation .gva_menu .sub-menu > li > a:hover, .gva-mega-menu .block-blocktabs .ui-tabs-nav > li.ui-tabs-active > a,
        .small-list .item-list ul > li a:hover, .tags-list .item-list > ul > li a:hover, .gavias-blockbuilder-content .link-edit-blockbuider:hover,
        .widget.gsc-heading .title-icon, .widget.gsc-call-to-action .title strong, .widget.gsc-team .team-position,
        .gsc-hover-box .icon span,.gsc-hover-box .link a, .gsc-quote-text .icon, 
        .gva-offcanvas-inner .gva-navigation .gva_menu > li > a:hover, .gva-offcanvas-inner .gva-navigation .gva_menu > li ul.menu.sub-menu li a:hover,
        .gva-offcanvas-inner .gva-navigation .gva_menu li a:hover
        {
          color: <?php echo $customize['theme_color'] ?>!important;
        }

        .pager .paginations a.active, .pager[data-drupal-views-infinite-scroll-pager] a.button:hover, 
        .team-node-v1:hover:after, .service-node-v1:hover .service-image:before, .service-node-v2:hover .service-image:before,
        .service-node-v3:hover .service-image:before, .btn:hover, .node-link a:not(.btn-theme):hover, .btn-theme:hover, .btn-theme-submit:hover,
        .wrap-block-f-col:hover .wrap-icon .inner-icon, .panel .panel-heading .panel-title > a, .more-link a,
        .view-testimonial-v2 .owl-dots .owl-dot.active, .widget.gsc-icon-box .highlight-icon .icon,
        .gsc-gmap.style-2 .info-inner
        {
          border-color: <?php echo $customize['theme_color'] ?>!important;
        }
        .sidebar .block .block-title{
            border-bottom-color: <?php echo $customize['theme_color'] ?>!important;
        }
        .navigation .gva_menu .sub-menu{
            border-top-color: <?php echo $customize['theme_color'] ?>!important;
        }
        .pager .paginations a.active, .pager[data-drupal-views-infinite-scroll-pager] a.button,
        #edit-preview, .portfolio-v1 .portfolio-content:after, .portfolio-v2:hover .content-inner,
        .bg-theme, .owl-carousel.carousel-thumbnail.text.vertical .owl-dots .owl-dot:after,
        .btn, .node-link a:not(.btn-theme), .btn-theme, .btn-theme-submit, .progress .progress-bar,
        .pricing-table .content-wrap .plan-price, .wrap-block-f-col:hover .wrap-icon .inner-icon,#node-single-comment h2:before,
        #search-block-form input.form-submit, .contact-message-form #edit-preview,
        .list-tags .view-list ul > li:hover,.poll .poll-item .bar .foreground, .more-link a:hover,
        .widget.gsc-call-to-action .button-action a, .widget.gsc-team.team-horizontal .team-name:after, 
        .widget.gsc-box-image .body .icon, .gsc-hover-box:hover .icon, .gsc-hover-background .front .icon,
        #jpreBar, .gavias-skins-panel .control-panel, .gavias-skins-panel .panel-skins-content .layout.active
        {   
          background-color: <?php echo $customize['theme_color'] ?>!important;
        }
    <?php } ?>     


    <?php //================= Body page ===================== ?>
    <?php if(isset($customize['text_color'])  && $customize['text_color']){ ?>
        body .body-page{
            color: <?php echo $customize['text_color'] ?>;
        }
    <?php } ?>

    <?php if(isset($customize['link_color'])  && $customize['link_color']){ ?>
        body .body-page a{
            color: <?php echo $customize['link_color'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['link_hover_color'])  && $customize['link_hover_color']){ ?>
        body .body-page a:hover{
            color: <?php echo $customize['link_hover_color'] ?>!important;
        }
    <?php } ?>

    <?php //===================Header=================== ?>
    <?php if(isset($customize['header_bg'])  && $customize['header_bg']){ ?>
        header .header-main{
            background: <?php echo $customize['header_bg'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['header_color_link'])  && $customize['header_color_link']){ ?>
        header .header-main a{
            color: <?php echo $customize['header_color_link'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['header_color_link_hover'])  && $customize['header_color_link_hover']){ ?>
        header .header-main a:hover{
            color: <?php echo $customize['header_color_link_hover'] ?>!important;
        }
    <?php } ?>

   <?php //===================Menu=================== ?>
    <?php if(isset($customize['menu_bg']) && $customize['menu_bg']){ ?>
        .main-menu, ul.gva_menu{
            background: <?php echo $customize['menu_bg'] ?>!important;
        }
    <?php } ?> 

    <?php if(isset($customize['menu_color_link']) && $customize['menu_color_link']){ ?>
        .main-menu ul.gva_menu > li > a{
            color: <?php echo $customize['menu_color_link'] ?>!important;
        }
    <?php } ?> 

    <?php if(isset($customize['menu_color_link_hover']) && $customize['menu_color_link_hover']){ ?>
        .main-menu ul.gva_menu > li > a:hover{
            color: <?php echo $customize['menu_color_link_hover'] ?>!important;
        }
    <?php } ?> 

    <?php if(isset($customize['submenu_background']) && $customize['submenu_background']){ ?>
        .main-menu .sub-menu{
            background: <?php echo $customize['submenu_background'] ?>!important;
            color: <?php echo $customize['submenu_color'] ?>!important;
        }
    <?php } ?> 

    <?php if(isset($customize['submenu_color']) && $customize['submenu_color']){ ?>
        .main-menu .sub-menu{
            color: <?php echo $customize['submenu_color'] ?>!important;
        }
    <?php } ?> 

    <?php if(isset($customize['submenu_color_link']) && $customize['submenu_color_link']){ ?>
        .main-menu .sub-menu a{
            color: <?php echo $customize['submenu_color_link'] ?>!important;
        }
    <?php } ?> 

    <?php if(isset($customize['submenu_color_link_hover']) && $customize['submenu_color_link_hover']){ ?>
        .main-menu .sub-menu a:hover{
            color: <?php echo $customize['submenu_color_link_hover'] ?>!important;
        }
    <?php } ?> 

    <?php //===================Footer=================== ?>
    <?php if(isset($customize['footer_bg']) && $customize['footer_bg'] ){ ?>
        #footer .footer-center{
            background: <?php echo $customize['footer_bg'] ?>!important;
        }
    <?php } ?>

     <?php if(isset($customize['footer_color'])  && $customize['footer_color']){ ?>
        #footer .footer-center{
            color: <?php echo $customize['footer_color'] ?> !important;
        }
    <?php } ?>

    <?php if(isset($customize['footer_color_link'])  && $customize['footer_color_link']){ ?>
        #footer .footer-center ul.menu > li a::after, .footer a{
            color: <?php echo $customize['footer_color_link'] ?>!important;
        }
    <?php } ?>    

    <?php if(isset($customize['footer_color_link_hover'])  && $customize['footer_color_link_hover']){ ?>
        #footer .footer-center a:hover{
            color: <?php echo $customize['footer_color_link_hover'] ?> !important;
        }
    <?php } ?>    

    <?php //===================Copyright======================= ?>
    <?php if(isset($customize['copyright_bg'])  && $customize['copyright_bg']){ ?>
        .copyright{
            background: <?php echo $customize['copyright_bg'] ?> !important;
        }
    <?php } ?>

     <?php if(isset($customize['copyright_color'])  && $customize['copyright_color']){ ?>
        .copyright{
            color: <?php echo $customize['copyright_color'] ?> !important;
        }
    <?php } ?>

    <?php if(isset($customize['copyright_color_link'])  && $customize['copyright_color_link']){ ?>
        .copyright a{
            color: $customize['copyright_color_link'] ?>!important;
        }
    <?php } ?>    

    <?php if(isset($customize['copyright_color_link_hover'])  && $customize['copyright_color_link_hover']){ ?>
        .copyright a:hover{
            color: <?php echo $customize['copyright_color_link_hover'] ?> !important;
        }
    <?php } ?>    
<?php endif; ?>    
</style>
