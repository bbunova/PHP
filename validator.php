<?php

	class Validate 
	{
		public $errors = array(
			'title' => "",
			'description' => "",
			'lecturer-name' => "",
			'type' => "",
			'course' => "",
			'program' => "",
			'lecturer-email' => "",
		);

		function validate(){

			$params = array();
			$params = $_POST;

			if (isset($params['submit']) && $params['submit'] == 'Beatris Bunova') {
				var_dump($params);

				if (strlen($params['title']) > 20) {
					$this->errors['title'] = "Title length must be at most 20 symbols.";
				}
				if ($params['title'] == "" || $params['title'] == "Title") {
					$this->errors['title'] = "You must enter a title!";
				}
				if (strlen($params['description']) > 200) {
					$this->errors['description'] = "Description length must be at most 200 symbols.";
				}
				if ($params['description'] == "" || $params['description'] == "Description") {
					$this->errors['description'] = "You must write a description!";
				}
				if (strlen($params['lecturer-name']) > 20) {
					$this->errors['lecturer-name'] = "Name length must be at most 20 symbols.";
				}
				if ($params['lecturer-name'] == "" || $params['lecturer-name'] == "Lecturer's name") {
					$this->errors['lecturer-name'] = "You must enter the name of the lecturer!";
				}
				if (isset($params['type'])) {
					$this->errors['type'] = "";
				} 
				else {
					$this->errors['type'] = "You must choose.";
				}
				if (isset($params['course'])) {
					$this->errors['course'] = "";
				} 
				else {
					$this->errors['course'] = "You must choose.";
				}
				if (isset($params['program'])) {
					$this->errors['program'] = "";
				} 
				else {
					$this->errors['program'] = "You must choose.";
				}
				if (preg_match('/\w+@\w+\.\w+/', $params['lecturer-email']) == false) {
					$this->errors['lecturer-email'] = "The e-mail you entered is not valid.";
				}
			}
		}
	}
?>