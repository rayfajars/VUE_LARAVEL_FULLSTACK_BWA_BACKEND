@extends('layouts.default')



@section('content')

    <div class="order">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="h4 box-title">
                            Daftar Foto Barang
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table">
                                    <thead>
                                        <tr class="tr">
                                            <th>#</th>
                                            <th>Nama Barang</th>
                                            <th>Foto</th>
                                            <th>Default</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @forelse ($items as $item)
                                      <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->product->name}}</td>
                                        <td>
                                            <img src="{{ url($item->photo)}}" alt="">
                                        </td>
                                        {{-- if else pake tanda tanya itu --}}
                                        <td>{{ $item->is_default ? "Ya" : "Tidak" }}</td>
                                        <td>
                                            <form action="{{ route('product-galleries.destroy',$item->id)}}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                          
                                      @empty
                                          <tr>
                                              <td colspan="6" class="text-center p-5">
                                                  Data tidak tersedia
                                              </td>
                                          </tr>
                                      @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection