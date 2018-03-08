<?php

class ItemsController extends Controller {
    // 首页方法
    public function index() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',1);
        $products = (new ProductsModel)->selectAll();
        foreach($products as $key => $product) {
            $products[$key]['sale_href'] = $product['ebay_href'] ;
        }

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function view($id = null) {
        $channel =  (new ChannelsModel)->select($id);
        $banners = (new LinksModel)->selectAllByColumnValue('type',1);
        $products = (new ProductsModel)->selectAll();
        foreach($products as $key => $product) {
            $products[$key]['sale_href'] = str_replace(APP_CHANNEL_CODE, $channel["code"],APP_CARD_URL) . $product['ebay_href'];
        }

        $this->assign('banners', $banners);
        $this->assign('products', $products);

    }
}