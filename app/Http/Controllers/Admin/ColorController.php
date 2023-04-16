<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\File;

class ColorController extends Controller
{
    
    protected $data = [
        'folder' => 'admin.',
        'Models' => 'App\Models\Color',
        'route' => 'color',
        'folderBlade' => 'color',
        'folderImage' => 'color',
        'fileName' => 'test'
    ];


    public function index()
    {
        $data = [
            'data' => $this->data['Models']::all(),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->data['folder'] . $this->data['folderBlade'] . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $this->data['Models']::create([
                'name'=> $request->name ?? null,
                'notes'=> $request->notes ?? null,
                'notes_1'=> $request->notes_1 ?? null,
                'notes_2'=> $request->notes_2 ?? null,
                'notes_3'=> $request->notes_3 ?? null,
                'notes_4'=> $request->notes_4 ?? null,
                'notes_5'=> $request->notes_5 ?? null,
            ]);

            if ($file = $request->file('cover')) {
                $file_name = $file->getClientOriginalName();
                $file_name_Extension = $request->file('cover')->getClientOriginalExtension();
                $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;

                if ($file->move('dash/pictures/' . $this->data['folderBlade'] . '/' . $data->id, $file_to_store)) {
                    Photo::create([
                        'Filename' => $file_to_store,
                        'photoable_id' => $data->id,
                        'photoable_type' => $this->data['Models'],
                    ]);
                }
            }
            toastr()->success('تم الحفظ بنجاح');
            return redirect('admin/'.$this->data['route']);
        } catch (\Exception $th) {
            return redirect()->withErrors(['error' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'data' => $this->data['Models']::findorfail($id),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'data' => $this->data['Models']::findorfail($id),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.edit', $data);
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
        $data = $this->data['Models']::findorfail($request->id)->update([
            'name'=> $request->name ?? null,
            'notes'=> $request->notes ?? null,
            'notes_1'=> $request->notes_1 ?? null,
            'notes_2'=> $request->notes_2 ?? null,
            'notes_3'=> $request->notes_3 ?? null,
            'notes_4'=> $request->notes_4 ?? null,
            'notes_5'=> $request->notes_5 ?? null,
        ]);


        if ($file = $request->file('cover')) {
            File::delete(public_path('dash/pictures/' . $this->data['folderBlade'] . '/' . $request->id . '/' . $request->oldfile));
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('cover')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;
            if ($file->move('dash/pictures/' . $this->data['folderBlade'] . '/' . $request->id, $file_to_store)) {
                Photo::updateOrCreate([
                    'photoable_id' => $request->id,
                    'photoable_type' => $this->data['Models'],
                ], [
                    'Filename' => $file_to_store,
                    'photoable_id' => $data->id,
                    'photoable_type' => $this->data['Models'],
                ]);
            }
        }

        toastr()->success('تم التحديث بنجاح');
        return redirect('admin/'.$this->data['route']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->data['Models']::destroy($request->id);
        if ($request->oldfile) {
            File::delete(public_path('dash/pictures/' . $this->data['folderBlade'] . '/' . $request->id . '/' . $request->oldfile));
            Photo::where('photoable_id', $request->id)->where('photoable_type', $this->data['Models'])->delete();
        }
        toastr()->success('Done Deleted Successfully');
        return redirect('admin/'.$this->data['route']);
    }
}
