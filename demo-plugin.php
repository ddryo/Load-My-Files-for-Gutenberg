<?php
/**
 * Plugin Name: Load My Files for Gutenberg
 * Plugin URI: https://github.com/ddryo/
 * Description: ブロックエディターをベースにした制作用にCSSなどのファイルを読み込むだけの雛形プラグイン。
 * Version: 1.0.0
 * Author: 了
 * Author URI: https://twitter.com/ddryo_loos
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) exit;


/**
 * 定数宣言
 */
define( 'DEMO_PLUGIN_SLUG', 'demo-plugin' );
define( 'DEMO_PLUGIN_URL', plugins_url( '/', __FILE__ ) );
define( 'DEMO_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'DEMO_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

// バージョン情報
// define( 'DEMO_PLUGIN_VERSION', '1.0.0' ); //本番
define( 'DEMO_PLUGIN_VERSION', date('Ymdgis') ); //開発用 (ブラウザキャッシュを防ぐ)


/**
 * フロント用のファイルを読み込む
 */
add_action( 'wp_enqueue_scripts', function() {

	/* フロント & エディター共通のスタイル */
	wp_enqueue_style(
		DEMO_PLUGIN_SLUG.'-common-style',
		DEMO_PLUGIN_URL. '/assets/css/common.css',
		[],
		DEMO_PLUGIN_VERSION
	);

	/* フロント用のスタイル */
	wp_enqueue_style(
		DEMO_PLUGIN_SLUG.'-front-style',
		DEMO_PLUGIN_URL. '/assets/css/front.css',
		[],
		DEMO_PLUGIN_VERSION
	);

	/* フロント用のスクリプト */
	wp_enqueue_script(
		DEMO_PLUGIN_SLUG.'-front-script',
		DEMO_PLUGIN_URL. '/assets/js/front.js',
		[],
		DEMO_PLUGIN_VERSION,
		true
	);

}, 20 );


/**
 * エディター用のファイルを読み込む
 */
add_action( 'enqueue_block_editor_assets', function() {

	/* フロント & エディター共通のスタイル */
	wp_enqueue_style(
		DEMO_PLUGIN_SLUG.'-common-style',
		DEMO_PLUGIN_URL. '/assets/css/common.css',
		[],
		DEMO_PLUGIN_VERSION
	);

	/* ブロックエディター用のスタイル */
	wp_enqueue_style(
		DEMO_PLUGIN_SLUG.'-editor-style',
		DEMO_PLUGIN_URL. '/assets/css/editor.css',
		[],
		DEMO_PLUGIN_VERSION
	);

	/* ブロックエディター用のスクリプト */
	wp_enqueue_script(
		DEMO_PLUGIN_SLUG.'-editor-script',
		DEMO_PLUGIN_URL. '/assets/js/editor.js',
		[],
		DEMO_PLUGIN_VERSION,
		true
	);

}, 20 );
