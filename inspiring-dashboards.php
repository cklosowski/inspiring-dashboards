<?php
/*
Plugin Name: Inspiring Dashboards
Plugin URI: http://kungfugrep.com
Description: Not sure what to write about for your next blog post? Maybe this Dashboard Widget can inspire you.
Version: 1.0
Author: Chris Klosowski
Author URI: http://kungfugrep.com
License: GPLv2
*/

function ck_inspiring_dashboards_register() {

	wp_add_dashboard_widget(
				'ck_inspiring_dashboards',
				__( 'Inspiring Dashboard', 'ck_inspiring_dashboards' ),
				'ck_inspiring_dashboards_callback'
		);	
}
add_action( 'wp_dashboard_setup', 'ck_inspiring_dashboards_register' );

function ck_inspiring_dashboards_callback() {
	_e( 'Not quite sure what to write about? Well try writing&hellip;', 'ck_inspiring_dashboards' );
	?>
	<ol>
		<li><?php _e( 'A News Story', 'ck_inspiring_dashboards' ); ?></li>
		<li><?php _e( 'A Personal Reflection', 'ck_inspiring_dashboards' ); ?></li>
		<li><?php _e( 'A Tutorial', 'ck_inspiring_dashboards' ); ?></li>
		<li><?php _e( 'A Product recommendation', 'ck_inspiring_dashboards' ); ?></li>
		<li><?php _e( 'A Spotlight post', 'ck_inspiring_dashboards' ); ?></li>
		<li><?php _e( 'An Interview or Q&A', 'ck_inspiring_dashboards' ); ?></li>
		<li><?php _e( 'A Inspirational or Motivational post', 'ck_inspiring_dashboards' ); ?></li>
	</ol>
	<p>
		<a href="<?php echo admin_url( 'post-new.php' ); ?>" class="button button-primary button-large"><?php _e( 'Get Started', 'ck_inspiring_dashboards' ); ?></a>
	</p>
	<p>
		<small>
			<?php printf( 
					__( 'This widget was inspired by <a href="%s" target="_blank">Chris Lema\'s</a> post titled <a href="%s" target="_blank">The simple truth that will help you write blog posts faster"</a>.',
						'ck_inspiring_dashboards' ),
					'http://twitter.com/chrislema', 'http://chrislema.com/write-blog-posts-faster/' ); ?></small>
	</p>
	<?php
}

function ck_inspiring_dashboards_textdomain() {
	load_plugin_textdomain( 'ck_inspiring_dashboards', false, __FILE__ . '/languages/' );
}
add_action( 'init', 'ck_inspiring_dashboards_textdomain' );