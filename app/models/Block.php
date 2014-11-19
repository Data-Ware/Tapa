<?php
class Block extends Eloquent
{
protected $table = 'blocks';
protected $primaryKey = 'id_block';
public $timestamps = false;

	public function categories()
	{
		//Categorie = model , table content=id_cat
		return $this->belongsTo('Categorie', 'id_cat');
	}

	public function blockheaders()
	{
		return $this->hasMany('BlockHeader', 'id_block');
	}

	public function items()
	{
		return $this->hasMany('Item', 'id_block');
	}

	public function imgs()
	{
		return $this->hasMany('Img', 'id_block');
	}




}