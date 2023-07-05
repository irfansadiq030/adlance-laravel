@extends('admin.layout.layout')
@section('page_title','Add Category')

@section('content')

<div class="components-preview wide-md mx-auto">
    <div class="nk-block-head nk-block-head-lg wide-sm">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><a class="back-to" href="categories"><em class="icon ni ni-arrow-left"></em><span>Categories</span></a></div>
            <h3 class="nk-block-title fw-normal">Add New Category</h3>
            <div class="nk-block-des">
                <p class="lead">Create a New Category to Organize and Categorize Your Content</p>
            </div>
        </div>
    </div><!-- .nk-block -->
    <div class="nk-block nk-block-lg">
        <!-- <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Edit Basic information</h4>
                <div class="nk-block-des">
                    <p>Below example helps you to build your own form nice way.</p>
                </div>
            </div>
        </div> -->
        <div class="row g-gs">
            <div class="col-lg-12">
                <div class="card h-100">
                    <div class="card-inner">
                        <div class="card-head">
                            <!-- <h5 class="card-title">Category Info</h5> -->
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-pro alert-danger alert-dismissible">
                            <div class="alert-text">
                                <h6>Errors!</h6>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <button class="close" data-dismiss="alert"></button>
                        </div>
                        @endif

                        <form method="POST" id="categoryForm">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="form-label" for="full-name">Category Title</label>
                                    <div class="form-control-wrap">
                                        <input name="category_title" type="text" class="form-control" id="category_title">
                                        <span id="category_title_error" class="invalid"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="cat_slug">Slug</label>
                                    <div class="form-control-wrap">
                                        <input name="slug" type="text" class="form-control" id="slug">
                                        <span id="slug_error" class="invalid"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <div class="form-control-wrap">
                                    <select name="category_status" class="form-select select2-hidden-accessible" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                        <option value="1" data-select2-id="5">Publish</option>
                                        <option value="0" data-select2-id="18">Draft</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email-address">Description</label>
                                <div class="form-control-wrap">
                                    <textarea name="description" type="text" class="form-control" id="email-address" rows="1"> </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="upload-zone">
                                    <div class="dz-message" data-dz-message>
                                        <span class="dz-message-text">Drag and drop file</span>
                                        <span class="dz-message-or">or</span>
                                        <button class="btn btn-primary">SELECT</button>
                                    </div>
                                </div>
                                <input type="text" id="temp_img_id" name="img_id">
                            </div>
                            <div class="form-group">
                                <button id="saveCategory" type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .nk-block -->

</div>

@endsection

@section('custom-js')

<script>
    $(document).ready(function() {
        $("#category_title").change(function() {
            // alert($(this).val());
            // const element = $(this);
            $.ajax({
                url: "{{ route('get-slug')}}",
                type: 'get',
                data: {
                    title: $(this).val()
                },
                dataType: 'json',
                success: function(response) {
                    if (response['status']) {
                        $("#slug").val(response['slug']);
                    } else {
                        alert();
                    }
                }
            });
        });

        // Save Category
        $("#saveCategory").click(function(e) {
            e.preventDefault();
            // remove form erros
            $(".invalid").html('');

            let formData = $("#categoryForm").serializeArray();
            // console.log(formData);

            $.ajax({
                url: "{{ route('create-category') }}",
                type: 'POST',
                data: formData,
                success: function(response, status, xhr) {

                    let statusCode = xhr.status;
                    let message = response.message;
                    if (statusCode === 200) {

                        $('#categoryForm')[0].reset(); //reset the form
                        // Show Toaster
                        NioApp.Toast(message, 'success', {
                            position: 'top-right'
                        });
                    }
                },
                error: function(xhr, status, error) {

                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function(field, errorMessage) {
                        console.log(errorMessage[0])
                        $(`#${field}_error`).html(errorMessage[0]);
                    });

                    // Show Toaster
                    NioApp.Toast('Category Not Saved Something is Wrong!', 'error', {
                        position: 'top-right'
                    });
                }
            });
        })

    })
</script>

@endsection