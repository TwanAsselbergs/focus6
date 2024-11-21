<script>
  import Header from "../../components/Header.svelte";
  import Footer from "../../components/Footer.svelte";

  let services = [
    { id: 1, name: 'Teamkompas.', description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.', icon: '🌐' },
    { id: 2, name: 'Zelfevaluatie.', description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.', icon: '🎨' },
    { id: 3, name: 'Prestatiesturing.', description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.', icon: '🔍' },
    { id: 4, name: 'Teamplan en -evaluatie.', description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.', icon: '📱' },
    { id: 5, name: 'Omgevingsanalyse -en aanpak.', description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.', icon: '☁️' },
    { id: 6, name: 'Stakeholdersanalyse en -strategie.', description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.', icon: '🛒' },
    { id: 7, name: 'Processen.', description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.', icon: '📈' },
    { id: 8, name: 'Projectmanagement.', description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.', icon: '🎥' },
    { id: 9, name: 'Teamontwikkeling en persoonlijke ontwikkeling.', description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem aliquam accusamus doloribus nesciunt debitis eum dicta corporis, esse possimus odit iure ab atque adipisci molestiae reiciendis similique asperiores voluptate labore.', icon: '💻' }
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

<style>
  .modal-backdrop {
    @apply fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center;
  }
  .modal-content {
    @apply bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg w-11/12 sm:w-3/4 lg:w-1/2 relative;
  }
</style>

<Header />

<div class="min-h-screen bg-white-100 light:bg-gray-100 text-gray-900 dark:text-gray-100">
  <header class="py-8 text-center">
    <h1 class="text-4xl font-bold">Onze diensten!</h1>
    <p class="mt-2 text-gray-600 dark:text-gray-300">Ontdek wat wij u bieden!</p>
  </header>

  <main class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-8">
    {#each services as service}
      <div
        on:click={() => openModal(service)}
        class="group relative p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg cursor-pointer transition-transform transform hover:scale-105"
      >
        <div class="text-4xl">{service.icon}</div>
        <h2 class="mt-4 text-xl font-semibold">{service.name}</h2>
        <p class="mt-2 text-gray-600 dark:text-gray-300">{service.description}</p>
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-25 transition-opacity"></div>
      </div>
    {/each}
  </main>

  {#if showModal}
    <div class="modal-backdrop" on:click={closeModal}>
      <div class="modal-content" on:click|stopPropagation>
        <button
          class="absolute top-4 right-4 text-2xl text-gray-600 dark:text-gray-300"
          on:click={closeModal}
        >
          &times;
        </button>
        <div class="text-center">
          <h2 class="text-2xl font-bold">{selectedService.name}</h2>
          <p class="mt-4 text-gray-600 dark:text-gray-300">{selectedService.description}</p>
          <button
            class="mt-6 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
          >
            Plaatje hier
          </button>
        </div>
      </div>
    </div>
  {/if}
</div>

<Footer />
