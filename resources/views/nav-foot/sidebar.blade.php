<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<div class="min-h-screen fixed z-10 bg-[#f7f7f7]">
		<div
			class="sidebar sticky left-0 min-h-screen w-[3.35rem] overflow-hidden hover:w-56 hover:bg-white hover:shadow-lg">
			<div class="flex min-h-screen flex-col justify-between pt-2 pb-6 bg-[#223d5d]">
				<div>
					<div class="w-max p-2.5">
						<img src="{{ asset('assets/logo/logo.png') }}" class="w-8 h-8" alt="logo-buddhi">
					</div>
					<ul class="mt-6 space-y-1 tracking-wide">
						<li class="min-w-max">
							<a href="/dashboard" aria-label="dashboard"
								class="transition ease-in-out duration-300 hover:bg-gradient-to-r hover:from-sky-600 hover:to-cyan-400 relative flex items-center space-x-4 px-4 py-3 text-white {{ $title === 'Dashboard' ? 'bg-gradient-to-r from-sky-600 to-cyan-400' : '' }}">
								<i class="fa-solid fa-table-columns mr-1"></i>
								<span class="">Dashboard</span>
							</a>
						</li>
						<li class="min-w-max">
							<a href="/dashboard/users"
								class="transition ease-in-out duration-300 hover:bg-gradient-to-r hover:from-sky-600 hover:to-cyan-400 group flex items-center space-x-4 px-4 py-3 text-white {{ $title === 'Account' ? 'bg-gradient-to-r from-sky-600 to-cyan-400' : '' }}">
								<i class="fa-solid fa-user mr-2"></i>
								<span class="">Account</span>
							</a>
						</li>
						<li class="min-w-max">
							<a href="/dashboard/posts"
								class="transition ease-in-out duration-300 hover:bg-gradient-to-r hover:from-sky-600 hover:to-cyan-400 group flex items-center space-x-4 px-4 py-3 text-white {{ $title === 'Posts' ? 'bg-gradient-to-r from-sky-600 to-cyan-400' : '' }}">
								<i class="fa-solid fa-file mr-2"></i>
								<span class="">Posts</span>
							</a>
						</li>
						<li class="min-w-max">
							<a href="/dashboard/categories"
								class="transition ease-in-out duration-300 hover:bg-gradient-to-r hover:from-sky-600 hover:to-cyan-400 group flex items-center space-x-4 px-4 py-3 text-white">
								<i class="fa-solid fa-list mr-2"></i>
								<span class="">Categories</span>
							</a>
						</li>
						<li class="min-w-max">
							<a href="/dashboard/carousels"
								class="transition ease-in-out duration-300 hover:bg-gradient-to-r hover:from-sky-600 hover:to-cyan-400 group flex items-center space-x-4 px-4 py-3 text-white {{ $title === 'Carousel' ? 'bg-gradient-to-r from-sky-600 to-cyan-400' : '' }}">
								<i class="fa-solid fa-image mr-2"></i>
								<span class="">Carousel</span>
							</a>
						</li>
						<li class="min-w-max">
							<a href="/dashboard/teachers"
								class="transition ease-in-out duration-300 hover:bg-gradient-to-r hover:from-sky-600 hover:to-cyan-400 group flex items-center space-x-4 px-4 py-3 text-white {{ $title === 'Teachers' ? 'bg-gradient-to-r from-sky-600 to-cyan-400' : '' }}">
								<i class="fa-solid fa-chalkboard-user mr-1"></i>
								<span class="">Teachers</span>
							</a>
						</li>
						<li class="min-w-max">
							<a href="/dashboard/extracurriculars"
								class="transition ease-in-out duration-300 hover:bg-gradient-to-r hover:from-sky-600 hover:to-cyan-400 group flex items-center space-x-4 px-4 py-3 text-white {{ $title === 'Ekstrakurikulers' ? 'bg-gradient-to-r from-sky-600 to-cyan-400' : '' }}">
								<i class="fa-solid fa-guitar mr-1"></i>
								<span class="">Extracurricular</span>
							</a>
						</li>
						<li class="min-w-max">
							<a href="/dashboard/facilities"
								class="transition ease-in-out duration-300 hover:bg-gradient-to-r hover:from-sky-600 hover:to-cyan-400 group flex items-center space-x-4 px-4 py-3 text-white {{ $title === 'Fasilitas' ? 'bg-gradient-to-r from-sky-600 to-cyan-400' : '' }}">
								<i class="fa-solid fa-location-dot mr-2"></i>
								<span class="">Facilities</span>
							</a>
						</li>
						<li class="min-w-max">
							<a href="/dashboard/achievement"
								class="transition ease-in-out duration-300 hover:bg-gradient-to-r hover:from-sky-600 hover:to-cyan-400 group flex items-center space-x-4 px-4 py-3 text-white {{ $title === 'Prestasi' ? 'bg-gradient-to-r from-sky-600 to-cyan-400' : '' }}">
								<i class="fa-solid fa-trophy mr-1"></i>
								<span class="">Achievement</span>
							</a>
						</li>
						<li class="min-w-max">
							<a href="/dashboard/galleries"
								class="transition ease-in-out duration-300 hover:bg-gradient-to-r hover:from-sky-600 hover:to-cyan-400 group flex items-center space-x-4 px-4 py-3 text-white {{ $title === 'Galleries' ? 'bg-gradient-to-r from-sky-600 to-cyan-400' : '' }}">
								<i class="fa-solid fa-images mr-1"></i>
								<span class="">Gallery</span>
							</a>
						</li>
						<li class="min-w-max">
							<a href="/"
								class="transition ease-in-out duration-300 hover:bg-gradient-to-r hover:from-sky-600 hover:to-cyan-400 group flex items-center space-x-4 px-4 py-3 text-white">
								<i class="fa-solid fa-house mr-1"></i>
								<span class="">Home</span>
							</a>
						</li>
						<li class="min-w-max">
							<form action="/logout" method="post" class="inline">
								@csrf
								<button type="submit"
									class="w-full transition ease-in-out duration-300 hover:bg-gradient-to-r hover:from-sky-600 hover:to-cyan-400 group flex items-center space-x-4 px-4 py-3 text-white">
									<i class="fa-solid fa-right-from-bracket mr-2"></i>
									<span class="">Logout</span>
								</button>
							</form>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>