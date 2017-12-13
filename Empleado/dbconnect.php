<?php

	 $DBhost = "mysql";
	 $DBuser = "root";
	 $DBpass = "root";
	 $DBname = "sampledb";
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
