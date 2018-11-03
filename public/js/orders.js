var $orderTable;
$(document).ready(function () {
   $body=$("body");
    getInitDataTable();
});

function getInitDataTable() {

    $orderTable = $('#order_data').DataTable({
        processing: true,
        serverSide: true,
        retrieve: true,

        ajax: base_url + 'orders/get_order_table/',
        columns: [
            {data: 'job_name', name: 'job_name'},
            {data: 'description', name: 'description'},
            {data: 'price', name: 'price'},
            {data: 'status', name: 'status'},
            {data: 'user_name', name: 'user_name'},
            {data: 'payment_method', name: 'payment_method'},
            {data: 'category_name', name: 'category_name'},

        ],
        initComplete: function (settings, json) {

        },
        drawCallback: function (settings) {

        }

    });
}