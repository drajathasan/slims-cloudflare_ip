<?php
/**
 * Plugin Name: Cloudflare IP Converter
 * Plugin URI: https://github.com/drajathasan/slims-cloudflare_ip
 * Description: Get client ip from HTTP_X_FORWARDED_FOR with multiple value
 * Version: 1.0.0
 * Author: Drajat Hasan
 * Author URI: https://t.me/drajathasan
 */
$ips = explode(', ', $_SERVER['HTTP_X_FORWARDED_FOR']??$_SERVER['REMOTE_IP']??'127.0.0.1');
$_SERVER['HTTP_X_FORWARDED_FOR'] = $ips[0];
ip()->setSourceRemoteIp('HTTP_X_FORWARDED_FOR');
