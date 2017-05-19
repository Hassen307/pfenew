<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Item;
use Image;
use DB;
use Hash;
use Auth;
use File;
class SearchController extends Controller
{
    public function index(){
        return view('search');
    }
    public function search(Request $request) {
        if($request->ajax())
            {
            $output="";
            $sex="";
            $item=DB::table('items')->where('title','LIKE','%'.$request->search.'%')
                    ->orWhere('description','LIKE','%'.$request->search.'%')->get();
            if ($item)
            {
                foreach ($item as $key => $item) {
              
            $output.='<tr>'.
                    '<td>'.$item->title.'</td>'.
                    '<td>'.$item->description.'</td>'.
                   
                    '</tr>';
}

return Response($output);
            }
            
            else{
                return Response()->json(['no'=>'Not found']);
            }
            }
    
}}
