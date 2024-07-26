@extends('layout.app')

@section('title')
{{ str_replace("-"," ",ucfirst('Roles')) }}
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
                        {!! Form::model($role, ['method' => 'PATCH','route' => ['admin.roles.update', $role->id]]) !!}
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mg-b-20">
                                    <div class="card-body">
                                        <div class="main-content-label mg-b-5">
                                            <div class="form-group">
                                                <p> {{('name Roles')}}:</p>
                                                {!! Form::text('name', null, array('placeholder' => 'Name','class' =>
                                                'form-control')) !!}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- col -->
                                            <div class="col-lg-4">
                                                <ul id="treeview1">
                                                    <li><a href="#">{{('Roles')}}</a>
                                                        <ul>
                                                            <li>
                                                                @foreach($permission as $value)
                                                                <label>{{ Form::checkbox('permission[]', $value->id,
                                                                    in_array($value->id, $rolePermissions) ? true :
                                                                    false,
                                                                    array('class' => 'name')) }}
                                                                    {{ $value->name }}</label>
                                                                <br />
                                                                @endforeach
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /col -->
                                        </div>
                                        <x-admin.form.submit :route="route('admin.roles.index')"></x-admin.form.submit>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row closed -->
                    </div>
                    <!-- Container closed -->
                </div>
                <!-- main-content closed -->
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection


@section('js')
@endsection