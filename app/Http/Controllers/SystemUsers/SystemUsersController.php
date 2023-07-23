<?php

namespace App\Http\Controllers\SystemUsers;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

use App\User;
// use App\system_users;

use Illuminate\Http\Request;

class SystemUsersController extends Controller
{
    
    
    public function index()
    {
        if (Auth()->user()->role > 1) {
            return view('errors.401');
        }
        $User = User::paginate(8);
        
        // dd($User);
return view('SystemUser.SysUser', compact('User'));





    }

    public function store(Request $request)
    {
        if (Auth()->user()->role > 1) {
            return view('errors.401');
        }
        $input = $request->all();
    
        $photo = $request->file('image');
        
        if ($photo) {
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            $image = Image::make($photo)->fit(68, 68)->save(public_path('uploads/profiles/' . $filename));
        } else {
            $filename = null;
        }
    
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
            'department' => $request['department'],
            'image' => $filename,
        ]);
    


        return redirect()->route('SystemUsers.index')->with('success','created successfully');




    }
    

    
    public function show(systemusers $systemusers)
    {
        if (Auth()->user()->role > 1) {
            return view('errors.401');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\systemusers $systemusers
     * @return \Illuminate\Http\Response
     */
    public function edit(systemusers $systemusers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\systemusers $systemusers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    if (Auth()->user()->role > 1) {
        return view('errors.401');
    }
    $newPassword = $request['password'];

    $photo = $request->file('image');
    if ($photo) {
        $filename = time() . '.' . $photo->getClientOriginalExtension();
        $image = Image::make($photo)->fit(68, 68)->save(public_path('uploads/profiles/' . $filename));
    }

    $User = User::find($id);
    $User->name = $request->has('name') ? $request['name'] : $User->name;
    $User->email = $request->has('email') ? $request['email'] : $User->email;
    $User->password = $request->has('password') ? Hash::make($newPassword) : $User->password;
    $User->role = $request->has('role') ? $request['role'] : $User->role;
    $User->department = $request->has('department') ? $request['department'] : $User->department;
    $User->image = $photo ? $filename : $User->image;
    $User->approved = $request->has('approved') ? $request['approved'] : $User->approved;

    $User->save();

    return redirect()->route('SystemUsers.index')->with('success', 'Updated successfully');
}


    

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\systemusers $systemusers
     * @return \Illuminate\Http\Response
     */
    public function destroy($i)
    {
        if (Auth()->user()->role > 1) {
            return view('errors.401');
        }
        {
            $x = user::find($i);
            //  dd($x);

            $x->delete();
            return redirect()->route('SystemUsers.index')->with("systemuser_delete",'User has been deleted successfully');


        }
    }

    public function approve(User $user)
    {
        if (Auth()->user()->role > 1) {
        return view('errors.401');
    }
        $user->approved = 1;
        $user->save();
    
        return redirect()->back()->with('success', 'User approved successfully.');
    }
     



}
