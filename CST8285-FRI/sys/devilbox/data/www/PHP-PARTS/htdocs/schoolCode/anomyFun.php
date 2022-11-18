<?php
$names = array( 'Joe', 'Erin', 'Teresa', 'Louis' );
usort( $names, function($a, $b) { //callback function
    return $a[1] <=> $b[1];
});
?>

<pre>
    <?php print_r( $names ); ?>
</pre>