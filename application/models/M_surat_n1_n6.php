<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_surat_n1_n6 extends CI_Model
{

    
    function save($data, $table)
    {

        $this->db->insert($table, $data);
    }
    
    }
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function get_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

