<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;
use App\Interfaces\ModelInterface as ModelInterface;

/**
 * Class Article.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class Article extends BaseModel implements ModelInterface, SluggableInterface
{
    use SluggableTrait;

    public $table = 'articles';
    protected $fillable = ['title', 'content', 'meta_keywords', 'meta_description', 'is_published'];
    protected $appends = ['url'];

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to' => 'slug',
    );

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'articles_tags');
    }

    public function category()
    {
        return $this->hasMany('App\Models\Category', 'id', 'category_id');
    }

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return 'blog/'.$this->attributes['slug'];
    }
    /**
     * Sync tag relation adding new tags as needed
     *
     * @param array $tags
     */
    public function syncTags(array $tags)
    {
      Tag::addNeededTags($tags);

      if (count($tags)) {
        $this->tags()->sync(
          Tag::whereIn('tag', $tags)->lists('id')->all()
        );
        return;
      }

      $this->tags()->detach();
    }

}
