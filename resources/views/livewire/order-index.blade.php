<div>

    <livewire:address-delivery-create></livewire:address-delivery-create>
    
    <hr>

    @foreach ($addresses as $address)    
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
    @endforeach
</div>
