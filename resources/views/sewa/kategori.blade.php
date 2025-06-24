@extends('layout')
@section('judul','Sewa - '.$kategori->nama_sewa)
@section('konten')

<section class="hero is-success is-medium is-bold" style="background-image: url('{{ asset('images/bgtas.jpg') }}'); background-size: 100% 100%; background-repeat: no-repeat; background-position: center center;">
    <div class="hero-body">
        <div class="container has-text-centered">
            <p class="title has-text-black">.</p>
            <p class="subtitle has-text-black">.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <table class="table is-fullwidth is-striped is-hoverable">
            <thead>
                <tr>
                    <th class="has-text-centered">No</th>
                    <th class="has-text-centered">Id Tas</th>
                    <th class="has-text-centered">Nama Pembeli</th>
                    <th class="has-text-centered">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                <tr>
                    <td class="has-text-centered">{{ $index + 1 }}</td>
                    <td class="has-text-centered">{{ $item->id_barang }}</td>
                    <td class="has-text-centered">{{ $item->nama_sewa }}</td>
                    <td class="has-text-centered">
                        <a href="/sewa/{{ $item->id }}" class="button is-small is-info">
                            <span class="icon"><i class="fas fa-info-circle"></i></span>
                            <span>Selengkapnya</span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection
