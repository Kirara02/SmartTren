$(function(){
    console.log('Irrashaimase');
    $('.tampilModalUbah').on('click', function(){
    $('#formModalLabel').html('Edit Data');
    $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', '/artikel/ubah'); 
        const id = $(this).data('id');
        
        $.ajax({
            url : '/artikel/getUbah',
            data : {id : id},
            method : 'post',
            dataType : 'json',
            success : function(data){
                $('#judul').val(data.judul);
                $('#kategori').val(data.kategori);
                $('#penulis').val(data.penulis);
                $('#isi').val(data.isi);
                $('#id').val(data.id);
                
            }
        });
    });
    $('.close').on('click', function(){
        window.location.replace('/artikel');
    });
});