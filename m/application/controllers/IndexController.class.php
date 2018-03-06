<?php

class IndexController extends Controller {
    // 首页方法
    public function index() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',0);
        $products = (new ProductsModel)->selectAll();
        foreach($products as $key => $product) {
            $products[$key]['sale_href'] = $product['ebay_href'] ;
        }

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

}