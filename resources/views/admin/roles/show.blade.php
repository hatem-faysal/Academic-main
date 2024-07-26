@extends('layout.app')

@section('title')
{{ str_replace("-"," ",ucfirst(('Show Roles'))) }}
@endsection

@section('css')
@endsection

@section('content')

<div class="content-body">
    <x-admin.route :route="route('admin.roles.index')" name="{{ ('Index Roles') }}"></x-admin.route>
    <!-- container starts -->
    <div class="container-fluid">
        <!-- row -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">

                <x-admin.crud name="{{ $type??'' }} Form Roles"></x-admin.crud>
                <div class="card-body">
                    <div class="basic-form">
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mg-b-20">
                                    <div class="card-body">
                                        <div class="main-content-label mg-b-5">
                                            <div class="pull-right">
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('admin.roles.index') }}">{{('Back')}}</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- col -->
                                            <div class="col-lg-4">
                                                <ul id="treeview1">
                                                    <li><a>{{ $role->name }}</a>
                                                        <ul>
                                                            @if(!empty($rolePermissions))
                                                            @foreach($rolePermissions as $v)
                                                            <li>{{ $v->name }}</li>
                                                            @endforeach
                                                            @endif
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /col -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row closed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('js')
@endsection