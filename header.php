<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="hg">
<header class="hg_header">
    <div class="ste-entete">
        <section>
            <a href="<?php echo home_url( '/' ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>
                /images/logocec.png" ALT="CONFÉRENCE ÉPISCOPALE DU CONGO"  height=100 width=800></a>
        </section>
        <section>
            <nav class="menulist">
                <?php $args = [ 'theme_location' => 'primary' ]; ?>
                <?php wp_nav_menu( $args ) ?>
            </nav>
        </section>
    </div>

</header>

<?php wp_body_open(); ?>