<?php namespace Simcript\Cuter\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'base_url',
        'url',
        'link',
        'registrant_ip',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'registrant_ip', 'id', 'updated_at', 'deleted_at'
    ];

    /**
     * Get the visitors a link.
     */
    public function visitors(){
        return $this->hasMany('App\Models\Visitor');
    }
}
