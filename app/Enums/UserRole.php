<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserRole extends Enum
{
    const SUPER_ADMIN =   'SUPER_ADMIN';
    const MODERATOR =   'MODERATOR';
    const EDITOR = 'EDITOR';
}
