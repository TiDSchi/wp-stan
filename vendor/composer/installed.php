<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'php-stubs/wordpress-stubs' => array(
            'pretty_version' => 'v6.7.1',
            'version' => '6.7.1.0',
            'reference' => '83448e918bf06d1ed3d67ceb6a985fc266a02fd1',
            'type' => 'library',
            'install_path' => __DIR__ . '/../php-stubs/wordpress-stubs',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'phpstan/phpstan' => array(
            'pretty_version' => '2.0.2',
            'version' => '2.0.2.0',
            'reference' => '6c98c7600fc717b2c78c11ef60040d5b1e359c82',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpstan/phpstan',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'szepeviktor/phpstan-wordpress' => array(
            'pretty_version' => '2.x-dev',
            'version' => '2.9999999.9999999.9999999-dev',
            'reference' => 'fab61ad0e3ba963877eea48d29248eb1ae2a3eda',
            'type' => 'phpstan-extension',
            'install_path' => __DIR__ . '/../szepeviktor/phpstan-wordpress',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);