  <div class="container-fluid">
    <div class="jumbotron">
      <div class="row">
        <div class="col-lg-6">
          <h2>Selamat Datang</h2>
          <p>Aplikasi Perpustakaan</p>
          <a class="btn btn-primary" href="#daftar">Start</a>
        </div> 
        <div class="col-lg-6">
          <center>
            <img class="img img-circle" width="50%" height="50%" src="assets/img/bookworm.jpg">
          </center>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-lg-12 col-xs-12">
          <h2 style="text-align:center">DAFTAR BUKU</h2>
      </div>
    </div>
  <div class="container" id="daftar">
    <a onclick="tambah_data()" class="btn btn-default" style="margin:5px;">
      <i class="fa fa-plus"> Tambah</i>
    </a>

    <table class="table table-stripped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Judul</th>
        <th>Penerbit</th>
        <th>Pengarang</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="listdata">      
    </tbody>
    </table>
  </div>
  
<!-- modal tambah -->
  <div class="modal fade" id="sama" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <p> <h3 class="modal-title">Tambah Data Buku</h3> </p>
        </div>
        <div class="modal-body">
        <form id="form_modal" class="form-horizontal" method="POST">
            <input type="hidden" name="kd_buku">
            <div class="form-group">
              <label class="control-label col-sm-2" for="judul">Judul</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Buku" name="judul">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="penerbit">Penerbit</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="penerbit" placeholder="Masukkan Penerbit" name="penerbit">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pengarang">Pengarang</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="pengarang" placeholder="Masukkan Pengarang" name="pengarang">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="harga">Harga</label>
              <div class="col-sm-10">          
                <input type="number" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-default" onclick="save()">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
