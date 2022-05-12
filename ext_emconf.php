<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Victors TYPO3 Playground extension',
    'description' => 'Here is where I experiment with typo3 features',
    'category' => 'plugin',
    'author' => 'Victor Grande Escanciano',
    'state' => 'alpha',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-11.99.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'vicdev82\\PlaygroundExtension\\' => 'Classes'
        ]
    ],
];