@extends('layout')
@section('content')
<!-- Horizontal Form Block -->
<div class="block">
    <!-- Horizontal Form Title -->
    <div class="block-title">
        <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">Borderless</a>
        </div>
        <h2>New Part</h2>
    </div>
    <!-- END Horizontal Form Title -->

    <!-- Horizontal Form Content -->
<script type="text/javascript">
	@php
	$editting_part_name = $part->name;
	@endphp
	var part_names = [@foreach($parts as $part) @if ($part->name != $editting_part_name) "{{$part->name}}", @endif @endforeach];
	function check_part_name() {
		var name = $("#part_name").val();
		if ($.inArray(name.trim(),part_names) !== -1) {
			alert("The part is exist!!");
			$("#submit-button").prop('disabled', true);
		}else {
			$("#submit-button").prop('disabled', false);
		}
}	
</script>
    <form action="/part/update/{{ $part->id }}" method="post" class="form-horizontal form-bordered">
    	@csrf
        <div class="form-group">
            <label class="col-md-3 control-label" for="example-hf-email">Part Name</label>
            <div class="col-md-9">
                <input id="part_name" type="text" name="name" class="form-control" required onchange="check_part_name()" value="{{ $part->name }}">
                <span class="help-block">ex: Motor</span>
            </div>
        </div>
        <div class="form-group form-actions">
            <div class="col-md-9 col-md-offset-3">
                <button id="submit-button" type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
            </div>
        </div>
    </form>
    <!-- END Horizontal Form Content -->
</div>
<!-- END Horizontal Form Block -->
@endsection
@section('script')
@parent

@endsection