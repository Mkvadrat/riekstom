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
define('DB_NAME', 'riekstom');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         ' Q){:YYeqGXe0M#7xya>|7pTR>6( J;{L^45ZIPqS2Rm157?rq!BGV-|Xd](QH3]');
define('SECURE_AUTH_KEY',  't=&K;bwG(TC07^6x9S&rzYcrK-/Y=(?IY,=%r|d}iy(9SNO-SNWX61R$5.jHV=go');
define('LOGGED_IN_KEY',    'zc+1i6Udv5:rmQD>xkfT}I3{C0=bvl/+fpIa7@=?gaH=@xEf&TIb18n%n!<t%/6E');
define('NONCE_KEY',        '-j$cNvCK*0L8*guZnC`: l5d&KS>O?>Uz:&G9Xns{=.i@ILJ*WO&lie(COe0JE`0');
define('AUTH_SALT',        '[)SiVI;,X0N6g0qw{S;1Pk`LkG+:La(@8q1&i%C!y3&>u6$_9TC~C@ CFeid`kk^');
define('SECURE_AUTH_SALT', 'jthd#%h(=Dr^*wISj0.=).w<Il$]o~i3dN)T:-9q_`y*oz~VB&k!AF/<5abc=.$L');
define('LOGGED_IN_SALT',   '$~1MK=X%Ml?UW6`sV?KT*:%9D><l@9hC#X}~g)DOlnJh8-yn~>R.85Z@qfG;,Md;');
define('NONCE_SALT',       'J[wh|M_|u%)EA!A!S#m_jq~f%wdz/$dT6kHSOGUeOn4,J_ZZ|?5-?L$22/TMz}&E');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ru_';

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
