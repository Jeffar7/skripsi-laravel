@extends('layouts.app')

@section('title','Testing Page')

@section('content')
<!-- Testing Only -->
<select class="div-toggle-test" data-target=".my-info-1">
  <option value="orange" data-show=".citrus">Orange</option>
  <option value="apple" data-show=".pome">Apple</option>
</select>

<div class="my-info-1">
  <div class="citrus hide">Citrus is...</div>
  <div class="pome hide">A pome is...</div>
</div>

<script>
$(document).on('change', '.div-toggle-test', function() {
  var target = $(this).data('target');
  var show = $("option:selected", this).data('show');
  $(target).children().addClass('hide');
  $(show).removeClass('hide');
});
$(document).ready(function(){
	$('.div-toggle-test').trigger('change');
});
</script>
@endsection