<?php
namespace App\HTTP\Controllers;
use Illuminate\HTTP\Request;

class UserController extends Controller
{

    public function index()
    {
       
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true); 
       return view('users.index',['users'=>$users]);
      //return"ok";
    }

    
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request ,$id)
    {
        dd($request->all());
    }

    
    public function show()
    {
        return view('users.show')>with('id',$id);
    }

    public function edit()
    {
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true);
        $users=$users[$id-1];
        return view('users.edit')>with(['users'=>$user]);
    }

    public function update(Request $request ,$id)
    {
        return "info updated".$id;
    }

    public function destroy($id)
    {
        return "id deleted".$id;
    }
}