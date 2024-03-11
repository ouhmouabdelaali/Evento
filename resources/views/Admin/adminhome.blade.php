@extends('layouts.appbox')

@section('content')
@include('Admin.element.offcanva')
@include('Admin.element.tablecategory',['categorys'=>$categorys])
@include('Admin.element.addcategory')
@include('Admin.element.updatecatgory',['categorys'=>$categorys])
@endsection 