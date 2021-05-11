@extends('admin.layouts.body')
@section('title')
    <title>Administration</title>
@endsection
@section('content')

        <div class="content">
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('updated'))
                    <div class="alert alert-info" role="alert">
                        {{ session('updated') }}
                    </div>
                @endif
                @if (session('deleted'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('deleted') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-plain">

                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">
                                    <a href="{{ route('hotels.create') }}" class="btn btn-info"
                                        style="float:right;">Add</a>
                                </h4>
                                <p class="card-category"></p>

                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Hotel
                                            </th>
                                            <th>
                                                Region ID
                                            </th>
                                            <th>
                                                District ID
                                            </th>
                                            <th>
                                                Edit
                                            </th>
                                            <th>
                                                Delete
                                            </th>
                                        </thead>
                                        <tbody>
                                            @foreach ($hotels as $key => $hotel)
                                            <tr>
                                                <td class="text-primary">{{ ++$key }}</td>
                                                <td class="text-primary">{{ $hotel->name }}</td>
                                                <td class="text-primary">{{ $hotel->region_id }}</td>
                                                <td class="text-primary">{{ $hotel->district_id }}</td>
                                                <td class="text-primary"><a class="btn btn-info"
                                                        href="{{ route('hotels.edit', $hotel->id) }}"><i
                                                            class="fa fa-edit"></i></a></td>
                                                <td class="text-primary">
                                                    <form action="{{ route('hotels.destroy', $hotel->id) }}"
                                                        class="inline-flex" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button
                                                            onclick="return confirm('Are you sure you want to delete ?');"
                                                            class="btn btn-danger" type="submit">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                                <td class="text-primary" style="text-align:center"></td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



@endsection
