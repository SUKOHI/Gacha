<?php namespace Sukohi\Gacha;

class Gacha {

	private $_length;
	private $_mode, $_case, $_characters = '';
	private $_numeric_characters = '0123456789';
	private $_alphabet_characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	
	public function __toString() {
		
		$characters = '';
		
		if(!empty($this->_characters)) {
			
			$characters = $this->_characters;
			
		} else {

			if($this->_mode == 'alphabet') {
					
				$characters = $this->_alphabet_characters;
					
			} else if($this->_mode == 'numeric') {
				
				$characters = $this->_numeric_characters;
					
			} else {
					
				$characters = $this->_numeric_characters . $this->_alphabet_characters;
					
			}
			
		}
		
		$random = '';
		$max_length = mb_strlen($characters) - 1;
		
		for ($i = 0; $i < $this->_length; $i++) {
			
			$random .= $characters[rand(0, $max_length)];
			
		}
		
		if($this->_case == 'upper') {
			
			$random = strtoupper($random);
			
		} else if($this->_case == 'lower') {
			
			$random = strtolower($random);
			
		}
		
		$this->_mode = $this->_case = $this->_characters = '';
		return $random;
		
	}
	
    public function generate($length=7) {
    	
    	$this->_length = $length;
    	return $this;
    	
    }
	
    public function characters($characters) {
    	
    	$this->_characters = $characters;
    	return $this;
    	
    }
    
    public function numeric() {

    	$this->_mode = 'numeric';
    	return $this;
    	
    }
    
    public function alphabet() {
    	
    	$this->_mode = 'alphabet';
    	return $this;
    	
    }
    
    public function upperCase() {
    	
    	$this->_case = 'upper';
    	return $this;
    	
    }
    
    public function lowerCase() {
    	
    	$this->_case = 'lower';
    	return $this;
    	
    }

}