<?php

class ContactModel extends Model {
    public function getContacts(): array {
        $result = $this->db->query("SELECT * FROM menu_items");

        if ($result === false) {
            // Handle the error appropriately
            echo "Error executing query: " . $this->db->error;
            return [];
        }

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

?>
