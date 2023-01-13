@extends('layouts.main')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Добавить пользователя</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Главная</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <form action="{{ route('user.store') }}" method="post">
          @csrf

          <div class="form-group">
            <label>
              <input type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="Имя">
            </label>
          </div>

          <div class="form-group">
            <label>
              <input type="text" value="{{ old('surname') }}" name="surname" class="form-control" placeholder="Фамилия">
            </label>
          </div>

          <div class="form-group">
            <label>
              <input type="text" value="{{ old('patronymic') }}" name="patronymic" class="form-control"
                     placeholder="Отчество">
            </label>
          </div>

          <div class="form-group">
            <label>
              <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Email">
            </label>
          </div>

          <div class="form-group">
            <label>
              <input type="password" value="{{ old('password') }}" name="password" class="form-control"
                     placeholder="Пароль">
            </label>
          </div>

          <div class="form-group">
            <label>
              <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation"
                     class="form-control" placeholder="Повторите пароль">
            </label>
          </div>

          <div class="form-group">
            <label>
              <input type="text" value="{{ old('age') }}" name="age" class="form-control" placeholder="Возраст">
            </label>
          </div>

          <div class="form-group">
            <label>
              <select class="custom-select form-control-border" name="gender">
                <option disabled selected>пол</option>
                <option {{ old('gender') == 1 ? ' selected' : '' }} value="1">Мужской</option>
                <option {{ old('gender') == 2 ? ' selected' : '' }} value="2">Женский</option>
              </select>
            </label>
          </div>

          <div class="form-group">
            <label>
              <input type="text" value="{{ old('address') }}" name="address" class="form-control" placeholder="Адрес">
            </label>
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Добавить">
          </div>

        </form>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
