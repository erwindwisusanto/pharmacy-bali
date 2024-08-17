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

    public $category;
    public $categoryUrl;
    public $productName;
    public $productUrl;
    public $price;
    public $addToCartUrl;

    public function __construct($category, $categoryUrl, $productName, $productUrl, $price, $addToCartUrl)
    {
      $this->category = $category;
      $this->categoryUrl = $categoryUrl;
      $this->productName = $productName;
      $this->productUrl = $productUrl;
      $this->price = $price;
      $this->addToCartUrl = $addToCartUrl;
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
