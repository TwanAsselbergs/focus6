<script>
  import { onMount } from "svelte";
  import { writable } from "svelte/store";

  let post = {};
  const currentPath = writable();

  onMount(() => {
    currentPath.set(window.location.pathname);
  });

  onMount(async () => {
    const res = await fetch(
      "http://localhost/focus6/wordpress/wp-json/wp/v2/posts/1",
    );
    post = await res.json();
  });
</script>

<footer>
  <div
    class="mx-auto flex flex-col md:flex-row justify-between items-center bg-[#202528] p-12 md:p-36 md:mt-16 rounded-t-3xl text-center md:text-left"
  >
    <div
      class="flex flex-col md:flex-row justify-between w-full space-y-8 md:space-y-0 md:space-x-48 md:mr-24"
    >
      <div>
        <h3 class="text-white text-lg md:text-xl font-bold mb-4">
          Over Focu<span class="text-[#F00F22]">s</span><span
            class="text-[#185CE6]">6</span
          >
        </h3>
        <p class="text-gray-400 text-sm md:text-base leading-relaxed">
          {post.paragraph}
        </p>
        <a
          href="/services"
          class="text-blue-500 font-semibold hover:underline mt-4 block"
        >
          Meer lezen over ons →
        </a>
      </div>

      <div>
        <h3 class="text-white text-lg md:text-xl font-bold mb-4 md:ml-1.5">
          Contact Ons
        </h3>
        <div class="flex flex-col space-y-4">
          <a
            href="mailto:{post.email}"
            aria-label="Email"
            class="flex items-center justify-center md:justify-start space-x-2"
          >
            <svg
              viewBox="0 0 29 29"
              style="width:20px"
              class="text-gray-600 md:ml-2"
            >
              <path
                fill="currentColor"
                d="M5.135 5.37c-1.531 0-2.772 1.209-2.772 2.7v12.958c0 1.491 1.241 2.7 2.772 2.7h18.848c1.53 0 2.771-1.209 2.771-2.7V8.07c0-1.491-1.24-2.7-2.771-2.7H5.135zm0-1.62h18.848c2.449 0 4.434 1.934 4.434 4.32v12.958c0 2.386-1.985 4.32-4.434 4.32H5.135c-2.45 0-4.435-1.934-4.435-4.32V8.07c0-2.386 1.986-4.32 4.435-4.32z"
              ></path>
              <path
                fill="currentColor"
                d="M23.998 7.48c.335.306.35.819.036 1.145l-5.898 6.103 5.88 5.728c.298.29.323.745.075 1.062l-.075.083a.847.847 0 01-1.176 0l-5.844-5.693-1.832 1.896a.847.847 0 01-1.21 0l-1.833-1.896L6.277 21.6a.847.847 0 01-1.176 0 .795.795 0 010-1.145l5.88-5.728-5.897-6.103a.795.795 0 01.035-1.145.847.847 0 011.176.035l8.264 8.552 8.264-8.552a.847.847 0 011.175-.035z"
              ></path>
            </svg>
            <span
              class="text-gray-400 text-sm md:text-lg font-semibold hover:underline"
              >{post.email}</span
            >
          </a>
          <a
            href="tel:{post.phone}"
            aria-label="Phone"
            class="flex items-center justify-center space-x-2"
          >
            <svg viewBox="0 0 29 29" style="width:20px" class="text-gray-600">
              <path
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.7"
                d="M6.364 3.81c1.496-1.503 5.032-2.139 6.907-2.108 1.88-.218 1.273 8.104.313 8.263 0 0-3.039.384-3.125 1.275-.116 1.217 3.009 8.67 4.22 8.84.65.091 2.606-1.402 2.606-1.402 1.521-1.145 4.678 2.2 6.161 3.596.649.627.617 1.159-.059 1.947-1.181 1.322-4.29 3.439-5.52 3.266-2.988-.42-8.05-4.592-10.483-9.582-2.743-5.629-2.712-12.82-1.02-14.095z"
              ></path>
            </svg>
            <span
              class="text-gray-400 text-sm md:text-lg font-semibold hover:underline"
              >{post.phone}</span
            >
          </a>
        </div>
      </div>
      <div>
        <h3 class="text-white text-lg md:text-xl font-bold mb-4">Navigatie</h3>
        <nav class="flex flex-col space-y-4 text-gray-400 font-semibold">
          <a
            href="/"
            class={$currentPath === "/" ? "underline " : "hover:underline"}
            >Home</a
          >
          <a
            href="/concept"
            class={$currentPath === "/concept"
              ? "underline"
              : "hover:underline"}>Spiegelconcept</a
          >
          <a
            href="/services"
            class={$currentPath === "/services"
              ? "underline"
              : "hover:underline"}>Dienstverlening</a
          >
          <a
            href="/contact"
            class={$currentPath === "/contact"
              ? "underline"
              : "hover:underline"}>Contact</a
          >
        </nav>
      </div>
    </div>
  </div>
  <div
    class="flex justify-center items-center mx-auto bg-[#1C2122] p-10 md:gap-36"
  >
    <a href="/">
      <img src={post.logo} alt="Logo" class="w-24 h-auto hidden md:block" />
    </a>
    <p class="text-gray-600 text-xs">
      {post.copyright}
    </p>
  </div>
</footer>
