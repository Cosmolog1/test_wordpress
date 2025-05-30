<?php
/**
 * Functions for handling plugin options.
 *
 * @package    Members
 * @subpackage Includes
 * @author     The MemberPress Team 
 * @copyright  Copyright (c) 2009 - 2018, The MemberPress Team
 * @link       https://members-plugin.com/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Conditional check to see if the role manager is enabled.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function members_role_manager_enabled() {

	return apply_filters( 'members_role_manager_enabled', members_get_setting( 'role_manager' ) );
}

/**
 * Conditional check to see if denied capabilities should overrule granted capabilities when
 * a user has multiple roles with conflicting cap definitions.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function members_explicitly_deny_caps() {

	return apply_filters( 'members_explicitly_deny_caps', members_get_setting( 'explicit_denied_caps' ) );
}

/**
 * Whether to show human-readable caps.
 *
 * @since  2.0.0
 * @access public
 * @return bool
 */
function members_show_human_caps() {

	return apply_filters( 'members_show_human_caps', members_get_setting( 'show_human_caps' ) );
}

/**
 * Conditional check to see if the role manager is enabled.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function members_multiple_user_roles_enabled() {

	return apply_filters( 'members_multiple_roles_enabled', members_get_setting( 'multi_roles' ) );
}

/**
 * Conditional check to see if content permissions are enabled.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function members_content_permissions_enabled() {

	return apply_filters( 'members_content_permissions_enabled', members_get_setting( 'content_permissions' ) );
}

/**
 * Conditional check to see if hide protected posts in REST API is enabled.
 *
 * @since  3.2.11
 * @access public
 * @return bool
 */
function members_is_hidden_protected_posts_enabled() {

    return apply_filters( 'members_is_hidden_protected_posts', members_get_setting( 'hide_posts_rest_api' ) );
}

/**
 * Conditional check to see if login widget is enabled.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function members_login_widget_enabled() {

	return apply_filters( 'members_login_widget_enabled', true );
}

/**
 * Conditional check to see if users widget is enabled.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function members_users_widget_enabled() {

	return apply_filters( 'members_users_widget_enabled', true );
}

/**
 * Gets a setting from from the plugin settings in the database.
 *
 * @since  0.2.0
 * @access public
 * @return mixed
 */
function members_get_setting( $option = '' ) {

	$defaults = members_get_default_settings();

	$settings = wp_parse_args( get_option( 'members_settings', $defaults ), $defaults );

	return isset( $settings[ $option ] ) ? $settings[ $option ] : false;
}

/**
 * Returns an array of the default plugin settings.
 *
 * @since  0.2.0
 * @access public
 * @return array
 */
function members_get_default_settings() {

	return array(

		// @since 0.1.0
		'role_manager'        => 1,
		'content_permissions' => 1,
		'private_blog'        => 0,

		// @since 0.2.0
		// Do not use gettext here, or it will cause translation error in WP 6.7+
		'private_feed'              => 0,
		'content_permissions_error' => 'Sorry, but you do not have permission to view this content.',
		'private_feed_error'        => 'You must be logged into the site to view this content.',

		// @since 1.0.0
		'explicit_denied_caps' => true,
		'multi_roles'          => true,

		// @since 2.0.0
		'show_human_caps'      => true,
		'private_rest_api'     => false,

        // @since 3.2.11
        'hide_posts_rest_api'  => true,
	);
}
