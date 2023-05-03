<?php
// outputs the username that owns the running php/httpd process
// (on a system with the "whoami" executable in the path)
//$output=null;
//$retval=null;
//exec('./tophost-lu', $output, $retval);
//echo "Returned with status $retval and output:\n";
//print_r($output);
$output = shell_exec('./lu.sh');
echo "$output";
//exec('./lu.sh', $output, $retval);
//echo "Returned with status $retval and output:\n";
//print_r($output);
?>