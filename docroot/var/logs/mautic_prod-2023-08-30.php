[2023-08-30 01:26:41] mautic.NOTICE: PHP Notice - SessionHandler::gc(): ps_files_cleanup_dir: opendir(/var/lib/php/sessions) failed: Permission denied (13) - in file /var/www/html/some-dir/vendor/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php - at line 116 [] {"hostname":"xaas-vps-43","pid":32961}
[2023-08-30 15:33:58] mautic.CRITICAL: Uncaught PHP Exception Symfony\Component\Debug\Exception\FatalThrowableError: "Attempted to load class "ZipArchive" from the global namespace. Did you forget a "use" statement?" at /var/www/html/some-dir/docroot/app/bundles/CoreBundle/Helper/LanguageHelper.php line 82 {"exception":"[object] (Symfony\\Component\\Debug\\Exception\\FatalThrowableError(code: 0): Attempted to load class \"ZipArchive\" from the global namespace.\nDid you forget a \"use\" statement? at /var/www/html/some-dir/docroot/app/bundles/CoreBundle/Helper/LanguageHelper.php:82)"} {"hostname":"xaas-vps-43","pid":46885}