@extends('landing.app')

@section('content')
<section class="first-content">
	<div class="container">
		<a href="{{ route('landing.forum') }}">Kembali</a>
		<div class="card py-3 px-3">
			<div class="card-body">
				<h3 class="card-title mb-5">Ayo diskusi!</h3>
				<form action="{{ route('landing.forum.store') }}" method="POST">
					@csrf
					@method('POST')

					<div class="form-group">
						<label>Judul</label>
						<input type="text" class="form-control" name="judul" value="{{ old('judul') }}">
						<small class="form-text text-muted">Judulnya apa ya ? biar tau nih</small>
					</div>
					<div class="form-group">
						<label>Konten</label>
						<textarea name="konten" class="form-control" style="height: 250px">{{ old('konten') }}</textarea>
						<small class="form-text text-muted">Tanyainnya bebas aja , yang penting ga aneh aneh wkwkwk</small>
					</div>
                    <button type="submit" class="btn btn-hewankita btn-block">TANYAIN!!</button>
                </form>
			</div>
		</div>
	</div>    
</section>
		
@endsection