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
                                <a href="{{ route('countries.index') }}" class="btn btn-warning">Back</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <form method="POST" action="{{ route('countries.store') }}" class="form-group">

                                        @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Name"
                                                    name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect2">Language?</label>
                                                <select name="lang" class="form-control" id="exampleFormControlSelect2">
                                                    <option value="uz">O'zbek</option>
                                                    <option value="en" selected>English</option>
                                                    <option value="ru" selected>русский</option>
                                                </select>
                                            </div>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection
