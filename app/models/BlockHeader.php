<?php

class BlockHeader extends Eloquent {

public $timestamps = false;

protected $table = 'block_headers';
protected $primaryKey = 'id';
protected $guarded = array();
protected $fillable =['header','sub_header','price','id_block'];

public function blocks()
{
	return $this->belongsTo('Block','id_block');
}

	


}