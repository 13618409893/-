<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"F:\phpStudy\PHPTutorial\WWW\taian\public/../application/index\view\index\index.html";i:1554116695;s:73:"F:\phpStudy\PHPTutorial\WWW\taian\application\index\view\public\head.html";i:1552125373;s:75:"F:\phpStudy\PHPTutorial\WWW\taian\application\index\view\public\footer.html";i:1551940781;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<title>广东泰安模具科技股份有限公司</title>
<meta name="description" content="广东泰安模具科技股份有限公司" />
<meta name="keywords" content="广东泰安模具科技股份有限公司" />
<link rel="stylesheet" type="text/css" media="all" href="/static/index/style/style.css" />
    <script type="text/javascript" src="/static/index/style/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="/static/index/style/jquery.js"></script>
    <script src="/static/index/style/jquery.error.js" type="text/javascript"></script>
    <script src="/static/index/style/jtemplates.js" type="text/javascript"></script>
    <script src="/static/index/style/jquery.form.js" type="text/javascript"></script>
    <script src="/static/index/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="/static/index/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="/static/index/style/voterajax.js"></script>
    <script type="text/javascript" src="/static/index/style/userregister.js"></script>
    <link rel="stylesheet" href="/static/index/style/pagenavi-css.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/static/index/style/votestyles.css" type="text/css" />
    <link rel="stylesheet" href="/static/index/style/voteitup.css" type="text/css" />
<script type="text/javascript">
    function IFocuse(th, o) {
        var t = $(th);
        var c = t.attr("class");
        if (o) {
            t.removeClass(c).addClass(c+"-over");
        }
        else {
            t.removeClass(c).addClass(c.replace("-over",""));
        }
    }
</script>
</head>
<body class="xh_body">
<script src="/static/index/style/common.js" type="text/javascript"></script>
 <script>
 function subForm()
 {

 formsearch.submit();
 //form1为form的id
 }
 </script>
<script type="text/javascript">
    function showMask() {
        $("#mask").css("height", $(document).height());
        $("#mask").css("width", $(document).width());
        $("#mask").show();
    }
</script>
<div id="mask" class="mask" onclick="CloseMask()"></div>

<!-- 头部 -->
<div id="header_wrap">
    <div id="header">
        <div style="float: left; width: 310px;">
            <h1>
                <a href="<?php echo url('index/index'); ?>" style="background:url(/static/index/images/logo1.png) no-repeat 0 0;" title="广东泰安模具科技股份有限公司">
                </a>
                <div class="" id="logo-sub-class">
                </div>
            </h1>
        </div>
        <div id="navi">

<ul id="jsddm">

<li><a class="navi_home" href="<?php echo url('index/index'); ?>">首页</a></li>
<?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
<li><a <?php if($cate['children'] != 0): ?> class="havechild" <?php endif; ?> href="/index.php/index/<?php if($cate['type'] == 1): ?>artlist<?php elseif($cate['type'] == 3): ?>imglist<?php elseif($cate['type'] == 2): ?>page<?php endif; ?>/index/cateid/<?php echo $cate['id']; ?>"><?php echo $cate['catename']; ?></a>
<?php if($cate['children'] != 0): ?>
<ul>
<?php foreach ($cate['children'] as $k2 => $v2):?>
<li><a href="/index.php/index/<?php if($v2['type'] == 1): ?>artlist<?php elseif($v2['type'] == 3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $v2['id']; ?>"><?php echo $v2['catename'];?></a></li>
<?php endforeach;?>
</ul>
<?php endif; ?>
 </li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>

            <div style="clear: both;">
            </div>


        </div>
        <div style="float: right; width: 209px;">
            <div class="widget" style="height: 30px; padding-top: 20px;">
                <div style="float: left;">
      <form  name="formsearch" action="<?php echo url('search/index'); ?>" method="get">
<input name="keywords" type="text" style="background-color: #000000;padding-left: 10px; font-size: 12px;font-family: 'Microsoft Yahei'; color: #999999;height: 29px; width: 160px; border: solid 1px #666666; line-height: 28px;" id="go" value="在这里搜索..." onfocus="if(this.value=='在这里搜索...'){this.value='';}"  onblur="if(this.value==''){this.value='在这里搜索...';}" />
        </form>
                        </div>
                <div style="float: left;">
                    <img src="/static/index/images/search-new.png" id="imgSearch" style="cursor: pointer; margin: 0px;
                        padding: 0px;" onclick="subForm()"  /></div>
                <div style="clear: both;">
                </div>
            </div>
        </div>

    </div>
