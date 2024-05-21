<?php
// 404.php

// The URL to which you want to redirect
$redirect_url = 'https://example.com/new-location';

// Redirect to the specified URL
header("Location: $redirect_url");
exit();
?>
