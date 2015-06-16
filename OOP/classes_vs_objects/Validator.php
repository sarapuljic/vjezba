<?php

class Validator {
	
	private $errors = array();
	
	public function validate(Array $data, Array $rules){
	
		$valid = true;
	
		foreach($rules as $item=>$ruleset){
			$ruleset = explode('|', $ruleset);
		}
		
		return $valid;
	}
	
	public function getErrors(){
	
		return $this->errors;
	
	}
}

