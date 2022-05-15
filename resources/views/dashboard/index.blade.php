@extends('dashboard.layoutd.maind')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Hello, Welcome to ZAP Laundry {{ auth()->user()->name }}</h1>
    <a href="/dashboard/service/create" class="btn btn-primary">NewPost</a>
    {{-- <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
      </button>
    </div> --}}
  </div>
  {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}
  </div>
  <div style="margin-left:6.5cm;margin-right:auto">
  @foreach ($postl as $postl) <!--Untuk looping isi array menampilkan post -->
     <article class="mb-5">
     <h4>
         <a href="/dashboard/{{ $postl->slug}}">{{ $postl->title}}</a>
    </h4>
     {{-- <h5>By : {{ $post["author"] }}</h5> --}}
     <p>{{ $postl->excerpt}}</p>
     </article>   
    @endforeach
  </div> 
  <div class="table-responsive">

    <table style="margin-left:6.5cm;margin-right:auto" border="1" class="table table-bordered table-sm">
      <thead>
        <tr>
          <th width="1px" scope="col">Id</th>
          <th width="60px" scope="col">Nama</th>
          <th width="60px" scope="col">Waktu</th>
          <th width="40px" scope="col">Harga</th>
          <th width="1px" scope="col">Action</th>
          <th width="1px" scope="col">Deskripsi</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1 </td>
          <td>Cuci Setrika</td>
          <td>2 Hari</td>
          <td>Rp 5.000/kg</td>
          <td >
            <a href="/dashboard/layanan-cuci-setrika" class="badge bg-info"><span data-feather="eye"></span></a>
          </td>
        </tr>
        <tr>
          <td>2 </td>
          <td>Cuci Kering</td>
          <td>2 Hari</td>
          <td>Rp 4.000/kg</td>
          <td >
            <a href="/dashboard/layanan-cuci-setrika" class="badge bg-info"><span data-feather="eye"></span></a>
          </td>
        </tr>
        <tr>
          <td>3 </td>
          <td>Setrika</td>
          <td>2 Hari</td>
          <td>Rp 4.000/kg</td>
          <td >
            <a href="/dashboard/layanan-setrika" class="badge bg-info"><span data-feather="eye"></span></a>
          </td>
        </tr>
        <tr>
          <td>4 </td>
          <td>Setrika Kilat</td>
          <td>1 Hari</td>
          <td>Rp 8.000/kg</td>
          <td >
            <a href="/dashboard/layanan-setrika-kilat" class="badge bg-info"><span data-feather="eye"></span></a>
          </td>
        </tr>
        <tr>
          <td>5 </td>
          <td>Cuci Kering Kilat</td>
          <td>1 Hari</td>
          <td>Rp 6.000/kg</td>
          <td >
            <a href="/dashboard/layanan-cuci-kering-kilat" class="badge bg-info"><span data-feather="eye"></span></a>
          </td>
        </tr>
        <tr>
          <td>6 </td>
          <td>Cuci Setrika kilat</td>
          <td>1 Hari</td>
          <td>Rp 8.000/kg</td>
          <td >
            <a href="/dashboard/layanan-cuci-setrika-kilat" class="badge bg-info"><span data-feather="eye"></span></a>
          </td>
        </tr>
        <tr>
          <td>7 </td>
          <td>Cuci Kering Ekspress</td>
          <td>4 Jam </td>
          <td>Rp 9.000/kg</td>
          <td >
            <a href="/dashboard/layanan-cuci-kering-ekspress" class="badge bg-info"><span data-feather="eye"></span></a>
          </td>
        </tr>
        <tr>
          <td>8 </td>
          <td>Cuci Setrika Ekspress</td>
          <td>5 Jam</td>
          <td>Rp 12.000/kg</td>
          <td >
            <a href="/dashboard/layanan-cuci-setrika-ekspress" class="badge bg-info"><span data-feather="eye"></span></a>
          </td>
        </tr>
      </tbody>
    </table>

    <a style="margin-left:6.5cm;margin-right:auto" href="/home" class="d-block mt-5">Back to Home</a>
  </div>  

</div>  
@endsection