</div>

</div>
<!-- /头部 -->

    <div id="xh_wrapper">

<input type="hidden" id="hdUrlFocus" />
    <div class="xh_h_show">
        <div class="xh_h_show_in">
        <div id="zSlider">
            <div id="picshow">
    <div id="picshow_img">
        <ul>
            <?php if(is_array($recArt) || $recArt instanceof \think\Collection || $recArt instanceof \think\Paginator): $i = 0; $__LIST__ = $recArt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
                <li style="display: list-item;">
                    <a href="<?php echo url('Article/index',array('artid'=>$art['id'])); ?>" target="_blank">
                        <img src="<?php echo $art['thumb']; ?>" alt="<?php echo $art['title']; ?>">
                    </a>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<div id="select_btn">
    <ul>
        <li class="current"></li><li class=""></li><li class=""></li><li class=""></li>
    </ul>
</div>
            <div class="focus-bg-title">
            <div id="focus-center" class="focus-title">
            <div style="float:left;width:580px;padding-left:10px;font-size:18px;" id="focus-tl-s"></div>
            <div style="float:right;width:200px;"></div>
            </div>
            </div>
            </div>
            <div id="picshow_right">

    <img src="/static/index/images/timg.jpg"  width="255px" height="420px">


            </div>
        </div>
    </div>
    <div id="xh_container">
    <a name="new"></a>
        <div id="xh_content" style="padding-right:10px;">
            <div class="xh_area_h_3">
                <div class="xh_area_title">
                    <a href="javascript:" class="t">New 最近更新</a> <span class="r">
                    <?php if(is_array($recIndex) || $recIndex instanceof \think\Collection || $recIndex instanceof \think\Paginator): $i = 0; $__LIST__ = $recIndex;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                    <a href="/index.php/index/<?php if($cate['type'] == 1): ?>artlist<?php elseif($cate['type'] == 3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $cate['id']; ?>" target="_blank"><?php echo $cate['catename']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </span>
                </div>
                <br>


        <?php if(is_array($newArtiecleRes) || $newArtiecleRes instanceof \think\Collection || $newArtiecleRes instanceof \think\Paginator): $i = 0; $__LIST__ = $newArtiecleRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
        <div class="xh_post_h_3 ofh">
                            <?php if($article['thumb'] != ''): ?>
                            <div class="xh_265x265">
                                <a target="_blank" href="<?php echo url('Article/index',array('artid'=>$article['id'])); ?>" title="<?php echo $article['title']; ?>">
                                    <img src="<?php echo $article['thumb']; ?>" alt="<?php echo $article['title']; ?>" height="240" width="400"></a></div>
                            <?php endif; ?>
                            <div class="<?php if($article['thumb'] != ''): ?>r <?php else: ?>l <?php endif; ?> ofh">
                                <h2 class="xh_post_h_3_title ofh">
                                    <a target="_blank" href="<?php echo url('Article/index',array('artid'=>$article['id'])); ?>" title="<?php echo $article['title']; ?>"><?php echo $article['title']; ?></a>
                                </h2>
                                <span class="time"><?php echo date("Y-m-d H:i",$article['time']); ?></span>
                                <div class="xh_post_h_3_entry ofh"><?php echo $article['desc']; ?>
                </div>
                                <div class="b">
                                     <span title="<?php echo $article['zan']; ?>人赞" class="xh_love"><span class="textcontainer"><span><?php echo $article['zan']; ?></span></span> <span class="bartext"></span></span> <span title="<?php echo $article['click']; ?>人浏览" class="xh_views"><?php echo $article['click']; ?></span>
                                </div>
                            </div>
                            <span class="cat"><a href="javascript:;"
                                rel="category tag"><?php echo $article['catename']; ?></a></span>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>


            </div>

        </div>
        <div id="xh_sidebar">

         <div class="widget">

