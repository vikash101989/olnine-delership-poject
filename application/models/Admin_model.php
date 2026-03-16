
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function insert_entry($table = '', $data = array()) {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    /* get data from table
     * reqired parameter table name, select field value, condition
     * response array
     */

    public function get_data($table = '', $field_value = '', $where = array(), $where_in = array(), $order_by = array()) {

        $type = $this->input->get('type');
        $this->db->select($field_value);
        $this->db->from($table);
        if (!empty($where)) {
            if (isset($where['status']) && $where['status'] == '') {
                unset($where['status']);
                $this->db->where($where);
            } else {
                $this->db->where($where);
            }
        }
        if (!empty($where_in)) {
            $this->db->where_in($where_in);
        }
        if($type){
            switch($type){
                case '7days':
                    $this->db->where('DATE(created_at) >= CURDATE() - INTERVAL 7 DAY');
                    break;
                case '3days':
                    $this->db->where('DATE(created_at) >= CURDATE() - INTERVAL 3 DAY');
                    break;
                case 'yesterday':
                    $this->db->where('DATE(created_at) = CURDATE() - INTERVAL 1 DAY');
                    break;
                case 'today':
                    $this->db->where('DATE(created_at) = CURDATE()');
                    break;
                default:
                    break;
            }
        }
        if(!empty($order_by)){
            foreach($order_by as $key => $value){
                $this->db->order_by($key, $value);
            }
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    /**
     * Get an array of values for a single column from a table.
     *
     * @param string $table
     * @param string $column
     * @param array $where
     * @return array
     */
    public function get_column_values($table = '', $column = '', $where = array()) {
        if (empty($table) || empty($column)) {
            return [];
        }

        $this->db->select($column);
        $this->db->from($table);
        if (!empty($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get();
        $rows = $query->result_array();

        return array_column($rows, $column);
    }

    

    function update_data($table = '', $data = array(), $where = array()) {
        $this->db->where($where);
        $this->db->update($table, $data);
        return ($this->db->affected_rows() > 0) ? 1 : 0;
    }
    function row_counts($table = '', $where = array(), $groupby = array()){
        $this->db->select('status, count("status") as row_count');
        $this->db->from($table);
        if (!empty($where)) {
            $this->db->where($where);
        }
        if (!empty($groupby)) {
            $this->db->group_by($groupby);
        }
        $this->db->order_by("status","ASC");
        $query = $this->db->get();
        //echo $this->db->last_query();exit;
        return $query->result_array();
    }

    function get_today($table = '', $field_value = '', $where = array(), $count = false){
        $this->db->select($field_value);
        $this->db->from($table);
        if (!empty($where)) {
            $this->db->where($where);
        }
        $this->db->where("DATE(`created_at`) = CURDATE()");
        $query = $this->db->get();
        if($count){
            return $query->num_rows();
        }
        return $query->result_array();
    }
    function pay_data($data = '', $where = array()){
        $this->db->select('*');
        $this->db->from('payment');
        if (!empty($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            $this->update_data('payment', $data, $where);
        } else {
            $number = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5);
            $string = substr(microtime()*1000000,0,10);
            $data['userid'] = $where['userid'];
            $data['orderid'] = $number.$string;
            $data['status'] = 1;
            $data['update_by'] = $data['update_by'];
            $data['created_at'] = date('Y-m-d');
            $this->insert_entry('payment', $data);
        }
        //echo $this->db->last_query();exit;
    }

    public function get_application($table = '', $field_value = '', $where = array()) {
        $this->db->select($field_value);
        $this->db->from($table);
        $this->db->where($where);
        $this->db->join('payment','payment.userid = application.id', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function de_data($table, $where = ''){
        if($table){
            $this->db->delete($table, $where);
        }
        
    }
    public function get_taskdetails($assigntaskis = '') {
        $this->db->select('ta.*, t.name as task_title, a.name as user_name');
        $this->db->from('task_assign ta');
        $this->db->join('tasks t','t.id = ta.taskid');
        $this->db->join('application a','ta.userid = a.id');
        if($assigntaskis){
            $this->db->where("ta.id = ". $assigntaskis);
        }
        $query = $this->db->get();
       //echo $this->db->last_query();exit;
        return $query->result_array();
    }
    
    public function get_singledata($table = '', $field_value = '', $where = array(), $where_in = array()) {
        $this->db->select($field_value);
        $this->db->from($table);
        if (!empty($where)) {
            if (isset($where['status']) && $where['status'] == '') {
                unset($where['status']);
                $this->db->where($where);
            } else {
                $this->db->where($where);
            }
        }
        if (!empty($where_in)) {
            $this->db->where_in($where_in);
        }
        $query = $this->db->get();
        return $query->row();
    }

    function delete_data($table = '', $where = array()) {
        $this->db->where($where);
        $this->db->delete($table);
        return ($this->db->affected_rows() > 0) ? 1 : 0;
    }

    function custom_query($query = '') {
        $query = $this->db->query($query);
        return $query->result_array();
    }
}

?>