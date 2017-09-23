<?php

$query="UPDATE {$_M[table][config]} SET value='0' WHERE name='met_patch'";
DB::query($query);

$query="UPDATE {$_M[table][config]} SET value='5.3.9' WHERE name='metcms_v'";
DB::query($query);

//deldir(PATH_WEB.'cache',1);
?>