<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\District;

class SearchDistrict extends Component
{
    use WithPagination;
    private $districts;
    //public $region_id;
    public $searchName, $searchCity, $searchRegion;

    public function render()
    {
        $this->districts == null ? $this->setDistricts() : [];
        ($this->searchName || $this->searchCity || $this->searchRegion) ? $this->filter($this->searchName,$this->searchCity,$this->searchRegion) : $this->districts;
        return view('livewire.search-district',[
            'districts' => $this->getDistricts(),
        ]);
    }

    public function setDistricts(){
        $this->districts = District::where('lang', $this->getLang())->orderBy('created_at','DESC')->paginate(6);
        //$this->districts = District::where('lang', $this->getLang())->orderBy('created_at','DESC')->paginate(6);
    }

    public function getDistricts(){
        return $this->districts;
    }

    public function filter($searchName=null,$searchCity=null,$searchRegion=null){
        $this->districts =District::where('lang', $this->getLang())->where(function($query) use ($searchName,$searchCity,$searchRegion){
            //if($searchRegion) $query->where('region_id','like','%' . $searchRegion . '%');
            if($searchName) $query->where('name','like','%' . $searchName . '%');
            if($searchCity) $query->where('city','like','%' . $searchCity . '%');
        })->orderBy('created_at', 'DESC')->paginate(6);
    }

    private function getLang()
    {
        if (!isset($_COOKIE['language'])) {
            return 'en';
        }
        if (isset($_COOKIE['language'])) {
            return $_COOKIE['language'];
        }
    }
}
