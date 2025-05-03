@extends('admin.layouts.main')

@section('content')

<div class="content flex-grow-1">
  <h1 class="m-5 text-5xl text-black fw-bold">Hi, Helmi Rafik!</h1>
  <div class="card m-3 rounded-4 bg-white border-white shadow">
      <div class="card-header d-flex rounded-4 bg-white border-white justify-content-between align-items-center">
          <span>DAFTAR ADUAN</span>
          <form class="d-flex rounded-4" role="search">
              <input class="form-control me-2 rounded-5" type="search" placeholder="Search"
                  aria-label="Search" />
              <button class="btn btn-outline-success rounded-5" type="submit">Search</button>
          </form>
      </div>
      <div class="card-body">
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col" width="5%">No</th>
                      <th scope="col" width="75%" class="text-left">Aduan</th>
                      <th scope="col" width="20%">Status</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($complaints as $index => $complaint)
                      <tr>
                          <th>{{ $index + 1 }}</th>
                          <td>
                              <p class="my-0"><strong>{{ $complaint->name }}</strong></p>
                              <p class="my-0">{{ $complaint->message }}</p>
                              <a href="#"
                                  class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-secondary"
                                  style="font-size: 0.75rem;"> balas</a>
                          </td>
                          <td>{{ $complaint->status }}</td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
</div>
@endsection