<?php

class IndexController extends Controller {
    // 首页方法
    public function index() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',1);
        $products = (new ProductsModel)->selectAllByColumnValue('type',0);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

}