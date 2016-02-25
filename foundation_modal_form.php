<?php
/**
 * Class foundation_modal_form
 */
class foundation_modal_form {

	public $form_id;
	public $link_id;
	public $form_title;

	public function __construct( $form_id, $link_id, $form_title ) {

		$this->form_id = $form_id;
		$this->link_id = $link_id;
		$this->form_title = $form_title;
	}

	public function output_modal() { ?>

		<div id="<?php echo $this->link_id; ?>" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">

			<h2 id="modalTitle"><?php echo $this->form_title; ?></h2>

			<p>After submitting form this agent will contact you as soon as possible</p>

			<div class="form-wrapper">

				<?php echo do_shortcode('[caldera_form id="' . $this->form_id . '"]'); ?>

			</div>

			<a class="close-reveal-modal" aria-label="Close">&#215;</a>

		</div>

	<?php }
}