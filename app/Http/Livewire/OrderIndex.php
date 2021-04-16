<?php

namespace App\Http\Livewire;

use App\Address_Delivery_Users;
use App\DetailAddress;
use App\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrderIndex extends Component
{
    public $addresses;

    protected $listeners = [
        'addressStored' => 'handleStored'
    ];


    public function render()
    {
        $addresses = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->get();

        if ($addresses) {
            $this->addresses = $addresses;
        } else {
            $this->addresses = null;
        }

        return view('livewire.order-index');
    }

    public function handleStored($address)
    {
        // dd($address);
    }
}
