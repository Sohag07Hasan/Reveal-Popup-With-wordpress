<?php

/**
 * Plugin Name: Showing Loading effect
 * Author: Mahibul hasan Sohag
 * */

class ShowingPageLoadingEffect{

	function __construct(){
		add_action('wp_enqueue_scripts', array(&$this, 'enqueue_modal_popup'));
	}
	
	function enqueue_modal_popup(){
		
		wp_enqueue_script('jquery');
		
		wp_register_script('gravity-form-reveal-modal', $this->get_url('asset/reveal/jquery.reveal.js'), array('jquery'));
		wp_enqueue_script( 'gravity-form-reveal-modal' );
		
		wp_register_script('gravity-form-reveal-modal-controller', $this->get_url('js/controller.js'), array('jquery'));
		wp_enqueue_script( 'gravity-form-reveal-modal-controller' );
		
		
		wp_register_style('gravity-form-reveal-modal-controller-style', $this->get_url('css/controller.css'));
		wp_enqueue_style('gravity-form-reveal-modal-controller-style');
			
		wp_register_style('gravity-form-reveal-modal-style', $this->get_url('asset/reveal/reveal.css'));
		wp_enqueue_style('gravity-form-reveal-modal-style');
		
		
		add_action('wp_footer', array(&$this, 'wp_footer'));
		
	}
	
	function get_url($file){
		return plugins_url('/', __FILE__) . $file;
	}
	
	
	function wp_footer(){
		echo "<div id='myModal' class='reveal-modal'>Hello</div>";
	}

} 


return new ShowingPageLoadingEffect();
 

?>
