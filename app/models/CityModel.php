<?php 


class CityModel extends Model{
    public function selectData($tableName){
        $result = $this->db->query("SELECT * FROM $tableName");

        if ($result === false) {
            // Handle the error appropriately
            echo "Error executing query: " . $this->db->error;
            return [];
        }

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function selectCities()
    {
        print_r(json_encode($this->selectData("cities")));
    }
}