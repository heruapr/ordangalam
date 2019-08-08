@Include('inc/header')
	<div class="container">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Departemen</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Nomor Anggota</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <th scope="row">1</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content 
      	&nbsp; <a class="btn btn-success" href="profile" role="button"> Profil</button></a> 
      	&nbsp; <a class="btn btn-primary" href="editProfil" role="button">Edit</button></a> 
      	&nbsp; <a class="btn btn-danger" href="#" role="button">Hapus</button></a>
      </td>
    </tr>
  </tbody>
</table>
<div>
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#">&laquo;</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">&raquo;</a>
    </li>
  </ul>
</div>
<div class="button">
<button type="button" class="btn btn-success">Tambah Pengurus</button>
</div>
</div>
<br>
@include('inc.footer')