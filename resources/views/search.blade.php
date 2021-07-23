@extends('layouts.app')

@section('title','Testing Page')

@section('content')
<div class="container py-4">
	<div class="row">
		<div class="col">
			<p class="text-left" style="font-weight:bold;">Search result : "{{ $search }}"</p>
		</div>
		<div class="col text-right">
			<div class="row">
				<div class="col px-0">
					<p class="" style="font-weight:bold;">Sort By</p>
				</div>

				<div class="col-sm-3 text-left">
					<form name="sortProducts" id="sortProducts" action="{{ route('search') }}" method="GET">
						<input type="hidden" name="allsearch" value="{{ request()->allsearch }}" />
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
				<p class="mb-1 pt-2 font-weight-bold">Products ({{$productcount}})</p>
				<input type="hidden" name="min_price" class="min_price" value="{{ $minprice }}" id="min_price"/>
				<input type="hidden" name="max_price" class="max_price" value="{{ $maxprice }}" id="max_price"/>
				<form name="filterProducts" id="filterProducts" action="{{ route('search') }}" method="GET">
					<input type="hidden" name="allsearch" value="{{ request()->allsearch }}" id="allsearch"/>
					<input type="hidden" name="sort" value="{{ request()->sort }}" />
					<p class="mb-1 font-weight-bold">Categories</p>
					@foreach ($categories as $category)
					<div class="mb-0 ml-2">
						<label class="mb-0">
							<input class="mb-0" name="category[]" type="checkbox" value="{{ $category->id }}" onChange="this.form.submit()" 
							@if (in_array($category->id, $checked)) checked @endif>
							{{ $category->name }}
						</label>
					</div>
					@endforeach

					<hr class="my-2">

					<p class="mb-1 font-weight-bold">Gender</p>
					@foreach ($gender as $gender)
					<div class="mb-0 ml-2">
						<label class="mb-0">
							<input class="mb-0" name="gender[]" type="checkbox" value="{{ $gender->id }}" onChange="this.form.submit()" 
							@if (in_array($gender->id, $checkedGender)) checked @endif>
							{{ $gender->productgender }}
						</label>
					</div>
					@endforeach

					<hr class="my-2">

					<p class="mb-0 font-weight-bold">Price</p>
					<div class="row">
						<div class="col-md-6">
							<input type="text" value="{{ request('minprice') }}" id="amount_min" style="border:0; color:#d64d2f; font-weight:bold; width:100%;" class="minprice" name="minprice" onChange="this.form.submit()">
						</div>
						<div class="col-md-6">
							<input type="text" value="{{ request('maxprice') }}" id="amount_max" style="border:0; color:#d64d2f; font-weight:bold; width:100%;" class="maxprice text-right" name="maxprice" onChange="this.form.submit()">
						</div>
					</div>
  					<div id="slider-range" class="mx-2"></div>

					<hr class="my-2">

					<p class="mb-1 font-weight-bold">Brand</p>
					@foreach ($brands as $brand)
					<div class="mb-0 ml-2">
						<label class="mb-0">
							<input class="mb-0" name="brand[]" type="checkbox" value="{{ $brand->id }}" onChange="this.form.submit()" 
							@if (in_array($brand->id, $checkedBrand)) checked @endif>
							{{ $brand->name }}
						</label>
					</div>
					@endforeach

					<hr class="my-2">

					<p class="mb-1 font-weight-bold">Size</p>
					<div id="size">
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="mb-0" name="size" type="checkbox" value="XS" onChange="this.form.submit()" @if (request()->size == "XS") checked @endif> XS
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="mb-0" name="size" type="checkbox" value="S" onChange="this.form.submit()" @if (request()->size == "S") checked @endif> S
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="mb-0" name="size" type="checkbox" value="M" onChange="this.form.submit()" @if (request()->size == "M") checked @endif> M
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="mb-0" name="size" type="checkbox" value="L" onChange="this.form.submit()" @if (request()->size == "L") checked @endif> L
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="mb-0" name="size" type="checkbox" value="XL" onChange="this.form.submit()" @if (request()->size == "XL") checked @endif> XL
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="mb-0" name="size" type="checkbox" value="XXL" onChange="this.form.submit()" @if (request()->size == "XXL") checked @endif> XXL
							</label>
						</div>
						<div class="mb-0 ml-2">
							<label class="mb-0">
								<input class="mb-0" name="size" type="checkbox" value="others" onChange="this.form.submit()" @if (request()->size == "others") checked @endif> Others
							</label>
						</div>
					</div>
					
					<div class="row">
					</div>
					<div>
						<input type="button" value="RESET FILTER" id="btnUncheckAll" class="btn btn-light border border-dark mt-3 mb-3" style="width:100%; background-color:white;" />
					</div>
				</form>
			</div>
		</div>
        <!-- Akhir Drop Down -->
        <!-- Tampilan Gambar Produk -->
        <div class="col-9">
			@error('no_post_result')
			<div class="text-center">
				<img src="images/empty_item.png" alt="" height="200px" width="200px">
				<p class="mb-0">Oops!</p>
				<p>{{ $message }} Please try and submit another keyword.</p>
			</div>
			@enderror
            <div class="row">
                @foreach($product as $p)
                <div class="col-4">
                    <!-- Gambar 1 -->
                    <div class="card" style="width: 250px; border:none;height:270px;">
                    <a href="/product/detail/{{$p->id}}" style="width: 250px;height:270px;"><img src="{{asset('../storage/images/Products/' . $p->productimage)}}" width="250px;" height="270px;" alt="Image" class="card-img-top border border-dark"></a>
                    </div>
                    <div class="card px-2 mb-4 border border-dark" style="width: 250px; border:none;">
                        <a href="/product/detail/{{$p->id}}" style="color:black;"><p class="mt-3 mb-0 text-truncate" style="font-weight:bold;">{{$p->productname}}</p></a>
                        <a class="about-title mb-0" style="text-decoration:normal;" href="/brands/{{$p->brandid}}">{{$p->name}}</a>
                        <p style="font-weight:bold;">Rp. {{number_format($p->productprice)}}</p>
                    </div>
                    <!-- Akhir Gambar 1 -->
                </div>
                @endforeach
            </div>
        </div>
        <!--AKhir Tampilan Gambar Produk -->
    </div>
</div>

<script>
	$(document).ready(function(){
		$("#sort").on('change', function(){
			this.form.submit();
		});

		$('#btnUncheckAll').click(function () {
			$('input[type=checkbox]').each(
				function (index, checkbox) {
				if (index == 0 || index != 0) {
					checkbox.checked = false;
				}
			});
		});

		$("#btnUncheckAll").on('click', function(){
			var allsearch = $("#allsearch").val();
			window.location='{{ route("search") }}' + '?allsearch=' + allsearch;
		});
	});
</script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
	var min = parseInt($(this).find('.min_price').val());
	var max = parseInt($(this).find('.max_price').val());
	var minPrice = parseInt($(this).find('.minprice').val()) ? parseInt($(this).find('.minprice').val()) : min;
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
			change: function() {
                $("#filterProducts").submit();
            }
    	});
    	$("#amount_min").val($("#slider-range").slider("values", 0));
    	$("#amount_max").val($("#slider-range").slider("values", 1));
    	$("#amount_min").change(function() {
    		$("#slider-range").slider("values", 0, $("#amount_min").val());
    	});
    	$("#amount_max").change(function() {
    		$("#slider-range").slider("values", 1, $("#amount_max").val());
    	})
    });
</script>
@endsection