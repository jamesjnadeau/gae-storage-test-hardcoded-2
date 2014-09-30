<?php
echo '<h3>this is a test of the google app engine getDefaultGoogleStorageBucketName</h3>';

$bucket = 'will_this_work';

echo '<p>The bucket is '.$bucket.'</p>';

$file = "gs://".$bucket."/test.txt";

file_put_contents($file, 'This is a test, please work, whats wrong?' );
sleep(2);
echo file_get_contents($file);


echo '<h3>PHP code used here</h3>';

echo '<pre style="padding: 10px; background-color: lightgrey"">
'.htmlentities(file_get_contents( $_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF'] )).'
</pre>';
