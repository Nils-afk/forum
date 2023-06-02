<?php

return [
  'mysql' => [
    'host' => 'sql207.epizy.com',
    'port' => '3306',
    'username' => 'epiz_34193542',
    'password' => 'FDzYWXDHcZBd',
    'db' => 'epiz_34193542_nameless',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'initialise_charset' => true,
    'initialise_collation' => true,
  ],
  'remember' => [
    'cookie_name' => 'nl2',
    'cookie_expiry' => 604800,
  ],
  'session' => [
    'session_name' => '2user',
    'admin_name' => '2admin',
    'token_name' => '2token',
  ],
  'core' => [
    'hostname' => 'forum.bl4ckness.de',
    'path' => '',
    'friendly' => false,
    'force_https' => false,
    'force_www' => false,
    'captcha' => true,
    'date_format' => 'd M Y, H:i',
    'trustedProxies' => NULL,
    'installed' => true,
  ],
  'email' => [
    'email' => 'bl4cknessweb@gmail.com',
    'username' => 'Bl4ckness',
    'password' => 'Riesenklotze',
    'name' => 'Bl4ckness',
    'host' => 'sql207.epizy.com',
    'port' => 587,
  ],
];