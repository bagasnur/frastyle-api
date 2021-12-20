@extends('errors::minimal', ['title' => 'Service Unavailable'])

@section('code', '503')
@section('message', __('Service Unavailable'))
