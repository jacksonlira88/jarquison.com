<?php

class ServiceServer {
	protected function displayJSON($data){
		header("Content-type: text/plain");
		echo json_encode($data);
		return;
	}
}
