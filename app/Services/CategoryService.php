<?php

namespace App\Services;

use App\Helpers\DataTableHelper;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\BaseQuery;
use App\Models\Category;
use App\Models\Course;
use Spatie\Permission\Models\Role;

class CategoryService
{
    use BaseQuery;

    private Model $_model;

    public function __construct()
    {
        $this->_model = new Category();
    }

    public function index()
    {
        try {
            $data['roles']=Role::all();
            return $data;
        } catch (\Exception $e) {
            throw new \Exception('Something went wrong while fetching permissions.');
        }
    }

    public function show($id)
    {
        try {
            return $this->get_by_id($this->_model, $id);
        } catch (\Exception $e) {
            throw new \Exception('Something went wrong while fetching the data.');
        }
    }

    public function store($data)
    {

        try {
            $role = $this->add($this->_model, $data);
        } catch (\Exception $e) {
            throw new \Exception($e);
        }
    }

    public function update($id, $data)
    {
        try {
            return $this->get_by_id($this->_model, $id)->update($data);
        }catch (\Exception $e) {
            throw new \Exception('Something went wrong while updating the data.');
        }
    }

    public function destroy($id)
    {
        try {
            $this->delete($this->_model, $id);
        } catch (\Exception $e) {
            throw new \Exception('Something went wrong while deleting the data.');
        }
    }


    public function datatable($DTO)
    {
        try {
            $query =  $this->_model::query()->withCount('courses');
            $roles = DataTableHelper::getDtoData($DTO, $query, ['name'], [1 => "name"]);
            return response()->json([
                'draw' => $DTO->getDraw(),
                'recordsTotal' =>  $this->_model::count(),
                'recordsFiltered' => DataTableHelper::getFilteredUserCount($DTO, $this->_model),
                'data' => $roles,
            ]);
        } catch (\Exception $e) {
            if(env('APP_DEBUG') == true){
                throw new \Exception($e->getMessage());

            }
            throw new \Exception('Something went wrong while processing the data.');
        }
    }
}
