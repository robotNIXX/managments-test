<?php

namespace App\Actions;

use App\Models\Employeer;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateEmployeerAction
{
    use AsAction;

    public function handle($id, $data)
    {
        $record = Employeer::where('id', $id)->first();

        foreach ($data as $key => $value) {
            $record->$key = $value;
        }

        return $record->save();
    }
}
