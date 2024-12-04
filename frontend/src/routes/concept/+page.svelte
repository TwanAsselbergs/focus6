<script>
  import Header from "../../components/Header.svelte";
  import Footer from "../../components/Footer.svelte";
  import { onMount } from "svelte";

  let post = {};

  onMount(async () => {
    const res = await fetch(
      "https://u230654.gluwebsite.nl/focus6/wordpress/wp-json/wp/v2/posts/32",
    );
    post = await res.json();
  });
</script>

<Header />
<main class="mt-24">
  <!-- Header -->
  <div
    class="bg-[#1C2122] py-24 md:py-40 h-72 md:h-auto rounded-b-3xl md:rounded-r-full text-center"
  >
    <h1 class="text-4xl md:text-5xl font-bold text-white">Spiegelconcept</h1>
    <p class="text-gray-400 font-semibold">Over het spiegelconcept</p>
  </div>

  <div
    class="pt-16 md:pt-24 pb-16 md:pb-16 flex justify-center items-center flex-col text-center"
  >
    <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
      Het Spiegelconcept
    </h2>
    <p class="w-10/12 md:w-4/6 pt-8 text-lg text-gray-700">
      {post.spiegelconcept_1}
      <br /> <br />
      {post.spiegelconcept_2}
      <br /> <br />
      {post.spiegelconcept_3}
    </p>
  </div>

  <section>
    <div class="flex flex-col md:flex-row justify-center items-center md:mt-24">
      <!-- Left Content -->
      <div class="md:w-1/2 flex justify-center items-center flex-col md:block">
        <h2
          class="text-center md:text-left text-2xl md:text-3xl font-bold pb-6 text-gray-800"
        >
          Het Concept
        </h2>
        <p
          class="w-10/12 md:w-full text-center md:text-left md:pr-48 text-lg transition-all duration-500 ease-in-out text-gray-700"
        >
          {post.concept}
        </p>
      </div>

      <!-- Image with Animation -->
      <img
        src={post.img_concept}
        alt="Concept"
        class="rounded-3xl w-2/5 md:w-1/4 mt-10 md:mt-0 transition-transform duration-500 ease-in-out hover:scale-110"
      />
    </div>
    <div
      class="flex flex-col-reverse md:flex-row items-center md:justify-center my-12 md:my-48"
    >
      <!-- Image Container with Animation -->
      <div
        class="w-4/5 md:w-1/3 h-48 md:h-72 rounded-3xl md:mr-12 mb-10 md:mb-0"
      >
        <img
          src={post.img_samen_sturen}
          alt="Samen Sturen"
          class="w-auto mt-10 mx-auto my-auto h-48 md:h-72 rounded-3xl md:mr-12 transition-transform duration-500 ease-in-out hover:scale-110"
        />
      </div>

      <!-- Text Content -->
      <div class=" text-gray-800 text-center md:w-1/3 md:ml-36">
        <h2 class="text-2xl md:text-3xl font-bold pb-6 md:pt-0">
          Samen Sturen
        </h2>
        <p
          class="w-10/12 flex justify-center items-center mx-auto flex-col text-lg transition-all duration-500 ease-in-out"
        >
          {post.samen_sturen}
        </p>
      </div>
    </div>
  </section>

  <!-- Subheader -->
  <div
    class="w-10/12 md:w-[78%] mx-auto bg-gray-100 flex justify-center items-center rounded-3xl mb-12 md:mb-24"
  >
    <h2 class="text-gray-800 text-4xl md:text-5xl font-bold py-16 md:py-24">
      Aanpak
    </h2>
  </div>

  <section>
    <div class="flex flex-col md:flex-row justify-center items-center">
      <!-- Text Content -->
      <div
        class="text-gray-800 md:w-1/2 flex justify-center items-center flex-col md:block"
      >
        <h2
          class="text-center md:text-left text-2xl md:text-3xl font-bold pb-6"
        >
          Het TeamKompas
        </h2>
        <p
          class="w-10/12 md:w-full text-center md:text-left md:pr-48 text-lg transition-all duration-500 ease-in-out"
        >
          {post.teamkompas}
        </p>
      </div>

      <!-- Compass Image with Animation -->
      <img
        src={post.img_teamkompas}
        alt="TeamKompas"
        class="rounded-3xl w-2/5 md:w-1/4 mt-10 md:mt-0 transition-transform duration-500 ease-in-out hover:rotate-[15deg] hover:scale-105"
      />
    </div>

    <div
      class="flex flex-col-reverse md:flex-row items-center md:justify-center my-12 md:my-48"
    >
      <div class="w-4/5 md:w-1/3 h-48 md:h-72 rounded-3xl md:mr-12">
        <img
          src={post.img_teamplan}
          alt="Visualisatie van Teamplan"
          class="w-auto mt-10 mx-auto my-auto h-48 md:h-72 rounded-3xl md:mr-12 transition-transform duration-500 ease-in-out hover:scale-105"
        />
      </div>

      <div class=" text-gray-800 text-center md:w-1/3 md:ml-36">
        <h2 class="text-2xl md:text-3xl font-bold pb-6 md:pt-0">
          Het Teamplan
        </h2>
        <p
          class="w-10/12 flex justify center items-center mx-auto flex-col text-lg transition-all duration-500 ease-in-out"
        >
          {post.teamplan_1}
        </p>
        <br />
        <p
          class="w-10/12 flex justify center items-center mx-auto flex-col text-lg transition-all duration-500 ease-in-out"
        >
          {post.teamplan_2}
        </p>
      </div>
    </div>
  </section>
  <section class="mb-16">
    <!-- Subheader -->
    <div
      class="w-10/12 md:w-[78%] mx-auto bg-gray-100 flex justify-center items-center rounded-3xl mt-20 mb-12 md:my-24"
    >
      <h2 class="text-gray-800 text-4xl md:text-5xl font-bold py-16 md:py-24">
        Implementatie
      </h2>
    </div>

    <div
      class="text-gray-800 flex flex-col md:flex-row justify-center items-center"
    >
      <div class="md:w-1/2 flex justify-center items-center flex-col md:block">
        <h2
          class="text-center md:text-left text-2xl md:text-3xl font-bold pb-6"
        >
          Analyse & Evaluatie
        </h2>
        <p
          class="w-10/12 md:w-full text-center md:text-left md:pr-48 text-lg transition-all duration-500 ease-in-out"
        >
          {post.analyse_evaluatie}
        </p>
      </div>
      <img
        src={post.img_analyse_evaluatie}
        alt="Analyse & Evaluatie"
        class="rounded-3xl w-2/5 md:w-1/4 mt-10 md:mt-0 mb-5 transition-transform duration-500 ease-in-out hover:scale-105"
      />
    </div>

    <div
      class="flex flex-col-reverse md:flex-row justify-center items-center my-4 md:my-32"
    >
      <img
        src={post.img_teamplan_cyclus}
        alt="Visualisatie van het process"
        class="rounded-3xl w-2/5 md:w-1/4 mt-10 md:mt-0 mb-5 transition-transform duration-500 ease-in-out hover:scale-105"
      />
      <div
        class="text-gray-800 md:w-1/2 flex justify-center items-center flex-col md:block"
      >
        <h2
          class="text-center md:text-center text-2xl md:text-3xl font-bold pb-6"
        >
          Teamplan Cyclus
        </h2>
        <p
          class="w-10/12 md:w-7/12 flex justify center items-center text-center mx-auto flex-col text-lg transition-all duration-500 ease-in-out"
        >
          {post.teamplan_cyclus}
        </p>
      </div>
    </div>
  </section>
</main>

<Footer />
