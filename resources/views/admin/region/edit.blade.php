@extends('admin.layouts.body')
@section('title')
    <title>Administration</title>
@endsection
@section('content')


    <div class="content">
        <div class="container-fluid">
            @if (session('errors'))
                <div class="alert alert-danger" role="alert">
                    {!! session('errors') !!}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <a href="{{ route('regions.index') }}" class="btn btn-warning">Back</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <form method="POST" action="{{ route('regions.update', $region->id) }}" class="form-group"
                                    enctype="multipart/form-data">

                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Region " name="name"
                                            value="{{ $region->name }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="City " name="city"
                                            value="{{ $region->city }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2">Language?</label>
                                        <select name="lang" class="form-control" id="exampleFormControlSelect2">
                                            <option value="uz" {{$region->lang=='uz' ? 'selected' : null}}>O'zbek</option>
                                            <option value="en" {{$region->lang=='en' ? 'selected' : null}}>English</option>
                                            <option value="ru"  {{$region->lang=='ru' ? 'selected' : null}}>русский</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="country_id" id="country">
                                            <option value="select">Select Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Population "
                                            name="population" value="{{ $region->population }}">
                                    </div>
                                    <div class="form-group">
                                        <textarea type="text" rows="10" class="form-control" placeholder="Description"
                                            name="description">{{ $region->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <img src="{{ asset('storage/' . $region->img) }}" alt="image" width="100px"
                                            height="100px">
                                        <label for="exampleFormControlFile1"
                                            style="border: 2px solid #9C27B0;border-radius:3px;padding:0.4rem 1rem">Choose
                                            Image Max Size 2MB</label>
                                        <input id="exampleFormControlFile1" type="file" name="img" class="form-control-file"
                                            title="exampleFormControlFile1">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
