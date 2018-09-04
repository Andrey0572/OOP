<?php
 class Car{
     public $brand;
     public $model;
     public $color;
     public $price;
     public $discaunt;

     public function __construct($brand, $model, $color, $price, $discaunt)
     {
         $this->brand = $brand;
         $this->model = $model;
         $this->color = $color;
         $this->price = $price;
         $this->discaunt = $discaunt;
     }
     public function getPrice()
     {
         $carDiscaunt = ($this->brand = 'brand')? 10 : 0;
         $discount = min($this->discaunt, $carDiscaunt);
            if ($this->discaunt) {
            return round($this->price -($this->price * $this->discaunt / 100));
        } else {
            return $this->price;
        }
    }      
    public function getCar()
    {
        $html = $this->model . ', ' . $this->color . ', ' . $this->price;
        return $html;      
    }
}
 $Audi = new Car('Audi', 'Q7', 'Black', '20000','10'); 
 $Honda = new Car('Honda', '2522', 'Blu', '15000', '10');
 
class TV
{
    public $brand;
    public $model;
    public $diagonal;
    public $color;
    public $price;
    public $discaunt;

    public function __construct($brand, $model, $diagonal, $color, $price, $discaunt)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->diagonal = $diagonal;
        $this->color = $color;
        $this->price = $price;
        $this->discaunt = $discaunt;
    }
    public function getPrice()
    {
        $TVDiscaunt = ($this->brand = 'brand') ? 10 : 0;
        $discount = min($this->discaunt, $TVDiscaunt);
        if ($this->discaunt) {
            return round($this->price - ($this->price * $this->discaunt / 100));
        } else {
            return $this->price;
        }
    }
    public function getTV()
    {
        $html = $this->model. ', ' .$this->diagonal.', '.$this->color . ', ' .$this->price;
        return $html;
    }
}
$LG = new TV('LG', 'G2458', '54cm','Black', '20000руб', '19');
$Sony = new TV('Sony', 'NB2522', '74cm', 'Blue', '15000руб', '15');

class Pen 
{
    public $brand;
    public $color;
    public $price;
    public $discaunt;

    public function __construct($brand, $color, $price, $discaunt)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->price = $price;
        $this->discaunt = $discaunt;
    }

    public function getPrice()
    {
        $PenDiscaunt = ($this->brand = 'brand') ? 10 : 0;
        $discount = min($this->discaunt, $PenDiscaunt);
        if ($this->discaunt) {
            return round($this->price - ($this->price * $this->discaunt / 100));
        } else {
            return $this->price;
        }
    }
    public function getPen()
    {
        $html =  $this->color . ', ' . $this->price;
        return $html;
    }
}
$Parker = new Pen('Parker', 'Black', '2000руб', '5');
$WATERMAN = new Pen('WATERMAN',  'Blue', '5000руб', '10');

class Duck
{
    public $age;
    public $weight;
    public $price;
    public $discaunt;

    public function __construct($age, $weight, $price, $discaunt)
    {
        $this->age = $age;
        $this->weight = $weight;
        $this->price = $price;
        $this->discaunt = $discaunt;
    }

    public function getPrice()
    {
        $duckDiscaunt = ($this->weight = 'weight') ? 10 : 0;        
        $discount = min($this->discaunt, $duckDiscaunt);
        if ($this->discaunt) {
            return round($this->price - ($this->price * $this->discaunt / 100));
        } else {
            return $this->price;
        }
    }
    
    public function getDuck()
    {
        $html = $this->age. ', ' .$this->weight . ', ' .$this->price;
        return $html;
    }
}
$duckGG = new Duck('2', '2.5кг', '2000pуб', '5');
$duckLL = new Duck('5', '5кг', '5000pуб', '10');

class Product
{
    public $name;
    public $typу;
    public $price;

    public function __construct($name, $typу, $price)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }
    public function getProduct()
    {
        $html = $this->name.', '.$this->type.', ' .$this->price;
        return $html;
    }
}
$milck = new Product('молоко', 'продукты питания','67руб');
$wiscas = new Product('wiscas', 'корм для кошек', '20pуб');

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Class</title>
</head>
<body>
<?php echo 'Характеристика Audi:'.$Audi->getCar(). '<br>'; ?>
<?php echo 'Цена по скидке Audi:'.$Audi->getPrice() .'$'.'<br>'; ?>
<?php echo "<br>" ?>
<?php echo 'Характеристика Honda:'.$Honda->getCar().'<br>'; ?>
<?php echo 'Цена по скидке Honda:'.$Honda->getPrice() .'$'.'<br>'; ?>
<?php echo "<br>" ?>
<?php echo 'Характеристика теливизора LG:' . $LG->getTV() . '<br>'; ?>
<?php echo 'Цена по скидке LG:' . $LG->getPrice() . 'руб' . '<br>'; ?>
<?php echo "<br>" ?>
<?php echo 'Характеристика теливизора Sony:' . $Sony->getTV() . '<br>'; ?>
<?php echo 'Цена по скидке Sony:' . $Sony->getPrice() . 'руб' . '<br>'; ?>
<?php echo "<br>" ?>
<?php echo 'Характеристика Шариковой ручки "Parker":' . $Parker->getPen() . '<br>'; ?>
<?php echo 'Цена по скидке Шариковой ручки "Parker":' . $Parker->getPrice() . 'руб' . '<br>'; ?>
<?php echo "<br>" ?>
<?php echo 'Характеристика Шариковой ручки "WATERMAN":' . $WATERMAN->getPen() . '<br>'; ?>
<?php echo 'Цена по скидке Шариковой ручки "WATERMAN":' . $WATERMAN->getPrice() . 'руб' . '<br>'; ?>
<?php echo "<br>" ?>
<?php echo 'Утка  фирмы "duckGG":' . $duckGG->getDuck() . '<br>'; ?>
<?php echo 'Цена по скидке Утка  фирмы "duckGG":' . $duckGG->getPrice() . 'руб' . '<br>'; ?>
<?php echo "<br>" ?>
<?php echo 'Утка  фирмы "duckLL":' . $duckLL->getDuck() . '<br>'; ?>
<?php echo 'Цена по скидке Утка  фирмы "duckLL":' . $duckLL->getPrice() . 'руб' . '<br>'; ?>
<?php echo "<br>" ?>
<?php echo 'Продукты:' . $milck->getProduct() . '<br>'; ?>
<?php echo 'Продукты:' . $wiscas->getProduct() . '<br>'; ?>
<?php echo "<br>" ?>

</body>
</html>