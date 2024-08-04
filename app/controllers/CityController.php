<?php

class CityController extends Controller
{

    
    public function getCities(){
        $cityModel = $this->Model('CityModel');
        $cities = $cityModel->selectCities();

    }

}