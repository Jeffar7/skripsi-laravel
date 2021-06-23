@extends('layouts.app')

@section('title','TokoLokal | List Raffle')

@section('content')
<div class="container pt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent mb-0">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">Raffle</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h3 class="mt-4">Raffle Item List</h3>
            <p style="font-weight:normal;">Here are all our listed raffle item that you can joined, hope you enjoyed it!</p>
            <div class="search-group rounded left-addon-search inner-addon" style="width:100%;">
                <i class="fas fa-search"></i>
                <input type="search" class="search-field rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" style="width:100%;" />
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-around">
        <div class="col-md-10">
            <div class="row">
                <div class="col">
                    <p class="title-home text-left" style="font-weight:bold;">ITEMS TO BE RAFFLE</p>
                </div>

                <div class="col-sm-0 px-0">
					<p class="" style="font-weight:bold; margin-top: 1rem; margin-bottom: 1rem;">Sort By</p>
				</div>

				<div class="col-sm-2 text-left">
					<form name="sortProducts" id="sortProducts" style="margin-top: 1rem; margin-bottom: 1rem;">
						<select id="sortRaffle" name="sortRaffle">
                            <option value="">Select Option</option>
							<option value="open_raffle" @if (request()->sort == "open_raffle") selected @endif>Status: Open</option>
							<option value="closed_raffle" @if (request()->sort == "closed_raffle") selected @endif>Status: Closed</option>
							<option value="upcoming_raffle" @if (request()->sort == "upcoming_raffle") selected @endif>Status: Upcoming</option>
							<option value="latest_raffle" @if (request()->sort == "latest_raffle") selected @endif>Latest Raffle</option>
						</select>
					</form>
				</div>
            </div>
        </div>
    </div>

    <div class="filter_raffles row justify-content-around" id="filter_raffles">
        @include('raffles.filter_raffle')
    </div>

    <div class="row justify-content-around mt-5">
        {{ $raffles->links() }}
    </div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
		//sort in ajax
		$("#sortRaffle").on('change', function(e){
            e.preventDefault();

			var sort = $(this).val();
			var url = $(location).attr('href');
			
			$.ajax({
				url: url,
				method: 'POST',
				data: {sort:sort, url:url},
				success: function(response){
                    $('.filter_raffles').html(data);
                    console.log(response);

				}
			})
		});
	});
</script>