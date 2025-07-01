<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
protected $fillable = [
    'name',
    'logo',
    'type',
    'size',
    'sector',
    'address',
    'city',
    'country',
];
public function jobs()
{
    return $this->hasMany(Job::class);
}

}
