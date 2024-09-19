@extends('admin.layouts.main', ['title' => 'Добавление пользователя'])

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление пользователя</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <row>
                    <div class="w-25">
                        <form method="post" action="{{ route('admin.user.store') }}">
                            @csrf
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Введите имя пользователя:</label>
                                    <input type="text" class="form-control" name="name"
                                           placeholder="Имя">
                                    @error('name')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Введите электронную почту пользователя:</label>
                                    <input type="text" class="form-control" name="email"
                                           placeholder="Email">
                                    @error('email')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Пароль пользователя:</label>
                                    <input type="text" class="form-control" name="password"
                                           placeholder="Пароль">
                                    @error('password')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body pl-0">
                                <div class="form-group">
                                    <label>Введите роль пользователя:</label>
                                    <select name="role" class="form-control">
                                        <option value="administrator">Администратор</option>
                                        <option value="user">Пользователь</option>
                                    </select>
                                    @error('role')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </form>
                    </div>
                </row>
            </div>
        </section>
    </div>
@endsection
