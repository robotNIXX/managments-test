<?php

namespace App\Actions;

use App\Models\Employeer;
use Lorisleiva\Actions\Concerns\AsAction;

class GetTheCommandAction
{
    use AsAction;

    public function handle($id)
    {
        return Employeer::where('manager_id', $id)->get();
    }
}
