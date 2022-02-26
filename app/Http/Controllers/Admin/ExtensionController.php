<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExtensionRequest;
use App\Models\Destination;
use App\Models\Extension;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExtensionController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.extensions.index')->only('index');
        $this->middleware('can:admin.extensions.create')->only('create','store');
        $this->middleware('can:admin.extensions.edit')->only('edit','update');
        $this->middleware('can:admin.extensions.destroy')->only('destroy');
    }

    public function index()
    {
        return view('admin.extensions.index');
    }

 
    public function create()
    {
        $destinations = Destination::pluck('name','id');

        return view('admin.extensions.create', compact('destinations'));
    }


    public function store(ExtensionRequest $request)
    {
        $extension =  Extension::create($request->all());

        if($request->file('file')){
            Storage::put('Public/extension',$request->file('file'));
            $url2 = Storage::put('extension',$request->file('file'));
            $extension->image()->create([
                'url'=> $url2
            ]);
         }

        $extension->save();

        return redirect()->route('admin.extensions.index', $extension)->with('info', 'La Extensión se ha creado con exito!');

        
    }

 
    public function edit(Extension $extension)
    {
        $destinations = Destination::all()->pluck('name', 'id');;
        return view('admin.extensions.edit', compact('extension','destinations'));
    }


    public function update(ExtensionRequest $request, Extension $extension)
    {
        $extension->update($request->all());

        if($request->file('file')) {
            Storage::put('Public/extensions', $request->file('file'));
            $url = Storage::put('extensions', $request->file('file'));

            if($extension->image){
                Storage::delete('Public/'. $extension->image->url);

                $extension->image->update([
                    'url' => $url
                ]);
            }else{
                $extension->image()->create([
                    'url'=> $url
                ]);

            }
        }

        $extension->save();

        return redirect()->route('admin.extensions.index', $extension)->with('info', 'La Extension se ha actualizado con exito!');
    
    }


    public function destroy(Extension $extension)
    {
        $extension -> delete();
        return redirect()->route('admin.extensions.index', $extension)->with('info', 'La extension se ha eliminado con exito!');
   
    }
}
