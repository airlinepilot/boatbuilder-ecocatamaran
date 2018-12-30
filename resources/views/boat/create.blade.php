@extends('layout')
@section('content')
<!-- Horizontal Form Block -->
<div class="block">
    <!-- Horizontal Form Title -->
    <div class="block-title">
        <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">Borderless</a>
        </div>
        <h2>New Boat</h2>
    </div>
    <!-- END Horizontal Form Title -->

    <!-- Horizontal Form Content -->
<script type="text/javascript">
	var boat_names = [@foreach($boats as $boat) "{{$boat->name}}", @endforeach];
	function check_boat_name() {
		var name = $("#boat_name").val();
		if ($.inArray(name.trim(),boat_names) !== -1) {
			alert("The boat is exist!!");
			$("#submit-button").prop('disabled', true);
		}else {
			$("#submit-button").prop('disabled', false);
		}
}	
</script>
    <form action="/boat/store" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
    	@csrf
        <div class="form-group">
            <label class="col-md-3 control-label" for="example-hf-email"> Name</label>
            <div class="col-md-7">
                <input id="boat_name" type="text" name="name" class="form-control" required onchange="check_boat_name()" required>
                <span class="help-block">ex: Boat Template 1</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="example-file-input">Image</label>
            <div class="col-md-9">
                <input type="file" id="example-file-input" name="image" required>
            </div>
        </div>
        @foreach ($parts as $part)
        <div class="form-group">
            <label class="col-md-3 control-label" for="example-chosen-multiple">{{ $part->name }}</label>
            <div class="col-md-7">
                <select  name="items[]" class="select-chosen" data-placeholder="Choose a {{ $part->name }}.." style="width: 250px;" multiple required>
                	@foreach ($part->items as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="example-chosen-multiple">Default {{ $part->name }}</label>
            <div class="col-md-7">
                <select id="example-select2" name="defaultitems[]" class="select-select2" style="width: 100%;" data-placeholder="Choose {{ $part->name }}" required>
                	<option></option>
                	@foreach ($part->items as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @endforeach
        <div class="form-group form-actions">
            <div class="col-md-9 col-md-offset-3">
                <button id="submit-button" type="submit" class="btn btn-effect-ripple btn-primary" disabled>Submit</button>
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
        <!-- Load and execute javascript code used only in this page -->
        <script src="/js/pages/formsComponents.js"></script>
        <script>$(function(){ FormsComponents.init(); });</script>
@endsection