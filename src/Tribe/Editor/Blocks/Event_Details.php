<?php
class Tribe__Events__Editor__Blocks__Event_Details
extends Tribe__Events__Editor__Blocks__Abstract {

	/**
	 * Which is the name/slug of this block
	 *
	 * @since  TBD
	 *
	 * @return string
	 */
	public function name() {
		return 'tribe/event-details';
	}

	/**
	 * Since we are dealing with a Dynamic type of Block we need a PHP method to render it
	 *
	 * @since  TBD
	 *
	 * @param  array $attributes
	 *
	 * @return string
	 */
	public function render( $attributes = array() ) {
		return 'My Own test';
	}

	/**
	 * Used to include any Assets for the Block we are registering
	 *
	 * @since  TBD
	 *
	 * @return void
	 */
	public function assets() {
		tribe_asset(
			$this->plugin(),
			'tribe-block-editor-event-details',
			'block/event-details.js',
			array( 'wp-blocks', 'wp-i18n', 'wp-element' ),
			'enqueue_block_editor_assets'
		);
	}
}