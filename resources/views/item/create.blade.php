@extends('layout')
@section('content')
<!-- Horizontal Form Block -->
<div class="block">
    <!-- Horizontal Form Title -->
    <div class="block-title">
        <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">Borderless</a>
        </div>
        <h2>New Item</h2>
    </div>
    <!-- END Horizontal Form Title -->

    <!-- Horizontal Form Content -->
<script type="text/javascript">
	var item_names = [@foreach($items as $item) "{{$item->name}}", @endforeach];
	function check_item_name() {
		var name = $("#item_name").val();
		if ($.inArray(name.trim(),item_names) !== -1) {
			alert("The item is exist!!");
			$("#submit-button").prop('disabled', true);
		}else {
			$("#submit-button").prop('disabled', false);
		}
}	
</script>
    <form action="/item/store" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
    	@csrf
        <div class="form-group">
            <label class="col-md-3 control-label" for="example-select2"> Part</label>
            <div class="col-md-7">
                <select id="example-select2" name="part" class="select-select2" style="width: 100%;" data-placeholder="Choose part" required>
                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                    @foreach( $parts as $part)
                    <option value="{{ $part->id }}">{{$part->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="example-hf-email"> Name</label>
            <div class="col-md-7">
                <input id="item_name" type="text" name="name" class="form-control" required onchange="check_item_name()">
                <span class="help-block">ex: Motor 201</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="example-hf-email"> Link</label>
            <div class="col-md-7">
                <input type="text" name="link" class="form-control" required>
                <span class="help-block">ex: http://azmazon.com/motor102</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="example-hf-email"> Cost</label>
            <div class="col-md-7">
                <input type="number" name="cost" class="form-control" required>
                <span class="help-block">ex: 1200$</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="example-file-input">Image</label>
            <div class="col-md-9">
                <input type="file" id="example-file-input" name="image" required>
            </div>
        </div>
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