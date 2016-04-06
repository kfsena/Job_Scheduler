<?php
class JobTask extends Shell{
	var $uses = array('Request','Response');

	public function runJob(){
		$data = $this->Request->getData();

		foreach($data as $data){
			$resp = $this->Response->updateResponse($data);
			if($resp == true){
				$this->Request->deleteRequest($data['Request']['id']);
				$this->out('Data successfully moved');
			}
			else{
				$this->out('Failed to move data');
			}
		}
	}
}
?>