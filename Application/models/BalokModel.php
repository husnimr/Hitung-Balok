// application/models/BalokModel.php

<?php
class BalokModel extends CI_Model {
    public function simpan_hasil($data) {
        $this->db->insert('hasil_balok', $data);
        return $this->db->insert_id();
    }
}
