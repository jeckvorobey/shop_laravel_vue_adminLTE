@extends('layouts.main')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Добавить продукт</h1>
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
        <form  action="{{ route('product.store') }}" method="post">
          @csrf

          <div class="form-group">
            <label>
              <input type="text" name="title" class="form-control" placeholder="наименование">
            </label>
          </div>

          <div class="form-group">
            <label>
              <input type="text" name="description" class="form-control" placeholder="Описание продукта">
            </label>
          </div>

          <div class="form-group">
            <label>
              <textarea name="content" class="form-control" cols="22" rows="10" placeholder="Контент"></textarea>
            </label>
          </div>

          <div class="form-group">
            <label>
              <input type="text" name="price" class="form-control" placeholder="цена">
            </label>
          </div>

          <div class="form-group">
            <label>
              <input type="text" name="count" class="form-control" placeholder="количество">
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
