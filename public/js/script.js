$(function(){
    console.log('Irrashaimase');
    $('.ubahArtikel').on('click', function(){
        $('#formModalLabel').html('Edit Artikel');
        $('.modal-footer button[type=submit]').html('Edit Data');
        const id = $(this).data('id');
            $('.modal-body form').attr('action', '/post/ubah{{ $id }}}'); 
            
            $.ajax({
                url : '/post/getUbah',
                data : {id : id},
                method : 'post',
                dataType : 'json',
                success : function(data){
                    $('#judul').val(data.judul);
                    $('#kategori').val(data.kategori);
                    $('#isi').val(data.isi); 
                    console.log(data);
                }
            });
        $('.close').on('click', function(){
            window.location.replace('/post');
        });
    });
});