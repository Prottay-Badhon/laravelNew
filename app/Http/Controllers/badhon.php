<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class badhon extends Controller
{
    public function calculate(){
    return view('pages.badhon');
    }

    public function viewContactPage(){
    return view('pages.contact');
    }

    public function viewService(){
      return view('service');
    }
  public function viewAbout(){
    return view('about');
  }

  public function viewAddCategory(){
    return view('addCategory');
  }

  public function viewAllCategory(){
    $category=DB::table('catagories')->get();

    return view('allCategory',compact('category'));
  }

  public function AddCategory(Request $request){
    $validatedData = $request->validate([
        'name' => 'required|unique:catagories|max:20|min:2',
        'slug' => 'required|unique:catagories|max:20|min:2',
    ]);
    $data=array();
    $data['name']=$request->name;
    $data['slug']=$request->slug;

    $category=DB::table('catagories')->insert($data);
    //return response()->json($data);
    if($category){
      $notification = array(
          'message' =>'successfully category inserted',
          'alert-type'=>'success'
      );
        return redirect()->back()->with($notification);
    }

   }
 public function allCategoryShowMethod($id){
   $category=DB::table('catagories')->where('id',$id)->first();
   return view('allCategoryShow',compact('category'));
  //return response()->json($category);
 }

 public function allCategoryDelete($id){
   $delete=DB::table('catagories')->where('id',$id)->delete();
   if($delete){
     return redirect()->back();
   }
 }
 public function editCategory($id){
   $edit=DB::table('catagories')->where('id',$id)->first();
 return view('updateCategory',compact('edit'));
 }



 public function updateCategory(Request $request,$id){
   $data=array();
   $data['name']=$request->name;
   $data['slug']=$request->slug;

   $editCate=DB::table('catagories')->where('id',$id)->update($data);
   if($editCate){
     $notification = array(
       'message' =>'successfully updated' ,
       'alert-type'=>'success'
     );
     return Redirect()->route('allCategory')->with($notification);
   }
  return redirect()->back();
 }
}
