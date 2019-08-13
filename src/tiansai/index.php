<?php
namespace tiansai;

use tiansai\lib\Order;
class index{

    public function getOrder()
    {
       $o = new Order();
       return $o->list();
    }
}
