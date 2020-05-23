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
define( 'LMFFG_SLUG', 'demo-plugin' );
define( 'LMFFG_URL', plugins_url( '/', __FILE__ ) );
define( 'LMFFG_PATH', plugin_dir_path( __FILE__ ) );
define( 'LMFFG_BASENAME', plugin_basename( __FILE__ ) );

// バージョン情報
// define( 'LMFFG_VERSION', '1.0.0' ); //本番
define( 'LMFFG_VERSION', date('Ymdgis') ); //開発用 (ブラウザキャッシュを防ぐ)


/**
 * フロント用のファイルを読み込む
 */
add_action( 'wp_enqueue_scripts', function() {

	/* フロント & エディター共通のスタイル */
	wp_enqueue_style(
		LMFFG_SLUG.'-common-style',
		LMFFG_URL. '/assets/css/common.css',
		[],
		LMFFG_VERSION
	);

	/* フロント用のスタイル */
	wp_enqueue_style(
		LMFFG_SLUG.'-front-style',
		LMFFG_URL. '/assets/css/front.css',
		[],
		LMFFG_VERSION
	);

	/* フロント用のスクリプト */
	wp_enqueue_script(
		LMFFG_SLUG.'-front-script',
		LMFFG_URL. '/assets/js/front.js',
		[],
		LMFFG_VERSION,
		true
	);

}, 20 );


/**
 * エディター用のファイルを読み込む
 */
add_action( 'enqueue_block_editor_assets', function() {

	/* フロント & エディター共通のスタイル */
	wp_enqueue_style(
		LMFFG_SLUG.'-common-style',
		LMFFG_URL. '/assets/css/common.css',
		[],
		LMFFG_VERSION
	);

	/* ブロックエディター用のスタイル */
	wp_enqueue_style(
		LMFFG_SLUG.'-editor-style',
		LMFFG_URL. '/assets/css/editor.css',
		[],
		LMFFG_VERSION
	);

	/* ブロックエディター用のスクリプト */
	wp_enqueue_script(
		LMFFG_SLUG.'-editor-script',
		LMFFG_URL. '/assets/js/editor.js',
		[],
		LMFFG_VERSION,
		true
	);

}, 20 );
