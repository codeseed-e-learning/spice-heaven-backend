<?php

class UsersController extends Controller {
    public function index() {
        $userModel = $this->model('ContactModel');
        $dishes = $userModel->getContacts();

        print_r(json_encode($dishes));

    }
    public function insertUser(){
        echo "hello world";

    }
}
