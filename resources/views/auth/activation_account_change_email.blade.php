@extends('base')

@section('title', 'Change your email address')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2 class="text-center text-muted mb-3 mt-5">Change your email address</h2>

                {{--On inclus les messages d'alerte--}}
                @include('alerts.alert-message')

                <form method="POST" action="{{ route('app_activation_account_change_email', ['token' => $token]) }}">
                    @csrf

                    <div class="md-3">
                        <label for="new-email" class="form-label">New Email address</label>
                        <input class="form-control @if (Session::has('danger')) is-invalid  @endif" type="email" name="new-email" id="new-email" placeholder="Enter the new email address" value="@if(Session::has('new_email')) {{ Session::get('new_email') }} @endif" required>
                    </div>

                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary" type="submit">Change</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
