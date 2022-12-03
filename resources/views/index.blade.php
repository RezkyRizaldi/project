@extends('layouts.main')

@section('title', config('app.name'))

@section('content')
<section id="hero" class="p-lg-5" data-aos="fade-in">
	<div id="heroContainer" class="container-fluid p-4 p-lg-5">
		<div id="heroWrapper">
			<h1 class="display-4 text-uppercase fw-semibold">The World's Spice Producers</h1>
			<p class="text-muted fs-6 lead">Spices is Indonesia's fourth largest export commodity, after shrimp, fish and coffee. As one of the world's spice producers, Indonesia has a great opportunity as a supplier of the world's spices to contribute to the Indonesian economy.</p>
		</div>
	</div>
</section>
<section id="about" class="py-5 px-3 p-lg-5 text-center text-lg-start">
	<div class="row flex-column flex-lg-row align-items-center justify-content-between">
		<div class="col-lg-5 flex-grow-1 order-1 order-lg-0 mt-5 mt-lg-0">
			<div data-aos="fade-right" data-aos-duration="1500">
				<h2 class="display-6 text-uppercase fw-normal">Spices is Indonesia's fourth largest export commodity</h2>
				<p class="text-muted fs-6 lead">The largest exporter of spice and spice items. Spices is Indonesia's fourth largest export commodity, after shrimp, fish and coffee. As one of the world's spice producers, Indonesia has a great opportunity as a supplier of the world's spices to contribute to the Indonesian economy.</p>
				<p class="text-muted fs-6 lead">Spices is a plant species that has a strong taste and aroma and also serves as a flavor and food flavor enhancer.</p>
			</div>
		</div>
		<div class="col-lg-7 flex-shrink-0">
			<img class="ms-auto d-block mw-100 object_cover" src="{{ asset('assets/images/about1.jpg') }}" alt="About section image" data-aos="fade-left" data-aos-duration="1500" />
		</div>
	</div>
</section>
<section id="gallery" class="pt-5 px-3 p-lg-3 text-center">
	<h2 class="text-uppercase" data-aos="fade-up" data-aos-duration="1500">Our Gallery</h2>
	<p class="fs-6 text-muted lead col-lg-5 mx-auto mb-5" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">You can see our gallery here, click to checkout our collections. You can see our daily activity and products that exported to many countries and regions all over the world.</p>
	<div class="row" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
		<div class="col-lg-3 pb-4 pb-lg-0">
			<a href="{{ asset('assets/images/gallery1.jpeg') }}" data-lightbox="gallery1" data-title="Spices" data-alt="Spices Image">
				<div class="bg-image hover-zoom shadow-1-strong rounded h-100">
					<img loading="lazy" src="{{ asset('assets/images/gallery1.jpeg') }}" class="w-100 gallery_img" alt="Gallery image 1" />
				</div>
			</a>
		</div>
		<div class="col-lg-9">
			<div class="row mb-lg-4">
				<div class="col-lg-8 pb-4 pb-lg-0">
					<a href="{{ asset('assets/images/gallery2.jpg') }}" data-lightbox="gallery2" data-title="Spices" data-alt="Spices Image">
						<div class="bg-image hover-zoom shadow-1-strong rounded gallery_sm">
							<img loading="lazy" src="{{ asset('assets/images/gallery2.jpg') }}" class="w-100 gallery_img" alt="Gallery image 2" />
						</div>
					</a>
				</div>
				<div class="col-lg-4 pb-4 pb-lg-0">
					<a href="{{ asset('assets/images/gallery3.jpeg') }}" data-lightbox="gallery3" data-title="Spices" data-alt="Spices Image">
						<div class="bg-image hover-zoom shadow-1-strong rounded gallery_sm">
							<img loading="lazy" src="{{ asset('assets/images/gallery3.jpeg') }}" class="w-100 gallery_img" alt="Gallery image 3" />
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg pb-4 pb-lg-0">
					<a href="{{ asset('assets/images/gallery4.jpeg') }}" data-lightbox="gallery4" data-title="Spices" data-alt="Spices Image">
						<div class="bg-image hover-zoom shadow-1-strong rounded h-100">
							<img loading="lazy" src="{{ asset('assets/images/gallery4.jpeg') }}" class="w-100 gallery_img" alt="Gallery image 4" />
						</div>
					</a>
				</div>
				<div class="col-lg pb-4 pb-lg-0">
					<a href="{{ asset('assets/images/gallery5.jpeg') }}" data-lightbox="gallery5" data-title="Spices" data-alt="Spices Image">
						<div class="bg-image hover-zoom shadow-1-strong rounded h-100">
							<img loading="lazy" src="{{ asset('assets/images/gallery5.jpeg') }}" class="w-100 gallery_img" alt="Gallery image 5" />
						</div>
					</a>
				</div>
				<div class="col-lg">
					<a href="{{ asset('assets/images/gallery6.jpg') }}" data-lightbox="gallery6" data-title="Spices" data-alt="Spices Image">
						<div class="bg-image hover-zoom shadow-1-strong rounded h-100">
							<img loading="lazy" src="{{ asset('assets/images/gallery6.jpg') }}" class="w-100 gallery_img" alt="Gallery image 6" />
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="py-5 px-3 p-lg-5 text-center text-lg-start position-relative">
	<div class="row flex-column flex-lg-row align-items-center justify-content-between">
		<div class="col-lg-7 flex-shrink-0 order-1 order-lg-0 mt-5 mt-lg-0">
			<img class="me-auto d-block mw-100 object_cover" src="{{ asset('assets/images/about2.png') }}" alt="About section image 2" data-aos="fade-right" data-aos-duration="1500" />
		</div>
		<div class="col-lg-5 flex-grow-1">
			<div data-aos="fade-left" data-aos-duration="1500">
				<h2 class="display-6 text-uppercase fw-normal">Over ten years in business</h2>
				<p class="text-muted fs-6 lead">Indonesia's main export products for spices are nutmeg, cloves, white pepper, cinnamon, and cardamom, with the majority of its importers being the United States, China, India, Vietnam, and the Netherlands.</p>
			</div>
		</div>
	</div>
	<svg id="wavy" class="position-absolute left-0 bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#FBFBFB" fill-opacity="1" d="M0,192L60,160C120,128,240,64,360,42.7C480,21,600,43,720,80C840,117,960,171,1080,192C1200,213,1320,203,1380,197.3L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
	</svg>
