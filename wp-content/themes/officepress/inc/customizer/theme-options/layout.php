<?php
/**
 * Layout options
 *
 * @package Theme Palace
 * @subpackage OfficePress
 * @since OfficePress 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'officepress_layout', array(
	'title'               => esc_html__('Layout','officepress'),
	'description'         => esc_html__( 'Layout section options.', 'officepress' ),
	'panel'               => 'officepress_theme_options_panel',
) );

// Site layout setting and control.
$wp_customize->add_setting( 'officepress_theme_options[site_layout]', array(
	'sanitize_callback'   => 'officepress_sanitize_select',
	'default'             => $options['site_layout'],
) );

$wp_customize->add_control(  new OfficePress_Custom_Radio_Image_Control ( $wp_customize, 'officepress_theme_options[site_layout]', array(
	'label'               => esc_html__( 'Site Layout', 'officepress' ),
	'section'             => 'officepress_layout',
	'choices'			  => officepress_site_layout(),
) ) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'officepress_theme_options[sidebar_position]', array(
	'sanitize_callback'   => 'officepress_sanitize_select',
	'default'             => $options['sidebar_position'],
) );

$wp_customize->add_control(  new OfficePress_Custom_Radio_Image_Control ( $wp_customize, 'officepress_theme_options[sidebar_position]', array(
	'label'               => esc_html__( 'Global Sidebar Position', 'officepress' ),
	'section'             => 'officepress_layout',
	'choices'			  => officepress_global_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'officepress_theme_options[post_sidebar_position]', array(
	'sanitize_callback'   => 'officepress_sanitize_select',
	'default'             => $options['post_sidebar_position'],
) );

$wp_customize->add_control(  new OfficePress_Custom_Radio_Image_Control ( $wp_customize, 'officepress_theme_options[post_sidebar_position]', array(
	'label'               => esc_html__( 'Posts Sidebar Position', 'officepress' ),
	'section'             => 'officepress_layout',
	'choices'			  => officepress_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'officepress_theme_options[page_sidebar_position]', array(
	'sanitize_callback'   => 'officepress_sanitize_select',
	'default'             => $options['page_sidebar_position'],
) );

$wp_customize->add_control( new OfficePress_Custom_Radio_Image_Control( $wp_customize, 'officepress_theme_options[page_sidebar_position]', array(
	'label'               => esc_html__( 'Pages Sidebar Position', 'officepress' ),
	'section'             => 'officepress_layout',
	'choices'			  => officepress_sidebar_position(),
) ) );