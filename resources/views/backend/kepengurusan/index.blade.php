@extends('layouts.app')
@section('title', 'Kepengurusan')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection
@section('header')
<div class="page-title page-title-small">
    <h2><a href="{{ route('dashboard') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Data Kepengurusan</h2>
    <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="{{ asset('azure/code/images/avatars/5s.png') }}"></a>
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
                    <th scope="col" class="color-theme">Kode Inventaris</th>
                    <th scope="col" class="color-theme">Nama Inventaris</th>
                    <th scope="col" class="color-theme">Kondisi Inventaris</th>
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
        <h1 class="font-700 mb-0">Tambah Kepengurusan</h1>
        <form id="add-form" action="{{ route('kepengurusan.store') }}" method="POST">
            @csrf
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Nama</span>
                <em>(required)</em>
                <input class="form-control" type="name" name="nama" placeholder="Nama">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Tempat Lahir</span>
                <em>(required)</em>
                <input class="form-control" type="name" name="tempat_lahir" placeholder="Tempat Lahir">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Tanggal Lahir</span>
                <em>(required)</em>
                <input class="form-control" type="date" name="tanggal_lahir" placeholder="Tanggal Lahir">
            </div>
            <div class="input-style input-style-2 input-required">
                <span>Jenis Kelamin</span>
                <em><i class="fa fa-angle-down"></i></em>
                <select class="form-control" name="jenis_kelamin">
                    <option value="default" disabled selected>Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Jabatan</span>
                <em>(required)</em>
                <input class="form-control" type="name" name="jabatan" placeholder="Jabatan">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Periode</span>
                <em>(required)</em>
                <input class="form-control" type="name" name="periode" placeholder="Periode">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Nomor HP</span>
                <em>(required)</em>
                <input class="form-control" type="number" name="no_hp" placeholder="Nomor HP">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Email</span>
                <em>(required)</em>
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-button">
                <input type="submit" onclick="$('#add-form').submit()" class="btn bg-highlight text-uppercase font-900 btn-m btn-full rounded-sm  shadow-xl contactSubmitButton" value="Simpan" />
            </div>
        </form>
    </div>
</div>
<div id="edit" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="370" data-menu-effect="menu-over">
    <div class="content mb-0">
        <h1 class="font-700 mb-0">Edit Kepengurusan</h1>
        <form id="update-form" action="{{ route('kepengurusan.update') }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="id">
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Nama</span>
                <em>(required)</em>
                <input class="form-control" type="name" name="nama" id="nama" placeholder="Nama">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Tempat Lahir</span>
                <em>(required)</em>
                <input class="form-control" type="name" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Tanggal Lahir</span>
                <em>(required)</em>
                <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir">
            </div>
            <div class="input-style input-style-2 input-required">
                <span>Jenis Kelamin</span>
                <em><i class="fa fa-angle-down"></i></em>
                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="default" disabled selected>Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Jabatan</span>
                <em>(required)</em>
                <input class="form-control" type="name" name="jabatan" id="jabatan" placeholder="Jabatan">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Periode</span>
                <em>(required)</em>
                <input class="form-control" type="name" name="periode" id="periode" placeholder="Periode">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Nomor HP</span>
                <em>(required)</em>
                <input class="form-control" type="number" name="no_hp" id="no_hp" placeholder="Nomor HP">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Email</span>
                <em>(required)</em>
                <input class="form-control" type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-button">
                <input type="submit" onclick="$('#update-form').submit()" class="btn bg-highlight text-uppercase font-900 btn-m btn-full rounded-sm  shadow-xl contactSubmitButton" value="Simpan" />
            </div>
        </form>
    </div>
