@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.employee.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.employee.fields.name') }}
                    </th>
                    <td>
                        {{ $employee->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.employee.fields.description') }}
                    </th>
                    <td>
                        {!! $employee->document !!}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.employee.fields.price') }}
                    </th>
                    <td>
                        ${{ $employee->email }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Roles
                    </th>
                    <td>
                        @foreach($employee->roles as $id => $roles)
                            <span class="label label-info label-many">{{ $roles->title }}</span>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
