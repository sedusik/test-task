@extends('admin.layouts.main', ['title' => 'Добавление категории'])

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление категории</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="w-25">
                    <form method="post" action="{{ route('admin.category.store') }}">
                        @csrf
                        <div class="card-body pl-0">
                            <div class="form-group">
                                <label>Название категории</label>
                                <input type="text" class="form-control" name="name"
                                       placeholder="Название категории">
                                @error('name')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
