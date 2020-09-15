<?php
//abstraktní trida ustredny a v ni protected $napetí
abstract class  ustredny_Mestak_Michal{
    
    protected $napeti_Mestak_Michal;
    /**
     * paramert muze byt jen float
     * kontrola taky jen float
     * pri cteni to samé
 */
    public function setNapeti_Mestak_Michal(float $napeti_Mestak_Michal) : float{
        $this->napeti_Mestak_Michal = $napeti_Mestak_Michal;
    }
    //precteni napeti
    public function getNapeti_Mestak_Michal() : float {
        return $this-> napeti_Mestak_Michal;
    }
}
// class ustredna se dedi do abs. class ustredny
class  ustredna_Mestak_Michal extends ustredny_Mestak_Michal{
   public $Napeti_Mestak_Michal= 12;
   //nastaveni konstanty type
   const TYPE ="5";
}
//class ustredna dedi interface od abs class ustredny
interface ustredna_Mestak_Michal extends ustredny_Mestak_Michal{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Mestak_Michal);
}

//pres vardummp napise hodnotu v type a hodnotu napeti v ustredne
 var_dump (ustredna_Mestak_Michal::TYPE);
 var_dump (ustredna_Mestak_Michal::Napeti_Mestak_Michal);
?> 
