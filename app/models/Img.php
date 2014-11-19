<?php

class Img extends Eloquent 
{
	public $timestamps = false;	


	protected $table = 'imgs';
	protected $primaryKey = 'id';
	protected $guarded = array();
	protected $fillable = ['a_path','title','img_path','alt','id_block'];


	public function blocks()
	{
		return $this->beLongsTo('Block','id_block');
	}


	
}