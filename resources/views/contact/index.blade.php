@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Here All Data</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Auction</th>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->message}}</td>

                                    <td>
                                        <a href="{{route('contact.edit',[$contact->id])}}">
                                            <button class="btn btn-outline-warning">Edit</button>
                                        </a>

                                        <a href="{{route('contact.destroy',[$contact->id])}}">
                                            <button class="btn btn-outline-danger">Delete</button>
                                        </a>

                                    </td>

                                </tr>


                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
