<?php
class Ubezpieczenie extends AutoZDodatkami{
    public $proc_wart_ubez;
    public $liczba_lat_posiadania;
    public function __construct($model_auta, $cena_w_EUR, $ktualny_kurs_EUR_na_PLN, $alarm, $radio, $klimatyzacja, $proc_wart_ubez, $liczba_lat_posiadania){
        parent::__construct($model_auta, $cena_w_EUR, $ktualny_kurs_EUR_na_PLN, $alarm, $radio, $klimatyzacja);
        if(is_float($proc_wart_ubez) or is_int($proc_wart_ubez)){
            $this->proc_wart_ubez = $proc_wart_ubez;
        }
        else throw new Exception("Zly typ: ubezpieczenie");
        if(is_int($liczba_lat_posiadania)){
            $this->liczba_lat_posiadania = $liczba_lat_posiadania;
        }
        else throw new Exception("Zly typ: liczba lat posiadania");
    }
    public function ObliczCene(){
        $cena=$this->proc_wart_ubez*0.01*parent::ObliczCene()*((100-$this->liczba_lat_posiadania)/100);
        return $cena;
    }
}