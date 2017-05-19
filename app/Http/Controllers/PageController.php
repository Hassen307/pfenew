<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Role;
use App\User;
use App\Permission;
use Auth;
use Route;

class PageController extends Controller
{
     public function index(Request $parameter)
    {
        //  $data['parameter'] = $parameter;
     //$a=Session::get('some');
     //dd($a);
       // return view('page');
      $kj= Route::getCurrentRoute()->parameters;
      $lk=array_first($kj);
      //ha=$parameter(pathInfo);
     $user = Auth::user();
     $id=$user->role_id;
     $role = Role::find($id);
     
      //    $role = Role::find($id);
      $rolePermissions = Permission::join("permission_role","permission_role.permission_id","=","permissions.id")
           ->where("permission_role.role_id",$id)
        ->get();
     // $h=$rolePermissions[]->name;
      $attributes = array_keys($rolePermissions->toArray());
      //$k=$rolePermissions-;
     // foreach ($rolePermissions as $key=>$Permission){
     //     $s=$attributes;
     //     $h=$rolePermissions[$s]->name;
     //   $permission[]= Permission::find($s);
     // }
     //  $f= $rolePermissions->contains('items','item-edit');
       // $p=$permission->permission('name');
      foreach ($rolePermissions as $p) {
$h[]=$p->name;
         }
         $y=FALSE;
       //  $a=Session::get('some');
         //$a=$parameter;
         //dd($$rolePermissions);
    foreach ($h as $o) {
      if($o==$lk){
          $y=true;
      } 
         }
         //dd($y);
      // $f= $h->contains('item-edit');
       
       //$j= Permission::
         
     if ($y==true){
     return view($lk);}  
     else return view('errors.403');
     
     
     
     
     
     
    }
}
