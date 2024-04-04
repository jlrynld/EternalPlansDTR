@extends('layouts.app')

@section('title', 'TItle of Page / Name of Project')

@section('contents')

    <div class="container">
        <div class="p-3 card shadow">
            <h3 class="text-green">Header <a class="h4" href="{{ route('dashboard') }}" style="float:right;">
                <i class="far fa-arrow-alt-circle-left"></i> Back</a>
            </h3>
            <hr class="m-0 mb-3">
        </div>
    </div>

    <div class="container" id="transactions-container" style="display: none;">
        <div class="mt-3 px-3 py-4 card shadow">

        </div>
    </div>

@endsection

@section('scripts')
@endsection