</section>
<section id="products" class="py-5 px-3 p-lg-5 text-center bg-light">
	<div class="pb-5">
		<h2 class="text-uppercase">Products</h2>
		<p class="fs-6 text-muted col-lg-5 lead mx-auto mb-5">Learn more about our product. You can see our product here, click to see more detail about our product.</p>
		<div class="row">
			<div class="col-12 col-lg-4">
				<div class="card mb-4 mb-lg-0">
					<img src="{{ asset('assets/images/product1.png') }}" class="card-img-top products_img" alt="Product image 1" data-mdb-toggle="modal" data-mdb-target="#productModal" />
					<div class="card-body">
						<h5 class="card-title fw-semibold">Cloves</h5>
						<p class="card-text">Cloves are a spice made from the flower buds of an evergreen tree called. Clove flower buds are harvested in their immature state and then dried.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="card mb-4 mb-lg-0">
					<img src="{{ asset('assets/images/product2.jpg') }}" class="card-img-top products_img" alt="Product image 2" data-mdb-toggle="modal" data-mdb-target="#productModal" />
					<div class="card-body">
						<h5 class="card-title fw-semibold">Nutmeg</h5>
						<p class="card-text">Nutmeg is a spice made from the seed of the nutmeg tree (Myristica fragrant), a native Indonesian evergreen tree that is the source of two popular spices.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="card">
					<img src="{{ asset('assets/images/product3.jpeg') }}" class="card-img-top products_img" alt="Product image 3" data-mdb-toggle="modal" data-mdb-target="#productModal" />
					<div class="card-body">
						<h5 class="card-title fw-semibold">Cardamom</h5>
						<p class="card-text">Cardamom is a spice made from the seed pods of various plants in the ginger family. Cardamom pods are spindle-shaped and have a triangular cross-section.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="blog" class="p-3">
	<div class="row align-items-center">
		<div class="col-12 col-lg-3">
			<h2 class="text-uppercase">Blog</h2>
			<p class="fs-6 text-muted lead mb-5" data-aos="fade-up" data-aos-duration="1500">You can see our blog here, click to see blog detail. You can see our daily activity or news about exported, product process and many more.</p>
		</div>
		<div class="col-12 col-lg-9">
			<div id="blogSwiper" class="swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide" data-aos="fade-in">
						<a href="{{ route('posts.show') }}" title="Judul">
							<div class="card bg-light">
								<div class="bg-image hover-zoom h-100">
									<img src="{{ asset('assets/images/blog1.jpeg') }}" class="card-img-top swiper-lazy blog_img" alt="Blog image" />
									<div class="swiper-lazy-preloader"></div>
								</div>
								<div class="card-body">
									<h5 class="card-subtitle text-dark mb-2 fs-6">Black pepper exports increase as economy recovers: IEB Institute</h5>
									<p class="card-text text-muted">6 April 2022 &middot; <i class="fa-solid fa-bars-staggered"></i> Artikel</p>
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide" data-aos="fade-in" data-aos-delay="50">
						<div class="card bg-light">
							<div class="bg-image hover-zoom h-100">
								<img src="{{ asset('assets/images/blog2.jpeg') }}" class="card-img-top swiper-lazy blog_img" alt="Blog image 2" />
								<div class="swiper-lazy-preloader"></div>
							</div>
							<div class="card-body">
								<h5 class="card-subtitle text-dark mb-2 fs-6">Indonesia spices up global community at World Expo 2020 Dubai</h5>
								<p class="card-text text-muted">6 April 2022 &middot; <i class="fa-solid fa-bars-staggered"></i> Artikel</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide" data-aos="fade-in" data-aos-delay="100">
						<div class="card bg-light">
							<div class="bg-image hover-zoom h-100">
								<img src="{{ asset('assets/images/blog3.jpg') }}" class="card-img-top swiper-lazy blog_img" alt="Blog image 3" />
								<div class="swiper-lazy-preloader"></div>
							</div>
							<div class="card-body">
								<h5 class="card-subtitle text-dark mb-2 fs-6">Insight of the Seasoning & Spices Global Market to 2030</h5>
								<p class="card-text text-muted">6 April 2022 &middot; <i class="fa-solid fa-bars-staggered"></i> Artikel</p>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</div>
