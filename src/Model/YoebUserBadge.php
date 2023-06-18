<?php
namespace Yoeb\Badges\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoebUserBadge extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "badge_id",
    ];

    public function badge_detail() {
        return $this->hasOne(YoebBadge::class, "id", "badge_id");
    }

    public function user_detail() {
        return $this->hasOne(User::class, "id", "user_id");
    }
}
