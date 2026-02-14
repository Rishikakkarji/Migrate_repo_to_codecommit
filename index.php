<?php
// Simple PHP website for testing

echo "<h1>Welcome to My Simple PHP Website!</h1>";

echo "<p>This page is deployed via AWS CodePipeline.</p>";

date_default_timezone_set('UTC');
echo "<p>Current server time (UTC): " . date('Y-m-d H:i:s') . "</p>";
?>
