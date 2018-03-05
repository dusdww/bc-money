<?php

class ChannelsModel extends Model {
    // 查询所有
    public function selectAllByColumnValue($name,$value) {
        $sql = sprintf("select * from `%s` where `enabled` = 1 and `%s` = '%s' order by `sort` asc", $this->_table , $name, $value);
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();

        return $sth->fetchAll();
    }
}