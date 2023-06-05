<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.index');
    }
    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function AdminProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.account.overview', compact('profileData'));
    }
    public function AdminProfileSettings(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.account.settings', compact('profileData'));
    }
    public  function AdminProfileSettingsStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->fname;
        $data->lname = $request->lname;
       // $data->email = $request->emailaddress;
        $data->phone = $request->phone;
        $data ->company = $request->company;
        $data->website = $request->website;
        $data->country = $request->country;
        $data->language = $request->language;
        $data->timezone = $request->timezone;
        $data->currnecy = $request->currency;
        $data->communication = $request->communication;
        $data->address = $request->address;

        if ($request->file('avatar')){
            $file = $request->file('avatar');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('admin/upload/profilefoto'),$filename);
            $data['avatar'] = $filename;

        }

        $data->save();
        return redirect()->back();

    }
}
