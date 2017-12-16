<?php

class ItemsController extends Controller {
    // 首页方法
    public function index() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',0);
        $products = (new ProductsModel)->selectAllByColumnValue('type',0);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function smth() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',10);
        $products = (new ProductsModel)->selectAllByColumnValue('type',10);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function zuanke8() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',20);
        $products = (new ProductsModel)->selectAllByColumnValue('type',20);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function mgpyh() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',30);
        $products = (new ProductsModel)->selectAllByColumnValue('type',30);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function duoshou() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',40);
        $products = (new ProductsModel)->selectAllByColumnValue('type',40);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function laoyang() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',50);
        $products = (new ProductsModel)->selectAllByColumnValue('type',50);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function ailang() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',60);
        $products = (new ProductsModel)->selectAllByColumnValue('type',60);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function feichang() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',70);
        $products = (new ProductsModel)->selectAllByColumnValue('type',70);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function aiaiyangmao() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',80);
        $products = (new ProductsModel)->selectAllByColumnValue('type',80);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    // 1
    public function l1() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',110);
        $products = (new ProductsModel)->selectAllByColumnValue('type',110);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }
    
    // 2
    public function l2() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',120);
        $products = (new ProductsModel)->selectAllByColumnValue('type',120);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    // 3
    public function l3() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',130);
        $products = (new ProductsModel)->selectAllByColumnValue('type',130);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    // 4
    public function l4() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',140);
        $products = (new ProductsModel)->selectAllByColumnValue('type',140);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    // 5
    public function l5() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',150);
        $products = (new ProductsModel)->selectAllByColumnValue('type',150);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    // 6
    public function l6() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',160);
        $products = (new ProductsModel)->selectAllByColumnValue('type',160);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    // 7
    public function l7() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',170);
        $products = (new ProductsModel)->selectAllByColumnValue('type',170);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    // 8
    public function l8() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',180);
        $products = (new ProductsModel)->selectAllByColumnValue('type',180);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    // 9
    public function l9() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',190);
        $products = (new ProductsModel)->selectAllByColumnValue('type',190);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function laoyu() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',200);
        $products = (new ProductsModel)->selectAllByColumnValue('type',200);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function lvyou() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',210);
        $products = (new ProductsModel)->selectAllByColumnValue('type',210);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function huihui() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',220);
        $products = (new ProductsModel)->selectAllByColumnValue('type',220);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }
}