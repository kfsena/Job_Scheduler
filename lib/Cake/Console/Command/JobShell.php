<?php
class JobShell extends Shell{
	var $tasks = array('Job'); // importing JobTask into JobShell
	function main(){
		$this->Job->runJob();
	}
}
?>