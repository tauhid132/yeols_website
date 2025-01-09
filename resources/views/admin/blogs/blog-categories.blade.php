@extends('admin.master')
@section('title', 'Blog Categories')
@section('main-body')
<div class="page-content-wrapper p-xxl-4">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h1 class="h4 mb-3 mb-sm-0"><i class="fa fa-blog me-2"></i>Blog Categories</h1>
                <div class="d-grid">
                    <a href="#" data-bs-toggle="modal" id="addNewCategory" data-bs-target="#addEditCategoryModal" class="btn btn-primary btn-sm mb-0"><i class="fa fa-plus me-2"></i>Add New Category</a>	
                </div>					
            </div>
        </div>
    </div>
    <div class="card shadow mt-1">
        <div class="card-body table-responsive ">
            <table id="users-table" class="table align-middle pt-2 mb-0 table-hover table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>
</div>


<div class="modal fade zoomIn" id="addEditCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header p-3 bg-soft-info">
                <h5 class="modal-title" id="modalHeader">Add New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form id="add_edit_category_form">
                <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <div>
                                <label for="name" class="form-label">Category Name</label>
                                <input type="text" name="category_name" class="form-control" id="category_name" required />
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="edit-btn">Create</button>
                    </div>
                </div>
            </form>
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
        "ajax" : "{{ route('admin.get.blog.categories') }}",
        "columns" : [
        {"data" : 'DT_RowIndex', "name" : 'DT_RowIndex' , "orderable": false, "searchable": false},
        {"data": "category_name"},
        {"data" : 'action', "name" : 'action' , "orderable": false, "searchable": false},
        ]
        
    });
    
    
    
    $(document).on('click', '.delete', function(){
        var id = $(this).attr("id");
        Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"{{ route('admin.delete.blog.category') }}",
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
    $('#addNewCategory').click(function(){  
        $('#modalHeader').html("Add New Category");
        $('#edit-btn').html("Create"); 
        $('#add_edit_category_form')[0].reset();
        $('#id').val(""); 
    }); 
    $(document).on('click', '.edit', function(){
        var id = $(this).attr("id");
        $.ajax({  
            url:"{{ route('admin.get.blog.category') }}",  
            method:"post",  
            data:{id:id},  
            success:function(data){ 
                $('#id').val(data.id);
                $('#category_name').val(data.category_name);
                $('#modalHeader').html("Edit Category");
                $('#edit-btn').html("Update"); 
                $('#addEditCategoryModal').modal("show");  
            }  
        });   
    });
    
    $('#add_edit_category_form').on("submit", function(event){  
        event.preventDefault();  
        $.ajax({  
            url:"{{ route('admin.add.edit.category') }}",  
            method:"POST",  
            data:$('#add_edit_category_form').serialize(),  
            beforeSend:function(){  
                $('#edit-btn').html("Updating");  
            },  
            success:function(data){  
                $('#add_edit_category_form')[0].reset();  
                $('#edit-btn').html("Create");
                $('#addEditCategoryModal').modal('hide');  
                dataTable.ajax.reload();
                toastr["success"]("Category Updated Successfully")
            },
            error: function(xhr, status, error) 
            {
                $.each(xhr.responseJSON.errors, function (key, item) 
                {
                    toastr["error"](item)
                });
            } 
        });     
    });
    
</script>
@endsection