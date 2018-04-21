<?php
App::uses('AppModel', 'Model');

/**
 * Registration Model
 *
 */
class Registration extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
  
     public $avatarUploadDir = 'img/avatars';
    
	public $validate = array(
       
    );
	
	function removTags ($data){ //pr($data);
       if (!empty($data)) {
            $index = key($data); 
            preg_match('/<[^>]*script/', $data[$index], $matches);
            if (!empty($matches))
                return false;
            else
                return true;
        } else
            return true;
    }
	
	
}
