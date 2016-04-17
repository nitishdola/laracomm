<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table  		=   'categories';
	public static $rules 	= [
	'name' => 'required|min:2|max:255|unique:categories,name,:id',
	'description'   =>  'max:255',
	];

	protected $guarded = ['id', '_token', '_method'];
	protected $fillable = ['name', 'status', 'description'];
}
