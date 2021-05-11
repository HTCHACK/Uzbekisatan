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
                                    Emails
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
                                                Name
                                            </th>
                                            <th>
                                                Delete
                                            </th>
                                        </thead>
                                        <tbody>
                                            @foreach ($emails as $key => $email)
                                                <tr>
                                                    <td class="text-primary">{{ ++$key }}</td>
                                                    <td class="text-primary">{{ $email->email }}</td>
                                                    <td class="text-primary">
                                                        <form action="{{ route('emails.destroy', $email->id) }}"
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
                                            <td class="text-primary" style="text-align:center">{!! $emails->links() !!}</td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
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
                                    Emails
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
                                                Name
                                            </th>
                                            <th>
                                                Email ID
                                            </th>
                                            <th>
                                                Message
                                            </th>
                                        </thead>
                                        <tbody>
                                            @foreach ($send_emails as $key => $send_email)
                                                <tr>
                                                    <td class="text-primary">{{ ++$key }}</td>
                                                    <td class="text-primary">{{ $send_email->name }}</td>
                                                    <td class="text-primary">{{ $send_email->email_id }}</td>
                                                    <td class="text-primary">{{ $send_email->message }}</td>
                                                </tr>
                                            @endforeach
                                            <td class="text-primary" style="text-align:center">{!! $emails->links() !!}</td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                            <li><i class="fa fa-warning"></i> {{ $error }}</li>
                        @endforeach
                    </div>
                @elseif (session('asad'))
                    <div class="alert alert-info" role="alert">
                        {{ session('asad') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="table-responsive">

                                    <form method="POST" action="{{ route('send_emails.store') }}" class="form-group"
                                        enctype="multipart/form-data">

                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name ..." name="name">
                                        </div>
                                        <label for="exampleFormControlSelect2">Email</label>
                                        <select class="form-control" name="email_id" id="email">
                                            <option value="select">Select Email</option>
                                            @foreach ($emails as $email)
                                                <option value="{{ $email->id }}">{{ $email->email }}</option>
                                            @endforeach
                                        </select>
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" rows="6" placeholder="Description .."
                                                name="message"></textarea>
                                        </div>

                                        <input type="submit" name="send" class="btn btn-info" value="Send" />
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    

@endsection
