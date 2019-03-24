@extends('backend.layout.app')

@include('backend.layout.header')

@include('backend.layout.sidebar')


@section('content')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid py-5">
                <div class="row justify-content-center py-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">News & Events<br><small>Add New Post</small></div>
                                <!-- <ol class="breadcrumb">
                                    <li>
                                        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Dashboard</a>
                                    </li>
                                    <li><a href="{{ route('backend1.blog.index') }}">Blog</a></li>
                                    <li class="active">Add new</li>
                                </ol> -->

                                    <!-- making create form -->
                                    <div class="card-body">
                                       {!! Form::model($post, [
                                            'method' =>'POST',
                                            'route' =>'backend1.blog.store',

                                       ]) !!}

                                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                            {!! Form::label('title') !!}
                                            {!! Form::text('title', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('title'))
                                                <span class="help-block">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                                            {!! Form::label('slug') !!}
                                            {!! Form::text('slug', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('slug'))
                                                <span class="help-block">{{ $errors->first('slug') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('excerpt') !!}
                                            {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                                            {!! Form::label('body') !!}
                                            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('body'))
                                                <span class="help-block">{{ $errors->first('body') }}</span>
                                            @endif
                                        </div>

                                        <!-- <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                                            {!! Form::label('published_at','Publish Date') !!}
                                            {!! Form::text('published_at', null, ['class' => 'form-control', 'placeholder' => 'Y-m-d H:i:s']) !!}

                                            @if($errors->has('published_at'))
                                                <span class="help-block">{{ $errors->first('published_at') }}</span>
                                            @endif
                                        </div> -->

                                        

                                        <hr>

                                        {!! Form::submit('Create new post', ['class' => 'btn btn-primary']) !!}

                                       {!! Form::close() !!}
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

        $('#title').on('blur', function() {
            var theTitle = this.value.toLowerCase().trim(),
                slugInput = $('#slug'),
                theSlug = theTitle.replace(/&/g, '-and-')
                                  .replace(/[^a-z0-9-]+/g, '-')
                                  .replace(/\-\-+/g, '-')
                                  .replace(/^-+|-+$/g, '');
                                

            slugInput.val(theSlug);    
        });
    </script>
@endsection
