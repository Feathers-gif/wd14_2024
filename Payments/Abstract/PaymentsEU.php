<?php
namespace Payments\Abstract;

abstract class PaymentsEU {
    const API_KEY = '';
    public int $user_id;
    public int $order_id;
    public int $price;
    public array $data;

    public function setUserId(int $user_id): static
    {
        $this->user_id = $user_id;
        return $this;
    }
    public function setOrderId(int $order_id): static
    {
        $this->order_id = $order_id;
        return $this;
    }
    public function setPrice(int $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }
    public function send(): static
    {
        $api_key = self::API_KEY;
        //отправка данных
        return $this;
    }
}
