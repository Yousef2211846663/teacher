@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../../index2.php">Home</a></li>
                            <li class="breadcrumb-item active">Study Materials </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline">

                    <!-- رأس الكارد -->
                    <div class="card-header d-flex align-items-center">
                        <h3 class="card-title">إدارة المواد الدراسية</h3>
                        <a href="{{route("subjects.create")}}" class="btn btn-primary ml-auto">
                            <i class="fas fa-plus"></i> إضافة مادة
                        </a>
                    </div>

                    <!-- جسم الكارد (الجدول) -->
                    <div class="card-body p-0">
                        <table class="table table-bordered table-hover text-center mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th>#</th>
                                    <th>اسم المادة</th>
                                    <th>رمز المادة</th>
                                    <th>الفصل</th>
                                    <th>إجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Subjects as $subject)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $subject->name }}</td>
                                        <td>{{ $subject->code }}</td>
                                        <td>{{ $subject->semester }}</td>
                                        <td>
                                            <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-sm btn-warning"
                                                title="تعديل">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="delete_subject.php?id={{ $subject->id }}" class="btn btn-sm btn-danger"
                                                title="حذف" onclick="return confirm('هل أنت متأكد أنك تريد حذف هذه المادة؟');">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>


        <!-- /.content -->
    </div>
@endsection