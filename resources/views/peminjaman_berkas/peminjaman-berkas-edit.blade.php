@extends('layouts.master')

@section('title', 'Peminjaman Berkas')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                {{-- <div class="card-header">
                  <h4>HTML5 Form Basic</h4>
                </div> --}}
                <div class="card-body">
                  {{-- <div class="alert alert-info">
                    <b>Note!</b> Not all browsers support HTML5 type input.
                  </div> --}}
                <form action="{{ route('peminjaman-berkas.u', $peminjaman_berkas->id)}}" method="POST">
                  @csrf
                  @method('patch')
                
                      <div class="row">

                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('no_berkas')
                                class="text-danger"
                            @enderror>No Berkas
                              @error('no_berkas')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="no_berkas"
                              @if (old('no_berkas'))
                                value="{{ old('no_berkas')}}"
                              @else
                                value="{{ $peminjaman_berkas->no_berkas}}"
                              @endif 
                              class="form-control">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('tgl_pinjam')
                                class="text-danger"
                            @enderror>Tanggal Pinjam
                              @error('tgl_pinjam')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="tgl_pinjam"
                            @if (old('tgl_pinjam'))
                              value="{{ old('tgl_pinjam')}}"
                            @else
                              value="{{ $peminjaman_berkas->tgl_pinjam}}"
                            @endif 
                            class="form-control">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('uraian_berkas')
                                class="text-danger"
                            @enderror>Jenis Arsip
                              @error('uraian_berkas')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="uraian_berkas"
                            @if (old('uraian_berkas'))
                              value="{{ old('uraian_berkas')}}"
                            @else
                              value="{{ $peminjaman_berkas->uraian_berkas}}"
                            @endif 
                            class="form-control"> 
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('tahun')
                                class="text-danger"
                            @enderror>Tahun
                              @error('tahun')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="tahun"
                            @if (old('tahun'))
                              value="{{ old('tahun')}}"
                            @else
                              value="{{ $peminjaman_berkas->tahun}}"
                            @endif 
                            class="form-control">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('jml_berkas')
                                class="text-danger"
                            @enderror>Jumlah Berkas
                              @error('jml_berkas')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="jml_berkas"
                            @if (old('jml_berkas'))
                              value="{{ old('jml_berkas')}}"
                            @else
                              value="{{ $peminjaman_berkas->jml_berkas}}"
                            @endif 
                            class="form-control">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('nama_peminjam')
                                class="text-danger"
                            @enderror>Nama Peminjam
                              @error('nama_peminjam')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="nama_peminjam"
                            @if (old('nama_peminjam'))
                              value="{{ old('nama_peminjam')}}"
                            @else
                              value="{{ $peminjaman_berkas->nama_peminjam}}"
                            @endif 
                            class="form-control">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('unit_pengolah')
                                class="text-danger"
                            @enderror>Unit Pengolah
                              @error('unit_pengolah')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="unit_pengolah"
                            @if (old('unit_pengolah'))
                              value="{{ old('unit_pengolah')}}"
                            @else
                              value="{{ $peminjaman_berkas->unit_pengolah}}"
                            @endif 
                            class="form-control">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('nama_petugas')
                                class="text-danger"
                            @enderror>Nama Petugas
                              @error('nama_petugas')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="nama_petugas"
                            @if (old('nama_petugas'))
                              value="{{ old('nama_petugas')}}"
                            @else
                              value="{{ $peminjaman_berkas->nama_petugas}}"
                            @endif 
                            class="form-control">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('kategori_petugas')
                                class="text-danger"
                            @enderror>Kategori Petugas
                              @error('kategori_petugas')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="kategori_petugas"
                            @if (old('kategori_petugas'))
                              value="{{ old('kategori_petugas')}}"
                            @else
                              value="{{ $peminjaman_berkas->kategori_petugas}}"
                            @endif 
                            class="form-control">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label @error('status')
                                class="text-danger"
                            @enderror>Status
                              @error('status')
                                  | {{ $message}}
                              @enderror
                            </label>
                            <input type="text" name="status"
                            @if (old('status'))
                              value="{{ old('status')}}"
                            @else
                              value="{{ $peminjaman_berkas->status}}"
                            @endif 
                            class="form-control">
                          </div>
                        </div>
                  </div>

                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')

@endpush
