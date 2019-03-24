@extends('backend.layout.app')

@include('backend.layout.header')

@include('backend.layout.sidebar')


@section('content')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid py-5 ">
                <div class="row justify-content-center py-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">News & Events<br><small>Display All News & Events Posts</small></div>
                                <!-- <ol class="breadcrumb">
                                    <li>
                                        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Dashboard</a>
                                    </li>
                                    <li><a href="{{ route('backend1.blog.index') }}">Blog</a></li>
                                    <li class="active">All Posts</li>
                                </ol> -->
                                <div class="card-header">
                                    <div class="pull-left">
                                        <a href="{{ route('backend1.blog.create') }}" class="btn btn-primary">Add New</a> 
                                    </div>
                                </div>
                                    <div class="card-body">
                                        @if(session('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        @if (! $posts->count())
                                                <div class="alert alert-danger">
                                                    <strong> No record found</strong>
                                                </div>
                                            @else    
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td width="80">Action</td>
                                                        <!-- <td>User Id</td> -->
                                                        <td width="140">Title</td>
                                                        <td width="140">Slug</td>
                                                        <td>Excerpt</td>
                                                        <td>Body</td>
                                                        <td>Date</td>
                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($posts as $post)
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('backend1.blog.edit', $post->id) }}" class="btn btn-xs btn-default">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>    

                                                                <a href="{{ route('backend1.blog.destroy', $post->id) }}" class="btn btn-xs btn-danger">
                                                                    <i class="fa fa-times"></i>
                                                                </a>   
                                                            </td>
                                                            <!-- <td>{{ $post->user_id }}</td> -->
                                                            <td>{{ $post->title }}</td>
                                                            <td>{{ $post->slug }}</td>
                                                            <td>{!! $post->excerpt !!}</td>
                                                            <td>{!! $post->body !!}</td>
                                                            <td>
                                                                <abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr>
                                                                
                                                            </td>
                                                            
                                                        </tr>
                                                    @endforeach    
                                                </tbody>
                                            </table>
                                        @endif
                                    </div>
                              
                            <div class="card-footer clearfix">
                                <div class="pull-left">
                                    {{ $posts->render() }}
                                </div> 
                            </div>
                             <div class="pull-right">
                                <strong>Total: </strong><small>{{ $postCount }} {{ str_plural('Item', $postCount) }}</small>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

</div>
@include('backend.layout.footer')

@endsection

@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endsection