</section>
<section id="section">
	<div class="bg-image object_cover">
		<img src="{{ asset('assets/images/section-bg.jpeg') }}" class="w-100" alt="Section background" />
		<div class="mask bg-dark">
			<div class="d-flex justify-content-center align-items-center h-100">
				<p class="text-white mb-0 display-5 text-uppercase fw-light text-center" data-aos="fade-in" data-aos-duration="1000">The largest exporter of<br />spice and spice items</h2>
			</div>
		</div>
	</div>
</section>
<section id="team" class="py-5 px-3 p-lg-5">
	<div class="p-lg-5">
		<h2 class="text-uppercase mb-4 text-center" data-aos="fade-in" data-aos-duration="1000">Our Team</h2>
		<div class="row">
			<div class="col-12 col-lg-4">
				<div class="bg-image hover-overlay rounded mb-4 mb-lg-0" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
					<img src="{{ asset('assets/images/team.jpeg') }}" class="img-fluid" alt="Team image" />
					<div class="mask bg-dark"></div>
					<div class="position-absolute bottom-0 start-0 text-light p-4">
						<h5 class="mb-0 fw-bold text_shadow">Andrew Cameron</h5>
						<p class="mb-0 text_shadow">Founder</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="bg-image hover-overlay rounded mb-4 mb-lg-0" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="200">
					<img src="{{ asset('assets/images/team2.jpeg') }}" class="img-fluid" alt="Team image 2" />
					<div class="mask bg-dark"></div>
					<div class="position-absolute bottom-0 start-0 text-light p-4">
						<h5 class="mb-0 fw-bold text_shadow">Amelia Margaret</h5>
						<p class="mb-0 text_shadow">Co-Founder</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="bg-image hover-overlay rounded" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="300">
					<img src="{{ asset('assets/images/team3.jpeg') }}" class="img-fluid" alt="Team image 3" />
					<div class="mask bg-dark"></div>
					<div class="position-absolute bottom-0 start-0 text-light p-4">
						<h5 class="mb-0 fw-bold text_shadow">Robert Longdon</h5>
						<p class="mb-0 text_shadow">Product Manager</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="contact" class="py-5 px-3 p-lg-5 text-center">
	<div class="p-lg-5">
		<h2 class="text-uppercase" data-aos="fade-up" data-aos-duration="1500">Contact Us</h2>
		<hr class="opacity-100 mx-auto rounded mb-4 border border-2 border-success" />
		<div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3">
			<div class="card border border-1 shadow-0" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
				<div class="card-body">
					<i class="fa-solid fa-xl fa-phone text-success mb-2"></i>
					<h5 class="card-title fw-bold">Call us at</h5>
					<h6 class="card-subtitle mb-2 text-muted">(+62) 1334 5678</h6>
				</div>
			</div>
			<div class="card border border-1 shadow-0" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
				<div class="card-body">
					<i class="fa-solid fa-xl fa-paper-plane text-success mb-2"></i>
					<h5 class="card-title fw-bold">Email us at</h5>
					<h6 class="card-subtitle mb-2 text-muted">mail@example.com</h6>
				</div>
			</div>
			<div class="card border border-1 shadow-0" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
				<div class="card-body">
					<i class="fa-brands fa-xl fa-whatsapp text-success mb-2"></i>
					<a href="https://wa.me/" target="_blank" title="WhatsApp">
						<h5 class="card-title fw-bold">WhatsApp</h5>
					</a>
					<h6 class="card-subtitle mb-2 text-muted">(+62) 1334 5678</h6>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}">
@endpush

@push('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/lightbox.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/swiper.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"></script>
@endpush
