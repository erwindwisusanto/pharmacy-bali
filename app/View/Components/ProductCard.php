<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $type;
    public $productName;
    public $price;
    public $productId;

    public function __construct($type, $productName, $price, $productId)
    {
      $this->productId = $productId;
      $this->type = $type;
      $this->productName = $productName;
      $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
      return view('components.shop-card-product');
    }
}
