<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static DESC()
 * @method static static ASC()
 */
final class OrderBy extends Enum
{
    const DESC = 'desc';
    const ASC = 'asc';
}
