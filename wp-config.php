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
define( 'DB_NAME', 'CoffeeShop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9.aA5jx;Jq,u*F?]mt $iG*QyU->U~a%b^k-hRS=(ZOG1q}aKq%_`=A4WNHhKG}9' );
define( 'SECURE_AUTH_KEY',  'xlfI?%A ^}YTaH9KB/8OxOW*z2fOyVE&t~!4v#-L[<M$-:yd]/DxV#TRc@[V a!G' );
define( 'LOGGED_IN_KEY',    'FYglgFIV(T=@`e]YaeP+hZEE0Ya `$*el<;AK8.3BAl&M/kL5c>t7;FiM>+;&6*G' );
define( 'NONCE_KEY',        '#!!(^z@RtQ~{4j2vIUK5dUE>~|y%v)G{dq3Cw*G?Be9+^K9}SV^Y8~H^Fu(u7/B}' );
define( 'AUTH_SALT',        'IsX&8`}4IDnuW$oSS.A&}H%vNc*:kIT}4%RQ:tPmJ74zQ*/J[t>XmONxtgC^]zjA' );
define( 'SECURE_AUTH_SALT', '43Z&Q&7f-7bc{DPOUeGa8MF0~1-{t0HJd~fMC}t,X aPU&by`-0?2;B&I4GNTkGd' );
define( 'LOGGED_IN_SALT',   '8jfxCNa|xvkpFFK/:nFp(z4ZLH{Pz-GX}5QG)<J +f)8Gsh3`}%u$u/Lx,>|St6y' );
define( 'NONCE_SALT',       'hm^!X2:}6=6B~,1xJ-AW<wDb_3U|v:6uI*8eD)R:Y)`*V8Mi)`t6)8}n{.>O#SD7' );

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
