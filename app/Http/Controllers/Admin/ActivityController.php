<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActivityRequest;
use App\Models\Activity;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.activities.index')->only('index');
        $this->middleware('can:admin.activities.create')->only('create','store');
        $this->middleware('can:admin.activities.edit')->only('edit','update');
        $this->middleware('can:admin.activities.destroy')->only('destroy');
    }

    public function index()
    {
        return view('admin.activities.index');
    }

 
    public function create()
    {
        $destinations = Destination::pluck('name','id');

        return view('admin.activities.create', compact('destinations'));
    }


    public function store(ActivityRequest $request)
    {
        $activity =  Activity::create($request->all());

        if($request->file('file')){
            Storage::put('Public/activities',$request->file('file'));
            $url2 = Storage::put('activities',$request->file('file'));
            $activity->image()->create([
                'url'=> $url2
            ]);
         }

        $activity->save();

        return redirect()->route('admin.activities.index', $activity)->with('info', 'La Extensión se ha creado con exito!');

        
    }

 
    public function edit(Activity $activity)
    {
        $destinations = Destination::all()->pluck('name', 'id');;
        return view('admin.activities.edit', compact('activity','destinations'));
    }


    public function update(ActivityRequest $request, Activity $activity)
    {
        $activity->update($request->all());

        if($request->file('file')) {
            Storage::put('Public/activities', $request->file('file'));
            $url = Storage::put('activities', $request->file('file'));

            if($activity->image){
                Storage::delete('Public/'. $activity->image->url);

                $activity->image->update([
                    'url' => $url
                ]);
            }else{
                $activity->image()->create([
                    'url'=> $url
                ]);

            }
        }

        $activity->save();

        return redirect()->route('admin.activities.index', $activity)->with('info', 'La Extension se ha actualizado con exito!');
    
    }


    public function destroy(Activity $activity)
    {
        $activity -> delete();
        return redirect()->route('admin.activities.index', $activity)->with('info', 'La extension se ha eliminado con exito!');
   
    }
}
