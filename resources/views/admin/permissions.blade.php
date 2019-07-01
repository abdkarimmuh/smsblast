@extends('layouts.admin-master')

@section('title')
Manage Permissions
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Manage Permissions</h1>
  </div>
  <div class="section-body">
      <users-component></users-component>
  </div>
</section>
@endsection
