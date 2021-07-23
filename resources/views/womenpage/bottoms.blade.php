@extends('layouts.app')

@section('title','TokoLokal | Women - Bottom')

@section('content')
<div class="loader"></div>
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
			<li class="breadcrumb-item"><a href="/women" class="text-dark">Women</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">Bottom</li>
        </ol>
    </nav>

	<div class="col-md-12 mb-1 p-0">
		<div class="card rounded-0 border-0 con-photo">
			<img src="{{ asset('../storage/images/Women Page/women-bottoms.jpg') }}" class="rounded-0 image-cat"
				alt="Men Display Picture" width="1110px" height="472px" style="object-fit: cover;">
			<div class="middle-cat">
				<div class="text-cat">BOTTOMS FOR WOMEN</div>
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
						<select id="sort" name="sort">
							<option value="product_relevance">Relevance</option>
							<option value="product_price_low_high">Price: Low to High</option>
							<option value="product_price_high_low">Price: High to Low</option>
							<option value="product_latest">Latest Arrivals</option>
						</select>
					</form>
				</div>
			</div>
		</div>
	</div>

    <div class="row">
		<div class="col-3">
			<div class="card border">
				<div class="bg-light border-bottom filter-header">
					<p class="mb-1 pt-2 px-2 font-weight-bold">Women Bottoms ({{$productscount}})</p>			
				</div>

				<input type="hidden" name="min_price" class="min_price" value="{{ $minprice }}" id="min_price"/>
				<input type="hidden" name="max_price" class="max_price" value="{{ $maxprice }}" id="max_price"/>

				<div class="bg-light border-bottom filter-header">
					<p class="my-2 px-2 font-weight-bold" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">
						<i class="fas fa-chevron-up my-1 more-less"></i>
						Price
					</p>
				</div>
				<div class="collapse multi-collapse show" id="multiCollapseExample2">
					<div class="px-2 mb-2">
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="amount_min" style="border:0; color:#d64d2f; font-weight:bold; width:100%;" class="minprice" name="min">
							</div>
							<div class="col-md-6">
								<input type="text" id="amount_max" style="border:0; color:#d64d2f; font-weight:bold; width:100%;" class="maxprice text-right" name="max">
							</div>
						</div>
						<div id="slider-range" class="mx-2"></div>
					</div>
				</div>

				<div class="bg-light border-bottom filter-header">
					<p class="my-2 px-2 font-weight-bold" data-toggle="collapse" href="#multiCollapseExample6" role="button" aria-expanded="false" aria-controls="multiCollapseExample6">
						<i class="fas fa-chevron-down my-1 more-less"></i>
						Color
					</p>
				</div>
				<div class="collapse multi-collapse" id="multiCollapseExample6">
					@foreach ($colors as $color)
					<div class="mt-1 mb-0 ml-2">
						<label class="mb-0">
							<input class="color mb-0" name="color[]" id="{{ $color->productcolor }}" type="checkbox" value="{{ $color->productcolor }}">
							{{ $color->productcolor }}
						</label>
					</div>
                    @endforeach
				</div>

				<div class="bg-light border-bottom filter-header">
					<p class="my-2 px-2 font-weight-bold" data-toggle="collapse" href="#multiCollapseExample7" role="button" aria-expanded="false" aria-controls="multiCollapseExample7">
						<i class="fas fa-chevron-down my-1 more-less"></i>
						Material
					</p>
				</div>
				<div class="collapse multi-collapse" id="multiCollapseExample7">
					@foreach ($materials as $material)
					<div class="mt-1 mb-0 ml-2">
						<label class="mb-0">
							<input class="material mb-0" name="material[]" id="{{ $material->productmaterial }}" type="checkbox" value="{{ $material->productmaterial }}">
							{{ $material->productmaterial }}
						</label>
					</div>
					@endforeach
				</div>

				<div class="bg-light border-bottom filter-header">
					<p class="my-2 px-2 font-weight-bold" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">
						<i class="fas fa-chevron-down my-1 more-less"></i>
						Brand
					</p>
				</div>
				<div class="collapse multi-collapse" id="multiCollapseExample3">
					@foreach ($brands as $brand)
					<div class="mt-1 mb-0 ml-2">
						<label class="mb-0">
							<input class="brand mb-0" name="brand[]" type="checkbox" value="{{ $brand->id }}">
							{{ $brand->name }}
						</label>
					</div>
					@endforeach
				</div>

				<div id="size_alphabet">
					<div class="bg-light border-bottom filter-header">
						<p class="p-2 font-weight-bold m-0" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4">
							<i class="fas fa-chevron-down my-1 more-less"></i>
							Size
						</p>
					</div>
					<div class="collapse multi-collapse" id="multiCollapseExample4">
						<div class="mt-1 mb-0 ml-2">
							<label class="mb-0">
								<input class="size_alphabet mb-0" name="size_alphabet[]" type="checkbox" value="XS" @if (request()->size == "XS") checked @endif> XS
							</label>
						</div>
						<div class="mt-1 mb-0 ml-2">
							<label class="mb-0">
								<input class="size_alphabet mb-0" name="size_alphabet[]" type="checkbox" value="S" @if (request()->size == "S") checked @endif> S
							</label>
						</div>
						<div class="mt-1 mb-0 ml-2">
							<label class="mb-0">
								<input class="size_alphabet mb-0" name="size_alphabet[]" type="checkbox" value="M" @if (request()->size == "M") checked @endif> M
							</label>
						</div>
						<div class="mt-1 mb-0 ml-2">
							<label class="mb-0">
								<input class="size_alphabet mb-0" name="size_alphabet[]" type="checkbox" value="L" @if (request()->size == "L") checked @endif> L
							</label>
						</div>
						<div class="mt-1 mb-0 ml-2">
							<label class="mb-0">
								<input class="size_alphabet mb-0" name="size_alphabet[]" type="checkbox" value="XL" @if (request()->size == "XL") checked @endif> XL
							</label>
						</div>
						<div class="mt-1 mb-0 ml-2">
							<label class="mb-0">
								<input class="size_alphabet mb-0" name="size_alphabet[]" type="checkbox" value="XXL" @if (request()->size == "XXL") checked @endif> XXL
							</label>
						</div>
					</div>
				</div>
			</div>
			<div>
				<input type="button" value="RESET FILTER" id="btnUncheckAll" class="btn btn-light border border-dark mt-3 mb-3" style="width:100%; background-color:white;" />
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
@endsection