<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NationRequest;
use App\Models\Nation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NationController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.nations.index')->only('index');
        $this->middleware('can:admin.nations.create')->only('create','store');
        $this->middleware('can:admin.nations.edit')->only('edit','update');
        $this->middleware('can:admin.nations.destroy')->only('destroy');
    }
    
    public function index()
    {
        $nations = Nation::all();
        return view('admin.nations.index', compact('nations'));
    }

    public function upload(Request $request)
    {
        //$nation = Nation::create($request->all());
        if($request->hasFile('upload')){

            // Storage::put('Public/img',$request->file('upload'));
            // $url2 = Storage::put('nations',$request->file('upload'));
            // $nation->image()->create([
            //     'url'=> $url2
            // ]);

            $origenName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($origenName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' .time() . '.'.$extension;
            $request->file('upload')->move(public_path('img'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url2 = asset('img/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = " <script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url2', '$msg') </script> ";

            @header('Content-type: text/html; charset-utf-8');

            echo $response;



        }


        // if($request->file('upload')){
        //     Storage::put('Public/img',$request->file('upload'));
        //     $url2 = Storage::put('nations',$request->file('upload'));
        //     $nation->image()->create([
        //         'url'=> $url2
        //     ]);
        //  }

    }


    public function create()
    {
        return view('admin.nations.create');
    }


    public function store(NationRequest $request)
    {

        $nation = Nation::create($request->all());

        if($request->file('file')){
            Storage::put('Public/nations',$request->file('file'));
            $url2 = Storage::put('nations',$request->file('file'));
            $nation->image()->create([
                'url'=> $url2
            ]);
         }
         if($request->file('filethumb')){
            Storage::put('Public/nations',$request->file('filethumb'));
            $url2 = Storage::put('nations',$request->file('filethumb'));
            $nation->imagethumb()->create([
                'url'=> $url2
            ]);
         }
         if($request->file('filefull')){
            Storage::put('Public/nations',$request->file('filefull'));
            $url2 = Storage::put('nations',$request->file('filefull'));
            $nation->imagefull()->create([
                'url'=> $url2
            ]);
         }

        $nation->save();

         return redirect()->route('admin.nations.index', $nation)->with('info', 'La categoria se ha creado con exito!');
    }

 
    public function show(Nation $nation)
    {
        return view('admin.nations.show', compact('nation'));
    }

  
    public function edit(Nation $nation)
    {
        //$this->authorize('author',$nation);

        return view('admin.nations.edit', compact('nation'));
    }

    
    public function update(NationRequest $request, Nation $nation)
    {
        
        //$this->authorize('author',$nation);
        $nation->update($request->all());

        if($request->file('file')) {
            Storage::put('Public/nations', $request->file('file'));
            $url = Storage::put('nations', $request->file('file'));

            if($nation->image){
                Storage::delete('Public/'. $nation->image->url);

                $nation->image->update([
                    'url' => $url
                ]);
            }else{
                $nation->image()->create([
                    'url'=> $url
                ]);

            }
        }
        if($request->file('filethumb')) {
            Storage::put('Public/nations', $request->file('filethumb'));
            $url = Storage::put('nations', $request->file('filethumb'));

            if($nation->imagethumb){
                Storage::delete('Public/'. $nation->imagethumb->url);

                $nation->imagethumb->update([
                    'url' => $url
                ]);
            }else{
                $nation->imagethumb()->create([
                    'url'=> $url
                ]);

            }
        }
        if($request->file('filefull')) {
            Storage::put('Public/nations', $request->file('filefull'));
            $url = Storage::put('nations', $request->file('filefull'));

            if($nation->imagefull){
                Storage::delete('Public/'. $nation->imagefull->url);

                $nation->imagefull->update([
                    'url' => $url
                ]);
            }else{
                $nation->imagefull()->create([
                    'url'=> $url
                ]);

            }
        }

       
        $nation->save();

        return redirect()->route('admin.nations.index', $nation)->with('info', 'La categoria se ha actualizado con exito!');
    }

 
    public function destroy(Nation $nation)

    {
        //$this->authorize('author',$nation);
        
        $nation -> delete();
        return redirect()->route('admin.nations.index')->with('info', 'La categoria se ha eliminado con exito!');
    }
}
