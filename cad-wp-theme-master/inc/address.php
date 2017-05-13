<?php
/**
 * Display Address
 *
 * @package WELD-wp-theme
 * @author marlontamo
 */
?>

<address>

<?php 
$options = get_option('plugin_options');

echo '<span class="glyphicon glyphicon-globe" aria-hidden="true"></span> '.$options['client_address'] . '<br />';

echo '<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> '.$options['client_phone'] . '<br />';

echo '<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> </span> '.$options['client_email'] . '<br />';

?>

</address>