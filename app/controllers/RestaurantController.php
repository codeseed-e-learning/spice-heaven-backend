<?php

class RestaurantController extends Controller
{
    public function allRestos()
    {
        $restoModel = $this->model('RestaurentModel');
        $restaurants = $restoModel->selectAllRestaurants();
        print_r(json_encode($restaurants));
    }
    public function onboardRestaurant()
    {
        $userModel = $this->model('RestaurentModel');
        $cities = $userModel->selectCities();
        print_r(json_encode($cities));
    }
}
