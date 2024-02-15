<section id="about"
  class="bg-center bg-no-repeat bg-cover bg-[url('storage/game-images/blue_archive.jpg')] bg-[#23242a] bg-blend-multiply">
  <div class="px-4 mx-auto max-w-screen-xl text-center pt-36">
    <h1 class="mb-4 font-extrabold tracking-tight leading-none text-white lg:text-5xl">Guides For
      Your Favorite Anime Games</h1>
    <p class="mb-2 font-normal text-gray-300 lg:text-lg sm:px-16 lg:px-48">We provides news, tier list, and
      detailed guides for Blue Archive, Honkai: Star Rail, Project Sekai and many more.
    <p class="mb-8 font-normal text-gray-300 lg:text-lg sm:px-16 lg:px-48">Everything you need in one place</p>
    </p>
    <p class="mt-6 mb-3 font-medium tracking-tight leading-none text-white lg:text-2xl">Popular Games</p>
    <div class="grid grid-cols-3 gap-4 mx-16 mt-6">
      @foreach ($games as $game)
      <div class="max-w-sm bg-transparent rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="/{{ $game->slug }}">
          <div class="rounded-lg overflow-hidden">
            <img class="hover:scale-110 transition duration-500 bg-cover" src="{{ asset('storage/' . $game->image) }}"
              alt="{{ $game->slug }}" />
          </div>
        </a>
        <h5 class="p-5 mb-3 font-medium tracking-tight leading-none text-white lg:text-lg">{{ $game->name }}</h5>
      </div>
      @endforeach
    </div>
  </div>
</section>