<script>
  import Header from "../../components/Header.svelte";
  import Footer from "../../components/Footer.svelte";

  // Dummy data
  let services = [
    {
      id: 1,
      name: "Teamkompas.",
      description: "Test",
      icon: "/kompas.png",
    },
    {
      id: 2,
      name: "Zelfevaluatie.",
      description:
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.",
      icon: "/zelfevaluatie.png",
    },
    {
      id: 3,
      name: "Prestatiesturing.",
      description:
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.",
      icon: "📊",
    },
    {
      id: 4,
      name: "Teamplan en -evaluatie.",
      description:
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.",
      icon: "📱",
    },
    {
      id: 5,
      name: "Omgevingsanalyse -en aanpak.",
      description:
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.",
      icon: "☁️",
    },
    {
      id: 6,
      name: "Stakeholdersanalyse en -strategie.",
      description:
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.",
      icon: "🛒",
    },
    {
      id: 7,
      name: "Processen.",
      description:
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.",
      icon: "📈",
    },
    {
      id: 8,
      name: "Projectmanagement.",
      description:
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.",
      icon: "🎥",
    },
    {
      id: 9,
      name: "Teamontwikkeling en persoonlijke ontwikkeling.",
      description:
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.",
      icon: "💻",
    },
  ];

  let selectedService = null;
  let showModal = false;

  const openModal = (service) => {
    selectedService = service;
    showModal = true;
  };

  const closeModal = () => {
    selectedService = null;
    showModal = false;
  };
</script>

<Header />

<div
  class="min-h-screen bg-white-100 light:bg-gray-100 text-gray-900 dark:text-gray-900"
>
  <main class="mt-24">
    <!-- Header -->
    <div
      class="bg-[#1C2122] py-24 md:py-48 h-72 md:h-auto rounded-b-3xl md:rounded-r-full text-center"
    >
      <h1 class="text-5xl font-bold text-white">Dienstverlening</h1>
      <p class="text-gray-400 font-semibold">Onze diensten</p>
    </div>

    <!-- Grid -->
    <main
      class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 px-10 mt-10"
    >
      {#each services as service}
        <div
          class="group relative p-4 bg-white dark:bg-gray-100 rounded-2xl cursor-pointer transition-transform transform hover:scale-105 hover:shadow-xl"
        >
          <img src={service.icon} class="w-40 h-40 object-contain mx-auto" />
          <h2 class="mt-4 text-2xl font-semibold">{service.name}</h2>
          <p class="mt-2 text-xl text-gray-600 dark:text-gray-900">
            {service.description}
          </p>
          <div class="absolute inset-0 bg-black bg-opacity-0"></div>
        </div>
      {/each}
    </main>
  </main>
</div>

<Footer />

<style>
</style>
