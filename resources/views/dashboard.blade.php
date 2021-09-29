<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
		<div class="row justify-content-md-center">
			<div class="col-md-12">
				<div class="card">
				  <div class="card-body">
					<h5 class="card-title">Hello World</h5>
					<img src="img/info-snmptn.png" width="300px">
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-danger">Go somewhere</a>
				  </div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
