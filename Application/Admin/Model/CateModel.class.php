<?php
namespace Admin\Model;
use Think\Model;
class CateModel extends Model{
        protected $_validate = array(
            array('catename','require','栏目名称必填！',1),
            array('open','require','请选择是否开放！',1),
        );
}