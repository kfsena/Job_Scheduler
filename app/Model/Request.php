<?php

class Request extends AppModel{
	public $name = 'Request';
	public $primaryKey = 'id';

	public function getData(){
		$data = $this->find('all'); // fetches data from request table
		return $data;
	}

	public function deleteRequest($id){
		$this->delete($id);
		return;
	}
}

?>