<?php
/**
 * Plugin Name: Search Title Mod
 * Plugin URI: -
 * Description: Modifikasi pencarian judul 
 * Version: 1.0.0
 * Author: Ade Ismail Siregar
 * Author URI: github.com/adeism
 */

use SLiMS\Plugins;

$plugins = Plugins::getInstance();

include_once __DIR__ . '/slims-searchtitle-mod.php';
$plugins->registerSearchEngine(SearchTitleMod::class);