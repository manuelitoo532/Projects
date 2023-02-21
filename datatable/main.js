
var data = [{
        "Name": "Carlos",
        "LastName": "Ortez",
        "City": "Usulutan",
        "Gender": "Male"
},
{
    "Name": "Manuel",
    "LastName": "Ortez",
    "City": "Usulutan",
    "Gender": "Male"
}]
$(document).ready(function() {
   var table = $('#table').DataTable({
        ajax:{
            url: "datos.json",
            dataSrc: ""
        },
        columns: [
            {data: "Name"},
            {data: "LastName"},
            {data: "City"},
            {data: "Gender"},
            {
                data: null,
                render: function (data, type, row, meta) {
                    return '<a id="btnEdit" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>';
                }
            }
        ],
           
   });
   $(document).on('click', '#btnEdit', function(){
    var data = table.row($(this).parents('tr')).data();
    alert(data['Name']);
   })
    

});