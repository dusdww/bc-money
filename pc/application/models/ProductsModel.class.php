<?php

class ProductsModel extends Model {
    // 查询所有
    public function selectAll() {
        $sql = sprintf("select * from `%s` where `enabled` = 1  order by `sort` asc", $this->_table );
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();

        return $sth->fetchAll();
    }
}