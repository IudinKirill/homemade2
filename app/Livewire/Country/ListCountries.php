<?php

namespace App\Livewire\Country;

use App\Models\Country;
use Livewire\Attributes\On;
use Livewire\Component;

class ListCountries extends Component
{


    public function deleteCountry(Country $country)
    {
        $country->delete();
    }

    public function decrement(Country $country)
    {
        $country->update(['top' => $country->top - 1]);
    }

    public function increment(Country $country)
    {
        $country->update(['top' => $country->top + 1]);
    }

    public function editCountry(Country $country)
    {

        $this->dispatch('EditCountry', country: $country);
    }

    #[On('StoreCountry')]
    public function render()
    {
        $countries = Country::query()->orderBy('id', 'desc')->get();
        return view('livewire.country.list-countries',compact('countries'));
    }
}
