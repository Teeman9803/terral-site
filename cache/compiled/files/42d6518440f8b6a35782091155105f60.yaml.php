<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/terrallewis/user/plugins/email/email.yaml',
    'modified' => 1470272030,
    'data' => [
        'enabled' => true,
        'from' => '{{form.value.email}}',
        'from_name' => '{{form.value.name}}',
        'to' => 'tldesignsprintandweb@gmail.com',
        'to_name' => 'Terral Lewis',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html'
    ]
];
