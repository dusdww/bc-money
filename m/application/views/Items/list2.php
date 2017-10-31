<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>ebay活动大促</title>
    <meta name="keywords" content="海淘在eBay | 海量库存 奥莱价格 安心海淘">
    <meta name="description" content="海淘在eBay | 海量库存 奥莱价格 安心海淘">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="//www.ebay.cn/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo APP_URL ?>/public/css/mobile/list2.css" type="text/css"/>
    <script src="<?php echo APP_URL ?>/public/js/jquery-1.8.2.min.js" type="text/javascript"></script>
</head>

<body>
<div class="g-doc">
    <div class="g-wrap m-wrap1">
        <div id="banner" class="flexslider">
            <ul class="slides">
                <?php foreach ($banners as $banner): ?>
                    <li>
                        <a href="<?php echo $banner['href'] ?>" target="_blank" title="<?php echo $banner['title'] ?>">
                            <img src="<?php echo $banner['image'] ?>" title="<?php echo $banner['title'] ?>" alt="<?php echo $banner['title'] ?>" />
                            <div class="slider-title"><?php echo $banner['title'] ?></div>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <div class="g-wrap m-wrap5">
        <div class="m-goods-gather">
            <ul class="m-goods-list">
                <?php foreach ($products as $product): ?>
                    <li class="m-goods-item">
                        <a href="<?php echo $product['href'] ?>" class="m-goods-con PSC_J_normal_statistics_Goods">
                            <div class="u-pic">
                                <img src="<?php echo $product['image'] ?>" class="pic">
                            </div>
                            <div class="u-desc"><?php echo $product['description'] ?></div>
                            <div class="u-detail">
                                <p class="name f-tof"><?php echo $product['title'] ?></p>
                                <p class="price-box"><span class="price"><?php echo $product['sale_price'] ?></span></p>
                            </div>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
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
            directionNav: true, //是否显示左右控制按钮 true&false
            controlNav: true, //是否显示下方控制按钮 true&false
            mousewheel: false, //是否允许鼠标控制滚动 true&false
        });
    });
</script>
</body>