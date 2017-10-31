<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>ebay活动大促</title>
    <meta name="keywords" content="海淘在eBay | 海量库存 奥莱价格 安心海淘">
    <meta name="description" content="海淘在eBay | 海量库存 奥莱价格 安心海淘">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta content="telephone=no,email=no" name="format-detection">
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-orientation" content="portrait">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <link rel="shortcut icon" href="//www.ebay.cn/favicon.ico">
    <link href="<?php echo APP_URL ?>/public/css/mobile/items.css" rel="stylesheet">
</head>

<body>
<div class="index">
    <div id="banner" class="flexslider">
        <ul class="banner-roll slides">
            <?php foreach ($banners as $banner): ?>
                <li>
                    <a href="<?php echo $banner['href'] ?>" target="_blank" title="<?php echo $banner['title'] ?>">
                        <img src="<?php echo $banner['image'] ?>" title="<?php echo $banner['title'] ?>" alt="<?php echo $banner['title'] ?>" />
                        <div class="title slider-title"><P><?php echo $banner['title'] ?></P></div>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="content">
        <div class="headline">
            <p class="left">EBAY大卖</p>
            <!--<p class="right">更多>></p>-->
            <div class="clearfix"></div>
        </div>
        <div class="feed-list">
            <?php foreach ($products as $product): ?>
                <div class="left row">
                    <a href="<?php echo $product['href'] ?>" title="<?php echo $product['title'] ?>" target="_blank">
                        <div class="row-pic">
                            <img src="<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>"/>
                        </div>
                        <div class="masking"></div>
                    </a>
                    <a href="<?php echo $product['href'] ?>">
                        <h1><?php echo $product['title'] ?></h1>
                    </a>
                    <a href="<?php echo $product['href'] ?>">
                        <p><?php echo $product['description'] ?></p>
                    </a>
                    <a href="<?php echo $product['href'] ?>">
                        <div class="rmb-text">
                            <p class="right">原价：¥<?php echo $product['real_price'] ?></p>
                            <h6 class="left">¥<?php echo $product['sale_price'] ?></h6>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<script src="<?php echo APP_URL ?>/public/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo APP_URL ?>/public/js/slider.js"></script>
<script type="text/javascript">
    $(function(){
        $('#banner').flexslider({
            animation: "slide", //转换方式 fade淡入淡出 slide滚动
            direction:"horizontal", //滚动方向 horizontal左右 vertical上下
            slideshowSpeed: 3000, //停留时间
            directionNav: true, //是否显示左右控制按钮 true&false
            controlNav: true, //是否显示下方控制按钮 true&false
            mousewheel: true, //是否允许鼠标控制滚动 true&false
        });
    });

</script>
</body>