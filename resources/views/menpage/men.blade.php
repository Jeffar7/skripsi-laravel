@extends('layouts.app')

@section('title','TokoLokal | Men')

@section('content')
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">Men</li>
        </ol>
    </nav>
    <div class="big-image-men">
        <div class="overlay">
            <h3>MEN</h3>
        </div>
    </div>
</div>

<div class="container pb-4">
    <div class="row">
        <div class="col">
		</div>
		<div class="col text-right">
			<div class="row">
				<div class="col px-0">
					<p class="" style="font-weight:bold;">Sort By</p>
				</div>

				<div class="col-sm-3 text-left">
					<form name="sortProducts" id="sortProducts">
						<input type="hidden" name="url" id="url" value="{{ route('men') }}">
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
			<div class="card px-2 border border-dark" >
				<p class="mb-1 pt-2 font-weight-bold">Men Products (<span class="countMen"></span>)</p>
				
				<input type="hidden" name="min_price" class="min_price" value="{{ $minprice }}" id="min_price"/>
				<input type="hidden" name="max_price" class="max_price" value="{{ $maxprice }}" id="max_price"/>
				
					<p class="mb-1 font-weight-bold">Categories</p>
					@foreach ($categories as $category)
					<div class="mb-0 ml-2">
						<label class="mb-0">
							<input class="category mb-0" name="category[]" id="{{ $category->id }}" type="checkbox" value="{{ $category->id }}">
							{{ $category->name }}
						</label>
					</div>
					@endforeach

					<hr class="my-2">

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

					<p class="mb-1 font-weight-bold">Brand</p>
					@foreach ($brands as $brand)
					<div class="mb-0 ml-2">
						<label class="mb-0">
							<input class="brand mb-0" name="brand[]" type="checkbox" value="{{ $brand->id }}">
							{{ $brand->name }}
						</label>
					</div>
					@endforeach

					<hr class="my-2">

					<div id="size_alphabet">
						<p class="mb-1 font-weight-bold">Size</p>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="size_alphabet mb-0" name="size_alphabet[]" type="checkbox" value="XS" @if (request()->size == "XS") checked @endif> XS
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="size_alphabet mb-0" name="size_alphabet[]" type="checkbox" value="S" @if (request()->size == "S") checked @endif> S
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="size_alphabet mb-0" name="size_alphabet[]" type="checkbox" value="M" @if (request()->size == "M") checked @endif> M
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="size_alphabet mb-0" name="size_alphabet[]" type="checkbox" value="L" @if (request()->size == "L") checked @endif> L
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="size_alphabet mb-0" name="size_alphabet[]" type="checkbox" value="XL" @if (request()->size == "XL") checked @endif> XL
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="size_alphabet mb-0" name="size_alphabet[]" type="checkbox" value="XXL" @if (request()->size == "XXL") checked @endif> XXL
							</label>
						</div>
					</div>
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
			var size_alphabet = getIds("size_alphabet[]");
			var size_number = getIds("size_number[]");
			var min = $("#amount_min").val();
    		var max = $("#amount_max").val();
			var sort = $(this).val();
			var url = $(location).attr('href');
			
			$.ajax({
				url: url,
				method: 'POST',
				data: {category:category, brand:brand, size_alphabet:size_alphabet, size_number:size_number, min:min, max:max, sort:sort, url:url},
				success: function(data){
					$('.filter_products').html(data);
				}
			})
		});

		//filter category
		$(".category, .brand, .size_alphabet, .size_number").on('click', function(){
			var category = getIds("category[]");
			var brand = getIds("brand[]");
			var size_alphabet = getIds("size_alphabet[]");
			var size_number = getIds("size_number[]");
			var min = $("#amount_min").val();
    		var max = $("#amount_max").val();
			var sort = $("#sort option:selected").text();
			var url = $(location).attr('href');

			$.ajax({
				url: url,
				method: 'POST',
				data: {category:category, brand:brand, size_alphabet:size_alphabet, size_number:size_number, min:min, max:max, sort:sort, url:url},
				success: function(data){
					$('.filter_products').html(data);
					var itemCount = $('.filter_products').html(data).find(".pro").length;
    				$('.countMen').html(itemCount);
					console.log(category)
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
				var category = getIds("category[]");
				var brand = getIds("brand[]");
				var size_alphabet = getIds("size_alphabet[]");
				var size_number = getIds("size_number[]");
				var min = $("#amount_min").val();
    			var max = $("#amount_max").val();
				var sort = $("#sort option:selected").text();
				var url = $(location).attr('href');
			
				$.ajax({
					url: url,
					method: 'POST',
					data: {category:cataegory, brand:brand, size_alphabet:size_alphabet, size_number:size_number, min:min, max:max, sort:sort, url:url},
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
			window.location='{{ route("men") }}';
		});

		$("#size_alphabet").hide();
		$("#size_number").hide();

		$(".category").on('click', function() {
			let catIds = getIds("category[]");

			$.each(catIds, function(index, value){
				if (value == '1' || value == '2') {
					$("#size_alphabet").show();
				} else if (value == '3') {
					$("#size_number").show();
				// } else if (value == '1' || value == '2' || value == '3') {
				// 	$("#size_alphabet").show();
				// 	$("#size_number").show();
				} else if (empty(value)) {
					$("#size_alphabet").hide();
					$("#size_number").hide();
				}
			});
		});
	});
</script>

@endsection