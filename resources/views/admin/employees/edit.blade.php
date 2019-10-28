@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('global.employee.title_singular') }}
        </div>

        <div class="card-body">
            <form action="{{ route("admin.employees.update", [$employee->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                <div class="form-group {{ $errors->has('document') ? 'has-error' : '' }}">
                    <label for="document">{{ trans('global.employee.fields.document') }}</label>
                    <textarea id="document" name="document" class="form-control ">{{ old('document', isset($employee) ? $employee->document : '') }}</textarea>
                    @if($errors->has('document'))
                        <em class="invalid-feedback">
                            {{ $errors->first('document') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.employee.fields.document') }}
                    </p>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">{{ trans('global.employee.fields.email') }}</label>
                    <input type="number" id="email" name="email" class="form-control" value="{{ old('email', isset($employee) ? $employee->email : '') }}" step="0.01">
                    @if($errors->has('email'))
                        <em class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('global.employee.fields.email_helper') }}
                    </p>
                </div>
                <div>
                    <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                </div>
            </form>
        </div>
    </div>

@endsection
