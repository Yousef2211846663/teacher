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
                            <a href="add.php" class="btn btn-primary ml-auto">
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
                                        <th>السنة</th>
                                        <th>الفصل</th>
                                        <th>القسم</th>
                                        <th>إجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- صف افتراضي 1 -->
                                    <tr>
                                        <td>1</td>
                                        <td>برمجة 1</td>
                                        <td>IT101</td>
                                        <td>1</td>
                                        <td>الأول</td>
                                        <td>تقنية معلومات</td>
                                        <td>
                                            <a href="edit.php?id=1" class="btn btn-sm btn-warning"
                                                title="تعديل">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="delete.php?id=1" class="btn btn-sm btn-danger" title="حذف"
                                                onclick="return confirm('هل أنت متأكد أنك تريد حذف هذه المادة؟');">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- صف افتراضي 2 -->
                                    <tr>
                                        <td>2</td>
                                        <td>هياكل البيانات</td>
                                        <td>IT202</td>
                                        <td>2</td>
                                        <td>الثاني</td>
                                        <td>تقنية معلومات</td>
                                        <td>
                                            <a href="edit.php?id=2" class="btn btn-sm btn-warning"
                                                title="تعديل">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="delete_subject.ph?id=2" class="btn btn-sm btn-danger" title="حذف"
                                                onclick="return confirm('هل أنت متأكد أنك تريد حذف هذه المادة؟');">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- صف افتراضي 3 -->
                                    <tr>
                                        <td>3</td>
                                        <td>شبكات الحاسوب</td>
                                        <td>IT305</td>
                                        <td>3</td>
                                        <td>الأول</td>
                                        <td>تقنية معلومات</td>
                                        <td>
                                            <a href="edit.php?id=3" class="btn btn-sm btn-warning"
                                                title="تعديل">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="delete_subject.php?id=3" class="btn btn-sm btn-danger" title="حذف"
                                                onclick="return confirm('هل أنت متأكد أنك تريد حذف هذه المادة؟');">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>


            <!-- /.content -->
        </div>
@endsection