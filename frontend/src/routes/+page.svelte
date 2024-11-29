<script>
  import { onMount } from "svelte";
  import Header from "../components/Header.svelte";
  import Footer from "../components/Footer.svelte";

  let post = {};
  let reviews = [];
  let currentReviewIndex = 0;

  onMount(async () => {
    const postRes = await fetch(
      "http://localhost/focus6/wordpress/wp-json/wp/v2/posts/29",
    );
    post = await postRes.json();

    const reviewsRes = await fetch(
      "http://localhost/focus6/wordpress/wp-json/wp/v2/site-review",
    );
    reviews = await reviewsRes.json();

    setInterval(() => {
      currentReviewIndex = (currentReviewIndex + 1) % reviews.length;
    }, 5000);
  });
</script>

<Header />

<main class="pt-24">
  <section class="mb-8 md:mb-16 relative">
    <div class="relative w-full mx-auto">
      <img
        src={post.img_header}
        alt="Header"
        class="w-full h-[40rem] md:h-screen object-cover rounded-b-3xl md:rounded-r-full"
      />
      <div
        class="absolute inset-0 rounded-3xl text-white pl-4 pt-16 md:pt-48 md:pl-48"
      >
        <div
          class="w-full md:w-2/3 flex justify-center items-center md:items-start flex-col md:flex-none"
        >
          <h2
            class="text-4xl md:text-7xl font-semibold pb-6 [text-shadow:_0_4px_4px_rgb(0_0_0_/_0.2)] text-center md:text-left"
          >
            Welkom bij Focu<span class="text-[#F00F22]">s</span><span
              class="text-[#185CE6]">6</span
            >!
          </h2>
          <p
            class="w-11/12 md:w-3/4 text-center md:text-left text-lg pt-4 pb-10 pl-2 [text-shadow:_0_4px_4px_rgb(0_0_0_/_0.2)]"
          >
            {post.header_paragraph}
          </p>
          <a
            href="/concept"
            class="bg-[#185CE6] hover:bg-[#2B67E8] transition-all duration-500 py-4 px-6 md:py-4 rounded-lg font-semibold text-lg md:text-lg"
            >Spiegelconcept</a
          >
        </div>
      </div>
    </div>
  </section>

  <hr class="w-1/4 flex justify-center items-center mx-auto pb-12 md:pb-32" />

  <section>
    <div class="flex flex-col md:flex-row justify-center items-center">
      <div class="md:w-1/2 flex justify-center items-center flex-col md:block">
        <h2
          class="text-gray-800 text-center md:text-left text-2xl md:text-3xl font-bold pb-6"
        >
          Wat bieden wij?
        </h2>
        <p
          class="w-10/12 md:w-full text-gray-700 text-center md:text-left md:pr-48 text-lg"
        >
          <span class="font-semibold text-lg md:text-2xl"
            >Focu<span class="text-[#F00F22]">s</span><span
              class="text-[#185CE6]">6</span
            ></span
          >
          {post.paragraph_1}
        </p>
        <p class="mt-8 mb-4 md:mb-0 md:mt-4 text-sm md:text-md">
          Kortom: <span class="text-decoration-line: underline"
            >Focus op succes!</span
          >
        </p>
      </div>
      <img
        src={post.img_paragraph_1}
        alt="Img"
        class="rounded-3xl shadow-xl w-4/5 h-52 md:h-72 object-cover md:w-1/4 mt-4 md:mt-0"
      />
    </div>
    <div
      class="flex flex-col md:flex-row items-center md:justify-center my-12 md:my-48"
    >
      <a
        href="/concept"
        class="relative bg-[#185CE6] w-4/5 md:w-1/3 h-52 md:h-72 scale-[101%] md:scale-100 rounded-3xl md:mr-12 shadow-xl hover:shadow-2xl transition-all duration-500 cursor-pointer hover:scale-[101%]"
      >
        <h2 class="p-6 md:pt-8 text-white font-semibold text-2xl">
          Spiegelconcept
        </h2>
        <p
          class="pl-6 text-white text-md w-10/12 truncate md:overflow-visible md:whitespace-normal md:text-clip"
        >
          Met het Spiegelconcept geeft u invulling aan een lerende organisatie.
          Met deze aanpak spiegel je je als professional, team en organisatie
          systematisch aan de hoogste...
        </p>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 512 512"
          class="absolute bottom-4 right-4 w-9 h-9 fill-white mr-1"
        >
          <path
            d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zm395.3 11.3l-112 112c-4.6 4.6-11.5 5.9-17.4 3.5s-9.9-8.3-9.9-14.8l0-64-96 0c-17.7 0-32-14.3-32-32l0-32c0-17.7 14.3-32 32-32l96 0 0-64c0-6.5 3.9-12.3 9.9-14.8s12.9-1.1 17.4 3.5l112 112c6.2 6.2 6.2 16.4 0 22.6z"
          />
        </svg>
      </a>

      <div class="text-center md:text-left md:w-1/3 md:ml-36">
        <h2
          class="text-gray-800 text-2xl md:text-3xl font-bold pb-6 pt-12 md:pt-0"
        >
          Wat houdt het in?
        </h2>
        <p class="w-10/12 md:w-full mx-auto text-lg text-gray-700">
          {post.paragraph_2}
          <span
            ><a href="/concept" class="hover:underline text-blue-500"
              >Lees meer...</a
            ></span
          >
        </p>
      </div>
    </div>
    <div class="mb-16 md:mb-32">
      <div
        class="w-10/12 mx-auto h-auto md:h-[29rem] bg-white flex items-center flex-col rounded-3xl"
      >
        <h2 class="text-gray-800 text-2xl md:text-4xl font-bold mb-12 md:mb-24">
          Recensies
        </h2>
        {#if reviews.length > 0}
          <div
            class="relative flex flex-col md:flex-row items-center justify-center w-full space-y-4 md:space-y-0"
          >
            <!-- Previous Review -->
            <div
              class="opacity-75 transform transition-all duration-700 w-full md:w-4/12 h-auto px-4 md:px-0"
            >
              <div
                class="bg-white border-2 border-bg-gray-100 rounded-3xl py-4 md:py-6 px-5 md:px-12 h-36 md:h-52 overflow-hidden"
              >
                <div class="relative flex flex-row">
                  <img
                    src="/quotes.png"
                    alt="Quotes"
                    class="absolute w-6 md:w-auto h-8 md:h-8 object-contain pb-2"
                  />
                  <h3
                    class="font-semibold text-2xl mb-4 mx-auto text-center text-[#185CE6]"
                  >
                    {reviews[
                      (currentReviewIndex - 1 + reviews.length) % reviews.length
                    ].title.rendered}
                  </h3>
                </div>
                <p class="text-center">
                  {@html reviews[
                    (currentReviewIndex - 1 + reviews.length) % reviews.length
                  ].content.rendered}
                </p>
              </div>
            </div>

            <!-- Current Review -->
            <div
              class="transform transition-all duration-700 w-full md:w-5/12 h-auto px-4 md:px-9"
            >
              <div
                class="bg-white border-2 border-gray-300 scale-[102%] md:scale-[108%] rounded-3xl py-4 md:py-6 px-5 md:px-12 h-44 md:h-52 overflow-y-auto"
              >
                <div class="relative flex flex-row">
                  <img
                    src="/quotes.png"
                    alt="Quotes"
                    class="absolute w-6 md:w-auto h-8 md:h-8 object-contain pb-2"
                  />
                  <h3
                    class="font-semibold text-2xl mb-4 mx-auto text-center text-[#185CE6]"
                  >
                    {reviews[currentReviewIndex].title.rendered}
                  </h3>
                </div>
                <p class="text-center">
                  {@html reviews[currentReviewIndex].content.rendered}
                </p>
              </div>
            </div>

            <!-- Upcoming Review -->
            <div
              class="opacity-75 transform transition-all duration-700 w-full md:w-4/12 h-auto px-4 md:px-0"
            >
              <div
                class="bg-white border-2 border-bg-gray-100 rounded-3xl py-4 md:py-6 px-5 md:px-12 h-36 md:h-52 overflow-hidden"
              >
                <div class="relative flex flex-row">
                  <img
                    src="/quotes.png"
                    alt="Quotes"
                    class="absolute w-6 md:w-auto h-8 md:h-8 object-contain pb-2"
                  />
                  <h3
                    class="font-semibold text-2xl mb-4 mx-auto text-center text-[#185CE6]"
                  >
                    {reviews[(currentReviewIndex + 1) % reviews.length].title
                      .rendered}
                  </h3>
                </div>
                <p class="text-center">
                  {@html reviews[(currentReviewIndex + 1) % reviews.length]
                    .content.rendered}
                </p>
              </div>
            </div>
          </div>
        {/if}
      </div>
    </div>
  </section>
</main>

<Footer />
