@extends('layouts.master')

@section('title')
المقالات المحزوفة
@endsection

@section('style')
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="d-flex mb-2">




            <div id="flash_messages">
                @if(session()->has('Add'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="Add">
                        <strong>{{ session()->get('Add') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if(session()->has('delete'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="delete_alert">
                        <strong>{{ session()->get('delete') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>

        </div>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-right">المقالات</h6>
            </div>
            <div class="card-body">



                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>رقم</th>
                                <th>عنوان المقال بالعربي</th>
                                <th>عنوان المقال بالفرنسي</th>
                                <th>صورة المقال</th>
                                <th>القسم الرئيسي</th>
                                <th>انشاء بواسطة</th>
                                <th> تاريخ الانشاء</th>
                                <th>الاجرائات </th>

                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $x = 1;
                            @endphp
                        @if ($posts && $posts->count() > 0)
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $x++ }}</td>
                                    <td>{{$post->getTranslation('title','ar')}}</td>
                                    <td>{{$post->getTranslation('title','fr')}}</td>
                                    <td>
                                        <img class="img-responsive mb-1" src="{{ asset('/assets/images/' . $post->photo)}}" style="height: 100px; width: 100px">
                                    </td>
                                    <td>
                                        {{ $post->category->getTranslation('name','ar') }}
                                    </td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <a href="#exampleModal" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="{{ $post->id }}" data-name="{{$post->getTranslation('title','ar')}}">
                                            اعادة تفعيل
                                        </a>
                                        @include('admin.posts.restore')
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            {{-- start message whene no data available --}}
                            <div class="col-md-6 m-auto text-center">
                                <img src="assets/img/undraw_Empty_re_opql.png" alt="" class="img-fluid">
                                <h2>ليس لديك أي مقالات </h2>
                            </div>
                            {{-- End message whene no data available --}}
                        @endif
                        </tbody>
                    </table>
                </div>



            </div>
        </div>




    </div>
@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script>

        $(document).ready(function()
        {
        $('#errors').fadeOut(3000);
        $('#Add').fadeOut(3000);
        $('#delete_alert').fadeOut(3000);
        });
    </script>

    {{-- DELETE post --}}
    <script>

        $('#exampleModal').on('show.bs.modal', function(event)
        {
            // alert("fd");
            var button = $(event.relatedTarget)
            var id = button.data('id')
            // alert(id);
            var name = button.data('name')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #name').val(name);
        })
    </script>
@endsection

