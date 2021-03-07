@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-2">
        <div class="card-body text-center">
          <h2 v-pre class="card-title mb-0">{{ $user->name }}</h2>
          <small class="card-subtitle mb-2 text-muted">{{ $user->email }}</small>
            <br />
          @profile($user)
            {{ link_to_route('users.edit', __('users.edit'), [], ['class' => 'btn btn-primary btn-sm float-right']) }}
          @endprofile
      </div>
    </div>
  </div>

@endsection
