<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'stylekit-lesson');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|TDUfcj?`W,]=d)M_oOHWXxuLI0s{;jk^]ZxI&G.WF,#_ UbTiu/`^4x6$3NZIf3');
define('SECURE_AUTH_KEY',  '#)==ULUL[k<D@iN|P$_S{bE5IH++H2Rq3-vv58PnHSKG_11Be_*m)&rAn%!YCuQ)');
define('LOGGED_IN_KEY',    '-y_B|YKXp3N^gl-Ol8vC~JR*GRXMk`Od[ l~7&Q:C7!ml-N34l>cQt<%ti~#`N2L');
define('NONCE_KEY',        'NIp;K6E|h.v~0eCdRix^#8&~u:k!,uVfsskS*HltE}2;iK#kwvcC 7^Eh;eEXcPv');
define('AUTH_SALT',        'E~WAO8,d.audVxEOTmD/H%>?ZmyHXqu4Np~{+4a3FJ~8|?Il)9v90nKHSa![W1Mj');
define('SECURE_AUTH_SALT', '4HWBm%[FW^$AvW_y<~cus0)~d|0rWgz6OL?$1@jU$.@n;j@,lY40&fr-dU+%]pGs');
define('LOGGED_IN_SALT',   '54}Fzh2_-h[?sh^k`VMr3D9Z>A>En?v3o)N.$~4xil6$j;/g%jM8_C#,(<}T:4);');
define('NONCE_SALT',       'sz6&n?G46&FJC>;@GC1a7}pJEk6>hI)](*> 6hKe?Q!2M+&_g<:wPkSzO05R@}Qs');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
