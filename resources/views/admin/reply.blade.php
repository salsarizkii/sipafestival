@extends('admin.layouts.main')

@section('content')
<div class="card m-3 rounded-4 bg-white border-white shadow">
    <div class="container bg-white p-5 rounded shadow-sm">
        <h4 class="mb-4">Aduan yang diterima</h4>
    
        <!-- Informasi Email yang Diterima -->
        <div class="mb-4">
          <dt class="col-sm-3">{{ $complaint->name }}</dt>
          <dd class="col-sm-9">{{ $complaint->email }}</dd>
          <dd class="col-sm-9">{{ $complaint->subject }}</dd>
          <dd class="col-sm-9">{{ $complaint->message }}</dd>
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
