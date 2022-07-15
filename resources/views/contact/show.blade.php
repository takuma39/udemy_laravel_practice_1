@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p>contact show</p>
                    <p>
                        {{ $contact->your_name }}
                    </p>
                    <p>
                        {{ $contact->title }}
                    </p>
                    <p>
                        {{ $contact->email }}
                    </p>
                    <p>
                        {{ $contact->url }}
                    </p>
                    <p>
                        {{ $gender }}
                    </p>
                    <p>
                        {{ $age }}
                    </p>
                    <p>

                    </p>

                    <form method="GET" action="{{ route('contact.edit', ['id' => $contact->id]) }}">
                        @csrf
                        <input class="btn btn-info" type="submit" value="変更する">
                    </form>


                    <form method="POST" action="{{ route('contact.destroy', ['id' => $contact->id ]) }}" id="delete_{{ $contact->id }}">
                        @csrf
                        <a href="#" class="btn btn-danger mt-2" data-id="{{ $contact->id }}" onclick="deletePost(this);">削除する</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function deletePost(e) {
        'use strict';
        if (confirm('本当に削除してもいいですか？')) {
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>
@endsection
