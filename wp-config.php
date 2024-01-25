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
define( 'DB_NAME', 'kgbnt.ru_db' );

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
define( 'AUTH_KEY',         'so;,C*v@&W>~c5W|i=l*v_z0Ob0#U{AD.Td,v_;R~hb9L1%?81F/zfaAu:n,&nW,' );
define( 'SECURE_AUTH_KEY',  'P/u*7(asiIYT3=H=_4E#nAz ;]JA;vb/KSff?F]UqxDvG0T(;Uz]N85t7~^@!NNs' );
define( 'LOGGED_IN_KEY',    '#bJI~wG!A?{G&ozl;Pzl)6Bd;Uz$u<j*4f1Nz*L>(2yq_8<C1Nf==7`G|[pt1/].' );
define( 'NONCE_KEY',        '!^_c?vK{Dkzf!())QGAeW`uG</rouaG<P%L5,uvLFq l`N?uvy6/} JudIxW;F2i' );
define( 'AUTH_SALT',        '^TKl`z9)RG6C8.$Cfr&:,Q[t?EYKK=bragZQaD3Jk3MEkjy=Y&mO??Bp f)mR]wh' );
define( 'SECURE_AUTH_SALT', 'H*Axe-{HS*0I!cS_ S!O(Y@5k4^BmSxskMifL71b%w!c5.OPMF%_vTt)BXnQl~30' );
define( 'LOGGED_IN_SALT',   '$s@Tk@t(NrqwEJY6BVYT~MR9y&>:NhK0L+_?sC.B0ta7g(a}TfpOb u5v!mBs/&*' );
define( 'NONCE_SALT',       ']HN@v?<u&G_P1V@cX?+H!6I-T=-:&KoJV.Zz`18=~9VCP%ST[qOB1[mT,py<:)1W' );

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
