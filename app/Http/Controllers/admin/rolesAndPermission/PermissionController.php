<?php

namespace App\Http\Controllers\admin\rolesAndPermission;

use App\DTO\DatatableDTO;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use Spatie\Permission\Models\Permission;
use App\Services\rolesAndPermission\PermissionService;

class PermissionController extends Controller
{
    private $viewPath=null;
    private $service=null;
    public function __construct()
    {
        $this->service= new PermissionService();
        $this->viewPath = 'admin.rolesAndPermission.permissions.';
    }
    public function index()
    {
        $permissions=$this->service->index();
        $path=$this->viewPath;
        return view($this->viewPath.'index',compact('permissions','path'));
    }
    public function datatable(Request $request){
        $userDTO = new DatatableDTO($request->all());
        return $this->service->datatable($userDTO);
    }
    public function store(PermissionRequest $request)
    {
        $validatedData = $request->validated();

        $this->service->store($validatedData);

        return response()->json(['msg'=>'Role has been created successfully']);
    }
    public function update(PermissionRequest $request, $id)
    {
        $validatedData = $request->validated();
        $this->service->update($id,$validatedData);
        return response()->json(['msg'=>'Role has been updated successfully']);
    }

    public function destroy($id)
    {
       $this->service->destroy($id);
        return response()->json(['msg'=>'Role has been deleted successfully']);
    }
}
