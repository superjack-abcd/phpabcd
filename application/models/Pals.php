<?php

class Pals_model extends BaseModel {

    protected $table = 'pals';

    public function __construct() {
        parent::__construct();
    }

    public function get_by_id($id) {
        $this->db->where('pals.id', $id);
        $this->db->select('pals.*,cities.name');
        $this->db->from('pals');
        $this->db->join('cities', 'pals.city_id = cities.id');
        $query = $this->db->get();
        return $query->row();
    }

    public function get_all() {
        $this->db->select('pals.*,cities.name');
        $this->db->from('pals');
        $this->db->join('cities', 'pals.city_id = cities.id');
        $query = $this->db->get();
        return $query->result();
    }
}