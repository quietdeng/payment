<?php

namespace Quietdeng\Payment;

class Refund
{
    public function refundOrder(string $order_id)
    {
        return 'refundOrder:' . $order_id;
    }
}