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
                    <select id="category" class="selectpicker form-control {{ $errors->has('group') ? 'is-invalid' : '' }}"
                        name="group[]" multiple data-live-search="true">
                        @foreach ($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->group_name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('group'))
                        <div class="invalid-feedback">
                            {{ $errors->first('group') }}
                        </div>
                    @endif
                </div>
                <div class=" form-group col-md-4">
                    <label for="">Subject</label>
                    <input type="text" class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}"
                        placeholder="Subject..." name="subject">
                    @if ($errors->has('subject'))
                        <div class="invalid-feedback">
                            {{ $errors->first('subject') }}
                        </div>
                    @endif
                </div>
                <div class=" form-group col-md-4">
                    <label for="">Body</label>
                    <textarea type="text" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
                        placeholder="Body..." name="body"></textarea>
                    @if ($errors->has('body'))
                        <div class="invalid-feedback">
                            {{ $errors->first('body') }}
                        </div>
                    @endif
                </div>
                <button class="btn btn-primary mt-2 ml-3">Submit</button>
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
