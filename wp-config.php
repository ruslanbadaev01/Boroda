<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'boroda-work' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`^8zzB&53alKRB)G!kliHcoCyKvS^p,U*[ZU{u$o~D -F$yo!#0z%]knd6z,PMng' );
define( 'SECURE_AUTH_KEY',  'Hu|8Cqd88t3Dgsz7C~A1Hx?>k;X24v3UnO#JG`X(N|jKN?aL@/BCe!lU+ p<;)=b' );
define( 'LOGGED_IN_KEY',    '~XwWU9FO@lKnE*>~~7:1?~ grgT#0jcZNB{oV}$ -X*xRmY_n~.!!9x%X[JPMSS~' );
define( 'NONCE_KEY',        '!>GiX_cw!I4R=@uBXl~@KUin8kBHQXAbB_~uM^tqZfchRz=r+7)-zys|Q EJL5yi' );
define( 'AUTH_SALT',        'bnd^RPNph%;|(<*Un{#I57Wb11/dO?t1:]PW=fI>Um:f&T1WF}p~2&O]A6c{[klH' );
define( 'SECURE_AUTH_SALT', 'GVjC<|RS=|;?*wYOcr&z*t!{)#`O|K~[mWN,=a+h8Yv.RUYsB#dQd=5&C_7&up!S' );
define( 'LOGGED_IN_SALT',   '??)xwtWnri l+![@gdn:RnpM>PI}5iW5[-=gaA6J3&g_0c<8h4y!`]s;]K.][Qf{' );
define( 'NONCE_SALT',       'qwdG=WEob1_`&ewQgLe429XO(5&T57NM>9v[5^0sLo`otDgX$Hv($O-`*>]8U`j ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
