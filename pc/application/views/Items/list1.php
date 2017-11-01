<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>ebay活动大促</title>
    <meta name="keywords" content="海淘在eBay | 海量库存 奥莱价格 安心海淘">
    <meta name="description" content="海淘在eBay | 海量库存 奥莱价格 安心海淘">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="//www.ebay.cn/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo APP_URL ?>/public/css/items.css" type="text/css"/>
    <script src="<?php echo APP_URL ?>/public/js/jquery-1.8.2.min.js" type="text/javascript"></script>
</head>

<body>
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
</div><!--flexslider end-->

<!-- list -->
<div id="list" class="wpn mtw">
    <div class="list-title">
        <span class="title">EBAY大卖</span>
        <!--<span class="more">更多 >></span>-->
    </div>
    <ul class="list cl">
        <?php foreach ($products as $product): ?>
            <li class="list-item">
                <!-- 内容列表项图片 -->
                <div class="image-banner">
                    <a href="<?php echo $product['href'] ?>" title="<?php echo $product['title'] ?>" target="_blank">
                        <img class="image" src="<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>"/>
                    </a>
                </div>
                <!-- 内容列表项信息 -->
                <div class="info">
                    <a href="<?php echo $product['href'] ?>">
                        <h4 class="title"><?php echo $product['title'] ?></h4>
                    </a>
                    <a href="<?php echo $product['href'] ?>">
                        <p class="describe"><?php echo $product['description'] ?></p>
                    </a>
                    <a href="<?php echo $product['href'] ?>">
                        <span class="price">￥ <?php echo $product['sale_price'] ?></span>
                        <span class="old-price">￥ <?php echo $product['real_price'] ?></span>
                    </a>
                </div>
            </li>
        <?php endforeach ?>
    </ul>

    <script type="text/javascript" src="<?php echo APP_URL ?>/public/js/slider.js"></script>
    <script type="text/javascript">
        $(function(){
            $('#banner').flexslider({
                animation: "fade", //转换方式 fade淡入淡出 slide滚动
                direction:"horizontal", //滚动方向 horizontal左右 vertical上下
                slideshowSpeed: 3000, //停留时间
                directionNav: true, //是否显示左右控制按钮 true&false
                controlNav: true, //是否显示下方控制按钮 true&false
                mousewheel: false, //是否允许鼠标控制滚动 true&false
            });
        });

    </script>
</body>