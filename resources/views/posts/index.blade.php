<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-title">
                        <h4>All Post</h4>
                        <a href="javascript:void(0)" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em; width:100px;" id="createNewCompany">Add Post</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Isi Content</th>
                                    <th width="200px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                    <tr>
                                        <td>{{ $post->judul }}</td>
                                        <td>{{ Str::limit($post->isi, 100) }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" id="editCompany" data-id="'+value.id+'" data-toggle="modal" data-target="#modal-id">Edit</a>
                                            <a class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" id="deleteCompany" data-id="'+value.id+'">Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-info">
                                        There's no Post
                                    </div>
                                @endforelse
                                
                            </tbody>
                        </table>

                        @include('posts.modal')
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    {{-- <script src="/js/ajax.js"></script> --}}
    {{-- <script>
        var url_getData = <?php echo json_encode(route('data')) ?>;
    </script> --}}
</body>
</html>