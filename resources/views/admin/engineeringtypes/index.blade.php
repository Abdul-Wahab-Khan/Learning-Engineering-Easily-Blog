@extends('admin.layouts.app')

@section('content')

    <div class="page-header d-flex justify-content-between">
        <div class="page-header">
            <h1>@lang('dashboard.eigneeringTypes')</h1>
          </div>
        <a href="{{ route('admin.engineeringtypes.create') }}" class="btn btn-primary btn-sm align-self-center">
            <i class="fa fa-plus-square" aria-hidden="true"></i> @lang('forms.actions.add')
        </a>
    </div>
    @include ('admin/engineeringtypes/_list')
@endsection
