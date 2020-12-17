@extends('layouts.app')
@section('title', '- Inquiries')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
            <div class="card-header">Inquiries</div>
                <div class="card-body bg-white">
                    <table class="table caption-top">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Inquiry Type</th>
                                <th scope="col">Subject</th>
                                @can('edit-users')
                                    <th scope="col">ID Number</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact Number</th>
                                @endcan
                                <th scope="col">Concern</th>
                                <th scope="col">Submitted on</th>
                                @can('edit-users')
                                    <th scope="col">Done?</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data->sortByDesc('created_at') as $i)
                            <tr>
                                <td>{{ $i->fname }} {{ $i->lname }}</td>
                                <td style="color:blue">{{ $i->type_of_inquiry }}</td>
                                <td>{{ $i->subject_inquiry }}</td>
                                @can('edit-users')
                                    <td>{{ $i->id_number }}</td>
                                    <td>{{ $i->email }}</td>
                                    <td>{{ $i->contact_number }}</td>
                                @endcan
                                    <td>{{ $i->content_inquiry }}</td>
                                    <td>{{ $i->created_at }}</td>
                                @can('edit-users')
                                    <td><a class="btn btn-primary p-1" href="{{'done/'.$i->id }}">Done</a></td>
                                @endcan
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
@endsection