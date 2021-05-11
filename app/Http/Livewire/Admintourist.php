<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Region;
use App\District;
use App\Hotel;

class Admintourist extends Component

{


    public $region;
    public $districts = [];
    public $district;

    public function render()
    {


        if (!empty($this->region)) {
            $this->districts = District::where('region_id', $this->region)->get();
        }
        return view('livewire.admintourist')->withRegions(Region::orderby('name')->get());
    }
}
