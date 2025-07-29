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
                    <!-- You can add a heading if you want -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">Teachers</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">

                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title">إدارة المعلمين</h3>
                    <a href="{{ route('teachers.create') }}" class="btn btn-primary ml-auto">
                        <i class="fas fa-plus"></i> إضافة معلم
                    </a>
                </div>

                <div class="card-body p-0">
                    <table class="table table-bordered table-hover text-center mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>البريد الإلكتروني</th>

                                <th>إجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $index => $teacher)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->email }}</td>

                                    <td>
                                        <a href="{{ route('teachers.edit', $teacher->id) }}"
                                           class="btn btn-sm btn-warning" title="تعديل">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('teachers.destroy', $teacher->id) }}"
                                              method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا المعلم؟');"
                                                title="حذف">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @if($teachers->isEmpty())
                                <tr>
                                    <td colspan="5">لا توجد بيانات معلمين.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>

</div>
@endsection
