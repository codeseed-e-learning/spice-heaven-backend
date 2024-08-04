<?php

class RestaurentModel extends Model
{

    public function SelectData($tableName){
        $result = $this->db->query("SELECT * FROM $tableName");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function selectRestors()
    {
        print_r($this->SelectData("menu_items"));
    }
    public function selectDishes()
    {
        print_r($this->selectData("menu_items"));
    }
    public function selectAllRestaurants()
    {
        return $this->SelectData("restaurants");
    }

}

?>