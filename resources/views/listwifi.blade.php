<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>List Wifi YPK YAHYA </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="text-secondary">LIST WIFI YPK</h1>
        </div>

        <div class="clearfix mb-3">
            <div class="float-left mr-2">
                <form class="form-inline" action="{{ route('import') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="imported_file" />
                            <label class="custom-file-label">Pilih File</label>
                        </div>
                    </div>
                    <button class="btn btn-info" type="submit">Import</button>
                </form>
            </div>
            <div class="float-left">
                <form action="{{ route('export') }}" enctype="multipart/form-data">
                    <button class="btn btn-dark" type="submit">Export</button>
                </form>
            </div>
            <div class="float-right">
                <form method="POST" action="{{ route('DeleteList') }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Delete Data</button>
                </form>
            </div>
        </div>

        <table id="WifiTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>UNIT</th>
                    <th>LOKASI</th>
                    <th>SSID</th>
                    <th>PASSWORD</th>
                    <th>IP ADDRESS</th>
                </tr>
            </thead>
            @foreach ($wifi as $item)
                <tbody>
                    <tr>
                        <td>{{ $item->unit }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->ssid }}</td>
                        <td>{{ $item->password }}</td>
                        <td>{{ $item->ipaddress }}</td>
                    </tr>
                </tbody>
            @endforeach
            <tfoot>
                <tr>
                    <th>UNIT</th>
                    <th>LOKASI</th>
                    <th>SSID</th>
                    <th>PASSWORD</th>
                    <th>IP ADDRESS</th>
                </tr>
            </tfoot>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#WifiTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'colvis',
                    'excel',
                    'print'
                ]
            });
        });
    </script>


</body>

</body>

</html>
