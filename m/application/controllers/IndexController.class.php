<?php

class IndexController extends Controller {
    // 首页方法
    public function index() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',0);
        $products = (new ProductsModel)->selectAllByColumnValue('enabled',0);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

}