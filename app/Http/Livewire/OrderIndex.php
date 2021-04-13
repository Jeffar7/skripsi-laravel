<?php

namespace App\Http\Livewire;

use App\Address_Delivery_Users;
use App\DetailAddress;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrderIndex extends Component
{
    public $addresses;
    public $address;
    public $search;

    protected $listeners = [
        'addressStored' => 'handleStored'
    ];


    public function render()
    {
        $this->addresses = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->get();


        if ($this->search === null) {
            $this->address = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->first();
        } else {
            $this->address = Address_Delivery_Users::where('user_id', '=', Auth::user()->id)->where('id', '=', $this->search)->first();
        }



        return view('livewire.order-index');
    }

    public function handleStored($address)
    {
        Session()->flash('message', 'Address was stored!');
    }
}
