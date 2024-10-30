<?php
/**
Plugin Name: LH Web Share
Plugin URI: https://lhero.org/plugins/lh-web-share/
Description: Get rid of stupid share icons
Version: 1.00
Author: Peter Shaw
Author URI: https://shawfactor.com
License: GPLv2 or later
**/

if (!class_exists('LH_web_share_plugin')) {


class LH_web_share_plugin {
    
    
    var $namespace = 'lh_web_share';
    
    /**
     * Helper function for registering and enqueueing scripts and styles.
     *
     * @name    The    ID to register with WordPress
     * @file_path        The path to the actual file
     * @is_script        Optional argument for if the incoming file_path is a JavaScript source file.
     */
    private function load_file( $name, $file_path, $is_script = false, $deps = array(), $in_footer = true, $atts = array() ) {
        $url  = plugins_url( $file_path, __FILE__ );
        $file = plugin_dir_path( __FILE__ ) . $file_path;
        if ( file_exists( $file ) ) {
            if ( $is_script ) {
                wp_register_script( $name, $url, $deps, filemtime($file), $in_footer ); 
                wp_enqueue_script( $name );
            }
            else {
                wp_register_style( $name, $url, $deps, filemtime($file) );
                wp_enqueue_style( $name );
            } // end if
        } // end if
	  
	  if (isset($atts) and is_array($atts) and isset($is_script)){
		
		
  $atts = array_filter($atts);

if (!empty($atts)) {

  $this->script_atts[$name] = $atts; 
  
}

		  
	 add_filter( 'script_loader_tag', function ( $tag, $handle ) {
	   

	   
if (isset($this->script_atts[$handle][0]) and !empty($this->script_atts[$handle][0])){
  
$atts = $this->script_atts[$handle];

$implode = implode(" ", $atts);
  
unset($this->script_atts[$handle]);

return str_replace( ' src', ' '.$implode.' src', $tag );

unset($atts);
usent($implode);

		 

	 } else {
	   
 return $tag;	   
	   
	   
	 }
	

}, 10, 2 );
 

	
	  
	}
		
    } // end load_file
    

private function register_scripts_and_styles() {

if (!is_admin()){



// include the add-to-home-screen-js library
$this->load_file( $this->namespace.'-js', '/scripts/lh-web-share.js',  true, array(), false, array('defer="defer"'));

}


}
    
    
    
 
  public function general_init() {
  
          // Load JavaScript and stylesheets
        $this->register_scripts_and_styles();
  
  

}
  
    
   
  public function __construct() {
      
 //register required styles and scripts
add_action('init', array($this,"general_init"));     
      
      
      
  }
   
    
}

$lh_web_share_instance = new LH_web_share_plugin();

}

?>