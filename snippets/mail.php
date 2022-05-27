<?php

// Send email
Bitrix\Main\Mail\Event::send([
    'EVENT_NAME' => 'NEW_USER',
    'LID' => 's1',
    'C_FIELDS' => [
        'EMAIL' => 'info@mail.ru',
        'USER_ID' => 1
    ]
]);
