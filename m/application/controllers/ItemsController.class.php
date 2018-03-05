<?php

class ItemsController extends Controller {
    // 首页方法
    public function index() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',0);
        $products = (new ProductsModel)->selectAll();

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function view($id = null,$name = null) {
        if($id != null)
            $channel =  (new ChannelsModel)->select($id);
        if($name != null)
            $channel =  (new ChannelsModel)->selectAllByColumnValue('name',$name);
        $banners = (new LinksModel)->selectAllByColumnValue('type',0);
        $products = (new ProductsModel)->selectAll();
        foreach($products as $product) {
            $product['sale_href'] = $product['ebay_href'] + $channel["code"];
        }

        $this->assign('banners', $banners);
        $this->assign('products', $products);

    }
}