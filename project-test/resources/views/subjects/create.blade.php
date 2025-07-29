@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h1>إضافة مادة دراسية</h1>
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="">المواد</a></li>
                <li class="breadcrumb-item active">إضافة مادة</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline" style="max-width:600px; margin:auto;">
                <div class="card-header">
                    <h3 class="card-title">نموذج إضافة مادة</h3>
                </div>

                <form action="{{route('subjects.store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>اسم المادة</label>
                            <input type="text" name="name" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label>رمز المادة</label>
                            <input type="text" name="code" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label>السمستر</label>
                            <input type="text" name="semester" class="form-control" required />
                        </div>

                        

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                        <a href="{{route("subjects.index")}}" class="btn btn-secondary">إلغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>
@endsection
