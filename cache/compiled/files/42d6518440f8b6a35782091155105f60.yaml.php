<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/terrallewis/user/plugins/email/email.yaml',
    'modified' => 1487522230,
    'data' => [
        'enabled' => true,
        'from' => '{{form.value.email}}',
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
