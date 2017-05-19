<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use App\Permission;
use DB;
use Illuminate\Support\Facades\Input;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        //$permission= Permission::
    //   var_dump($request);
     //$user = User::with( array( 'roles', 'roles.permissions' ) )->first();
      // if(2==1){
 
        $roles = Role::orderBy('id','DESC')->paginate(5);
        
        return view('roles.index',compact('roles'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
        
     //  }
     // return view('errors.403');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
   {
        $permission = Permission::get();
        return view('roles.create',compact('permission'));
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'display_name' => 'required',
            'description' => 'required',
            
       ]);

        $role = new Role();
        $role->name = $request->input('name');
      $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');
        $role->save();
        $fields = Input::get('result');
        //$abc=$value->id;
        $po=$fields[1];
        
       // $field = $fields->first();
        
       // $attributes = array_keys($user->toArray());
//dd($fields);
      // foreach ($request->input('permission') as $key => $value) {
       //     $role->attachPermission($value);
      //  }
foreach ($fields as $key => $value) {
  //  list($keys, $values) = array_divide($fi);
  // $mykey= key($fi);
  //dd($value);
   //dd($mykey);
    //$ooo=$keys[1];
   // $ppp=$values[1];
   // dd($ppp);
    if ($value==1){
         $role->attachPermission($key);
    }
   //     $role->attachPermission($keys);
 //  }
}
       return redirect()->route('roles.index')
                        ->with('success','Role created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request){
        $permission = new Permission();
        $permission->name = $request->input('permiss');
      //   dd($permission);
        $permission->save();
        $admin = Role::where('name', 'admin')->first();
        $admin->attachPermission($permission);
       return redirect()->route('roles.index')
                        ->with('success','Permission created successfully');
    }
    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("permission_role","permission_role.permission_id","=","permissions.id")
           ->where("permission_role.role_id",$id)
           ->get();

      return view('roles.show',compact('role','rolePermissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
   {
        $role = Role::find($id);
       $permission = Permission::get();
        $rolePermissions = DB::table("permission_role")->where("permission_role.role_id",$id)
           ->pluck('permission_role.permission_id','permission_role.permission_id')->toArray();

        return view('roles.edit',compact('role','permission','rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request, [
            'display_name' => 'required',
            'description' => 'required',
            'permission' => 'required',
       ]);

        $role = Role::find($id);
        $role->display_name = $request->input('display_name');
       $role->description = $request->input('description');
       $role->save();

        DB::table("permission_role")->where("permission_role.role_id",$id)
           ->delete();

       foreach ($request->input('permission') as $key => $value) {
           $role->attachPermission($value);
        }

        return redirect()->route('roles.index')
                        ->with('success','Role updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
       DB::table("roles")->where('id',$id)->delete();
       return redirect()->route('roles.index')
                        ->with('success','Role deleted successfully');
    }
}