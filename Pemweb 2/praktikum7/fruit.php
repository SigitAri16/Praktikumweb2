<?php 
class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    
    protected function getInfo()
    {
        echo "Buah $this->name ini \n berwarna $this->color \n";
    }
}

class Price extends Fruit{
    public $price;
    public $weight;

    public function __construct($name, $color, $price, $weight)
    {
        parent::__construct($name, $color);
        $this->price = $price;
        $this->weight = $weight;
    }

    public function getPrice()
    {
        $this->getInfo();
        echo "Harga buahnya $this->price \n";
        echo "Berat Buahnya $this->weight \n";
    }
}

$semangka = new Fruit("Mangga", "Hijau");
// $semangka->getInfo();

$mangga = new Price("Mangga", "Merah", 15000, "1kg");
// $mangga->getInfo();
$mangga->getPrice();


?>