</div>
<div id="lihat" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="370" data-menu-effect="menu-over">
    <div class="content mb-0">
        <h1 class="font-700 mb-0">Lihat Kepengurusan</h1>
        <fieldset disabled>
            <form id="update-form" action="#" method="POST">
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Nama</span>
                    <em>(required)</em>
                    <input class="form-control" type="name" name="nama" id="nama-lihat" placeholder="Nama">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Tempat Lahir</span>
                    <em>(required)</em>
                    <input class="form-control" type="name" name="tempat_lahir" id="tempat_lahir-lihat" placeholder="Tempat Lahir">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Tanggal Lahir</span>
                    <em>(required)</em>
                    <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir-lihat" placeholder="Tanggal Lahir">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span>Jenis Kelamin</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin-lihat">
                        <option value="default" disabled selected>Pilih</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Jabatan</span>
                    <em>(required)</em>
                    <input class="form-control" type="name" name="jabatan" id="jabatan-lihat" placeholder="Jabatan">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Periode</span>
                    <em>(required)</em>
                    <input class="form-control" type="name" name="periode" id="periode-lihat" placeholder="Periode">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Nomor HP</span>
                    <em>(required)</em>
                    <input class="form-control" type="number" name="no_hp" id="no_hp-lihat" placeholder="Nomor HP">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Email</span>
                    <em>(required)</em>
                    <input class="form-control" type="email" name="email" id="email-lihat" placeholder="Email">
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
        ajax: '{!! route('kepengurusan.data') !!}',
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'nama', name: 'nama' },
            { data: 'jabatan', name: 'jabatan' },
            { data: 'periode', name: 'periode' },
            { data: 'aksi', name: 'aksi', className: 'text-center' }
        ]
    });
});
</script>
<script>
function editData(id){
    var url = "{{ route('kepengurusan.show', ":id") }}";
    url = url.replace(':id', id);
    $.ajax({
        url : url,
        type : "GET",
        datatype : "JSON",
        success : function(data){
            $('#id').val(data.id);
            $('#nama').val(data.nama);
            $('#nama').trigger('keyup');
            $('#tempat_lahir').val(data.tempat_lahir);
            $('#tempat_lahir').trigger('keyup');
            $('#tanggal_lahir').val(data.tanggal_lahir);
            $('#tanggal_lahir').trigger('keyup');
            $('#jenis_kelamin').val(data.jenis_kelamin).change();
            $('#jenis_kelamin').trigger('keyup');
            $('#jabatan').val(data.jabatan);
            $('#jabatan').trigger('keyup');
            $('#periode').val(data.periode);
            $('#periode').trigger('keyup');
            $('#no_hp').val(data.no_hp);
            $('#no_hp').trigger('keyup');
            $('#email').val(data.email);
            $('#email').trigger('keyup');
        }
    });
}

function lihatData(id){
    var url = "{{ route('kepengurusan.show', ":id") }}";
    url = url.replace(':id', id);
    $.ajax({
        url : url,
        type : "GET",
        datatype : "JSON",
        success : function(data){
            $('#nama-lihat').val(data.nama);
            $('#nama-lihat').trigger('keyup');
            $('#tempat_lahir-lihat').val(data.tempat_lahir);
            $('#tempat_lahir-lihat').trigger('keyup');
            $('#tanggal_lahir-lihat').val(data.tanggal_lahir);
            $('#tanggal_lahir-lihat').trigger('keyup');
            $('#jenis_kelamin-lihat').val(data.jenis_kelamin).change();
            $('#jenis_kelamin-lihat').trigger('keyup');
            $('#jabatan-lihat').val(data.jabatan);
            $('#jabatan-lihat').trigger('keyup');
            $('#periode-lihat').val(data.periode);
            $('#periode-lihat').trigger('keyup');
            $('#no_hp-lihat').val(data.no_hp);
            $('#no_hp-lihat').trigger('keyup');
            $('#email-lihat').val(data.email);
            $('#email-lihat').trigger('keyup');
        }
    });
}

function hapusData(id){
    var url = "{{ route('kepengurusan.destroy', ":id") }}";
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