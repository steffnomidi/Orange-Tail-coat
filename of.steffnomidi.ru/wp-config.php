<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'vh37024_of');

/** Имя пользователя MySQL */
define('DB_USER', 'vh37024_ofr');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'QMXfcW1n');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         ':?^.c<2pr+Jt@b{-onZl/g(a$cpgV4G?^n[[T+| a!6)+:=5U7+EqHFM%|nB}4id');
 define('SECURE_AUTH_KEY',  'K$QF.>~-kFh_-w^M;Bnx+d3dRT3dLgb4SH:5]B+|;j%j=#duQnLEe!9%HkG$I1zs');
 define('LOGGED_IN_KEY',    'QdW7}(-+-f|*R_`Mw{xgVaxBgHlB.KX=X3R*75+%=-<NM6N1{Htk$9~t g/1!_jL');
 define('NONCE_KEY',        're/cd-C/P7pU@+yoxN{[m,3?(vH|H;?xsvy)#YnbO@]%3 0`z7]l}iqx@C:&f%|X');
 define('AUTH_SALT',        'Z#,5Vqiv5XUY|^MYRkK?^T-Bbf*xM0vc/3cq3FLI<6L7>V6ke>(,sS<.XptG(%R(');
 define('SECURE_AUTH_SALT', 'q$&~3q>[xWLuQ3)N7c55A >ddc7w)joa0gD`<-oW{u2^Ce?zF$+bpi-]/~6#^6|P');
 define('LOGGED_IN_SALT',   'WN?>9rRfj q.k*IzQNy@7YT%m%_FWE9Hj `nq=@8z**DOf U-ifYsT5t^!7]X,*A');
 define('NONCE_SALT',       'UO|?:6-8a>V,TY%FIwr-^s^P@Ddrs;U ]8TI{_q$i/Nd;zG!0w(o)~g:g2Qj+8;V');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'of_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
