<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="assets/app/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/app/font-awesome/css/font-awesome.css">
  </head>
  <body>

  <div class="container-fluid">
    <div class="jumbotron">
      <div class="row">
        <div class="col-lg-6">
          <h2>Selamat Datang</h2>
          <p>Aplikasi Restoran</p>
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
          <h2 style="text-align:center">MENU</h2>
      </div>
    </div>

    <button type="button" class="btn btn-default" style="margin:5px;" data-toggle="modal" data-target="#sama">
      <i class="fa fa-plus"> Tambah</i>
    </button>

    <table class="table table-stripped">
      <tr>
        <th>Nama Pembeli</th>
        <th>Nama Menu</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
      <tr>
        <td>Zaramaraz</td>
        <td>Bubur Gandum</td>
        <td>USD 2</td>
        <td><button class="btn btn-primary" style="margin:3px;"><i class="fa fa-edit"> Edit </i></button>
            <button class="btn btn-danger" style="margin:3px;"><i class="fa fa-close"> Delete </i></button>
            <button class="btn btn-warning" style="margin:3px;"><i class="fa fa-print"> Print </i></button></td>
      </tr>
    </table>
  </div>
  

  <div class="modal fade" id="sama" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header">
          <p> <h3>Tambah Data</h3> </p>
        </div>
        <div class="modal-body">
          <p> form coming soon </p>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"> Tutup</i></button>
        </div>
      </div>
    </div>
  </div>

    <script src="assets/app/bootstrap/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>
