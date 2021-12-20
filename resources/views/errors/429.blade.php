@extends('errors::minimal', ['title' => 'Too Many Request'])

@section('code', '429')
@section('message', __('Too Many Requests'))
