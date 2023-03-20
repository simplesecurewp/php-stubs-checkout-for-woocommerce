<?php

namespace Objectiv\Plugins\Checkout {
    /**
     * Enforces a single instance of an object. Useful for mission critical objects that should never be duplicated beyond
     * plugin initialization
     *
     * @link objectiv.co
     * @since 1.0.0
     * @package Objectiv\BoosterSeat\Base
     */
    abstract class SingletonAbstract
    {
        /**
         * The object instances
         *
         * @since 1.0.0
         * @var null
         */
        protected static $instance = array();
        /**
         * Wakeup method. Just a stub. Do not fill with logic
         *
         * @since 1.0.0
         */
        public function __wakeup()
        {
        }
        /**
         * Returns the class instantiated instance. Will return the first instance generated, and nothing else.
         *
         * @since 1.0.0
         * @return null|static
         */
        public static final function instance()
        {
        }
    }
    /**
     * The class responsible for controlling the address fields
     *
     * @link checkoutwc.com
     * @since 1.0.0
     * @package Objectiv\Plugins\Checkout\Core
     */
    class AddressFieldsAugmenter extends \Objectiv\Plugins\Checkout\SingletonAbstract
    {
        public function init()
        {
        }
        /**
         * Add the billing phone to the address fields
         *
         * @since 1.1.5
         * @param $address_fields
         *
         * @return mixed
         */
        public function add_billing_phone_to_address_fields($address_fields)
        {
        }
        /**
         * Update the shipping phone on order create
         *
         * @since 1.1.5
         * @param $order
         */
        public function update_shipping_phone_on_order_create($order)
        {
        }
        /**
         * Get custom default address fields
         *
         * @param $fields
         * @return array
         */
        public function get_custom_default_address_fields($fields) : array
        {
        }
        public function update_billing_email_field($billing_fields) : array
        {
        }
        /**
         * Enforce field priorities
         *
         * @param array $locales
         * @return array
         */
        public function enforce_field_priorities(array $locales) : array
        {
        }
        public function sync_label_and_placeholder(array $locales) : array
        {
        }
        public function add_default_value_to_full_name_fields($fields) : array
        {
        }
    }
    class FormFieldAugmenter extends \Objectiv\Plugins\Checkout\SingletonAbstract
    {
        protected $checkbox_like_field_types = array('checkbox', 'radio');
        protected $filters_added = false;
        public function add_hooks()
        {
        }
        public function remove_hooks()
        {
        }
        public function calculate_columns($args) : array
        {
        }
        /**
         * Pre-process form field arguments for our pages
         *
         * @param mixed $args
         * @param string $key
         * @return array
         */
        public function cfw_form_field_args($args, string $key) : array
        {
        }
        /**
         * Strip classes that we don't want on our fields from woocommerce_form_field output
         *
         * @param $field
         * @return array|mixed|string|string[]
         */
        public function remove_extraneous_field_classes($field)
        {
        }
        /**
         * Add cfw-select-input to the wrap for select fields
         *
         * @param $field
         * @return array|mixed|string|string[]
         */
        public function add_select_container_class($field)
        {
        }
        /**
         * Cleanup space between checkbox and label
         *
         * @param string $field
         * @param string $key
         * @param array $args
         * @return array|string|string[]
         */
        public function cleanup_space_between_checkbox_input_and_text(string $field, string $key, array $args) : string
        {
        }
        public function add_before_html($field, $key, $args)
        {
        }
        public function add_after_html($field, $key, $args)
        {
        }
        public function maybe_add_parsley_attributes(array $args) : array
        {
        }
        /**
         * Get the checkbox like field types
         *
         * @return string[]
         */
        public function get_checkbox_like_field_types() : array
        {
        }
        /**
         * Return password field toggle HTML
         *
         * @param $field
         * @param $key
         * @param $args
         * @param $value
         *
         * @return string
         */
        public function password_field_toggle($field, $key, $args, $value) : string
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Interfaces {
    interface ItemInterface
    {
        public function get_thumbnail() : string;
        public function get_quantity() : float;
        public function get_title() : string;
        public function get_url() : string;
        public function get_subtotal() : string;
        public function get_row_class() : string;
        public function get_item_key() : string;
        public function get_raw_item();
        public function get_product() : \WC_Product;
        public function get_data() : array;
        public function get_formatted_data() : string;
    }
    interface BumpInterface
    {
        public function get_id() : int;
        public function add_to_cart(\WC_Cart $cart);
        public function record_displayed();
        public function record_purchased();
        public function add_bump_meta_to_order_item($item, $values);
        public function get_cfw_cart_item_discount(string $price_html);
        public function display(string $location);
        public function get_captured_revenue() : float;
        public function get_conversion_rate();
        public function is_in_cart() : bool;
        public function get_item_removal_behavior() : string;
        public function is_cart_bump_valid() : bool;
        public function is_published() : bool;
        public function get_price(string $context = 'view') : float;
    }
    interface SettingsGetterInterface
    {
        public function get_setting(string $setting, array $keys = array());
    }
}
namespace Objectiv\Plugins\Checkout\Loaders {
    /**
     * Helps load pages
     *
     * @link checkoutwc.com
     * @since 3.6.0
     * @package Objectiv\Plugins\Checkout\Core
     */
    abstract class LoaderAbstract
    {
        public static function checkout()
        {
        }
        public static function order_pay()
        {
        }
        public static function order_received()
        {
        }
        /**
         * Initiation the checkout page
         *
         * @return array The global parameters
         */
        public static function init_checkout() : array
        {
        }
        /**
         * Initiate the order pay page
         *
         * @return array The global template parameters
         */
        public static function init_order_pay() : array
        {
        }
        /**
         * Init the thank you page
         *
         * @return array The global template parameters
         * @throws WC_Data_Exception
         */
        public static function init_thank_you() : array
        {
        }
        /**
         * Display a template files
         *
         * @since 1.0.0
         * @param array $global_template_parameters
         * @param string $template_file
         */
        public static function display(array $global_template_parameters, string $template_file)
        {
        }
        public static function output_meta_tags()
        {
        }
        /**
         * Output content of WP Admin > CheckoutWC > Advanced > Header Scripts
         */
        public static function output_custom_header_scripts()
        {
        }
        /**
         * Output content of WP Admin > CheckoutWC > Advanced > Footer Scripts
         */
        public static function output_custom_footer_scripts()
        {
        }
        public static function output_page_title()
        {
        }
        /**
         * Output custom styles
         */
        public static function custom_styles()
        {
        }
    }
    /**
     * Class Redirect
     *
     * Loads pages in portal by taking control of all output
     *
     * @link checkoutwc.com
     * @since 1.0.0
     * @package Objectiv\Plugins\Checkout\Core
     */
    class Redirect extends \Objectiv\Plugins\Checkout\Loaders\LoaderAbstract
    {
        /**
         *
         * @since 1.0.0
         * @access public
         *
         */
        public static function checkout()
        {
        }
        /**
         * @since 1.0.0
         * @access public
         */
        public static function order_pay()
        {
        }
        /**
         * @since 2.39.0
         * @access public
         */
        public static function order_received()
        {
        }
        /**
         * @since 1.0.0
         * @access public
         *
         * @param array $classes
         */
        public static function head(array $classes)
        {
        }
        /**
         * cfw_wp_head
         */
        public static function cfw_wp_head()
        {
        }
        /**
         * Remove specifically excluded styles
         */
        public static function remove_styles()
        {
        }
        /**
         * Remove specifically excluded scripts
         */
        public static function remove_scripts()
        {
        }
        /**
         * @since 1.0.0
         * @access public
         *
         */
        public static function footer()
        {
        }
        public static function suppress_errors()
        {
        }
        /**
         * Discourage Caching if Anyone Dares Try
         */
        public static function disable_caching()
        {
        }
        /**
         * Remove scripts and styles
         *
         * Do this at wp_head as well as wp_enqueue_scripts. This gives us two chances to win.
         */
        public static function suppress_assets()
        {
        }
        /**
         * Setup cfw_wp_head actions
         */
        public static function hook_cfw_wp_head()
        {
        }
        public static function hook_cfw_wp_footer()
        {
        }
        public static function template_redirect()
        {
        }
    }
    /**
     * Class Content
     *
     * Loads pages into normal WP content
     *
     * @link checkoutwc.com
     * @since 3.6.0
     * @package Objectiv\Plugins\Checkout\Core
     * @author Clifton Griffin <clif@checkoutwc.com>
     */
    class Content extends \Objectiv\Plugins\Checkout\Loaders\LoaderAbstract
    {
        /**
         *
         * @since 3.6.0
         * @access public
         *
         */
        public static function checkout()
        {
        }
        public static function order_pay()
        {
        }
        public static function order_received()
        {
        }
        /**
         * @deprecated 5.0.0
         */
        public static function wp_head()
        {
        }
        /**
         * @deprecated 5.0.0
         */
        public static function wp_footer()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Model {
    class OrderItem implements \Objectiv\Plugins\Checkout\Interfaces\ItemInterface
    {
        protected $thumbnail;
        protected $quantity;
        protected $title;
        protected $url;
        protected $subtotal;
        protected $row_class;
        protected $item_key;
        protected $raw_item;
        protected $product;
        protected $data;
        protected $formatted_data;
        /**
         * @param array|WC_Order_Item $item
         */
        public function __construct(\WC_Order_Item $item)
        {
        }
        public function get_thumbnail() : string
        {
        }
        public function get_quantity() : float
        {
        }
        public function get_title() : string
        {
        }
        public function get_url() : string
        {
        }
        public function get_subtotal() : string
        {
        }
        public function get_row_class() : string
        {
        }
        public function get_item_key() : string
        {
        }
        /**
         * @return WC_Order_Item
         */
        public function get_raw_item()
        {
        }
        public function get_product() : \WC_Product
        {
        }
        public function get_data() : array
        {
        }
        public function get_formatted_data() : string
        {
        }
        protected function get_order_item_data(\WC_Order_Item $item) : array
        {
        }
        protected function get_formatted_order_item_data()
        {
        }
    }
    /**
     * Template handler for associated template piece. Typically there should only be 3 of these in total (header, footer,
     * content)
     *
     * @link checkoutwc.com
     * @since 2.0.0
     * @package Objectiv\Plugins\Checkout\Core
     */
    class Template
    {
        /**
         * @since 2.0.0
         * @static
         * @var array $default_headers
         */
        public static $default_headers = array('Name' => 'Template Name', 'Description' => 'Description', 'Author' => 'Author', 'AuthorURI' => 'Author URI', 'Version' => 'Version', 'Supports' => 'Supports');
        /**
         * Template constructor.
         *
         * @param string $slug
         */
        public function __construct(string $slug)
        {
        }
        /**
         * Load the theme template functions file
         *
         * @since 2.0.0
         * @return void
         */
        public function load_functions()
        {
        }
        /**
         * Load the template init settings file
         *
         * @since 2.0.0
         * @return void
         */
        public function init()
        {
        }
        /**
         * Get the default settings array
         *
         * @return array
         */
        public function get_default_settings() : array
        {
        }
        /**
         * @param $setting
         *
         * @return mixed|string
         */
        public function get_default_setting($setting)
        {
        }
        /**
         * @return string[]
         */
        public function get_standard_default_settings() : array
        {
        }
        public function view($filename, $parameters = array())
        {
        }
        /**
         * @param $capability
         *
         * @return bool
         */
        public function supports($capability) : bool
        {
        }
        /**
         * @return string
         */
        public function get_template_uri() : string
        {
        }
        /**
         * Return fully qualified path to stylesheet
         *
         * @return string|bool $stylesheet
         */
        public function get_stylesheet_path()
        {
        }
        /**
         * @return string
         */
        public function get_stylesheet_filename() : string
        {
        }
        /**
         * @return string
         */
        public function get_basepath() : string
        {
        }
        /**
         * @return mixed
         */
        public function get_name()
        {
        }
        /**
         * @param mixed $name
         */
        public function set_name($name)
        {
        }
        /**
         * @return mixed
         */
        public function get_description()
        {
        }
        /**
         * @param mixed $description
         */
        public function set_description($description)
        {
        }
        /**
         * @return mixed
         */
        public function get_author()
        {
        }
        /**
         * @return mixed
         */
        public function get_version()
        {
        }
        /**
         * @param mixed $version
         */
        public function set_version($version)
        {
        }
        /**
         * @return array
         */
        public function get_supports() : array
        {
        }
        /**
         * @param mixed $supports
         */
        public function set_supports($supports)
        {
        }
        /**
         * @return string
         */
        public function get_slug() : string
        {
        }
        public function run_on_plugin_activation()
        {
        }
        public static function get_all_available() : array
        {
        }
        public static function init_active_template(self $template)
        {
        }
    }
    class CartItem implements \Objectiv\Plugins\Checkout\Interfaces\ItemInterface
    {
        protected $thumbnail;
        protected $quantity;
        protected $title;
        protected $url;
        protected $subtotal;
        protected $row_class;
        protected $item_key;
        protected $raw_item;
        protected $product;
        protected $data;
        protected $formatted_data;
        public function __construct(string $key, array $item)
        {
        }
        protected function get_cart_item_data(array $cart_item) : array
        {
        }
        protected function get_formatted_cart_data()
        {
        }
        public function get_thumbnail() : string
        {
        }
        public function get_quantity() : float
        {
        }
        public function get_title() : string
        {
        }
        public function get_url() : string
        {
        }
        public function get_subtotal() : string
        {
        }
        public function get_row_class() : string
        {
        }
        public function get_item_key() : string
        {
        }
        public function get_raw_item()
        {
        }
        public function get_product() : \WC_Product
        {
        }
        public function get_data() : array
        {
        }
        public function get_formatted_data() : string
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Model\Bumps {
    abstract class BumpAbstract implements \Objectiv\Plugins\Checkout\Interfaces\BumpInterface
    {
        protected $id;
        protected $title;
        protected $display_for;
        protected $products;
        protected $excluded_products;
        protected $categories;
        protected $any_product = false;
        protected $location;
        protected $discount_type;
        protected $offer_product;
        protected $offer_discount;
        protected $offer_language;
        protected $offer_description;
        protected $upsell = false;
        protected $offer_quantity;
        protected $can_quantity_be_updated = false;
        public function __construct()
        {
        }
        /**
         * @param $post
         *
         * @return bool
         */
        public function load($post) : bool
        {
        }
        /**
         * Get bump title
         *
         * @return string
         */
        public function get_title() : string
        {
        }
        /**
         * Is displayable
         *
         * @return bool
         */
        public abstract function is_displayable() : bool;
        /**
         * Is cart bump valid
         *
         * @return bool
         */
        public abstract function is_cart_bump_valid() : bool;
        public function is_published() : bool
        {
        }
        /**
         * Is valid upsell
         *
         * @return bool
         */
        public function is_valid_upsell() : bool
        {
        }
        public function can_offer_product_be_added_to_the_cart() : bool
        {
        }
        public function add_bump_meta_to_order_item($item, $values)
        {
        }
        public function get_cfw_cart_item_discount(string $price_html) : string
        {
        }
        /**
         * Add to cart
         *
         * @throws \Exception
         */
        public function add_to_cart(\WC_Cart $cart)
        {
        }
        /**
         * @param int $needle_product_id
         * @return bool
         */
        protected function remove_product_from_cart(int $needle_product_id, int $quantity_to_remove = -1) : bool
        {
        }
        /**
         * @param int $needle_product_id
         * @return int
         */
        public function quantity_of_product_in_cart(int $needle_product_id) : int
        {
        }
        /**
         * @param int $needle_product_id
         * @return int
         */
        public function quantity_of_normal_product_in_cart(int $needle_product_id) : int
        {
        }
        protected function cart_item_is_product(array $cart_item, int $product_id) : bool
        {
        }
        public function record_purchased()
        {
        }
        public function display(string $location)
        {
        }
        function is_excluded() : bool
        {
        }
        /**
         * @return int
         */
        public function get_id() : int
        {
        }
        /**
         * @return mixed
         */
        public function get_offer_language()
        {
        }
        /**
         * @return mixed
         */
        public function get_offer_description()
        {
        }
        /**
         * @return mixed
         */
        public function get_offer_quantity()
        {
        }
        /**
         * @return false|\WC_Product|null
         */
        protected function get_offer_product()
        {
        }
        /**
         * @return string
         */
        protected function get_offer_product_price() : string
        {
        }
        /**
         * Get the bump price
         *
         * @param string $context
         *
         * @return float
         */
        public function get_price(string $context = 'view') : float
        {
        }
        protected function get_display_location() : string
        {
        }
        /**
         * Get Purchase Count
         *
         * The number of times this bump was added to the cart and purchased.
         *
         * @return integer
         */
        public function get_purchase_count() : int
        {
        }
        public function record_displayed()
        {
        }
        public function increment_displayed_on_purchases_count()
        {
        }
        public function increment_purchased_count()
        {
        }
        public function add_captured_revenue(float $new_revenue)
        {
        }
        public function update_conversion_rate()
        {
        }
        public function get_conversion_rate() : string
        {
        }
        public function get_item_removal_behavior() : string
        {
        }
        public function get_estimated_revenue() : float
        {
        }
        public function get_captured_revenue() : float
        {
        }
        /**
         * @return array
         */
        public function get_products() : array
        {
        }
        /**
         * @return array
         */
        public function get_excluded_products() : array
        {
        }
        public static function get_post_type() : string
        {
        }
        public static function init($parent_menu_slug)
        {
        }
        /**
         * @return bool
         */
        public function is_in_cart() : bool
        {
        }
        /**
         * @return bool
         */
        public function can_quantity_be_updated() : bool
        {
        }
    }
    class AllProductsBump extends \Objectiv\Plugins\Checkout\Model\Bumps\BumpAbstract
    {
        public function is_displayable() : bool
        {
        }
        public function is_cart_bump_valid() : bool
        {
        }
    }
    class SpecificProductsBump extends \Objectiv\Plugins\Checkout\Model\Bumps\BumpAbstract
    {
        public function is_displayable() : bool
        {
        }
        public function is_cart_bump_valid() : bool
        {
        }
        /**
         * @throws \Exception
         */
        public function add_to_cart(\WC_Cart $cart)
        {
        }
        protected function get_cart_item_for_product($search_product_id)
        {
        }
        protected function get_matched_variation_attributes_from_cart_search_product(\WC_Product $offer_product) : \Objectiv\Plugins\Checkout\Model\MatchedVariationResult
        {
        }
    }
    class NullBump implements \Objectiv\Plugins\Checkout\Interfaces\BumpInterface
    {
        public function get_id() : int
        {
        }
        public function add_to_cart(\WC_Cart $cart) : bool
        {
        }
        public function record_displayed()
        {
        }
        public function display(string $location)
        {
        }
        public function record_purchased()
        {
        }
        public function add_bump_meta_to_order_item($item, $values)
        {
        }
        public function get_cfw_cart_item_discount(string $price_html) : string
        {
        }
        public function get_conversion_rate() : string
        {
        }
        public function get_captured_revenue() : float
        {
        }
        public function is_in_cart() : bool
        {
        }
        public function get_item_removal_behavior() : string
        {
        }
        public function is_cart_bump_valid() : bool
        {
        }
        public function is_published() : bool
        {
        }
        public function can_quantity_be_updated() : bool
        {
        }
        public function get_price(string $context = 'view') : float
        {
        }
    }
    class CategoriesBump extends \Objectiv\Plugins\Checkout\Model\Bumps\BumpAbstract
    {
        public function is_displayable() : bool
        {
        }
        public function is_cart_bump_valid() : bool
        {
        }
        protected function cart_contains_normal_product_of_categories() : bool
        {
        }
        /**
         * @param string $needle_category_slug
         * @return int
         */
        public function quantity_of_normal_cart_items_in_category(string $needle_category_slug) : int
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Model {
    class MatchedVariationResult
    {
        public function __construct($variation_id = null, $variation_data = null)
        {
        }
        public function get_id() : ?int
        {
        }
        public function get_attributes() : ?array
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Stats {
    class StatCollection extends \Objectiv\Plugins\Checkout\SingletonAbstract
    {
        const CFW_TIMESTAMP_OPTION = 'woocommerce_admin_install_timestamp';
        const CFW_STORE_AGE_RANGES = array('week-1' => array('start' => 0, 'end' => WEEK_IN_SECONDS), 'week-1-4' => array('start' => WEEK_IN_SECONDS, 'end' => WEEK_IN_SECONDS * 4), 'month-1-3' => array('start' => MONTH_IN_SECONDS, 'end' => MONTH_IN_SECONDS * 3), 'month-3-6' => array('start' => MONTH_IN_SECONDS * 3, 'end' => MONTH_IN_SECONDS * 6), 'month-6+' => array('start' => MONTH_IN_SECONDS * 6));
        /**
         * StatCollection constructor.
         *
         */
        public function init()
        {
        }
        /**
         * Registers new cron schedules
         *
         * @param array $schedules The array of scheduled cron jobs.
         *
         * @return array
         * @since 1.6
         */
        public function add_schedules($schedules = array()) : array
        {
        }
        /**
         * Schedule a weekly checkin
         *
         * We send once a week (while tracking is allowed) to check in, which can be
         * used to determine active sites.
         *
         * @return void
         */
        public function schedule_send()
        {
        }
        /**
         * Send the data to the EDD server
         *
         * @access private
         *
         * @param bool $override If we should override the tracking setting.
         * @param bool $ignore_last_checkin If we should ignore when the last check in was.
         *
         * @return bool
         */
        public function send_checkin(bool $override = false, bool $ignore_last_checkin = false) : bool
        {
        }
        /**
         * If the tracking get parameter exists on the page lets grab the acton name and fire it off
         *
         * @return void
         */
        public function tracking_opt_in_out_listener()
        {
        }
        /**
         * Setup the data that is going to be tracked
         *
         * @access private
         * @return void
         */
        public function setup_data()
        {
        }
        /**
         * @return mixed
         */
        public function get_cfw_settings()
        {
        }
        /**
         * Get list of active and inactive plugins
         *
         * @return array
         */
        public function get_plugins()
        {
        }
        /**
         * @param $settings
         *
         * @return mixed
         */
        public function prep_approved_cfw_settings($settings)
        {
        }
        /**
         * @return mixed
         */
        public function get_woo_site_settings()
        {
        }
        /**
         * Get the current theme info, theme name and version.
         *
         * @return array
         */
        public static function get_theme_info()
        {
        }
        /**
         * Get woo order stats
         *
         * @return array
         * @throws \Exception
         */
        public function get_woo_order_stats() : array
        {
        }
        public function handle_custom_query_var($query, $query_vars)
        {
        }
        /**
         * Check for a new opt-in via the admin notice
         *
         * @return void
         */
        public function check_for_optin()
        {
        }
        /**
         * Check for a new opt-in via the admin notice
         *
         * @return void
         */
        public function check_for_optout()
        {
        }
        /**
         * Display the admin notice to users that have not opted-in or out
         *
         * @return void
         */
        public function admin_notice()
        {
        }
        /**
         * Get the number of seconds that the store has been active.
         *
         * @return number Number of seconds.
         */
        public static function get_cfw_active_for_in_seconds()
        {
        }
        /**
         * Test if WooCommerce Admin has been active within a pre-defined range.
         *
         * @param string $range range available in WC_ADMIN_STORE_AGE_RANGES.
         * @param int    $custom_start custom start in range.
         * @throws \InvalidArgumentException Throws exception when invalid $range is passed in.
         * @return bool Whether or not WooCommerce admin has been active within the range.
         */
        public static function is_cfw_active_in_date_range($range, $custom_start = null)
        {
        }
        /**
         * @param $key
         *
         * @return mixed
         */
        public function get_option($key)
        {
        }
        /**
         * @param $key
         * @param $old_value
         * @param $value
         */
        public function updated_option($key, $old_value, $value)
        {
        }
        /**
         * @param $key
         * @param $value
         */
        public function set_option($key, $value)
        {
        }
        /**
         * @param $key
         */
        public function delete_option($key)
        {
        }
        /**
         * @return array
         */
        public function get_woocommerce_settings() : array
        {
        }
        /**
         * @param array $woocommerce_settings
         */
        public function set_woocommerce_settings(array $woocommerce_settings)
        {
        }
        /**
         * @return mixed
         */
        public function get_data() : array
        {
        }
        public function run_on_plugin_activation()
        {
        }
        public function run_on_plugin_deactivation()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Adapters {
    class CartItemFactory
    {
        public static function get(\WC_Cart $cart) : array
        {
        }
    }
    class OrderItemFactory
    {
        public static function get(\WC_Order $order) : array
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Managers {
    /**
     * The templates manager loads the active template
     * as well as provides information on all available templates
     *
     * @deprecated 5.0.0
     * @link checkoutwc.com
     * @since 2.31.0
     * @package Objectiv\Plugins\Checkout\Managers
     */
    class TemplatesManager extends \Objectiv\Plugins\Checkout\SingletonAbstract
    {
        /**
         * Get user template path
         *
         * @deprecated 5.0.0
         * use CFW_PATH_THEME_TEMPLATE constant instead
         *
         * @return string
         */
        public function get_user_template_path() : string
        {
        }
        /**
         * Get plugin template path
         *
         * @deprecated 5.0.0
         * @see cfw_get_plugin_template_path
         * @return string
         */
        public function get_plugin_template_path() : string
        {
        }
        /**
         * Get available templates
         *
         * @deprecated 5.0.0
         * @see Template::get_all_available()
         * @return Template[]
         */
        public function get_available_templates() : array
        {
        }
        /**
         * Get active template
         *
         * @deprecated 5.0.0
         * @return Template
         */
        public function get_active_template() : \Objectiv\Plugins\Checkout\Template
        {
        }
    }
    /**
     * EDD Software Licensing Magic
     *
     * A drop-in class that magically manages your EDD SL plugin licensing.
     *
     * @version 0.6.1
     **/
    class UpdatesManager extends \Objectiv\Plugins\Checkout\SingletonAbstract
    {
        public $menu_slug;
        // parent menu slug to attach "License" submenu to
        public $prefix;
        // prefix for internal settings
        public $url;
        // plugin host site URL for EDD SL
        public $version;
        // plugin version for EDD SL
        public $name;
        // plugin name for EDD SL
        public $key_statuses;
        // store list of key statuses and messages
        public $bad_key_statuses;
        // store list of key statuses and messages
        public $activate_errors;
        // store list of activation errors and error messages
        public $last_activation_error;
        // because we can't pass variables directly to admin_notice
        public $theme = false;
        // do we have a theme or a plugin?
        public $beta = false;
        // is this a beta?
        public $home_url = false;
        public $updater;
        public $author;
        /**
         * Constructor
         *
         * @param string|bool $beta True if beta versions are enabled
         *
         * @return void
         */
        public function init($beta = false)
        {
        }
        public function run_on_plugin_activation()
        {
        }
        public function run_on_plugin_deactivation()
        {
        }
        /**
         * Retrieves the URL for a given site where the front end is accessible.
         *
         * Returns the 'home' option with the appropriate protocol. The protocol will be 'https'
         * if is_ssl() evaluates to true; otherwise, it will be the same as the 'home' option.
         * If `$scheme` is 'http' or 'https', is_ssl() is overridden.
         *
         * Copied from WordPress 5.2.0
         *
         * @param  int|null         $blog_id Optional. Site ID. Default null (current site).
         * @param string $path    Optional. Path relative to the home URL. Default empty.
         * @param string|null $scheme  Optional. Scheme to give the home URL context. Accepts
         *                              'http', 'https', 'relative', 'rest', or null. Default null.
         *
         * @return string Home URL link with optional path appended.
         * @since 3.0.0
         *
         * @global string $pagenow
         *
         */
        public static function get_home_url(int $blog_id = null, string $path = '', string $scheme = null) : string
        {
        }
        /**
         * Creates a nonce for the license page form.
         *
         * @return void
         */
        public function the_nonce()
        {
        }
        /**
         * Generates a field name from a setting value for the license page form.
         *
         * @param string $setting The key for the setting you're saving.
         * @return string The field name
         */
        public function get_field_name(string $setting) : string
        {
        }
        /**
         * Retrieves value from the database for specified setting.
         *
         * @param string $setting The setting key you're retrieving (default: false)
         * @return string The field value
         */
        public function get_field_value($setting = false)
        {
        }
        /**
         * Set value for the specified setting.
         *
         * @param string $setting
         * @param mixed $value
         * @return void
         */
        public function set_field_value(string $setting, $value) : bool
        {
        }
        /**
         * Save license settings.  Listens for settings form submit. Also handles activation / deactivation.
         *
         * @return void
         */
        public function save_settings()
        {
        }
        /**
         * Sets up the EDD_SL_Plugin_Updater object.
         *
         * @return void
         */
        public function updater_init()
        {
        }
        /**
         * Adds "License" page to specified parent menu. Only attached if menu_slug is not false.
         *
         * @return void
         */
        public function admin_menu()
        {
        }
        /**
         * Generates license page form.
         *
         * @return void
         */
        public function admin_page()
        {
        }
        public function admin_page_fields()
        {
        }
        public function admin_page_activation_status_button()
        {
        }
        /**
         * Is the key valid but inactive?
         *
         * @return bool
         */
        public function is_key_valid_but_inactive() : bool
        {
        }
        public function auto_activate_license()
        {
        }
        /**
         * Handles license activation and deactivation
         *
         * @return void
         */
        public function manage_license_activation()
        {
        }
        /**
         * Retrieve status of license key for current site.
         *
         * @return string|bool The license status|false on error
         */
        public function get_license_status()
        {
        }
        public function get_license_data()
        {
        }
        /**
         * License is invalid notice
         *
         * @return void
         */
        public function notice_license_invalid()
        {
        }
        /**
         * License is valid notice
         *
         * @return void
         */
        public function notice_license_valid()
        {
        }
        /**
         * License deactivation failed notice
         *
         * @return void
         */
        public function notice_license_deactivate_failed()
        {
        }
        /**
         * License deactivation successful notice
         *
         * @return void
         */
        public function notice_license_deactivate_success()
        {
        }
        /**
         * Settings saved success notice
         *
         * @return void
         */
        public function notice_settings_saved_success()
        {
        }
        /**
         * License activation error notice
         *
         * @return void
         */
        public function notice_license_activate_error()
        {
        }
        /**
         * Create cron for license check
         *
         * @return void
         */
        public function set_license_check_cron()
        {
        }
        /**
         * Clear cron for license check.
         *
         * @return void
         */
        public function unset_license_check_cron()
        {
        }
        /**
         * Retrieve license status for current site and store in key_status setting.
         *
         * @return void
         */
        public function check_license()
        {
        }
        /**
         * Update the key status to the current status
         */
        public function delayed_license_update()
        {
        }
        public function schedule_delayed_license_check()
        {
        }
        public function cancel_delayed_license_update()
        {
        }
        /**
         * Get license activation limit
         *
         * @param bool $force
         * @return int The license activation limit
         */
        public function get_license_activation_limit(bool $force = false) : int
        {
        }
        /**
         * Get trimmed license key
         *
         * @return bool|string
         */
        public function get_license_key()
        {
        }
        /**
         * Is license valid
         *
         * @return bool True if license valid, false if it is invalid
         */
        public function is_license_valid() : bool
        {
        }
        public function ajax_save_license()
        {
        }
        public function get_license_price_id() : int
        {
        }
    }
    /**
     * Manage stylesheet and script assets
     *
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Managers
     */
    class AssetManager
    {
        protected $front;
        protected $min;
        protected $version;
        public function __construct()
        {
        }
        public function init()
        {
        }
        public function set_global_assets()
        {
        }
        public function set_cfw_page_assets()
        {
        }
        public function nuke_script($handle_to_be_nuked)
        {
        }
        public function get_parsley_locale()
        {
        }
        protected function get_data()
        {
        }
    }
    abstract class SettingsManagerAbstract extends \Objectiv\Plugins\Checkout\SingletonAbstract
    {
        public $settings = array();
        public $prefix;
        public $delimiter;
        public $network_only = false;
        public function __construct()
        {
        }
        public function init()
        {
        }
        public function reload()
        {
        }
        /**
         * Add a new setting
         *
         * @since 0.1.0
         *
         * @param string $setting The name of the new option
         * @param mixed $value The value of the new option
         * @return boolean True if successful, false otherwise
         **/
        public function add_setting(string $setting, $value) : bool
        {
        }
        /**
         * Updates or adds a setting
         *
         * @param string $setting The name of the option
         * @param string|array $value The new value of the option
         * @param bool $save_to_db
         *
         * @return boolean True if successful, false if not
         * @since 0.1.0
         *
         */
        public function update_setting(string $setting, $value, bool $save_to_db = true) : bool
        {
        }
        /**
         * Deletes a setting
         *
         * @since 0.1
         *
         * @param string $setting The name of the option
         * @return boolean True if successful, false if not
         **/
        public function delete_setting(string $setting) : bool
        {
        }
        /**
         * Retrieves a setting value
         *
         * @param string $setting The name of the option
         * @return mixed The value of the setting
         * @since 0.1.0
         *
         */
        public function get_setting(string $setting)
        {
        }
        /**
         * Generates HTML field name for a particular setting
         *
         * @param string $setting The name of the setting
         * @return string The name of the field
         * @since 0.1.0
         *
         */
        public function get_field_name(string $setting) : string
        {
        }
        /**
         * Prints nonce for admin form
         *
         * @since 0.1.0
         *
         * @return void
         **/
        public function the_nonce()
        {
        }
        /**
         * Saves settings
         *
         * @since 0.1.0
         *
         * @return void
         **/
        public function save_settings()
        {
        }
        public function get_settings_obj()
        {
        }
        /**
         * Sets settings object
         *
         * @param array $newobj The new settings object
         * @return boolean True if successful, false otherwise
         * @since 0.1.0
         *
         */
        public function set_settings_obj(array $newobj) : bool
        {
        }
    }
    /**
     * Provides standard object for accessing user-defined plugin settings
     *
     * @link checkoutwc.com
     * @since 1.0.0
     * @package Objectiv\Plugins\Checkout\Managers
     */
    class SettingsManager extends \Objectiv\Plugins\Checkout\Managers\SettingsManagerAbstract implements \Objectiv\Plugins\Checkout\Interfaces\SettingsGetterInterface
    {
        public $prefix = '_cfw_';
        /**
         * Add setting
         *
         * @param string $setting
         * @param mixed $value
         * @param array $keys
         * @return bool
         */
        public function add_setting(string $setting, $value, array $keys = array()) : bool
        {
        }
        /**
         * Update setting
         *
         * @param string $setting
         * @param array|string $value
         * @param bool $save_to_db
         * @param array $keys
         * @return bool
         */
        public function update_setting(string $setting, $value, bool $save_to_db = true, array $keys = array()) : bool
        {
        }
        /**
         * Delete setting
         *
         * @param string $setting
         * @param array $keys
         * @return bool
         */
        public function delete_setting(string $setting, array $keys = array()) : bool
        {
        }
        /**
         * Get setting
         *
         * @param string $setting
         * @param array $keys
         * @return false|mixed
         */
        public function get_setting(string $setting, array $keys = array())
        {
        }
        /**
         * Get field name
         *
         * @param string $setting
         * @param array $keys
         * @return string
         */
        public function get_field_name(string $setting, array $keys = array()) : string
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Managers\Helpers {
    /**
     * Allows plugins to use their own update API.
     *
     * @version 1.7
     */
    class EDD_SL_Plugin_Updater
    {
        /**
         * Class constructor.
         *
         * @uses plugin_basename()
         * @uses hook()
         *
         * @param string  $_api_url     The URL pointing to the custom API endpoint.
         * @param string  $_plugin_file Path to the plugin file.
         * @param array   $_api_data    Optional data to send with API calls.
         */
        public function __construct($_api_url, $_plugin_file, $_api_data = null)
        {
        }
        /**
         * Set up WordPress filters to hook into WP's update process.
         *
         * @uses add_filter()
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Check for Updates at the defined API endpoint and modify the update array.
         *
         * This function dives into the update API just when WordPress creates its update array,
         * then adds a custom API call and injects the custom plugin data retrieved from the API.
         * It is reassembled from parts of the native WordPress plugin update code.
         * See wp-includes/update.php line 121 for the original wp_update_plugins() function.
         *
         * @uses api_request()
         *
         * @param array   $_transient_data Update array build by WordPress.
         * @return array Modified update array with custom plugin data.
         */
        public function check_update($_transient_data)
        {
        }
        /**
         * Show update notification because WP won't tell you otherwise!
         *
         * @param string  $file
         * @param array   $plugin
         */
        public function show_update_notification($file, $plugin)
        {
        }
        /**
         * Updates information on the "View version x.x details" page with custom data.
         *
         * @uses api_request()
         *
         * @param mixed   $_data
         * @param string  $_action
         * @param object  $_args
         * @return object $_data
         */
        public function plugins_api_filter($_data, $_action = '', $_args = null)
        {
        }
        /**
         * Disable SSL verification in order to prevent download update failures
         *
         * @param array   $args
         * @param string  $url
         * @return array $array
         */
        public function http_request_args($args, $url)
        {
        }
        public function show_changelog()
        {
        }
        public function get_cached_version_info($cache_key = '')
        {
        }
        public function set_version_info_cache($value = '', $cache_key = '')
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Managers {
    /**
     * Handle CSS custom properties and custom styles
     *
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Managers
     */
    class StyleManager
    {
        public static function queue_custom_font_includes()
        {
        }
        public static function get_css_custom_property_overrides() : string
        {
        }
        public static function get_custom_css() : string
        {
        }
        public static function add_styles($handle = 'cfw_front_css')
        {
        }
    }
    /**
     * Determine whether the user has the right plan for a feature
     *
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Managers
     */
    class PlanManager
    {
        const PREMIUM_PLANS = array('Pro', 'Agency');
        /**
         * Does the user have the required plan?
         *
         * @return bool
         */
        public static function has_premium_plan() : bool
        {
        }
        /**
         * Get the required plans
         *
         * @return array
         */
        public static function get_required_plans() : array
        {
        }
        /**
         * Returns an English formatted list of plans
         *
         * Examples:
         * - X or Y
         * - X, Y, or Z
         *
         * @param array $array_of_strings
         * @return string
         */
        public static function get_formatted_english_list(array $array_of_strings) : string
        {
        }
        /**
         * Get English list of required plans
         *
         * @return string
         */
        public static function get_english_list_of_required_plans_html() : string
        {
        }
        /**
         * Can access feature?
         *
         * @param string $setting_key
         *
         * @return bool
         */
        public static function can_access_feature(string $setting_key) : bool
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout {
    /**
     * The core plugin class.
     *
     * In previous iterations of the plugin this class served as the middle man access point to all plugin functionality.
     * This has been deprecated and the remaining functions serve as legacy functions to be removed at a later date.
     *
     * @link checkoutwc.com
     * @since 1.0.0
     * @package Objectiv\Plugins\Checkout
     * @deprecated
     */
    class Main extends \Objectiv\Plugins\Checkout\SingletonAbstract
    {
        /**
         * Returns the template manager
         *
         * @since 1.0.0
         * @deprecated 5.0.0
         * @return TemplatesManager
         */
        public function get_templates_manager() : \Objectiv\Plugins\Checkout\Managers\TemplatesManager
        {
        }
        /**
         * Returns the settings manager
         *
         * @deprecated
         */
        public function get_settings_manager() : \Objectiv\Plugins\Checkout\Managers\SettingsManager
        {
        }
        /**
         * Get the updater object
         *
         * @since 1.0.0
         * @return UpdatesManager The updater object
         * @deprecated
         */
        public function get_updater() : \Objectiv\Plugins\Checkout\Managers\UpdatesManager
        {
        }
        /**
         * Get the address fields augmenter object
         *
         * @return AddressFieldsAugmenter The form object
         * @deprecated 5.0.0
         * @since 1.1.5
         */
        public function get_form() : \Objectiv\Plugins\Checkout\AddressFieldsAugmenter
        {
        }
        /**
         * Is checkout?
         *
         * @deprecated
         * @return mixed|void
         */
        public static function is_checkout() : bool
        {
        }
        /**
         * Is checkout pay page?
         *
         * @deprecated
         * @return bool
         */
        public static function is_checkout_pay_page() : bool
        {
        }
        /**
         * Is order received page?
         *
         * @deprecated
         * @return bool
         */
        public static function is_order_received_page() : bool
        {
        }
        /**
         * Is cfw page?
         *
         * @deprecated
         * @return bool
         */
        public static function is_cfw_page() : bool
        {
        }
    }
    class PhpErrorOutputSuppressor
    {
        public function __construct()
        {
        }
        public function init()
        {
        }
        public function suppress_error_output()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Features {
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     */
    abstract class FeaturesAbstract
    {
        protected $enabled = false;
        protected $available = false;
        protected $required_plans_list;
        /**
         * @var SettingsGetterInterface
         */
        protected $settings_getter;
        public function __construct(bool $enabled, bool $available, string $required_plans_list, \Objectiv\Plugins\Checkout\Interfaces\SettingsGetterInterface $settings_getter)
        {
        }
        public function init()
        {
        }
        public function check_if_cfw_is_enabled()
        {
        }
        /**
         * @return bool
         */
        public function is_active() : bool
        {
        }
        protected abstract function run_if_cfw_is_enabled();
    }
    class SideCart extends \Objectiv\Plugins\Checkout\Features\FeaturesAbstract
    {
        protected $item_just_added_to_cart = false;
        protected $order_bumps_controller = false;
        public function __construct(bool $enabled, bool $available, string $required_plans_list, \Objectiv\Plugins\Checkout\Interfaces\SettingsGetterInterface $settings_getter, \Objectiv\Plugins\Checkout\Features\OrderBumps $order_bumps_controller)
        {
        }
        public function init()
        {
        }
        protected function run_if_cfw_is_enabled()
        {
        }
        public function run_sidecart()
        {
        }
        public function detect_item_just_added_to_cart()
        {
        }
        public function make_sure_cart_fragments_script_is_enqueued()
        {
        }
        public function add_delete_button(\Objectiv\Plugins\Checkout\Interfaces\ItemInterface $item)
        {
        }
        public function output_side_cart_and_overlay_markup()
        {
        }
        public function get_side_cart_fragment()
        {
        }
        /**
         * @param array|null $data
         * @return bool
         */
        public function does_cart_qualifies_for_free_shipping(array $data = null) : bool
        {
        }
        /**
         * @param array|null $data
         * @return float|null
         */
        public function get_remaining_amount_to_qualify_for_free_shipping(array $data = null) : ?float
        {
        }
        /**
         * @param array|null $data
         * @return int
         */
        public function get_fill_percentage(array $data = null) : int
        {
        }
        /**
         * @return array
         */
        public function get_free_shipping_data() : array
        {
        }
        public function maybe_output_shipping_progress_bar()
        {
        }
        public function add_custom_css_property($properties)
        {
        }
        public function add_side_cart_to_fragments(array $fragments) : array
        {
        }
        public function add_localized_settings(array $event_data) : array
        {
        }
        public function remove_cart_breadcrumb($breadcrumbs)
        {
        }
        public function render_shortcode($attributes) : string
        {
        }
        public function run_on_plugin_activation()
        {
        }
        public static function get_floating_cart_icon() : string
        {
        }
        public static function get_cart_icon(string $additional_class = '') : string
        {
        }
        public static function get_quantity() : string
        {
        }
        public static function get_cart_icon_file_contents() : string
        {
        }
        public function output_cart_edit_item_quantity_control(array $cart_item, string $cart_item_key, \Objectiv\Plugins\Checkout\Interfaces\ItemInterface $item)
        {
        }
    }
    class Pickup extends \Objectiv\Plugins\Checkout\Features\FeaturesAbstract
    {
        protected function run_if_cfw_is_enabled()
        {
        }
        public function on_delivery_method_changed()
        {
        }
        public function render_delivery_methods()
        {
        }
        public function render_pickup_methods()
        {
        }
        public function maybe_change_delivery_method($post_data)
        {
        }
        public function filter_available_shipping_methods($methods) : array
        {
        }
        public function init()
        {
        }
        public function run_on_plugin_activation()
        {
        }
        /**
         * Get pickup methods
         *
         * @param array $methods
         *
         * @return array
         */
        public function get_pickup_methods(array $methods = array()) : array
        {
        }
        public function add_localized_settings($event_data) : array
        {
        }
        public function register_post_type()
        {
        }
        public function map_capabilities()
        {
        }
        public static function get_post_type() : string
        {
        }
        public static function pickup_is_selected() : bool
        {
        }
        public function filter_ship_to_label($label) : string
        {
        }
        public function filter_shipping_address($address) : string
        {
        }
        public function filter_show_shipping_tab($show) : bool
        {
        }
        public function filter_shipping_totals_label($label) : string
        {
        }
        /**
         * @throws \WC_Data_Exception
         */
        public function handle_order_meta(int $order_id)
        {
        }
        public function pickup_instructions_wrapped(\WC_Order $order)
        {
        }
        public function pickup_instructions(\WC_Order $order)
        {
        }
        public function add_pickup_location_column_header(array $columns) : array
        {
        }
        public function pickup_location_column_content($column, $post_id)
        {
        }
        public function pickup_location_view_order(\WC_Order $order)
        {
        }
        public function unrequire_checkout_fields($fields) : array
        {
        }
        public function handle_missing_shipping_country($data) : array
        {
        }
        public function handle_invalid_shipping_country_shim($countries) : array
        {
        }
        public static function get_pickup_times()
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     */
    class GoogleAddressAutocomplete extends \Objectiv\Plugins\Checkout\Features\FeaturesAbstract
    {
        protected $google_api_key_settings_page_url;
        public function __construct(bool $enabled, bool $available, string $required_plans_list, \Objectiv\Plugins\Checkout\Interfaces\SettingsGetterInterface $settings_getter, string $google_api_key_settings_page_url)
        {
        }
        protected function run_if_cfw_is_enabled()
        {
        }
        public function enqueue_scripts()
        {
        }
        /**
         * Add localized settings
         *
         * @param array $event_data
         * @return array
         */
        public function add_localized_settings(array $event_data) : array
        {
        }
        public function init()
        {
        }
        public function output_admin_setting(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $checkout_admin_page)
        {
        }
        public function run_on_plugin_activation()
        {
        }
    }
    class SmartyStreets extends \Objectiv\Plugins\Checkout\Features\FeaturesAbstract
    {
        public function init()
        {
        }
        protected function run_if_cfw_is_enabled()
        {
        }
        /**
         * Output admin settings
         *
         * @param PageAbstract $checkout_admin_page
         */
        public function output_admin_settings(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $checkout_admin_page)
        {
        }
        /**
         * Add localized settings
         *
         * @param array $event_data
         * @return array
         */
        public function add_localized_settings(array $event_data) : array
        {
        }
        public function output_modal()
        {
        }
        public function load_ajax_action()
        {
        }
        public function run_on_plugin_activation()
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     */
    class TrustBadges extends \Objectiv\Plugins\Checkout\Features\FeaturesAbstract
    {
        protected $trust_badges_field_name;
        /**
         * TrustBadges constructor.
         *
         * @param bool $enabled
         * @param bool $available
         * @param string $required_plans_list
         * @param SettingsGetterInterface $settings_getter
         * @param string $trust_badges_field_name
         */
        public function __construct(bool $enabled, bool $available, string $required_plans_list, \Objectiv\Plugins\Checkout\Interfaces\SettingsGetterInterface $settings_getter, string $trust_badges_field_name)
        {
        }
        protected function run_if_cfw_is_enabled()
        {
        }
        public function output_trust_badges()
        {
        }
        public function init()
        {
        }
        public function output_admin_page_settings(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $cart_summary_admin_page)
        {
        }
        public function trust_badge_row(int $index = null, int $badge_attachment_id = null, string $title = null, string $description = null)
        {
        }
        public function run_on_plugin_activation()
        {
        }
        protected function get_trust_badges_admin_fields(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $cart_summary_admin_page)
        {
        }
    }
    class PhpSnippets extends \Objectiv\Plugins\Checkout\Features\FeaturesAbstract
    {
        protected $php_snippets_field_name;
        public function __construct(bool $enabled, bool $available, string $required_plans_list, \Objectiv\Plugins\Checkout\Interfaces\SettingsGetterInterface $settings_getter, string $php_snippets_field_name)
        {
        }
        protected function run_if_cfw_is_enabled()
        {
        }
        public function init()
        {
        }
        /**
         * @param PageAbstract $advanced_admin_page
         */
        public function output_admin_settings(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $advanced_admin_page)
        {
        }
        public function run_on_plugin_activation()
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     */
    class FetchifyAddressAutocomplete extends \Objectiv\Plugins\Checkout\Features\FeaturesAbstract
    {
        protected function run_if_cfw_is_enabled()
        {
        }
        public function enqueue_scripts()
        {
        }
        /**
         * Add localized settings
         *
         * @param array $event_data
         *
         * @return array
         */
        public function add_localized_settings(array $event_data) : array
        {
        }
        public function init()
        {
        }
        public function add_search_field($fields)
        {
        }
        public function output_admin_setting(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $checkout_admin_page)
        {
        }
        public function run_on_plugin_activation()
        {
        }
    }
    class OrderBumps extends \Objectiv\Plugins\Checkout\Features\FeaturesAbstract
    {
        public function __construct(bool $available, string $required_plans_list, \Objectiv\Plugins\Checkout\Interfaces\SettingsGetterInterface $settings_getter)
        {
        }
        public function init()
        {
        }
        protected function run_if_cfw_is_enabled()
        {
        }
        public function unhook_order_bumps_output()
        {
        }
        /**
         * Handle order meta
         *
         * @param int $order_id
         * @throws Exception
         */
        public function handle_order_meta(int $order_id)
        {
        }
        /**
         * Record bump stats
         *
         * @throws Exception
         */
        public function record_bump_stats(array $purchased_bump_ids)
        {
        }
        protected function get_purchased_bump_ids($order_id) : array
        {
        }
        /**
         * Output cart summary bumps
         *
         * @throws Exception
         */
        public function output_cart_summary_bumps()
        {
        }
        /**
         * Output payment tab bumps
         *
         * @throws Exception
         */
        public function output_payment_tab_bumps()
        {
        }
        /**
         * Output mobile bumps
         *
         * @throws Exception
         */
        public function output_mobile_bumps()
        {
        }
        /**
         * Output bumps
         *
         * @throws Exception
         */
        public function output_bumps(string $location = 'all', string $container_class = '')
        {
        }
        /**
         * Add bumps to update checkout
         *
         * @param mixed $fragments
         *
         * @return array
         * @throws Exception
         */
        public function add_bumps_to_update_checkout($fragments) : array
        {
        }
        /**
         * Handle adding order bump to cart
         *
         * @param $post_data
         *
         * @return bool
         */
        public function handle_adding_order_bump_to_cart($post_data) : bool
        {
        }
        /**
         * Maybe override cart item subtotal
         *
         * @param $subtotal
         * @param $cart_item
         * @return string
         * @throws Exception
         */
        public function maybe_override_cart_item_subtotal($subtotal, $cart_item) : string
        {
        }
        /**
         * Sync bump cart prices
         *
         * @param WC_Cart $cart
         * @throws Exception
         */
        public function sync_bump_cart_prices(\WC_Cart $cart)
        {
        }
        /**
         * Save bump meta to order items
         *
         * @param $item
         * @param $cart_item_key
         * @param array $values
         * @throws Exception
         */
        public function save_bump_meta_to_order_items($item, $cart_item_key, array $values)
        {
        }
        /**
         * Show bump discount on cart item
         *
         * @param string $price_html
         * @param array $cart_item
         *
         * @return string
         */
        public function show_bump_discount_on_cart_item(string $price_html, array $cart_item) : string
        {
        }
        public function admin_filter_select()
        {
        }
        /**
         * Filter orders query
         *
         * @param $vars
         * @return array
         */
        public static function filter_orders_query($vars) : array
        {
        }
        public function maybe_remove_bump_from_cart()
        {
        }
        public function maybe_disable_cart_editing($result, $cart_item) : bool
        {
        }
        public function maybe_prevent_quantity_changes($product, $cart_item)
        {
        }
        public function correct_cart_bump_subtotals($product, $cart_item)
        {
        }
    }
    class OnePageCheckout extends \Objectiv\Plugins\Checkout\Features\FeaturesAbstract
    {
        protected function run_if_cfw_is_enabled()
        {
        }
        public function one_page_checkout_layout()
        {
        }
        /**
         * @param array $event_data
         * @return array
         */
        public function add_localized_settings(array $event_data) : array
        {
        }
        /**
         * @param string $classes
         * @return string
         */
        public function add_class_to_main_container(string $classes) : string
        {
        }
        public function init()
        {
        }
        /**
         * @param PageAbstract $checkout_admin_page
         */
        public function output_settings(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $checkout_admin_page)
        {
        }
        public function run_on_plugin_activation()
        {
        }
    }
    class OrderReviewStep extends \Objectiv\Plugins\Checkout\Features\FeaturesAbstract
    {
        protected function run_if_cfw_is_enabled()
        {
        }
        public function unhook()
        {
        }
        public function order_review_tab_layout()
        {
        }
        public function add_localized_settings($event_data) : array
        {
        }
        public function init()
        {
        }
        public function output_admin_settings(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $checkout_admin_page)
        {
        }
        public function run_on_plugin_activation()
        {
        }
        public function add_order_review_step_tab($tabs)
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     */
    class HideOptionalAddressFields extends \Objectiv\Plugins\Checkout\Features\FeaturesAbstract
    {
        protected function run_if_cfw_is_enabled()
        {
        }
        function hide_optional_billing_address_fields($fields) : array
        {
        }
        function hide_optional_shipping_address_fields($fields) : array
        {
        }
        function hide_optional_address_fields(array $fields, string $fieldset) : array
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     */
    class InternationalPhoneField extends \Objectiv\Plugins\Checkout\Features\FeaturesAbstract
    {
        protected function run_if_cfw_is_enabled()
        {
        }
        public function shim_hidden_phone_formatted_phone_field($fields) : array
        {
        }
        /**
         * @param array $event_data
         * @return array
         */
        public function add_localized_settings(array $event_data) : array
        {
        }
        public function init()
        {
        }
        public function output_admin_setting(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $checkout_admin_page)
        {
        }
        public function run_on_plugin_activation()
        {
        }
        public function override_phone_numbers()
        {
        }
        public function add_billing_phone_custom_validator($fields) : array
        {
        }
        public function add_shipping_phone_custom_validator($fields) : array
        {
        }
    }
    /**
     * Cart editing at checkout feature
     *
     * @link checkoutwc.com
     * @since 5.0.0
     */
    class CartEditingAtCheckout extends \Objectiv\Plugins\Checkout\Features\FeaturesAbstract
    {
        protected function run_if_cfw_is_enabled()
        {
        }
        public function init()
        {
        }
        /**
         * Handle update_checkout
         *
         * @param string $post_data
         */
        public function handle_update_checkout(string $raw_post_data)
        {
        }
        public function output_cart_edit_item_quantity_control(array $cart_item, string $cart_item_key, \Objectiv\Plugins\Checkout\Interfaces\ItemInterface $item)
        {
        }
        /**
         * Output admin fields
         *
         * @param PageAbstract $cart_summary_admin_page
         */
        public function output_admin_fields(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $cart_summary_admin_page)
        {
        }
        public function run_on_plugin_activation()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Factories {
    class BumpFactory
    {
        public static function get(int $post_id) : \Objectiv\Plugins\Checkout\Interfaces\BumpInterface
        {
        }
        /**
         * @return BumpAbstract[]
         * @throws Exception
         */
        public static function get_all() : array
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\API {
    interface SettingInterface
    {
    }
    class SettingsAPI
    {
        protected $settings = array();
        public function __construct()
        {
        }
        public function init()
        {
        }
        public function register_route()
        {
        }
        public function readable_callback(\WP_REST_Request $request)
        {
        }
        public function editable_callback(\WP_REST_Request $request)
        {
        }
        public function permission_callback(\WP_REST_Request $request) : bool
        {
        }
        public function validate_key_callback($value, \WP_REST_Request $request, string $param) : bool
        {
        }
        public function validate_value_callback($value, \WP_REST_Request $request, string $param) : bool
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Admin {
    /**
     * WP Tabbed Navigation
     *
     * Automate creating a tabbed navigation and maintaining tabbed states
     *
     * @since      0.2.0
     * @package    Advanced_Content_Templates
     * @subpackage Advanced_Content_Templates/includes
     */
    class TabNavigation
    {
        /**
         * Constructor.
         *
         * @param string $title Admin page title.
         * @param string $selected_tab_query_arg (optional) Selected tab query arg.
         * @since 0.1.0
         *
         */
        public function __construct(string $title, string $selected_tab_query_arg = 'subpage')
        {
        }
        /**
         * Adds tab to navigation.
         *
         * @param string $title Tab title.
         * @param string $url   Admin page URL.
         * @param string|boolean $tab_slug (optional) The tab slug used for matching active tab.
         *@since 0.1.0
         *
         */
        public function add_tab(string $title, string $url, $tab_slug = false)
        {
        }
        /**
         * Removes tab from navigation.
         *
         * @param string $title Tab title.
         * @since 0.1.0
         *
         */
        public function remove_tab(string $title)
        {
        }
        /**
         * Returns markup for tab navigation.
         *
         * @since 0.1.0
         *
         * @return string Tab markup.
         */
        public function get_tabs() : string
        {
        }
        /**
         * Outputs tab markup.
         *
         * @since 0.1.0
         */
        public function display_tabs()
        {
        }
    }
    class ShippingPhoneController
    {
        public function __construct()
        {
        }
        public function init()
        {
        }
        public function shipping_phone_display_admin_order_meta($order)
        {
        }
        /**
         * Save shipping phone
         *
         * @throws \WC_Data_Exception
         */
        public function save_shipping_phone($order_id)
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Admin\Notices {
    abstract class NoticeAbstract
    {
        public function __construct()
        {
        }
        public function init()
        {
        }
        public abstract function maybe_show();
    }
    class InvalidLicenseKeyNotice extends \Objectiv\Plugins\Checkout\Admin\Notices\NoticeAbstract
    {
        public function maybe_show()
        {
        }
    }
    class TemplateDisabledNotice extends \Objectiv\Plugins\Checkout\Admin\Notices\NoticeAbstract
    {
        public function maybe_show()
        {
        }
    }
    class CompatibilityNotice extends \Objectiv\Plugins\Checkout\Admin\Notices\NoticeAbstract
    {
        public function maybe_show()
        {
        }
    }
    class WelcomeNotice extends \Objectiv\Plugins\Checkout\Admin\Notices\NoticeAbstract
    {
        public function __construct()
        {
        }
        public function maybe_show()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Admin {
    class WooCommerceAdminScreenAugmenter
    {
        public function __construct()
        {
        }
        public function init()
        {
        }
        public function output_woocommerce_account_settings_notice()
        {
        }
        public function output_woocommerce_product_settings_notice()
        {
        }
        public function mark_possibly_overridden_account_settings(array $settings) : array
        {
        }
        public function mark_possibly_overridden_product_settings(array $settings) : array
        {
        }
    }
    class DataUpgrader
    {
        public function __construct()
        {
        }
        /**
         * Init
         *
         * @throws Exception
         */
        public function init()
        {
        }
    }
    class WelcomeScreenActivationRedirector
    {
        public function welcome_screen_do_activation_redirect()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Admin\Pages {
    /**
     * Class Admin
     *
     * @link checkoutwc.com
     * @since 1.0.0
     * @package Objectiv\Plugins\Checkout\Core
     */
    abstract class PageAbstract
    {
        protected $title;
        protected $capability;
        protected $slug;
        protected $priority = 100;
        protected static $parent_slug = 'cfw-settings';
        /**
         * PageAbstract constructor.
         *
         * @param $title
         * @param $capability
         * @param string|null $slug
         */
        public function __construct($title, $capability, string $slug = null)
        {
        }
        /**
         * Set priority of page in menu
         *
         * @param int $priority
         * @return $this
         */
        public function set_priority(int $priority) : \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
        {
        }
        public function init()
        {
        }
        public function setup_menu()
        {
        }
        public function get_url() : string
        {
        }
        public function is_current_page() : bool
        {
        }
        public abstract function output();
        /**
         * The admin page wrap
         *
         * @since 1.0.0
         */
        public function output_with_wrap()
        {
        }
        public function maybe_show_overridden_setting_notice($show = false, $replacement_text = '')
        {
        }
        public function output_form_open()
        {
        }
        public function output_form_close()
        {
        }
        /**
         * Get the upgrade required notice
         *
         * @param string $required_plans
         * @return string
         */
        public function get_upgrade_required_notice(string $required_plans) : string
        {
        }
        /**
         * Output radio group row
         *
         * @param string $setting
         * @param string $label
         * @param string $description
         * @param mixed $default_value
         * @param array $options
         * @param array $descriptions
         * @param array $args
         */
        public function output_radio_group_row(string $setting, string $label, string $description, $default_value, array $options, array $descriptions, array $args = array())
        {
        }
        /**
         * Output horizontal icon radio group row
         *
         * @param string $setting
         * @param string $label
         * @param string $description
         * @param mixed $default_value
         * @param array $options
         * @param array $descriptions
         * @param array $args
         */
        public function output_horizontal_icon_radio_group_row(string $setting, string $label, string $description, $default_value, array $options, array $descriptions, array $args = array())
        {
        }
        public function output_countries_multiselect(string $setting, string $label, string $description, array $selected_options, array $args = array()) : void
        {
        }
        public function output_checkbox_group(string $setting, string $label, string $description, array $options, array $selected_options, array $args = array())
        {
        }
        /**
         * Output checkbox row
         *
         * @param string $setting
         * @param string $long_label
         * @param string $description
         * @param array $args
         */
        public function output_checkbox_row(string $setting, string $long_label, string $description = '', array $args = array())
        {
        }
        /**
         * Output toggle checkbox
         *
         * @param string $setting
         * @param string $label
         * @param string $description
         * @param bool $enabled
         * @param bool $show_overridden_notice
         * @param string $overridden_notice
         */
        public function output_toggle_checkbox(string $setting, string $label, string $description, bool $enabled = true, bool $show_overridden_notice = false, string $overridden_notice = '')
        {
        }
        /**
         * Output text input row
         *
         * @param string $setting
         * @param string $label
         * @param string $description
         */
        public function output_text_input_row(string $setting, string $label, string $description, array $args = array())
        {
        }
        public function output_color_picker_input(string $setting, string $label, string $default_value, $args = array())
        {
        }
        /**
         * Output number input row
         *
         * @param string $setting
         * @param string $label
         * @param string $description
         * @param array $args
         */
        public function output_number_input_row(string $setting, string $label, string $description, array $args = array())
        {
        }
        /**
         * Output textarea row
         *
         * @param string $setting
         * @param string $label
         * @param string $description
         * @param array $args
         */
        public function output_textarea_row(string $setting, string $label, string $description, array $args = array())
        {
        }
        /**
         * Add admin bar menu node
         *
         * @param \WP_Admin_Bar $admin_bar
         */
        public function add_admin_bar_menu_node(\WP_Admin_Bar $admin_bar)
        {
        }
        /**
         * Can show admin bar button?
         *
         * @return bool
         */
        public function can_show_admin_bar_button() : bool
        {
        }
        /**
         * Get parent slug
         *
         * @return string
         */
        public static function get_parent_slug() : string
        {
        }
        /**
         * Get slug
         *
         * @return string
         */
        public function get_slug() : string
        {
        }
        /**
         * @param string $required_plans
         * @return string
         */
        public function get_old_style_upgrade_required_notice(string $required_plans) : string
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Admin\Pages
     * @author Clifton Griffin <clif@checkoutwc.com>
     */
    class SideCart extends \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
    {
        public function __construct()
        {
        }
        public function output()
        {
        }
        protected function get_settings() : string
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Admin\Pages
     */
    class Advanced extends \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
    {
        protected $tab_navigation;
        public function __construct()
        {
        }
        public function init()
        {
        }
        public function output()
        {
        }
        public function scripts_tab()
        {
        }
        protected function get_global_script_settings()
        {
        }
        protected function get_checkout_script_settings()
        {
        }
        protected function get_thank_you_script_settings()
        {
        }
        protected function get_order_pay_script_settings()
        {
        }
        public function advanced_tab()
        {
        }
        protected function get_experimental_settings()
        {
        }
        public function get_other_settings()
        {
        }
        public function tools_tab()
        {
        }
        public function get_export_settings()
        {
        }
        public function get_import_settings()
        {
        }
        public function get_current_tab()
        {
        }
        /**
         * Generate Settings JSON file
         *
         * @since  3.8.0
         *
         * @return void
         */
        public static function generate_settings_export()
        {
        }
        /**
         * Upload Settings
         *
         * @since  3.8.0
         *
         * @return void
         */
        public function maybe_upload_settings()
        {
        }
        /**
         * Upload Logo
         *
         * @param $file_url
         * @return int|\WP_Error
         * @since  3.8.0
         */
        public function upload_logo($file_url)
        {
        }
    }
    class PageController
    {
        protected $pages = array();
        public function __construct(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract ...$pages)
        {
        }
        public function init()
        {
        }
        public function is_cfw_admin_page() : bool
        {
        }
        public function enqueue_scripts()
        {
        }
        protected function maybe_add_body_class()
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Admin\Pages
     */
    class Checkout extends \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
    {
        public function __construct()
        {
        }
        public function output()
        {
        }
        public function get_steps_fields()
        {
        }
        public function get_login_and_registration_fields()
        {
        }
        public function get_field_option_fields()
        {
        }
        public function get_address_options_fields()
        {
        }
        public function get_address_completion_and_validation_fields()
        {
        }
        public function get_mobile_options_fields()
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Admin\Pages
     * @author Clifton Griffin <clif@checkoutwc.com>
     */
    class TrustBadges extends \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
    {
        public function __construct()
        {
        }
        public function output()
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Admin\Pages
     */
    class Integrations extends \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
    {
        public function __construct()
        {
        }
        public function output()
        {
        }
        protected function get_settings()
        {
        }
        protected function get_integration_settings()
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Admin\Pages
     * @author Clifton Griffin <clif@checkoutwc.com>
     */
    class OrderPay extends \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
    {
        public function __construct()
        {
        }
        public function output()
        {
        }
        protected function get_settings()
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Admin\Pages
     */
    class Appearance extends \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
    {
        protected $settings_manager;
        protected $tabbed_navigation;
        public function __construct(\Objectiv\Plugins\Checkout\Managers\SettingsManager $settings_manager)
        {
        }
        public function init()
        {
        }
        public function maybe_activate_theme()
        {
        }
        public function enqueue_assets()
        {
        }
        public function setup_tabs()
        {
        }
        public function output()
        {
        }
        public function templates_tab()
        {
        }
        public function design_tab()
        {
        }
        protected function get_global_settings() : string
        {
        }
        protected function get_template_settings()
        {
        }
        public function get_current_tab()
        {
        }
        public function get_fonts_list()
        {
        }
        /**
         * @return array
         */
        public static function get_theme_color_settings() : array
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Admin\Pages
     */
    class Support extends \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
    {
        public function __construct()
        {
        }
        public function output()
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Admin\Pages
     * @author Clifton Griffin <clif@checkoutwc.com>
     */
    class OrderBumps extends \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
    {
        protected $post_type_slug;
        protected $nonce_field = '_cfw_ob_nonce';
        protected $nonce_action = 'cfw_save_ob_mb';
        protected $formatted_required_plans_list;
        protected $is_available;
        public function __construct(string $post_type_slug, string $formatted_required_plans_list, bool $is_available)
        {
        }
        public function init()
        {
        }
        public function get_url() : string
        {
        }
        public function setup_menu()
        {
        }
        public function register_meta_boxes()
        {
        }
        /**
         * @param \WP_Post $post
         */
        public function render_products_meta_box(\WP_Post $post)
        {
        }
        /**
         * @param \WP_Post $post
         */
        public function render_offer_meta_box(\WP_Post $post)
        {
        }
        /**
         * @param int $post_id
         */
        public function save_metaboxes(int $post_id)
        {
        }
        public function is_current_page() : bool
        {
        }
        /**
         * The admin page wrap
         *
         * @since 1.0.0
         * @access public
         */
        public function output_with_wrap()
        {
        }
        public function maybe_show_license_upgrade_splash()
        {
        }
        /**
         * @param mixed $submenu_file
         * @return mixed
         */
        public function maybe_highlight_order_bumps_submenu_item($submenu_file)
        {
        }
        public function output()
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Admin\Pages
     * @author Clifton Griffin <clif@checkoutwc.com>
     */
    class ThankYou extends \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
    {
        public function __construct()
        {
        }
        public function output()
        {
        }
        protected function get_settings()
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Admin\Pages
     * @author Clifton Griffin <clif@checkoutwc.com>
     */
    class LocalPickup extends \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
    {
        public function __construct()
        {
        }
        public function output()
        {
        }
        function get_pickup_fields()
        {
        }
        public function get_shipping_methods() : array
        {
        }
    }
    /**
     * Start Here admin page
     *
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Admin\Pages
     */
    class General extends \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
    {
        protected $appearance_page;
        public function __construct(\Objectiv\Plugins\Checkout\Admin\Pages\Appearance $appearance_page)
        {
        }
        public function init()
        {
        }
        public function setup_menu()
        {
        }
        public function setup_main_menu_page()
        {
        }
        public function output()
        {
        }
        /**
         * @param array $plugin_info
         */
        public function recommended_plugin_card(array $plugin_info)
        {
        }
        public function get_activation_settings()
        {
        }
        public function get_licensing_settings()
        {
        }
        public function get_pick_template_content()
        {
        }
        public function get_design_content()
        {
        }
        public function get_preview_content()
        {
        }
        /**
         * Add parent node
         *
         * @param WP_Admin_Bar $admin_bar
         */
        public function add_parent_node(\WP_Admin_Bar $admin_bar)
        {
        }
        /**
         * Add admin bar menu node
         *
         * @param WP_Admin_Bar $admin_bar
         */
        public function add_admin_bar_menu_node(\WP_Admin_Bar $admin_bar)
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 7.3.0
     * @package Objectiv\Plugins\Checkout\Admin\Pages
     * @author Clifton Griffin <clif@checkoutwc.com>
     */
    class PickupLocations extends \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
    {
        protected $post_type_slug;
        protected $nonce_field = '_cfw_pl_nonce';
        protected $nonce_action = 'cfw_save_pl_mb';
        protected $formatted_required_plans_list;
        protected $is_available;
        public function __construct(string $post_type_slug, bool $is_available)
        {
        }
        public function init()
        {
        }
        public function get_url() : string
        {
        }
        public function setup_menu()
        {
        }
        public function register_meta_boxes()
        {
        }
        /**
         * @param \WP_Post $post
         */
        public function render_meta_box(\WP_Post $post)
        {
        }
        /**
         * @param int $post_id
         */
        public function save_metaboxes(int $post_id)
        {
        }
        public function is_current_page() : bool
        {
        }
        /**
         * The admin page wrap
         *
         * @since 1.0.0
         * @access public
         */
        public function output_with_wrap()
        {
        }
        public function maybe_show_license_upgrade_splash()
        {
        }
        /**
         * @param mixed $submenu_file
         * @return mixed
         */
        public function maybe_highlight_pickup_locations_submenu_item($submenu_file)
        {
        }
        public function output()
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.0.0
     * @package Objectiv\Plugins\Checkout\Admin\Pages
     */
    class CartSummary extends \Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract
    {
        public function __construct()
        {
        }
        public function output()
        {
        }
        /**
         * @return string
         */
        protected function get_settings() : string
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Admin {
    class AdminPluginsPageManager
    {
        protected $cfw_admin_url;
        public function __construct(string $cfw_admin_url)
        {
        }
        public function init()
        {
        }
        public function add_action_link($links)
        {
        }
        public function add_key_nag()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout {
    /**
     * Class Customizer
     *
     * @link checkoutwc.com
     * @since 2.4.0
     * @package Objectiv\Plugins\Checkout\Core
     */
    class Customizer
    {
        var $theme_color_settings;
        /**
         * Customizer constructor.
         *
         * @param array $theme_color_settings
         */
        public function __construct(array $theme_color_settings)
        {
        }
        public function init()
        {
        }
        public function workaround()
        {
        }
        /**
         * @param \WP_Customize_Manager $wp_customize
         */
        public function register_customizer_settings($wp_customize)
        {
        }
        public function is_correct_template_active($control) : bool
        {
        }
        public function get_customizer_field_name($setting, $keys = array())
        {
        }
    }
    class CartImageSizeAdder
    {
        /**
         * Add a new image size for our cart views
         */
        public function add_cart_image_size()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Compatibility {
    abstract class CompatibilityAbstract extends \Objectiv\Plugins\Checkout\SingletonAbstract
    {
        public final function init()
        {
        }
        /**
         * Allow some things to be run before init
         *
         * SHOULD BE AVOIDED
         */
        public function pre_init()
        {
        }
        public final function queue_checkout_and_order_pay_page_actions()
        {
        }
        /***
         * Kick-off everything here
         */
        public function run()
        {
        }
        public final function queue_order_received_actions()
        {
        }
        /**
         * Only run on order-received page
         */
        public function run_on_thankyou()
        {
        }
        /***
         * Kick-off everything here immediately
         */
        public function run_immediately()
        {
        }
        /**
         * Kick-off everything here on wp_loaded hook
         */
        public function run_on_wp_loaded()
        {
        }
        /**
         * Is dependency for this compatibility class available?
         *
         * @return bool
         */
        public function is_available() : bool
        {
        }
        /**
         * The TypeScript class loaded for this module as well as the parameters it needs to execute
         *
         * @param array $compatibility
         *
         * @return array
         */
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
        /**
         * An array of style handles to block
         *
         * @param $styles array Array of handles to remove from styles queue.
         *
         * @return array
         */
        public function remove_styles(array $styles) : array
        {
        }
        /**
         * An array of script handles to block
         *
         * @param $scripts array Array of handles to remove from scripts queue.
         *
         * @return mixed
         */
        public function remove_scripts(array $scripts)
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Compatibility\Gateways {
    class NMI extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class PayPalCheckout extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function is_checkout($is_checkout)
        {
        }
    }
    class KlarnaPayment extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function klarna_payments_content($count)
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
        public function toObject($array)
        {
        }
    }
    class Stripe extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        protected $stripe_request_button_height = 'default';
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run()
        {
        }
        public function add_payment_request_buttons()
        {
        }
        public function override_btn_height($params) : array
        {
        }
        public function add_payment_request_separator()
        {
        }
        public function process_payment_request_ajax_checkout()
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class PaymentPluginsPayPal extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function add_payment_method_data($data) : array
        {
        }
    }
    class WooCommercePayments extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run()
        {
        }
        public function add_payment_request_buttons()
        {
        }
        public function add_payment_request_separator()
        {
        }
        public function process_payment_request_ajax_checkout()
        {
        }
        public function modify_localized_data()
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class AfterPayKrokedil extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function add_thickbox()
        {
        }
        public function customer_precheck()
        {
        }
    }
    class AmazonPayLegacy extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        /**
         * The WC_Gateway_Amazon_Payments_Advanced_Legacy instance
         *
         * @var \WC_Gateway_Amazon_Payments_Advanced_Legacy
         */
        protected $gateway;
        protected $legacy = false;
        public function is_available() : bool
        {
        }
        protected function get_gateway()
        {
        }
        public function pre_init()
        {
        }
        public function start()
        {
        }
        public function checkout_init()
        {
        }
        public function remove_banners()
        {
        }
        public function shim_email_field()
        {
        }
        public function runtime_styles()
        {
        }
        public function queue_widgets()
        {
        }
        public function address_widget()
        {
        }
        public function payment_widget()
        {
        }
        public function output_shim_divs_open()
        {
        }
        public function output_shim_divs_close()
        {
        }
        public function is_logged_in() : bool
        {
        }
        /**
         * Amazon Pay is toggling visibility of address fields on init starting in 1.13.x
         *
         * This fixes that annoying behavior
         */
        public function protect_shipping_fields()
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
        /**
         * Get the shipping address from Amazon and store in session.
         *
         * This makes tax/shipping rate calculation possible on AddressBook Widget selection.
         *
         * @since 1.0.0
         * @version 1.8.0
         */
        public function store_shipping_info_in_session()
        {
        }
        public function disable_refresh()
        {
        }
    }
    class BraintreeForWooCommerce extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function render_banner_buttons()
        {
        }
        function force_pp_button_height($options)
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class WooCommercePayPalPayments extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function is_checkout($is_checkout) : bool
        {
        }
    }
    class Vipps extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function add_vipps_button()
        {
        }
    }
    class PayPalForWooCommerce extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
        public function pre_init()
        {
        }
        public function maybe_unrequire_fields()
        {
        }
        public function run()
        {
        }
        public function modify_payment_button_output($button_output)
        {
        }
        public function add_paypal_express_to_checkout()
        {
        }
        public function add_notice()
        {
        }
        public function hidden_email_field()
        {
        }
    }
    class PostFinance extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run_immediately()
        {
        }
        public function maybe_suppress_checkout($load)
        {
        }
    }
    class PayPalPlusCw extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class WooCommercePensoPay extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class AmazonPayV1 extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        /**
         * The WC_Amazon_Payments_Advanced instance
         *
         * @var \WC_Amazon_Payments_Advanced
         */
        protected $amazon_payments = null;
        /**
         * The WC_Gateway_Amazon_Payments_Advanced instance
         *
         * @var \WC_Gateway_Amazon_Payments_Advanced
         */
        protected $wc_gateway = null;
        protected $ref_id = '';
        protected $shipping_info_helper = null;
        protected $gateway_classes = array('WC_Gateway_Amazon_Payments_Advanced_Subscriptions', 'WC_Gateway_Amazon_Payments_Advanced');
        protected $available = false;
        /**
         * Kick off the search for the instantiated gateway
         */
        public function pre_init()
        {
        }
        /**
         * Get the amazon gateway
         *
         * @param $gateways
         *
         * @return void
         */
        public function get_amazon_gateway()
        {
        }
        public function is_available() : bool
        {
        }
        public function run_on_wp_loaded()
        {
        }
        public function shim_email_field()
        {
        }
        public function runtime_styles()
        {
        }
        public function remove_banners()
        {
        }
        /**
         * Mimics amazons checkout_init but with our hooks instead. See the same function name in WC_Amazon_Payments_Advanced
         * for more details
         */
        public function checkout_init()
        {
        }
        public function queue_widgets()
        {
        }
        public function address_widget()
        {
        }
        public function payment_widget()
        {
        }
        public function output_shim_divs_open()
        {
        }
        public function output_shim_divs_close()
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
        /**
         * Amazon Pay is toggling visibility of adress fields on init starting in 1.13.x
         *
         * This fixes that annoying behavior
         */
        public function protect_shipping_fields()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Compatibility\Gateways\Helpers {
    class AmazonPayV1ShippingInfoHelper
    {
        protected $gateway = null;
        public function __construct()
        {
        }
        /**
         * Set the gateway after we find it in woocommerce_payment_gateways
         *
         * @param $gateway
         */
        public function get_gateway($gateway)
        {
        }
        /**
         * Remove the gateway store_shipping_info_in_session and add ours
         */
        public function add_remove_shipping_info_function()
        {
        }
        /**
         * Get the shipping address from Amazon and store in session.
         *
         * This makes tax/shipping rate calculation possible on AddressBook Widget selection.
         *
         * @since 1.0.0
         * @version 1.8.0
         */
        public function store_shipping_info_in_session()
        {
        }
        public function disable_refresh()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Compatibility\Gateways {
    class StripeWooCommerce extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class ResursBank
    {
        public function init()
        {
        }
        public function maybe_add_filter()
        {
        }
        /**
         * The ResursBank plugin assumes that the payment method class is at the end of the classname. This function ensures that that is the case.
         *
         * @param string $class_string
         * @return void
         */
        public function put_payment_method_class_at_end(string $class_string)
        {
        }
    }
    class Braintree extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
        /**
         * The Braintree gateways available
         *
         * @return array
         */
        public function get_braintree_gateways_available() : array
        {
        }
        /**
         * Set the Braintree gateways available
         *
         * @param array $braintree_gateways_available
         */
        public function set_braintree_gateways_available(array $braintree_gateways_available)
        {
        }
    }
    class Square extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run()
        {
        }
        public function payment_request_buttons()
        {
        }
        public function render_error_receiver_stub()
        {
        }
        public function process_payment_request_ajax_checkout()
        {
        }
        /**
         * The typescript module to load and the params
         *
         * @param array $compatibility
         *
         * @return array
         */
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class InpsydePayPalPlus extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class AmazonPay extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        /**
         * The WC_Gateway_Amazon_Payments_Advanced instance
         *
         * @var \WC_Gateway_Amazon_Payments_Advanced
         */
        protected $gateway;
        protected $legacy = false;
        public function is_available() : bool
        {
        }
        protected function get_gateway()
        {
        }
        public function pre_init()
        {
        }
        public function start()
        {
        }
        public function checkout_init()
        {
        }
        public function remove_banners()
        {
        }
        public function shim_email_field()
        {
        }
        public function queue_widgets()
        {
        }
        public function customer_info_widget()
        {
        }
        public function is_logged_in() : bool
        {
        }
        /**
         * Amazon Pay is toggling visibility of address fields on init starting in 1.13.x
         *
         * This fixes that annoying behavior
         */
        public function protect_shipping_fields()
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class WooSquarePro extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function reorder_payment_tab()
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class KlarnaPayment3 extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function klarna_payments_content($count)
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
        public function toObject($array)
        {
        }
    }
    class KlarnaCheckout extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        protected $klarna = null;
        protected $klarna_gateway = null;
        protected $klarna_id = 'kco';
        public function is_available() : bool
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
        public function run_immediately()
        {
        }
        public function run()
        {
        }
        public function is_klarna_payment_selected() : bool
        {
        }
        public function klarna_template_hooks()
        {
        }
        public function klarna_checkout_form()
        {
        }
        public function add_klarna_pay_button()
        {
        }
        public function detect_confirmation_page($load) : bool
        {
        }
        /**
         * Unrequire the shipping phone field
         *
         * @param array $fields
         *
         * @return array
         */
        public function unrequire_shipping_phone($fields)
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Compatibility\Plugins {
    class CO2OK extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class Chronopost extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class SendCloud extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class PixelCaffeine extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function add_pixel_caffeine_body_class($classes)
        {
        }
    }
    class WooCommerceOrderDelivery extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class WooCommerceSmartCoupons extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class NIFPortugal extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function add_nif_field($fields)
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class OxygenBuilder extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class JupiterXCore extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        /**
         * Add JupiterX compiled styles to list of blocked style handles.
         *
         * @param array $styles
         *
         * @return mixed
         */
        public function remove_styles(array $styles) : array
        {
        }
    }
    class CheckoutAddressAutoComplete extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class MondialRelay extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        /**
         * Add a body class when Mondial Relay is present
         *
         * @param array $classes The body classes
         * @return array
         */
        public function add_body_class($classes) : array
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class ThemeHighCheckoutFieldEditorPro extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run()
        {
        }
        public function cleanup_select_woo($deps)
        {
        }
        /**
         * Output the integration admin settings
         *
         * @param PageAbstract $integrations
         */
        public function admin_integration_settings(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $integrations)
        {
        }
        public function thwcfe_hidden_fields_display_position() : string
        {
        }
    }
    class NLPostcodeChecker extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function disable_nl_hooks()
        {
        }
        public function modify_fields($fields)
        {
        }
        public function prevent_postcode_sort_change($locales) : array
        {
        }
        public function fix_shipping_preview($address, $checkout)
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class BigBlue extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class WooCommercePakettikauppa extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function add_shipping_email_field($fields) : array
        {
        }
    }
    class AstraAddon extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function run_on_thankyou()
        {
        }
        public function nuke_astra_styles_on_our_pages()
        {
        }
    }
    class WooFunnelsOrderBumps extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run()
        {
        }
        public function add_cfw_positions($positions)
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
        public function position_not_found($position_id, $position)
        {
        }
        public function position_fragment_not_found($position_id, $position)
        {
        }
        public function cfw_woocommerce_checkout_order_review_above_payment_gateway()
        {
        }
        public function cfw_woocommerce_checkout_order_review_above_payment_gateway_frg($fragments)
        {
        }
        public function cfw_woocommerce_checkout_order_review_below_payment_gateway()
        {
        }
        public function cfw_woocommerce_checkout_order_review_below_payment_gateway_frg($fragments)
        {
        }
        public function print_placeholder($slug)
        {
        }
        public function print_position_bump($position)
        {
        }
    }
    class WPRocket
    {
        public function init()
        {
        }
        public function exclude_css(array $excluded_css) : array
        {
        }
        public function exclude_js(array $excluded_js) : array
        {
        }
        public function maybe_delete_cache_empty_cart(array $new_settings)
        {
        }
        /** Copied from wp-rocket/inc/ThirdParty/Plugins/Ecommerce/WooCommerceSubscriber.php */
        public function delete_cache_empty_cart()
        {
        }
    }
    class GermanMarket extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run_immediately()
        {
        }
        public function override_gateway_order_button_text($button_text, $gateway)
        {
        }
    }
    class GoogleAnalyticsPro extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class TranslatePress extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
    }
    class WooCommerceMemberships
    {
        public function init()
        {
        }
        public function queue_removal()
        {
        }
        public function remove($value)
        {
        }
    }
    class CartFlows extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function admin_init()
        {
        }
        public function add_new_admin_setting($settings, $options)
        {
        }
        public function admin_add_option($options)
        {
        }
        public function admin_setting($options)
        {
        }
    }
    class WooCommercePointsandRewards extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function add_helper_script()
        {
        }
    }
    class PWGiftCardsPro extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function gift_card_remove_fix()
        {
        }
    }
    class Fattureincloud extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run_immediately()
        {
        }
        public function run()
        {
        }
        public function get_fields_wrapped()
        {
        }
        public function output_fields()
        {
        }
        public function get_fields()
        {
        }
        public function update_checkout_fragments($fragments)
        {
        }
        public function remove_scripts(array $scripts) : array
        {
        }
    }
    class MailerLite extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class MartfuryAddons extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function remove_scripts(array $scripts) : array
        {
        }
    }
    class Klaviyo extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function output_checkbox()
        {
        }
    }
    class Webshipper extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run_immediately()
        {
        }
    }
    class WooCommerceShipmentTracking extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run_on_thankyou()
        {
        }
    }
    class CraftyClicks extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class OrderDeliveryDateLite extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class WooCommerceExtendedCouponFeaturesPro extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function run_on_update_checkout()
        {
        }
    }
    class ThemeHighCheckoutFieldEditor extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run()
        {
        }
        /**
         * Output the integration admin settings
         *
         * @param PageAbstract $integrations
         */
        public function admin_integration_settings(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $integrations)
        {
        }
    }
    class EUVATNumber extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function maybe_change_placeholder($field, $key)
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class EnhancedEcommerceGoogleAnalytics extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class CheckoutManager extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class ActiveCampaign extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class EUVATAssistant
    {
        public function init()
        {
        }
        public function maybe_move_euvat_fields_to_order_step($fields)
        {
        }
        protected function move_field(string $key, array $field)
        {
        }
    }
    class UpsellOrderBumpOffer extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class UpSolutionCore extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function remove_styles(array $styles) : array
        {
        }
    }
    class WooCommerceAdvancedMessages extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run_on_update_checkout()
        {
        }
        public function add_checkoutwc_options($locations)
        {
        }
    }
    class DiviUltimateHeader extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class WooCommerceGiftCards extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function run_on_wp_loaded()
        {
        }
        /**
         * Display form to add gift card.
         *
         * @param bool $mobile
         *
         * @return void
         */
        public function display_form(bool $mobile = false)
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
        public function add_fragment($fragments)
        {
        }
    }
    class CoderockzWooDelivery extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        /**
         * Plugin expects select2 and thus provides a null option which is not desirable
         * It isn't desirable because Select 2 doesn't allow selecting the null option, but
         * withotu select2 it is selectable which throws errors
         *
         * @param $options
         * @param $args
         * @param $key
         *
         * @return void
         */
        public function remove_empty_options($options, $args, $key)
        {
        }
    }
    class OnePageCheckout extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class SUMOPaymentPlans extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class WooCommerceGermanized extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        protected $render_on_order_review_step;
        public function setup(bool $render_on_order_review_step) : self
        {
        }
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run()
        {
        }
        public function run_immediately()
        {
        }
        public function override_ppec_compat($plugins)
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class WooCommerceProductRecommendations extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        protected $side_cart_feature_active = false;
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function add_deployment_location($locations)
        {
        }
        public function setup(bool $side_cart_feature_active) : \Objectiv\Plugins\Checkout\Compatibility\Plugins\WooCommerceProductRecommendations
        {
        }
    }
    class Weglot extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run_immediately()
        {
        }
        public function override_parsley_locale($locale)
        {
        }
    }
    class WCFieldFactory extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function remove_filter()
        {
        }
    }
    class WooCommerceGermanMarket extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function run_on_update_checkout()
        {
        }
    }
    class WooCommerceAddressValidation extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class IndeedAffiliatePro extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function remove_scripts(array $scripts) : array
        {
        }
        public function remove_styles(array $styles) : array
        {
        }
    }
    class WooCommerceCarrierAgents extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function add_output_area($action_hooks)
        {
        }
    }
    class SalientWPBakery extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function remove_styles(array $styles) : array
        {
        }
    }
    class WPCProductBundles extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run_immediately()
        {
        }
        public function hide_quantity_dropdown($quantity, $cart_item)
        {
        }
    }
    class WooCommerceTipping extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function output()
        {
        }
    }
    class SavedAddressesForWooCommerce extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class WooCommerceCheckoutFieldEditor extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run_immediately()
        {
        }
        public function run()
        {
        }
        public function add_body_class($classes)
        {
        }
        /**
         * Output the admin settings
         *
         * @param Admin\Pages\PageAbstract $integrations
         */
        public function admin_integration_settings(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $integrations)
        {
        }
        public function cleanup_classes($address_fields)
        {
        }
        public function add_additional_field_sizes() : array
        {
        }
        public function enable_notes_field() : bool
        {
        }
        public function output_custom_styles()
        {
        }
        public function maybe_redirect_to_additional_fields_tab()
        {
        }
        /**
         * Legacy field classes that we need to honor for now I guess
         *
         * @param $args
         *
         * @return mixed
         */
        public function cfw_form_field_args($args)
        {
        }
    }
    class DiviUltimateFooter extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class YITHPointsAndRewards
    {
        public function is_available() : bool
        {
        }
        public function init()
        {
        }
        public function maybe_change_template_redirect_priority($priority)
        {
        }
    }
    class FacebookForWooCommerce extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class WooCommerceEUUKVATCompliancePremium extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class WooFinvoicer extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        /**
         * Add the business ID field
         *
         * @param array $fields
         * @return array
         */
        public function add_business_id_field(array $fields)
        {
        }
    }
    class PostNL extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function disable_nl_hooks()
        {
        }
        public function add_new_fields(array $fields) : array
        {
        }
        public function prevent_postcode_sort_change(array $locales) : array
        {
        }
        public function fix_shipping_preview($address, $checkout)
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class SkyVergeCheckoutAddons extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        /**
         * Add custom Checkout Field Addons field types to the list of non-floating label field types
         *
         * @param array $types
         * @return array
         */
        public function add_non_floating_label_field_types(array $types) : array
        {
        }
        public function add_checkbox_like_field_types(array $types) : array
        {
        }
        public function set_checkout_add_ons_position() : string
        {
        }
    }
    class CashierForWooCommerce extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run_immediately()
        {
        }
        public function run()
        {
        }
        /**
         * Output the admin integration setting
         *
         * @param Admin\Pages\PageAbstract $integrations
         */
        public function admin_integration_settings(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $integrations)
        {
        }
        public function enable_notes_field() : bool
        {
        }
    }
    class StrollikCore extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class WooCommerceSubscriptions extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run_immediately()
        {
        }
        public function run()
        {
        }
        public function maybe_hide_shipping_tab($show_shipping_tab)
        {
        }
        public function disable_cfw_for_change_payment_request($result)
        {
        }
        public function override_registration_required($result)
        {
        }
    }
    class MyParcel extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function disable_nl_hooks()
        {
        }
        public function add_new_fields($fields)
        {
        }
        public function prevent_postcode_sort_change(array $locales) : array
        {
        }
        public function fix_shipping_preview($address, $checkout)
        {
        }
        /**
         * Change the delivery option output hook
         *
         * @return string
         */
        public function move_delivery_options() : string
        {
        }
    }
    class ExtraCheckoutFieldsBrazil extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function checkout_billing_fields($fields)
        {
        }
        public function checkout_shipping_fields($fields)
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
        public function suppress_optional_in_placeholder($append, $field_key)
        {
        }
    }
    class ElementorPro extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run()
        {
        }
        public function run_on_thankyou()
        {
        }
        public function maybe_load_elementor_header_footer()
        {
        }
        /**
         * Output the integration admin settings
         *
         * @param Admin\Pages\PageAbstract $integrations
         */
        public function admin_integration_setting(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $integrations)
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Compatibility\Plugins\Helpers {
    class WooCommerceProductRecommendationsSideCartLocation extends \WC_PRL_Location
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Check if the current location page is active.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Setup all supported hooks based on the location id.
         *
         * @return void
         */
        protected function setup_hooks()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Compatibility\Plugins {
    class IconicWooCommerceDeliverySlots extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function add_checkoutwc_choices($choices)
        {
        }
    }
    class CSSHero extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function remove_styles(array $styles) : array
        {
        }
        public function remove_scripts(array $scripts) : array
        {
        }
    }
    class OrderDeliveryDate extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function set_delivery_field_hook($hook)
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class ConvertKitforWooCommerce extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        /**
         * The plugin instance
         *
         * @var \CKWC_Integration
         */
        protected $plugin_instance;
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function output_convertkit_checkbox()
        {
        }
    }
    class SUMOSubscriptions extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function run_on_update_checkout()
        {
        }
        public function add_cart_item_message()
        {
        }
        public function cart_item_message($cart_item, $cart_item_key)
        {
        }
    }
    class NextGenGallery extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
    }
    class WooCommerceSubscriptionGifting extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function maybe_display_gifting_information($cart_item, $cart_item_key)
        {
        }
    }
    class MixPanel extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function mixpanel_head()
        {
        }
        public function echo_payment_start_script($WC_Mixpanel)
        {
        }
    }
    class Tickera extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class CURCYWooCommerceMultiCurrency extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function protect_bump_price_from_currency_conversion($price, $context)
        {
        }
        public function protect_captured_revenue_from_currency_conversion($revenue)
        {
        }
    }
    class PortugalVaspKios extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class PostNL4 extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function disable_nl_hooks()
        {
        }
        public function add_new_fields($fields)
        {
        }
        public function prevent_postcode_sort_change(array $locales) : array
        {
        }
        public function fix_shipping_preview($address, $checkout)
        {
        }
        /**
         * Change delivery options output hook
         *
         * @param $hook
         * @return string
         */
        public function move_delivery_options($hook) : string
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class YITHCompositeProducts
    {
        public function init()
        {
        }
        public function maybe_add_class_to_composite_items($classes, $cart_item) : string
        {
        }
    }
    class WooCommerceServices extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function run_on_update_checkout()
        {
        }
    }
    class BeaverThemer extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run()
        {
        }
        /**
         * Output the admin integration setting
         *
         * @param Admin\Pages\PageAbstract $integrations
         */
        public function admin_integration_setting(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $integrations)
        {
        }
    }
    class WCPont extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run_immediately()
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class WooCommerceProductBundles extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function bundle_add_to_cart($product_id, $quantity, $variation_id, $variation_data, $metadata, $product)
        {
        }
        public function get_default_attributes($product) : array
        {
        }
    }
    class WooCommerceCore extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run()
        {
        }
        public function run_on_thankyou()
        {
        }
        public function sync_billing_fields_on_process_checkout()
        {
        }
        public function suppress_add_to_cart_notices_during_ajax_add_to_cart($fragments)
        {
        }
        public function suppress_add_to_cart_notices_during_checkout_redirect($url)
        {
        }
        public function highlight_countries(array $countries) : array
        {
        }
        public function fool_woo_into_handling_one_country_the_way_we_prefer(array $countries) : array
        {
        }
        public function removed_shim_country_so_woo_handles_one_country_the_way_we_prefer($field, $key, $args)
        {
        }
    }
    class ShipMondo extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class OneClickUpsells extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function add_ocu_checkout_buttons()
        {
        }
        public function gb_ocu_paypal_display_button()
        {
        }
    }
    class FreeGiftsforWooCommerce
    {
        protected $side_cart_enabled = false;
        public function init(bool $side_cart_enabled)
        {
        }
        public function prevent_redirect()
        {
        }
        public function update_cart_gifts()
        {
        }
    }
    class ApplyOnline extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function remove_styles(array $styles) : array
        {
        }
    }
    class YITHDeliveryDate extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class MyShipper extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function typescript_class_and_params(array $compatibility) : array
        {
        }
    }
    class DonationForWooCommerce extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class UltimateRewardsPoints extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function render_earn_points_message()
        {
        }
    }
    class MyCredPartialPayments extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function run_immediately()
        {
        }
        public function hide_order_total()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Compatibility\Themes {
    class Atelier extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function wp()
        {
        }
    }
    class Neve extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Minimog extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Atik extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run_immediately()
        {
        }
    }
    class Electro extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run()
        {
        }
        public function cleanup_actions()
        {
        }
    }
    class BeTheme extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run()
        {
        }
        public function force_correct_notice_templates($template, $template_name, $args, $template_path, $default_path) : string
        {
        }
    }
    class Stockie extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Konte extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Divi extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Listable extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Flatsome extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Zidane extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Astra extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run()
        {
        }
        public function run_on_thankyou()
        {
        }
        public function astra_header()
        {
        }
        public function astra_footer()
        {
        }
        public function remove_astra_scripts()
        {
        }
        /**
         * Output the admin setting for Astra support
         *
         * @param PageAbstract $integrations
         */
        public function admin_integration_setting(\Objectiv\Plugins\Checkout\Admin\Pages\PageAbstract $integrations)
        {
        }
    }
    class Genesis extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Savoy extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Avada extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function checkout_page_fixes()
        {
        }
        public function fix_avada_74()
        {
        }
        public function run_on_thankyou()
        {
        }
        public function disable_lazy_loading()
        {
        }
        /**
         * Remove Avada's CSS from the page
         *
         * @deprecated
         * @return void
         */
        public function cleanup_css()
        {
        }
        public function cleanup_css_new()
        {
        }
    }
    class Jupiter extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function unset_theme_callbacks($hook, $priority = 10)
        {
        }
    }
    class SpaSalonPro extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function run_on_thankyou()
        {
        }
    }
    class Pro extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function run_on_update_checkout()
        {
        }
        public function disable_spinner()
        {
        }
    }
    class Uncode extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Thrive extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class The7 extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Barberry extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function remove_scripts(array $scripts) : array
        {
        }
    }
    class JupiterX extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run_immediately()
        {
        }
        public function remove_actions()
        {
        }
    }
    class TheBox extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run_on_update_checkout()
        {
        }
        public function run()
        {
        }
    }
    class BeaverBuilder extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        /**
         * Add WP theme styles to list of blocked style handles.
         *
         * @param array $styles
         *
         * @return array
         */
        public function remove_styles(array $styles) : array
        {
        }
    }
    class Verso extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class TMOrganik extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function shim_headroom()
        {
        }
    }
    class OceanWP extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
        public function run()
        {
        }
        public function allow_main_js($blocked_handles)
        {
        }
        public function remove_styles(array $styles) : array
        {
        }
    }
    class Shoptimizer extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Tokoo extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Blaszok extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function pre_init()
        {
        }
    }
    class GeneratePress extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
        public function remove_gp_scripts()
        {
        }
    }
    class FuelThemes extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Flevr extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
    class Porto extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        /**
         * Add WP theme styles to list of blocked style handles.
         *
         * @param array $scripts
         *
         * @return array
         */
        public function remove_scripts(array $scripts) : array
        {
        }
        /**
         * Add WP theme styles to list of blocked style handles.
         *
         * @param array $styles
         *
         * @return array
         */
        public function remove_styles(array $styles) : array
        {
        }
    }
    class Metro
    {
        public function is_available() : bool
        {
        }
        public function init()
        {
        }
        public function maybe_run()
        {
        }
        public function run()
        {
        }
    }
    class Optimizer extends \Objectiv\Plugins\Checkout\Compatibility\CompatibilityAbstract
    {
        public function is_available() : bool
        {
        }
        public function run()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout {
    class TrustBadgeImageSizeAdder
    {
        /**
         * Add a new image size for our cart views
         */
        public function add_trust_badge_image_size()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout\Action {
    /**
     * Class CFWAction
     *
     * @link checkoutwc.com
     * @since 3.6.0
     * @package Objectiv\Plugins\Checkout\Action
     */
    abstract class CFWAction
    {
        /**
         * @since 1.0.0
         * @access protected
         * @var string $id
         */
        protected $id = '';
        /**
         * Action constructor.
         *
         * @param $id
         * @since 1.0.0
         * @access public
         */
        public function __construct($id)
        {
        }
        /**
         * @since 1.0.0
         * @access public
         * @return string
         */
        public function get_id() : string
        {
        }
        /**
         * @since 1.0.0
         * @access public
         */
        public function load()
        {
        }
        public function execute()
        {
        }
        /**
         * @param $out
         * @param int|null $status_code
         * @since 1.0.0
         * @access protected
         */
        protected function out($out, int $status_code = null)
        {
        }
    }
    /**
     * Class UpdatePaymentMethodAction
     *
     * @link checkoutwc.com
     * @since 1.0.0
     * @package Objectiv\Plugins\Checkout\Action
     */
    class UpdatePaymentMethodAction extends \Objectiv\Plugins\Checkout\Action\CFWAction
    {
        /**
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Logs in the user based on the information passed. If information is incorrect it returns an error message
         *
         * @since 1.0.0
         * @access public
         */
        public function action()
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.4.0
     * @package Objectiv\Plugins\Checkout\Action
     */
    class ValidatePostcodeAction extends \Objectiv\Plugins\Checkout\Action\CFWAction
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
    }
    /**
     * Class SmartyStreetsAddressValidationAction
     *
     * @link checkoutwc.com
     * @since 1.0.0
     * @package Objectiv\Plugins\Checkout\Action
     */
    class SmartyStreetsAddressValidationAction extends \Objectiv\Plugins\Checkout\Action\CFWAction
    {
        protected $smartystreets_auth_id;
        protected $smartystreets_auth_token;
        /**
         * @since 1.0.0
         * @access public
         */
        public function __construct($smartystreets_auth_id, $smartystreets_auth_token)
        {
        }
        public function action()
        {
        }
        /**
         * Format suggestd address
         *
         * @throws Exception
         */
        protected function format_suggested_address(array $original_address, array $suggested_address)
        {
        }
        /**
         * Get suggested address
         *
         * @throws SmartyException|Exception
         */
        protected function get_suggested_address(array $address) : array
        {
        }
        /**
         * Get domestic address suggestion
         *
         * @param array $address
         * @param USStreetApiClient $client
         *
         * @return array
         * @throws SmartyException|Exception
         */
        public function getDomesticAddressSuggestion(array $address, \SmartyStreets\PhpSdk\US_Street\Client $client) : array
        {
        }
        /**
         * @param array $address
         * @param InternationalStreetApiClient $client
         *
         * @return array
         * @throws SmartyException|Exception
         */
        public function getInternationalAddressSuggestion(array $address, \SmartyStreets\PhpSdk\International_Street\Client $client) : array
        {
        }
        /**
         * Get UK address suggestion
         *
         * @param array $address
         * @param InternationalStreetApiClient $client
         *
         * @return array
         * @throws SmartyException|Exception
         */
        public function getUKAddressSuggestion(array $address, \SmartyStreets\PhpSdk\International_Street\Client $client) : array
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.4.0
     * @package Objectiv\Plugins\Checkout\Action
     */
    class ValidateEmailDomainAction extends \Objectiv\Plugins\Checkout\Action\CFWAction
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
    }
    /**
     * Class CompleteOrderAction
     *
     * @link checkoutwc.com
     * @since 1.0.0
     * @package Objectiv\Plugins\Checkout\Action
     */
    class CompleteOrderAction extends \Objectiv\Plugins\Checkout\Action\CFWAction
    {
        /**
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Takes in the information from the order form and hands it off to Woocommerce.
         *
         * @throws Exception
         * @since 1.0.0
         * @access public
         */
        public function action()
        {
        }
        public function add_cfw_meta_data($order_id)
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.4.0
     * @package Objectiv\Plugins\Checkout\Action
     * @author Clifton Griffin <clif@objectiv.co>
     */
    class UpdateSideCart extends \Objectiv\Plugins\Checkout\Action\CFWAction
    {
        protected $order_bumps_controller;
        public function __construct(\Objectiv\Plugins\Checkout\Features\OrderBumps $order_bumps_controller)
        {
        }
        public function action()
        {
        }
    }
    /**
     * Class LostPasswordAction
     *
     * @link checkoutwc.com
     * @since 1.0.0
     * @package Objectiv\Plugins\Checkout\Action
     */
    class LostPasswordAction extends \Objectiv\Plugins\Checkout\Action\CFWAction
    {
        /**
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Logs in the user based on the information passed. If information is incorrect it returns an error message
         *
         * @since 1.0.0
         */
        public function action()
        {
        }
    }
    /**
     * Class ApplyCouponAction
     *
     * @link checkoutwc.com
     * @since 1.0.0
     * @package Objectiv\Plugins\Checkout\Action
     */
    class RemoveCouponAction extends \Objectiv\Plugins\Checkout\Action\CFWAction
    {
        /**
         * ApplyCouponAction constructor.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Applies the coupon discount and returns the new totals
         *
         * @since 1.0.0
         * @access public
         */
        public function action()
        {
        }
    }
    class UpdateCheckoutAction extends \Objectiv\Plugins\Checkout\Action\CFWAction
    {
        public function __construct()
        {
        }
        /**
         * @since 1.0.0
         * @access public
         */
        public function load()
        {
        }
        public function action()
        {
        }
        protected function get_action_output($action, $container = '')
        {
        }
    }
    /**
     * Class LogInAction
     *
     * @link checkoutwc.com
     * @since 1.0.0
     * @package Objectiv\Plugins\Checkout\Action
     */
    class LogInAction extends \Objectiv\Plugins\Checkout\Action\CFWAction
    {
        /**
         * LogInAction constructor.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Logs in the user based on the information passed. If information is incorrect it returns an error message
         *
         * @since 1.0.0
         * @access public
         */
        public function action()
        {
        }
    }
    /**
     * Class AccountExistsAction
     *
     * @link checkoutwc.com
     * @since 1.0.0
     * @package Objectiv\Plugins\Checkout\Action
     */
    class AccountExistsAction extends \Objectiv\Plugins\Checkout\Action\CFWAction
    {
        /**
         * AccountExistsAction constructor.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct()
        {
        }
        /**
         * Checks whether the account exists on the website or not
         *
         * @since 1.0.0
         * @access public
         */
        public function action()
        {
        }
    }
    /**
     * @link checkoutwc.com
     * @since 5.4.0
     * @package Objectiv\Plugins\Checkout\Action
     * @author Clifton Griffin <clif@objectiv.co>
     */
    class AddToCartAction extends \Objectiv\Plugins\Checkout\Action\CFWAction
    {
        public function __construct()
        {
        }
        public function action()
        {
        }
    }
}
namespace Objectiv\Plugins\Checkout {
    /**
     * This class is a holding tank for settings defaults that have yet to find a home
     *
     * @deprecated
     */
    class DefaultSettingsSetter
    {
        public function __construct()
        {
        }
        public function init()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\US_Reverse_Geo {
    /**
     * This client sends lookups to the SmartyStreets US Reverse Geocoding API, <br>
     *     and attaches the results to the appropriate Lookup objects.
     */
    class Client
    {
        public function __construct(\SmartyStreets\PhpSdk\Sender $sender, \SmartyStreets\PhpSdk\Serializer $serializer = null)
        {
        }
        public function sendLookup(\SmartyStreets\PhpSdk\US_Reverse_Geo\Lookup $lookup)
        {
        }
    }
    /**
     * In addition to holding all of the input data for this lookup, this class also<br>
     *     will contain the result of the lookup after it comes back from the API.
     */
    class Lookup
    {
        //endregion
        //region [ Constructors ]
        public function __construct($latitude, $longitude)
        {
        }
        //endregion
        //region [ Getters ]
        public function getResponse()
        {
        }
        public function getLatitude()
        {
        }
        public function getLongitude()
        {
        }
        //endregion
        //region [ Setters ]
        public function setResponse($response)
        {
        }
        //endregion
    }
    /**
     * @see "https://smartystreets.com/docs/cloud/us-reverse-geo-api#address"
     */
    class Address
    {
        //endregion
        //region [ Constructor ]
        public function __construct($obj = null)
        {
        }
        //endregion
        //region [ Getters ]
        public function getStreet()
        {
        }
        public function getCity()
        {
        }
        public function getStateAbbreviation()
        {
        }
        public function getZIPCode()
        {
        }
        //endregion
    }
    /**
     * @see "https://smartystreets.com/docs/cloud/us-reverse-geo-api#coordinate"
     */
    class Coordinate
    {
        //endregion
        //region [ Constructor ]
        public function __construct($obj = null)
        {
        }
        //endregion
        //region [ Getters ]
        public function getLatitude()
        {
        }
        public function getLongitude()
        {
        }
        public function getAccuracy()
        {
        }
        public function getLicense()
        {
        }
        //endregion
    }
    /**
     * A response contains possible matches for coordinates that were submitted.<br>
     *
     * @see "https://smartystreets.com/docs/cloud/us-reverse-geo-api#response"
     */
    class Response
    {
        //endregion
        public function __construct($obj = null)
        {
        }
        //region [ Getters ]
        public function getResults()
        {
        }
        //endregion
    }
    /**
     * A result is a possible match for an coordinates that were submitted.<br>
     *     A response can have multiple results.
     *
     * @see "https://smartystreets.com/docs/cloud/us-reverse-geo-api#address"
     */
    class Result
    {
        //endregion
        public function __construct($obj = null)
        {
        }
        //region [ Getters ]
        public function getAddress()
        {
        }
        public function getDistance()
        {
        }
        public function getCoordinate()
        {
        }
        //endregion
    }
}
namespace SmartyStreets\PhpSdk {
    interface Serializer
    {
        function serialize($obj);
        function deserialize($payload);
    }
}
namespace SmartyStreets\PhpSdk\US_Autocomplete {
    /**
     * This client sends lookups to the SmartyStreets US Autocomplete API, <br>
     *     and attaches the results to the appropriate Lookup objects.
     */
    class Client
    {
        public function __construct(\SmartyStreets\PhpSdk\Sender $sender, \SmartyStreets\PhpSdk\Serializer $serializer = null)
        {
        }
        public function sendLookup(\SmartyStreets\PhpSdk\US_Autocomplete\Lookup $lookup)
        {
        }
    }
    /**
     * In addition to holding all of the input data for this lookup, this class also<br>
     *     will contain the result of the lookup after it comes back from the API.
     *     @see "https://smartystreets.com/docs/cloud/us-autocomplete-api#http-request-input-fields"
     */
    class Lookup
    {
        //region [ Fields ]
        const MAX_SUGGESTIONS_DEFAULT = 10;
        const PREFER_RATIO_DEFAULT = 1 / 3.0;
        //endregion
        /**
         * If you use this constructor, don't forget to set the <b>prefix</b>. It is required.
         *  @param $prefix string The beginning of an address
         */
        public function __construct($prefix = null)
        {
        }
        public function addCityFilter($city)
        {
        }
        public function addStateFilter($stateAbbreviation)
        {
        }
        public function addPrefer($cityOrState)
        {
        }
        //region [ Getters ]
        public function getResult()
        {
        }
        public function getResultAtIndex($index)
        {
        }
        public function getPrefix()
        {
        }
        public function getMaxSuggestions()
        {
        }
        public function getCityFilter()
        {
        }
        public function getStateFilter()
        {
        }
        public function getPrefer()
        {
        }
        public function getPreferRatio()
        {
        }
        public function getGeolocateType()
        {
        }
        function getMaxSuggestionsStringIfSet()
        {
        }
        function getPreferRatioStringIfSet()
        {
        }
        //endregion
        //region [ Setter ]
        public function setResult($result)
        {
        }
        public function setPrefix($prefix)
        {
        }
        public function setMaxSuggestions($maxSuggestions)
        {
        }
        public function setCityFilter($cityFilter)
        {
        }
        public function setStateFilter($stateFilter)
        {
        }
        public function setPrefer($prefer)
        {
        }
        public function setPreferRatio($preferRatio)
        {
        }
        public function setGeolocateType(\SmartyStreets\PhpSdk\US_Autocomplete\GeolocateType $geolocateType)
        {
        }
        //endregion
    }
    /**
     * This field corresponds to the <b>geolocate</b> and <b>geolocate_precision</b> fields in the US Autocomplete API.
     *
     * @see "https://smartystreets.com/docs/cloud/us-autocomplete-api#http-request-input-fields"
     */
    class GeolocateType
    {
        public function __construct($name)
        {
        }
        public function getName()
        {
        }
    }
    class Result
    {
        public function __construct($obj = null)
        {
        }
        public function getSuggestions()
        {
        }
        public function getSuggestion($index)
        {
        }
    }
    /**
     * @see "https://smartystreets.com/docs/cloud/us-autocomplete-api#http-response"
     */
    class Suggestion
    {
        public function __construct($obj = null)
        {
        }
        public function getText()
        {
        }
        public function getStreetLine()
        {
        }
        public function getCity()
        {
        }
        public function getState()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk {
    interface Sender
    {
        function send(\SmartyStreets\PhpSdk\Request $request);
    }
    class LicenseSender implements \SmartyStreets\PhpSdk\Sender
    {
        public function __construct($licenses, \SmartyStreets\PhpSdk\Sender $inner)
        {
        }
        public function send(\SmartyStreets\PhpSdk\Request $request)
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\International_Autocomplete {
    /**
     * This client sends lookups to the SmartyStreets International Autocomplete API, <br>
     *     and attaches the results to the appropriate Lookup objects.
     */
    class Client
    {
        public function __construct(\SmartyStreets\PhpSdk\Sender $sender, \SmartyStreets\PhpSdk\Serializer $serializer = null)
        {
        }
        public function sendLookup(\SmartyStreets\PhpSdk\International_Autocomplete\Lookup $lookup)
        {
        }
    }
    /**
     * In addition to holding all of the input data for this lookup, this class also<br>
     *     will contain the result of the lookup after it comes back from the API.
     *     @see "https://smartystreets.com/docs/cloud/international-address-autocomplete"
     */
    class Lookup
    {
        //region [ Fields ]
        const MAX_RESULTS_DEFAULT = 10;
        //endregion
        /**
         * If you use this constructor, don't forget to set the <b>prefix</b>. It is required.
         *  @param $search string The beginning of an address
         */
        public function __construct($search = null)
        {
        }
        //region [ Getters ]
        public function getResult()
        {
        }
        public function getResultAtIndex($index)
        {
        }
        public function getCountry()
        {
        }
        public function getSearch()
        {
        }
        public function getMaxResults()
        {
        }
        public function getAdministrativeArea()
        {
        }
        public function getLocality()
        {
        }
        public function getPostalCode()
        {
        }
        //endregion
        //region [ Setter ]
        public function setResult($result)
        {
        }
        public function setCountry($country)
        {
        }
        public function setSearch($search)
        {
        }
        public function setMaxResults($maxResults)
        {
        }
        public function setAdministrativeArea($administrativeArea)
        {
        }
        public function setLocality($locality)
        {
        }
        public function setPostalCode($postalCode)
        {
        }
        //endregion
    }
    /**
     * A candidate is a possible match for an address that was submitted.<br>
     *     A lookup can have multiple candidates if the address was ambiguous, and<br>
     *     the maxCandidates field is set higher than 1.
     *
     * @see "https://smartystreets.com/docs/cloud/international-address-autocomplete"
     */
    class Candidate
    {
        public function __construct($obj = null)
        {
        }
        //region [Getters]
        public function getStreet()
        {
        }
        public function getLocality()
        {
        }
        public function getAdministrativeArea()
        {
        }
        public function getPostalCode()
        {
        }
        public function getCountryISO3()
        {
        }
        //endregion
    }
    class Result
    {
        public function __construct($obj = null)
        {
        }
        public function getCandidates()
        {
        }
        public function getCandidate($index)
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\US_Street {
    /**
     * This client sends lookups to the SmartyStreets US Street API, <br>
     *     and attaches the results to the appropriate Lookup objects.
     */
    class Client
    {
        public function __construct(\SmartyStreets\PhpSdk\Sender $sender, \SmartyStreets\PhpSdk\Serializer $serializer = null)
        {
        }
        /**
         * @param lookup Lookup
         * @throws SmartyException
         * @throws IOException
         */
        public function sendLookup(\SmartyStreets\PhpSdk\US_Street\Lookup $lookup)
        {
        }
        /**
         * Sends a batch of no more than 100 lookups.
         *
         * @param batch Batch must contain between 1 and 100 Lookup objects
         * @throws SmartyException
         * @throws IOException
         */
        public function sendBatch(\SmartyStreets\PhpSdk\Batch $batch)
        {
        }
    }
    /**
     * @see "https://smartystreets.com/docs/cloud/us-street-api#metadata"
     */
    class Metadata
    {
        public function __construct($obj)
        {
        }
        //region [ Getters ]
        public function getRecordType()
        {
        }
        public function getZipType()
        {
        }
        public function getCountyFips()
        {
        }
        public function getCountyName()
        {
        }
        public function getCarrierRoute()
        {
        }
        public function getCongressionalDistrict()
        {
        }
        public function getBuildingDefaultIndicator()
        {
        }
        public function getRdi()
        {
        }
        public function getElotSequence()
        {
        }
        public function getElotSort()
        {
        }
        public function getLatitude()
        {
        }
        public function getLongitude()
        {
        }
        public function getPrecision()
        {
        }
        public function getTimeZone()
        {
        }
        public function getUtcOffset()
        {
        }
        public function obeysDst()
        {
        }
        public function isEwsMatch()
        {
        }
        //endregion
    }
    /**
     * In addition to holding all of the input data for this lookup, this class also<br>
     *     will contain the result of the lookup after it comes back from the API.
     *     @see "https://smartystreets.com/docs/cloud/us-street-api#input-fields"
     */
    class Lookup implements \JsonSerializable
    {
        //region [ Fields ]
        const STRICT = "strict";
        const RANGE = "range";
        // Deprecated
        const INVALID = "invalid";
        const ENHANCED = "enhanced";
        //endregion
        /**
         * This constructor accepts a freeform address. That means the whole address is in one string.
         */
        public function __construct($street = null, $street2 = null, $secondary = null, $city = null, $state = null, $zipcode = null, $lastline = null, $addressee = null, $urbanization = null, $matchStrategy = null, $maxCandidates = 1, $input_id = null)
        {
        }
        function jsonSerialize()
        {
        }
        //region [ Getters ]
        public function getInputId()
        {
        }
        public function getStreet()
        {
        }
        public function getStreet2()
        {
        }
        public function getSecondary()
        {
        }
        public function getCity()
        {
        }
        public function getState()
        {
        }
        public function getZipcode()
        {
        }
        public function getLastline()
        {
        }
        public function getAddressee()
        {
        }
        public function getUrbanization()
        {
        }
        public function getMatchStrategy()
        {
        }
        public function getMaxCandidates()
        {
        }
        public function getResult()
        {
        }
        //endregion
        //region [ Setters ]
        public function setInputId($input_id)
        {
        }
        /**
         * You can optionally put the entire address in the <b>street</b> field,<br>
         *     and leave the other fields blank. We call this a <b>freeform address</b>.<br>
         *     <i><b>Note:</b> Freeform addresses are slightly less reliable.</i>
         *
         *     @param $street string If using a freeform address, do <b>not</b> include country information
         */
        public function setStreet($street)
        {
        }
        public function setStreet2($street2)
        {
        }
        public function setSecondary($secondary)
        {
        }
        public function setCity($city)
        {
        }
        public function setState($state)
        {
        }
        public function setZipcode($zipcode)
        {
        }
        public function setLastline($lastline)
        {
        }
        public function setAddressee($addressee)
        {
        }
        public function setUrbanization($urbanization)
        {
        }
        /**
         * Sets the match output strategy to be employed for this lookup.<br>
         *
         * @see "https://smartystreets.com/docs/cloud/us-street-api#input-fields"
         * @param $matchStrategy string The match output strategy
         */
        public function setMatchStrategy($matchStrategy)
        {
        }
        /**
         * Sets the maximum number of valid addresses returned when the input is ambiguous.
         * @param $maxCandidates int Defaults to 1. Must be an integer between 1 and 10, inclusive.
         * @throws \InvalidArgumentException
         */
        public function setMaxCandidates($maxCandidates)
        {
        }
        public function setResult($result)
        {
        }
        //endregion
    }
    /**
     * A candidate is a possible match for an address that was submitted.<br>
     *     A lookup can have multiple candidates if the address was ambiguous, and<br>
     *     the maxCandidates field is set higher than 1.
     *
     * @see "https://smartystreets.com/docs/cloud/us-street-api#root"
     */
    class Candidate
    {
        public function __construct($obj = null)
        {
        }
        //region [Getters]
        public function getInputId()
        {
        }
        public function getInputIndex()
        {
        }
        public function getCandidateIndex()
        {
        }
        public function getAddressee()
        {
        }
        public function getDeliveryLine1()
        {
        }
        public function getDeliveryLine2()
        {
        }
        public function getDeliveryPointBarcode()
        {
        }
        public function getLastLine()
        {
        }
        public function getMetadata()
        {
        }
        public function getComponents()
        {
        }
        public function getAnalysis()
        {
        }
        //endregion
    }
    /**
     * This class contains the matched address broken down into its<br>
     *     fundamental pieces.
     * @see "https://smartystreets.com/docs/cloud/us-street-api#components"
     */
    class Components
    {
        public function __construct($obj)
        {
        }
        //region [ Getters ]
        public function getStreetPostDirection()
        {
        }
        public function getDeliveryPointCheckDigit()
        {
        }
        public function getSecondaryDesignator()
        {
        }
        public function getSecondaryNumber()
        {
        }
        public function getZipcode()
        {
        }
        public function getPmbNumber()
        {
        }
        public function getStateAbbreviation()
        {
        }
        public function getExtraSecondaryDesignator()
        {
        }
        public function getUrbanization()
        {
        }
        public function getStreetName()
        {
        }
        public function getCityName()
        {
        }
        public function getDefaultCityName()
        {
        }
        public function getStreetSuffix()
        {
        }
        public function getPrimaryNumber()
        {
        }
        public function getPlus4Code()
        {
        }
        public function getStreetPreDirection()
        {
        }
        public function getPmbDesignator()
        {
        }
        public function getExtraSecondaryNumber()
        {
        }
        public function getDeliveryPoint()
        {
        }
        //endregion
    }
    /**
     * @see "https://smartystreets.com/docs/cloud/us-street-api#analysis"
     */
    class Analysis
    {
        public function __construct($obj)
        {
        }
        //region [ Getters ]
        public function getDpvMatchCode()
        {
        }
        public function getDpvFootnotes()
        {
        }
        public function getCmra()
        {
        }
        public function getVacant()
        {
        }
        public function getNoStat()
        {
        }
        public function getActive()
        {
        }
        public function isEwsMatch()
        {
        }
        public function getFootnotes()
        {
        }
        public function getLacsLinkCode()
        {
        }
        public function getLacsLinkIndicator()
        {
        }
        public function isSuiteLinkMatch()
        {
        }
        public function getEnhancedMatch()
        {
        }
        //endregion
    }
}
namespace SmartyStreets\PhpSdk {
    interface Logger
    {
        function log($message);
    }
    class MyLogger implements \SmartyStreets\PhpSdk\Logger
    {
        public function log($message)
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\US_Autocomplete_Pro {
    /**
     * This client sends lookups to the SmartyStreets US Autocomplete Pro API, <br>
     *     and attaches the results to the appropriate Lookup objects.
     */
    class Client
    {
        public function __construct(\SmartyStreets\PhpSdk\Sender $sender, \SmartyStreets\PhpSdk\Serializer $serializer = null)
        {
        }
        public function sendLookup(\SmartyStreets\PhpSdk\US_Autocomplete_Pro\Lookup $lookup)
        {
        }
    }
    /**
     * In addition to holding all of the input data for this lookup, this class also<br>
     *     will contain the result of the lookup after it comes back from the API.
     *     @see "https://smartystreets.com/docs/cloud/us-autocomplete-api#http-request-input-fields"
     */
    class Lookup
    {
        //region [ Fields ]
        const MAX_RESULTS_DEFAULT = 10;
        const PREFER_RATIO_DEFAULT = 100;
        //endregion
        /**
         * If you use this constructor, don't forget to set the <b>prefix</b>. It is required.
         *  @param $search string The beginning of an address
         */
        public function __construct($search = null)
        {
        }
        public function addCityFilter($city)
        {
        }
        public function addStateFilter($stateAbbreviation)
        {
        }
        public function addZIPFilter($zipcode)
        {
        }
        public function addStateExclusion($stateAbbreviation)
        {
        }
        public function addPreferCity($city)
        {
        }
        public function addPreferState($stateAbbreviation)
        {
        }
        public function addPreferZIPCode($zipcode)
        {
        }
        //region [ Getters ]
        public function getResult()
        {
        }
        public function getResultAtIndex($index)
        {
        }
        public function getSearch()
        {
        }
        public function getMaxResults()
        {
        }
        public function getCityFilter()
        {
        }
        public function getStateFilter()
        {
        }
        public function getZIPFilter()
        {
        }
        public function getStateExclusions()
        {
        }
        public function getPreferCities()
        {
        }
        public function getPreferStates()
        {
        }
        public function getPreferZIPCodes()
        {
        }
        public function getPreferRatio()
        {
        }
        public function getPreferGeolocation()
        {
        }
        public function getSelected()
        {
        }
        public function getSource()
        {
        }
        function getMaxResultsStringIfSet()
        {
        }
        function getPreferRatioStringIfSet()
        {
        }
        //endregion
        //region [ Setter ]
        public function setResult($result)
        {
        }
        public function setSearch($search)
        {
        }
        public function setMaxResults($maxResults)
        {
        }
        public function setCityFilter($cityFilter)
        {
        }
        public function setStateFilter($stateFilter)
        {
        }
        public function setZIPFilter($zipFilter)
        {
        }
        public function setPreferCities($cities)
        {
        }
        public function setPreferStates($stateAbbreviations)
        {
        }
        public function setPreferZIPCodes($zipcodes)
        {
        }
        public function setPreferRatio($preferRatio)
        {
        }
        public function setPreferGeolocation(\SmartyStreets\PhpSdk\US_Autocomplete_Pro\GeolocateType $geolocateType)
        {
        }
        public function setSelected($selected)
        {
        }
        public function setSource($source)
        {
        }
        //endregion
    }
    /**
     * This field corresponds to the <b>prefer_geolocation</b> field in the US Autocomplete Pro API.
     *
     * @see "https://smartystreets.com/docs/cloud/us-autocomplete-api#http-request-input-fields"
     */
    class GeolocateType
    {
        public function __construct($name)
        {
        }
        public function getName()
        {
        }
    }
    class Result
    {
        public function __construct($obj = null)
        {
        }
        public function getSuggestions()
        {
        }
        public function getSuggestion($index)
        {
        }
    }
    /**
     * @see "https://smartystreets.com/docs/cloud/us-autocomplete-api#http-response"
     */
    class Suggestion
    {
        public function __construct($obj = null)
        {
        }
        public function getStreetLine()
        {
        }
        public function getSecondary()
        {
        }
        public function getCity()
        {
        }
        public function getState()
        {
        }
        public function getZIPCode()
        {
        }
        public function getEntries()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk {
    /**
     * Log adapter for a PSR-3 compatible logging channel, such as Monolog.
     *
     * @package SmartyStreets\PhpSdk
     */
    class Psr3Logger implements \SmartyStreets\PhpSdk\Logger
    {
        function __construct(\Psr\Log\LoggerInterface $logger)
        {
        }
        function log($message)
        {
        }
    }
    class URLPrefixSender implements \SmartyStreets\PhpSdk\Sender
    {
        public function __construct($urlPrefix, \SmartyStreets\PhpSdk\Sender $inner)
        {
        }
        public function send(\SmartyStreets\PhpSdk\Request $request)
        {
        }
    }
    /**
     * Credentials are classes that 'sign' requests by adding SmartyStreets authentication keys.
     */
    interface Credentials
    {
        function sign(\SmartyStreets\PhpSdk\Request $request);
    }
    /**
     * SharedCredentials is useful if you want to use a website key.
     */
    class SharedCredentials implements \SmartyStreets\PhpSdk\Credentials
    {
        public function __construct($id, $hostname)
        {
        }
        function sign(\SmartyStreets\PhpSdk\Request $request)
        {
        }
    }
    /**
     * StaticCredentials takes a SmartyStreets Secret Key Pair, and 'signs' the request with it so the<br>
     * SmartyStreets API knows which SmartyStreets account and subscription is sending it.
     * <p>Look on the <b>API Keys</b> tab of your SmartyStreets account page to find/generate your keys.</p>
     */
    class StaticCredentials implements \SmartyStreets\PhpSdk\Credentials
    {
        public function __construct($authId, $authToken)
        {
        }
        function sign(\SmartyStreets\PhpSdk\Request $request)
        {
        }
    }
    class Request
    {
        const CHARSET = "UTF-8";
        public function __construct()
        {
        }
        public function setHeader($header, $value)
        {
        }
        public function setParameter($name, $value)
        {
        }
        public function getUrl()
        {
        }
        //region [ Getters ]
        public function getHeaders()
        {
        }
        public function getParameters()
        {
        }
        public function getPayload()
        {
        }
        public function getReferer()
        {
        }
        public function getMethod()
        {
        }
        public function getContentType()
        {
        }
        //endregion
        //region [ Setters ]
        public function setPayload($payload)
        {
        }
        public function setReferer($referer)
        {
        }
        public function setUrlPrefix($urlPrefix)
        {
        }
        public function setContentType($contentType)
        {
        }
        //endregion
    }
    interface Sleeper
    {
        function sleep($seconds);
    }
}
namespace SmartyStreets\PhpSdk\International_Street {
    /**
     * This client sends lookups to the SmartyStreets International Street API, <br>
     *     and attaches the results to the appropriate Lookup objects.
     */
    class Client
    {
        public function __construct(\SmartyStreets\PhpSdk\Sender $sender, \SmartyStreets\PhpSdk\Serializer $serializer = null)
        {
        }
        public function sendLookup(\SmartyStreets\PhpSdk\International_Street\Lookup $lookup)
        {
        }
    }
    class RootLevel
    {
        //endregion
        public function __construct($obj)
        {
        }
        //region [ Getters ]
        public function getInputId()
        {
        }
        public function getOrganization()
        {
        }
        public function getAddress1()
        {
        }
        public function getAddress2()
        {
        }
        public function getAddress3()
        {
        }
        public function getAddress4()
        {
        }
        public function getAddress5()
        {
        }
        public function getAddress6()
        {
        }
        public function getAddress7()
        {
        }
        public function getAddress8()
        {
        }
        public function getAddress9()
        {
        }
        public function getAddress10()
        {
        }
        public function getAddress11()
        {
        }
        public function getAddress12()
        {
        }
        //endregion
    }
    class Changes extends \SmartyStreets\PhpSdk\International_Street\RootLevel
    {
        //endregion
        public function __construct($obj = null)
        {
        }
        public function getComponents()
        {
        }
    }
    /**
     * @see "https://smartystreets.com/docs/cloud/international-street-api#metadata"
     */
    class Metadata
    {
        public function __construct($obj = null)
        {
        }
        //region [ Getters ]
        public function getLatitude()
        {
        }
        public function getLongitude()
        {
        }
        public function getGeocodePrecision()
        {
        }
        public function getMaxGeocodePrecision()
        {
        }
        public function getAddressFormat()
        {
        }
        //endregion
    }
    /**
     * When not set, the output language will match the language of the input values. When set to <b>NATIVE</b> the<br>
     *     results will always be in the language of the output country. When set to <b>LATIN</b> the results<br>
     *     will always be provided using a Latin character set.
     */
    class LanguageMode
    {
        public function __construct($name)
        {
        }
        public function getName()
        {
        }
    }
    /**
     * In addition to holding all of the input data for this lookup, this class also<br>
     *     will contain the result of the lookup after it comes back from the API.
     *     <p><b>Note: </b><i>Lookups must have certain required fields set with non-blank values. <br>
     *         These can be found at the URL below.</i></p>
     *     @see "https://smartystreets.com/docs/cloud/international-street-api#http-input-fields"
     */
    class Lookup
    {
        //endregion
        //region [ Constructors ]
        public function __construct()
        {
        }
        public function setFreeformInput($freeform, $country)
        {
        }
        public function setPostalCodeInput($address1, $postalCode, $country)
        {
        }
        public function setLocalityInput($address1, $locality, $administrativeArea, $country)
        {
        }
        //endregion
        //region [ Query Methods ]
        public function missingCountry()
        {
        }
        public function hasFreeform()
        {
        }
        public function missingAddress1()
        {
        }
        public function hasPostalCode()
        {
        }
        public function missingLocalityOrAdministrativeArea()
        {
        }
        //endregion
        //region [ Getters ]
        public function getResult()
        {
        }
        public function getInputId()
        {
        }
        public function getCountry()
        {
        }
        public function getGeocode()
        {
        }
        public function getLanguage()
        {
        }
        public function getFreeform()
        {
        }
        public function getAddress1()
        {
        }
        public function getAddress2()
        {
        }
        public function getAddress3()
        {
        }
        public function getAddress4()
        {
        }
        public function getOrganization()
        {
        }
        public function getLocality()
        {
        }
        public function getAdministrativeArea()
        {
        }
        public function getPostalCode()
        {
        }
        //endregion
        //region [ Setters ]
        public function setResult($result)
        {
        }
        public function setInputId($inputId)
        {
        }
        public function setCountry($country)
        {
        }
        /**
         * @param $geocode bool Disabled by default. Set to <b>true</b> to enable.
         */
        public function setGeocode($geocode)
        {
        }
        /**
         * When not set, the output language will match the language of the input values. When set to <b>NATIVE</b> the<br>
         *     results will always be in the language of the output country. When set to <b>LATIN</b> the results<br>
         *     will always be provided using a Latin character set.
         *
         * @param $language LanguageMode
         */
        public function setLanguage(\SmartyStreets\PhpSdk\International_Street\LanguageMode $language)
        {
        }
        /**
         * @param $freeform String The entire address except the country, which should be input using setCountry().
         */
        public function setFreeform($freeform)
        {
        }
        public function setAddress1($address1)
        {
        }
        public function setAddress2($address2)
        {
        }
        public function setAddress3($address3)
        {
        }
        public function setAddress4($address4)
        {
        }
        public function setOrganization($organization)
        {
        }
        public function setLocality($locality)
        {
        }
        public function setAdministrativeArea($administrativeArea)
        {
        }
        public function setPostalCode($postalCode)
        {
        }
        //endregion
    }
    /**
     * A candidate is a possible match for an address that was submitted.<br>
     *     A lookup can have multiple candidates if the address was ambiguous.
     *
     * @see "https://smartystreets.com/docs/cloud/international-street-api#root"
     */
    class Candidate extends \SmartyStreets\PhpSdk\International_Street\RootLevel
    {
        //endregion
        public function __construct($obj = null)
        {
        }
        //region [ Getters ]
        public function getComponents()
        {
        }
        public function getMetadata()
        {
        }
        public function getAnalysis()
        {
        }
        //endregion
    }
    /**
     * @see "https://smartystreets.com/docs/cloud/international-street-api#components"
     */
    class Components
    {
        //endregion
        //region [ Constructor ]
        public function __construct($obj = null)
        {
        }
        //endregion
        //region [ Getters ]
        public function getCountryIso3()
        {
        }
        public function getSuperAdministrativeArea()
        {
        }
        public function getAdministrativeArea()
        {
        }
        public function getAdministrativeAreaShort()
        {
        }
        public function getAdministrativeAreaLong()
        {
        }
        public function getSubAdministrativeArea()
        {
        }
        public function getDependentLocality()
        {
        }
        public function getDependentLocalityName()
        {
        }
        public function getDoubleDependentLocality()
        {
        }
        public function getLocality()
        {
        }
        public function getPostalCode()
        {
        }
        public function getPostalCodeShort()
        {
        }
        public function getPostalCodeExtra()
        {
        }
        public function getPremise()
        {
        }
        public function getPremiseExtra()
        {
        }
        public function getPremiseNumber()
        {
        }
        public function getPremisePrefixNumber()
        {
        }
        public function getPremiseType()
        {
        }
        public function getThoroughfare()
        {
        }
        public function getThoroughfarePredirection()
        {
        }
        public function getThoroughfarePostdirection()
        {
        }
        public function getThoroughfareName()
        {
        }
        public function getThoroughfareTrailingType()
        {
        }
        public function getThoroughfareType()
        {
        }
        public function getDependentThoroughfare()
        {
        }
        public function getDependentThoroughfarePredirection()
        {
        }
        public function getDependentThoroughfarePostdirection()
        {
        }
        public function getDependentThoroughfareName()
        {
        }
        public function getDependentThoroughfareTrailingType()
        {
        }
        public function getDependentThoroughfareType()
        {
        }
        public function getBuilding()
        {
        }
        public function getBuildingLeadingType()
        {
        }
        public function getBuildingName()
        {
        }
        public function getBuildingTrailingType()
        {
        }
        public function getSubBuildingType()
        {
        }
        public function getSubBuildingNumber()
        {
        }
        public function getSubBuildingName()
        {
        }
        public function getSubBuilding()
        {
        }
        public function getLevelType()
        {
        }
        public function getLevelNumber()
        {
        }
        public function getPostBox()
        {
        }
        public function getPostBoxType()
        {
        }
        public function getPostBoxNumber()
        {
        }
        //endregion
    }
    /**
     * @see "https://smartystreets.com/docs/cloud/international-street-api#analysis"
     */
    class Analysis
    {
        //endregion
        public function __construct($obj = null)
        {
        }
        public function getVerificationStatus()
        {
        }
        public function getAddressPrecision()
        {
        }
        public function getMaxAddressPrecision()
        {
        }
        public function getChanges()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk {
    class NativeSender implements \SmartyStreets\PhpSdk\Sender
    {
        public function __construct($maxTimeOut = 10000, \SmartyStreets\PhpSdk\Proxy $proxy = null, $debugMode = false)
        {
        }
        function send(\SmartyStreets\PhpSdk\Request $smartyRequest)
        {
        }
        function headersToArray($str)
        {
        }
    }
    class StatusCodeSender implements \SmartyStreets\PhpSdk\Sender
    {
        public function __construct(\SmartyStreets\PhpSdk\Sender $inner)
        {
        }
        function send(\SmartyStreets\PhpSdk\Request $request)
        {
        }
    }
    /**
     * The ClientBuilder class helps you build a client object for one of the supported SmartyStreets APIs.<br>
     * You can use ClientBuilder's methods to customize settings like maximum retries or timeout duration. These methods<br>
     * are chainable, so you can usually get set up with one line of code.
     */
    class ClientBuilder
    {
        const INTERNATIONAL_STREET_API_URL = "https://international-street.api.smartystreets.com/verify";
        const INTERNATIONAL_AUTOCOMPLETE_API_URL = "https://international-autocomplete.api.smartystreets.com/lookup";
        const US_AUTOCOMPLETE_API_URL = "https://us-autocomplete.api.smartystreets.com/suggest";
        const US_AUTOCOMPLETE_PRO_API_URL = "https://us-autocomplete-pro.api.smartystreets.com/lookup";
        const US_EXTRACT_API_URL = "https://us-extract.api.smartystreets.com";
        const US_STREET_API_URL = "https://us-street.api.smartystreets.com/street-address";
        const US_ZIP_CODE_API_URL = "https://us-zipcode.api.smartystreets.com/lookup";
        const US_REVERSE_GEO_API_URL = "https://us-reverse-geo.api.smartystreets.com/lookup";
        public function __construct(\SmartyStreets\PhpSdk\Credentials $signer = null)
        {
        }
        /**
         * @param int $maxRetries The maximum number of times to retry sending the request to the API. (Default is 5)
         * @return $this Returns <b>this</b> to accommodate method chaining.
         */
        public function retryAtMost($maxRetries)
        {
        }
        /**
         * @param int $maxTimeout The maximum time (in milliseconds) to wait for a connection, and also to wait for <br>
         *                   the response to be read. (Default is 10000)
         * @return $this Returns <b>this</b> to accommodate method chaining.
         */
        public function withMaxTimeout($maxTimeout)
        {
        }
        /**
         * ViaProxy saves the address of your proxy server through which to send all requests.
         * @param string $proxyAddress Proxy address of your proxy server.
         * @param string $proxyUsername Username for proxy authentication.
         * @param string $proxyPassword Password for proxy authentication.
         * @return $this Returns <b>this</b> to accommodate method chaining.
         */
        public function viaProxy($proxyAddress, $proxyUsername = null, $proxyPassword = null)
        {
        }
        /**
         * @param Sender $sender Default is a series of nested senders. See <b>buildSender()</b>.
         * @return $this Returns <b>this</b> to accommodate method chaining.
         */
        public function withSender(\SmartyStreets\PhpSdk\Sender $sender)
        {
        }
        /**
         * Changes the <b>Serializer</b> from the default <b>NativeSerializer</b>.
         * @param Serializer $serializer An object that implements the <b>Serializer</b> interface.
         * @return $this Returns <b>this</b> to accommodate method chaining.
         */
        public function withSerializer(\SmartyStreets\PhpSdk\Serializer $serializer)
        {
        }
        /**
         * This may be useful when using a local installation of the SmartyStreets APIs.
         * @param string $urlPrefix Defaults to the URL for the API corresponding to the <b>Client</b> object being built.
         * @return $this Returns <b>this</b> to accommodate method chaining.
         */
        public function withUrl($urlPrefix)
        {
        }
        /**
         * Set a logger instance to be used by the default Sender implementation.
         * @param Logger $logger the new default logger
         * @return $this Returns <b>this</b> to accommodate method chaining.
         */
        public function withDefaultLogger(\SmartyStreets\PhpSdk\Logger $logger)
        {
        }
        /**
         * Enables debug mode, which will print information about the HTTP request and response to STDERR
         * @return $this Returns <b>this</b> to accommodate method chaining.
         */
        public function withDebug()
        {
        }
        /**
         * Allows the caller to specify the subscription license(s) (aka "track") they wish to use.
         * @param $licenses [String] An array of license strings
         * @return $this Returns <b>this</b> to accommodate method chaining.
         */
        public function withLicenses($licenses)
        {
        }
        public function buildUSAutocompleteApiClient()
        {
        }
        public function buildUSAutocompleteProApiClient()
        {
        }
        public function buildUSExtractApiClient()
        {
        }
        public function buildInternationalStreetApiClient()
        {
        }
        public function buildInternationalAutocompleteApiClient()
        {
        }
        public function buildUsStreetApiClient()
        {
        }
        public function buildUsZIPCodeApiClient()
        {
        }
        public function buildUsReverseGeoApiClient()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Exceptions {
    class SmartyException extends \Exception
    {
    }
    class PaymentRequiredException extends \SmartyStreets\PhpSdk\Exceptions\SmartyException
    {
    }
    class ServiceUnavailableException extends \SmartyStreets\PhpSdk\Exceptions\SmartyException
    {
    }
    class BadCredentialsException extends \SmartyStreets\PhpSdk\Exceptions\SmartyException
    {
    }
    class GatewayTimeoutException extends \SmartyStreets\PhpSdk\Exceptions\SmartyException
    {
    }
    class RequestEntityTooLargeException extends \SmartyStreets\PhpSdk\Exceptions\SmartyException
    {
    }
    class TooManyRequestsException extends \SmartyStreets\PhpSdk\Exceptions\SmartyException
    {
        var $header;
        function setHeader($header)
        {
        }
        function getHeader()
        {
        }
    }
    class InternalServerErrorException extends \SmartyStreets\PhpSdk\Exceptions\SmartyException
    {
    }
    class UnprocessableEntityException extends \SmartyStreets\PhpSdk\Exceptions\SmartyException
    {
    }
    class BatchFullException extends \SmartyStreets\PhpSdk\Exceptions\SmartyException
    {
    }
    class BadRequestException extends \SmartyStreets\PhpSdk\Exceptions\SmartyException
    {
    }
}
namespace SmartyStreets\PhpSdk\US_Extract {
    /**
     * This client sends lookups to the SmartyStreets US Extract API, <br>
     *     and attaches the results to the Lookup objects.
     */
    class Client
    {
        public function __construct(\SmartyStreets\PhpSdk\Sender $sender, \SmartyStreets\PhpSdk\Serializer $serializer = null)
        {
        }
        public function sendLookup(\SmartyStreets\PhpSdk\US_Extract\Lookup $lookup = null)
        {
        }
    }
    /**
     * @see <a href="https://smartystreets.com/docs/cloud/us-extract-api#http-response-status">SmartyStreets US Extract API docs</a>
     */
    class Metadata
    {
        public function __construct($obj = null)
        {
        }
        //region [ Getters ]
        public function getLines()
        {
        }
        public function isUnicode()
        {
        }
        public function getAddressCount()
        {
        }
        public function getVerifiedCount()
        {
        }
        public function getBytes()
        {
        }
        public function getCharacterCount()
        {
        }
        //endregion
    }
    /**
     * In addition to holding all of the input data for this lookup, this class also<br>
     *     will contain the result of the lookup after it comes back from the API.
     *     @see "https://smartystreets.com/docs/cloud/us-extract-api#http-request-input-fields"
     */
    class Lookup
    {
        /**
         * @param $text string The text that is to have addresses extracted out of it for verification
         */
        public function __construct($text = null)
        {
        }
        //region [ Getters ]
        public function getResult()
        {
        }
        public function isHtml()
        {
        }
        public function isAggressive()
        {
        }
        public function addressesHaveLineBreaks()
        {
        }
        public function getAddressesPerLine()
        {
        }
        public function getText()
        {
        }
        //endregion
        //region [ Setters ]
        public function setResult(\SmartyStreets\PhpSdk\US_Extract\Result $result)
        {
        }
        public function specifyHtmlInput($html)
        {
        }
        public function setAggressive($aggressive)
        {
        }
        public function setAddressesHaveLineBreaks($addressesHaveLineBreaks)
        {
        }
        public function setAddressesPerLine($addressPerLine)
        {
        }
        public function setText($text)
        {
        }
        //endregion
    }
    /**
     * @see <a href="https://smartystreets.com/docs/cloud/us-extract-api#http-response-status">SmartyStreets US Extract API docs</a>
     */
    class Address
    {
        public function __construct($obj = null)
        {
        }
        //region [ Getters ]
        public function getText()
        {
        }
        public function isVerified()
        {
        }
        public function getLine()
        {
        }
        public function getStart()
        {
        }
        public function getEnd()
        {
        }
        public function getCandidates()
        {
        }
        public function getCandidate($index)
        {
        }
        //endregion
    }
    /**
     * @see <a href="https://smartystreets.com/docs/cloud/us-extract-api#http-response-status">SmartyStreets US Extract API docs</a>
     */
    class Result
    {
        public function __construct($obj = null)
        {
        }
        public function getMetadata()
        {
        }
        public function getAddresses()
        {
        }
        public function getAddress($index)
        {
        }
    }
}
namespace SmartyStreets\PhpSdk {
    /**
     * This class contains a collection of lookups to be sent to SmartyStreets <br>
     *     APIs all at once. This is more efficient than sending them<br>
     *     one at a time. Batch size cannot exceed 100.
     */
    class Batch
    {
        const MAX_BATCH_SIZE = 100;
        public function __construct()
        {
        }
        /**
         * Adds a lookup to the batch. (Batch size cannot exceed 100)
         * @param $lookup
         * @throws BatchFullException Batch size cannot exceed 100
         */
        public function add($lookup)
        {
        }
        /**
         * Clears the lookups stored in the batch so it can be used again.<br>
         *     This helps avoid the overhead of building a new Batch object for each group of lookups.
         */
        public function clear()
        {
        }
        /**
         * @return The number of lookups currently in this batch.
         */
        public function size()
        {
        }
        public function isFull()
        {
        }
        //region [ Getters ]
        public function getNamedLookups()
        {
        }
        public function getAllLookups()
        {
        }
        public function getLookupById($inputId)
        {
        }
        public function getLookupByIndex($inputIndex)
        {
        }
        //endregion
    }
    class Proxy
    {
        //endregion
        //region [ Constructors ]
        public function __construct($address)
        {
        }
        //endregion
        public function getAddress()
        {
        }
        public function getCredentials()
        {
        }
        public function setCredentials($proxyUsername, $proxyPassword)
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\US_ZIPCode {
    /**
     * This client sends lookups to the SmartyStreets US ZIP Code API, <br>
     *     and attaches the results to the appropriate Lookup objects.
     */
    class Client
    {
        public function __construct(\SmartyStreets\PhpSdk\Sender $sender, \SmartyStreets\PhpSdk\Serializer $serializer = null)
        {
        }
        public function sendLookup(\SmartyStreets\PhpSdk\US_ZIPCode\Lookup $lookup)
        {
        }
        /**
         * Sends a batch of no more than 100 lookups.
         *
         * @param batch Batch Must contain between 1 and 100 Lookup objects
         * @throws SmartyException
         * @throws IOException
         */
        public function sendBatch(\SmartyStreets\PhpSdk\Batch $batch)
        {
        }
    }
    /**
     * @see "https://smartystreets.com/docs/cloud/us-zipcode-api#zipcodes"
     */
    class ZIPCode
    {
        public function __construct($obj = null)
        {
        }
        //region [ Getters ]
        public function getAlternateCountiesAtIndex($index)
        {
        }
        public function getZIPCode()
        {
        }
        public function getZIPCodeType()
        {
        }
        public function getDefaultCity()
        {
        }
        public function getCountyFips()
        {
        }
        public function getCountyName()
        {
        }
        public function getStateAbbreviation()
        {
        }
        public function getState()
        {
        }
        public function getLatitude()
        {
        }
        public function getLongitude()
        {
        }
        public function getPrecision()
        {
        }
        public function getAlternateCounties()
        {
        }
        //endregion
    }
    /**
     * In addition to holding all of the input data for this lookup, this class also<br>
     *     will contain the result of the lookup after it comes back from the API.
     *     @see "https://smartystreets.com/docs/cloud/us-zipcode-api#http-request-input-fields"
     */
    class Lookup implements \JsonSerializable
    {
        //endregion
        //region [ Constructors ]
        public function __construct($city = null, $state = null, $zipcode = null)
        {
        }
        public function jsonSerialize()
        {
        }
        //endregion
        //region [ Getters ]
        public function getResult()
        {
        }
        public function getInputId()
        {
        }
        public function getCity()
        {
        }
        public function getState()
        {
        }
        public function getZIPCode()
        {
        }
        //endregion
        //region [ Setters ]
        public function setResult(\SmartyStreets\PhpSdk\US_ZIPCode\Result $result)
        {
        }
        public function setCity($city)
        {
        }
        public function setState($state)
        {
        }
        public function setZIPCode($zipcode)
        {
        }
        public function setInputId($inputId)
        {
        }
        //endregion
    }
    /**
     * @see "https://smartystreets.com/docs/cloud/us-zipcode-api#zipcodes"
     */
    class AlternateCounties
    {
        public function __construct($obj = null)
        {
        }
        public function getCountyFips()
        {
        }
        public function getCountyName()
        {
        }
        public function getStateAbbreviation()
        {
        }
        public function getState()
        {
        }
    }
    /**
     * @see "https://smartystreets.com/docs/cloud/us-zipcode-api#root"
     */
    class Result
    {
        public function __construct($obj = null)
        {
        }
        public function isValid()
        {
        }
        //region [ Getters ]
        public function getCityAtIndex($index)
        {
        }
        public function getZIPCodeAtIndex($index)
        {
        }
        /**
         *
         * @return Returns a status if there was no match
         */
        public function getStatus()
        {
        }
        public function getReason()
        {
        }
        public function getInputIndex()
        {
        }
        public function getInputId()
        {
        }
        public function getCities()
        {
        }
        public function getZIPCodes()
        {
        }
        //endregion
        //region [ Setters ]
        public function setStatus($status)
        {
        }
        public function setReason($reason)
        {
        }
        //endregion
    }
    /**
     * Known in the SmartyStreets US ZIP Code API documentation as a <b>city_state</b>
     * @see "https://smartystreets.com/docs/cloud/us-zipcode-api#cities"
     */
    class City
    {
        //endregion
        //region [ Constructors ]
        public function __construct($obj = null)
        {
        }
        //endregion
        //region [ Getters ]
        public function getCity()
        {
        }
        public function getMailableCity()
        {
        }
        public function getStateAbbreviation()
        {
        }
        public function getState()
        {
        }
        //endregion
    }
}
namespace SmartyStreets\PhpSdk {
    class NativeSerializer implements \SmartyStreets\PhpSdk\Serializer
    {
        public function __construct()
        {
        }
        public function serialize($obj)
        {
        }
        public function deserialize($payload)
        {
        }
    }
    class ArrayUtil
    {
        /**
         * Sets field with value from the key in an array
         */
        public static function setField($obj, $key, $typeIfKeyNotFound = null)
        {
        }
        /**
         * Returns true is a string ends with a certain character, else returns false
         */
        public static function endsWith($haystack, $needle)
        {
        }
        /**
         * Returns encoded value of variable
         */
        public static function getEncodedValue($value)
        {
        }
        /**
         * Returns string value of boolean variable
         */
        public static function getStringValueOfBoolean($value)
        {
        }
    }
    class RetrySender implements \SmartyStreets\PhpSdk\Sender
    {
        const MAX_BACKOFF_DURATION = 10;
        const STATUS_TOO_MANY_REQUESTS = 429;
        const STATUS_TO_RETRY = [408, 429, 500, 502, 503, 504];
        public function __construct($maxRetries, \SmartyStreets\PhpSdk\Sleeper $sleeper, \SmartyStreets\PhpSdk\Logger $logger, \SmartyStreets\PhpSdk\Sender $inner)
        {
        }
        public function send(\SmartyStreets\PhpSdk\Request $request)
        {
        }
        public function getInner()
        {
        }
        public function getMaxRetries()
        {
        }
    }
    class Response
    {
        //endregion
        //region [ Constructors ]
        public function __construct($statusCode, $payload, $headers)
        {
        }
        //endregion
        //region [ Getters ]
        public function getStatusCode()
        {
        }
        public function getHeaders()
        {
        }
        public function getPayload()
        {
        }
        //endregion
        //region [ Setters ]
        public function setStatusCode($statusCode)
        {
        }
        public function setPayload($payload)
        {
        }
        //endregion
    }
    class SigningSender implements \SmartyStreets\PhpSdk\Sender
    {
        public function __construct(\SmartyStreets\PhpSdk\Credentials $signer, \SmartyStreets\PhpSdk\Sender $inner)
        {
        }
        function send(\SmartyStreets\PhpSdk\Request $request)
        {
        }
    }
    class MySleeper implements \SmartyStreets\PhpSdk\Sleeper
    {
        public function sleep($seconds)
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Tests\US_Reverse_Geo {
    class ResponseTest extends \PHPUnit\Framework\TestCase
    {
        public function setUp() : void
        {
        }
        public function testAllFieldsFilledCorrectly()
        {
        }
    }
    class ClientTest extends \PHPUnit\Framework\TestCase
    {
        public function testSendingLookup()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Tests\US_Autocomplete {
    class LookupTest extends \PHPUnit\Framework\TestCase
    {
        public function testSettingMaxSuggestionsLargerThanTenThrowsAnException()
        {
        }
    }
    class ResultTest extends \PHPUnit\Framework\TestCase
    {
        public function setUp() : void
        {
        }
        public function testAllFieldsGetFilledInCorrectly()
        {
        }
    }
    class ClientTest extends \PHPUnit\Framework\TestCase
    {
        //region [ Single Lookup ]
        public function testSendingSinglePrefixOnlyLookup()
        {
        }
        public function testSendingSingleFullyPopulatedLookup()
        {
        }
        public function testSendingLookupWithGeolocateTypeSetToNone()
        {
        }
        //endregion
        //region [ Response Handling ]
        public function testDeserializeCalledWithResponseBody()
        {
        }
        public function testResultCorrectlyAssignedToCorrespondingLookup()
        {
        }
        //endregion
    }
}
namespace SmartyStreets\PhpSdk\Tests {
    class StatusCodeSenderTest extends \PHPUnit\Framework\TestCase
    {
        public function test200Response()
        {
        }
        public function test400ResponseThrowsBadRequestException()
        {
        }
        public function test401ResponseThrowsBadCredentialsException()
        {
        }
        public function test402ResponsePThrowsPaymentRequiredException()
        {
        }
        public function test413ResponseThrowsRequestEntityTooLargeException()
        {
        }
        public function test422ResponseThrowsUnprocessableEntityException()
        {
        }
        public function test429ResponseThrowsTooManyRequestsException()
        {
        }
        public function test500ResponseThrowsInternalServerErrorException()
        {
        }
        public function test503ResponseThrowsServiceUnavailableException()
        {
        }
        public function test504ResponseThrowsGatewayTimeoutException()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Tests\International_Autocomplete {
    class ResultTest extends \PHPUnit\Framework\TestCase
    {
        public function setUp() : void
        {
        }
        public function testAllFieldsFilledCorrectly()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Tests\InternationalAutocomplete {
    class ClientTest extends \PHPUnit\Framework\TestCase
    {
        public function testSendingSingleFullyPopulatedLookup()
        {
        }
        public function testEmptyLookupRejected()
        {
        }
        public function testBlankLookupRejected()
        {
        }
        public function testRejectsLookupsWithOnlyCountry()
        {
        }
        public function testDeserializeCalledWithResponseBody()
        {
        }
        public function testCandidatesCorrectlyAssignedToLookup()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Tests\US_Street {
    class CandidateTest extends \PHPUnit\Framework\TestCase
    {
        public function setUp() : void
        {
        }
        public function testAllFieldsFilledCorrectly()
        {
        }
    }
    class ClientTest extends \PHPUnit\Framework\TestCase
    {
        //region [ Single Lookup ]
        public function testSendingSingleFreeformLookup()
        {
        }
        public function testSendingSingleFullyPopulatedLookup()
        {
        }
        //endregion
        //region [Batch Lookup ]
        public function testEmptyBatchNotSent()
        {
        }
        public function testSuccessfullySendsBatchOfLookups()
        {
        }
        //endregion
        //region [ Response Handling ]
        public function testDeserializeCalledWithResponseBody()
        {
        }
        public function testCandidatesCorrectlyAssignedToCorrespondingLookup()
        {
        }
        public function testFullJSONResponseDeserialization()
        {
        }
        //endregion
    }
}
namespace SmartyStreets\PhpSdk\Tests\US_Autocomplete_Pro {
    class LookupTest extends \PHPUnit\Framework\TestCase
    {
        public function testSettingMaxResultsLargerThanTenThrowsAnException()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Tests {
    class BatchTest extends \PHPUnit\Framework\TestCase
    {
        function testGetsLookupByInputId()
        {
        }
        function testGetsLookupsByIndex()
        {
        }
        function testReturnsCorrectSize()
        {
        }
        function testAddingALookupWhenBatchIsFullThrowsException()
        {
        }
        function testClearMethodClearsBothLookupCollections()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Tests\US_ZIPCode {
    class NativeSerializerTest extends \PHPUnit\Framework\TestCase
    {
        //    public function testSerialize() {
        //        $serializer = new NativeSerializer();
        //        $lookup = new Lookup('fake city', 'fake state', '12345');
        //
        //        $result = $serializer->serialize($lookup);
        //
        //        $this->assertStringContainsString('"city":"fake city"', $result, "Result is: $result");
        //        $this->assertStringContainsString('"state":"fake state"', $result, "Result is: $result");
        //        $this->assertStringContainsString('"zipcode":"12345"', $result, "Result is: $result");
        //    }
        public function testDeserialize()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Tests {
    class LicenseSenderTest extends \PHPUnit\Framework\TestCase
    {
        public function testLicensesSetOnQuery()
        {
        }
        public function testLicenseNotSet()
        {
        }
    }
    class SharedCredentialsTest extends \PHPUnit\Framework\TestCase
    {
        public function testSignedRequest()
        {
        }
        public function testReferringHeader()
        {
        }
    }
    class StaticCredentialsTest extends \PHPUnit\Framework\TestCase
    {
        public function testStandardCredentials()
        {
        }
        public function testUrlEncoding()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Tests\International_Street {
    class LookupTest extends \PHPUnit\Framework\TestCase
    {
        public function testSetsFreeformInput()
        {
        }
        public function testSetsPostalCodeInput()
        {
        }
        public function testSetsLocalityInput()
        {
        }
    }
    class CandidateTest extends \PHPUnit\Framework\TestCase
    {
        public function setUp() : void
        {
        }
        public function testAllFieldsFilledCorrectly()
        {
        }
    }
    class ClientTest extends \PHPUnit\Framework\TestCase
    {
        public function testSendingFreeformLookup()
        {
        }
        public function testSendingSingleFullyPopulatedLookup()
        {
        }
        public function testEmptyLookupRejected()
        {
        }
        public function testBlankLookupRejected()
        {
        }
        public function testRejectsLookupsWithOnlyCountry()
        {
        }
        public function testRejectsLookupsWithOnlyCountryAndAddress1()
        {
        }
        public function testRejectsLookupsWithOnlyCountryAndAddress1AndLocality()
        {
        }
        public function testRejectsLookupsWithOnlyCountryAndAddress1AndAdministrativeArea()
        {
        }
        public function testAcceptsLookupsWithEnoughInfo()
        {
        }
        public function testDeserializeCalledWithResponseBody()
        {
        }
        public function testCandidatesCorrectlyAssignedToLookup()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Tests {
    class RequestTest extends \PHPUnit\Framework\TestCase
    {
        const LOCAL_HOST = "http://localhost/?";
        public function testNullNameQueryStringParameterNotAdded()
        {
        }
        public function testEmptyNameQueryStringParameterNotAdded()
        {
        }
        public function testNullValueQueryStringParameterNotAdded()
        {
        }
        public function testEmptyValueQueryStringParameterIsAdded()
        {
        }
        public function testMultipleQueryStringParameters()
        {
        }
        public function testUrlEncodingOfQueryStringParameters()
        {
        }
        public function testUrlEncodingOfUnicodeCharacters()
        {
        }
        public function testHeadersAddedToRequest()
        {
        }
        public function testPost()
        {
        }
        public function testUrlWithoutTrailingQuestionMark()
        {
        }
        public function testBooleanValuesAndOnesAndZerosAreAppendedCorrectlyToUrl()
        {
        }
    }
    class SigningSenderTest extends \PHPUnit\Framework\TestCase
    {
        public function testSigningOfRequest()
        {
        }
        public function testResponseReturnedCorrectly()
        {
        }
    }
    class RetrySenderTest extends \PHPUnit\Framework\TestCase
    {
        public function setUp() : void
        {
        }
        public function testSuccessDoesNotRetry()
        {
        }
        public function testRetryUntilSuccess()
        {
        }
        public function testRetryUntilMaxAttempts()
        {
        }
        public function testBackoffDoesNotExceedMax()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Tests\US_Extract {
    class ResultTest extends \PHPUnit\Framework\TestCase
    {
        public function setUp() : void
        {
        }
        public function testAllFieldsFilledCorrectly()
        {
        }
    }
    class ClientTest extends \PHPUnit\Framework\TestCase
    {
        public function testSendingBodyOnlyLookup()
        {
        }
        public function testSendingFullyPopulatedLookup()
        {
        }
        public function testRejectNullLookup()
        {
        }
        public function testDeserializeCalledWithResponseBody()
        {
        }
        public function testResultCorrectlyAssignedToCorrespondingLookup()
        {
        }
        public function testContentTypeSetCorrectly()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Tests {
    class URLPrefixSenderTest extends \PHPUnit\Framework\TestCase
    {
        public function testProvidedURLOverridesRequestURL()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Tests\US_Street {
    class LookupTest extends \PHPUnit\Framework\TestCase
    {
        function testConstructorCreatesResult()
        {
        }
        function testLookupConstructorSetsZipcode()
        {
        }
        function testLookupConstructorSetsCityAndState()
        {
        }
        function testLookupConstructorSetsCityStateAndZipcode()
        {
        }
    }
    class ResultTest extends \PHPUnit\Framework\TestCase
    {
        public function setUp() : void
        {
        }
        function testIsValidReturnsTrueWhenInputIsValid()
        {
        }
        function testIsValidReturnsFalseWhenInputIsNotValid()
        {
        }
        public function testAllFieldsFilledCorrectly()
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\Tests\US_ZIPCode {
    class ClientTest extends \PHPUnit\Framework\TestCase
    {
        //region [Batch Lookup ]
        public function testEmptyBatchNotSent()
        {
        }
        public function testSendingSingleFullyPopulatedLookup()
        {
        }
        public function testSuccessfullySendsBatchOfLookups()
        {
        }
        //endregion
        //region [ Response Handling ]
        public function testDeserializeCalledWithResponseBody()
        {
        }
        public function testCandidatesCorrectlyAssignedToCorrespondingLookup()
        {
        }
        //endregion
    }
}
namespace SmartyStreets\PhpSdk\Tests\Mocks {
    class MockCrashingSender implements \SmartyStreets\PhpSdk\Sender
    {
        const STATUS_CODE = 200;
        public function __construct()
        {
        }
        function send(\SmartyStreets\PhpSdk\Request $request)
        {
        }
        public function getSendCount()
        {
        }
    }
    class MockSleeper implements \SmartyStreets\PhpSdk\Sleeper
    {
        public function sleep($seconds)
        {
        }
        public function getSleepDurations()
        {
        }
    }
    class MockSender implements \SmartyStreets\PhpSdk\Sender
    {
        public function __construct(\SmartyStreets\PhpSdk\Response $response)
        {
        }
        function send(\SmartyStreets\PhpSdk\Request $request)
        {
        }
        public function getRequest()
        {
        }
    }
    class MockSerializer implements \SmartyStreets\PhpSdk\Serializer
    {
        public function __construct($bytes)
        {
        }
        public function serialize($obj)
        {
        }
        public function deserialize($payload)
        {
        }
    }
    class MockLogger implements \SmartyStreets\PhpSdk\Logger
    {
        public function log($message)
        {
        }
        public function getLog()
        {
        }
    }
    class MockDeserializer implements \SmartyStreets\PhpSdk\Serializer
    {
        public function __construct($deserialized)
        {
        }
        public function serialize($obj)
        {
        }
        public function deserialize($payload)
        {
        }
        public function getPayload()
        {
        }
    }
    class MockStatusCodeSender implements \SmartyStreets\PhpSdk\Sender
    {
        public function __construct($statusCode)
        {
        }
        function send(\SmartyStreets\PhpSdk\Request $request)
        {
        }
    }
    class RequestCapturingSender implements \SmartyStreets\PhpSdk\Sender
    {
        public function __construct()
        {
        }
        public function send(\SmartyStreets\PhpSdk\Request $request)
        {
        }
        public function getRequest()
        {
        }
    }
}
namespace {
    class UsZIPCodeSingleLookupExample
    {
        public function run()
        {
        }
        public function displayResults(\SmartyStreets\PhpSdk\US_ZIPCode\Lookup $lookup)
        {
        }
    }
    class UsZIPCodeMultipleLookupsExample
    {
        public function run()
        {
        }
        public function displayResults(\SmartyStreets\PhpSdk\Batch $batch)
        {
        }
    }
    class USExtractExample
    {
        public function run()
        {
        }
    }
    class InternationalAutocompleteExample
    {
        public function run()
        {
        }
    }
    class USStreetLookupsWithMatchStrategyExamples
    {
        public function run()
        {
        }
        public function displayResults(\SmartyStreets\PhpSdk\Batch $batch)
        {
        }
    }
    class UsStreetSingleAddressExample
    {
        public function run()
        {
        }
        public function displayResults(\SmartyStreets\PhpSdk\US_Street\Lookup $lookup)
        {
        }
    }
    class InternationalExample
    {
        public function run()
        {
        }
    }
    class UsStreetMultipleAddressesExample
    {
        public function run()
        {
        }
        public function displayResults(\SmartyStreets\PhpSdk\Batch $batch)
        {
        }
    }
    class USAutocompleteProExample
    {
        public function run()
        {
        }
    }
    class USReverseGeoExample
    {
        public function run()
        {
        }
    }
    // autoload_real.php @generated by Composer
    class ComposerAutoloaderInit73d2062283f6b9fc90889d614572d525
    {
        public static function loadClassLoader($class)
        {
        }
        /**
         * @return \Composer\Autoload\ClassLoader
         */
        public static function getLoader()
        {
        }
    }
}
namespace Composer\Autoload {
    class ComposerStaticInit73d2062283f6b9fc90889d614572d525
    {
        public static $prefixLengthsPsr4 = array('S' => array('SmartyStreets\\PhpSdk\\' => 21), 'O' => array('Objectiv\\Plugins\\Checkout\\' => 26));
        public static $prefixDirsPsr4 = array('SmartyStreets\\PhpSdk\\' => array(0 => __DIR__ . '/..' . '/smartystreets/phpsdk/src'), 'Objectiv\\Plugins\\Checkout\\' => array(0 => __DIR__ . '/../..' . '/includes'));
        public static $classMap = array('Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php', 'Objectiv\\Plugins\\Checkout\\API\\SettingInterface' => __DIR__ . '/../..' . '/includes/API/SettingInterface.php', 'Objectiv\\Plugins\\Checkout\\API\\SettingsAPI' => __DIR__ . '/../..' . '/includes/API/SettingsAPI.php', 'Objectiv\\Plugins\\Checkout\\Action\\AccountExistsAction' => __DIR__ . '/../..' . '/includes/Action/AccountExistsAction.php', 'Objectiv\\Plugins\\Checkout\\Action\\AddToCartAction' => __DIR__ . '/../..' . '/includes/Action/AddToCartAction.php', 'Objectiv\\Plugins\\Checkout\\Action\\CFWAction' => __DIR__ . '/../..' . '/includes/Action/CFWAction.php', 'Objectiv\\Plugins\\Checkout\\Action\\CompleteOrderAction' => __DIR__ . '/../..' . '/includes/Action/CompleteOrderAction.php', 'Objectiv\\Plugins\\Checkout\\Action\\LogInAction' => __DIR__ . '/../..' . '/includes/Action/LogInAction.php', 'Objectiv\\Plugins\\Checkout\\Action\\LostPasswordAction' => __DIR__ . '/../..' . '/includes/Action/LostPasswordAction.php', 'Objectiv\\Plugins\\Checkout\\Action\\RemoveCouponAction' => __DIR__ . '/../..' . '/includes/Action/RemoveCouponAction.php', 'Objectiv\\Plugins\\Checkout\\Action\\SmartyStreetsAddressValidationAction' => __DIR__ . '/../..' . '/includes/Action/SmartyStreetsAddressValidationAction.php', 'Objectiv\\Plugins\\Checkout\\Action\\UpdateCheckoutAction' => __DIR__ . '/../..' . '/includes/Action/UpdateCheckoutAction.php', 'Objectiv\\Plugins\\Checkout\\Action\\UpdatePaymentMethodAction' => __DIR__ . '/../..' . '/includes/Action/UpdatePaymentMethodAction.php', 'Objectiv\\Plugins\\Checkout\\Action\\UpdateSideCart' => __DIR__ . '/../..' . '/includes/Action/UpdateSideCart.php', 'Objectiv\\Plugins\\Checkout\\Action\\ValidateEmailDomainAction' => __DIR__ . '/../..' . '/includes/Action/ValidateEmailDomainAction.php', 'Objectiv\\Plugins\\Checkout\\Action\\ValidatePostcodeAction' => __DIR__ . '/../..' . '/includes/Action/ValidatePostcodeAction.php', 'Objectiv\\Plugins\\Checkout\\Adapters\\CartItemFactory' => __DIR__ . '/../..' . '/includes/Adapters/CartItemFactory.php', 'Objectiv\\Plugins\\Checkout\\Adapters\\OrderItemFactory' => __DIR__ . '/../..' . '/includes/Adapters/OrderItemFactory.php', 'Objectiv\\Plugins\\Checkout\\AddressFieldsAugmenter' => __DIR__ . '/../..' . '/includes/AddressFieldsAugmenter.php', 'Objectiv\\Plugins\\Checkout\\Admin\\AdminPluginsPageManager' => __DIR__ . '/../..' . '/includes/Admin/AdminPluginsPageManager.php', 'Objectiv\\Plugins\\Checkout\\Admin\\DataUpgrader' => __DIR__ . '/../..' . '/includes/Admin/DataUpgrader.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Notices\\CompatibilityNotice' => __DIR__ . '/../..' . '/includes/Admin/Notices/CompatibilityNotice.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Notices\\InvalidLicenseKeyNotice' => __DIR__ . '/../..' . '/includes/Admin/Notices/InvalidLicenseKeyNotice.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Notices\\NoticeAbstract' => __DIR__ . '/../..' . '/includes/Admin/Notices/NoticeAbstract.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Notices\\TemplateDisabledNotice' => __DIR__ . '/../..' . '/includes/Admin/Notices/TemplateDisabledNotice.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Notices\\WelcomeNotice' => __DIR__ . '/../..' . '/includes/Admin/Notices/WelcomeNotice.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\Advanced' => __DIR__ . '/../..' . '/includes/Admin/Pages/Advanced.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\Appearance' => __DIR__ . '/../..' . '/includes/Admin/Pages/Appearance.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\CartSummary' => __DIR__ . '/../..' . '/includes/Admin/Pages/CartSummary.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\Checkout' => __DIR__ . '/../..' . '/includes/Admin/Pages/Checkout.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\General' => __DIR__ . '/../..' . '/includes/Admin/Pages/General.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\Integrations' => __DIR__ . '/../..' . '/includes/Admin/Pages/Integrations.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\LocalPickup' => __DIR__ . '/../..' . '/includes/Admin/Pages/LocalPickup.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\OrderBumps' => __DIR__ . '/../..' . '/includes/Admin/Pages/OrderBumps.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\OrderPay' => __DIR__ . '/../..' . '/includes/Admin/Pages/OrderPay.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\PageAbstract' => __DIR__ . '/../..' . '/includes/Admin/Pages/PageAbstract.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\PageController' => __DIR__ . '/../..' . '/includes/Admin/Pages/PageController.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\PickupLocations' => __DIR__ . '/../..' . '/includes/Admin/Pages/PickupLocations.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\SideCart' => __DIR__ . '/../..' . '/includes/Admin/Pages/SideCart.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\Support' => __DIR__ . '/../..' . '/includes/Admin/Pages/Support.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\ThankYou' => __DIR__ . '/../..' . '/includes/Admin/Pages/ThankYou.php', 'Objectiv\\Plugins\\Checkout\\Admin\\Pages\\TrustBadges' => __DIR__ . '/../..' . '/includes/Admin/Pages/TrustBadges.php', 'Objectiv\\Plugins\\Checkout\\Admin\\ShippingPhoneController' => __DIR__ . '/../..' . '/includes/Admin/ShippingPhoneController.php', 'Objectiv\\Plugins\\Checkout\\Admin\\TabNavigation' => __DIR__ . '/../..' . '/includes/Admin/TabNavigation.php', 'Objectiv\\Plugins\\Checkout\\Admin\\WelcomeScreenActivationRedirector' => __DIR__ . '/../..' . '/includes/Admin/WelcomeScreenActivationRedirector.php', 'Objectiv\\Plugins\\Checkout\\Admin\\WooCommerceAdminScreenAugmenter' => __DIR__ . '/../..' . '/includes/Admin/WooCommerceAdminScreenAugmenter.php', 'Objectiv\\Plugins\\Checkout\\CartImageSizeAdder' => __DIR__ . '/../..' . '/includes/CartImageSizeAdder.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\CompatibilityAbstract' => __DIR__ . '/../..' . '/includes/Compatibility/CompatibilityAbstract.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\AfterPayKrokedil' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/AfterPayKrokedil.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\AmazonPay' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/AmazonPay.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\AmazonPayLegacy' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/AmazonPayLegacy.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\AmazonPayV1' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/AmazonPayV1.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\Braintree' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/Braintree.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\BraintreeForWooCommerce' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/BraintreeForWooCommerce.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\Helpers\\AmazonPayV1ShippingInfoHelper' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/Helpers/AmazonPayV1ShippingInfoHelper.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\InpsydePayPalPlus' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/InpsydePayPalPlus.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\KlarnaCheckout' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/KlarnaCheckout.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\KlarnaPayment' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/KlarnaPayment.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\KlarnaPayment3' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/KlarnaPayment3.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\NMI' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/NMI.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\PayPalCheckout' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/PayPalCheckout.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\PayPalForWooCommerce' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/PayPalForWooCommerce.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\PayPalPlusCw' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/PayPalPlusCw.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\PaymentPluginsPayPal' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/PaymentPluginsPayPal.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\PostFinance' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/PostFinance.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\ResursBank' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/ResursBank.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\Square' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/Square.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\Stripe' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/Stripe.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\StripeWooCommerce' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/StripeWooCommerce.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\Vipps' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/Vipps.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\WooCommercePayPalPayments' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/WooCommercePayPalPayments.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\WooCommercePayments' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/WooCommercePayments.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\WooCommercePensoPay' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/WooCommercePensoPay.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Gateways\\WooSquarePro' => __DIR__ . '/../..' . '/includes/Compatibility/Gateways/WooSquarePro.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\ActiveCampaign' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/ActiveCampaign.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\ApplyOnline' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/ApplyOnline.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\AstraAddon' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/AstraAddon.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\BeaverThemer' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/BeaverThemer.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\BigBlue' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/BigBlue.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\CO2OK' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/CO2OK.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\CSSHero' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/CSSHero.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\CURCYWooCommerceMultiCurrency' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/CURCYWooCommerceMultiCurrency.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\CartFlows' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/CartFlows.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\CashierForWooCommerce' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/CashierForWooCommerce.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\CheckoutAddressAutoComplete' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/CheckoutAddressAutoComplete.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\CheckoutManager' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/CheckoutManager.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\Chronopost' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/Chronopost.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\CoderockzWooDelivery' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/CoderockzWooDelivery.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\ConvertKitforWooCommerce' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/ConvertKitforWooCommerce.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\CraftyClicks' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/CraftyClicks.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\DiviUltimateFooter' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/DiviUltimateFooter.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\DiviUltimateHeader' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/DiviUltimateHeader.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\DonationForWooCommerce' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/DonationForWooCommerce.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\EUVATAssistant' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/EUVATAssistant.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\EUVATNumber' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/EUVATNumber.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\ElementorPro' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/ElementorPro.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\EnhancedEcommerceGoogleAnalytics' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/EnhancedEcommerceGoogleAnalytics.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\ExtraCheckoutFieldsBrazil' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/ExtraCheckoutFieldsBrazil.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\FacebookForWooCommerce' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/FacebookForWooCommerce.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\Fattureincloud' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/Fattureincloud.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\FreeGiftsforWooCommerce' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/FreeGiftsforWooCommerce.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\GermanMarket' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/GermanMarket.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\GoogleAnalyticsPro' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/GoogleAnalyticsPro.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\Helpers\\WooCommerceProductRecommendationsSideCartLocation' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/Helpers/WooCommerceProductRecommendationsSideCartLocation.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\IconicWooCommerceDeliverySlots' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/IconicWooCommerceDeliverySlots.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\IndeedAffiliatePro' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/IndeedAffiliatePro.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\JupiterXCore' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/JupiterXCore.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\Klaviyo' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/Klaviyo.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\MailerLite' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/MailerLite.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\MartfuryAddons' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/MartfuryAddons.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\MixPanel' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/MixPanel.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\MondialRelay' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/MondialRelay.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\MyCredPartialPayments' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/MyCredPartialPayments.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\MyParcel' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/MyParcel.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\MyShipper' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/MyShipper.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\NIFPortugal' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/NIFPortugal.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\NLPostcodeChecker' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/NLPostcodeChecker.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\NextGenGallery' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/NextGenGallery.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\OneClickUpsells' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/OneClickUpsells.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\OnePageCheckout' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/OnePageCheckout.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\OrderDeliveryDate' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/OrderDeliveryDate.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\OrderDeliveryDateLite' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/OrderDeliveryDateLite.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\OxygenBuilder' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/OxygenBuilder.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\PWGiftCardsPro' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/PWGiftCardsPro.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\PixelCaffeine' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/PixelCaffeine.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\PortugalVaspKios' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/PortugalVaspKios.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\PostNL' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/PostNL.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\PostNL4' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/PostNL4.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\SUMOPaymentPlans' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/SUMOPaymentPlans.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\SUMOSubscriptions' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/SUMOSubscriptions.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\SalientWPBakery' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/SalientWPBakery.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\SavedAddressesForWooCommerce' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/SavedAddressesForWooCommerce.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\SendCloud' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/SendCloud.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\ShipMondo' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/ShipMondo.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\SkyVergeCheckoutAddons' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/SkyVergeCheckoutAddons.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\StrollikCore' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/StrollikCore.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\ThemeHighCheckoutFieldEditor' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/ThemeHighCheckoutFieldEditor.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\ThemeHighCheckoutFieldEditorPro' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/ThemeHighCheckoutFieldEditorPro.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\Tickera' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/Tickera.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\TranslatePress' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/TranslatePress.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\UltimateRewardsPoints' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/UltimateRewardsPoints.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\UpSolutionCore' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/UpSolutionCore.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\UpsellOrderBumpOffer' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/UpsellOrderBumpOffer.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WCFieldFactory' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WCFieldFactory.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WCPont' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WCPont.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WPCProductBundles' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WPCProductBundles.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WPRocket' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WPRocket.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\Webshipper' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/Webshipper.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\Weglot' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/Weglot.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceAddressValidation' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceAddressValidation.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceAdvancedMessages' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceAdvancedMessages.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceCarrierAgents' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceCarrierAgents.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceCheckoutFieldEditor' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceCheckoutFieldEditor.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceCore' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceCore.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceEUUKVATCompliancePremium' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceEUUKVATCompliancePremium.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceExtendedCouponFeaturesPro' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceExtendedCouponFeaturesPro.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceGermanMarket' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceGermanMarket.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceGermanized' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceGermanized.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceGiftCards' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceGiftCards.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceMemberships' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceMemberships.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceOrderDelivery' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceOrderDelivery.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommercePakettikauppa' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommercePakettikauppa.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommercePointsandRewards' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommercePointsandRewards.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceProductBundles' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceProductBundles.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceProductRecommendations' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceProductRecommendations.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceServices' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceServices.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceShipmentTracking' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceShipmentTracking.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceSmartCoupons' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceSmartCoupons.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceSubscriptionGifting' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceSubscriptionGifting.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceSubscriptions' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceSubscriptions.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooCommerceTipping' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooCommerceTipping.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooFinvoicer' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooFinvoicer.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\WooFunnelsOrderBumps' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/WooFunnelsOrderBumps.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\YITHCompositeProducts' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/YITHCompositeProducts.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\YITHDeliveryDate' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/YITHDeliveryDate.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Plugins\\YITHPointsAndRewards' => __DIR__ . '/../..' . '/includes/Compatibility/Plugins/YITHPointsAndRewards.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Astra' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Astra.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Atelier' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Atelier.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Atik' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Atik.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Avada' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Avada.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Barberry' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Barberry.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\BeTheme' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/BeTheme.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\BeaverBuilder' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/BeaverBuilder.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Blaszok' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Blaszok.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Divi' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Divi.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Electro' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Electro.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Flatsome' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Flatsome.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Flevr' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Flevr.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\FuelThemes' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/FuelThemes.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\GeneratePress' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/GeneratePress.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Genesis' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Genesis.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Jupiter' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Jupiter.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\JupiterX' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/JupiterX.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Konte' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Konte.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Listable' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Listable.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Metro' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Metro.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Minimog' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Minimog.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Neve' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Neve.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\OceanWP' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/OceanWP.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Optimizer' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Optimizer.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Porto' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Porto.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Pro' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Pro.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Savoy' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Savoy.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Shoptimizer' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Shoptimizer.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\SpaSalonPro' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/SpaSalonPro.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Stockie' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Stockie.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\TMOrganik' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/TMOrganik.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\The7' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/The7.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\TheBox' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/TheBox.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Thrive' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Thrive.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Tokoo' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Tokoo.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Uncode' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Uncode.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Verso' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Verso.php', 'Objectiv\\Plugins\\Checkout\\Compatibility\\Themes\\Zidane' => __DIR__ . '/../..' . '/includes/Compatibility/Themes/Zidane.php', 'Objectiv\\Plugins\\Checkout\\Customizer' => __DIR__ . '/../..' . '/includes/Customizer.php', 'Objectiv\\Plugins\\Checkout\\DefaultSettingsSetter' => __DIR__ . '/../..' . '/includes/DefaultSettingsSetter.php', 'Objectiv\\Plugins\\Checkout\\Factories\\BumpFactory' => __DIR__ . '/../..' . '/includes/Factories/BumpFactory.php', 'Objectiv\\Plugins\\Checkout\\Features\\CartEditingAtCheckout' => __DIR__ . '/../..' . '/includes/Features/CartEditingAtCheckout.php', 'Objectiv\\Plugins\\Checkout\\Features\\FeaturesAbstract' => __DIR__ . '/../..' . '/includes/Features/FeaturesAbstract.php', 'Objectiv\\Plugins\\Checkout\\Features\\FetchifyAddressAutocomplete' => __DIR__ . '/../..' . '/includes/Features/FetchifyAddressAutocomplete.php', 'Objectiv\\Plugins\\Checkout\\Features\\GoogleAddressAutocomplete' => __DIR__ . '/../..' . '/includes/Features/GoogleAddressAutocomplete.php', 'Objectiv\\Plugins\\Checkout\\Features\\HideOptionalAddressFields' => __DIR__ . '/../..' . '/includes/Features/HideOptionalAddressFields.php', 'Objectiv\\Plugins\\Checkout\\Features\\InternationalPhoneField' => __DIR__ . '/../..' . '/includes/Features/InternationalPhoneField.php', 'Objectiv\\Plugins\\Checkout\\Features\\OnePageCheckout' => __DIR__ . '/../..' . '/includes/Features/OnePageCheckout.php', 'Objectiv\\Plugins\\Checkout\\Features\\OrderBumps' => __DIR__ . '/../..' . '/includes/Features/OrderBumps.php', 'Objectiv\\Plugins\\Checkout\\Features\\OrderReviewStep' => __DIR__ . '/../..' . '/includes/Features/OrderReviewStep.php', 'Objectiv\\Plugins\\Checkout\\Features\\PhpSnippets' => __DIR__ . '/../..' . '/includes/Features/PhpSnippets.php', 'Objectiv\\Plugins\\Checkout\\Features\\Pickup' => __DIR__ . '/../..' . '/includes/Features/Pickup.php', 'Objectiv\\Plugins\\Checkout\\Features\\SideCart' => __DIR__ . '/../..' . '/includes/Features/SideCart.php', 'Objectiv\\Plugins\\Checkout\\Features\\SmartyStreets' => __DIR__ . '/../..' . '/includes/Features/SmartyStreets.php', 'Objectiv\\Plugins\\Checkout\\Features\\TrustBadges' => __DIR__ . '/../..' . '/includes/Features/TrustBadges.php', 'Objectiv\\Plugins\\Checkout\\FormFieldAugmenter' => __DIR__ . '/../..' . '/includes/FormFieldAugmenter.php', 'Objectiv\\Plugins\\Checkout\\Interfaces\\BumpInterface' => __DIR__ . '/../..' . '/includes/Interfaces/BumpInterface.php', 'Objectiv\\Plugins\\Checkout\\Interfaces\\ItemInterface' => __DIR__ . '/../..' . '/includes/Interfaces/ItemInterface.php', 'Objectiv\\Plugins\\Checkout\\Interfaces\\SettingsGetterInterface' => __DIR__ . '/../..' . '/includes/Interfaces/SettingsGetterInterface.php', 'Objectiv\\Plugins\\Checkout\\Loaders\\Content' => __DIR__ . '/../..' . '/includes/Loaders/Content.php', 'Objectiv\\Plugins\\Checkout\\Loaders\\LoaderAbstract' => __DIR__ . '/../..' . '/includes/Loaders/LoaderAbstract.php', 'Objectiv\\Plugins\\Checkout\\Loaders\\Redirect' => __DIR__ . '/../..' . '/includes/Loaders/Redirect.php', 'Objectiv\\Plugins\\Checkout\\Main' => __DIR__ . '/../..' . '/includes/Main.php', 'Objectiv\\Plugins\\Checkout\\Managers\\AssetManager' => __DIR__ . '/../..' . '/includes/Managers/AssetManager.php', 'Objectiv\\Plugins\\Checkout\\Managers\\Helpers\\EDD_SL_Plugin_Updater' => __DIR__ . '/../..' . '/includes/Managers/Helpers/EDD_SL_Plugin_Updater.php', 'Objectiv\\Plugins\\Checkout\\Managers\\PlanManager' => __DIR__ . '/../..' . '/includes/Managers/PlanManager.php', 'Objectiv\\Plugins\\Checkout\\Managers\\SettingsManager' => __DIR__ . '/../..' . '/includes/Managers/SettingsManager.php', 'Objectiv\\Plugins\\Checkout\\Managers\\SettingsManagerAbstract' => __DIR__ . '/../..' . '/includes/Managers/SettingsManagerAbstract.php', 'Objectiv\\Plugins\\Checkout\\Managers\\StyleManager' => __DIR__ . '/../..' . '/includes/Managers/StyleManager.php', 'Objectiv\\Plugins\\Checkout\\Managers\\TemplatesManager' => __DIR__ . '/../..' . '/includes/Managers/TemplatesManager.php', 'Objectiv\\Plugins\\Checkout\\Managers\\UpdatesManager' => __DIR__ . '/../..' . '/includes/Managers/UpdatesManager.php', 'Objectiv\\Plugins\\Checkout\\Model\\Bumps\\AllProductsBump' => __DIR__ . '/../..' . '/includes/Model/Bumps/AllProductsBump.php', 'Objectiv\\Plugins\\Checkout\\Model\\Bumps\\BumpAbstract' => __DIR__ . '/../..' . '/includes/Model/Bumps/BumpAbstract.php', 'Objectiv\\Plugins\\Checkout\\Model\\Bumps\\CategoriesBump' => __DIR__ . '/../..' . '/includes/Model/Bumps/CategoriesBump.php', 'Objectiv\\Plugins\\Checkout\\Model\\Bumps\\NullBump' => __DIR__ . '/../..' . '/includes/Model/Bumps/NullBump.php', 'Objectiv\\Plugins\\Checkout\\Model\\Bumps\\SpecificProductsBump' => __DIR__ . '/../..' . '/includes/Model/Bumps/SpecificProductsBump.php', 'Objectiv\\Plugins\\Checkout\\Model\\CartItem' => __DIR__ . '/../..' . '/includes/Model/CartItem.php', 'Objectiv\\Plugins\\Checkout\\Model\\MatchedVariationResult' => __DIR__ . '/../..' . '/includes/Model/MatchedVariationResult.php', 'Objectiv\\Plugins\\Checkout\\Model\\OrderItem' => __DIR__ . '/../..' . '/includes/Model/OrderItem.php', 'Objectiv\\Plugins\\Checkout\\Model\\Template' => __DIR__ . '/../..' . '/includes/Model/Template.php', 'Objectiv\\Plugins\\Checkout\\PhpErrorOutputSuppressor' => __DIR__ . '/../..' . '/includes/PhpErrorOutputSuppressor.php', 'Objectiv\\Plugins\\Checkout\\SingletonAbstract' => __DIR__ . '/../..' . '/includes/SingletonAbstract.php', 'Objectiv\\Plugins\\Checkout\\Stats\\StatCollection' => __DIR__ . '/../..' . '/includes/Stats/StatCollection.php', 'Objectiv\\Plugins\\Checkout\\TrustBadgeImageSizeAdder' => __DIR__ . '/../..' . '/includes/TrustBadgeImageSizeAdder.php', 'SmartyStreets\\PhpSdk\\ArrayUtil' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/ArrayUtil.php', 'SmartyStreets\\PhpSdk\\Batch' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Batch.php', 'SmartyStreets\\PhpSdk\\ClientBuilder' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/ClientBuilder.php', 'SmartyStreets\\PhpSdk\\Credentials' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Credentials.php', 'SmartyStreets\\PhpSdk\\Exceptions\\BadCredentialsException' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Exceptions/BadCredentialsException.php', 'SmartyStreets\\PhpSdk\\Exceptions\\BadRequestException' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Exceptions/BadRequestException.php', 'SmartyStreets\\PhpSdk\\Exceptions\\BatchFullException' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Exceptions/BatchFullException.php', 'SmartyStreets\\PhpSdk\\Exceptions\\GatewayTimeoutException' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Exceptions/GatewayTimeoutException.php', 'SmartyStreets\\PhpSdk\\Exceptions\\InternalServerErrorException' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Exceptions/InternalServerErrorException.php', 'SmartyStreets\\PhpSdk\\Exceptions\\PaymentRequiredException' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Exceptions/PaymentRequiredException.php', 'SmartyStreets\\PhpSdk\\Exceptions\\RequestEntityTooLargeException' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Exceptions/RequestEntityTooLargeException.php', 'SmartyStreets\\PhpSdk\\Exceptions\\ServiceUnavailableException' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Exceptions/ServiceUnavailableException.php', 'SmartyStreets\\PhpSdk\\Exceptions\\SmartyException' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Exceptions/SmartyException.php', 'SmartyStreets\\PhpSdk\\Exceptions\\TooManyRequestsException' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Exceptions/TooManyRequestsException.php', 'SmartyStreets\\PhpSdk\\Exceptions\\UnprocessableEntityException' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Exceptions/UnprocessableEntityException.php', 'SmartyStreets\\PhpSdk\\International_Autocomplete\\Candidate' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/International_Autocomplete/Candidate.php', 'SmartyStreets\\PhpSdk\\International_Autocomplete\\Client' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/International_Autocomplete/Client.php', 'SmartyStreets\\PhpSdk\\International_Autocomplete\\Lookup' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/International_Autocomplete/Lookup.php', 'SmartyStreets\\PhpSdk\\International_Autocomplete\\Result' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/International_Autocomplete/Result.php', 'SmartyStreets\\PhpSdk\\International_Street\\Analysis' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/International_Street/Analysis.php', 'SmartyStreets\\PhpSdk\\International_Street\\Candidate' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/International_Street/Candidate.php', 'SmartyStreets\\PhpSdk\\International_Street\\Changes' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/International_Street/Changes.php', 'SmartyStreets\\PhpSdk\\International_Street\\Client' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/International_Street/Client.php', 'SmartyStreets\\PhpSdk\\International_Street\\Components' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/International_Street/Components.php', 'SmartyStreets\\PhpSdk\\International_Street\\LanguageMode' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/International_Street/LanguageMode.php', 'SmartyStreets\\PhpSdk\\International_Street\\Lookup' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/International_Street/Lookup.php', 'SmartyStreets\\PhpSdk\\International_Street\\Metadata' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/International_Street/Metadata.php', 'SmartyStreets\\PhpSdk\\International_Street\\RootLevel' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/International_Street/RootLevel.php', 'SmartyStreets\\PhpSdk\\LicenseSender' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/LicenseSender.php', 'SmartyStreets\\PhpSdk\\Logger' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Logger.php', 'SmartyStreets\\PhpSdk\\MyLogger' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/MyLogger.php', 'SmartyStreets\\PhpSdk\\MySleeper' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/MySleeper.php', 'SmartyStreets\\PhpSdk\\NativeSender' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/NativeSender.php', 'SmartyStreets\\PhpSdk\\NativeSerializer' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/NativeSerializer.php', 'SmartyStreets\\PhpSdk\\Proxy' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Proxy.php', 'SmartyStreets\\PhpSdk\\Psr3Logger' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Psr3Logger.php', 'SmartyStreets\\PhpSdk\\Request' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Request.php', 'SmartyStreets\\PhpSdk\\Response' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Response.php', 'SmartyStreets\\PhpSdk\\RetrySender' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/RetrySender.php', 'SmartyStreets\\PhpSdk\\Sender' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Sender.php', 'SmartyStreets\\PhpSdk\\Serializer' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Serializer.php', 'SmartyStreets\\PhpSdk\\SharedCredentials' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/SharedCredentials.php', 'SmartyStreets\\PhpSdk\\SigningSender' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/SigningSender.php', 'SmartyStreets\\PhpSdk\\Sleeper' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/Sleeper.php', 'SmartyStreets\\PhpSdk\\StaticCredentials' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/StaticCredentials.php', 'SmartyStreets\\PhpSdk\\StatusCodeSender' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/StatusCodeSender.php', 'SmartyStreets\\PhpSdk\\URLPrefixSender' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/URLPrefixSender.php', 'SmartyStreets\\PhpSdk\\US_Autocomplete\\Client' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Autocomplete/Client.php', 'SmartyStreets\\PhpSdk\\US_Autocomplete\\GeolocateType' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Autocomplete/GeolocateType.php', 'SmartyStreets\\PhpSdk\\US_Autocomplete\\Lookup' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Autocomplete/Lookup.php', 'SmartyStreets\\PhpSdk\\US_Autocomplete\\Result' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Autocomplete/Result.php', 'SmartyStreets\\PhpSdk\\US_Autocomplete\\Suggestion' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Autocomplete/Suggestion.php', 'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\Client' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Autocomplete_Pro/Client.php', 'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\GeolocateType' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Autocomplete_Pro/GeolocateType.php', 'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\Lookup' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Autocomplete_Pro/Lookup.php', 'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\Result' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Autocomplete_Pro/Result.php', 'SmartyStreets\\PhpSdk\\US_Autocomplete_Pro\\Suggestion' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Autocomplete_Pro/Suggestion.php', 'SmartyStreets\\PhpSdk\\US_Extract\\Address' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Extract/Address.php', 'SmartyStreets\\PhpSdk\\US_Extract\\Client' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Extract/Client.php', 'SmartyStreets\\PhpSdk\\US_Extract\\Lookup' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Extract/Lookup.php', 'SmartyStreets\\PhpSdk\\US_Extract\\Metadata' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Extract/Metadata.php', 'SmartyStreets\\PhpSdk\\US_Extract\\Result' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Extract/Result.php', 'SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Address' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Reverse_Geo/Address.php', 'SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Client' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Reverse_Geo/Client.php', 'SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Coordinate' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Reverse_Geo/Coordinate.php', 'SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Lookup' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Reverse_Geo/Lookup.php', 'SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Response' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Reverse_Geo/Response.php', 'SmartyStreets\\PhpSdk\\US_Reverse_Geo\\Result' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Reverse_Geo/Result.php', 'SmartyStreets\\PhpSdk\\US_Street\\Analysis' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Street/Analysis.php', 'SmartyStreets\\PhpSdk\\US_Street\\Candidate' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Street/Candidate.php', 'SmartyStreets\\PhpSdk\\US_Street\\Client' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Street/Client.php', 'SmartyStreets\\PhpSdk\\US_Street\\Components' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Street/Components.php', 'SmartyStreets\\PhpSdk\\US_Street\\Lookup' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Street/Lookup.php', 'SmartyStreets\\PhpSdk\\US_Street\\Metadata' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_Street/Metadata.php', 'SmartyStreets\\PhpSdk\\US_ZIPCode\\AlternateCounties' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_ZIPCode/AlternateCounties.php', 'SmartyStreets\\PhpSdk\\US_ZIPCode\\City' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_ZIPCode/City.php', 'SmartyStreets\\PhpSdk\\US_ZIPCode\\Client' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_ZIPCode/Client.php', 'SmartyStreets\\PhpSdk\\US_ZIPCode\\Lookup' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_ZIPCode/Lookup.php', 'SmartyStreets\\PhpSdk\\US_ZIPCode\\Result' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_ZIPCode/Result.php', 'SmartyStreets\\PhpSdk\\US_ZIPCode\\ZIPCode' => __DIR__ . '/..' . '/smartystreets/phpsdk/src/US_ZIPCode/ZIPCode.php');
        public static function getInitializer(\Composer\Autoload\ClassLoader $loader)
        {
        }
    }
}
namespace SmartyStreets\PhpSdk\US_Autocomplete {
    define('GEOLOCATE_TYPE_STATE', 'state');
}
namespace SmartyStreets\PhpSdk\International_Street {
    define('LANGUAGE_MODE_NATIVE', 'native', false);
    define('LANGUAGE_MODE_LATIN', 'latin', false);
}
namespace SmartyStreets\PhpSdk {
    const DEFAULT_BACKOFF_DURATION = 10;
    const STATUS_TOO_MANY_REQUESTS = 429;
}
namespace SmartyStreets\PhpSdk {
    const VERSION = '4.16.25';
}
/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Composer\Autoload {
    /**
     * Scope isolated include.
     *
     * Prevents access to $this/self from included files.
     *
     * @param  string $file
     * @return void
     * @private
     */
    function includeFile($file)
    {
    }
}
namespace {
    /**
     * Takes a callable and excutes it, then returns the content inside
     * a row / max width column
     *
    * @param callback $callable
    */
    function cfw_auto_wrap(callable $callable)
    {
    }
    /**
     * Thank you page section wrap open
     *
     * @param $class
     */
    function cfw_thank_you_section_start($class)
    {
    }
    /**
     * Thank you page section wrapper
     *
    * @param callable $callable
    * @param $class
    * @param array $parameters
    */
    function cfw_thank_you_section_auto_wrap(callable $callable, $class, $parameters = array())
    {
    }
    /**
     * The mobile cart summary header
     *
     * Includes cart total and button to expand the cart summary
     *
     * @param bool $total
     */
    function cfw_cart_summary_mobile_header($total = \false)
    {
    }
    /**
     * Helper function to output a close div tag
     */
    function cfw_close_cart_summary_div()
    {
    }
    /**
     * The opening div tag for the cart summary content
     */
    function cfw_cart_summary_content_open_wrap()
    {
    }
    /**
     * Handles WooCommerce before order review hooks
     *
     * This hook is in a different place on our checkout so
     * we have to wrap it with an ID and apply styles similar to native
     */
    function cfw_cart_summary_before_order_review()
    {
    }
    /**
     * Handles WooCommerce after order review hooks
     *
     * This hook is in a different place on our checkout so
     * we have to wrap it with an ID and apply styles similar to native
     */
    function cfw_cart_summary_after_order_review()
    {
    }
    /**
     * Print WooCommerce notices with placeholder div for JS behaviors
     */
    function cfw_wc_print_notices()
    {
    }
    /**
     * Notices with wrap
     */
    function cfw_wc_print_notices_with_wrap()
    {
    }
    /**
     * Payment Request buttons (aka Express Checkout)
     */
    function cfw_payment_request_buttons()
    {
    }
    /**
     * Customer information tab heading
     */
    function cfw_customer_info_tab_heading()
    {
    }
    /**
     * Customer information tab heading
     */
    function cfw_order_review_tab_heading()
    {
    }
    function cfw_customer_info_tab_account()
    {
    }
    function cfw_customer_info_tab_account_fields()
    {
    }
    function cfw_maybe_show_already_have_an_account_text()
    {
    }
    function cfw_maybe_show_email_field()
    {
    }
    function cfw_account_password_field_slide()
    {
    }
    function cfw_create_account_checkbox()
    {
    }
    function cfw_maybe_show_welcome_back_text()
    {
    }
    function cfw_maybe_output_login_modal_container()
    {
    }
    /**
     * The address displayed on the Customer Info tab
     */
    function cfw_customer_info_address()
    {
    }
    /**
     * @return bool
     */
    function cfw_show_shipping_tab() : bool
    {
    }
    /**
     * @return bool
     */
    function cfw_show_shipping_total() : bool
    {
    }
    /**
     * Customer information tab nav
     *
     * Includes return to cart and next tab buttons
     */
    function cfw_customer_info_tab_nav()
    {
    }
    /**
     * Customer information tab nav
     *
     * Includes return to cart and next tab buttons
     *
     * @param bool $show_cart_return_link
     */
    function cfw_payment_method_tab_review_nav($show_cart_return_link = \false)
    {
    }
    /**
     * Shipping method tab address review section
     */
    function cfw_shipping_method_address_review_pane()
    {
    }
    /**
     * Payment method tab address review section
     */
    function cfw_payment_method_address_review_pane()
    {
    }
    function cfw_order_review_step_review_pane()
    {
    }
    /**
    * @return string
    */
    function cfw_get_review_pane_payment_method() : string
    {
    }
    function cfw_order_review_step_totals_review_pane()
    {
    }
    /**
     * Shipping method tab list of shipping methods
     *
     */
    function cfw_shipping_methods()
    {
    }
    /**
     * Shipping method tab navigation
     *
     * Includes previous and next tab buttons
     */
    function cfw_shipping_method_tab_nav()
    {
    }
    /**
     * Payment method tab payments list
     *
     * Includes payment method tab heading
     *
    * @param bool $object
    * @param bool $show_title
    */
    function cfw_payment_methods($object = \false, $show_title = \true)
    {
    }
    /**
     * Payment method tab billing address radio group
     */
    function cfw_payment_tab_content_billing_address()
    {
    }
    /**
     * Payment method tab order notes
     *
     * This also handles any custom fields attached to order notes area
     */
    function cfw_payment_tab_content_order_notes()
    {
    }
    /**
     * Payment method tab terms and conditions
     */
    function cfw_payment_tab_content_terms_and_conditions()
    {
    }
    /**
     * Payment method tab nav
     *
     * Includes previous tab and place order buttons
     *
     * @param bool $show_cart_return_link
     */
    function cfw_payment_tab_nav($show_cart_return_link = \false)
    {
    }
    /**
     * Order review tab nav
     *
     * Includes previous tab and place order buttons
     */
    function cfw_order_review_tab_nav()
    {
    }
    /**
     * Payment method tab nav for one page checkout
     *
     * Includes place order button
     */
    function cfw_payment_tab_nav_one_page_checkout()
    {
    }
    /**
     * Cart list
     */
    function cfw_cart_html()
    {
    }
    /**
     * Coupon module
     *
     * @param bool $mobile
     */
    function cfw_coupon_module($mobile = \false)
    {
    }
    function cfw_maybe_show_coupon_module()
    {
    }
    function cfw_mobile_coupon_module()
    {
    }
    /**
     * Cart summary totals
     */
    function cfw_totals_html()
    {
    }
    /**
     * The form attributes
     *
     * @param bool|mixed $id
     * @param bool $row
     * @param bool $action
     */
    function cfw_form_attributes($id = \false, bool $row = \true, bool $action = \true)
    {
    }
    /**
     * Shipping method tab container style attribute
     */
    function cfw_shipping_method_tab_style_attribute()
    {
    }
    function cfw_customer_info_tab_style_attribute()
    {
    }
    /**
     * Render title with order number, checkbox graphic, and thank you statement.
     *
    * @param WC_Order $order
    */
    function cfw_thank_you_title(\WC_Order $order)
    {
    }
    /**
     * Thank you page section open
     *
     * @param $class
     */
    function cfw_thank_you_section_wrap($callable, $class)
    {
    }
    /**
     * Thank you page section close
     */
    function cfw_thank_you_section_end()
    {
    }
    /**
     * Thank you page order status row
     *
     * Shows progression of order through statuses.
     *
    * @param WC_Order $order
    * @param array $order_statuses
    */
    function cfw_thank_you_order_status_row(\WC_Order $order, array $order_statuses)
    {
    }
    /**
     * Thank you page map element
     *
    * @param WC_Order $order
    */
    function cfw_thank_you_map(\WC_Order $order)
    {
    }
    /**
     * Thank you page order updates section
     *
    * @param WC_Order $order
    */
    function cfw_thank_you_order_updates(\WC_Order $order)
    {
    }
    /**
     * @param WC_Order $order
     * @param array $order_statues
     * @param boolean $show_downloads
     * @param array $downloads
     */
    function cfw_thank_you_downloads($order, $order_statues, $show_downloads, $downloads)
    {
    }
    /**
     * Thank you page customer information
     *
    * @param WC_Order $order
    */
    function cfw_thank_you_customer_information(\WC_Order $order)
    {
    }
    /**
     * Renders the buttons beneath the order details on the
     * thank you page
     */
    function cfw_thank_you_bottom_controls()
    {
    }
    /**
     * Thank you page cart summary content
     *
    * @param WC_Order $order
    */
    function cfw_thank_you_cart_summary_content(\WC_Order $order)
    {
    }
    /**
     * Order pay heading
     */
    function cfw_order_pay_heading()
    {
    }
    /**
     * Order pay login form
     *
    * @param WC_Order $order
    */
    function cfw_order_pay_login_form(\WC_Order $order)
    {
    }
    /**
     * Order Pay payment form
     *
    * @param WC_Order $order
    * @param array $available_gateways
    * @param $order_button_text
    * @param $call_receipt_hook
    */
    function cfw_order_pay_payment_form(\WC_Order $order, array $available_gateways, $order_button_text, $call_receipt_hook)
    {
    }
    /**
    * @param WC_Order $order
    * @param $call_receipt_hook
    * @param $available_gateways
    * @param $order_button_text
    */
    function cfw_order_pay_form(\WC_Order $order, $call_receipt_hook, $available_gateways, $order_button_text)
    {
    }
    /**
     * Thank you page cart summary content
     *
    * @param WC_Order $order
    */
    function cfw_order_pay_cart_summary_content(\WC_Order $order)
    {
    }
    function cfw_thank_you_section_start_order_status()
    {
    }
    /**
    * @param WC_Order $order
    */
    function cfw_thank_you_order_updates_wrapped(\WC_Order $order)
    {
    }
    function cfw_thank_you_downloads_wrapped($order, $order_statues, $show_downloads, $downloads)
    {
    }
    function cfw_thank_you_customer_information_wrapped($order)
    {
    }
    function cfw_cart_summary_mobile_header_display(\WC_Order $order)
    {
    }
    /**
    * Get the checkout tabs
    *
    * @return array
    */
    function cfw_get_checkout_tabs() : array
    {
    }
    function cfw_output_checkout_tabs()
    {
    }
    function cfw_set_current_tab(string $tab)
    {
    }
    function cfw_get_current_tab() : string
    {
    }
    function cfw_lost_password_modal()
    {
    }
    function cfw_maybe_output_footer_nav_menu()
    {
    }
    function cfw_output_empty_cart_message()
    {
    }
    /**
     * Plan Availability
     */
    $has_premium_plan = \Objectiv\Plugins\Checkout\Managers\PlanManager::has_premium_plan();
    /**
     * Admin Settings Pages
     */
    // Handles Parent Menu and General Menu
    $appearance_admin_page = new \Objectiv\Plugins\Checkout\Admin\Pages\Appearance($settings_manager);
    /**
     * Premium Features Instantiation
     */
    // This should always be first so that it runs before other features
    $php_snippets = new \Objectiv\Plugins\Checkout\Features\PhpSnippets(!\is_admin(), \true, '', $settings_manager, $settings_manager->get_field_name('php_snippets'));
    function cfw_apply_filters($hook_name, $value, ...$args)
    {
    }
    function cfw_do_action($hook_name, ...$arg)
    {
    }
    /**
     * @return bool
     */
    function cfw_is_thank_you_view_order_page_active() : bool
    {
    }
    /**
     * @throws Exception
     */
    function cfw_get_all_order_bumps() : array
    {
    }
    /**
     * These are wrapper language functions for referencing other translation domains within CFW
     *
     * This prevents Poedit confusion: https://glueckpress.com/6651/excluding-text-domains/
     *
     * poedit automatically looks for __(), _e(), esc_html__(), etc
     * and it doesn't parse domain
     * so putting a thin wrapper around these functions let's you ignore any string you want while perserving the functionality
     */
    /**
     * Wrapper for __() gettext function.
     *
     * @param  string $text     Translatable text string
     * @param  string $domain Text domain, default: woocommerce
     * @return string Translated string
     */
    function cfw__($text, $domain = 'default')
    {
    }
    /**
     * @param $text
     * @param string $domain
     *
     * @return string
     */
    function cfw_esc_attr__($text, $domain = 'default')
    {
    }
    /**
     * @param $text
     * @param string $domain
     *
     * @return string
     */
    function cfw_esc_html__($text, $domain = 'default')
    {
    }
    /**
     * @param $text
     * @param string $domain
     */
    function cfw_e($text, $domain = 'default')
    {
    }
    /**
     * @param $text
     * @param string $domain
     */
    function cfw_esc_attr_e($text, $domain = 'default')
    {
    }
    /**
     * @param $text
     * @param string $domain
     */
    function cfw_esc_html_e($text, $domain = 'default')
    {
    }
    /**
     * @param $text
     * @param $context
     * @param string $domain
     *
     * @return string|void
     */
    function cfw_x($text, $context, $domain = 'default')
    {
    }
    /**
     * @param $text
     * @param $context
     * @param string $domain
     */
    function cfw_ex($text, $context, $domain = 'default')
    {
    }
    /**
     * @param $text
     * @param $context
     * @param string $domain
     *
     * @return string|void
     */
    function cfw_esc_attr_x($text, $context, $domain = 'default')
    {
    }
    /**
     * @param $text
     * @param $context
     * @param string $domain
     *
     * @return string
     */
    function cfw_esc_html_x($text, $context, $domain = 'default')
    {
    }
    /**
     * @param $single
     * @param $plural
     * @param $number
     * @param string $domain
     *
     * @return string
     */
    function cfw_n($single, $plural, $number, $domain = 'default')
    {
    }
    /**
     * @param $single
     * @param $plural
     * @param $number
     * @param $context
     * @param string $domain
     *
     * @return string
     */
    function cfw_nx($single, $plural, $number, $context, $domain = 'default')
    {
    }
    function cfw_admin_page_section(string $title, string $description, string $content)
    {
    }
    /**
     * @deprecated
     * @return Main|null
     */
    function cfw_get_main() : ?\Objectiv\Plugins\Checkout\Main
    {
    }
    function cfw_output_fieldset(array $fieldset)
    {
    }
    /**
     * @param WC_Checkout $checkout
     */
    function cfw_output_account_checkout_fields(\WC_Checkout $checkout)
    {
    }
    /**
     * Get the shipping fields
     *
     * @return array
     */
    function cfw_get_shipping_checkout_fields() : array
    {
    }
    /**
     */
    function cfw_output_shipping_checkout_fields()
    {
    }
    /**
     * Get the billing fields
     *
     * @return array
     */
    function cfw_get_billing_checkout_fields() : array
    {
    }
    /**
     */
    function cfw_output_billing_checkout_fields()
    {
    }
    /**
     * Filter billing fields down to only fields that match shipping fields
     *
     * @param array $billing_fields
     * @param array $shipping_fields
     *
     * @return array
     */
    function cfw_get_common_billing_fields(array $billing_fields, array $shipping_fields) : array
    {
    }
    /**
     * Filter billing fields down to only unique fields that aren't also shipping fields
     *
     * @param array $billing_fields
     * @param array $shipping_fields
     *
     * @return array
     */
    function cfw_get_unique_billing_fields(array $billing_fields, array $shipping_fields) : array
    {
    }
    function cfw_maybe_output_extra_billing_fields()
    {
    }
    function cfw_get_review_pane_shipping_address_label() : string
    {
    }
    /**
     * @param WC_Checkout $checkout
     *
     * @return string
     */
    function cfw_get_review_pane_shipping_address(\WC_Checkout $checkout) : string
    {
    }
    /**
     * @param WC_Checkout $checkout
     *
     * @return string
     */
    function cfw_get_review_pane_billing_address(\WC_Checkout $checkout) : string
    {
    }
    function cfw_cleanup_formatted_address(string $address) : string
    {
    }
    /**
     * @param string $fieldset
     *
     * @return array
     */
    function cfw_get_posted_address_fields(string $fieldset = 'billing') : array
    {
    }
    function cfw_get_shipping_methods_html()
    {
    }
    function cfw_shipping_methods_html()
    {
    }
    function cfw_before_shipping()
    {
    }
    function cfw_after_shipping()
    {
    }
    function cfw_get_payment_methods_html()
    {
    }
    /**
     * @return string
     */
    function cfw_get_checkout_item_summary_table() : string
    {
    }
    function cfw_get_order_item_summary_table(\WC_Order $order) : string
    {
    }
    /**
     * @return string
     */
    function cfw_get_side_cart_item_summary_table() : string
    {
    }
    function cfw_get_cart_html()
    {
    }
    /**
     * @param WC_Order $order
     */
    function cfw_order_cart_html(\WC_Order $order)
    {
    }
    /**
     * @param WC_Order $order
     *
     * @return mixed|void
     */
    function cfw_get_order_cart_html(\WC_Order $order)
    {
    }
    function cfw_get_item_data_output(\Objectiv\Plugins\Checkout\Interfaces\ItemInterface $item) : string
    {
    }
    function cfw_display_item_data(\Objectiv\Plugins\Checkout\Interfaces\ItemInterface $item)
    {
    }
    function cfw_get_totals_html()
    {
    }
    /**
     * Get shipping methods.
     *
     * @see wc_cart_totals_shipping_html()
     */
    function cfw_cart_totals_shipping_html()
    {
    }
    function cfw_all_packages_have_available_shipping_methods(array $packages) : bool
    {
    }
    function cfw_get_shipping_total() : string
    {
    }
    function cfw_all_packages_have_selected_shipping_methods($packages) : bool
    {
    }
    function cfw_calculate_packages_shipping(array $packages, $wc_session, $wc_cart)
    {
    }
    /**
     * Get shipping methods.
     *
     * @see wc_cart_totals_shipping_html()
     */
    function cfw_order_review_pane_shipping_totals()
    {
    }
    /**
     * @param WC_Order $order
     */
    function cfw_order_totals_html(\WC_Order $order)
    {
    }
    /**
     * @param WC_Order $order
     *
     * @return mixed|void
     */
    function cfw_get_order_totals_html(\WC_Order $order)
    {
    }
    function cfw_address_class_wrap($shipping = \true)
    {
    }
    function cfw_get_place_order($order_button_text = \false)
    {
    }
    function cfw_place_order($order_button_text = \false)
    {
    }
    function cfw_get_payment_methods($object = \false, $show_title = \true)
    {
    }
    function cfw_billing_address_radio_group()
    {
    }
    /**
     * Get all approved WooCommerce order notes.
     *
     * @param int|string $order_id The order ID.
     * @param string $status_search
     *
     * @return bool|string
     */
    function cfw_order_status_date($order_id, $status_search)
    {
    }
    /**
     * @param \WC_Order $order
     */
    function cfw_maybe_output_tracking_numbers($order)
    {
    }
    function cfw_return_to_cart_link()
    {
    }
    /**
     * @param string $label The pre-translated button label
     * @param array $classes Any extra classes to add
     */
    function cfw_continue_to_shipping_button(string $label = '', array $classes = array())
    {
    }
    /**
     * @param array $args Button options such as label or classes
     */
    function cfw_continue_to_payment_button(array $args = array())
    {
    }
    function cfw_continue_to_order_review_button()
    {
    }
    function cfw_return_to_customer_information_link()
    {
    }
    function cfw_return_to_shipping_method_link()
    {
    }
    function cfw_return_to_payment_method_link()
    {
    }
    /**
     * @return bool
     */
    function cfw_show_customer_information_tab() : bool
    {
    }
    function cfw_get_breadcrumbs() : array
    {
    }
    function cfw_breadcrumb_navigation()
    {
    }
    /**
     * User to sort breadcrumbs based on priority with uasort.
     *
     * @param array $a First value to compare.
     * @param array $b Second value to compare.
     * @return int
     *@since 3.5.1
     */
    function cfw_uasort_by_priority_comparison(array $a, array $b) : int
    {
    }
    function cfw_main_container_classes($context = 'checkout')
    {
    }
    /**
     * @param callable $function
     * @return false|string
     */
    function cfw_return_function_output(callable $function)
    {
    }
    function cfw_count_filters($filter) : int
    {
    }
    /**
     * @return bool
     */
    function cfw_is_checkout() : bool
    {
    }
    /**
     * @return bool
     */
    function cfw_is_checkout_pay_page() : bool
    {
    }
    /**
     * @return bool
     */
    function cfw_is_order_received_page() : bool
    {
    }
    /**
     * @return bool
     */
    function is_cfw_page() : bool
    {
    }
    /**
     * Determines whether CheckoutWC templates can load on the frontend
     *
     * @return bool
     */
    function cfw_is_enabled() : bool
    {
    }
    /**
     * Get phone field setting
     *
     * @return boolean
     */
    function cfw_is_phone_fields_enabled() : bool
    {
    }
    /**
     * Match new guest order to existing account if it exists
     *
     * @param $order_id
     */
    function cfw_maybe_match_new_order_to_user_account($order_id)
    {
    }
    /**
     * Match old guest orders to new account if they exist
     *
     * @param $user_id
     */
    function cfw_maybe_link_orders_at_registration($user_id)
    {
    }
    function cfw_get_plugin_template_path() : string
    {
    }
    function cfw_get_user_template_path() : string
    {
    }
    function cfw_get_active_template() : \Objectiv\Plugins\Checkout\Model\Template
    {
    }
    /**
     * @return Template[]
     */
    function cfw_get_available_templates() : array
    {
    }
    function cfw_frontend()
    {
    }
    /**
     * @return bool|\WC_Order|\WC_Order_Refund
     */
    function cfw_get_order_received_order()
    {
    }
    /**
     * @return AddressFieldsAugmenter|null
     */
    function cfw_get_form() : \Objectiv\Plugins\Checkout\AddressFieldsAugmenter
    {
    }
    /**
     * @return bool
     */
    function cfw_is_thank_you_page_active() : bool
    {
    }
    /**
     * @return false|string
     */
    function cfw_get_logo_url()
    {
    }
    function cfw_logo()
    {
    }
    /**
     * Add WP theme styles to list of blocked style handles.
     *
     * @param $styles
     *
     * @return array
     */
    function cfw_remove_theme_styles($styles) : array
    {
    }
    /**
     * Add WP theme styles to list of blocked style handles.
     *
     * @param $scripts
     *
     * @return array
     */
    function cfw_remove_theme_scripts($scripts) : array
    {
    }
    /**
     * For gateways that add buttons above checkout form
     *
     * @param string $class
     * @param string $id
     * @param string $style
     */
    function cfw_add_separator(string $class = '', string $id = '', string $style = '')
    {
    }
    /**
     * @param string $hook
     * @param string $function_name
     * @param int $priority
     * @return false|mixed
     */
    function cfw_get_hook_instance_object(string $hook, string $function_name, int $priority = 10)
    {
    }
    /**
     * @return bool
     */
    function cfw_is_login_at_checkout_allowed() : bool
    {
    }
    /**
     * @deprecated
     * @return bool
     */
    function cfw_is_enhanced_login_enabled() : bool
    {
    }
    /**
     * @param array $cart_data
     * @param bool $refresh_totals
     *
     * @return bool
     */
    function cfw_update_cart(array $cart_data, bool $refresh_totals = \true) : bool
    {
    }
    function cfw_get_cart_item_quantity_control(array $cart_item, string $cart_item_key, \WC_Product $product) : string
    {
    }
    function cfw_is_cart_item_editable(array $cart_item, string $cart_item_key, \WC_Product $product) : bool
    {
    }
    function cfw_get_woocommerce_notices($clear_notices = \true) : array
    {
    }
    function cfw_remove_add_to_cart_notice($product_id, $quantity)
    {
    }
    function cfw_get_variation_id_from_attributes($product, $default_attributes) : ?int
    {
    }
    function cfw_get_allowed_html() : array
    {
    }
    /**
     * The default colors for this theme
     */
    $defaults = array('body_background_color' => '#ffffff', 'body_text_color' => '#333333', 'header_background_color' => '#ffffff', 'footer_background_color' => '#ffffff', 'header_text_color' => '#2b2b2b', 'footer_color' => '#999999', 'link_color' => '#0073aa', 'button_color' => '#333333', 'button_text_color' => '#ffffff', 'button_hover_color' => '#555555', 'button_text_hover_color' => '#ffffff', 'secondary_button_color' => '#999999', 'secondary_button_text_color' => '#ffffff', 'secondary_button_hover_color' => '#666666', 'secondary_button_text_hover_color' => '#ffffff', 'summary_background_color' => '#fafafa', 'summary_mobile_background_color' => '#fafafa', 'summary_text_color' => '#333333', 'summary_link_color' => '#0073aa', 'cart_item_quantity_color' => '#7f7f7f', 'cart_item_quantity_text_color' => '#ffffff', 'breadcrumb_completed_text_color' => '#7f7f7f', 'breadcrumb_current_text_color' => '#333333', 'breadcrumb_next_text_color' => '#7f7f7f', 'breadcrumb_completed_accent_color' => '#333333', 'breadcrumb_current_accent_color' => '#333333', 'breadcrumb_next_accent_color' => '#333333');
    function copify_desktop_header()
    {
    }
    function copify_mobile_logo()
    {
    }
    function copify_footer()
    {
    }
    /**
     * The default colors for this theme
     */
    $defaults = array('body_background_color' => '#ffffff', 'body_text_color' => '#333333', 'header_background_color' => '#222222', 'footer_background_color' => '#222222', 'header_text_color' => '#ffffff', 'footer_color' => '#ffffff', 'link_color' => '#0073aa', 'button_color' => '#333333', 'button_text_color' => '#ffffff', 'button_hover_color' => '#555555', 'button_text_hover_color' => '#ffffff', 'secondary_button_color' => '#999999', 'secondary_button_text_color' => '#ffffff', 'secondary_button_hover_color' => '#666666', 'secondary_button_text_hover_color' => '#ffffff', 'summary_background_color' => '#f8f8f8', 'summary_mobile_background_color' => '#fafafa', 'summary_text_color' => '#333333', 'summary_link_color' => '#0073aa', 'cart_item_quantity_color' => '#333333', 'cart_item_quantity_text_color' => '#ffffff', 'breadcrumb_completed_text_color' => '#222222', 'breadcrumb_current_text_color' => '#222222', 'breadcrumb_next_text_color' => '#222222', 'breadcrumb_completed_accent_color' => '#222222', 'breadcrumb_current_accent_color' => '#222222', 'breadcrumb_next_accent_color' => '#222222');
    function cfw_futurist_cart_heading()
    {
    }
    function futurist_breadcrumb_navigation()
    {
    }
    /**
     * The default colors for this theme
     */
    $defaults = array('body_background_color' => '#f8f5f4', 'body_text_color' => '#132147', 'header_background_color' => '#132147', 'footer_background_color' => '#132147', 'header_text_color' => '#ffffff', 'footer_color' => '#999999', 'link_color' => '#0073aa', 'button_color' => '#135bff', 'button_text_color' => '#ffffff', 'button_hover_color' => '#3a76ff', 'button_text_hover_color' => '#ffffff', 'secondary_button_color' => '#135bff', 'secondary_button_text_color' => '#ffffff', 'secondary_button_hover_color' => '#3a76ff', 'secondary_button_text_hover_color' => '#ffffff', 'summary_background_color' => '#eeeae7', 'summary_mobile_background_color' => '#eeeae7', 'summary_text_color' => '#333333', 'summary_link_color' => '#0073aa', 'cart_item_quantity_color' => '#135bff', 'cart_item_quantity_text_color' => '#ffffff', 'accent_color' => '#dee6fe', 'breadcrumb_completed_text_color' => '#333333', 'breadcrumb_current_text_color' => '#135bff', 'breadcrumb_next_text_color' => '#dfdcdb', 'breadcrumb_completed_accent_color' => '#333333', 'breadcrumb_current_accent_color' => '#135bff', 'breadcrumb_next_accent_color' => '#dfdcdb');
    function cfw_glass_override_breadcrumb_colors()
    {
    }
    function cfw_glass_cart_heading()
    {
    }
    function cfw_glass_cart_html()
    {
    }
    function cfw_glass_remove_cart_breadcrumb($breadcrumbs)
    {
    }
    /**
     * The default colors for this theme
     */
    $defaults = array('body_background_color' => '#ffffff', 'body_text_color' => '#333333', 'header_background_color' => '#ffffff', 'footer_background_color' => '#ffffff', 'header_text_color' => '#2b2b2b', 'footer_color' => '#999999', 'link_color' => '#0073aa', 'button_color' => '#333333', 'button_text_color' => '#ffffff', 'button_hover_color' => '#555555', 'button_text_hover_color' => '#ffffff', 'secondary_button_color' => '#999999', 'summary_link_color' => '#0073aa', 'secondary_button_text_color' => '#ffffff', 'secondary_button_hover_color' => '#666666', 'secondary_button_text_hover_color' => '#ffffff', 'cart_item_quantity_color' => '#7f7f7f', 'cart_item_quantity_text_color' => '#ffffff', 'breadcrumb_completed_text_color' => '#7f7f7f', 'breadcrumb_current_text_color' => '#333333', 'breadcrumb_next_text_color' => '#7f7f7f', 'breadcrumb_completed_accent_color' => '#333333', 'breadcrumb_current_accent_color' => '#333333', 'breadcrumb_next_accent_color' => '#333333', 'summary_mobile_background_color' => '#f4f4f4');
    \define('CFW_NAME', 'Checkout for WooCommerce');
    \define('CFW_UPDATE_URL', 'https://www.checkoutwc.com');
    \define('CFW_VERSION', '7.10.2');
    \define('CFW_PATH', \dirname(__FILE__));
    \define('CFW_URL', \plugins_url('/', __FILE__));
    \define('CFW_MAIN_FILE', __FILE__);
    \define('CFW_PATH_BASE', \plugin_dir_path(__FILE__));
    \define('CFW_PATH_URL_BASE', \plugin_dir_url(__FILE__));
    \define('CFW_PATH_MAIN_FILE', \CFW_PATH_BASE . __FILE__);
    \define('CFW_PATH_ASSETS', \CFW_PATH_URL_BASE . 'assets');
    \define('CFW_PATH_PLUGIN_TEMPLATE', \CFW_PATH_BASE . 'templates');
    \define('CFW_PATH_THEME_TEMPLATE', \get_stylesheet_directory() . '/checkout-wc');
    \define('CFW_DEV_MODE', \getenv('CFW_DEV_MODE') === 'true');
}