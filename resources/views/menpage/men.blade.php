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
    <div class="text-center">
        <img src="../storage/images/MenPage/men.jpg" alt="" height="472px;" width="1110px;">
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-md-2 ml-3 mr-5 border border-dark">
            <p class="mb-1 pt-3 font-weight-bold">Men's ({{$productscount}})</p>
            <p class="mb-0 font-weight-bold">Categories</p>
            @foreach ($categories as $category)
            <div>
                <label>
                    <input
                        id = "reset-filter" name="category" type="checkbox" value="{{ $category->id }}"
                        @if (in_array($category->id, explode(',', request()->input('filter.category'))))
                            checked
                        @endif
                    >
                    {{ $category->name }}
                </label>
            </div>
            @endforeach
            <hr>
            <p class="mb-0 font-weight-bold">Price</p>
            <div>
                <div id="slider-range" class="price-filter-range" name="rangeInput">
                </div>

                <div style="margin:30px auto">
                    <input type="number" min=0 max="9900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" />
                    <input type="number" min=0 max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field" />
                </div>
                <!-- <button class="price-range-search" id="price-range-submit">Search</button>
                <div id="searchResults" class="search-results-block"></div> -->
            </div>
            <hr>
            <div>
            <p class="mb-0 font-weight-bold">Brands</p>
                @foreach ($brands as $brand)
                    <label class="m-checkbox">
                        <input
                            id="reset-filter" name="brand" type="checkbox" value="{{ $brand->id }}"
                            @if (in_array($brand->id, explode(',', request()->input('filter.brand'))))
                                checked
                            @endif
                        >
                        {{ $brand->name }}
                    </label>
                @endforeach
            </div>
            <div>
                <button class="btn btn-light border border-dark mt-3 mb-3" style="width:100%; background-color:white;" id="filter">
                    FILTER
                </button>
            </div>
        </div>

        <!-- Tampilan Gambar Produk -->
        <div class="col-md-9 ml-3">
            @error('no_post_result')
            <div class="text-center">
                <img src="images/empty_item.png" alt="" height="200px" width="200px">
                <p class="mb-0">Oops!</p>
                <p>{{ $message }}</p>
            <div>
            @enderror
            <div class="row">
                @foreach($products as $product)
                <div class="col-4 pt-4">
                    <!-- Gambar 1 -->
                    <div class="card" style="width: 250px; border:none;height:270px;">
                    <a href="/men-tops/detail/{{$product->id}}" style="width: 250px;height:270px;"><img src="{{asset('../storage/images/Products/' . $product->productimage)}}" width="250px;" height="270px;" alt="Image" class="card-img-top border border-dark"></a>
                    </div>
                    <div class="card px-2 border border-dark" style="width: 250px; border:none;">
                        <a href="/men-tops/detail/{{$product->id}}" style="color:black;"><p class="mt-3 mb-0 text-truncate" style="font-weight:bold;">{{$product->productname}}</p></a>
                        <a class="about-title mb-0" style="text-decoration:normal;" href="/brands/{{$product->brand->id}}">{{$product->brand->name}}</a>
                        <p style="font-weight:bold;">Rp. {{$product->productprice}}</p>
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
    function getIds(checkboxName) {
        let checkBoxes = document.getElementsByName(checkboxName);
        let ids = Array.prototype.slice.call(checkBoxes)
                        .filter(ch => ch.checked==true)
                        .map(ch => ch.value);
        return ids;
    }

    function filterResults () {
        let brandIds = getIds("brand");

        let catagoryIds = getIds("category");

        let href = 'men?';

        if(brandIds.length) {
            href += 'filter[brand]=' + brandIds;
        }

        if(catagoryIds.length) {
            href += '&filter[category]=' + catagoryIds;
        }

        document.location.href=href;
    }

    document.getElementById("filter").addEventListener("click", filterResults);
</script>
<script>
    $(document).ready(function(){
	    // $('#price-range-submit').hide();
	    // $("#min_price,#max_price").on('change', function () {
        //     $('#price-range-submit').show();
        //     var min_price_range = parseInt($("#min_price").val());
        //     var max_price_range = parseInt($("#max_price").val());

        //     if (min_price_range > max_price_range) {
        //         $('#max_price').val(min_price_range);
        //     }

        //     $("#slider-range").slider({
        //         values: [min_price_range, max_price_range]
        //     });
        // });


	    $("#min_price,#max_price").on("paste keyup", function () {                                        
            $('#price-range-submit').show();
            var min_price_range = parseInt($("#min_price").val());
            var max_price_range = parseInt($("#max_price").val());
	  
	        if(min_price_range == max_price_range){
			    max_price_range = min_price_range + 100;
                $("#min_price").val(min_price_range);		
                $("#max_price").val(max_price_range);
            }

            $("#slider-range").slider({
                values: [min_price_range, max_price_range]
            });
        });


	    $(function () {
            $("#slider-range").slider({
                range: true,
                orientation: "horizontal",
                min: 0,
                max: 10000,
                values: [0, 10000],
                step: 100,

                slide: function (event, ui) {
                    if (ui.values[0] == ui.values[1]) {
                        return false;
                    }
		  
                    $("#min_price").val(ui.values[0]);
                    $("#max_price").val(ui.values[1]);
                }
	        });

            $("#min_price").val($("#slider-range").slider("values", 0));
            $("#max_price").val($("#slider-range").slider("values", 1));
        });

	    $("#slider-range,#price-range-submit").click(function () {
            var min_price = $('#min_price').val();
            var max_price = $('#max_price').val();

	    $("#searchResults").text("Here List of products will be shown which are cost between " + min_price  +" "+ "and" + " "+ max_price + ".");
	});
});

</script>
@endsection