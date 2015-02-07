<?php require(dirname(__FILE__) . '/header.php');?>

<link rel="stylesheet" type="text/css" href="<?=STATIC_DOMAIN;?>/css/m/index.css" />

<div class="rolling_news_wrap zixun clearfix">
    <div class="zixun_left fl">奥弗莱资讯</div>
    <div class="zixun_right fl" id="wrap">
    <div style="width:100000px;">
        <ul class="news_ul fl" id="con">
            <?php foreach($rollingNews as $d){?>
            <li><span><?=$d['date']?></span><?php echo empty($d['content']) ? $d['title'] : ('<a href="/' . $d['id'] . '.html" target="_blank">' . $d['title'] . '</a>');?></li>
<!--<li><span>2014-09-09</span><a href="/a/aofulaizixun/2014/0909/9956.html" target="_blank">奥弗莱校园——对外经济贸易大学</a></li>
<li><span>2014-06-04</span><a href="/a/aofulaizixun/2014/0528/8113.html" target="_blank">王同学获得2014年杜克大学计算机工程硕士offer</a></li>
<li><span>2014-06-04</span><a href="/a/aofulaizixun/2014/0528/8112.html" target="_blank">袁同学获得2014年加州洛杉矶分校电子工程专业of</a></li>
<li><span>2014-06-04</span><a href="/a/aofulaizixun/2014/0529/8114.html" target="_blank">刘同学获得2014年康奈尔大学化学工程硕士offer</a></li>
<li><span>2014-06-04</span><a href="/a/aofulaizixun/2014/0529/8115.html" target="_blank">王同学获得2014年康涅狄格大学心理学博士offer</a></li>
<li><span>2014-02-13</span><a href="/a/aofulaizixun/2014/0213/7681.html" target="_blank">祝贺张同学收到2014年哥伦比亚大学精算硕士offer</a></li>-->
            <?php }?>
        </ul>
        <ul id="con2" class="news_ul fl"></ul>
    </div>
    </div>
</div>

<script type="text/javascript">
$('#con2').html($('#con').html());
var t=0;
var h=$('#con').width();
(function foo(){
    setTimeout(function(){
        t+=431; //每个LI的高度固定是关键，t的值为li高度的倍数
        //console.log('t:' + t);
        //console.log('h:' + h);
        $('#wrap').animate({scrollLeft:t},2000,function(){
            if(t>=h){
                $('#wrap').scrollLeft(t-h);
                t=t-h;
            }
            foo();
        });
    }, 3000);
})();
</script>

