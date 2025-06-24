@extends('layout')
@section('judul', $data->nama_sewa)
@section('konten')


<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-three-quarters">
                <div class="card receipt-card" style="overflow: hidden; transition: transform 0.3s;">
                    <header class="card-header">
                        <p class="card-header-title">
                            Detail Pembelian Tas
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <table class="table is-fullwidth is-bordered is-hoverable">
                                <tbody>
                                    <tr>
                                        <th>Nama Tas</th>
                                        <td>{{ $data->kategori ? $data->kategori->nama_barang : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Pembeli</th>
                                        <td>{{ $data->nama_sewa }}</td>
                                    </tr>
									
                                    <tr>
                                        <th>Harga Total</th>
                                        <td>{{ $data->harga_sewa }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gambar</th>
                                        <td>
                                            @if($data->gambar)
                                                <div class="image-container">
                                                    <img src="{{ asset('storage/' . $data->gambar) }}" alt="Gambar Pemeriksaan">
                                                </div>
                                            @else
                                                <p>Gambar tidak tersedia</p>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <button class="button is-primary is-fullwidth" onclick="window.print()">Print Receipt</button>
            </div>
        </div>
    </div>
</section>

@endsection

<style>
.hero {
    background-image: url('{{ asset('images/download1.jpg') }}') !important;
    background-size: cover !important;
    background-position: center !important;
}

.hero .title, .hero .subtitle {
    color: black !important;
}

.receipt-card {
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.receipt-card .card-header {
    background-color: #3273dc;
    color: white;
}

.table th, .table td {
    padding: 10px;
    border: 1px solid #3273dc;
}

.image-container {
    display: flex;
    justify-content: center;
}

.image-container img {
    max-width: 100%;
    height: auto;
    border: 1px solid #ddd;
    padding: 5px;
    background-color: #fff;
}

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
