@extends('layouts.master')
@section('content')
    <button type="button" class="btn btn-primary btn-fw">Primary</button>
@include('orders.order_info')
@endsection
@push('scripts')
    <script src="{!! asset('js/orders.js') !!}"></script>
    @endpush