@extends('admin.layouts.body')
@section('title')
    <title>Administration</title>
@endsection
@section('content')
    @livewireStyles

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
                            <a href="{{ route('tourists.index') }}" class="btn btn-warning">Back</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <form method="POST" action="{{ route('tourists.store') }}" class="form-group"
                                    enctype="multipart/form-data">

                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name ..." name="name">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="rating" id="rating">
                                            <option selected>Select Rank</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2">Language?</label>
                                        <select name="lang" class="form-control" id="exampleFormControlSelect2">
                                            <option value="uz">O'zbek</option>
                                            <option value="en" selected>English</option>
                                            <option value="ru" selected>русский</option>
                                        </select>
                                    </div>
                                    @livewire('admintourist')
                                    <label for="exampleFormControlSelect2">Language</label>
                                    <select name="lang" class="form-control" id="exampleFormControlSelect2">
                                        <option value="uz" selected>O'zbek</option>
                                        <option value="en" selected>English</option>
                                        <option value="ru">русский</option>
                                    </select>
                                    <div class="form-group">
                                        <textarea type="text" id="id_subtitle" class="form-control"
                                            placeholder="Description .." name="description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1"
                                            style="border: 2px solid #9C27B0;border-radius:3px;padding:0.4rem 1rem">Choose
                                            Image Max Size 2MB</label>
                                        <input id="exampleFormControlFile1" type="file" name="img" class="form-control-file"
                                            title="exampleFormControlFile1">
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
    @livewireScripts
@endsection
