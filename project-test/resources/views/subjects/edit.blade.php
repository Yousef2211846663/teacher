{{-- filepath: c:\Users\MWCL\Documents\GitHub\teacher\project-test\resources\views\subjects\edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h1>تعديل مادة دراسية</h1>
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('subjects.index') }}">المواد</a></li>
                <li class="breadcrumb-item active">تعديل مادة</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline" style="max-width:600px; margin:auto;">
                <div class="card-header">
                    <h3 class="card-title">نموذج تعديل مادة</h3>
                </div>

                <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label>اسم المادة</label>
                            <input type="text" name="name" class="form-control" value="{{ $subject->name }}" required />
                        </div>

                        <div class="form-group">
                            <label>رمز المادة</label>
                            <input type="text" name="code" class="form-control" value="{{ $subject->code }}" required />
                        </div>

                        <div class="form-group">
                            <label>الفصل</label>
                            <input type="text" name="semester" class="form-control" value="{{ $subject->semester }}" required />
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">تحديث</button>
                        <a href="{{ route('subjects.index') }}" class="btn btn-secondary">إلغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection