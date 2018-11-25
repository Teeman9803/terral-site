<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/terrallewis/user/config/plugins/email.yaml',
    'modified' => 1487518906,
    'data' => [
        'enabled' => true,
        'from' => '{{form.value.name}}',
        'from_name' => '{{form.value.name}}',
        'to' => 'tldesignsprintandweb@gmail.com',
        'to_name' => 'Terral Lewis',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'tldesignsprintandweb@gmail.com',
                'password' => 'tldesigns'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html'
    ]
];
