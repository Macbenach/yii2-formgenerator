<?php

$now = new yii\db\Expression('now()');

return [
    [
        'name' => 'Participant Registration',
        'created_by' => 1,
        'created_at' => $now
    ],
];
