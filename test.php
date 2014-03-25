<?php  

putenv("PATH=" .$_ENV["PATH"]. ':/usr/local/bin');

$command = 'whoami && ls && echo $PATH && git';
exec($command.' 2>&1', $result, $returnCode);

?>
<pre>
<? 
var_dump( $result ); 
var_dump( $_ENV['PATH']);

?>
</pre>