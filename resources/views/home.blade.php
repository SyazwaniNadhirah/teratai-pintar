{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- check authentication user --}}
                    {{-- @if (auth()->user()->is_admin ==1)
                    {{-- display link admin routed if the user is admin --}}
                        {{-- <a href="{{url('admin/routes')}}">Admin</a>
                    @else
                    <a href="{{url('user/routes')}}">User</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- @endsection  --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Display content based on user role --}}
                    @if (auth()->user()->is_admin == 1)
                        {{ __('Welcome To Admin Dashboard') }}
                        {{-- Add admin-specific content here --}}
                        <a href="{{url('admin/routes')}}">Admin</a>
                    @else
                        {{ __('Welcome To User Dashboard') }}
                        {{-- Add user-specific content here --}}
                        <a href="{{url('user/routes')}}">User</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

