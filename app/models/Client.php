<?php

class Client extends Eloquent
{
	protected $guarded 	= array('client_id');
	protected $fillable = array(
		'client_name',
		'contact_person',
		'contact_number',
		'email_address'
	);

	/**
	 * The primary key used in the model
	 * @var string
	 */
	protected $primaryKey = 'client_id';

	/**
	 * The table used in the model
	 * @var string
	 */
	public $table = 'clients';

	/**
	 * Activate the timestamp
	 * @var boolean
	 */
	public $timestamps = true;

	public static $rules = array(
		'client_name' 		=> 'required|max:64',
		'contact_person'	=> 'required|max:64',
		'contact_number' 	=> 'required|max:20',
		'email_address'  	=> 'required|max:64|email'
	);
}