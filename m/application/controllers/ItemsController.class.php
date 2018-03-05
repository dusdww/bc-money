<?php

class ItemsController extends Controller {
    // 首页方法
    public function index() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',0);
        $products = (new ProductsModel)->selectAllByColumnValue('enabled',0);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function view($id = null) {
        $channel =  (new ChannelsModel)->select($id);
        $banners = (new LinksModel)->selectAllByColumnValue('type',0);
        $products = (new ProductsModel)->selectAllByColumnValue('enabled',1);
        foreach($products as $product) {
            $product['sale_href'] = $product['ebay_href'] + $channel["code"];
        }

        $this->assign('banners', $banners);
        $this->assign('products', $products);

    }
}