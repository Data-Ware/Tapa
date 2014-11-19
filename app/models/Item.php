<?php

class Item extends Eloquent
{
	public $timestamps = false;


	protected $table = 'items';
	protected $primaryKey = 'id_item';
	protected $guarded = array();
	protected $fillable = ['desc', 'id_block'];

	public function blocks()
	{
		return $this->belongsTo('Block', 'id_block' );
	}
}