<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://tomba.io/
 * @since      1.0.0
 *
 * @package    Javascript_Disposable_Email_Blocker
 * @subpackage Javascript_Disposable_Email_Blocker/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Javascript_Disposable_Email_Blocker
 * @subpackage Javascript_Disposable_Email_Blocker/includes
 * @author     tomba.io <b.mohamed@tomba.io>
 */
class JDEB_Deactivator
{

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function deactivate()
    {

        delete_option('jdeb_settings');
    }
}
