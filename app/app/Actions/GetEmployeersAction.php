<?php

namespace App\Actions;

use App\Models\Employeer;
use Lorisleiva\Actions\Concerns\AsAction;

class GetEmployeersAction
{
    use AsAction;

    public function handle($position = false)
    {
        if (!$position) {
            return Employeer::all();
        }

        return Employeer::where('position_id', $position)->get();
    }
}
