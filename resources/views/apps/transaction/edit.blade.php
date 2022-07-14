@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; padding-bottom: 40px; min-height: 600px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Transaksi</h5></div>
            <p class="card-text">
            <form action="{{ route('transaction') }}" method="POST">
                @csrf @method('PUT')
                <input type="hidden" name="id" value="{{ $transaction->id }}">
                <div class="form-group mt-2 mt-2">
                    <label for="">Lapangan</label>
                    <select name="field_id" id="" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach ($field as $item)
                            <option value="{{ $item->id }}"
                                @if ($item->id == $transaction->field_id)
                                    selected
                                @endif>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2 mt-2">
                    <label for="">Pelanggan</label>
                    <select name="customer_id" id="" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach ($customer as $item)
                            <option value="{{ $item->id }}"
                                @if ($item->id == $transaction->customer_id)
                                    selected
                                @endif>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2 mt-2">
                    <label for="">Jam Mulai</label>
                    <input type="time" name="start" class="form-control" value="{{ $transaction->start }}">
                </div> 
                <div class="form-group mt-2 mt-2">
                    <label for="">Jam Selesai</label>
                    <input type="time" name="end" class="form-control" value="{{ $transaction->end }}">
                </div> 
                <div class="form-group mt-2 mt-2">
                    <label for="">Jumlah</label>
                    <input type="number" name="total" class="form-control" value="{{ $transaction->total }}">
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-sm btn-success" name="simpan">Simpan</button>
                </div>
            </form>
            </p>
        </div>
        
    </div>
</div>
@endsection