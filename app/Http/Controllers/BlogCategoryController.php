<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function adminViewBlogCategories(){
        return view('admin.blogs.blog-categories');
    }
    public function adminGetBlogCategories(){
        $data = BlogCategory::all();
        return datatables($data)
        ->addIndexColumn()
       
        ->addColumn('action', function($row){
           
            $btn = '<a><button id="'.$row->id.'" class="btn btn-sm btn-warning edit m-1"><i class="fa fa-edit"></i> Edit</button></a>';
            $btn = $btn.'<a><button id="'.$row->id.'" class="btn btn-sm btn-danger delete m-1"><i class="fa fa-trash"></i> Delete</button></a>';
            return $btn;
        })
       
        ->rawColumns(['action' => 'action'])
        ->make(true);
    }

    public function adminAddEditCategory(Request $request){
        if(empty($request->id)){
            BlogCategory::create([
                'category_name' => $request->category_name
            ]);
        }else{
            $category = BlogCategory::find($request->id);
            $category->update([
                'category_name' => $request->category_name
            ]);
        }
    }

    public function adminGetCategory(Request $request){
        return response()->json(BlogCategory::find($request->id));
    }

    public function adminDeleteBlogCategory(Request $request){
        return BlogCategory::find($request->id)->delete();
    }
}
