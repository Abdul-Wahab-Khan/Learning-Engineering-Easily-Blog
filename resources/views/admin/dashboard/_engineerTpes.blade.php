<x-card class="bg-primary text-light m-2">
    <div class="row justify-content-between">
        <i class="fa fa-comments fa-5x" aria-hidden="true"></i>
        <div class="text-right">
            <div class="huge">{{ $engineerType->count() }}</div>
            <div>{{ trans_choice('engineerType.new_comments', $engineerType->count()) }}</div>
        </div>
    </div>

    <x-slot name="footer">
        <a href="{{ route('admin.engineeringtypes.index') }}" class="d-flex justify-content-between text-light">
            <span>@lang('dashboard.details')</span>
            <span><i class="fa fa-arrow-circle-right"></i></span>
        </a>
    </x-slot>
</x-card>
