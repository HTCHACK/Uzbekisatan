<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Gallery;

class Admingallery extends Component
{

    public $data, $name, $img, $selected_id;
    public $updateMode = false;


    public function render()
    {
        $this->data = Gallery::all();
        return view('livewire.admingallery');
    }

    private function resetInput()
    {
        $this->name = null;
        $this->img = null;
    }

    public function store()
    {
        $this->validate([
                'img' => 'required|mimes:png,jpg,jpeg,webp,gif,svg|max:2048',
                'name',
            ]);

        Gallery::create([
            'name' => $this->name,
            'img' => $this->img,
        ]);

        $this->resetInput();
    }
    public function edit($id)
    {
        $record = Gallery::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->img = $record->img;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'img' => 'required|mimes:png,jpg,jpeg,webp,gif,svg|max:2048',
            'name',
        ]);
        if ($this->selected_id) {
            $record = Gallery::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'img' => $this->img,
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = Gallery::where('id', $id);
            $record->delete();
        }
    }
}
