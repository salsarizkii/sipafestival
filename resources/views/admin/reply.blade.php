@extends('admin.layouts.main')

@section('content')
<div class="card m-3 rounded-4 bg-white border-white shadow">
    <div class="container bg-white p-5 rounded shadow-sm">
        <h4 class="mb-4">Balas Email</h4>
    
        <!-- Informasi Email yang Diterima -->
        <div class="mb-4">
          <h6>Informasi Pesan Diterima:</h6>
          <dt class="col-sm-3">Alamat Email Penerima</dt>
          <dd class="col-sm-9">penerima@example.com</dd>
    
          <dt class="col-sm-3">Nama Penerima</dt>
          <dd class="col-sm-9">Budi Santoso</dd>
    
          <dt class="col-sm-3">Subjek Pesan yang Diterima</dt>
          <dd class="col-sm-9">Permintaan Informasi Produk</dd>
    
          <dt class="col-sm-3">Isi Pesan yang Diterima</dt>
          <dd class="col-sm-9">Halo, saya ingin mengetahui lebih lanjut tentang produk terbaru Anda. Mohon informasinya. Terima kasih.</dd>
        </div>
    
        <!-- Form Balasan -->
        <form>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject Email</label>
            <input type="text" class="form-control" id="subject" placeholder="Masukkan subjek balasan">
          </div>
    
          <div class="mb-3">
            <label for="message" class="form-label">Isi Pesan</label>
            <textarea class="form-control" id="message" rows="6" placeholder="Tulis isi pesan balasan di sini..."></textarea>
          </div>
    
          <button type="submit" class="btn btn-primary">Kirim Balasan</button>
        </form>
      </div>
</div>

@endsection
