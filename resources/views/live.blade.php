@extends('layouts.app_live')

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

                    You are in LiveDisplay!!

                    <form action="home" method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="submit" value="戻る">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
