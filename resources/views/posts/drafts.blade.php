@extends('backend.layout.app')

@include('backend.layout.header')

@include('backend.layout.sidebar')


@section('content')
<div class="dashboard-wrapper pt-5">
<<<<<<< HEAD
        <div class="container-fluid py-5">
                <div class="row justify-content-center py-5">
=======
        <div class="container-fluid">
                <div class="row justify-content-center">
>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> Drafts</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif


                <div class="panel panel-default">
<<<<<<< HEAD
                    <div class="panel-heading p-0">
                    <a class="btn btn-sm btn-primary pull-left  mx-4 mt-4" href="{{ route('list_posts') }}">Return</a>
=======
                    <div class="panel-heading">
                    <a class="btn btn-sm btn-primary pull-right" href="{{ route('list_posts') }}">Return</a>
>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e
                    </div>
                    <div class="pt-3">
                            @if(session()->has('success'))
                            <div class="alert alert-success col-md-12">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="pt-3">
                            @if(session()->has('delete'))
                            <div class="alert alert-danger col-md-12">
                                {{ session()->get('delete') }}
                            </div>
                        @endif
                    </div>

                    <div class="panel-body pt-3">




                        <div class="table-responsive">
                                <table class="table">
                                  <thead>
                                    <tr>

                                      <th>Title</th>

                                      <th>Date</th>

                                        <th>Edit</th>
                                      <th>Publish</th>
                                      <th>Delete</th>

                                    </tr>
                                  </thead>
                                  @foreach ($posts as $post)
                                  <tbody>
                                    <tr>

<<<<<<< HEAD
                                      <td><a href="{{route('edit_post',['id'=>$post->id])}}">{{$post->title}}</a></td>
=======
                                      <td><h3><a href="{{route('edit_post',['id'=>$post->id])}}">{{$post->title}}</a></h3></td>
>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e
                                    <td>{{$post->created_at}}</td>



                                         <td> <a href="{{route('edit_post',['id'=>$post->id])}}" class="btn btn-sm btn-primary" role="button"><i class="fa fa-edit"></i></a></td>

                                      @can('publish-post')
              <td><a href="{{ route('publish_post', ['id' => $post->id]) }}" class="btn btn-sm btn-primary" role="button"><i class="fa fa-upload"></a></td>
                                     <td> <a href="{{route('delete_post',['id'=>$post->id])}}" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></a></td>
                                  @endcan

                                    </tr>
                                  </tbody>
                                  @endforeach
                                </table>





        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('backend.layout.footer')

@endsection
