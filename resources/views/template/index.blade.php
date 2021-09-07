@extends('layout.app')
@section('title', 'Template ')
@section('content')

    <h1 class="h3 mb-4 text-gray-800">Data Groups</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/template/create" class="btn btn-primary">Add New Template</a>
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
                            <th>Template Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Template Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($templates as $template)
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td>{{ $template->template_name }}</td>
                                <td>
                                    <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"
                                            data-toggle="modal" data-target="#modal-danger{{ $template->id }}"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- /.modal delete-->
    @foreach ($templates as $template)

        <!-- Modal -->
        <div class="modal fade" id="modal-danger{{ $template->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                        <form action="{{ url('template/' . $template->id) }}" method="POST">
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
@endsection
