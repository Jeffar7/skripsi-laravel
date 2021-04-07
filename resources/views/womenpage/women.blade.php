@extends('layouts.app')

@section('title','TokoLokal | Women')

@section('content')
<div class="container py-4">
    <div><p class="text-left">Home > Women</p></div>
    <div class="text-center">
        <img src="image/men.jpg" alt="" height="472px;" width="1110px;">
    </div>
</div>

<div class="container mb-5">
    <div class="row">
    <div class="col-md-2 ml-3 mr-5 border border-dark">
            <p class="mb-1 pt-3 font-weight-bold">Women's ({{$productscount}})</p>
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
            <button class="btn-filter mt-3 mb-3" href="#" id="filter">
                FILTER
            </button>
        </div>
        <!-- Akhir Drop Down -->
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
                    <a href="/men-tops/detail/{{$product->id}}" style="width: 250px;height:270px;"><img src="{{asset('uploads/products/' . $product->productimage)}}" width="250px;" height="270px;" alt="Image" class="card-img-top border border-dark"></a>
                    </div>
                    <div class="card" style="width: 250px; border:none;">
                        <a href="/men-tops/detail/{{$product->id}}" style="color:black;"><p class="mt-3 mb-0" style="font-weight:bold;">{{$product->productname}}</p></a>
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
@endsection