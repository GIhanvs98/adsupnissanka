<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$entries = [
			[
                'key' => 'app',
                'name' => 'Application',
                'value' => '{"purchase_code":"c3155320-a4ea-4550-b881-471c4d94c596","name":"Adsup","slogan":"Sri Lanka Classified for Your Sri Lanka Ads.","logo":"app/logo/logo-651d6457c59cc.png","favicon":"app/ico/ico-651d6457cf03c.png","email":"kenuragunarathna@gmail.com","phone_number":null,"auto_detect_language":"0","show_languages_flags":"1","php_specific_date_format":"0","date_format":"YYYY-MM-DD","datetime_format":"YYYY-MM-DD HH:mm","date_force_utf8":"0","logo_dark":"app/backend/logo-dark-64e76910b627e.png","logo_light":"app/backend/logo-light-64e76910b732f.png","vector_charts_type":"morris_bar","latest_entries_limit":"5","show_countries_charts":"1","general_settings_as_submenu_in_sidebar":"1"}',
                'description' => 'Application Setup',
                'field' => null,
                'parent_id' => null,
                'lft' => 2,
                'rgt' => 3,
                'depth' => 1,
                'active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'key' => 'style',
                'name' => 'Style',
                'value' => '{"skin":"default","custom_skin_color":null,"body_background_color":"#E7EDEE","body_text_color":null,"body_background_image":null,"body_background_image_fixed":"0","page_width":"1200","title_color":null,"progress_background_color":null,"link_color":null,"link_color_hover":null,"header_sticky":"0","header_height":null,"header_background_color":null,"header_bottom_border_width":"0","header_bottom_border_color":"#DBDBDB","header_link_color":"#FEFEFE","header_link_color_hover":"#F6F6F6","logo_width":"216","logo_height":"30","logo_aspect_ratio":"1","footer_background_color":"#FFFFFF","footer_text_color":null,"footer_title_color":null,"footer_link_color":null,"footer_link_color_hover":null,"payment_icon_top_border_width":null,"payment_icon_top_border_color":null,"payment_icon_bottom_border_width":null,"payment_icon_bottom_border_color":null,"btn_listing_bg_top_color":"#FFC800","btn_listing_bg_bottom_color":"#FFC800","btn_listing_border_color":"#FFC800","btn_listing_text_color":"#673500","btn_listing_bg_top_color_hover":null,"btn_listing_bg_bottom_color_hover":null,"btn_listing_border_color_hover":null,"btn_listing_text_color_hover":null,"custom_css":null,"login_bg_image":"app/default/backend/login_bg_image.jpg","admin_logo_bg":"skin3","admin_navbar_bg":"skin3","admin_sidebar_type":"full","admin_sidebar_bg":"skin5","admin_sidebar_position":"1","admin_header_position":"1","admin_boxed_layout":"0","admin_dark_theme":"0","body_background_image_url":null,"login_bg_image_url":"https:\/\/ads.godigitaliz.com\/storage\/app\/default\/backend\/thumb-2500x2500-login_bg_image.jpg"}',
                'description' => 'Style Customization',
                'field' => null,
                'parent_id' => null,
                'lft' => 4,
                'rgt' => 5,
                'depth' => 1,
                'active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'key' => 'list',
                'name' => 'List & Search',
                'value' => '{"display_browse_listings_link":"1","display_states_search_tip":"0","display_mode":"make-list","grid_view_cols":"4","items_per_page":"20","fake_locations_results":"0","show_cats_in_top":"0","show_category_icon":"7","show_listings_tags":"0","left_sidebar":"1","min_price":"0","max_price":"10000","price_slider_step":"50","count_categories_listings":"1","count_cities_listings":"0","elapsed_time_from_now":"1","hide_dates":"1","cities_extended_searches":"1","distance_calculation_formula":"haversine","search_distance_default":"50","search_distance_max":"500","search_distance_interval":"100","premium_first":"0","premium_first_category":"1","premium_first_location":"1","free_listings_in_premium":"0"}',
                'description' => 'List & Search Options',
                'field' => null,
                'parent_id' => null,
                'lft' => 6,
                'rgt' => 7,
                'depth' => 1,
                'active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
			[
                'key' => 'single',
                'name' => 'Single (Page & Form)',
                'value' => null,
                'description' => 'Single (Page & Form) Options',
                'field' => null,
                'parent_id' => null,
                'lft' => 8,
                'rgt' => 9,
                'depth' => 1,
                'active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'key' => 'mail',
                'name' => 'Mail',
                'value' => '{"mail_engine":"smtp","mail_host":"smtp.mailtrap.io","mail_port":"2525","mail_username":"your_username","mail_password":"your_password","mail_encryption":"tls","mail_from_address":"example@example.com","mail_from_name":"Example"}',
                'description' => 'Mail Configuration',
                'field' => null,
                'parent_id' => null,
                'lft' => 10,
                'rgt' => 11,
                'depth' => 1,
                'active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
			[
				'key'         => 'sms',
				'name'        => 'SMS',
				'value'       => null,
				'description' => 'SMS Sending Configuration',
				'field'       => null,
				'parent_id'   => null,
				'lft'         => 12,
				'rgt'         => 13,
				'depth'       => 1,
				'active'      => 1,
				'created_at'  => null,
				'updated_at'  => null,
			],
			[
				'key'         => 'upload',
				'name'        => 'Upload',
				'value'       => null,
				'description' => 'Upload Settings',
				'field'       => null,
				'parent_id'   => null,
				'lft'         => 14,
				'rgt'         => 15,
				'depth'       => 1,
				'active'      => 1,
				'created_at'  => null,
				'updated_at'  => null,
			],
			[
				'key'         => 'geo_location',
				'name'        => 'Geo Location',
				'value'       => null,
				'description' => 'Geo Location Configuration',
				'field'       => null,
				'parent_id'   => null,
				'lft'         => 16,
				'rgt'         => 17,
				'depth'       => 1,
				'active'      => 1,
				'created_at'  => null,
				'updated_at'  => null,
			],
			[
				'key'         => 'security',
				'name'        => 'Security',
				'value'       => null,
				'description' => 'Security Options',
				'field'       => null,
				'parent_id'   => null,
				'lft'         => 18,
				'rgt'         => 19,
				'depth'       => 1,
				'active'      => 1,
				'created_at'  => null,
				'updated_at'  => null,
			],
            [
                'key' => 'social',
                'name' => 'Social Networks',
                'value' => '{"facebook":"#","twitter":"#","google_plus":"#","linkedin":"#","pinterest":"#","youtube":"#","instagram":"#","tumblr":"#","flickr":"#","vine":"#","snapchat":"#"}',
                'description' => 'Social Networks Links',
                'field' => null,
                'parent_id' => null,
                'lft' => 12,
                'rgt' => 13,
                'depth' => 1,
                'active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
			[
				'key'         => 'social_auth',
				'name'        => 'Social Login',
				'value'       => null,
				'description' => 'Social Network Login',
				'field'       => null,
				'parent_id'   => null,
				'lft'         => 20,
				'rgt'         => 21,
				'depth'       => 1,
				'active'      => 1,
				'created_at'  => null,
				'updated_at'  => null,
			],
			[
				'key'         => 'social_link',
				'name'        => 'Social Network',
				'value'       => null,
				'description' => 'Social Network Profiles',
				'field'       => null,
				'parent_id'   => null,
				'lft'         => 22,
				'rgt'         => 23,
				'depth'       => 1,
				'active'      => 1,
				'created_at'  => null,
				'updated_at'  => null,
			],
			[
				'key'         => 'optimization',
				'name'        => 'Optimization',
				'value'       => null,
				'description' => 'Optimization Tools',
				'field'       => null,
				'parent_id'   => null,
				'lft'         => 24,
				'rgt'         => 25,
				'depth'       => 1,
				'active'      => 1,
				'created_at'  => null,
				'updated_at'  => null,
			],
            [
                'key' => 'captcha',
                'name' => 'Captcha',
                'value' => '{"site_key":"your_site_key","secret_key":"your_secret_key"}',
                'description' => 'Captcha Configuration',
                'field' => null,
                'parent_id' => null,
                'lft' => 14,
                'rgt' => 15,
                'depth' => 1,
                'active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'key' => 'seo',
                'name' => 'SEO',
                'value' => '{"meta_title":"Your Meta Title","meta_description":"Your Meta Description","meta_keywords":"Your Meta Keywords"}',
                'description' => 'SEO Configuration',
                'field' => null,
                'parent_id' => null,
                'lft' => 16,
                'rgt' => 17,
                'depth' => 1,
                'active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
			[
				'key'         => 'other',
				'name'        => 'Others',
				'value'       => null,
				'description' => 'Other Options',
				'field'       => null,
				'parent_id'   => null,
				'lft'         => 28,
				'rgt'         => 29,
				'depth'       => 1,
				'active'      => 1,
				'created_at'  => null,
				'updated_at'  => null,
			],
			[
				'key'         => 'cron',
				'name'        => 'Cron',
				'value'       => null,
				'description' => 'Cron Job',
				'field'       => null,
				'parent_id'   => null,
				'lft'         => 30,
				'rgt'         => 31,
				'depth'       => 1,
				'active'      => 1,
				'created_at'  => null,
				'updated_at'  => null,
			],
            [
                'key' => 'footer',
                'name' => 'Footer',
                'value' => '{"hide_links":"0","hide_payment_plugins_logos":"1","hide_powered_by":"0","powered_by_info":null,"tracking_code":null}',
                'description' => 'Pages Footer',
                'field' => null,
                'parent_id' => null,
                'lft' => 32,
                'rgt' => 33,
                'depth' => 1,
                'active' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
			[
                'key' => 'backup',
                'name' => 'Backup',
                'value' => null,
                'description' => 'Backup Configuration',
                'field' => null,
                'parent_id' => null,
                'lft' => 34,
                'rgt' => 35,
                'depth' => 1,
                'active' => 1,
                'created_at' => null,
                'updated_at' => null,
        	],
		];
		
		$tableName = (new Setting())->getTable();
		foreach ($entries as $entry) {
			DB::table($tableName)->insert($entry);
		}
	}
}
