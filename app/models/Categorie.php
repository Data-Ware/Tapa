<?php
class Categorie extends Eloquent{

	public $timestamps = false;


	protected $table='categories';
	protected $primaryKey='id_cat';
	protected $guarded = array();
	protected $fillable = ['desc'];


	public function blocks()
	{
		return $this->hasMany('Block', 'id_cat');
	}
}