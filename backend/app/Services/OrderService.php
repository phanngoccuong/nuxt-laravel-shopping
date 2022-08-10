<?php

namespace App\Services;

use Illuminate\Support\Carbon;
use App\Repositories\Order\OrderRepositoryInterface;

class OrderService extends BaseService
{
    public function getRepository()
    {
        return OrderRepositoryInterface::class;
    }

    public function checkout($data)
    {
        $data['order_date'] = Carbon::now('Asia/Ho_Chi_Minh');
        $data['order_number'] = rand(100000000, 1000000000000);
        $order =  $this->repository->store($data);
        $carts =  $data['cart'];
        $detail = [];
        foreach ($carts as $cart) {
            $detail[] = [
                'product_id' => $cart['id'],
                'total' => $cart['price'] * $cart['quantity'],
                'price' => $cart['price'],
                'quantity' => $cart['quantity']
            ];
        }
        $order->products()->attach($detail);
    }
}
