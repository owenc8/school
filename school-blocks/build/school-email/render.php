<?php
$email   = isset( $attributes['schoolEmail'] ) ? $attributes['schoolEmail'] : '';

?>

<div <?php echo get_block_wrapper_attributes(); ?>>
  <?php if ( $email ) : ?>
    <a href="mailto:<?php echo esc_attr( $email ); ?>">
      <?php echo wp_kses_post( $email ); ?>
    </a>
  <?php endif; ?>
</div>
