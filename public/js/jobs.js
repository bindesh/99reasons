var $orderTable;
$(document).ready(function () {
    $body=$("body");
    getInitDataTable();

    $body.on('click','.add_job',function(){
        $.ajax({
            url:base_url+'jobs/create',
            method:'get',
            success:function (data) {
                $(".jobs_form_body").html(data);
                $("#add_jobs").modal('show');
            }
        })
    });
    $(document).on('click', '.save_jobs', function (e) {

        var job_id = $(".job_id").val();
        var url=base_url + 'jobs';
        var method = "POST";
        if (job_id != "") {
            url=url+'/'+job_id;
            method = "PUT";
        }
        $(".job_form").attr("action", url);
        // $(".job_form").attr("method", method);
        $(".job_form").ajaxSubmit({
            error: function (request, errordata, errorObject) {
                var errors = request.responseJSON;
                var errorsHtml = '';


                $.each(errors, function (index, value) {

                    $(".modal-body").find("#" + index).parents(".form-group").append('<span class="help-block">' + value + '</span>');
                    $(".modal-body").find("#" + index).parents(".form-group").addClass("has-error");
                });

            },
            success: function (data) {
                console.log(data);
                updateDataTable();
                $("#add_jobs").modal('hide');

            }
        });

    });

});
function updateDataTable(){
    $orderTable.ajax.url(base_url + 'jobs/get_jobs_table').load();
}
function getInitDataTable() {

    $orderTable = $('#jobs_data').DataTable({
        processing: true,
        serverSide: true,
        retrieve: true,
        lengthChange: false,
        ajax: base_url + 'jobs/get_jobs_table/',
        columns: [
            {data: 'job_name', name: 'job_name'},
            {data: 'category_name', name: 'category_name'},
            {data: 'description', name: 'description'},
            {data: 'price', name: 'price'},
            {data: 'action', name: 'action'},


        ],
        initComplete: function (settings, json) {

        },
        drawCallback: function (settings) {

        }

    });
}