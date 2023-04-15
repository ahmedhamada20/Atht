<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function setting()
    {
        $data = Setting::first();
        return view('admin.setting.index', compact('data'));
    }

    public function updatedSetting(Request $request)
    {
        Setting::updateOrCreate([
            'id' => $request->id
        ], [
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'notes' => $request->notes,
            'header_products' => $request->header_products,
            'header_collections' => $request->header_collections,
            'header_category' => $request->header_category,
            'header_blogs' => $request->header_blogs,
        ]);


        if ($file = $request->file('photo')) {
            File::delete(public_path('dash/pictures/Setting' . '/' . $request->id . '/' . $request->oldfile));
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('photo')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;
            if ($file->move('dash/pictures/Setting' . '/' . $request->id, $file_to_store)) {
                Photo::updateOrCreate([
                    'photoable_id' => $request->id,
                    'photoable_type' => "App\ModelsSetting",
                ], [
                    'Filename' => $file_to_store,
                    'photoable_id' => $request->id,
                    'photoable_type' => "App\ModelsSetting",
                ]);
            }
        }

        return redirect()->back();
    }
}
