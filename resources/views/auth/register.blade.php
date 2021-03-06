@extends('layouts.app')

@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-6">
        <h1>@lang('auth.register')</h1>

        {!! Form::open(['route' => 'register', 'role' => 'form', 'method' => 'POST']) !!}
            <div class="form-group">
                {!! Form::label('name', __('validation.attributes.name'), ['class' => 'control-label']) !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'required', 'autofocus']) !!}

                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('email', __('validation.attributes.email'), ['class' => 'control-label']) !!}
                {!! Form::email('email', old('email'), ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'required']) !!}

                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group{{ $errors->has('engineer_type') ? ' has-error' : '' }}">
                <label for="engineer_type" class="control-label">Engineering Type</label>

                    <select id="engineer_type" type="engineer_type" class="form-control" name="engineer_type" value="{{ old('engineer_type') }}" required>
                        @foreach ($engineerTypes as $engineerType)
                        <option value="{{$engineerType->id}}">{{$engineerType->name}}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('engineer_type'))
                        <span class="help-block">
                            <strong>{{ $errors->first('engineer_type') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group">
                {!! Form::label('password', __('validation.attributes.password'), ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'required']) !!}

                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('password_confirmation', __('validation.attributes.password_confirmation'), ['class' => 'control-label']) !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : ''), 'required']) !!}

                @error('password_confirmation')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::submit(__('auth.register'), ['class' => 'btn btn-primary']) !!}
                {{ link_to('/login', __('auth.login'), ['class' => 'btn btn-link'])}}
            </div>

        {!! Form::close() !!}
    </div>
</div>
@endsection
