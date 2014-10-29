<?php

class Slider{

	//                    __  __              __    
	//    ____ ___  ___  / /_/ /_  ____  ____/ /____
	//   / __ `__ \/ _ \/ __/ __ \/ __ \/ __  / ___/
	//  / / / / / /  __/ /_/ / / / /_/ / /_/ (__  ) 
	// /_/ /_/ /_/\___/\__/_/ /_/\____/\__,_/____/  
	public function __construct()
	{
		// ==============================================================
		// Add short codes
		// ==============================================================
		add_shortcode( 'slider', array( &$this, 'displaySlider' ) );
	}

	/**
	 * Get slidet HTML
	 * @param  array  $atts --- query arguments
	 * @return string --- HTML code
	 */
	public function displaySlider( $atts = array() ) 
	{
		$defaults = array(
			'posts_per_page'   => 5,
			'offset'           => 0,
			'category'         => '',
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'slider',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true 
		);
		$atts = array_merge($defaults, (array) $atts);
		$slides = get_posts($atts);
		$res    = array();
		if(count($slides))
		{
			foreach ($slides as &$slide) 
			{
				$res[] = $this->wrapSlide($slide);
			}
			return $this->wrapSlider(implode('', $res));
		}
		return '';
	}                               

	private function wrapSlider($slides)
	{
		ob_start();
		?>
		<div id="image-cycle">
		    <a id="previous-button">Previous</a>
		    <div id="cycle">
		        <div id="images">
		            <?php echo $slides; ?>
		        </div>
		    </div>
		    <a id="next-button">Next</a>
		    <div id="frame"></div>
		</div>
		<?php
	    $var = ob_get_contents();
	    ob_end_clean();
	    return $var;
	}

	/**
	 * Wrap single slide to HTML
	 * @param  object $slide --- post object
	 * @return string        --- HTML code
	 */
	private function wrapSlide($slide)
	{
		$var = '';
		if(has_post_thumbnail( $slide->ID ))
		{
			$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($slide->ID), 'medium');
		    $thumb = is_array($thumb) ? $thumb[0] : 'http://placehold.it/400x300';
			ob_start();
			?>
			<img src="<?php echo $thumb; ?>" alt="<?php echo esc_attr( strip_tags( $slide->post_title ) ); ?>">
			<?php
		}
	    $var = ob_get_contents();
	    ob_end_clean();
	    return $var;
	}
}