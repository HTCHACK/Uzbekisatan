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
                                <a href="{{ route('hotels.index') }}" class="btn btn-warning">Back</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <form method="POST" action="{{ route('hotels.update', [$hotel->id]) }}"
                                        class="form-group" enctype="multipart/form-data">

                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name ..." name="name"
                                                value="{{ $hotel->name }}">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="rating" id="rating">
                                                <option selected>Select Rank</option>
                                                <option value="1" {{$hotel->rating == 1 ? 'selected' : null}}>1</option>
                                                <option value="2" {{$hotel->rating == 2 ? 'selected' : null}}>2</option>
                                                <option value="3" {{$hotel->rating == 3 ? 'selected' : null}}>3</option>
                                                <option value="4" {{$hotel->rating == 4 ? 'selected' : null}}>4</option>
                                                <option value="5" {{$hotel->rating == 5 ? 'selected' : null}}>5</option>
                                            </select>
                                        </div>
                                        <select class="form-control" name="region_id" id="region">
                                            <option value="select">Select Region</option>
                                            @foreach ($regions as $region)
                                            <option value="{{ $region->id }}" {{ ($hotel->region->id == $region->id) ? 'selected' : '' }}>
                                                {{ $region->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        <select class="form-control" name="district_id" id="district">
                                            <option value="select">Select District</option>
                                            @foreach ($districts as $district)
                                            <option value="{{ $district->id }}" {{ ($hotel->district->id == $district->id) ? 'selected' : '' }}>
                                                {{ $district->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2">Language</label>
                                            <select name="lang" class="form-control" id="exampleFormControlSelect2">
                                                <option value="uz" {{ $hotel->lang == 'uz' ? 'selected' : null }}>O'zbek
                                                </option>
                                                <option value="en" {{ $hotel->lang == 'en' ? 'selected' : null }}>English
                                                </option>
                                                <option value="ru" {{ $hotel->lang == 'ru' ? 'selected' : null }}>русский
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <textarea type="text" id="id_subtitle" class="form-control"
                                                placeholder="Description .." name="description"
                                                value="{{ $hotel->description }}">{{ $hotel->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <img src="{{ asset('storage/' . $hotel->img) }}" alt="image" width="100px"
                                                height="100px">
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
