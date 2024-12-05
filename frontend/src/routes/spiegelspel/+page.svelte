<script>
  import { onMount } from "svelte";
  import { writable } from "svelte/store";

  let post = {};

  const scrolled = writable(false);
  const currentPath = writable();
  const openMenu = writable(false);
  const CACHE_DURATION = 60 * 60 * 1000;

  onMount(() => {
    currentPath.set(window.location.pathname);

    const handleScroll = () => {
      scrolled.set(window.scrollY > 75);
    };

    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  });

  const handleBackDropClick = () => {
    openMenu.set(false);
  };

  onMount(async () => {
    if (typeof localStorage !== "undefined") {
      const cachedPost =
        JSON.parse(localStorage.getItem("spiegelspelPost")) || {};
      const cachedTimestamp = localStorage.getItem("spiegelspelPostTimestamp");

      const isCacheValid =
        cachedTimestamp && Date.now() - cachedTimestamp < CACHE_DURATION;

      if (isCacheValid && cachedPost.id) {
        post = cachedPost;
      } else {
        const res = await fetch(
          "https://u230654.gluwebsite.nl/focus6/wordpress/wp-json/wp/v2/posts/114",
        );
        post = await res.json();
        localStorage.setItem("spiegelspelPost", JSON.stringify(post));
        localStorage.setItem("spiegelspelPostTimestamp", Date.now());
      }
    }
  });
</script>

<header
  class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 ease-in-out {$scrolled
    ? 'h-16'
    : 'h-24'} "
>
  <nav
    class="bg-white transition-all duration-500 p-4 {$scrolled
      ? 'shadow-sm rounded-b-3xl'
      : 'shadow-none'}"
  >
    <div class="flex justify-between items-center">
      <div>
        <a href="/focus6/"
          ><img
            src={post.img_logo}
            alt="Logo"
            class="{$scrolled
              ? 'w-44 md:w-56'
              : 'w-48 md:w-72'} h-auto md:ml-12 transition-all duration-500 my-3"
          /></a
        >
      </div>
      <div class="pr-12 hidden md:block">
        <ul class="flex font-semibold text-lg items-center">
          <li class="pr-1">
            <a
              href="/focus6/"
              class="{$currentPath === '/focus6/'
                ? 'bg-gray-100 hover:bg-gray-200'
                : 'hover:bg-gray-100'} rounded-md py-2 px-4 transition-all duration-500"
              >Home</a
            >
          </li>
          <li class="pr-1">
            <a
              href="/focus6/concept"
              class="{$currentPath === '/focus6/concept'
                ? 'bg-gray-100 hover:bg-gray-200'
                : 'hover:bg-gray-100'} rounded-md py-2 px-4 transition-all duration-500"
              >Het Doel
            </a>
          </li>
          <li class="pr-1">
            <a
              href="/focus6/services"
              class="{$currentPath === '/focus6/services'
                ? 'bg-gray-100 hover:bg-gray-200'
                : 'hover:bg-gray-100'} rounded-md py-2 px-4 transition-all duration-500"
              >Onze Waardes</a
            >
          </li>
          <li class="pr-1">
            <a
              href="/focus6/services"
              class="{$currentPath === '/focus6/services'
                ? 'bg-gray-100 hover:bg-gray-200'
                : 'hover:bg-gray-100'} rounded-md py-2 px-4 transition-all duration-500"
              >Het Spiegelspel</a
            >
          </li>
          <li>
            <a href="/focus6/"
              ><img
                src={post.img_focus6}
                alt="Focus6"
                class="w-auto h-10 ml-3"
              /></a
            >
          </li>
        </ul>
      </div>

      <!-- Mobile -->
      <div class="md:hidden flex items-center">
        <button
          on:click={() => openMenu.update((n) => !n)}
          class="text-black"
          aria-label="Button"
        >
          <svg
            class="w-6 h-6"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            ></path>
          </svg>
        </button>
      </div>
    </div>
  </nav>

  <div
    class="fixed top-0 left-0 right-0 bottom-0 bg-black z-30 transition-opacity duration-500 ease-in-out"
    class:opacity-40={$openMenu}
    class:opacity-0={!$openMenu}
    class:pointer-events-none={!$openMenu}
    on:click={handleBackDropClick}
    role="button"
    tabindex="0"
    on:keydown={(e) => e.key === "Enter" && handleBackDropClick()}
  ></div>

  <div
    class="fixed top-0 right-0 h-full w-64 bg-white z-40 transform transition-transform duration-500 ease-in-out"
    class:translate-x-0={$openMenu}
    class:translate-x-full={!$openMenu}
  >
    <div class="flex justify-end p-4">
      <button
        on:click={() => openMenu.set(false)}
        class="text-black"
        aria-label="Button"
      >
      </button>
    </div>

    <ul
      class="flex flex-col items-center pt-24 font-semibold text-lg space-y-3"
    >
      <li class="py-3">
        <a
          href="/focus6/"
          class="{$currentPath === '/focus6'
            ? 'bg-gray-100 hover:bg-gray-200'
            : 'hover:bg-gray-100'} rounded-md px-4 py-2 transition-all duration-500"
          >Home</a
        >
      </li>
      <li class="py-3">
        <a
          href="/focus6/concept"
          class="{$currentPath === '/focus6/concept'
            ? 'bg-gray-100 hover:bg-gray-200'
            : 'hover:bg-gray-100'} rounded-md px-4 py-2 transition-all duration-500"
          >Ons Doel</a
        >
      </li>
      <li class="py-3">
        <a
          href="/focus6/services"
          class="{$currentPath === '/focus6/services'
            ? 'bg-gray-100 hover:bg-gray-200'
            : 'hover:bg-gray-100'} rounded-md px-4 py-2 transition-all duration-500"
          >Onze Waardes</a
        >
      </li>
      <li class="py-3">
        <a
          href="/focus6/services"
          class="{$currentPath === '/focus6/services'
            ? 'bg-gray-100 hover:bg-gray-200'
            : 'hover:bg-gray-100'} rounded-md px-4 py-2 transition-all duration-500"
          >Het Spiegelspel</a
        >
      </li>
      <li class="py-3">
        <a href="/focus6/"
          ><img src={post.img_focus6} alt="Focus6" class="w-auto h-10" /></a
        >
      </li>
    </ul>
  </div>
