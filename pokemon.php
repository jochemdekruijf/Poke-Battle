<?php 

class Pokemon {

  public $name;
  publiC $hitpoints;
  public $energyType;
  public $weakness;
  public $oneliner;
  public $resistance;
 


   public function __construct($name, $hitpoints, $energyType, $weakness,$oneliner,$resistance)
    {
        $this->name = $name;
        $this->hitpoints = $hitpoints;
        $this->energyType = $energyType;
        $this->weakness = $weakness;
        $this->oneliner = $oneliner;
        $this->resistance = $resistance;
    }

    public function __toString() {
        return json_encode($this);
    }

    public function sayOneliner()
    {
        echo '<h2>' . $this->oneliner . '</h2>';
    }

     public function receiveDamage($hp,$damage,$target)
      {
       
       $taget->hitpoints = $hp - $damage;

    }
 }


 ?>