<?php
/**
 * Template name: test
 */
?>

<?php get_header(); ?>

    <h1>TEST NAME</h1>

<?php

$var = get_field('my_test_image');
$var1 = get_field('my_test_image_2');
$var2 = get_field('my_test_image_3');

echo '<pre>';
var_dump(array(
    'var' => $var, 'var1' => $var1, 'var2' => $var2
));
echo '</pre>';
?>
    <img src="<?php echo $var['url']; ?>" alt="">
    <img src="<?php echo $var1; ?>" alt="">
    <img src="<?php echo wp_get_attachment_image_url($var2); ?>" alt="">
<!--    wp_get_attachment_image_url-->
<?php get_footer(); ?>