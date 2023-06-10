@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header">UC WALK</div>
                                <div class="card-body">
                                    <div class="padding-bottom">
                                        <a href="{{url('/order')}}" >
                                            <button type="button" class="btn btn-warning">ORDER</button>
                                        </a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="table-dark">
                                            <tr>
                                                <th>No.</th>
                                                <th>Menu</th>
                                                <th>Kantin</th>
                                                <th>Harga</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($menus as $menu)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $menu->name }}</td>
                                                    <td>{{ $menu->kantins->name }}</td>
                                                    <td>{{ $menu->price }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
