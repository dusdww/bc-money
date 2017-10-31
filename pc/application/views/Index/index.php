<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>ebay活动大促</title>
    <meta name="keywords" content="海淘在eBay | 海量库存 奥莱价格 安心海淘">
    <meta name="description" content="海淘在eBay | 海量库存 奥莱价格 安心海淘">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="//www.ebay.cn/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo APP_URL ?>/public/css/index.css" type="text/css">
</head>

<body>
<div class="g-bd">
    <div id="indexRoot">
        <div class="m-app">
            <div class="m-focus j-focus">
                <div class="m-focus" style="display:block;">
                    <div class="focus-bd">
                        <div id="js-focusSlick" class="js-slick m-focusSlick slick-initialized slick-slider slick-dotted">
                            <button type="button" class="slick-prev icon-normal-slick-leftRound w-icon-normal slick-arrow" style="display: block; left: 86.5px;"></button>
                            <div aria-live="polite" class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1; width: 2766px;">
                                    <?php foreach ($banners as $banner): ?>
                                    <div class="item imgCenterBanner slick-slide slick-current slick-active"style="width: 1383px; position: relative; left: 0px; top: 0px; z-index: 1000; opacity: 1; transition: opacity 500ms ease;;margin: 0 5%;">
                                        <a href="<?php echo $banner['href'] ?>" target="_blank" title="<?php echo $banner['title'] ?>" class="wrap">
                                            <img src="<?php echo $banner['image'] ?>" alt="<?php echo $banner['title'] ?>" class="js-img">
                                        </a>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <button type="button" class="slick-next icon-normal-slick-rightRound w-icon-normal slick-arrow" style="display: block; right: 86.5px;"></button>
                            <ul class="slick-dots" style="display: block;">
                                <?php foreach ($banners as $banner): ?>
                                <li class="slick-active" id="slick-slide<?php echo $banner['id'] ?>">
                                    <button type="button"><?php echo $banner['id'] ?></button>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-indexCates">
                <div class="g-row">
                    <div class="m-indexCate">
                        <div class="bd">
                            <ul class="itemList">
                                <?php foreach ($products as $product): ?>
                                <li class="item">
                                    <div class="m-product ">
                                        <div class="hd">
                                            <a href="<?php echo $product['href'] ?>" title="<?php echo $product['title'] ?>" target="_blank" class="imgWrap">
                                                <img class="img img-lazyload j-lazyload img-lazyloaded" src="<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>">
                                                <div class="colorNum" style="display:block;"><?php echo $product['description'] ?></div>
                                            </a>
                                        </div>
                                        <div class="bd">
                                            <div class="prdtTags"></div>
                                            <h4 class="name">
                                                <a href="<?php echo $product['href'] ?>" title="<?php echo $product['title'] ?>" target="_blank"><?php echo $product['title'] ?></a>
                                            </h4>
                                            <p class="price"><span class="retailPrice"><span">¥</span><span><?php echo $product['sale_price'] ?></span></span></p>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>