@error('no_post_result')
<div class="text-center">
    <img src="images/empty_item.png" alt="" height="200px" width="200px">
    <p class="mb-0">Oops!</p>
    <p>{{ $message }}</p>
</div>
@enderror
<div class="row">
    @foreach($products as $p)
    <div class="pro col-4">
        <!-- Gambar 1 -->
        <div class="card" style="width: 250px; border:none;height:270px;">
        <a href="/product/detail/{{$p->id}}" style="width: 250px;height:270px;"><img src="{{asset('../storage/images/Products/' . $p->productimage)}}" width="250px;" height="270px;" alt="Image" class="card-img-top border border-dark"></a>
        </div>
        <div class="card px-2 mb-4 border border-dark" style="width: 250px; border:none;">
            <a href="/product/detail/{{$p->id}}" style="color:black;"><p class="mt-3 mb-0 text-truncate" style="font-weight:bold;">{{$p->productname}}</p></a>
            <a class="about-title mb-0" style="text-decoration:normal;" href="/brands/{{$p->brand->id}}">{{$p->brand->name}}</a>
            <p style="font-weight:bold;">Rp. {{number_format($p->productprice)}}</p>
        </div>
        <!-- Akhir Gambar 1 -->
    </div>
    @endforeach
</div>