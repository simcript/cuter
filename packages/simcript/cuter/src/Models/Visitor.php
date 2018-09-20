<?php

namespace Simcript\Cuter\Models;

use Illuminate\Database\Eloquent\Model;
class Visitor extends Model
{

    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'link_id',
        'referrer',
        'ip',
        'created_at',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'ip', 'id',
    ];

    /**
     * Get the link that visited the Visitor.
     */
    public function link(){
        return $this->belongsTo('App\Models\Link', 'id', 'link_id');
    }
}
