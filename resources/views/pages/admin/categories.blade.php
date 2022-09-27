@extends('layouts/'.$template)

@section('main_content')
<div class="modal fade effect-scale" id="deleteCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Удалить категорию</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <h6>Вы уверены, что хотите удалить категорию?</h6>
                <p>Она правда удалится. Навсегда. Безвозвратно. Уверены?</p>
            </div>
            <form action="/admin/delete_category" method="post">
                @csrf
                <input type="hidden" name="category_id" value="" class="category_id">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Удалить</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </form>

        </div>
    </div>
</div>


<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">E-Commerce</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Categories</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            @if(session('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>

            @endif

            @if(session('error'))

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
            </div>

            @endif

            @if($errors->any())

            @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
            </div>
            @endforeach

            @endif
            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-8">
                    <div class="card cart">
                        <div class="card-header">
                            <h3 class="card-title">Categories</h3>
                        </div>



                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-vcenter">
                                    <thead>
                                        <tr class="border-top">
                                            <th>Category</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>
                                                <div class="text-center">
                                                    <img src="{{ $category->img }}" alt="" class="cart-img text-center">
                                                </div>
                                            </td>
                                            <td>{{ $category->name }}</td>
                                            <td class="fw-bold">{{ $category->description }}</td>

                                            <td>
                                                <div class=" d-flex g-2">

                                                    <a class="btn text-secondary bg-secondary-transparent btn-icon py-1 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="bi bi-heart fs-16"></span></a>
                                                    <a class="btn text-danger bg-danger-transparent btn-icon py-1 delete_category" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal" data-bs-original-title="Delete" data-id-category="{{ $category->id }}"><span class="bi bi-trash fs-16"></span></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="input-group mb-1">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <span class="input-group-text btn btn-primary">Apply Coupon</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 text-end"><a href="javascript:void(0)" class="btn btn-default disabled btn-md">Update Cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-4 col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add category</div>
                        </div>

                        <form action="/admin/add_category" method="post">
                            @csrf
                            <div class="card-body py-2">

                                <div class="table-responsive">

                                    <!-- <div class="wrap-input100 validate-input input-group">
                                        Заготовка для картинок
                                        <input class="form-control ms-0" name="name" type="text" placeholder="Name category">

                                    </div> -->
                                    <div class="wrap-input100 validate-input input-group">

                                        <input class="form-control ms-0" name="name" type="text" placeholder="Name category">

                                    </div>
                                    <div class="validate-input input-group">

                                        <textarea class="form-control ms-0" name="description" placeholder="Description"></textarea>

                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="btn-list">
                                    <button type="submit" class="btn btn-success float-sm-end">Создать категорию<i class="fa fa-arrow-right ms-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ROW-1 CLOSED -->
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</div>
<script>
    let categories = document.querySelectorAll('.delete_category');

    for (category of categories) {
        category.addEventListener('click', function(evt) {
            evt.preventDefault();
            let link = null;

            console.log(evt.path);

            for (let item of evt.path) {
                if (item.tagName == 'A' && item.classList.contains('delete_category')) {
                    link = item;
                    break;
                }
            }

            if (link != null)
                document.querySelector("#deleteCategoryModal .category_id").value = link.getAttribute("data-id-category");
        })
    }
</script>
@endsection