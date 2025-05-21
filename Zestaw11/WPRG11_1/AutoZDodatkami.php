<?php

class AutoZDodatkami extends NoweAuto{
    public $alarm;
    public $radio;
    public $klimatyzacja;
    public function __construct($model_auta, $cena_w_EUR, $ktualny_kurs_EUR_na_PLN, $alarm, $radio, $klimatyzacja){
        parent::__construct($model_auta, $cena_w_EUR, $ktualny_kurs_EUR_na_PLN);
        if(is_float($alarm) or is_int($alarm)){
            $this->alarm = $alarm;
        }
        else throw new Exception("Zly typ: alarm");
        if(is_float($radio) or is_int($radio)){
            $this->radio = $radio;
        }
        else throw new Exception("Zly typ: radio");
        if (is_float($klimatyzacja) or is_int($klimatyzacja)){
            $this->klimatyzacja = $klimatyzacja;
        }
        else throw new Exception("Zly typ: klimatyzacja");
    }
    public function obliczCene(){
        $cena = parent::obliczCene();
        $cena += ($this->klimatyzacja + $this->radio + $this->klimatyzacja)*$this->aktualny_kurs_EUR_na_PLN;
        return $cena;
    }
}