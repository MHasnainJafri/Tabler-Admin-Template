<?php

namespace App\Http\Controllers\admin\modules\Course;

use App\DTO\DatatableDTO;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Services\CourseService;
use App\Services\CategoryService;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private $viewPath=null;
    private $service=null;
    public function __construct()
    {
        $this->service= new CategoryService();
        $this->viewPath = 'admin.category.';
    }
    public function index()
    {
        $data=$this->service->index();
        $path=$this->viewPath;
        return view($this->viewPath.'index',compact('data','path'));
    }
    public function datatable(Request $request){
        $userDTO = new DatatableDTO($request->all());

        return $this->service->datatable($userDTO);
    }
    public function store(CategoryRequest $request)
    {

        $validatedData = $request->validated();

        $this->service->store($validatedData);

        return response()->json(['msg'=>'Data has been created successfully']);
    }
    public function update(CategoryRequest $request, $id)
    {
        $validatedData = $request->validated();
        $this->service->update($id,$validatedData);
        return response()->json(['msg'=>'Data has been updated successfully']);
    }

    public function destroy($id)
    {
       $this->service->destroy($id);
        return response()->json(['msg'=>'Data has been deleted successfully']);
    }
    public function bulkAction(Request $request)
    {
        if($request->action == 'delete'){
            $this->service->destroy($request->ids);
        }
        return response()->json(['msg'=>'Data has been deleted successfully']);
    }
}
