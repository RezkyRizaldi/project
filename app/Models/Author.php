<?php

namespace App\Models;

use Encore\Admin\Traits\Resizable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\File;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Author extends Model
{
    use HasFactory;
    use HasSlug;
    use Resizable;

    /**
     * @var array<int, string>
     */
    protected $fillable = ['name', 'slug', 'image'];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime:d-m-Y',
        'updated_at' => 'datetime:d-m-Y',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public static function boot(): void
    {
        parent::boot();

        static::deleting(function (Author $author) {
            $image = public_path("storage/{$author->image}");

            if (File::exists($image) && ! empty($author->image)) {
                unlink($image);
            }
        });
    }
}
