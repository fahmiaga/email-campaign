@extends('layout.app')
@section('title', 'Emails ')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4>Send Mail Campaign</h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <form action="{{ url('email/send-email') }}" method="POST">
                @csrf
                <div class="form-group col-md-4">
                    <label for="inputState">Groups</label>
                    <select id="category" class="selectpicker form-control" name="group[]" multiple data-live-search="true">
                        @foreach ($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->group_name }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-primary mt-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{ asset('assets/multiple-select') }}/css/bootstrap-select.min.css" rel="stylesheet">
@endpush

@push('scripts')
    $('.selectpicker').selectpicker();
    <script type="text/javascript" src="{{ asset('assets/multiple-select') }}/js/bootstrap-select.min.js"></script>
@endpush
