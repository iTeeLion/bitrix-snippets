<?php

// Add comment to timeline
$arFields = [
    'AUTHOR_ID' => 1,
    'TEXT' => 'Текст комментариев',
    'BINDINGS' => [
      [
        'ENTITY_TYPE_ID' => \CCrmOwnerType::Deal,
        'ENTITY_ID' => 5,
      ]
    ],
    'SETTINGS' => [
      'HAS_FILES' => 'N'
    ]
];
$tmEntityId = Crm\Timeline\CommentEntry::create($arFields);
