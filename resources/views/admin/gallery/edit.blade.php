@extends('admin.layouts.body')
@section('title')
    <title>Administration</title>
@endsection
@section('content')


        <div class="content">
            <div class="container-fluid">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul style="list-style:none;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <a href="{{ route('galleries.index') }}" class="btn btn-warning">Back</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <form method="POST" action="{{ route('galleries.update',[$gallery->id]) }}" class="form-group" enctype="multipart/form-data">

                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name ..." name="name" value="{{$gallery->name}}">
                                        </div>
                                        <div class="form-group">
                                            <img src="{{ asset('storage/' . $gallery->img) }}" alt="image" width="100px" height="100px">
                                            <label for="exampleFormControlFile1"
                                                style="border: 2px solid #9C27B0;border-radius:3px;padding:0.4rem 1rem">Choose
                                                Image Max Size 2MB</label>
                                            <input id="exampleFormControlFile1" type="file" name="img"
                                                class="form-control-file" title="exampleFormControlFile1">
                                        </div>
                                        <button type="submit" class="btn btn-info">Update</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
  
@endsection
