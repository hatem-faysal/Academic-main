@extends('layout.app')

@section('title')
{{ str_replace("-"," ",ucfirst(('teacher'))) }}
@endsection

@section('css')
@endsection

@section('content')


<!--breadcrumb-->
<x-admin.breadcrumb nameOne="Users" nameTwo="Teacher"></x-admin.breadcrumb>

<!--end breadcrumb-->

<div class="card">
    <div class="card-body"></div>
        <div class="d-lg-flex align-items-center mb-4 gap-3">

            <x-admin.search :route="route('admin.admins.index')"></x-admin.search>
            <div class="ms-auto"><a href="{{ route('admin.teacher.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i
                        class="bx bxs-plus-square"></i>Add New Teacher</a></div>
        </div>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead class="table-light">
                   <tr>
                        <x-admin.table th1='#'
                            th2="{{ ('First Name') }}"
                            th3="{{ ('Last Name') }}"
                            th4="{{ ('email') }}"
                            th6="{{ ('Status') }}"
                            th7="{{ ('date') }}" 
                            th8="Action">
                        </x-admin.table>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $admin)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="ms-2">
                                        <h6 class="mb-0 font-14">#{{++$key}}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $admin->firstname }}</td>
                            <td>{{ $admin->lastname }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>
                                <x-admin.status :status="$admin->status">
                                </x-admin.status>
                            </td>
                            <td>{{ $admin->created_at->toFormattedDateString('Y-m-d') }}
                            </td>
                            {{-- <td>
                                <x-admin.edit
                                    :route="route('admin.teacher.edit', $admin->id)">
                                </x-admin.edit>
                                <x-admin.delete-model :id="$admin->id"
                                    :name="$admin->name"
                                    :route="route('admin.teacher.destroy', $admin->id)">
                                </x-admin.delete-model>
                            </td> --}}
                            <td>
                                <div class="d-flex order-actions">
                                    <x-admin.edit
                                        :route="route('admin.teacher.edit', $admin->id)">
                                    </x-admin.edit>
                                    <x-admin.delete-model :id="$admin->id"
                                        :name="$admin->name"
                                        :route="route('admin.teacher.destroy', $admin->id)">
                                    </x-admin.delete-model>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection


@section('js')
@endsection