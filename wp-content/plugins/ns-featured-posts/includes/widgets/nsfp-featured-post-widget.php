<?php
/**
 * Plugin widgets.
 *
 * @package NS_Featured_Posts
 */

/**
 * Widget class.
 *
 * @since 1.0.0
 */
class NSFP_Featured_Post_Widget extends WP_Widget {

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'   => 'nsfp_featured_post_widget',
			'description' => esc_html__( 'NS Featured Posts Widget', 'ns-featured-posts' ),
		);

		parent::__construct( 'nsfp-featured-post-widget', esc_html__( 'NS Featured Posts', 'ns-featured-posts' ), $widget_ops );
	}

	/**
	 * Echo the widget content.
	 *
	 * @since 1.0.0
	 *
	 * @param array $args     Display arguments.
	 * @param array $instance The settings for the particular instance of the widget.
	 */
	public function widget( $args, $instance ) {
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Featured Posts', 'ns-featured-posts' );

		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;

		if ( ! $number ) {
			$number = 5;
		}

		$show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
		$post_type = isset( $instance['post_type'] ) ? esc_attr( $instance['post_type'] ) : 'post';

		$nsfp_query = new WP_Query(
			apply_filters(
				'nsfp_featured_posts_widget_args',
				array(
					'posts_per_page'      => $number,
					'no_found_rows'       => true,
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
					'meta_key'            => '_is_ns_featured_post',
					'meta_value'          => 'yes',
					'post_type'           => $post_type,
				)
			)
		);

		echo $args['before_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

		if ( ! empty( $title ) ) {
			echo $args['before_title'] . esc_html( $title ) . $args['after_title']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
		?>

		<?php if ( $nsfp_query->have_posts() ) : ?>

			<ul>
				<?php
				while ( $nsfp_query->have_posts() ) :
					$nsfp_query->the_post();
					?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a>&nbsp;
						<?php if ( $show_date ) : ?>
							<span class="post-date"><?php echo esc_html( get_the_date() ); ?></span>
						<?php endif; ?>
					</li>
				<?php endwhile; ?>
			</ul>

			<?php wp_reset_postdata(); ?>

		<?php endif; ?>

		<?php
		echo $args['after_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	/**
	 * Update widget instance.
	 *
	 * @since 1.0.0
	 *
	 * @param array $new_instance New settings for this instance.
	 * @param array $old_instance Old settings for this instance.
	 * @return array Settings to save or bool false to cancel saving.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title']     = sanitize_text_field( $new_instance['title'] );
		$instance['number']    = absint( $new_instance['number'] );
		$instance['show_date'] = isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;
		$instance['post_type'] = sanitize_text_field( $new_instance['post_type'] );

		return $instance;
	}

	/**
	 * Output the settings update form.
	 *
	 * @since 1.0.0
	 *
	 * @param array $instance Current settings.
	 */
	public function form( $instance ) {
		$defaults = array(
			'title'     => esc_html__( 'Featured Posts', 'ns-featured-posts' ),
			'number'    => 5,
			'show_date' => false,
			'post_type' => 'post',
		);

		$instance = wp_parse_args( $instance, $defaults );
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'ns-featured-posts' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e( 'Number of posts to show:', 'ns-featured-posts' ); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="number" value="<?php echo esc_attr( $instance['number'] ); ?>" class="small-text" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'post_type' ) ); ?>"><?php esc_html_e( 'Post Type:', 'ns-featured-posts' ); ?></label>
			<select id="<?php echo esc_attr( $this->get_field_id( 'post_type' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_type' ) ); ?>">
				<option value="post" <?php selected( $instance['post_type'], 'post' ); ?>><?php esc_html_e( 'Post', 'ns-featured-posts' ); ?></option>
				<option value="page" <?php selected( $instance['post_type'], 'page' ); ?>><?php esc_html_e( 'Page', 'ns-featured-posts' ); ?></option>
				<?php
				$args = array(
					'public'   => true,
					'_builtin' => false,
				);

				$post_types_custom = get_post_types( $args, 'objects' );
				?>
				<?php if ( ! empty( $post_types_custom ) ) : ?>
					<?php foreach ( $post_types_custom as $key => $ptype ) : ?>
						<?php $name = $ptype->labels->{'name'}; ?>
						<option value="<?php echo esc_attr( $key ); ?>" <?php selected( $instance['post_type'], $key ); ?>><?php echo esc_html( $name ); ?></option>
					<?php endforeach; ?>
				<?php endif; ?>
			</select>
		</p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance['show_date'] ); ?> id="<?php echo esc_attr( $this->get_field_id( 'show_date' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show_date' ) ); ?>" />
			<label for="<?php echo esc_attr( $this->get_field_id( 'show_date' ) ); ?>"><?php esc_html_e( 'Display post date?', 'ns-featured-posts' ); ?></label>
		</p>
		<?php
	}
}
