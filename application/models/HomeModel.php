<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HomeModel  extends CI_model {

    public function addTransaction($data)
    {
		$this->db->set('transaction_no',$data['transaction_no']);
		return $this->db->insert('transactions');
	}
}
