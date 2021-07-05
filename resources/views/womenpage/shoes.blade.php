@extends('layouts.app')

@section('title','TokoLokal | Women - Shoe')

@section('content')
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="/women" class="text-dark">Women</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">Shoe</li>
        </ol>
    </nav>
    <div class="col-md-12 mb-1 p-0">
		<div class="card rounded-0 border-0 con-photo">
            <img src="../storage/images/Women Page/women.jpg" alt="" height="472px;" width="1110px;" class="rounded-0 image-cat" alt="Women Display Picture">
			<div class="middle-cat">
				<div class="text-cat">WOMEN</div>
			</div>
		</div>
	</div>
</div>

<div class="container pb-4">
    <div class="row">
        <div class="col">
		</div>
		<div class="col text-right mr-3">
			<div class="row">
				<div class="col px-0 mr-3">
					<p class="" style="font-weight:bold;">Sort By</p>
				</div>

				<div class="text-left">
					<form name="sortProducts" id="sortProducts">
						<input type="hidden" name="url" id="url" value="{{ route('women-shoes') }}">
						<select id="sort" name="sort">
							<option value="product_relevance" @if (request()->sort == "product_relevance") selected @endif>Relevance</option>
							<option value="product_price_low_high" @if (request()->sort == "product_price_low_high") selected @endif>Price: Low to High</option>
							<option value="product_price_high_low" @if (request()->sort == "product_price_high_low") selected @endif>Price: High to Low</option>
							<option value="product_latest" @if (request()->sort == "product_latest") selected @endif>Latest Arrivals</option>
						</select>
					</form>
				</div>
			</div>
		</div>
	</div>

    <div class="row">
		<div class="col-3">
			<div class="card px-2 border" >
				<p class="mb-1 pt-3 font-weight-bold">Women's Shoe (<span class="countMen"></span>)</p>
				
				<input type="hidden" name="min_price" class="min_price" value="{{ $minprice }}" id="min_price"/>
				<input type="hidden" name="max_price" class="max_price" value="{{ $maxprice }}" id="max_price"/>

					<p class="mb-0 font-weight-bold">Price</p>
					<div class="row">
						<div class="col-md-6">
							<input type="text" id="amount_min" style="border:0; color:#d64d2f; font-weight:bold; width:100%;" class="minprice" name="min">
						</div>
						<div class="col-md-6">
							<input type="text" id="amount_max" style="border:0; color:#d64d2f; font-weight:bold; width:100%;" class="maxprice text-right" name="max">
						</div>
					</div>
  					<div id="slider-range" class="mx-2"></div>

					<hr class="my-2">

					<p class="mb-0 font-weight-bold">Brand</p>
					@foreach ($brands as $brand)
					<div class="mb-0 ml-2">
						<label class="mb-0">
							<input class="brand mb-0" name="brand[]" type="checkbox" value="{{ $brand->id }}">
							{{ $brand->name }}
						</label>
					</div>
					@endforeach

					<hr class="my-2">

					<div id="size_number">
						<p class="mb-1 font-weight-bold">Size</p>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="size_number mb-0" name="size_number[]" type="checkbox" value="38" @if (request()->size == "38") checked @endif> 38
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="size_number mb-0" name="size_number[]" type="checkbox" value="39" @if (request()->size == "39") checked @endif> 39
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="size_number mb-0" name="size_number[]" type="checkbox" value="40" @if (request()->size == "40") checked @endif> 40
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="size_number mb-0" name="size_number[]" type="checkbox" value="41" @if (request()->size == "41") checked @endif> 41
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="size_number mb-0" name="size_number[]" type="checkbox" value="42" @if (request()->size == "42") checked @endif> 42
							</label>
						</div>
					</div>

					
					<div class="row">
					</div>
					<div>
						<input type="button" value="RESET FILTER" id="btnUncheckAll" class="btn btn-light border border-dark mt-3 mb-3" style="width:100%; background-color:white;" />
					</div>
			</div>
		</div>
        <!-- Akhir Drop Down -->
        <!-- Tampilan Gambar Produk -->
        <div class="filter_products col-9">
			@include('menpage.filter_men_product')
        </div>
        <!--AKhir Tampilan Gambar Produk -->
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
	$(document).ready(function(){
		var itemCount = $('.filter_products').find(".pro").length;
    	$('.countMen').html(itemCount);

		//get checkbox name
		function getIds(checkboxName) {
			let checkBoxes = document.getElementsByName(checkboxName);
			let ids = Array.prototype.slice.call(checkBoxes)
							.filter(ch => ch.checked==true)
							.map(ch => ch.value);
			return ids;
		}

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		//sort in ajax
		$("#sort").on('change', function(){
			var category = getIds("category[]");
			var brand = getIds("brand[]");
			var size_number = getIds("size_number[]");
			var sort = $(this).val();
			var url = $(location).attr('href');
			var min = $("#amount_min").val();
    		var max = $("#amount_max").val();
			
			$.ajax({
				url: url,
				method: 'POST',
				data: {category:category, brand:brand, size_number:size_number, sort:sort, min:min, max:max, url:url},
				success: function(data){
					$('.filter_products').html(data);
					// alert([category, sort, brand, size_alphabet, url]);
				}
			})
		});

		//filter category
		$(".category, .brand, .size_number").on('click', function(){
			var category = getIds("category[]");
			var brand = getIds("brand[]");
			var size_number = getIds("size_number[]");
			var sort = $("#sort option:selected").text();
			var url = $(location).attr('href');
			var min = $("#amount_min").val();
    		var max = $("#amount_max").val();

			$.ajax({
				url: url,
				method: 'POST',
				data: {category:category, brand:brand, size_number:size_number, sort:sort, min:min, max:max, url:url},
				success: function(data){
					$('.filter_products').html(data);
					var itemCount = $('.filter_products').html(data).find(".pro").length;
    				$('.countMen').html(itemCount);
					console.log("category success")
				}
			})
		});

		// filter price
		var min = parseInt($(this).find('.min_price').val());
		var max = parseInt($(this).find('.max_price').val());
		var minPrice = parseInt($(this).find('.minprice').val()) ? parseInt($(this).find('.minprice').val()) : 	min;
		var maxPrice = parseInt($(this).find('.maxprice').val()) ? parseInt($(this).find('.maxprice').val()) : max;

    	$("#slider-range").slider({  
    		range: true,
    		min: min,
    		max: max,
    		values: [minPrice, maxPrice],
    		slide: function(event, ui) {
				$("#amount_min").val(ui.values[0]);
				$("#amount_max").val(ui.values[1]);
			}, 
			change: function(event, ui) {
				var min = $("#amount_min").val();
    			var max = $("#amount_max").val();
				var category = getIds("category[]");
				var brand = getIds("brand[]");
				var size_number = getIds("size_number[]");
				var sort = $("#sort").val();
				var url = $(location).attr('href');
			
				$.ajax({
					url: url,
					method: 'POST',
					data: {category:category, brand:brand, size_number:size_number, sort:sort, min:min, max:max, url:url},
					success: function(data){
						$('.filter_products').html(data);
						console.log(min,max)
					},
					error: function (e) {
						alert('error');
					}
				})

    		}
    	});

		$("#amount_min").val($("#slider-range").slider("values", 0));
		$("#amount_max").val($("#slider-range").slider("values", 1));
		
		$('#btnUncheckAll').click(function () {
			$('input[type=checkbox]').each(
				function (index, checkbox) {
				if (index == 0 || index != 0) {
					checkbox.checked = false;
				}
			});
		});

		$("#btnUncheckAll").on('click', function(){
			window.location='{{ route("women-shoes") }}';
		});
	});
</script>

@endsection