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
                    <h1>إضافة معلم</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">إضافة معلم</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- form -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">إدخال بيانات المعلم الجديد</h3>
                </div>

                <form method="POST" action="{{ route('teachers.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>الاسم</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>البريد الإلكتروني</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>


                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                        <a href="{{ route('teachers.index') }}" class="btn btn-secondary">رجوع</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
