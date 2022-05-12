<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'bo/mytest',
        'dev' => true,
    ),
    'versions' => array(
        'bo/mytest' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'my_name/my_package_name_a' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'library',
            'install_path' => __DIR__ . '/../my_name/my_package_name_a',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'reference' => '9e1837ea9ae16f4077b0164fb918edb2eae1ea6e',
            'dev_requirement' => false,
        ),
        'my_name/my_package_name_b' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'library',
            'install_path' => __DIR__ . '/../my_name/my_package_name_b',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'reference' => 'b0e1b2a2e5361cfeb860da10654f076b759d4e17',
            'dev_requirement' => false,
        ),
    ),
);
