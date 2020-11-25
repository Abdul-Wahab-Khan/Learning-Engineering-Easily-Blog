@extends('admin.layouts.app')

@section('content')
    <h1>@lang('engineering.create')</h1>

    <form action="/admin/engineeringtypes" method="post">
        @csrf

        <div class="form-group">
            <label>{{__('engineering.attributes.name')}}</label>
            <input type="text" name="name" class="form-control {{$errors->has('name') ? ' is-invalid' : ''}}" required>
            @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="pull-left">
            <a href="/admin/engineeringtypes" class="btn btn-secondary"> {{__('forms.actions.back')}}</a>
            <input type="submit" value="{{__('forms.actions.save')}}" class="btn btn-primary">
        </div>
    </form>

@endsection
