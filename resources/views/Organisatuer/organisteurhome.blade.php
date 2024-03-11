@extends('layouts.appbox')

@section('content')



@include('Organisatuer.element.offcanva')
@include('Organisatuer.element.addevent')
@include('Organisatuer.element.updatevent',['events' => $events, 'categorys' => $categorys])

@endsection