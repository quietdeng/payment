<?php

namespace Payment;

class Payment
{
    public function payOrder(string $order_id)
    {
        return 'payOrder:' . $order_id;
    }
}