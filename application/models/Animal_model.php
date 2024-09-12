<?php
class Animal_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function is_name_exists($name, $id = null)
    {
        $this->db->where('name', $name);
        if ($id) {
            $this->db->where('id !=', $id);
        }
        $query = $this->db->get('animals');
        return $query->num_rows() > 0;
    }

    public function insert_animal($data)
    {
        return $this->db->insert('animals', $data);
    }

    public function update_animal($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('animals', $data);
    }

    public function get_animal($id)
    {
        return $this->db->get_where('animals', ['id' => $id])->row_array();
    }

    public function get_all_animals()
    {
        return $this->db->get('animals')->result_array();
    }

    public function delete_animal($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('animals');
    }
}
