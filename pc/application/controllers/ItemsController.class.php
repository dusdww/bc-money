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
        $banners = (new LinksModel)->selectAllByColumnValue('type',11);
        $products = (new ProductsModel)->selectAllByColumnValue('type',10);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function zuanke8() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',21);
        $products = (new ProductsModel)->selectAllByColumnValue('type',20);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function mgpyh() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',31);
        $products = (new ProductsModel)->selectAllByColumnValue('type',30);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function duoshou() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',41);
        $products = (new ProductsModel)->selectAllByColumnValue('type',40);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function laoyang() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',51);
        $products = (new ProductsModel)->selectAllByColumnValue('type',50);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function ailang() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',61);
        $products = (new ProductsModel)->selectAllByColumnValue('type',60);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function feichang() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',71);
        $products = (new ProductsModel)->selectAllByColumnValue('type',70);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    public function aiaiyangmao() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',81);
        $products = (new ProductsModel)->selectAllByColumnValue('type',80);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    // 1
    public function l1() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',111);
        $products = (new ProductsModel)->selectAllByColumnValue('type',110);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }

    // 2
    public function l2() {
        $banners = (new LinksModel)->selectAllByColumnValue('type',121);
        $products = (new ProductsModel)->selectAllByColumnValue('type',120);

        $this->assign('banners', $banners);
        $this->assign('products', $products);
    }
}