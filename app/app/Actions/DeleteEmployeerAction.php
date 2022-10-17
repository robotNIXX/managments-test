<?php

namespace App\Actions;

use App\Models\Employeer;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteEmployeerAction
{
    use AsAction;

    public function handle($id)
    {
        return Employeer::destroy($id);
    }
}
