@extends('layouts.app')
@section('title', 'Fasilitas')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection
@section('header')
<div class="page-title page-title-small">
    <h2><a href="{{ route('dashboard') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Data Fasilitas</h2>
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
                    <th scope="col" class="color-theme">Nama Fasilitas</th>
                    <th scope="col" class="color-theme">Kondisi Fasilitas</th>
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
        <h1 class="font-700 mb-0">Tambah Fasilitas</h1>
        <form id="add-form" action="{{ route('fasilitas.store') }}" method="POST">
            @csrf
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Nama Fasilitas</span>
                <em>(required)</em>
                <input class="form-control" type="name" name="nama_fasilitas" placeholder="Nama Fasilitas">
            </div>
            <div class="input-style input-style-2 input-required">
                <span>Deskripsi Fasilitas</span>
                <em>(required)</em>
                <textarea  class="form-control" name="deskripsi_fasilitas" placeholder="Deskripsi Fasilitas"></textarea>
            </div>
            <div class="input-style input-style-2 input-required">
                <span>Kondisi Fasilitas</span>
                <em><i class="fa fa-angle-down"></i></em>
                <select class="form-control" name="kondisi_fasilitas">
                    <option value="default" disabled selected>Pilih</option>
                    <option value="Baik">Baik</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Buruk">Buruk</option>
                </select>
            </div>
            <div class="form-button">
                <input type="submit" onclick="$('#add-form').submit()" class="btn bg-highlight text-uppercase font-900 btn-m btn-full rounded-sm  shadow-xl contactSubmitButton" value="Simpan" />
            </div>
        </form>
    </div>
</div>
<div id="edit" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="370" data-menu-effect="menu-over">
    <div class="content mb-0">
        <h1 class="font-700 mb-0">Edit Fasilitas</h1>
        <form id="update-form" action="{{ route('fasilitas.update') }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="id">
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight">Nama Fasilitas</span>
                <em>(required)</em>
                <input class="form-control" type="name" name="nama_fasilitas" id="nama_fasilitas" placeholder="Nama Fasilitas">
            </div>
            <div class="input-style input-style-2 input-required">
                <span>Deskripsi Fasilitas</span>
                <em>(required)</em>
                <textarea  class="form-control" name="deskripsi_fasilitas" id="deskripsi_fasilitas" placeholder="Deskripsi Fasilitas"></textarea>
            </div>
            <div class="input-style input-style-2 input-required">
                <span>Kondisi Fasilitas</span>
                <em><i class="fa fa-angle-down"></i></em>
                <select class="form-control" name="kondisi_fasilitas" id="kondisi_fasilitas">
                    <option value="default" disabled selected>Pilih</option>
                    <option value="Baik">Baik</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Buruk">Buruk</option>
                </select>
            </div>
            <div class="form-button">
                <input type="submit" onclick="$('#update-form').submit()" class="btn bg-highlight text-uppercase font-900 btn-m btn-full rounded-sm  shadow-xl contactSubmitButton" value="Simpan" />
            </div>
        </form>
    </div>
</div>
<div id="lihat" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="370" data-menu-effect="menu-over">
    <div class="content mb-0">
        <h1 class="font-700 mb-0">Lihat Fasilitas</h1>
        <fieldset disabled>
            <form id="update-form" action="{{ route('pengguna.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight">Nama Fasilitas</span>
                    <em>(required)</em>
                    <input class="form-control" type="name" name="nama_fasilitas" id="nama_fasilitas-lihat" placeholder="Nama Fasilitas">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span>Deskripsi Fasilitas</span>
                    <em>(required)</em>
                    <textarea  class="form-control" name="deskripsi_fasilitas" id="deskripsi_fasilitas-lihat" placeholder="Deskripsi Fasilitas"></textarea>
                </div>
                <div class="input-style input-style-2 input-required">
                    <span>Kondisi Fasilitas</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select class="form-control" name="kondisi_fasilitas" id="kondisi_fasilitas-lihat">
                        <option value="default" disabled selected>Pilih</option>
                        <option value="Baik">Baik</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Buruk">Buruk</option>
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
        ajax: '{!! route('fasilitas.data') !!}',
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'nama_fasilitas', name: 'nama_fasilitas' },
            { data: 'kondisi_fasilitas', name: 'kondisi_fasilitas' },
            { data: 'aksi', name: 'aksi', className: 'text-center' }
        ]
    });
});
</script>
<script>
function editData(id){
    var url = "{{ route('fasilitas.show', ":id") }}";
    url = url.replace(':id', id);
    $.ajax({
        url : url,
        type : "GET",
        datatype : "JSON",
        success : function(data){
            $('#id').val(data.id);
            $('#nama_fasilitas').val(data.nama_fasilitas);
            $('#nama_fasilitas').trigger('keyup');
            $('#deskripsi_fasilitas').val(data.deskripsi_fasilitas);
            $('#deskripsi_fasilitas').trigger('keyup');
            $('#kondisi_fasilitas').val(data.kondisi_fasilitas).change();
            $('#kondisi_fasilitas').trigger('keyup');
        }
    });
}

function lihatData(id){
    var url = "{{ route('fasilitas.show', ":id") }}";
    url = url.replace(':id', id);
    $.ajax({
        url : url,
        type : "GET",
        datatype : "JSON",
        success : function(data){
            $('#nama_fasilitas-lihat').val(data.nama_fasilitas);
            $('#nama_fasilitas-lihat').trigger('keyup');
            $('#deskripsi_fasilitas-lihat').val(data.deskripsi_fasilitas);
            $('#deskripsi_fasilitas-lihat').trigger('keyup');
            $('#kondisi_fasilitas-lihat').val(data.kondisi_fasilitas).change();
            $('#kondisi_fasilitas-lihat').trigger('keyup');
        }
    });
}

function hapusData(id){
    var url = "{{ route('fasilitas.destroy', ":id") }}";
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