<?php

namespace App\Http\Livewire\Admin;

use App\Models\Extension as ModelsExtension;
use Livewire\Component;

class Extension extends Component
{
    public $extension, $title, $days, $price, $suplement, $complement, $abstract, $img_url, $destination_id, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $this->extension = ModelsExtension::all();
       // return view('livewire.admin.extensions.extension');

       return view('admin.extensions.index');
    }

    private function resetInput()
    {
        $this->title = null;
        $this->days = null;
        $this->price = null;
        $this->suplement = null;
        $this->complement = null;
        $this->abstract = null;
        $this->img_url = null;
        $this->destination_id = null;

    }
    public function store()
    {
        $this->validate([
            'title' => 'required|min:5',
            'days' => 'required',
            'price' => 'required',
            'suplement' => 'required',
            'complement' => 'required',
            'abstract' => 'required',
            'img_url' => 'required',
            'destination_id' => 'required',

            
        ]);
        Extension::create([
            'title' => $this->title,
            'days' => $this->days,
            'price' => $this->price,
            'suplement' => $this->suplement,
            'complement' => $this->complement,
            'abstract' => $this->abstract,
            'img_url' => $this->img_url,
            'destination_id' => $this->destination_id,

        ]);
        $this->resetInput();
    }
    public function edit($id)
    {
        $record = Extension::findOrFail($id);
        $this->selected_id = $id;
        $this->title = $record->title;
        $this->days = $record->days;
        $this->price = $record->price;
        $this->suplement = $record->suplement;
        $this->complement = $record->complement;
        $this->abstract = $record->abstract;
        $this->img_url = $record->img_url;
        $this->destination_id = $record->destination_id;


        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'title' => 'required|min:5',
            'days' => 'required',
            'price' => 'required',
            'suplement' => 'required',
            'complement' => 'required',
            'abstract' => 'required',
            'img_url' => 'required',
            'destination_id' => 'required',
        ]);
        if ($this->selected_id) {
            $record = Extension::find($this->selected_id);
            $record->update([
                'title' => $this->title,
                'days' => $this->days,
                'price' => $this->price,
                'suplement' => $this->suplement,
                'complement' => $this->complement,
                'abstract' => $this->abstract,
                'img_url' => $this->img_url,
                'destination_id' => $this->destination_id,
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = Extension::where('id', $id);
            $record->delete();
        }
    }
}
