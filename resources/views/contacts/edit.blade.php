@extends('layouts.main')

@section('title', 'Contact | Edit')

@section('content')

    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Edit Contact</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('contact.update', $contact) }}"
                                  method="POST">
                                @method('PUT')
                                @csrf
                                @include('contacts._form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
