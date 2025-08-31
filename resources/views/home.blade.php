@extends('layouts.app')
@section('title','Beranda - SMK Prestasi Prima')

@section('content')
  @include('sections.hero')
  @include('sections.tentang')
  @include('sections.program')
  @include('sections.prestasi')
  @include('sections.kerjasama-ptn')
  @include('sections.industri')
  @include('sections.blog')
@endsection
