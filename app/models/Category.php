<?php

class Category extends \Eloquent {
    protected $table = 'categories';
    protected $fillable = [
        'name',
    ];
    
    public static $rules = [
        'name' => 'required',
    ];
    
    public function posts()
    {
        return $this->hasMany('Post');
    }
    
}