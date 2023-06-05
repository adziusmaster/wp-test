<?php

// Database configuration
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wordpress');
define('DB_HOST', 'db');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// Authentication Unique Keys and Salts
define('AUTH_KEY',         'your-unique-key');
define('SECURE_AUTH_KEY',  'your-unique-key');
define('LOGGED_IN_KEY',    'your-unique-key');
define('NONCE_KEY',        'your-unique-key');
define('AUTH_SALT',        'your-unique-key');
define('SECURE_AUTH_SALT', 'your-unique-key');
define('LOGGED_IN_SALT',   'your-unique-key');
define('NONCE_SALT',       'your-unique-key');

// Table prefix
$table_prefix = 'wp_';

// WordPress debugging
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);

// Disable file modifications from the admin
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);

// Other WordPress settings
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false);
define('WP_POST_REVISIONS', 5);
define('WP_MEMORY_LIMIT', '256M');

// Set HTTPS if necessary
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

// WordPress Database Table prefix
$table_prefix  = 'wp_';

// WordPress Site URL
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);

// WordPress Home URL
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);

// WordPress Content Directory
define('WP_CONTENT_DIR', '/var/www/html/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content');

// Absolute path to the WordPress directory
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

// Include the WordPress bootstrap file
require_once(ABSPATH . 'wp-settings.php');
