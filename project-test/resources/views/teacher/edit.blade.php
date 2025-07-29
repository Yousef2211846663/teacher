@extends('layouts.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif
<div class="content-wrapper">
   <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>تعديل المعلم</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">الرئيسية</li>
                    <li class="breadcrumb-item active">تعديل المعلم</li>
                </ol>
            </div>
        </div>
    </div>
</section>


    <!-- form -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-warning card-outline">
                <div class="card-header">
                    <h3 class="card-title">تعديل بيانات المعلم</h3>
                </div>

                <form method="POST" action="{{ route('teachers.update', $teacher->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label>الاسم</label>
                            <input type="text" name="name" class="form-control" value="{{ $teacher->name }}" required>
                        </div>

                        <div class="form-group">
                            <label>البريد الإلكتروني</label>
                            <input type="email" name="email" class="form-control" value="{{ $teacher->email }}" required>
                        </div>


                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-success">تحديث</button>
                        <a href="{{ route('teachers.index') }}" class="btn btn-secondary">رجوع</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