</header>

<main class="mt-24">
  <section class="relative">
    <div class="relative w-full mx-auto bg-blue-50">
      <img
        src={post.img_header}
        alt="Header"
        class="w-full h-[40rem] md:h-screen object-cover rounded-b-3xl md:rounded-r-full"
      />
      <div
        class="absolute inset-0 rounded-3xl text-white pt-16 md:pt-48 md:pl-48"
      >
        <div
          class="w-full md:w-2/3 flex justify-center items-center md:items-start flex-col md:flex-none"
        >
          <h2
            class="text-4xl md:text-7xl font-semibold pb-6 [text-shadow:_0_4px_4px_rgb(0_0_0_/_0.2)] text-center md:text-left"
          >
            Ons <span class="text-[#174895]">S</span><span
              class="text-[#DE2355]">piegelspel</span
            >!
          </h2>
          <p
            class="w-11/12 md:w-3/4 text-center md:text-left text-lg pt-4 pb-10 md:pl-1.5 [text-shadow:_0_4px_4px_rgb(0_0_0_/_0.2)]"
          >
            {post.header_paragraph}
          </p>
        </div>
      </div>
    </div>
  </section>
  <div class="bg-blue-50 w-full h-[70rem] md:h-[80rem]">
    <div class="flex items-center justify-center">
      <h2
        class="h-[5rem] max-[475px]:w-[20rem] max-[475px]:text-2xl w-[60rem] max-sm:w-[30rem] bg-blue-400 rounded-3xl mt-12 md:mt-[10rem] flex justify-center items-center text-4xl font-bold text-white drop-shadow-xl max-md:w-[40rem]"
      >
        Doel van het Spiegelspel
      </h2>
    </div>
    <div
      class="flex justify-center items-center mt-[8rem] gap-[10rem] max-lg:gap-[3rem] max-md:flex-col"
    >
      <img
        class="w-[30rem] h-auto mt-[3rem] max-md:mt-[0rem] max-sm:w-[20rem]"
        src={post.img_telescoop}
        alt=""
      />
      <div
        class="max-[475px]:w-[20rem] max-[475px]:text-2xl max-[475px]:h-[7rem] w-[25rem] h-[15rem] bg-blue-400 rounded-3xl drop-shadow-lg text-white pl-4 pt-2 text-[2.26rem] font-bold"
      >
        {post.hero_paragraph}
      </div>
    </div>

    <div class="flex justify-center items-center">
      <h2
        class="max-[475px]:w-[20rem] max-[475px]: max-sm:w-[25rem] h-[5rem] w-[70rem] bg-blue-400 mt-[3rem] rounded-3xl flex justify-center items-center text-4xl font-bold text-white drop-shadow-xl max-lg:w-[60rem] max-md:w-[40rem]"
      >
        Meerwaarde
      </h2>
    </div>
    <div
      class="flex justify-center items-center gap-[50rem] max-md:gap-[20rem] max-sm:gap-[10rem]"
    >
      <div class="w-[1rem] h-[3rem] bg-gray-400"></div>
      <div class="w-[1rem] h-[3rem] bg-gray-400"></div>
    </div>
    <div class="flex justify-center items-center">
      <div
        class="w-[73rem] h-72 md:h-[20rem] max-[475px]:w-[22rem] bg-gray-200 rounded-xl max-lg:w-[61rem] max-md:w-[40rem] max-sm:w-[26rem]"
      >
        <video
          src={post.vid_promo}
          autoplay
          muted
          loop
          class="rounded-xl h-80 mx-auto"
        ></video>
      </div>
    </div>
  </div>

  <div class="w-full h-[30rem] bg-[#879EC8]">
    <div
      class="flex justify-center items-center gap-[10rem] max-xl:gap-[5rem] max-md:hidden"
    >
      <h2
        class="h-[5rem] w-[22rem] max-lg:w-[15rem] bg-orange-400 mt-[3rem] rounded-3xl flex justify-center items-center text-4xl font-bold text-white drop-shadow-xl"
      >
        Kwaliteit
      </h2>
      <h2
        class="h-[5rem] w-[22rem] max-lg:w-[15rem] bg-orange-400 mt-[3rem] rounded-3xl flex justify-center items-center text-4xl font-bold text-white drop-shadow-xl max-lg:text-3xl"
      >
        Samenwerken
      </h2>
      <h2
        class="h-[5rem] w-[22rem] max-lg:w-[15rem] bg-orange-400 mt-[3rem] rounded-3xl flex justify-center items-center text-4xl font-bold text-white drop-shadow-xl max-lg:text-2xl"
      >
        Teamontwikkeling
      </h2>
    </div>
    <div
      class="flex justify-center items-center gap-[10rem] max-xl:gap-[7.5rem] max-lg:gap-[4rem] max-md:hidden"
    >
      <div class="w-[1rem] h-[2rem] bg-white"></div>
      <div class="w-[1rem] h-[2rem] bg-white mr-[10rem]"></div>
      <div class="w-[1rem] h-[2rem] bg-white"></div>
      <div class="w-[1rem] h-[2rem] bg-white"></div>
      <div class="w-[1rem] h-[2rem] bg-white ml-[10rem]"></div>
      <div class="w-[1rem] h-[2rem] bg-white"></div>
    </div>

    <div
      class="flex justify-center items-center gap-[11rem] max-xl:gap-[6rem] max-lg:gap-[2rem] max-md:hidden"
    >
      <div
        class="mb-[5rem] w-[21rem] h-[14rem] bg-white rounded-xl max-lg:w-[18rem]"
      >
        <img
          class="bg-contain w-full rounded-xl h-full"
          src={post.img_kwaliteit}
          alt=""
        />
      </div>

      <div
        class="mb-[5rem] w-[21rem] h-[14rem] bg-white rounded-xl max-lg:w-[18rem]"
      >
        <img
          class="bg-contain w-full rounded-xl h-full"
          src={post.img_samenwerken}
          alt=""
        />
      </div>

      <div
        class="mb-[5rem] w-[21rem] h-[14rem] bg-white rounded-xl max-lg:w-[18rem]"
      >
        <img
          class="bg-contain w-full rounded-xl h-full"
          src={post.img_teamontwikkeling}
          alt=""
        />
      </div>
    </div>
  </div>
  <div class="flex justify-center items-center">
    <div
      class="max-[475px]:w-[20rem] mt-[4rem] w-[30rem] h-[4rem] max-[10570px]:hidden rounded-xl bg-orange-400 max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden text-white text-4xl font-bold max-sm:w-[25rem]"
    >
      <div class="justify-center items-center flex">Kwaliteit</div>
    </div>
  </div>
  <div class="flex justify-center items-center gap-[20rem] max-sm:gap-[12rem]">
    <div
      class="w-[1rem] h-[2rem] bg-white max-[10570px]:hidden max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden"
    ></div>
    <div
      class="w-[1rem] h-[2rem] bg-white max-[10570px]:hidden max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden"
    ></div>
  </div>
  <div class="flex justify-center items-center gap-[20rem]">
    <div
      class="max-[475px]:w-[20rem] max-[475px]:h-[14rem] w-[28rem] h-[19rem] bg-gray-200 max-[10570px]:hidden rounded-xl max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden max-sm:h-[18rem]"
    >
      <img
        class="bg-contain w-full rounded-xl h-full"
        src={post.img_kwaliteit}
        alt=""
      />
    </div>
  </div>
  <div class="flex justify-center items-center">
    <div
      class="max-[475px]:w-[20rem] mt-[4rem] w-[30rem] h-[4rem] rounded-xl max-[10570px]:hidden bg-orange-400 max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden text-white text-4xl font-bold max-sm:w-[26rem]"
    >
      <div class="justify-center items-center flex">Samenwerken</div>
    </div>
  </div>
  <div class="flex justify-center items-center gap-[20rem] max-sm:gap-[12rem]">
    <div
      class="w-[1rem] h-[2rem] bg-white max-md:block max-[10570px]:hidden max-2xl:hidden max-xl:hidden max-lg:hidden"
    ></div>
    <div
      class="w-[1rem] h-[2rem] bg-white max-md:block max-[10570px]:hidden max-2xl:hidden max-xl:hidden max-lg:hidden"
    ></div>
  </div>
  <div class="flex justify-center items-center gap-[20rem]">
    <div
      class="max-[475px]:w-[20rem] max-[475px]:h-[14rem] w-[28rem] h-[19rem] bg-gray-200 rounded-xl max-md:block max-[10570px]:hidden max-2xl:hidden max-xl:hidden max-lg:hidden max-sm:h-[18rem]"
    >
      <img
        class="bg-contain w-full rounded-xl h-full"
        src={post.img_samenwerken}
        alt="Samenwerken"
      />
    </div>
  </div>
  <div class="flex justify-center items-center">
    <div
      class="max-[475px]:w-[20rem] mt-[4rem] w-[30rem] h-[4rem] rounded-xl max-[10570px]:hidden bg-orange-400 max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden text-white text-4xl font-bold max-sm:w-[26rem] max-[475px]:text-2xl"
    >
      <div class="justify-center items-center flex">Teamontwikkeling</div>
    </div>
  </div>
  <div class="flex justify-center items-center gap-[20rem] max-sm:gap-[12rem]">
    <div
      class="w-[1rem] h-[2rem] bg-white max-md:block max-[10570px]:hidden max-2xl:hidden max-xl:hidden max-lg:hidden"
    ></div>
    <div
      class="w-[1rem] h-[2rem] bg-white max-md:block max-[10570px]:hidden max-2xl:hidden max-xl:hidden max-lg:hidden"
    ></div>
  </div>

  <div class="bg-blue-50 w-full">
    <div class="flex justify-center items-center">
      <h2
        class="max-[475px]:w-[20rem] max-sm:w-[25rem] h-[5rem] w-[70rem] max-lg:w-[61rem] bg-blue-400 mt-[3rem] rounded-3xl flex justify-center items-center text-4xl font-bold text-white drop-shadow-xl"
      >
        Het Spiegelspel
      </h2>
    </div>
    <div
      class="flex justify-center items-center mt-[6rem] gap-[6rem] max-md:flex-col-reverse"
    >
      <img
        class="w-[30rem] h-auto max-sm:w-[25rem]"
        src={post.img_denken}
        alt="Denken"
      />
      <div
        class="max-[475px]:w-[20rem] max-[475px]:text-xl max-[475px]:h-[43rem] w-[25rem] h-[46rem] rounded-xl bg-blue-400 p-3 text-white font-medium text-2xl drop-shadow-xl"
      >
        {post.spiegelspel_paragraph_1}
      </div>
    </div>
    <div
      class="flex justify-center items-center mt-[6rem] gap-[10rem] max-md:flex-col"
    >
      <div
        class="max-[475px]:w-[20rem] max-[475px]:text-xl max-[475px]:h-[22rem] w-[25rem] h-[25rem] rounded-xl bg-blue-400 p-3 text-white font-medium text-2xl drop-shadow-xl"
      >
        {post.spiegelspel_paragraph_2}
      </div>
      <img
        class="w-[25rem] h-auto max-sm:w-[20rem]"
        src={post.img_bespreken}
        alt="Bespreken"
      />
    </div>
    <div
      class="flex justify-center items-center mt-[6rem] gap-[8rem] max-md:flex-col-reverse"
    >
      <img
        class="w-[25rem] h-auto max-md:mb-[6rem]"
        src={post.img_selectie}
        alt="Selectie"
      />
      <div
        class="max-[475px]:w-[20rem] max-[475px]:text-xl max-[475px]:h-[24rem] w-[25rem] h-[26rem] rounded-xl bg-blue-400 p-3 text-white font-medium text-2xl drop-shadow-xl mb-[3rem]"
      >
        {post.spiegelspel_paragraph_3}
      </div>
    </div>
  </div>
</main>
