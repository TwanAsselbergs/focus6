<script>
  import { onMount } from "svelte";
  import { writable } from "svelte/store";

  const scrolled = writable(false);
  const currentPath = writable();
  const openMenu = writable(false);

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

  let post = {};

  onMount(async () => {
    const res = await fetch(
      "http://localhost/focus6/wordpress/wp-json/wp/v2/posts/19",
    );
    post = await res.json();
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
        <a href="/"
          ><img
            src={post.logo}
            alt="Logo"
            class="{$scrolled
              ? 'w-32 md:w-36'
              : 'w-36 md:w-48'} h-auto md:ml-12 transition-all duration-500"
          /></a
        >
      </div>
      <div class="pr-12 hidden md:block">
        <ul class="flex font-semibold text-lg items-center">
          <li class="pr-1">
            <a
              href="/"
              class="{$currentPath === '/'
                ? 'bg-gray-100 hover:bg-gray-200'
                : 'hover:bg-gray-100'} rounded-md py-2 px-4 transition-all duration-500"
              >Home</a
            >
          </li>
          <li class="pr-1">
            <a
              href="/concept"
              class="{$currentPath === '/concept'
                ? 'bg-gray-100 hover:bg-gray-200'
                : 'hover:bg-gray-100'} rounded-md py-2 px-4 transition-all duration-500"
              >Spiegelconcept</a
            >
          </li>
          <li class="pr-1">
            <a
              href="/services"
              class="{$currentPath === '/services'
                ? 'bg-gray-100 hover:bg-gray-200'
                : 'hover:bg-gray-100'} rounded-md py-2 px-4 transition-all duration-500"
              >Dienstverlening</a
            >
          </li>
          <li>
            <a
              href="/contact"
              class="{$currentPath === '/contact'
                ? 'bg-gray-100 hover:bg-gray-200'
                : 'hover:bg-gray-100'} rounded-md py-2 px-4 transition-all duration-500"
              >Contact</a
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

  {#if $openMenu}
    <!-- svelte-ignore a11y_click_events_have_key_events -->
    <!-- svelte-ignore a11y_no_static_element_interactions -->
    <div
      class="fixed top-0 left-0 right-0 bottom-0 bg-black opacity-40 z-30 transition-opacity duration-500 ease-in-out"
      on:click={handleBackDropClick}
    ></div>
  {/if}

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
          href="/"
          class="{$currentPath === '/'
            ? 'bg-gray-100 hover:bg-gray-200'
            : 'hover:bg-gray-100'} rounded-md px-4 py-2 transition-all duration-500"
          >Home</a
        >
      </li>
      <li class="py-3">
        <a
          href="/concept"
          class="{$currentPath === '/concept'
            ? 'bg-gray-100 hover:bg-gray-200'
            : 'hover:bg-gray-100'} rounded-md px-4 py-2 transition-all duration-500"
          >Spiegelconcept</a
        >
      </li>
      <li class="py-3">
        <a
          href="/services"
          class="{$currentPath === '/services'
            ? 'bg-gray-100 hover:bg-gray-200'
            : 'hover:bg-gray-100'} rounded-md px-4 py-2 transition-all duration-500"
          >Dienstverlening</a
        >
      </li>
      <li class="py-3">
        <a
          href="/contact"
          class="{$currentPath === '/contact'
            ? 'bg-gray-100 hover:bg-gray-200'
            : 'hover:bg-gray-100'} rounded-md px-4 py-2 transition-all duration-500"
          >Contact</a
        >
      </li>
    </ul>
  </div>
</header>