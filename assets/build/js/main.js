$(document).ready(function(){
    $('#tb-data').DataTable();
    $('#tb-data2').DataTable();

    
    $('.btn-riwayat').click(function(){
        var nomor_ktp = $(this).data('id_klien');
        var html = "";
        $.ajax({
            type : "GET",
            url  : "riwayat/"+nomor_ktp,
            dataType: "json",
            success: function(data){
                var i=1;

                data.forEach((data, index) => {                   
                    html += '<tr>';
                    html += '<td>'+ i++ +'</td>';                            
                    html += '<td>'+ data['pekerjaan'] +'</td>';                            
                    html += '<td>'+ data['nama_pekerjaan'] +'</td>';                     
                    html += '<td>'+ data['tgl_mulai'] +'</td>';               
                    html += '<td>'+ data['tgl_selesai'] +'</td>';  
                    html += '<td>'+ data['nama_petugas'] +'</td>';
                    html += '</tr>';
                });

                $('#riwayat_klien').html(html);
                $('#tb-riwayat').DataTable();
            }
        });
    });
});