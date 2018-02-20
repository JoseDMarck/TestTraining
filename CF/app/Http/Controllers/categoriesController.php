<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;


class categoriesController extends Controller
{


    public function index(){
        $categories = Category::orderBy('id', 'ASC')->paginate(10);
        return view('admin.categories.index')->with('categories', $categories);   
    }


    public function create(){
        
        return view('admin.categories.create');        
        
    } 



    public function show(){
        
    } 

    public function store(CategoryRequest $request){

        $category = new Category($request->all());
        //dd($request->all());        

        $category->name = $request->name;
        $category->save();     
        flash('La categoria se ha creado correctamente')->success()->important();
        return redirect('admin/categories');  
           
    } 


    public function destroy($id){
        $categories = Category::find($id);
        $categories -> delete();
        flash('La categoría <b>'.  $categories->name . '</b> ha sido eliminada de forma satisfactoria')->success()->important();
        return redirect('admin/categories/'); 
    }


    public function edit($id){
        $categories = Category::find($id); 
        return view('admin.categories.edit')->with('categories',$categories);           
    }


    

    public function update(Request $request, $id){
        $categories = Category::find($id);
        $categories -> name = $request -> name; 
        $categories -> save(); 
        flash('El usuario <b>'. $categories->name . '</b> ha sido editado de forma satisfactoria')->success()->important();
        return redirect('admin/categories/'); 
    }
     


}
