@extends('layouts.app')
@section('title', 'Pengguna')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection
@section('header')
<div class="page-title page-title-small">
    <h2><a href="{{ route('dashboard') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Data Pengguna</h2>
    <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="{{ Storage::url(Auth::user()->foto) }}"></a>
</div>
@endsection
@section('content')
<div class="content mt-0 mb-0">
    <div class="list-group list-custom-small list-icon-0">
        <a href="#" data-menu="tambah">
            <i class="fa fa-plus color-blue1-dark"></i>
            <span>Tambah</span>
            <i class="fa fa-angle-right"></i>
        </a>
    </div>      
</div>
<div class="content mb-2">
    <div class="table-responsive">
        <table id="tabel" class="table table-borderless text-center rounded-sm shadow-l display nowrap" style="overflow: hidden; width:100%">
            <thead>
                <tr class="bg-gray1-dark">
                    <th scope="col" class="color-theme">#</th>
                    <th scope="col" class="color-theme">Nama</th>
                    <th scope="col" class="color-theme">Emal</th>
                    <th scope="col" class="color-theme">Hak Akses</th>
                    <th scope="col" class="color-theme">Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
@section('modal')
<div id="tambah" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="370" data-menu-effect="menu-over">
    <div class="content mb-0">
        <h1 class="font-700 mb-0">Tambah Pengguna</h1>
        <form id="add-form" action="{{ route('pengguna.store') }}" method="POST">
            @csrf
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Nama</span>
                <em>(required)</em>
                <input class="form-control" type="name" name="nama" placeholder="Nama">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Email</span>
                <em>(required)</em>
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Password</span>
                <em>(required)</em>
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="input-style input-style-2 input-required">
                <span>Hak Akses</span>
                <em><i class="fa fa-angle-down"></i></em>
                <select class="form-control" name="level">
                    <option value="" disabled selected>Pilih</option>
                    <option value="admin">Admin</option>
                    <option value="operator">Operator</option>
                </select>
            </div>
            <div class="input-style input-required">
                <span class="color-highlight">Foto</span>
                <em>(not required)</em>
                <input class="form-control" type="file" name="foto">
            </div>
            <br>
            <div class="form-button">
                <input type="submit" onclick="$('#add-form').submit()" class="btn bg-highlight text-uppercase font-900 btn-m btn-full rounded-sm  shadow-xl contactSubmitButton" value="Simpan" />
            </div>
        </form>
    </div>
</div>
<div id="edit" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="370" data-menu-effect="menu-over">
    <div class="content mb-0">
        <h1 class="font-700 mb-0">Edit Pengguna</h1>
        <form id="edit-form" action="{{ route('pengguna.update') }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="id">
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Nama</span>
                <em>(required)</em>
                <input class="form-control" type="name" name="nama" id="nama" placeholder="Nama">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Email</span>
                <em>(required)</em>
                <input class="form-control" type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Password</span>
                <em>(not required)</em>
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="input-style input-style-2 input-required">
                <span>Hak Akses</span>
                <em><i class="fa fa-angle-down"></i></em>
                <select class="form-control" name="level" id="level">
                    <option value="" disabled selected>Pilih</option>
                    <option value="admin">Admin</option>
                    <option value="operator">Operator</option>
                </select>
            </div>
            <div class="input-style input-required">
                <span class="color-highlight">Foto</span>
                <em>(not required)</em>
                <input class="form-control" type="file" name="foto">
            </div>
            <br>
            <div class="form-button">
                <input type="submit" onclick="$('#edit-form').submit()" class="btn bg-highlight text-uppercase font-900 btn-m btn-full rounded-sm  shadow-xl contactSubmitButton" value="Simpan" />
            </div>
        </form>
    </div>
</div>
<div id="lihat" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="370" data-menu-effect="menu-over">
    <div class="content mb-0">
        <h1 class="font-700 mb-0">Lihat Pengguna</h1>
        <fieldset disabled>
        <form>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Nama</span>
                <em>(required)</em>
                <input class="form-control" type="name" name="nama" id="nama-lihat" placeholder="Nama">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Email</span>
                <em>(required)</em>
                <input class="form-control" type="email" name="email" id="email-lihat" placeholder="Email">
            </div>
            <div class="input-style input-style-2 input-required">
                <span>Hak Akses</span>
                <em><i class="fa fa-angle-down"></i></em>
                <select class="form-control" name="level" id="level-lihat">
                    <option value="" disabled selected>Pilih</option>
                    <option value="admin">Admin</option>
                    <option value="operator">Operator</option>
                </select>
            </div>
        </form>
        </fieldset>
    </div>
</div>

<div id="hapus" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="200" data-menu-effect="menu-over">
    <h2 class="text-center font-700 mt-3 pt-1">Anda Yakin?</h2>
    <p class="boxed-text-l">
        Data akan terhapus!
    </p>
    <div class="row mr-3 ml-3">
        <div class="col-6">
            <a href="#" id="btn-delete" class="close-menu btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-green1-dark">Hapus</a>
        </div>
        <div class="col-6">
            <a href="#" data-menu="menu-warning-1" class="close-menu btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-red1-dark">Batal</a>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
$(function() {
    $('#tabel').DataTable({
        processing: true,
        serverSide: true,
        scrollX: true,
        ajax: '{!! route('pengguna.data') !!}',
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'nama', name: 'nama' },
            { data: 'email', name: 'email' },
            { data: 'level', name: 'level' },
            { data: 'aksi', name: 'aksi', className: 'text-center' }
        ]
    });
    $('#link-pengguna').click(function() {
        location.reload();
    });
});
</script>
<script>
function editData(id){
    var url = "{{ route('pengguna.show', ":id") }}";
    url = url.replace(':id', id);
    $.ajax({
        url : url,
        type : "GET",
        datatype : "JSON",
        success : function(data){
            $('#id').val(data.id);
            $('#nama').val(data.nama);
            $('#nama').trigger('keyup');
            $('#email').val(data.email);
            $('#email').trigger('keyup');
            $('#level').val(data.level.nama_level).change();
            $('#level').trigger('keyup');
            $('#foto').text(data.foto);
        }
    });
}

function lihatData(id){
    var url = "{{ route('pengguna.show', ":id") }}";
    url = url.replace(':id', id);
    $.ajax({
        url : url,
        type : "GET",
        datatype : "JSON",
        success : function(data){
            $('#nama-lihat').val(data.nama);
            $('#nama-lihat').trigger('keyup');
            $('#email-lihat').val(data.email);
            $('#email-lihat').trigger('keyup');
            $('#level-lihat').val(data.level.nama_level).change();
            $('#level-lihat').trigger('keyup');
        }
    });
}

function hapusData(id){
    var url = "{{ route('pengguna.destroy', ":id") }}";
    url = url.replace(':id', id);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#btn-delete').click(function (){
        $.ajax({
            url : url,
            type : "POST",
            datatype : "JSON",
            success : function(data){
                location.reload();
            }
        });
    });
} 
</script>
@endsection