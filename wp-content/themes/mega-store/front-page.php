<?php 

get_header();
	do_action('mega_store_befor_print_home_page_sections');
	do_action('mega_store_print_home_page_sections');
	do_action('mega_store_after_print_home_page_sections');
get_footer();