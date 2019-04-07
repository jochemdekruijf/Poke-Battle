<?php 

/**
 * 
 */
class Resistance {

  public  $energyType;
  public $ResistanceValue;

	
	function __construct($et,$rv)
	{
		$this->energyType = $et;
        $this->ResistanceValue = $rv;
	}
}



 ?>