<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /*'urlManager'=>array('showScriptName'=>false,
            'enablePrettyUrl'=>true,
            'rules'=>array('<controller:\w+>/<action:\w+>'=>'<controller>/<action>',)
        ),*/
    ],
];
