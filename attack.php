<?php


class Attack
{
 public  $attackName;
 public  $attackDamage;

    public function __construct($an,$ad)
    {
       $this->attackName = $an;
       $this->attackDamage = $ad;
    }

    public function attackTaget($attack,$attackDamage,$target){

        echo "attack on" . $this->pokemon;


    }

}