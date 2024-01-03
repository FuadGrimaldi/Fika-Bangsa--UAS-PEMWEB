<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $users = User::all();
        return view('member.profile', ['users'=>$users]);
    }
    public function edit($id) {
        $user = User::find($id);
        return view('member.edit-profile', ['user'=>$user]);
    }
    public function update(Request $request, $id) {
        $data = $request->except('_token');
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone_number' => 'required|String',
        ]);
        $user = User::find($id);
        $user->update($data);

        return redirect()->route('member.profile')->with('success', 'Profile updated');
    }
}
