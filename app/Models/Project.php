<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Project extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'title', 'slug', 'link', 'image', 'description',];

    public static function getSlug($title)
    {
        $slug = Str::of($title)->slug('-');
        $count = 1;

        while (Project::where("slug", $slug)->first()) {
            $slug = Str::of($title)->slug('-') . "-{$count}";
            $count++;
        }
        return $slug;
    }
}
