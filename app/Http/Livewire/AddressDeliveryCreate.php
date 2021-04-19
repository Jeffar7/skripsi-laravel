<?php

namespace App\Http\Livewire;

use App\Address_Delivery_Users;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddressDeliveryCreate extends Component
{

    public $recipient_name;
    public $contact_number;
    public $address;
    public $address_note;
    public $post_code;
    public $province;
    public $city;
    public $district;
    public $user_id;

    public function render()
    {
        return view('livewire.address-delivery-create');
    }

    public function store()
    {

        $this->validate([
            'recipient_name' => 'required|min:4',
            'contact_number' => 'required|min:8',
            'address' => 'required',
            'post_code' => 'required|min:5',
            'province' => 'required',
            'city' => 'required',
            'district' => 'required'
        ]);

        $address =  Address_Delivery_Users::create([
            'recipient_name' => $this->recipient_name,
            'contact_number' => $this->contact_number,
            'address' => $this->address,
            'address_note' => $this->address_note,
            'post_code' => $this->post_code,
            'province' => $this->province,
            'city' => $this->city,
            'district' => $this->district,
            'user_id' => Auth::user()->id,
        ]);

        $this->resetInput();

        $this->emit('addressStored', $address);
    }

    private function resetInput()
    {
        $this->recipient_name = null;
        $this->contact_number = null;
        $this->address = null;
        $this->address_note = null;
        $this->post_code = null;
        $this->province = null;
        $this->city = null;
        $this->district = null;
        $this->user_id = null;
    }
}
