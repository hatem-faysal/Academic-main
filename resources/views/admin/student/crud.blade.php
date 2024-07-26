@extends('layout.app')

@section('title')
{{ str_replace("-"," ",ucfirst($type.' Student')) }}
@endsection

@section('css')
@endsection

@section('content')

<div class="content-body">
    <x-admin.route :route="route('admin.admins.index')" name="{{ ('Index Student') }}"></x-admin.route>
    <!-- container starts -->
    <div class="container-fluid">
        <!-- row -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">

                <x-admin.crud name="{{ $type??'' }} {{ ('Form Student') }}"></x-admin.crud>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="{{$action}}">
                            @csrf
                            @method($method)
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="First Name">
                                    </x-admin.form.label-first>

                                    <x-admin.form.input old="firstname"
                                        name="firstname" type="text"
                                        placeholder="First Name"
                                        :value="$admin->firstname??''"></x-admin.form.input>

                                    <x-admin.form.label-end
                                        name="Please Enter Student First Name">
                                    </x-admin.form.label-end>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="Last Name">
                                    </x-admin.form.label-first>

                                    <x-admin.form.input old="lastname"
                                        name="lastname" type="text"
                                        placeholder="Last Name"
                                        :value="$admin->lastname??''"></x-admin.form.input>

                                    <x-admin.form.label-end
                                        name="Please Enter Student Last Name">
                                    </x-admin.form.label-end>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="Email"></x-admin.form.label-first>
                                    <x-admin.form.input old="email" :value="$admin->email??''" name="email" type="email"
                                        placeholder="Example@test.com"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter Admin First Name">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="{{ ('Password') }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.input old="password" name="password" type="password"
                                        placeholder="*********"></x-admin.form.input>
                                    <x-admin.form.label-end name="{{ ('Please Enter Admin Password') }}">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="{{ ('State') }}">
                                    </x-admin.form.label-first>
                                    @if (isset($admin))
                                    <x-admin.form.state :model="$admin" name="status"></x-admin.form.state>
                                        @else
                                    <x-admin.form.state  name="status"></x-admin.form.state>
                                    @endif
                                    <x-admin.form.label-end name="{{ ('Please Choose State') }}">
                                    </x-admin.form.label-end>
                                </div>

                            
                                    <input type="hidden" value="Student" name="roles">
              
                            </div>
                            <x-admin.form.submit :route="route('admin.student.index')"></x-admin.form.submit>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('js')
@endsection