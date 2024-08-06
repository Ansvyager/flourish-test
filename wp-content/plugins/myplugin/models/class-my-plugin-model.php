<?php

if (!defined('ABSPATH')) {
    exit;
}
class My_Plugin_Model
{
    public static function create($name, $position, $office, $age, $start_date, $salary)
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'my_plugin_items';

        // Get the current maximum value of 'no' and increment it by 1
        $max_no = $wpdb->get_var("SELECT MAX(no) FROM $table_name");
        $new_no = is_null($max_no) ? 1 : $max_no + 1;

        $wpdb->insert($table_name, [
            'name' => $name,
            'position' => $position,
            'office' => $office,
            'age' => $age,
            'start_date' => $start_date,
            'salary' => $salary,
            'no' => $new_no,
            'status' => 'unpublished'
        ]);
    }

    public static function update($id, $name, $position, $office, $age, $start_date, $salary)
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'my_plugin_items';

        $wpdb->update($table_name, [
            'name' => $name,
            'position' => $position,
            'office' => $office,
            'age' => $age,
            'start_date' => $start_date,
            'salary' => $salary
        ], ['id' => $id]);
    }

    public static function delete($id)
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'my_plugin_items';

        $wpdb->delete($table_name, ['id' => $id]);
    }

    public static function get_all()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'my_plugin_items';

        return $wpdb->get_results("SELECT * FROM $table_name ORDER BY no ASC");
    }

    public static function get_published()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'my_plugin_items';

        return $wpdb->get_results("SELECT * FROM $table_name WHERE status = 'published' ORDER BY no ASC");
    }

    public static function publish($id)
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'my_plugin_items';

        $wpdb->update($table_name, ['status' => 'published'], ['id' => $id]);
    }

    public static function unpublish($id)
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'my_plugin_items';

        $wpdb->update($table_name, ['status' => 'unpublished'], ['id' => $id]);
    }
}
