<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'codingankara' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C?KL!~QSpM#o*gi0l|yk[O%<{WnG8uC>NFf<kZ_r@6w`<|#9ReHE??j2~@Ba31e4' );
define( 'SECURE_AUTH_KEY',  'SnkUgr9=FVSbfx8I~!n-e6p}G!=ZxwI:tFAe#P4o>d*~v`}CdlTeojF|H@5Dmz+#' );
define( 'LOGGED_IN_KEY',    'nm;9<Y<_/9e#XuHdg<=lf|<6rc3Y@%]/zDHVeYX{wEYw? 5:D,Qn5[8VDNzlPlkS' );
define( 'NONCE_KEY',        'L=NbXyfSIjDy).dEvU_X4|V?#O,wv}qA[`vJH#@_40)~MF(Qb@|Z:t!SSH WDiH)' );
define( 'AUTH_SALT',        'a1Y.TL bwMtzF4 ,JYrpw2Bn[wEm`FvV,~5Z|WzI8<1FRp7sQVEy1G:8lrWBK~Y/' );
define( 'SECURE_AUTH_SALT', 'IJUr2M9.f:Wf-wMJSNK<gWsd9%q[_,qI&+ZBfJ+Wi1kBhC;T`zb5twx/X=Z3dEi9' );
define( 'LOGGED_IN_SALT',   '/u(y|&hGrJCM,h44&=(vh4J;Z@Rne;OCqtt8[E*Ehcge>(/3&Fh%+|Ly2f!:P}R6' );
define( 'NONCE_SALT',       ';<t>sp.C14eTFIJiG$XXUW`YSg (ei7`tb{S`HM`o3)#ah64IN4Kr&!Xb,d9Q$G&' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
