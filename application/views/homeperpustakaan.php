  <div class="container-fluid">
    <div class="jumbotron">
      <div class="row">
        <div class="col-lg-6">
          <h2>Selamat Datang</h2>
          <p>Aplikasi Perpustakaan</p>
          <button class="btn btn-primary">Start</button>
        </div>        
        <div class="col-lg-6">
          <center>
            <img class="img img-circle" width="70%" height="60%" src="assets/img/bolupandan.jpg">
          </center>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-lg-12 col-xs-12">
          <h2 style="text-align:center">DAFTAR BUKU</h2>
      </div>
    </div>

    <button type="button" class="btn btn-default" style="margin:5px;" data-toggle="modal" data-target="#sama">
      <i class="fa fa-plus"> Tambah</i>
    </button>

    <table class="table table-stripped">
      <tr>
        <th>Judul</th>
        <th>Penerbit</th>
        <th>Pengarang</th>
        <th>Aksi</th>
      </tr>
      <?php foreach ($databuku as $key => $value) { ?>
      <tr>
        <td><?= $value->judul; ?></td>
        <td><?= $value->pengarang; ?></td>
        <td><?= $value->penerbit; ?></td>

         <td><button class="btn btn-primary" style="margin:3px;"><i class="fa fa-edit"> Edit </i></button>
            <button class="btn btn-danger" style="margin:3px;"><i class="fa fa-close"> Delete </i></button>
            <button class="btn btn-warning" style="margin:3px;"><i class="fa fa-print"> Print </i></button></td>
      </tr>
      <?php } ?>

    </table>
  </div>
  

  <div class="modal fade" id="sama" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <p> <h3>Tambah Data Buku</h3> </p>
        </div>
        <div class="modal-body">
        <form class="form-horizontal" action="perpustakaan/list_data" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-2" for="judul">Judul:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Buku" name="judul">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="penerbit">Penerbit:</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="penerbit" placeholder="Masukkan Penerbit" name="penerbit">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pengarang">Pengarang:</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="pengarang" placeholder="Masukkan Pengarang" name="pengarang">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" id="TambahData">Tambah</button>
        </div>
        </form>
      </div>
    </div>
  </div>

