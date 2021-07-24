@extends('layouts.app')

@section('title','TokoLokal | List Raffle')

@section('content')
<div class="loader"></div>
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
            <h3 class="mt-4 font-weight-bold">Raffle Item List</h3>
            <p class="font-weight-bold">Here are all our listed raffle item that you can joined, hope you enjoyed it!</p>
            <div class="search-group rounded left-addon-search inner-addon" style="width:100%;">
                <div class="col-md-10" style="margin-top: 2%;">
                <i class="fas fa-search ml-3"></i>
                <input type="search" class="search-field rounded search-input" name="search" placeholder="Type your search here..." aria-label="Search" aria-describedby="search-addon" style="width:100%;" autocomplete="off" />
                </div>
                <div class="col-md-2" style=" margin: 2% 0;">
                    <button type="submit" class="btn btn-clock btn-faq" style="height: 100%">Search</button>
                  </div>
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
						<select id="sort" name="sort">
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

    <div class="row justify-content-center">
        <div class="filter_raffles">
            @include('raffles.filter_raffle')
        </div>
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
		$("#sort").on('change', function(e){
            e.preventDefault();

			var sort = $(this).val();
			var url = $(location).attr('href');
            var search = $('.search-input').val();
			
			$.ajax({
				url: url,
				method: 'POST',
				data: {search:search, sort:sort, url:url},
				success: function(data){
                    $('.filter_raffles').html(data);
				}
			})
		});

        $(".search-input").on('keyup', function(){
            var search = $(this).val();
            var url = $(location).attr('href');
            var sort = $("#sort option:selected").text();

            if(search.length >= 0){
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {sort:sort, search:search},
                    beforeSend: function(){
                        $('.filter_raffles').html(
                                '<p style="font-weight:bold;">Loading...</p>'
                        );
                    },
                    success: function(data){
                        if(data < 1) {
                            $('.filter_raffles').html(
                                '<div class="text-center">' +
                                    '<img src="images/empty_item.png" alt="" height="200px" width="200px">' +
                                    '<p class="mb-0">Oops!</p>' +
                                    '<p>No data was found. Please try and submit another keyword.</p>' +
                                '</div>'
                            );
                        } else {
                            $('.filter_raffles').html(data);
                        }
                    }
                })
            } 
        });

        $(document).on('click', '.pagination a', function(e) { 
            e.preventDefault(); 
            var url = $(this).attr('href');  
            getRaffles(url);
            window.history.pushState("", "", url); 
        });

        function getRaffles(url) {
            var sort = $('#sort').val();
            var search = $('.search-input').val();
            $.ajax({
                url : url, 
                data: {sort:sort, search:search, url:url},
            }).done(function (data) {
                $('.filter_raffles').html(data);  
            }).fail(function () {
                alert('Data could not be loaded.');
            });
        }
	});
</script>