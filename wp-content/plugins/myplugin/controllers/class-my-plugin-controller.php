<?php

if (!defined('ABSPATH')) {
    exit;
}

require_once MY_PLUGIN_PATH . 'models/class-my-plugin-model.php';

class My_Plugin_Controller
{
    public function handle_request()
    {
        if (isset($_POST['action'])) {
            switch ($_POST['action']) {
                case 'create':
                    $this->create_item();
                    break;
                case 'update':
                    $this->update_item();
                    break;
                case 'delete':
                    $this->delete_item();
                    break;
                case 'publish':
                    $this->publish_item();
                    break;
                case 'unpublish':
                    $this->unpublish_item();
                    break;
            }
        }

        $this->show_items();
    }

    public function create_item()
    {
        if ($this->validate_input()) {
            $name = sanitize_text_field($_POST['item_name']);
            $position = sanitize_text_field($_POST['item_position']);
            $office = sanitize_text_field($_POST['item_office']);
            $age = intval($_POST['item_age']);
            $start_date = sanitize_text_field($_POST['item_start_date']);
            $salary = sanitize_text_field($_POST['item_salary']);
            My_Plugin_Model::create($name, $position, $office, $age, $start_date, $salary);
        }
    }

    public function update_item()
    {
        if (isset($_POST['item_id']) && $this->validate_input()) {
            $id = intval($_POST['item_id']);
            $name = sanitize_text_field($_POST['item_name']);
            $position = sanitize_text_field($_POST['item_position']);
            $office = sanitize_text_field($_POST['item_office']);
            $age = intval($_POST['item_age']);
            $start_date = sanitize_text_field($_POST['item_start_date']);
            $salary = sanitize_text_field($_POST['item_salary']);
            My_Plugin_Model::update($id, $name, $position, $office, $age, $start_date, $salary);
        }
    }

    public function delete_item()
    {
        if (isset($_POST['item_id'])) {
            $id = intval($_POST['item_id']);
            My_Plugin_Model::delete($id);
        }
    }

    public function publish_item()
    {
        if (isset($_POST['item_id'])) {
            $id = intval($_POST['item_id']);
            My_Plugin_Model::publish($id);
        }
    }

    public function unpublish_item()
    {
        if (isset($_POST['item_id'])) {
            $id = intval($_POST['item_id']);
            My_Plugin_Model::unpublish($id);
        }
    }

    public function show_items()
    {
        $items = My_Plugin_Model::get_all();
        require_once MY_PLUGIN_PATH . 'views/my-plugin-view.php';
    }

    public function show_published_items()
    {
        $items = My_Plugin_Model::get_published();
        require_once MY_PLUGIN_PATH . 'views/my-plugin-published-view.php';
    }

    private function validate_input()
    {
        return isset($_POST['item_name']) && isset($_POST['item_position']) &&
            isset($_POST['item_office']) && isset($_POST['item_age']) &&
            isset($_POST['item_start_date']) && isset($_POST['item_salary']);
    }

    public static function create_table()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'my_plugin_items';
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            name tinytext NOT NULL,
            position tinytext NOT NULL,
            office tinytext NOT NULL,
            age smallint NOT NULL,
            start_date date NOT NULL,
            salary tinytext NOT NULL,
            no smallint NOT NULL,
            status varchar(20) NOT NULL DEFAULT 'unpublished',
            PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}
