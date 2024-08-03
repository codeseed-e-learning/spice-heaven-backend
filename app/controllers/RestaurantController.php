<?php

class RestaurantController extends Controller {
    public function onboard() {
        
    }
    public function onboardRestaurant()
    {
        $userModel = $this->model('RestaurentModel');
        $dishes = $userModel->selectRestors();

        print_r(json_encode($dishes));
    }
}
