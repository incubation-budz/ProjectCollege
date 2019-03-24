@extends('backend.layout.app')

@include('backend.layout.header')

@include('backend.layout.sidebar')


@section('content')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">All Post </div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="panel panel-default">
                                    <div class="panel-heading">


                                        @can('create-post')
                                    <a class="pull-right btn btn-sm btn-primary" href="{{route('create_post')}}">New</a>
                                        @endcan
                                    </div>
                                    <div class="pt-3">
                                            @if(session()->has('delete'))
                                            <div class="alert alert-danger col-md-12">
                                                {{ session()->get('delete') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div  class="panel-body">






                                                        <div class="table-responsive">
                                                                <table class="table">
                                                                  <thead>
                                                                    <tr>

                                                                      <th>Title</th>

                                                                      <th>Date</th>
                                                                        <th>Posted By</th>

                                                                      <th>Edit</th>
                                                                      <th>Delete</th>

                                                                    </tr>
                                                                  </thead>
                                                                  @foreach ($posts as $post)
                                                                  <tbody>
                                                                    <tr>

                                                                      <td><h3><a href="{{route('edit_post',['id'=>$post->id])}}">{{$post->title}}</a></h3></td>
                                                                    <td>{{$post->created_at}}</td>
                                                                    <td> {{$post->name}}</td>
                                                                      @can('publish-post',$post)


                                                                         <td> <a href="{{route('edit_post',['id'=>$post->id])}}" class="btn btn-sm btn-primary" role="button"><i class="fa fa-edit"></i></a></td>
                                                                        <td> <a href="{{route('delete_post',['id'=>$post->id])}}" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a></td>
                                                                        <td>



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
                </div>
            </div>

</div>
@include('backend.layout.footer')

@endsection
