<?php

class RestaurentModel extends Model
{
    public function selectRestors()
    {
        $result = $this->db->query("SELECT * FROM restaurants");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}

?>