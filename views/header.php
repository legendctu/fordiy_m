<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=7">-->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="360-site-verification" content="885f3d67dbdb0336e15d754cf4cad6a5" />
    <meta name="baidu-site-verification" content="CzYQnS7BzY" />

    <link rel="stylesheet" type="text/css" href="<?php echo STATIC_DOMAIN;?>/css/m/base.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo STATIC_DOMAIN;?>/css/m/header.css" />
    <script type="text/javascript" src="<?php echo STATIC_DOMAIN;?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo STATIC_DOMAIN;?>/js/share.js"></script>
    <script type="text/javascript" src="<?php echo STATIC_DOMAIN;?>/js/writeFlash.js"></script>
    
    <title><?php if(isset($indexTitle)){echo $indexTitle, 1;}else{echo isset($title) ? "{$title} | 北京奥弗莱高端留学公司2" : '北京奥弗莱高端留学公司3';}?></title>
    
    <meta name="keywords" content="<?php if(isset($pageKeywords)){echo $pageKeywords;}else{echo '奥弗莱,高端留学,北京留学公司,留学文书,DIY留学,留学咨询';}?>">
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : "奥弗莱高端留学公司是专业从事DIY留学、DIY留学咨询、美国留学咨询、加拿大留学咨询的北京留学公司，是北京最好的留学公司之一，业务还包括留学文书业务：代写留学文书、留学文书写作、留学文书修改、留学申请文书、留学个人陈述撰写、研究生个人陈述撰写、留学ps撰写、出国留学推荐信等。DIY留学、美国留学、加拿大留学咨询，就选奥弗莱高端留学！"?>" />
</head>
<body data-spy="scroll" data-target="#mynav">
    <div class="topbar2">
        <div class="topbar_menu2">
            <div class="logo"><img src="<?php echo STATIC_DOMAIN;?>/images/logo_img.png" id="logo_img" />奥弗莱留学</div>
            <ul class="navi-wrap">
                <li><a class="topbar_button info_btn"  href="#">留学须知<span class="tre"><em class="t1"></em><em class="t2"></em><em class="t3"></em></span></a></li>
                <li><a class="topbar_button"  href="<?php echo BASE_DOMAIN;?>/case">成功案例</a></li>
                <li><a class="topbar_button product_btn"  href="#">留学服务<span class="tre"><em class="t1"></em><em class="t2"></em><em class="t3"></em></span></a></li>
                <!--<li><a class="topbar_button"  href="<?php echo BASE_DOMAIN;?>/academy">院校索引</a></li>-->
                <li><a class="topbar_button major_btn"  href="#">专业导航<span class="tre"><em class="t1"></em><em class="t2"></em><em class="t3"></em></span></a></li>
                <!--<li><a class="topbar_button"  href="<?php echo BASE_DOMAIN;?>/evaluation">留学评估</a></li>-->
                <li><a class="topbar_button"  href="<?php echo BASE_DOMAIN;?>/activities">近期活动</a></li>
                <li><a class="topbar_button"  href="<?php echo BASE_DOMAIN;?>/aboutus">关于我们</a></li>
            </ul>
            <div class="clear"></div>
