<table class="table table-striped table-sm table-responsive-md">
    {{-- <caption>{{ trans_choice('engineeringTypes.count', $engineeringTypes->total()) }}</caption> --}}
    <thead>
        <tr>
            <th>@lang('engineering.attributes.name')</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($engineeringTypes as $engineeringType)
            <tr>
                <td>{{ link_to_route('admin.engineeringtypes.edit', Str::limit($engineeringType->name, 50), $engineeringType) }}</td>
                <td>
                    <a href="{{ route('admin.engineeringtypes.edit', $engineeringType) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>


                    <form action="/admin/engineeringtypes" method="post" class="form-inline">
                        @csrf
                        @method('Delete')
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{--
<div class="d-flex justify-content-center">
    {{ $engineeringTypes->links() }}
</div> --}}
