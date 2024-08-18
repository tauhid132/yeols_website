<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function viewProjects(){
        return view('admin.projects.projects');
    }
    public function getProjects(){
        $data = Portfolio::all();
        return datatables($data)
        ->addIndexColumn()
        ->addColumn('created_at' , function($row){
            return $row->created_at->format('d-M-Y h:m:s');
        })
        
        ->addColumn('action', function($row){
            
            $btn = '<a class="btn btn-sm btn-warning" href="'.route('viewEditProject',$row->id).'"><i id="'.$row->id.'" class="fa fa-edit"></i> Edit</a> ';
            $btn = $btn.'<a class="btn btn-sm btn-danger delete_project" id="'.$row->id.'"><i  class="fa fa-trash "></i> Delete</a>';
            return $btn;
        })
        
        ->rawColumns(['action' => 'action'])
        ->make(true);
    }
    public function viewCreateNewProject(){
        return view('admin.projects.add-new-project');
    }
    public function createNewProject(Request $request){
        $project = Portfolio::create([
            'project_name' => $request->project_name,
            'project_type' => $request->project_type,
            'project_description' => $request->project_description,
            'project_cover_image' => $this->storeImage($request)
        ]);
        return redirect()->route('viewProjects');
    }
    public function viewEditProject($id){
        return view('admin.projects.edit-project',[
            'project' => Portfolio::find($id),
        ]);
    }
    public function editProject(Request $request,$id){
        $project = Portfolio::find($id);
        if($request->hasFile('project_cover_image')){
            $new_image_name = uniqid().'.'.$request->project_cover_image->extension();
            $request->project_cover_image->move(public_path('images/portfolio_images'), $new_image_name);
            //delete old
            $old_image = $project->cover_image;
            File::delete(public_path("images/portfolio_images".$old_image));
            $project = Portfolio::find($id)->update([
                'project_name' => $request->project_name,
                'project_type' => $request->project_type,
                'project_description' => $request->project_description,
                'project_cover_image' => $new_image_name
            ]);
        }else{
            $project = Portfolio::find($id)->update([
                'project_name' => $request->project_name,
                'project_type' => $request->project_type,
                'project_description' => $request->project_description,
            ]);
        }
        
        return redirect()->route('viewProjects');
    }
    public function deleteProject(Request $request){
        return Portfolio::find($request->id)->delete();
    }
    private function storeImage($request){
        $new_image_name = uniqid().'.'.$request->project_cover_image->extension();
        $request->project_cover_image->move(public_path('images/portfolio_images'), $new_image_name);
        return $new_image_name;
    }
}
