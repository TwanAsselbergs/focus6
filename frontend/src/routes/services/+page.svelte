<script>
  import Header from "../../components/Header.svelte";
  import Footer from "../../components/Footer.svelte";

  // Array of services with names and descriptions
  const services = [
    { name: "Teamkompas.", description: "Expert advice to optimize your team's strategy and performance." },
    { name: "Zelfevaluatie.", description: "Tailored plans to align your team's goals with organizational success." },
    { name: "Prestatiesturing.", description: "In-depth analysis of team dynamics and performance." },
    { name: "Teamplan en -evaluatie.", description: "Streamline your processes for better efficiency and results." },
    { name: "Omgevingsanalyse -en aanpak.", description: "Develop effective strategies to engage key stakeholders." },
    { name: "Stakeholdersanalyse en -strategie.", description: "Tools and methods to track and enhance team performance." }
    { name: "Processen.", description: "We bepalen de kritische processen en onderkende risico's dekken we af met maatregelen." },
  

  ];
</script>

<Header />

<main class="pt-28 bg-gray-100 min-h-screen">
  <h1 class="text-4xl font-extrabold text-center mb-10">Dienstverlening</h1>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-6">
    {#each services as { name, description }}
      <div
        class="relative bg-white shadow-lg rounded-lg p-6 overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl"
      >
        <div class="absolute inset-0 bg-gradient-to-br from-red-400 to-yellow-400 opacity-0 hover:opacity-50 transition-opacity"></div>
        <h2 class="text-xl font-bold mb-2">{name}</h2>
        <p class="text-gray-600">{description}</p>
      </div>
    {/each}
  </div>
</main>

<Footer />
