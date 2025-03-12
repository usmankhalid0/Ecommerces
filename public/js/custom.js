$(document).ready(function () {
    $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'user',
        columns: [
            { data: 'id', name: 'id', title: 'ID' },
            { data: 'name', name: 'name', title: 'name' },
            { data: 'email', name: 'email', title: 'email' },
            { data: 'created_at', name: 'created_at', title: 'created' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
            { data: 'checkbox', name: 'checkbox', orderable: false, searchable: false },
        ]

    });
    $("#newUser").submit(function (e) {
        e.preventDefault();
        var fd = $(this).serialize();
        $.ajax({
            url: 'user',
            type: 'post',
            data: fd,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
            },
            success: function (res) {
                $(".btn-close").click();
                if (res) {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: "data enter successfully",
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                    });
                } else {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'fail',
                        title: "data is not entered",
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                    });
                }
            }
        });
    });
    $(document).on('click', '.editBtn', function () {
        let id = $(this).data('id');

        $.ajax({
            url: "/user/" + id,
            type: "GET",
            success: function (response) {
                $('#edit_id').val(response.id);
                $('#edit_name').val(response.name);
                $('#edit_email').val(response.email);
                $('#editModal').modal('show');
            }
        });
    });
    $(document).on('click', '.deleteBtn', function () {
        let delid = $(this).data('id');
        $.ajax({
            url: "/user/" + delid,
            type: "GET",
            success: function (result) {

            }
        });
    });
    $("#send_Notification").submit(function (e) {
        e.preventDefault();
        var fd = $(this).serialize();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
            },
            url: '/sendNotification',
            type: 'POST',
            data: fd,
            success: function (res) {
                if (res) {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: "Notification send successfully",
                        showConfirmButton: false,
                        timer: 1000,
                        timerProgressBar: true,
                    });
                } else {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'fail',
                        title: "notification not send due to some issue",
                        showConfirmButton: false,
                        timer: 1000,
                        timerProgressBar: true,
                    });
                }
            }
        });
    });
    $('#todatabase').submit(function (e) {
        e.preventDefault();
        var fd = $(this).serialize();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
            },
            url: 'sntusa',
            type: 'POST',
            data: fd,
            success: function (res) {
                if (res) {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: "Notification send successfully",
                        showConfirmButton: false,
                        timer: 1000,
                        timerProgressBar: true,
                    });
                } else {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'fail',
                        title: "notification not send due to some issue",
                        showConfirmButton: false,
                        timer: 1000,
                        timerProgressBar: true,
                    });
                }
            }
        });
    });
});
function fun() {
    $.ajax({
        url: "email",
        type: "GET",
        dataType: "json",  // Ensure JSON response
        success: function (result) {
            let emails = '';
            for (let x = 0; x < result.length; x++) {
                emails += '<option value="' + result[x] + '">' + result[x] + '</option>';
            }
            document.getElementById('browsers').innerHTML = emails;
        }
    });
}
