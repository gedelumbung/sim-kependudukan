<?php class UserCmsIdentity extends CUserIdentity{	
	private $_id;
	public function authenticate()	{		
		$user=Users::model()->find('LOWER(username)=?',array(strtolower($this->username)));		
		if($user===null)			
			$this->errorCode=self::ERROR_USERNAME_INVALID;		
		else if(!$user->validatePassword($this->password))			
			$this->errorCode=self::ERROR_PASSWORD_INVALID;		
		else		{			
			$this->_id=$user->id;			
			$this->username=$user->username;			
			$this->setState('nama_lengkap', $user->nama);			
			$this->setState('username', $user->username);				
			$this->setState('email', $user->email);						
			$this->setState('status', $user->status);		
			$this->setState('status_user', "user_cms");			
			$this->setState('route_admin', "cms");			
			$this->errorCode=self::ERROR_NONE;
		}		
		return $this->errorCode==self::ERROR_NONE;	
	}	

	public function getId()	{		
		return $this->_id;	
	}
}