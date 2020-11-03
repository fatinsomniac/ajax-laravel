$(document).ready(function (){
    get_post_data()

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    

    //Get all data Post
    function get_post_data() {
        $.ajax({
            url: url_getData,
            type: 'GET',
            data: { }
        }).done(function(data){
            table_data_row(data.data)
        });
    }

    //Post table row
    function table_data_row(data) {
        var rows = '';
        
        $.each(data, function(key, value){
            rows = rows + '<tr>';
            rows = rows + '<td>' + value.judul + '</td>';
            rows = rows + '<td>' + value.isi + '</td>';
                rows = rows + '<td data-id="'+value.id+'">';
                        rows = rows + '<a class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" id="editCompany" data-id="'+value.id+'" data-toggle="modal" data-target="#modal-id">Edit</a>';
                        rows = rows + '<a class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" id="deleteCompany" data-id="'+value.id+'">Delete</a>';
                rows = rows + '</td>';
            rows = rows + '</tr>';

        });

        $("tbody").html(rows);
    }
});