<form action="/admin/engineeringtypes/{{$engineerType->id}}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>{{__('engineering.attributes.name')}}</label>
        <input type="text" name="name" value="{{$engineerType->name}}" class="form-control {{$errors->has('name') ? ' is-invalid' : ''}}" required>
        @error('name')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="pull-left">
        <a href="/admin/engineeringtypes" class="btn btn-secondary"> {{__('forms.actions.back')}}</a>
        <input type="submit" value="{{__('forms.actions.update')}}" class="btn btn-primary">
    </div>
</form>


{{-- {!! Form::model($engineerType, ['method' => 'DELETE', 'route' => ['admin.engineeringtypes.destroy', $comment], 'class' => 'form-inline pull-right', 'data-confirm' => __('forms.engineeringtypes.delete')]) !!}
{!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i> ' . __('engineeringtypes.delete'), ['class' => 'btn btn-link text-danger', 'name' => 'submit', 'type' => 'submit']) !!}
{!! Form::close() !!} --}}
