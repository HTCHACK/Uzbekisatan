<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Region;


class Search extends Component
{
    use WithPagination;
    private $regions;
    public $searchName,$searchPopulation,$searchCenter;

    public function render()
    {


        $this->regions==null ? $this->setRegions() : [];
        ($this->searchName || $this->searchPopulation || $this->searchCenter) ? $this->filter($this->searchName,$this->searchPopulation,$this->searchCenter) : $this->regions;
        return view('livewire.search',[
            'regions' => $this->getRegions(),
        ]);
    }

    public function setRegions(){
        $this->regions =Region::where('lang', $this->getLang())->orderBy('created_at', 'DESC')->paginate(6);
    }

    public function getRegions(){
        return $this->regions;
    }

    public function filter($searchName=null,$searchPopulation=null,$searchCenter=null){

        $this->regions=Region::where('lang', $this->getLang())->where(function($query) use ($searchName,$searchPopulation,$searchCenter){
            if($searchName) $query->where('name','like', '%' . $searchName . '%');
            if($searchPopulation) $query->where('population','like', '%' . $searchPopulation . '%');
            if($searchCenter) $query->where('city','like','%' . $searchCenter . '%');
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
