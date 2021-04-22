<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player_model extends CI_Model {
    function search($input)
    {
        $query = "SELECT * FROM players WHERE ";

        if(isset($input['name']) AND $input['name'] !== '')
        {
            $query .= "first_name LIKE '%" . $input['name'] . "%' OR last_name LIKE '%" . $input['name'] . "%' ";
        }

        if(isset($input['female']) AND isset($input['male']))
        {
            return $this->db->query("SELECT * FROM players")->result_array();
        }
        if(isset($input['female']) AND !isset($input['male']))
        {
            $query .= "gender = 'Female' ";
        }
        if(!isset($input['female']) AND isset($input['male']))
        {
            $query .= "gender = 'Male' ";
        }
        if(isset($input['basketball']))
        {
            $query .= "AND sports = 'Basketball' ";
        }
        if(isset($input['volleyball']))
        {
            $query .= "AND sports = 'Volleyball' ";
        }
        if(isset($input['baseball']))
        {
            $query .= "AND sports = 'Baseball' ";
        }
        if(isset($input['soccer']))
        {
            $query .= "AND sports = 'Soccer' ";
        }
        if(isset($input['football']))
        {
            $query .= "AND sports = 'Football' ";
        }
        return $this->db->query($query)->result_array();
    }
}

