<?php

$link=mysql_connect ("localhost","vigna_lara","VignanLara@2019");

if(!$link){die("Could not connect to MySQL");}

mysql_select_db("vignanlara_org",$link) or die ("could not open db".mysql_error());
?>