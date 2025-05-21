<?php

class NoweAuto{
    public $model_auta;
    public $cena_w_EUR;
    public $aktualny_kurs_EUR_na_PLN;

    /**
     * @throws Exception
     */
    public function __construct($model_auta, $cena_w_EUR, $aktualny_kurs_EUR_na_PLN){
        if(is_string($model_auta)){
            $this->model_auta = $model_auta;
        }
        else throw new Exception("Zly typ: model_auta");
        if(is_float($cena_w_EUR) or is_int($cena_w_EUR)){
            $this->cena_w_EUR = $cena_w_EUR;
        }
        else throw new Exception("Zly typ: cena_w_EUR");
        if(is_float($aktualny_kurs_EUR_na_PLN) or is_int($aktualny_kurs_EUR_na_PLN) ){
            $this->aktualny_kurs_EUR_na_PLN = $aktualny_kurs_EUR_na_PLN;
        }
        else throw new Exception("Zly typ: aktualny_kurs_EUR_na_PLN");
    }
    public function obliczCene(){
        return $this->cena_w_EUR*$this->aktualny_kurs_EUR_na_PLN;
    }
}