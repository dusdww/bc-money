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
    <link href="<?php echo APP_URL ?>/public/css/mobile/index.css" rel="stylesheet">
</head>

<body>
<div class="g-doc">
    <div class="g-wrap m-wrap1">
        <div class="swiper-container swiper-container-horizontal">
            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-414px, 0px, 0px);">
                <?php foreach ($banners as $banner): ?>
                    <a href="<?php echo $banner['href'] ?>" title="<?php echo $banner['title'] ?>">
                        <div class="swiper-slide" style="width: 414px;">
                            <img src="<?php echo $banner['image'] ?>" class="img">
                        </div>
                    </a>
                <?php endforeach ?>
            </div>
            <div class="swiper-pagination swiper-pagination-fraction" style="display: block;">
                <span class="swiper-pagination-current">2</span> /
                <span class="swiper-pagination-total"><?php echo count($banners) ?></span>
            </div>
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
</body>