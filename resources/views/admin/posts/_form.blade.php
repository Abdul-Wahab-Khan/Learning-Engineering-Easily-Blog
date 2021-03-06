@php
    $posted_at = old('posted_at') ?? (isset($post) ? $post->posted_at->format('Y-m-d\TH:i') : null);
@endphp

<div class="form-group">
    {!! Form::label('title', __('posts.attributes.title')) !!}
    {!! Form::text('title', null, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'required']) !!}

    @error('title')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('author_id', __('posts.attributes.author')) !!}
        {!! Form::select('author_id', $users, null, ['class' => 'form-control' . ($errors->has('author_id') ? ' is-invalid' : ''), 'required']) !!}

        @error('author_id')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('thumbnail_id', __('posts.attributes.thumbnail')) !!}
        {!! Form::select('thumbnail_id', $media, null, ['placeholder' => __('posts.placeholder.thumbnail'), 'class' => 'form-control' . ($errors->has('thumbnail_id') ? ' is-invalid' : '')]) !!}

        @error('thumbnail_id')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group col-md-*">
        <label for="post_type">{{__('posts.post_type')}}</label>
        <select name="post_type" id="post_type" aria-placeholder="{{__('posts.post_type')}}" class="form-control {{($errors->has('thumbnail_id') ? ' is-invalid' : '')}}">
            @foreach ($categories as $type)
                <option value="{{$type->id}}">
                    {{$type->name}}
                </option>
            @endforeach
        </select>
        @error('post_type')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

</div>




<div class="form-group">
    {!! Form::label('content', __('posts.attributes.content')) !!}
    {!! Form::textarea('content', null, ['class' => 'form-control trumbowyg-form' . ($errors->has('content') ? ' is-invalid' : ''), 'required']) !!}

    @error('content')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
