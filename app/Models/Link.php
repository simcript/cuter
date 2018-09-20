<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Link extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url',
        'link',
        'registrantIp',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'registrantIp',
    ];

    /**
     * Get the visitors a link.
     */
    public function visitors(){
        return $this->hasMany('App\Models\Visitor');
    }
}
