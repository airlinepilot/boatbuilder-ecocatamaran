@extends('layout')
@section('content')
                       <!-- Table Styles Header -->
                        <div class="content-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="header-section">
                                        <h1>Items</h1>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs">
                                    <div class="header-section">
                                        <ul class="breadcrumb breadcrumb-top">
                                            <li>Item</li>
                                            <li><a href="">List</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Table Styles Header -->

                        <!-- Datatables Block -->
                        <!-- Datatables is initialized in js/pages/uiTables.js -->
                        <div class="block full">
                            <div class="block-title">
                                <h2>Items</h2>
                            </div>
                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 50px;">#</th>
                                            <th class="text-center" >NAME</th>
                                            <th class="text-center" style="width: 35px;">COST</th>
                                            <th class="text-center" style="width: 30%;">IMAGE</th>
                                            <th class="text-center" style="width: 75px;">LINK</th>
                                            <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($items as $item)
                                        <tr>
                                            <td class="text-center">{{ $item->id }}</td>
                                            <td class="text-center"><strong>{{ $item->name }}</strong></td>
                                            <td>{{ $item->cost }}$</td>
                                            <td><img src="/img/{{ $item->image }}" style="width: 100%"></td>
                                            <td class="text-center">
                                            	<a href="{{ $item->link}}"><i class="fa fa-eye"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="/item/edit/{{ $item->id }}" data-toggle="tooltip" title="Edit item" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                                <form id="remove_{{ $item->id }}" action="/item/{{ $item->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                </form>
                                                <a onclick="$('#remove_{{ $item->id }}').submit()" href="javascript:void(0)" data-toggle="tooltip" title="Delete Item" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Datatables Block -->
@endsection
@section('script')
@parent
        <!-- Load and execute javascript code used only in this page -->
        <script src="/js/pages/uiTables.js"></script>
        <script>$(function(){ UiTables.init(); });</script>
@endsection