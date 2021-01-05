<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PricingComponent extends Component
{
    public function render()
    {
        return view('livewire.pricing-component', [
            'hargapaket' => DB::table('hargapakets')->get()
        ]);
    }
}
