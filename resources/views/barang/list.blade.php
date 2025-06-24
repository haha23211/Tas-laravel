@extends('layout')
@section('judul', 'Tas')
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
        <div class="columns is-multiline">
            @foreach ($data as $index => $item)
            <div class="column is-one-quarter">
                <div class="card" style="border-radius: 10px; overflow: hidden; transition: transform 0.3s;">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            @if ($item->gambar)
                            <img src="{{ Storage::url($item->gambar) }}" alt="Gambar Barang">
                            @else
                            <img src="https://via.placeholder.com/256x256" alt="Placeholder">
                            @endif
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">{{ $item->nama_barang }}</p>
                            </div>
                        </div>

                        <div class="content">
                            <p>{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="/barang/{{ $item->id }}" class="card-footer-item has-text-info">Baca Selengkapnya</a>
                        
                        @if ($item->status == 'available')
                        <a href="/sewa/{{ $item->id }}" class="card-footer-item has-text-success">Sewa</a>
                        @endif
                    </footer>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .card:hover {
        transform: scale(1.05);
    }
    .card-footer-item {
        transition: background-color 0.3s, color 0.3s;
    }
    .card-footer-item:hover {
        background-color: #3273dc;
        color: white;
    }
</style>

@endsection
