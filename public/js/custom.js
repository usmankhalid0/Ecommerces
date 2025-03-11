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
        ]

    });
    $(document).on('click', '.editBtn', function () {
        let id = $(this).data('id');
        console.log(id);

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
});