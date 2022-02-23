<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\City;
use App\Models\Zone;
use Livewire\Component;

class CityZoneArea extends Component
{

    public $cities = [], $zones = [], $areas = [];

    public $selectedCityId, $selectedZoneId, $selectedAreaId;

    protected $listeners = [
        'getZonesByCityId' => 'getZonesByCityId',
        'getAreasByZoneId' => 'getAreasByZoneId',
    ];

    public function mount()
    {
        $this->cities = City::select('id', 'name')
            ->get()
            ->toArray();
    }

    public function hydrate()
    {
        $this->dispatchBrowserEvent('render-select2');
    }

    public function render()
    {
        return view('livewire.city-zone-area', [
            'cities' => $this->cities,
        ]);
    }

    public function getZonesByCityId()
    {
        $this->zones = Zone::select('id', 'name', 'city_id')
            ->whereCityId($this->selectedCityId)
            ->get()
            ->toArray();

        $this->reset('areas', 'selectedZoneId');
    }


    public function getAreasByZoneId()
    {
        $this->areas = Area::select('id', 'name', 'zone_id')
            ->whereZoneId($this->selectedZoneId)
            ->get()
            ->toArray();
    }
}
