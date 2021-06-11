<?php
  // define('BASEURL', 'http://localhost/ISC/public');
  // define('DBHOST','localhost');
  // define('DBUSER','root');
  // define('DBPASS','');
  // define('DBNAME','indonesiascenerycraft2');
  $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
  $cleardb_server = $cleardb_url["host"];
  $cleardb_username = $cleardb_url["user"];
  $cleardb_password = $cleardb_url["pass"];
  $cleardb_db = substr($cleardb_url["path"],1);
  $active_group = 'default';
  $query_builder = TRUE;
  define('BASEURL', 'https://indonesiascenerycraft.herokuapp.com/public');
  define('DBHOST',$cleardb_url["host"]);
  define('DBUSER',$cleardb_url["user"]);
  define('DBPASS',$cleardb_password);
  define('DBNAME',$cleardb_db);
