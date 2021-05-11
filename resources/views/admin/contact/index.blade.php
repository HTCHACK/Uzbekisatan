@extends('admin.layouts.body')
@section('title')
    <title>Administration</title>
@endsection
@section('content')


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">Contact</h4>
                                <p class="card-category"> Clients Message</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Phone Number
                                            </th>
                                            <th>
                                                Message
                                            </th>
                                        </thead>
                                        <tbody>
                                            @foreach($contacts as $key => $contact)
                                                <tr>
                                                    <td class="text-primary">{{++$key}}</td>
                                                    <td class="text-primary">{{ $contact->name }}</td>
                                                    <td class="text-primary">{{ $contact->phone_number }}</td>
                                                    <td class="text-primary">{{ $contact->message }}</td>
                                                </tr>
                                            @endforeach
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
