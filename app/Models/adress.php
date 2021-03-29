<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {
    protected $table ="adresses";
    public $timestamps = false;
    protected $fillable = ['user_id', 'name', 'description'];


    public function user() {
        return $this->belongsTo(User::class);
    }
}