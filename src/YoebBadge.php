<?php
namespace Yoeb\Badges;

use Yoeb\Badges\Model\YoebBadge as ModelYoebBadge;
use Yoeb\Badges\Model\YoebUserBadge;

class YoebBadge {

    public static function create($name = null, $image = null) {
        $data = ModelYoebBadge::create([
           "name"   =>  $name, 
           "image"  =>  $image, 
        ]);
        return $data;
    }
    
    public static function update($badgeId, $name = null, $image = null) {
        $data = ModelYoebBadge::where("id", $badgeId)->update([
           "name"   =>  $name, 
           "image"  =>  $image, 
        ]);
        return $data;
    }

    public static function delete($badgeId) {
        $data = ModelYoebBadge::where("id", $badgeId)->delete();
        return $data;
    }

    public static function all() {
        $data = ModelYoebBadge::get();
        return $data;
    }
    
    public static function get($id) {
        $data = ModelYoebBadge::where("id", $id)->first();
        return $data;
    }

    public static function getUserBadges($userId) {
        $data = YoebUserBadge::where("user_id", $userId)->with("badge_detail:id,name,image")->get(["user_id", "badge_id", "created_at"]);
        return $data;
    }

    public static function getBadgeUsers($badgeId) {
        $data = YoebUserBadge::where("badge_id", $badgeId)->get(["user_id", "badge_id", "created_at"]);
        return $data;
    }

    public static function add($userId, $badgeId) {
        $data = YoebUserBadge::create([
            "user_id"       => $userId,
            "badge_id"      => $badgeId,
        ]);
        return $data;
    }

    public static function remove($userId, $badgeId) {
        $data = YoebUserBadge::where("user_id", $userId)->where("badge_id", $badgeId)->delete();
        return $data;
    }

}

?>