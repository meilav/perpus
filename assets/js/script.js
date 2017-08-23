$(document).ready(function(){
    $("#TambahData").click(function(event){
        alert('test');
    });
});

$(document).ready(function(){
    $.ajax({
        url: 'Perpustakaan/list_data',
        type: 'POST',
        success: function(data){
            $("#listdata").html(data);
        }
    })
});

function reload(){
    $.ajax({
        url: 'Perpustakaan/list_data',
        type: 'POST',
        success: function(data){
            $("#listdata").html(data);
        }
    })
};

function save(){
    if (save_method == 'add'){
        url = "Perpustakaan/tambah";
    }else{
        url = "Perpustakaan/edit";
    }

    $.ajax({
        url: url,
        type: 'POST',
        data: $('#form_modal').serialize(),
        datatype: "JSON",
        success: function(data){
            $('#sama').modal('hide');
            alert('Sukses, Data Berhasil Disimpan');
            reload();
        }
    });
};
function test(){
alert("behasil nak");
};
function tambah_data(){
    save_method = "add";
    $('#sama').modal('show');
    $('.modal-title').text('Tambah Data Buku');
};
