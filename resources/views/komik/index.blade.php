<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Komik') }}
        </h2>
	</x-slot>

	<div class="container mt-5">
		<div class="row justify-content-md-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Daftar Komik</h5>
						
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Sampul</th>
									<th scope="col">Judul Komik</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $nomor = 1; ?>
								@foreach($semuaKomik as $komik)
								<tr>
									<th scope="row">{{ $nomor++ }}</th>
									<td>
										<img src="img/{{ $komik->sampul }}" alt="{{ $komik->judulKomik }}" width="100px">
									</td>
									<td>Otto</td>
									<td></td>
								</tr>
								@endforeach;
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>