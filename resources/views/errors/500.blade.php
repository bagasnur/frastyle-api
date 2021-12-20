@extends('errors::minimal', ['title' => 'Server Error'])

@section('code', '500')
@section('message', __('Server Error'))
