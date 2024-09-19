@extends('admin.layouts.main', ['title' => $user->name])

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $user->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{ $user->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Имя</td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Электронная почта</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Роль</td>
                                            <td>{{ $user->role }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
