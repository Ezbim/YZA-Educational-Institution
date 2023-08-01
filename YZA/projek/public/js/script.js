$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Pendaftaran');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
    });


    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Pendaftaran');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/pendaftaran/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/pendaftaran/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
        
    });

    $(document).ready(function() {
        // Add 'active' class to clicked link and remove it from other links
        $('.navbar-nav a').on('click', function() {
          $('.navbar-nav a').removeClass('active');
          $(this).addClass('active');
        });
      });

});