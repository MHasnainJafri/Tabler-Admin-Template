<?php

namespace App\Services\RolesAndPermission;

use App\Helpers\DataTableHelper;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use App\Helpers\BaseQuery;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

class PermissionService
{
    use BaseQuery;

    private Model $_model;

    public function __construct()
    {
        $this->_model = new Permission();
    }

    public function index()
    {
        try {
            // Modify this method as needed
            return $this->_model->all();
        } catch (\Exception $e) {
            // Throw a generic exception with a custom message
            throw new \Exception('Something went wrong while fetching permissions.');
        }
    }

    public function show($id)
    {
        try {
            return $this->get_by_id($this->_model, $id);
        } catch (ModelNotFoundException $e) {
            // Throw a specific exception with a custom message for a not found exception
            throw new \Exception('Permission not found');
        } catch (\Exception $e) {
            // Throw a generic exception with a custom message
            throw new \Exception('Something went wrong while fetching the permission.');
        }
    }

    public function store($data)
    {
        try {
            return $this->add($this->_model, $data);
        } catch (ValidationException $e) {
            // Throw a specific exception with a custom message for validation errors
            throw new \Exception('Validation error: ' . json_encode($e->errors()));
        } catch (\Exception $e) {
            // Throw a generic exception with a custom message
            throw new \Exception('Something went wrong while creating the permission.');
        }
    }

    public function update($id, $data)
    {
        try {
            $permission = $this->get_by_id($this->_model, $id);
            $permission->update($data);

            // No need to return anything, as the operation was successful
        } catch (ModelNotFoundException $e) {
            // Throw a specific exception with a custom message for a not found exception
            throw new \Exception('Permission not found');
        } catch (ValidationException $e) {
            // Throw a specific exception with a custom message for validation errors
            throw new \Exception('Validation error: ' . json_encode($e->errors()));
        } catch (\Exception $e) {
            // Throw a generic exception with a custom message
            throw new \Exception('Something went wrong while updating the permission.');
        }
    }

    public function destroy($id)
    {
        try {
            $this->delete($this->_model, $id);

            // No need to return anything, as the operation was successful
        } catch (ModelNotFoundException $e) {
            // Throw a specific exception with a custom message for a not found exception
            throw new \Exception('Permission not found');
        } catch (\Exception $e) {
            // Throw a generic exception with a custom message
            throw new \Exception('Something went wrong while deleting the permission.');
        }
    }

    public function datatable($DTO)
    {
        try {
            $query =  $this->_model::query();
            $roles = DataTableHelper::getDtoData($DTO, $query, ['name'], [1 => "name"]);
            return response()->json([
                'draw' => $DTO->getDraw(),
                'recordsTotal' =>  $this->_model::count(),
                'recordsFiltered' => DataTableHelper::getFilteredUserCount($DTO,$this->_model),
                'data' => $roles,
            ]);
            // No need to return anything, as the operation was successful
        } catch (\Exception $e) {
            // Throw a generic exception with a custom message
            throw new \Exception('Something went wrong while processing the data.');
        }
    }
}
