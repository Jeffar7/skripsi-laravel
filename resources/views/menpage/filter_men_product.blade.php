@error('no_post_result')
<div class="text-center">
    <img src="images/empty_item.png" alt="" height="200px" width="200px">
    <p class="mb-0">Oops!</p>
    <p>{{ $message }}</p>
</div>
@enderror
<div class="row">
    @foreach($products as $p)
    <a href="/product/detail/{{$p->id}}" style="color: black">
        <div class="pro col-4">     
            <!-- Gambar 1 -->
            <div class="card border-0 productFormat">
                <a href="/product/detail/{{$p->id}}" class="productFormat"><img src="{{asset('../storage/images/Products/' . $p->productimage)}}"   alt="Image" class="card-img-top border-0 productFormat"></a>
            </div>
            <div class="card px-2 mb-4 border-0" style="width: 100%; background-color: #f3f7f9">
                <a href="/product/detail/{{$p->id}}" style="color:black;"><p class="mt-3 mb-0 text-truncate font-weight-bold">{{$p->productname}}</p></a>
                <a class="about-title mb-0" style="color:#757575;" href="/brands/{{$p->brand->id}}">{{$p->brand->name}}</a>
                <p class="font-weight-bold mt-2 priceText" style="color: black">Rp. {{number_format($p->productprice)}}</p>
            </div>
            <!-- Akhir Gambar 1 -->
        </div>
    </a>
    @endforeach
</div>

<div class="row justify-content-around mt-5">
    {{ $products->links() }}
</div>
