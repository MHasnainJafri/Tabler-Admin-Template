<?php

namespace App\Services\RolesAndPermission;

use App\Helpers\DataTableHelper;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use App\Helpers\BaseQuery;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class RoleService
{
    use BaseQuery;

    private Model $_model;

    public function __construct()
    {
        $this->_model = new Role();
    }

    public function index()
    {
        try {
            return Permission::all();
        } catch (\Exception $e) {
            throw new \Exception('Something went wrong while fetching permissions.');
        }
    }

    public function show($id)
    {
        try {
            return $this->get_by_id($this->_model, $id);
        } catch (\Exception $e) {
            throw new \Exception('Something went wrong while fetching the role.');
        }
    }

    public function store($data)
    {
       
        try {
            $role = $this->add($this->_model, $data);

            if ($data['permissions']) {
                $role->givePermissionTo($data['permissions']);
            }
        } catch (\Exception $e) {
            throw new \Exception($e);
        }
    }

    public function update($id, $data)
    {
        try {
            $role = $this->get_by_id($this->_model, $id);
            $role->update($data);
            $role->syncPermissions($data['permissions']);
        }catch (\Exception $e) {
            throw new \Exception('Something went wrong while updating the role.');
        }
    }

    public function destroy($id)
    {
        try {
            $this->delete($this->_model, $id);
        } catch (\Exception $e) {
            throw new \Exception('Something went wrong while deleting the role.');
        }
    }

    public function datatable($DTO)
    {
        try {
            $query =  $this->_model::query()->with('permissions');
            $roles = DataTableHelper::getDtoData($DTO, $query, ['name'], [1 => "name"]);
            return response()->json([
                'draw' => $DTO->getDraw(),
                'recordsTotal' =>  $this->_model::count(),
                'recordsFiltered' => DataTableHelper::getFilteredUserCount($DTO, $this->_model),
                'data' => $roles,
            ]);
        } catch (\Exception $e) {
            throw new \Exception('Something went wrong while processing the data.');
        }
    }
}
