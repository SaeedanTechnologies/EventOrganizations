<?php

namespace App\Enums;

final class UserRolesEnum
{
    const ADMIN = 'admin';
    const ORGANIZER = 'organizer';
    const USER = 'user';

    public static $USER_TYPES =
    [
        self::ADMIN,
        self::ORGANIZER,
        self::USER
    ];
}