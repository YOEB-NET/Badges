<?php
namespace Yoeb\Badges\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoebBadge extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "image",
    ];
}
