<?php

namespace App\Actions;

use App\Models\Employeer;
use Lorisleiva\Actions\Concerns\AsAction;

/**
 * Create the employee
 */
class CreateEmployeersAction {
    use AsAction;

    public function handle( $data ) {
        return Employeer::create( [
            'name'      => $data['name'],
            'position_id'  => $data['position'],
            'manager_id'  => $data['manager'],
            'startDate' => $data['startDate'],
            'endDate'   => $data['endDate']
        ] );
    }
}
