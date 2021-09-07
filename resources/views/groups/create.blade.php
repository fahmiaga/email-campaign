@extends('layout.app')
@section('title', 'Create new group form ')
@section('content')

    <h1 class="h3 mb-4 text-gray-800">Data Groups Form</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/groups" class="btn btn-primary"> @lang('translate.back')</a>
        </div>
        <div class="card-body">
            <form action="{{ url('groups') }}" method="POST">
                @csrf
                <div class="form-group col-md-6">
                    <label for="groupName"> @lang('translate.group_name')</label>
                    <input type="text" id="groupName" name="group_name" placeholder="Group Name..."
                        class="form-control {{ $errors->has('group_name') ? 'is-invalid' : '' }}">
                    @if ($errors->has('group_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('group_name') }}
                        </div>
                    @endif
                </div>

                <table class="table table-bordered" id="dynamicAddRemove">
                    <tr>
                        <th>Email</th>
                        <th> @lang('translate.action')</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="email[]" placeholder="Enter Email"
                                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} " />
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </td>
                        <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">
                                @lang('translate.add_email')</button></td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary"> @lang('translate.submit')</button>
            </form>
        </div>
    </div>

@endsection
