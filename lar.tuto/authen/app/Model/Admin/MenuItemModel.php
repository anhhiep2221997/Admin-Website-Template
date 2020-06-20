<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class MenuItemModel extends Model
{
    //
    public $table='menu_items';


    public static function outputLevelCategories($input_categories, &$output_categories, $parent_id = 0, $lvl = 1) {

        if (count($input_categories) > 0) {
            foreach ($input_categories as $key =>  $category) {
                $category = (array) $category;
                if ($category['parent_id'] == $parent_id) {
                    $category['level'] = $lvl;
                    $output_categories[] = (array) $category;
                    unset($input_categories[$key]);

                    $new_parent_id = $category['id'];
                    $new_level = $lvl + 1;
                    self::outputLevelCategories($input_categories, $output_categories, $new_parent_id, $new_level);
                }
            }
        }


    }

    public static function outputLevelCategoriesExcept($input_categories, &$output_categories, $parent_id = 0, $lvl = 1, $except) {

        if (count($input_categories) > 0) {
            foreach ($input_categories as $key => $category) {
                if ($category['parent_id'] == $parent_id) {
                    $category['level'] = $lvl;
                    if ($category['id'] != $except) {
                        $output_categories[] = (array)$category;
                    }
                    unset($input_categories[$key]);

                    if ($category['id'] != $except)  {
                        $new_parent_id = $category['id'];
                        $new_level = $lvl + 1;
                        self::outputLevelCategoriesExcept($input_categories, $output_categories, $new_parent_id, $new_level, $except);
                    }

                }
            }
        }

    }

    public static function getMenuItemRecursiveExcept($except) {
        $result = array();
        $source = MenuItemModel::all()->toArray();

        self::outputLevelCategoriesExcept($source, $result, 0, 1, $except);


        return $result;
    }

    public static function getMenuItemRecursive() {
        $result = array();
        $source = MenuItemModel::all()->toArray();

        self::outputLevelCategories($source, $result);

        return $result;
    }


    public static function getTypeOfMenuItem(){
        $types=array();
        $types[1]='shop category';
        $types[2]='shop product';
        $types[3]='Content category';
        $types[4]='Content post';
        $types[5]='Content page';
        $types[6]='Content tag';
        $types[7]='Custom Link';
        return $types;
    }

}
