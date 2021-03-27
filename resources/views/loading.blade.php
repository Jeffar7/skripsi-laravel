<!-- THIS PAGE ONLY FOR TESTING PURPOSE -->

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="text-center">
                <h5 class="text-left" style="margin-left: 1rem;">Home > Brands</h5>
                <div>
                <img src="images/localpride.png" class="img-fluid p-3" alt="" height="40rem">
            </div>
            </div>

            <p>Browse Our Brand</p>
            @foreach($groups as $letter => $group)
            <ul>

                <li>{{ $letter }}</li>

                @foreach($group as $category)
                    <a href="/brands/{{$category->id}}">{{ $category['name'] }}</a>
        
                @endforeach

            </ul>

@endforeach


                </table>
            </div>
        </div>
    </div>
</div>
@endsection
