<div>

    <form wire:submit.prevent="store">
       
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="recipient_name">Recipient Name</label>
                <input wire:model="recipient_name" type="text" class="form-control  @error('recipient_name') is-invalid @enderror" id="recipient_name" placeholder="Name" name="recipient_name">
                @error('recipient_name')
                    <span class="invalid-feedback">
                        <strong> {{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="contact_number">Contact Number</label>
                <input wire:model="contact_number" type="text" class="form-control @error('contact_number') is-invalid @enderror" id="contact_number" placeholder="contact_number" name="contact_number" >
                @error('contact_number')
                    <div class="invalid-feedback">
                        <strong> {{$message}}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input wire:model="address" type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="1234 Main St" name="address" > 
            @error('contact_number')
            <div class="invalid-feedback">
                <strong> {{$message}}</strong>
            </div>
             @enderror
        </div>

        <div class="form-group">
            <label for="address_note">Address Note (Optional)</label>
            <input wire:model="address_note" type="text" class="form-control" id="address_note" placeholder="Apartment, studio, or floor" name="address_note">
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="city">City</label>
                <input wire:model="city" type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" >
                @error('city')
                <div class="invalid-feedback">
                    <strong> {{$message}}</strong>
                </div>
                 @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="province">Province</label>
                <input  wire:model="province" type="text" class="form-control @error('province') is-invalid @enderror" id="province" name="province" >
                @error('province')
                <div class="invalid-feedback">
                    <strong> {{$message}}</strong>
                </div>
                 @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="post_code">Post Code</label>
                <input wire:model="post_code" type="text" class="form-control @error('post_code') is-invalid @enderror" id="post_code" name="post_code" >
                @error('post_code')
                <div class="invalid-feedback">
                    <strong> {{$message}}</strong>
                </div>
                 @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="district">District</label>
                <input wire:model="district" type="text" class="form-control  @error('district') is-invalid @enderror" id="district" name="district">
                @error('district')
                <div class="invalid-feedback">
                    <strong> {{$message}}</strong>
                </div>
             @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Add New Address</button>
    </form>
</div>
