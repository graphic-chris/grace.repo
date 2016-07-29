<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;
use App\Interfaces\ModelInterface as ModelInterface;

/**
 * Class Category.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class Category extends Model implements ModelInterface, SluggableInterface
{
    use SluggableTrait;

    public $table = 'categories';
    public $timestamps = false;
    protected $fillable = ['title'];
    protected $appends = ['url'];

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to' => 'slug',
    );

    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return 'category/'.$this->attributes['slug'];
    }

    /**
     * Relationship with the product model.
     *
     * @author    Andrea Marco Sartori
     * @return    Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(App\Models\Product::class);
    }
}
