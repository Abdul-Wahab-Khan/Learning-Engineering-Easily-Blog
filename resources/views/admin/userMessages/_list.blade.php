<table class="table table-striped table-sm table-responsive-md">
    <caption>{{ trans_choice('posts.count', $userMessages->total()) }}</caption>
    <thead>
        <tr>
            <th>@lang('userMessages.attributes.subject')</th>
            <th>@lang('userMessages.attributes.user')</th>
            <th>@lang('userMessages.attributes.message')</th>
            <th>@lang('userMessages.attributes.created_at')</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($userMessages as $userMessage)
            <tr>
                <td>{{ $userMessage->subject }}</td>
                <td>{{ $userMessage->user->name }}</td>
                <td>{{ $userMessage->message }}</td>
                <td>{{ humanize_date($userMessage->created_at, 'd/m/Y H:i:s') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $userMessages->links() }}
</div>
