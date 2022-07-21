<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SourceListItem extends Model
{
    use HasFactory;

    public $fillable = ['url', 'source', 'category', 'parseTitle', 'parseBody', 'parseLink'];
}