<div style="background: url('/static/index/images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
</div>
<!-- 热门文章 -->
<ul id="ulHot">
<?php if(is_array($siteHotArt) || $siteHotArt instanceof \think\Collection || $siteHotArt instanceof \think\Paginator): $i = 0; $__LIST__ = $siteHotArt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="<?php echo url('Article/index',array('artid'=>$article['id'])); ?>" target="_blank"><img src="<?php echo $article['thumb']; ?>" width="83" title="<?php echo $article['title']; ?>" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="<?php echo url('Article/index',array('artid'=>$article['id'])); ?>" target="_blank" title="<?php echo $article['title']; ?>"><?php echo $article['title']; ?></a></div>
</li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<!-- 热门文章/ -->
                </div>

            <div class="widget links">
                <h3>
                    友情链接</h3>
                <ul>
                <?php if(is_array($linkRes) || $linkRes instanceof \think\Collection || $linkRes instanceof \think\Paginator): $i = 0; $__LIST__ = $linkRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$link): $mod = ($i % 2 );++$i;?>
                <li style="width:200px; height:20px;"><a href="<?php  if(strpos($link['url'], 'http://')!==0){echo 'http://'.$link['url'];}else{echo $link['url'];} ?>" target='_blank' ><?php echo $link['title']; ?></a> </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
    <input type="hidden" id="hdBoxbor" />
    <script type="text/javascript">

        $("#next-page").hover(function () { $(this).attr("src", "/static/index/style/images/next02.png"); }, function () { $(this).attr("src", "/static/index/style/images/next01.png"); });
        $("#last-page").hover(function () { $(this).attr("src", "/static/index/style/images/last02.png"); }, function () { $(this).attr("src", "/static/index/style/images/last01.png"); });

        $(function () {
            var imgHoverSetTimeOut = null;
            $('.xh_265x265 img').hover(function () {
                var oPosition = $(this).offset();
                var oThis = $(this);
                $(".boxBor").css({
                    left: oPosition.left,
                    top: oPosition.top,
                    width: oThis.width(),
                    height: oThis.height()
                });
                $(".boxBor").show();
                var urlText = $(this).parent().attr("href");
                $("#hdBoxbor").val(urlText);
            }, function () {
                imgHoverSetTimeOut = setTimeout(function () { $(".boxBor").hide(); }, 500);
            });
            $(".boxBor").hover(
                function () {
                    clearTimeout(imgHoverSetTimeOut);
                }
                , function () {
                    $(".boxBor").hide();
                }
            );
            });
            function IBoxBor() {
                window.open($("#hdBoxbor").val());
            }
            function goanewurl() {
                window.open($("#hdUrlFocus").val());
            }
</script>

    </div>
<div class="sitemap">
    <h4>
        SITE MAP</h4>
    <div class="l">
        <ul id="menu-sitemap" class="menu">
        <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a target="_blank" href="/index.php/index<?php if($cate['type'] == 1): ?>artlist<?php elseif($cate['type'] == 3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $cate['id']; ?>"><?php echo $cate['catename']; ?></a>
                <?php if($cate['children'] != 0): ?>
                <ul class="sub-menu">
                <?php foreach ($cate['children'] as $k2 => $v2):?>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                        <a target="_blank" href="/index.php/index<?php if($v2['type'] == 1): ?>artlist<?php elseif($v2['type'] == 3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $v2['id']; ?>"><?php echo $v2['catename'];?></a></li>

                <?php endforeach;?>
                </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="r">
        <h5>
            FOLLOW US</h5>

                        <img src="/static/index/images/weixin.jpg" alt="" title="扫描添加我们的公众微信" class="alignnone size-full wp-image-18966"
                            height="140" width="120"></a></div>
</div>
<!-- 尾部 -->
<div id="footer_wrap">
    <div id="footer">
        <div class="footer_navi">

            <ul id="menu-%e5%b0%be%e9%83%a8%e5%af%bc%e8%88%aa" class="menu">
            <span style="float: left;">底部推荐</span>
                <?php if(is_array($recBottom) || $recBottom instanceof \think\Collection || $recBottom instanceof \think\Paginator): $i = 0; $__LIST__ = $recBottom;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                <li style="margin-left: 20px" id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156">
                    <a href="/index.php/index/<?php if($cate['type'] == 1): ?>artlist<?php elseif($cate['type'] == 3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $cate['id']; ?>" target="_blank"><?php echo $cate['catename']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="footer_info">
            <span class="legal">Copyright &#169; 2016-2020 qq群：484519446 版权所有&#160;&#160;&#160;<a href="#">
                琼ICP备******号</a>&#160;&#160;&#160;

        </div>
    </div>
</div>
<!-- /尾部 -->
<!-- /尾部 -->

<div style="display: none;" id="scroll">
</div>

<script type="text/javascript" src="/static/index/style/z700bike_global.js"></script>
</body>
</html>
<html>
<script>document.getElementById("life"+"").style.display="n"+"o"+"ne";</script>