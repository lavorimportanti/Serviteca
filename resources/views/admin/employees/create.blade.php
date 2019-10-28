@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('global.employee.title_singular') }}
        </div>
        <div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
            <label for="roles">{{ trans('global.user.fields.roles') }}*
                <span class="btn btn-info btn-xs select-all">Select all</span>
                <span class="btn btn-info btn-xs deselect-all">Deselect all</span></label>
            <select name="roles[]" id="roles" class="form-control select2" multiple="multiple">
                @foreach($roles as $id => $roles)
                    <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>
                        {{ $roles }}
                    </option>
                @endforeach
            </select>
            @if($errors->has('roles'))
                <em class="invalid-feedback">
                    {{ $errors->first('roles') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('global.user.fields.roles_helper') }}
            </p>
        </div>
        <div class="card-body">
            <form action="{{ route("admin.employees.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">{{ trans('global.employee.fields.name') }}*</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($employee) ? $employee->name : '') }}">
                    @if($errors->has('name'))
                        <em class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.employee.fields.name_helper') }}
                    </p>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">{{ trans('global.employee.fields.email') }}*</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($employee) ? $employee->email : '') }}">
                    @if($errors->has('email'))
                        <em class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.employee.fields.email_helper') }}
                    </p>
                </div>
                <div class="form-group {{ $errors->has('document') ? 'has-error' : '' }}">
                    <label for="document">{{ trans('global.employee.fields.document') }}*</label>
                    <input type="text" id="document" name="document" class="form-control" value="{{ old('name', isset($employee) ? $employee->document : '') }}">
                    @if($errors->has('document'))
                        <em class="invalid-feedback">
                            {{ $errors->first('document') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.employee.fields.document_helper') }}
                    </p>
                </div>

                <div>
                    <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                </div>
            </form>
        </div>
    </div>

@endsection
