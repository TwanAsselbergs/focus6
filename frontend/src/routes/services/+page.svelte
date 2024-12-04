<script>
  import { onMount } from "svelte";
  import Header from "../../components/Header.svelte";
  import Footer from "../../components/Footer.svelte";

  let post = {};

  const CACHE_DURATION = 60 * 60 * 1000;

  onMount(async () => {
    if (typeof localStorage !== "undefined") {
      const cachedPost = JSON.parse(localStorage.getItem("servicesPost")) || {};
      const cachedTimestamp = localStorage.getItem("servicesPostTimestamp");

      const isCacheValid =
        cachedTimestamp && Date.now() - cachedTimestamp < CACHE_DURATION;

      if (isCacheValid && cachedPost.id) {
        post = cachedPost;
      } else {
        const res = await fetch(
          "https://u230654.gluwebsite.nl/focus6/wordpress/wp-json/wp/v2/posts/41",
        );
        post = await res.json();
        localStorage.setItem("servicesPost", JSON.stringify(post));
        localStorage.setItem("servicesPostTimestamp", Date.now());
      }
    }
  });
</script>

<Header />

<main class="mt-24">
  <!-- Header -->
  <div
    class="bg-[#1C2122] py-24 md:py-40 h-72 md:h-auto rounded-b-3xl md:rounded-r-full text-center"
  >
    <h1 class="text-4xl md:text-5xl font-bold text-white">Dienstverlening</h1>
    <p class="text-gray-400 font-semibold">Over onze diensten</p>
  </div>

  <!-- Grid -->
  <div
    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 md:gap-24 px-6 md:px-24 my-16 md:my-24"
  >
    <!-- Teamkompas -->
    <div class="p-4 rounded-3xl mb-6 md:mb-0">
      <img
        src={post.img_teamkompas}
        class="w-40 h-40 object-contain mx-auto"
        alt="Teamkompas"
      />
      <h2 class="my-6 text-3xl font-semibold text-gray-800 text-center">
        {post.title_teamkompas}
      </h2>
      <p class="mt-2 text-lg text-gray-700 text-center">
        {post.paragraph_teamkompas}
      </p>
    </div>

    <!-- Zelfevaluatie -->
    <div class="p-4 rounded-3xl mb-6 md:mb-0">
      <img
        src={post.img_zelfevaluatie}
        class="w-40 h-40 object-contain mx-auto"
        alt="Zelfevaluatie"
      />
      <h2 class="my-6 text-3xl font-semibold text-gray-800 text-center">
        {post.title_zelfevaluatie}
      </h2>
      <p class="mt-2 text-lg text-gray-700 text-center">
        {post.paragraph_zelfevaluatie}
      </p>
    </div>

    <!-- Prestatiesturing -->
    <div class="p-4 rounded-3xl mb-6 md:mb-0">
      <img
        src={post.img_prestatiesturing}
        class="w-40 h-40 object-contain mx-auto"
        alt="Zelfevaluatie"
      />
      <h2 class="my-6 text-3xl font-semibold text-gray-800 text-center">
        {post.title_prestatiesturing}
      </h2>
      <p class="mt-2 text-lg text-gray-700 text-center">
        {post.paragraph_prestatiesturing}
      </p>
    </div>

    <!-- Teamplan -->
    <div class="p-4 rounded-3xl">
      <img
        src={post.img_teamplan}
        class="w-40 h-40 object-contain mx-auto"
        alt="Zelfevaluatie"
      />
      <h2 class="my-6 text-3xl font-semibold text-gray-800 text-center">
        {post.title_teamplan}
      </h2>
      <p class="mt-2 text-lg text-gray-700 text-center">
        {post.paragraph_teamplan}
      </p>
    </div>

    <!-- Omgevingsanalyse -->
    <div class="p-4 rounded-3xl mb-6 md:mb-0">
      <img
        src={post.img_omgevingsanalyse}
        class="w-40 h-40 object-contain mx-auto"
        alt="Zelfevaluatie"
      />
      <h2 class="my-6 text-3xl font-semibold text-gray-800 text-center">
        {post.title_omgevingsanalyse}
      </h2>
      <p class="mt-2 text-lg text-gray-700 text-center">
        {post.paragraph_omgevingsanalyse}
      </p>
    </div>

    <!-- Stakeholdersanalyse -->
    <div class="p-4 rounded-3xl mb-6 md:mb-0">
      <img
        src={post.img_stakeholders}
        class="w-40 h-40 object-contain mx-auto"
        alt="Zelfevaluatie"
      />
      <h2 class="my-6 text-3xl font-semibold text-gray-800 text-center">
        {post.title_stakeholders}
      </h2>
      <p class="mt-2 text-lg text-gray-700 text-center">
        {post.paragraph_stakeholders}
      </p>
    </div>

    <!-- Processen -->
    <div class="p-4 rounded-3xl mb-6 md:mb-0">
      <img
        src={post.img_processen}
        class="w-40 h-40 object-contain mx-auto"
        alt="Zelfevaluatie"
      />
      <h2 class="my-6 text-3xl font-semibold text-gray-800 text-center">
        {post.title_processen}
      </h2>
      <p class="mt-2 text-lg text-gray-700 text-center">
        {post.paragraph_processen}
      </p>
    </div>

    <!-- Projectmanagament -->
    <div class="p-4 rounded-3xl mb-6 md:mb-0">
      <img
        src={post.img_management}
        class="w-40 h-40 object-contain mx-auto"
        alt="Zelfevaluatie"
      />
      <h2 class="my-6 text-3xl font-semibold text-gray-800 text-center">
        {post.title_management}
      </h2>
      <p class="mt-2 text-lg text-gray-700 text-center">
        {post.paragraph_management}
      </p>
    </div>

    <!-- Teamontwikkeling -->
    <div class="p-4 rounded-3xl">
      <img
        src={post.img_teamontwikkeling}
        class="w-40 h-40 object-contain mx-auto"
        alt="Zelfevaluatie"
      />
      <h2 class="my-6 text-3xl font-semibold text-gray-800 text-center">
        {post.title_teamontwikkeling}
      </h2>
      <p class="mt-2 text-lg text-gray-700 text-center">
        {post.paragraph_teamontwikkeling}
      </p>
    </div>
  </div>
</main>

<Footer />
