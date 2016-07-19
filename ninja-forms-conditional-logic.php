<?php
/*
Plugin Name: Ninja Forms - Conditional Logic
Plugin URI: http://ninjaforms.com
Description: Conditional form logic add-on for Ninja Forms.
Version: 3.0.0
Author: The WP Ninjas
Author URI: http://ninjaforms.com
Text Domain: ninja-forms-conditionals
Domain Path: /lang/
*/

if( version_compare( get_option( 'ninja_forms_version', '0.0.0' ), '3.0', '>' ) || get_option( 'ninja_forms_load_deprecated', FALSE ) ) {

    define("NINJA_FORMS_CON_DIR", WP_PLUGIN_DIR."/".basename( dirname( __FILE__ ) ) . '/deprecated' );
    define("NINJA_FORMS_CON_URL", plugins_url()."/".basename( dirname( __FILE__ ) ) . '/deprecated' );
    define("NINJA_FORMS_CON_VERSION", "1.4.0");

    include 'deprecated/conditionals.php';

} else {

    /**
     * Class NF_ConditionalLogic
     */
    final class NF_ConditionalLogic
    {
        const VERSION = '3.0';
        const SLUG    = 'conditional-logic';
        const NAME    = 'Conditional Logic';
        const AUTHOR  = 'The WP Ninjas';
        const PREFIX  = 'NF_ConditionalLogic';

        /**
         * @var NF_ConditionalLogic
         * @since 3.0
         */
        private static $instance;

        /**
         * Plugin Directory
         *
         * @since 3.0
         * @var string $dir
         */
        public static $dir = '';

        /**
         * Plugin URL
         *
         * @since 3.0
         * @var string $url
         */
        public static $url = '';

        /**
         * Main Plugin Instance
         *
         * Insures that only one instance of a plugin class exists in memory at any one
         * time. Also prevents needing to define globals all over the place.
         *
         * @since 3.0
         * @static
         * @static var array $instance
         * @return NF_Stripe Highlander Instance
         */
        public static function instance()
        {
            if (!isset(self::$instance) && !(self::$instance instanceof NF_ConditionalLogic)) {
                self::$instance = new NF_ConditionalLogic();

                self::$dir = plugin_dir_path(__FILE__);

                self::$url = plugin_dir_url(__FILE__);

                /*
                 * Register our autoloader
                 */
                spl_autoload_register(array(self::$instance, 'autoloader'));
            }
        }

        public function __construct()
        {
            add_action( 'admin_init', array( $this, 'setup_license') );
        }

        /**
         * Template
         *
         * @param string $file_name
         * @param array $data
         */
        public static function template( $file_name = '', array $data = array() )
        {
            if( ! $file_name ) return;

            extract( $data );

            include self::$dir . 'includes/Templates/' . $file_name;
        }

        /**
         * Config
         *
         * @param $file_name
         * @return mixed
         */
        public static function config( $file_name )
        {
            return include self::$dir . 'includes/Config/' . $file_name . '.php';
        }

        /**
         * Autoloader
         *
         * Loads files using the class name to mimic the folder structure.
         *
         * @param $class_name
         */
        public function autoloader($class_name)
        {
            if (class_exists($class_name)) return;

            if ( false === strpos( $class_name, self::PREFIX ) ) return;

            $class_name = str_replace( self::PREFIX, '', $class_name );
            $classes_dir = realpath(plugin_dir_path(__FILE__)) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR;
            $class_file = str_replace('_', DIRECTORY_SEPARATOR, $class_name) . '.php';

            if (file_exists($classes_dir . $class_file)) {
                require_once $classes_dir . $class_file;
            }
        }

        /*
         * Required methods for all extension.
         */

        public function setup_license()
        {
            if ( ! class_exists( 'NF_Extension_Updater' ) ) return;

            new NF_Extension_Updater( self::NAME, self::VERSION, self::AUTHOR, __FILE__, self::SLUG );
        }
    }

    /**
     * The main function responsible for returning The Highlander Plugin
     * Instance to functions everywhere.
     *
     * Use this function like you would a global variable, except without needing
     * to declare the global.
     *
     * @since 3.0
     * @return NF_ConditionalLogic Highlander Instance
     */
    function NF_ConditionalLogic()
    {
        return NF_ConditionalLogic::instance();
    }

    NF_ConditionalLogic();

}

// TODO: Convert Plugin Settings.