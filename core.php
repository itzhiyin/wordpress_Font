<?php
if (!defined('ABSPATH')) {
    die('-1');
}
//优设标题黑
if(in_array('ysbth', $wordpress_Font_datas)) {
add_action( 'wp_head', 'wordpress_Font_hook_ysbth_css' );
}
//文道潮黑
if(in_array('wdch', $wordpress_Font_datas)) {
add_action('wp_head', 'wordpress_Font_hook_wdch_css');
}
//仓耳渔阳体-W05
if(in_array('ceyyt', $wordpress_Font_datas)) {
add_action('wp_head', 'wordpress_Font_hook_ceyyt_css');
}
//沐瑶软笔手写体
if(in_array('muyao', $wordpress_Font_datas)) {
add_action('wp_head', 'wordpress_Font_hook_muyao_css');
}
//杨任东竹石体
if(in_array('yrdzst', $wordpress_Font_datas)) {
add_action('wp_head', 'wordpress_Font_hook_yrdzst_css');
}
//江城圆体
if(in_array('jcyt', $wordpress_Font_datas)) {
add_action('wp_head', 'wordpress_Font_hook_jcyt_css');
}
//昭源黑醴
if(in_array('zyhl', $wordpress_Font_datas)) {
add_action('wp_head', 'wordpress_Font_hook_zyhl_css');
}


