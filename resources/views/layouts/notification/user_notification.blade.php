{{-- <a href="#">Someone has registered</a> --}}
<a href="#">{{auth()->user()->first_name.' '.auth()->user()->last_name}} has just registered</a>
{{-- {{route('')}}">{{$notification->data['user']['name']}}</a> --}}

{{-- creating inbox notification page --}}