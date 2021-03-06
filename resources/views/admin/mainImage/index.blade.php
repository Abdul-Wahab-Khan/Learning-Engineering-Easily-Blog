@extends('admin.layouts.app')

@section('content')

<h1>@lang('media.create')</h1>

    {!! Form::open(['route' => ['admin.mainImage.store'], 'method' =>'POST', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('image', __('media.attributes.image')) !!}
            {!! Form::file('image', ['accept' => 'image/*', 'class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'required']) !!}

            @error('image')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>


        {{ link_to_route('admin.media.index', __('forms.actions.back'), [], ['class' => 'btn btn-secondary']) }}
        {!! Form::submit(__('forms.actions.save'), ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection
