<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    {{-- {{dd($addresses)}} --}}
    <div class="col-sm-8">
        <select class="form-control" id="payment_type" wire:model="search" name="address_detail">
            @foreach($addresses as $addresss)
                <option value="{{$address->id}}" selected>{{$addresss->recipient_name}}</option>
                {{-- <input type="hidden" wire:model="search"> --}}
            @endforeach
        </select>
    </div>

    {{-- <input type="number"  wire:model="search"> --}}

        

    <livewire:address-delivery-create></livewire:address-delivery-create>
    <hr>

@if ($address!=null)
    
<div class="text-left">
    <p>Recipient Name: {{$address->recipient_name}}</p>
    <p>Contact Number: {{$address->contact_number}}</p>
    <p>Address: {{$address->address}}</p>
    <p>Address Note (optional): {{$address->address_note}}</p>
    <p>Post Code: {{$address->post_code}}</p>
    <p>Province: {{$address->province}}</p>
    <p>City: {{$address->city}}</p>
    <p>District: {{$address->district}}</p> <br>
</div>
@else
<div class="text-left">
    <p>Recipient Name: </p>
    <p>Contact Number: </p>
    <p>Address: </p>
    <p>Address Note (optional): </p>
    <p>Post Code: </p>
    <p>Province: </p>
    <p>City:</p>
    <p>District:</p> <br>
</div>
@endif
</div>
