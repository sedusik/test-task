@extends('admin.layouts.main', ['title' => 'Редактирование категории'])

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование категории</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="w-25">
                    <form method="post" action="{{ route('admin.category.update', $category->id) }}">
                        @csrf
                        @method('patch')
                        <div class="card-body pl-0">
                            <div class="form-group">
                                <label>Название категории</label>
                                <input type="text" class="form-control" name="name"
                                       value="{{ $category->name }}"
                                @error('name')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Обновить">
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
