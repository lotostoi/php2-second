<?php
define("IMG", "https://via.placeholder.com/300");
define("IMG_CART", "https://via.placeholder.com/150x100");

class Good
{
    public $name = null;
    public $price = null;
    public $image = null;
    public $template = null;

    public function __construct($name, $price, $image, $template)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->template = $template . ".php";
    }

    public function render($vars = [])
    {
        count($vars) > 0 && extract($vars);
        extract(get_object_vars($this));
        include "$template";
    }
}

class CartGood extends Good
{
    public $quantity = null;
    public function __construct($name = null, $price = null, $image = null, $template = null, $quantity)
    {
        parent::__construct($name, $price, $image, $template);
        $this->quantity = $quantity;
    }
    // все это очень тупо, но надо было показать что я могу пользоваться словом parent
    public function render($vars = [])
    {   
        $allQuantity = ['allQuantity' => $this->calcAllPrice()];
        parent::render($allQuantity);
    }
    // бесполезный метод  но фантазия закочилась
    public function calcAllPrice()
    {
        return (int) $this->price * (int) $this->quantity;
    }
}



$good = new Good('Телефон', '55', IMG, 'good');
$good->render();



$goodInCart = new CartGood('Телефон', '55', IMG_CART, 'cart-good', '5');
$goodInCart->render();
