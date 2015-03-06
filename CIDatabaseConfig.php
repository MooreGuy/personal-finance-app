<?php

/*
 * Stores individual settings for project datatbase.
 */

class CIDatabaseConfig
{
	//Set static properties for database.
	public static $hostname = 'localhost';
	public static $username = 'root';
	public static $password = '';
	public static $database = 'devdatabase';
	public static $dbdriver = 'mysql';
	public static $dbprefix = '';
	public static $pconnect = TRUE;
	public static $db_debug = FALSE;
	public static $cache_on = FALSE;
	public static $cachedir = '';
	public static $char_set = 'utf8';
	public static $dbcollat = 'utf8_general_ci';
	public static $swap_pre = '';
	public static $autoinit = TRUE;
	public static $stricton = FALSE;
}
