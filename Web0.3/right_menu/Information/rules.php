
<?php
$path_parts = pathinfo(__FILE__);
preg_match("/".$path_parts['basename']."/", $_SERVER['SCRIPT_NAME'], $matches);
if (!empty($matches[0])){header("Location: /?page=News");}
?>
<ol>
	<li>It is forbidden to advertise other servers!</li>
	<li>Prohibited are any bug!</li>
	<li>It is forbidden to use any kind of hacks without the consent of the Admin!</li>
	<li>It is prohibited to change the client's files without the consent of the Admin!</li>
	<li>Trade fraud are prohibited!</li>
	<li>It is forbidden to escape from Guild War!</li>
	<li>It is forbidden to impersonate Admin!</li>
	<li>It is forbidden to threaten a ban!</li>
</ol>