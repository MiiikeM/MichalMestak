
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<?php

// abstraktni trida ustredny_Mestak_Michal s protected $napetí
abstract class  ustredny_Mestak_Michal{

    protected $napeti_Mestak_Michal;
    //nastavení napeti
    public function setNapeti_Mestak_Michal($napeti_Mestak_Michal){
        $this->napeti_Mestak_Michal = $napeti_Mestak_Michal;
    }

    //precte napeti_Mestak_Michal
    public function getNapeti_Mestak_Michal() : {
        return $this-> Napeti_Mestak_Michal;
    }
}

// class ustredna se dedi do abstraktni class ustredny
class  ustredna_Mestak_Michal extends ustredny_Mestak_Michal{
  public $Napeti_Mestak_Michal= 8;
   //nastaveni konstanty TYPY
   const TYPE ="4";
}

// class i ustredna dedi interface od abst. class ustredny
interface iustredna_Mestak_Michal extends ustredny_Mestak_Michal{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Mestak_Michal);
}


// pres vardummp se vypise hodnota v type a hodnotu napeti na ustredne
 var_dump (ustredna_Mestak_Michal:TYPE);
 var_dump ($Napeti_Mestak_Michal);
 //výpis hodnoty TYPE a $napeti_Mestak_Michal přes var_dump 

 <?
