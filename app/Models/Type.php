<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use Illuminate\Support\Str;

class Type extends Model
{
    protected $fillable = ['name', 'slug'];
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    use HasFactory;

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
}
