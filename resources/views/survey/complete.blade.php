@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $questionnaire->title ??''}}</div>

                <div class="card-body">
                    <div class="alert alert-success">
                        <strong>Thank You...</strong>
                    </div>
                               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection