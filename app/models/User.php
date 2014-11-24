<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{
	public $timestamps = false;

	//protected $guarded = array();
	public static $rules = array(
		'username' => 'required',
		'password' => 'required',
		'name' => 'required',
		'role_id' => 'required',
		);

	protected $table = 'users';
	protected $fillable = array('username', 'password','name','role_id');
	protected $primaryKey = 'id';

	

	
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getAuthPassword()
	{
		return $this->password;
	}

	public function getAuthRole()
	{
		return $this->role_id;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	public function getReminderEmail()
	{
		return $this->email;
	}

	//insert md5 encryption code here
	public function setPasswordAttribute($pass){
		$this->attributes['password'] = Hash::make($pass);

	}

	
}