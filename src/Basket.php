<?php

class Basket
{
    public array $basketItems;

    public function addItem(Product $item): void
    {
        $this->basketItems[] = $item;
    }

    public function getDisplay($basketItems)
    {
        foreach ($basketItems as $item) {
            echo '<div class="basket-item">
                <p>' . $item->name . '</p>
                <p> £' . $item->price . '</p>
            </div>';
        }
    }

}


