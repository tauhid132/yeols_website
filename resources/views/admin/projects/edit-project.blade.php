@extends('admin.master')
@section('title',"Update Project")
@section('main-body')
<div class="page-content-wrapper p-xxl-4">
    <div class="row">
        <div class="col-12 mb-4 mb-sm-5">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-3 mb-sm-0">Update Blog</h1>
            </div>
        </div>
    </div>
    <form action="{{ route('viewEditProject',$project->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="mb-3">
                                    <label class="form-label" for="product-price-input">Project Name</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" value="{{ $project->project_name }}" name="project_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="mb-3">
                                    <label class="form-label" for="product-price-input">Project Type</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" value="{{ $project->project_type }}" name="project_type">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="product-price-input">Project Cover Image</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="project_cover_image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="product-price-input">Project Description</label>
                                    <textarea class="ckeditor form-control" name="project_description">{{ $project->project_description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end m-3">
                    <button type="submit" class="btn btn-success w-sm">Submit</button>
                </div>
            </div>
        </div>
    </form>
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
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>
@endsection