<?php

if (!isset($message)) {
    $message = 'Unknown error';
}
?>
<h2>Not found</h2>

<p>
    <?php echo $message; ?>
</p>