<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PositionsEnum extends Enum
{
    const POSITION_MANAGER = 'manager';
    const POSITION_ENGINEER = 'engineer';
    const POSITION_ACCOUNTER = 'accounter';
}
