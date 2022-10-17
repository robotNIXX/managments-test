<?php

namespace App\Http\Controllers;

use App\Actions\CreateEmployeersAction;
use App\Actions\DeleteEmployeerAction;
use App\Actions\GetEmployeerAction;
use App\Actions\GetEmployeersAction;
use App\Actions\GetTheCommandAction;
use App\Actions\UpdateEmployeerAction;
use App\Http\Requests\EmployeesCreateRequest;
use App\Http\Requests\EmployeesUpdateRequest;
use Illuminate\Http\Request;

class EmployeersController extends Controller {

    /**
     * List of employees
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function index( Request $request ) {
        return GetEmployeersAction::run( $request->get( 'position', false ) );
    }

    /**
     * Create the new Employee
     *
     * @param EmployeesCreateRequest $request
     *
     * @return mixed
     */
    public function store( EmployeesCreateRequest $request ) {
        $data = [
            'name'      => $request->get( 'name' ),
            'position'  => $request->get( 'position' ),
            'startDate' => $request->get( 'startDate' ),
            'manager'   => $request->get( 'manager' ),
            'endDate'   => $request->get( 'endDate' ),
        ];

        return CreateEmployeersAction::run( $data );
    }

    /**
     * Retrieve the specific Employee
     *
     * @param $id
     *
     * @return mixed
     */
    public function get( $id ) {
        return GetEmployeerAction::run( $id );
    }

    /**
     * Update the specific Employee
     *
     * @param $id
     * @param EmployeesUpdateRequest $request
     *
     * @return mixed
     */
    public function update( $id, EmployeesUpdateRequest $request ) {
        $data = [
            'name'      => $request->get( 'name' ),
            'position'  => $request->get( 'position' ),
            'startDate' => $request->get( 'startDate' ),
            'endDate'   => $request->get( 'endDate' ),
        ];

        return UpdateEmployeerAction::run( $id, $data );
    }

    /**
     * Delete the specific Employee
     *
     * @param $id
     *
     * @return mixed
     */
    public function delete( $id ) {
        return DeleteEmployeerAction::run( $id );
    }

    public function getTheCommand($managerId) {
        return GetTheCommandAction::run($managerId);
    }
}
