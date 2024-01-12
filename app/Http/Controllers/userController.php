<?php
namespace App\Http\Controllers;
use App\Models\systemUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = systemUser::all(); // select * from students
        return view('user.index',compact('users'));
    }
    public function deleteuser()
    {
        $users = systemUser::all(); // select * from students
        return view('user.delete',compact('users'));
    }
    public function makeedit()
    {
        $users = systemUser::all(); // select * from students
        return view('user.makeedit',compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new systemUser;
        $user->name = $request->name;
        $user->password = Hash::make($request->password); // Hash the password
        $user->email = $request->email;        
        $user->role = $request->role;
        $user->save();

        return redirect()->route('user.index')->withSuccess('New user added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(systemUser $user)
    {
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(systemUser $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, systemUser $user)
     {
         $data = $request->all();
     
         // Check if a new password is provided
         if (!empty($data['password'])) {
             // Hash the new password
             $data['password'] = Hash::make($data['password']);
         } else {
             // If no new password is provided, remove the password field from the data array
             unset($data['password']);
         }
     
         // Update the user record
         $user->update($data);
     
         return redirect()->route('user.index')->with('success', 'User updated successfully');
     }
     

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(systemUser $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