<!--
            <img src="<?php echo STATIC_DOMAIN;?>/images/hot_icon.png" class="hotIcon" width="20" height="18" alt="留学须知" />
            
            
            <ul class="navi-wrap2 clear">
                <li><span class="topbar_span">热门服务</span></li>
                <li><a class="topbar_button" href="<?=BASE_DOMAIN?>/services/bachelor.html" target="_blank">本科留学</a></li>
                <li><a class="topbar_button" href="<?=BASE_DOMAIN?>/services/master.html" target="_blank">硕士留学</a></li>
                <li><a class="topbar_button" href="<?=BASE_DOMAIN?>/services/phd.html" target="_blank">博士专栏</a></li>
                <li><a class="topbar_button" href="<?=BASE_DOMAIN?>/services/diy.html" target="_blank">DIY&留学文书</a></li>
                <li><a class="topbar_button" href="<?=BASE_DOMAIN?>/services/background_improve.html" target="_blank">背景提升&amp;职业规划</a></li>
                <li><a class="topbar_button" href="<?=BASE_DOMAIN?>/services/exam.html" target="_blank">考试规划&amp;辅导</a></li>
            </ul>-->
        </div>
        
        
        
        <div class="topbar_list" >
            <ul class="degree_list none">
            <?php $i=0; foreach($map as $key => $d){?>
                <li class="list_button" oid="<?php echo $i++;?>" did="<?php echo $key;?>"><span><?php echo $d['name'];?></span></li>
            <?php }?>
            </ul>
            
            <?php foreach($map as $key => $d){?>
            <ul class="country_list none" did="<?php echo $key;?>">
                <?php foreach($d['countries'] as $c){?>
                <li class="list_button" cid="<?php echo $c['id'];?>"><a href="<?php echo empty($c['href'])?'#':$c['href'];?>"><?php echo $c['name'];?></a></li>
                <?php }?>
            </ul>
            <?php }?>
            
            
            <ul class="producttype_list none">
            <?php $i=0; foreach($productMap as $key => $d){?>
                <li class="list_button" oid="<?php echo $i++;?>" did="<?php echo $key;?>"><span><?php echo $d['name'];?></span></li>
            <?php }?>
            </ul>
            
            <?php foreach($productMap as $key => $d){?>
            <ul class="product_list none" did="<?php echo $key;?>">
                <?php foreach($d['products'] as $p){?>
                <li class="list_button"><a href="<?php echo $p['href'];?>"><?php echo $p['title'];?></a></li>
                <?php }?>
            </ul>
            <?php }?>
            
            <ul class="majornavi_list none">
                <li class="list_button"><a href="<?=BASE_DOMAIN?>/major">专业介绍</a></li>
                <li class="list_button"><a href="<?=BASE_DOMAIN?>/academyranking">院校排名</a></li>
            </ul>
        </div>
        
        <script type="text/javascript">
        (function(){
            bindMenu('info_btn', 'degree_list', 'country_list');
            bindMenu('product_btn', 'producttype_list', 'product_list');
            
            bindMenu('major_btn', 'majornavi_list', null);
        })();
        var base_domain = '<?php echo BASE_DOMAIN;?>';
        var navi_menu = {};
        function bindMenu(parent, first, second){
            var naviTopPos = 87;
            $('.' + parent).mouseover(function(){
                $('.' + first + ' .list_button').removeClass('list_button_current');
                $('.' + first).css({'position':'absolute', 'top':naviTopPos+'px', 'left':$(this).offset().left.toString()+'px', 'z-index':'9999'});
                if(typeof navi_menu[first] !== 'undefined' && navi_menu[first].length > 0){
                    for(var i=0; i<navi_menu[first].length; ++i){
                        clearTimeout(navi_menu[first][i]);
                    }
                }
                $('.' + first).show();
            }).mouseout(function(){
                if(typeof navi_menu[first] === 'undefined'){
                    navi_menu[first] = [];
                }
                navi_menu[first].push(setTimeout(function(){ $('.' + first).hide();}, 500));
            });
            $('.' + first).mouseover(function(){
                if(typeof navi_menu[first] !== 'undefined' && navi_menu[first].length > 0){
                    for(var i=0; i<navi_menu[first].length; ++i){
                        clearTimeout(navi_menu[first][i]);
                    }
                }
                $(this).show();
            }).mouseout(function(){
                if(typeof navi_menu[first] === 'undefined'){
                    navi_menu[first] = [];
                }
                navi_menu[first].push(setTimeout(function(){ $('.' + first).hide();}, 500));
                
                $('.' + second).hide();
            });
            
            $('.' + first + ' .list_button').mouseover(function(){
                $('.' + first + ' .list_button').removeClass('list_button_current');
                $(this).addClass('list_button_current');
            
                var did = $(this).attr('did');
                $('.' + second).hide();
                var left = $('.' + parent).offset().left + $(this).width() + 0;
                var top = parseInt($(this).attr('oid')) * 22 + naviTopPos;
                $('.' + second + '[did="' + did + '"]').css({'position':'absolute', 'left':left+'px', 'top':top+'px', 'z-index':'9999'}).show();
            });
            
            $('.' + second).mouseover(function(){
                $(this).show();
                if(typeof navi_menu[first] !== 'undefined' && navi_menu[first].length > 0){
                    for(var i=0; i<navi_menu[first].length; ++i){
                        clearTimeout(navi_menu[first][i]);
                    }
                }
                $('.' + first).show();
            }).mouseout(function(){
                $(this).hide();
                if(typeof navi_menu[first] === 'undefined'){
                    navi_menu[first] = [];
                }
                navi_menu[first].push(setTimeout(function(){ $('.' + first).hide();}, 500));
            });
        }
        </script>
        
    </div>
    <div class="topbar_clear none"></div>
    
