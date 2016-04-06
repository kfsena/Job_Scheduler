<?php

class Response extends AppModel{
	public $name = 'Response';
	public $primaryKey = 'id';

	public function updateResponse($data){
		$data['Response'] = $data['Request'];
		$data['Response']['status'] = 'done';
		if($this->saveAll($data)){
			return true;
		}
		else{
			return false;
		}
	}

	
}

?>