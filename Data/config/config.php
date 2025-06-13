<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'ocop41bpp8ho',
  'passwordsalt' => 'WpPqn3KW/Gg+WW6K77kYMvSguqrGgt',
  'secret' => 'au528Ae6hsd9nrOFntWxBc8ONXEMV8p2Mkscm1v+y8RGE5ZI',
  'trusted_domains' => 
  array (
    0 => 'localhost:8080',
    1 => 'nextcloud-nas.takosv.ddns-ip.net',
    2 => 'nextcloud',
    3 => 'nextcloud:8080',
    4 => '192.168.0.50:8080',
    5 => '192.168.3.32:8080',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'sqlite3',
  'version' => '31.0.1.2',
  'overwrite.cli.url' => 'http://localhost:8080',
  'installed' => true,
);
