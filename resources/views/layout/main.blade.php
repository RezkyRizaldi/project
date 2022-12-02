<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="overflow-x: hidden">
	@include('layout.head')
	<body>
		<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="false">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalTitle">Cloves</h5>
						<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<img src="https://template52.webekspor.com/wp-content/uploads/2022/07/cloves.png" class="w-100 mb-3 img-thumbnail" alt="Fissure in Sandstone" />
						<p class="text-muted">Cloves are a spice made from the flower buds of an evergreen tree called. Clove flower buds are harvested in their immature state and then dried.</p>
					</div>
				</div>
			</div>
		</div>
		@include('layout.header')
		<main>
			@yield('content')
		</main>
		@include('layout.footer')
		@include('layout.scripts')
	</body>
</html>
