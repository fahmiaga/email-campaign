@extends('layout.app')
@section('title', 'Create new member ')
@section('content')

    <h1 class="h3 mb-4 text-gray-800">Data Member Form</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/groups/{{ request()->route('id') }}" class="btn btn-primary">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ url('group-list/store/' . request()->route('id')) }}" method="POST">
                @csrf
                <table class="table table-bordered" id="dynamicAddRemove">
                    <tr>
                        <th>Email</th>
                        <th>Action</th>
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
                        <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add
                                Email</button></td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
