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
define( 'DB_NAME', '2070-21_81695' );

/** Имя пользователя базы данных */
define( 'DB_USER', '2070-21_81695' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '4b91ade57e2845235021' );

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
define( 'AUTH_KEY',         'Xs V]%MBAYXDl=W;X%W}O<kb31`5)*F`lPd4scd.rbs_M_OB8MW_X2[&mT0?02+s' );
define( 'SECURE_AUTH_KEY',  'Ovh$<cp{ubkE{nkb.x4QVCXX+-}=c]I~jF*^(A58aN(XCil%(cvBKm5WSc?jZI?_' );
define( 'LOGGED_IN_KEY',    'TJGvVUm?N^|c1O;t2ni`D^gzI,zl(Lv(}-[,s+L#_iExBXlMThZ0&nNcU=.CeDm:' );
define( 'NONCE_KEY',        'qo?|o1`Hr![ApvXw,~^dXoWZ!fXxE/bmp,YcX/W1P;`_WKuJb+@vAeSS[3NOT138' );
define( 'AUTH_SALT',        '~a6vJL{KwbaksI 1?3Em:%EH}n`bsG/_CtWV:E0ldGA9H,I 9uQoSO4$>y!@OfT!' );
define( 'SECURE_AUTH_SALT', 'rMy#8RMgT[FHJH@]rj5vIaS=BVB@w%UGF>y+=WR9hwryQbNCP,5+pRHR9%<XB29v' );
define( 'LOGGED_IN_SALT',   'xZLYeKw TT}!3QE#-Ip[U43B),c]=3P>i._>>0OIPPfAXJB`~1,>C11y o2S9VI$' );
define( 'NONCE_SALT',       'ON!,#KqWr>mW^F7>1@5<6CT^X[+LI(1joyp$yUpay|b>U,.9VkHIilDD(JJnPup6' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'CSWxT_';


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