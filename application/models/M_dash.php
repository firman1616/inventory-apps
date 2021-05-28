<?php

class M_dash extends CI_Model

{
    public function total_all_item()
    {
        return $this->db->query("SELECT * FROM tbl_item")->num_rows();
    }

    public function item_ga()
    {
        return $this->db->query("SELECT * FROM tbl_item WHERE dept_item = '1'")->num_rows();
    }

    public function item_it()
    {
        return $this->db->query("SELECT * FROM tbl_item WHERE dept_item = '2'")->num_rows();
    }

    public function item_main()
    {
        return $this->db->query("SELECT * FROM tbl_item WHERE dept_item = '3'")->num_rows();
    }

    public function item_hse()
    {
        return $this->db->query("SELECT * FROM tbl_item WHERE dept_item = '20'")->num_rows();
    }
}