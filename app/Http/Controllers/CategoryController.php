<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\JsonResponse; 
use App\Models\Category; 
use App\Http\Requests\StoreCategoryRequest; 
use App\Http\Requests\UpdateCategoryRequest; 
use App\Http\Resources\CategoryCollection; 
use App\Http\Resources\CategoryResource; 
use App\Services\CategoryService; 
 
class CategoryController extends Controller 
{   private $service; 
    public function __construct(CategoryService $service) 
    { 
      $this->service=$service; 
    } 
    public function index()
    { 
     
       return $this->service->index();
    } 
    public function store(StoreCategoryRequest $request) 
    { 
      
      return $this->service->store($request->validated());
      
       
    } 
    public function update(UpdateCategoryRequest $request, Category $category): JsonResponse
    {
        return $this->service->update($request->validated(), $category);
    }
    public function destroy(category $category) 
    { 
      return $this->service->destroy($category); 
   
    } 

  } 
