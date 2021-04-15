<div>

    <form wire:submit.prevent="store">
       
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="recipient_name">Recipient Name</label>
                <input wire:model="recipient_name" type="text" class="form-control" id="recipient_name" placeholder="Name" name="recipient_name" >
            </div>
            <div class="form-group col-md-6">
                <label for="contact_number">Contact Number</label>
                <input wire:model="contact_number" type="text" class="form-control" id="contact_number" placeholder="contact_number" name="contact_number">
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input wire:model="address" type="text" class="form-control" id="address" placeholder="1234 Main St" name="address">
        </div>
        <div class="form-group">
            <label for="address_note">Address Note (Optional)</label>
            <input wire:model="address_note" type="text" class="form-control" id="address_note" placeholder="Apartment, studio, or floor" name="address_note">
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="city">City</label>
                <input wire:model="city" type="text" class="form-control" id="city" name="city">
            </div>
            <div class="form-group col-md-3">
                <label for="province">Province</label>
                <input  wire:model="province" type="text" class="form-control" id="province" name="province">
            </div>
            <div class="form-group col-md-3">
                <label for="post_code">Post Code</label>
                <input wire:model="post_code" type="text" class="form-control" id="post_code" name="post_code">
            </div>
            <div class="form-group col-md-3">
                <label for="district">District</label>
                <input wire:model="district" type="text" class="form-control" id="district" name="district">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Add New Address</button>
    </form>
</div>
