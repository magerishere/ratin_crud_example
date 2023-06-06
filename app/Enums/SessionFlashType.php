<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static SUCCESS()
 * @method static static DANGER()
 */
final class SessionFlashType extends Enum
{
    const SUCCESS = 'success';
    const DANGER = 'danger';
}
