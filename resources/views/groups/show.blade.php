@extends('layout.app')
@section('title', $group->group_name)
@section('content')

    <h1 class="h3 mb-4 text-gray-800">{{ $group->group_name }} Data Group</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/groups/create" class="btn btn-primary">Add New Member</a>
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
                        @foreach ($lists as $list)
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td>{{ $list->email }}</td>
                                <td>
                                    <a href="{{ url('groups/' . $list->id) }}" class="btn btn-info"><i
                                            class="fas fa-info"></i></a>
                                    <a href="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
