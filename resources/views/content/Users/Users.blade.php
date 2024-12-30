@extends('layouts/contentNavbarLayout')

@section('title', 'Users')


@section('page-style')
<!-- Tambahkan Bootstrap dan DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
@endsection

@section('vendor-script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
@endsection

@section('page-script')
<script>
  var baseUrl = "{{ url('/') }}/";
</script>
@vite('resources/assets/js/users.js')
@endsection

@section('content')
<!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">Data Users</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table id="usersTable" class="table table-bordered text-center align-middle">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Jabatan</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
</div>
<!--/ Bordered Table -->
@endsection
