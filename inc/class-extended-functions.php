<?php

class ExtendedFunctions {

	private $directory = '';
	
	private $text_domain = 'learntofly_';

	public function __construct(){
		$this->set_directory_value();
		add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
	}

	public function set_directory_value(){
		$this->directory = get_template_directory_uri() . '/assets/';
	}

	public function enqueue_scripts(){
		wp_enqueue_style( $this->text_domain . 'bootstrap', 	$this->directory . 'css/bootstrap.css' );
		wp_enqueue_style( $this->text_domain . 'font-awesome', 	$this->directory . 'css/font-awesome.min.css' );
		wp_enqueue_style( $this->text_domain . 'custom-style', 	$this->directory . 'css/style.css' );
	}

	public function render( $filePath, $viewData = null ) {
        ( $viewData ) ? extract( $viewData ) : null;
 
        ob_start();
        include( $filePath );
        $template = ob_get_contents();
        ob_end_clean();
 
        return $template;
    }
}

$extended = new ExtendedFunctions;