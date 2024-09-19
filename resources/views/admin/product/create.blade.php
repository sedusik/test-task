@extends('admin.layouts.main', ['title' => 'Добавление категории'])

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление товара</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="w-25">
                    <form method="post" action="{{ route('admin.product.store') }}">
                        @csrf
                        <div class="card-body pl-0">
                            <div class="form-group">
                                <label>Название товара</label>
                                <input type="text" class="form-control" name="name"
                                       placeholder="Название товара">
                                @error('name')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="description" placeholder="Описание товара" cols="50" rows="5"></textarea>
                                @error('description')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Цена</label>
                                <input type="number" class="form-control" name="price"
                                       placeholder="Цена товара">
                                @error('price')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Выберите категорию</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
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
