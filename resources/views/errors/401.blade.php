@extends('errors::minimal', ['title' => 'Unauthorized'])

@section('code', '401')
@section('message', __('Unauthorized'))
