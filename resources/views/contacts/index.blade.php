@extends('layouts.main')

@section('title', 'Contacts | All')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-title">
                        <div class="d-flex align-items-center">
                            <h2 class="mb-0">All Contacts</h2>
                            <div class="ml-auto">
                                <a href="{{ route('contact.create') }}" class="btn btn-success"><i
                                            class="fa fa-plus-circle"></i> Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('contacts._filter')
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Company</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            @if($contacts->count() > 0)
                                @foreach($contacts as $contact)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration + $contacts->firstItem() - 1 }}</th>
                                        <td>{{ $contact->first_name }}</td>
                                        <td>{{ $contact->last_name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->company->name }}</td>
                                        <td>
                                            <a href="{{ route('contact.show', $contact->id) }}"
                                               class="btn btn-sm btn-outline-info">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('contact.edit', $contact->id) }}"
                                               class="btn btn-sm btn-outline-warning">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('contact.delete', $contact->id) }}"
                                               class="btn-delete btn btn-sm btn-outline-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                <form id="form-delete" method="POST" style="display: none">
                                    @csrf
                                    @method('DELETE')
                                </form>

                            @endif
                            </tbody>
                        </table>

                        <div class="my-8">

                            {{ $contacts->appends(request()->only('search', 'c_id'))->links() }}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
