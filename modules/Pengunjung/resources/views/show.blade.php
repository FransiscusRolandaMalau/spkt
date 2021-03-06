@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::pengunjung.index') }}"></x-backlink>

    <x-panel title="Detil Pengunjung">
        <table class="ui table definition">
        <tr><td>No. Identitas</td><td>{{ $pengunjung->no_identitas }}</td></tr>
        <tr><td>Upload Identitas</td><td><img src="{{ $pengunjung->takeImage }}" alt="Foto" width="150"></td></tr>
        <tr><td>Nama Lengkap</td><td>{{ $pengunjung->nama_lengkap }}</td></tr>
        <tr><td>Email Address</td><td>{{ $pengunjung->email }}</td></tr>
        <tr><td>Jenis Kelamin</td><td>{{ $pengunjung->jenis_kelamin ? "Perempuan" : "Laki-laki" }}</td></tr>
        <tr><td>Alamat</td><td>{{ $pengunjung->alamat }}</td></tr>
        <tr><td>No. Telepon</td><td>{{ $pengunjung->no_hp }}</td></tr>
        </table>
    </x-panel>

@stop
