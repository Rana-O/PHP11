<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profiles;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create (Request $request)
    {
        $this->validate($request, Profiles::$rules);
        $profile = new Profiles;
        $parameter = $request->all();

        unset($parameter['_token']);

        $profiles->fill($parameter);
        $profiles->save();

        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
