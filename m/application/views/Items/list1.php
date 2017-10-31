<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>demo</title>
    <link href="<?php echo APP_URL ?>/public/css/mobile/index1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="index">
    <div class="banner">
        <ul class="banner-roll">
            <li><a href="http://www.mifanxing.com/"><img src="image/banner.jpg" /></a></li>
            <li><a href="http://www.mifanxing.com/"><img src="image/banner.jpg" /></a></li>
        </ul>
        <div class="title">
            <P>30年专业音响</P>
        </div>
    </div>
    <div class="content">
        <div class="headline">
            <p class="left">限时特卖</p>
            <p class="right">更多>></p>
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
                        <p class="right">原价：¥<?php echo $product['real_price'] ?></p>
                        <h6 class="left">¥<?php echo $product['sale_price'] ?></h6>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
</body>