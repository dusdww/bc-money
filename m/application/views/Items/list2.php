<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>ebay活动大促</title>
    <meta name="keywords" content="海淘在eBay | 海量库存 奥莱价格 安心海淘">
    <meta name="description" content="海淘在eBay | 海量库存 奥莱价格 安心海淘">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="//www.ebay.cn/favicon.ico" type="image/x-icon">
    <link href="<?php echo APP_URL ?>/public/css/mobile/items.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo APP_URL ?>/public/js/jquery-1.8.2.min.js" type="text/javascript"></script>
</head>
<body>
<div class="index">
    <div id="banner" class="flexslider">
        <ul class="slides">
            <?php foreach ($banners as $banner): ?>
                <li>
                    <a href="<?php echo $banner['href'] ?>" target="_blank" title="<?php echo $banner['title'] ?>">
                        <div>
                            <img src="<?php echo $banner['image'] ?>" title="<?php echo $banner['title'] ?>" alt="<?php echo $banner['title'] ?>" />
                            <div class="slider-title">
                                <span><?php echo $banner['title'] ?></span>
                            </div>
                        </div>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="content">
        <div class="headline">
            <p class="left">限时特卖</p>
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
                    <h1><?php echo $product['title'] ?></h1>
                    <p><?php echo $product['description'] ?></p>
                    <div class="rmb-text">
                        <p>原价：¥<?php echo $product['real_price'] ?></p>
                        <h6>¥<?php echo $product['sale_price'] ?></h6>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo APP_URL ?>/public/js/slider.js"></script>
<script type="text/javascript">
    $(function(){
        $('#banner').flexslider({
            animation: "fade", //转换方式 fade淡入淡出 slide滚动
            direction:"horizontal", //滚动方向 horizontal左右 vertical上下
            slideshowSpeed: 3000, //停留时间
            directionNav: false, //是否显示左右控制按钮 true&false
            controlNav: true, //是否显示下方控制按钮 true&false
            mousewheel: true, //是否允许鼠标控制滚动 true&false
            pauseOnAction: false,
            pausePlay:false,
        });
    });
</script>
</body>