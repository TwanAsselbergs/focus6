<script>
  import Header from "../../components/Header.svelte";
  import Footer from "../../components/Footer.svelte";
</script>

<Header />

<main class="pt-28 bg-gray-100 min-h-screen">
  <h1 class="text-4xl font-extrabold text-center mb-10">Dienstverlening</h1>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-6">
    {#each Array(9) as _, i}
      <div
        class="relative bg-white shadow-lg rounded-lg p-6 overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl"
      >
        <div class="fixed inset-0 bg-gradient-to-br from-red-400 to-blue-400 opacity-0 hover:opacity-50 transition-opacity"></div>
        <h2 class="text-xl font-bold mb-2">Dienstverlening {i + 1}</h2>
        <p class="text-gray-600">
          test
        </p>
      </div>
    {/each}
  </div>
</main>

<Footer />
