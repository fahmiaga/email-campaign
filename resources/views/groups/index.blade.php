@extends('layout.app')
@section('title', 'Groups ')
@section('content')

    <h1 class="h3 mb-4 text-gray-800">Data Groups</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/groups/create" class="btn btn-primary">Add New Group</a>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Group Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Group Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($groups as $group)
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td>{{ $group->group_name }}</td>
                                <td>
                                    <a href="{{ url('groups/' . $group->id) }}" class="btn btn-info"><i
                                            class="fas fa-info"></i></a>
                                    <button type="button" class="btn btn-warning"><i class="fas fa-edit"
                                            data-toggle="modal" data-target="#modal-update{{ $group->id }}"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"
                                            data-toggle="modal" data-target="#modal-danger{{ $group->id }}"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /.modal delete-->
    @foreach ($groups as $group)

        <!-- Modal -->
        <div class="modal fade" id="modal-danger{{ $group->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <form action="{{ url('groups/' . $group->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            {{-- <button type="submit" class="btn btn-outline">{{ __('Yes') }}</button> --}}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- /.modal update-->
    @foreach ($groups as $group)

        <!-- Modal -->
        <div class="modal fade" id="modal-update{{ $group->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Record</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('groups/' . $group->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="modal-body">
                            <input type="text" class="form-control {{ $errors->has('group_name') ? 'is-invalid' : '' }}"
                                name="group_name" value="{{ $group->group_name }}">
                            @if ($errors->has('group_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('group_name') }}
                                </div>
                            @endif
                        </div>
                        <div class="modal-footer">
                            {{-- <button type="submit" class="btn btn-outline">{{ __('Yes') }}</button> --}}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
            </div>
        </div>
        </div>
    @endforeach

@endsection