<div class="quick_channel">
    <div class="quick_title"><h3>美国留学<br/><span>快捷通道</span></h3></div>
    <div class="quick_content">
        <?php if(empty($channelData[1]['href'])){?>
        <p><a target="_blank" href="http://fordiy.com/12329.html">美国中学</a></p>
        <?php } else {?>
        <a class="image" target="_blank" href="<?=$channelData[1]['href']?>"><img class="intro" width="210" height="140" src="<?=STATIC_DOMAIN?>/images/up_channel_1_b.jpg" /><img class="title" width="210" height="140" src="<?=STATIC_DOMAIN?>/images/up_channel_1.jpg" /></a>
        <?php }?>
    </div>
    <div class="quick_content">
        <?php if(empty($channelData[2]['href'])){?>
        <div class="quick_content"><p><a target="_blank" href="http://fordiy.com/12630.html">美国本科</a></p></div>
        <?php } else {?>
        <a class="image" target="_blank" href="<?=$channelData[2]['href']?>"><img class="intro" width="210" height="140" src="<?=STATIC_DOMAIN?>/images/up_channel_2_b.jpg" /><img class="title" width="210" height="140" src="<?=STATIC_DOMAIN?>/images/up_channel_2.jpg" /></a>
        <?php }?>
    </div>
    <div class="quick_content">
        <?php if(empty($channelData[3]['href'])){?>
        <div class="quick_content"><p><a target="_blank" href="http://fordiy.com/12704.html">美国研究生</a></p></div>
        <?php } else {?>
        <a class="image" target="_blank" href="<?=$channelData[3]['href']?>"><img class="intro" width="210" height="140" src="<?=STATIC_DOMAIN?>/images/up_channel_3_b.jpg" /><img class="title" width="210" height="140" src="<?=STATIC_DOMAIN?>/images/up_channel_3.jpg" /></a>
        <?php }?>
    </div>
    <div class="quick_content">
        <?php if(empty($channelData[4]['href'])){?>
        <div class="quick_content"><p><a target="_blank" href="http://fordiy.com/12707.html">美国博士</a></p></div>
        <?php } else {?>
        <a class="image" target="_blank" href="<?=$channelData[4]['href']?>"><img class="intro" width="210" height="140" src="<?=STATIC_DOMAIN?>/images/up_channel_4_b.jpg" /><img class="title" width="210" height="140" src="<?=STATIC_DOMAIN?>/images/up_channel_4.jpg" /></a>
        <?php }?>
    </div>
    <div class="clear"></div>
    
    <script type="text/javascript">
    (function(){
        var imgHeight = 140;
        var imgDuration = 800;
        $('.quick_content a.image').mouseover(function(e){
            $(this).children('img.intro').stop(true);
            $(this).children('img.title').stop(true);
            $(this).children('img.intro').animate({'top': 0}, imgDuration);
            $(this).children('img.title').animate({'top': imgHeight}, imgDuration);
            e.stopPropagation();
        }).mouseout(function(e){
            $(this).children('img.intro').stop(true);
            $(this).children('img.title').stop(true);
            $(this).children('img.intro').animate({'top': (-1 * imgHeight)}, imgDuration);
            $(this).children('img.title').animate({'top': 0}, imgDuration);
            e.stopPropagation();
        });
    })();
    </script>
</div>

<div class="banner1">奥弗莱准备了一切您所需的服务与资讯</div>
<div class="main2">
    <div class="introduce2" style="padding-left:29px;border-left:solid #323232 2px;">
        <p>新闻资讯</p>
        <?php foreach($staticNews as $d){?>
        <a class="news" href="/<?=$d['id']?>.html" target="_blank" title="<?=$d['title']?>"><?=$d['title']?></a>
        <?php }?>
    </div>
    
    <div class="introduce2">
        <img class="intro_img" src="<?php echo STATIC_DOMAIN;?>/images/indexintro1.png">
        <div class="intro_title"><?php echo $indexBlock[0]['title'];?></div>
        <div class="intro_content"><?php echo $indexBlock[0]['content'];?></div>
        <a class="seemore" target="_blank" href="<?php echo $indexBlock[0]['href'];?>" title="<?php echo $indexBlock[0]['title'];?>">查看更多></a>
    </div>
    <div class="introduce2">
        <img class="intro_img" src="<?php echo STATIC_DOMAIN;?>/images/indexintro2.png">
        <div class="intro_title"><?php echo $indexBlock[1]['title'];?></div>
        <div class="intro_content"><?php echo $indexBlock[1]['content'];?></div>
        <a class="seemore" target="_blank" href="<?php echo $indexBlock[1]['href'];?>" title="<?php echo $indexBlock[1]['title'];?>">查看更多></a>
    </div>
    <div class="introduce2">
        <img class="intro_img" src="<?php echo STATIC_DOMAIN;?>/images/indexintro3.png">
        <div class="intro_title"><?php echo $indexBlock[2]['title'];?></div>
        <div class="intro_content"><?php echo $indexBlock[2]['content'];?></div>
        <a class="seemore" target="_blank" href="<?php echo $indexBlock[2]['href'];?>" title="<?php echo $indexBlock[2]['title'];?>">查看更多></a>
    </div>
</div>

	
<?php require(dirname(__FILE__) . '/footer_navi.php');?>

<?php require(dirname(__FILE__) . '/footer.php');?>
