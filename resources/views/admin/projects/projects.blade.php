@extends('admin.master')
@section('title',"All Projects")
@section('main-body')
<div class="page-content-wrapper p-xxl-4">
    <div class="row">
        <div class="col-12 mb-4 mb-sm-5">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-3 mb-sm-0">Projects</h1>
                <div class="d-grid">
                    <a href="{{ route('viewCreateNewProject') }}" class="btn btn-success mb-0"><i class="fa fa-plus me-2"></i>Create New Project</a>	
                </div>					
            </div>
        </div>
    </div>
    <div class="card shadow mt-1">
        <div class="card-body table-responsive ">
            <table id="users-table" class="table align-middle p-2 mb-0 table-hover">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Project Name</th>
                        <th>Project Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    var dataTable = $('#users-table').DataTable({
        "processing" : true,
        "serverSide": true,
        "pageLength": 10,
        "ajax" : "{{ route('getProjects') }}",
        "columns" : [
        {"data" : 'DT_RowIndex', "name" : 'No' },
        {"data": "project_name"},
        {"data": "project_type"},
        {"data" : 'action', "name" : 'action' , "orderable": false, "searchable": false},
        ]
    });
    
    $(document).on('click', '.delete_project', function(){
        var id = $(this).attr("id");
        Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"{{ route('deleteProject') }}",
                    method:"POST",
                    data:{id:id},
                    success:function(data){
                        toastr["success"]("Blog Deleted Successfully")
                        dataTable.ajax.reload();
                    }
                })
            }
        })
    });
    
</script>
@endsection