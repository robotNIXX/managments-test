<?php

namespace App\Actions;

use App\Models\Employeer;
use Lorisleiva\Actions\Concerns\AsAction;

class GetEmployeerAction
{
    use AsAction;

    public function handle($id)
    {
        return Employeer::where('id', $id)->first();
    }
}
