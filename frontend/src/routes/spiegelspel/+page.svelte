<script>
  import { onMount } from "svelte";
  import { writable } from "svelte/store";

  let formData = {
    name: "",
    email: "",
    message: "",
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    alert("Verstuurd");
  };

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
            src="logo-spiegelspel.png"
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
              >Spiegelconcept</a
            >
          </li>
          <li class="pr-1">
            <a
              href="/focus6/services"
              class="{$currentPath === '/focus6/services'
                ? 'bg-gray-100 hover:bg-gray-200'
                : 'hover:bg-gray-100'} rounded-md py-2 px-4 transition-all duration-500"
              >Dienstverlening</a
            >
          </li>
          <li>
            <a
              href="/focus6/contact"
              class="{$currentPath === '/focus6/contact'
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
          >Spiegelconcept</a
        >
      </li>
      <li class="py-3">
        <a
          href="/focus6/services"
          class="{$currentPath === '/focus6/services'
            ? 'bg-gray-100 hover:bg-gray-200'
            : 'hover:bg-gray-100'} rounded-md px-4 py-2 transition-all duration-500"
          >Dienstverlening</a
        >
      </li>
      <li class="py-3">
        <a
          href="/focus6/contact"
          class="{$currentPath === '/focus6/contact'
            ? 'bg-gray-100 hover:bg-gray-200'
            : 'hover:bg-gray-100'} rounded-md px-4 py-2 transition-all duration-500"
          >Contact</a
        >
      </li>
    </ul>
  </div>
</header>

<main>
  <img
    class="mt-[5rem] h-screen max-lg:bg-left"
    src="/spiegelspel-main.png"
    alt=""
  />
  <div class="bg-blue-50 w-full h-[100rem] max-md:h-[130rem] max-sm:h-[90rem]">
    <div class="flex items-center justify-center">
      <h2
        class="h-[5rem] w-[60rem] max-sm:w-[30rem] bg-blue-400 rounded-3xl mt-[10rem] flex justify-center items-center text-4xl font-bold text-white drop-shadow-xl max-md:w-[40rem]"
      >
        Doel van het Spiegelspel
      </h2>
    </div>
    <div
      class="flex justify-center items-center mt-[8rem] gap-[10rem] max-lg:gap-[3rem] max-md:flex-col"
    >
      <img
        class="w-[30rem] h-auto mt-[3rem] max-md:mt-[0rem] max-sm:w-[20rem]"
        src="/telescoop.gif"
        alt=""
      />
      <div
        class="w-[25rem] h-[15rem] bg-blue-400 rounded-3xl drop-shadow-lg text-white pl-4 pt-2 text-[2.26rem] font-bold"
      >
        Een methodiek om spelenderwijs het teamleren te bevorderen
      </div>
    </div>

    <div class="flex justify-center items-center">
      <h2
        class="max-sm:w-[25rem] h-[5rem] w-[70rem] bg-blue-400 mt-[3rem] rounded-3xl flex justify-center items-center text-4xl font-bold text-white drop-shadow-xl max-lg:w-[60rem] max-md:w-[40rem]"
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
        class="w-[73rem] h-[40rem] bg-gray-200 rounded-xl max-lg:w-[61rem] max-md:w-[40rem] max-sm:w-[26rem] max-sm:h-[18rem]"
      ></div>
    </div>
  </div>
  <div class="w-full h-[74rem] bg-[#879EC8] max-md:h-[150rem]">
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
          src="/kwaliteit.jpg"
          alt=""
        />
      </div>
      <div
        class="mb-[5rem] w-[21rem] h-[14rem] bg-white rounded-xl max-lg:w-[18rem]"
      >
        <img
          class="bg-contain w-full rounded-xl h-full"
          src="/samenwerken.jpg"
          alt=""
        />
      </div>
      <div
        class="mb-[5rem] w-[21rem] h-[14rem] bg-white rounded-xl max-lg:w-[18rem]"
      >
        <img
          class="bg-contain w-full rounded-xl h-full"
          src="/teamontwikkeling.jpg"
          alt=""
        />
      </div>
    </div>
    <div class="flex justify-center items-center">
      <div
        class="mt-[4rem] w-[30rem] h-[4rem] max-[10570px]:hidden rounded-xl bg-orange-400 max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden text-white text-4xl font-bold max-sm:w-[25rem]"
      >
        <div class="justify-center items-center flex">Kwaliteit</div>
      </div>
    </div>
    <div
      class="flex justify-center items-center gap-[20rem] max-sm:gap-[12rem]"
    >
      <div
        class="w-[1rem] h-[2rem] bg-white max-[10570px]:hidden max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden"
      ></div>
      <div
        class="w-[1rem] h-[2rem] bg-white max-[10570px]:hidden max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden"
      ></div>
    </div>
    <div class="flex justify-center items-center gap-[20rem]">
      <div
        class="w-[28rem] h-[19rem] bg-gray-200 max-[10570px]:hidden rounded-xl max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden max-sm:h-[18rem]"
      >
        <img
          class="bg-contain w-full rounded-xl h-full"
          src="/kwaliteit.jpg"
          alt=""
        />
      </div>
    </div>
    <div class="flex justify-center items-center">
      <div
        class="mt-[4rem] w-[30rem] h-[4rem] rounded-xl max-[10570px]:hidden bg-orange-400 max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden text-white text-4xl font-bold max-sm:w-[26rem]"
      >
        <div class="justify-center items-center flex">Samenwerken</div>
      </div>
    </div>
    <div
      class="flex justify-center items-center gap-[20rem] max-sm:gap-[12rem]"
    >
      <div
        class="w-[1rem] h-[2rem] bg-white max-md:block max-[10570px]:hidden max-2xl:hidden max-xl:hidden max-lg:hidden"
      ></div>
      <div
        class="w-[1rem] h-[2rem] bg-white max-md:block max-[10570px]:hidden max-2xl:hidden max-xl:hidden max-lg:hidden"
      ></div>
    </div>
    <div class="flex justify-center items-center gap-[20rem]">
      <div
        class="w-[28rem] h-[19rem] bg-gray-200 rounded-xl max-md:block max-[10570px]:hidden max-2xl:hidden max-xl:hidden max-lg:hidden max-sm:h-[18rem]"
      >
        <img
          class="bg-contain w-full rounded-xl h-full"
          src="/samenwerken.jpg"
          alt=""
        />
      </div>
    </div>
    <div class="flex justify-center items-center">
      <div
        class="mt-[4rem] w-[30rem] h-[4rem] rounded-xl max-[10570px]:hidden bg-orange-400 max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden text-white text-4xl font-bold max-sm:w-[26rem]"
      >
        <div class="justify-center items-center flex">Teamontwikkeling</div>
      </div>
    </div>
    <div
      class="flex justify-center items-center gap-[20rem] max-sm:gap-[12rem]"
    >
      <div
        class="w-[1rem] h-[2rem] bg-white max-md:block max-[10570px]:hidden max-2xl:hidden max-xl:hidden max-lg:hidden"
      ></div>
      <div
        class="w-[1rem] h-[2rem] bg-white max-md:block max-[10570px]:hidden max-2xl:hidden max-xl:hidden max-lg:hidden"
      ></div>
    </div>
    <div class="flex justify-center items-center gap-[20rem]">
      <div
        class="w-[28rem] h-[19rem] bg-gray-200 rounded-xl max-md:block max-[10570px]:hidden max-2xl:hidden max-xl:hidden max-lg:hidden max-sm:h-[18rem]"
      >
        <img
          class="bg-contain w-full rounded-xl h-full"
          src="/teamontwikkeling.jpg"
          alt=""
        />
      </div>
    </div>

    <div class="flex justify-center items-center mt-[10rem]">
      <img src="/team.gif" alt="team" />
    </div>
    <div class="bg-blue-50 w-full h-[134rem] max-md:h-[250rem]">
      <div class="flex justify-center items-center">
        <h2
          class="max-sm:w-[25rem] h-[5rem] w-[70rem] max-lg:w-[61rem] bg-blue-400 mt-[3rem] rounded-3xl flex justify-center items-center text-4xl font-bold text-white drop-shadow-xl"
        >
          Het spiegelspel
        </h2>
      </div>
      <div
        class="flex justify-center items-center mt-[6rem] gap-[6rem] max-md:flex-col-reverse"
      >
        <img
          class="w-[30rem] h-auto max-sm:w-[25rem]"
          src="/denken.gif"
          alt=""
        />
        <div
          class="w-[25rem] h-[46rem] rounded-xl bg-blue-400 p-3 text-white font-medium text-2xl drop-shadow-xl"
        >
          Ontdek het krachtige Spiegelspel: een dynamische methode om samen als
          team de kwaliteit, prestaties en ontwikkeling te bespreken. In dit
          spel maakt het team gezamenlijk een waardevolle 'foto' van hun
          functioneren en identificeert gebieden voor groei. Het spel creëert
          een plezierige en veilige sfeer, waarin teamleden worden uitgenodigd
          om zich vrijelijk uit te spreken en deel te nemen. Het bewezen succes
          van het Spiegelspel wordt erkend door teamleden en teammanagers. Het
          omvat alle essentiële onderwerpen voor teamleren, met aandacht voor de
          behoeften van een Highperformance team en de ISO-/HKZnormen. Het
          Spiegelspel biedt een interne audit en systeembeoordeling in één.
        </div>
      </div>
      <div
        class="flex justify-center items-center mt-[6rem] gap-[10rem] max-md:flex-col"
      >
        <div
          class="w-[25rem] h-[25rem] rounded-xl bg-blue-400 p-3 text-white font-medium text-2xl drop-shadow-xl"
        >
          Een externe of intern opgeleide spelleider begeleidt het spel,
          waardoor de teammanager en het team zich volledig kunnen richten op
          hun werk zonder zich zorgen te maken over de methodiek of het proces.
          Vertrouwen in het vakmanschap van de professional staat centraal,
          waarbij alle teamleden actief deelnemen en bijdragen aan de
          teamontwikkeling.
        </div>
        <img
          class="w-[25rem] h-auto max-sm:w-[20rem]"
          src="/bespreking.gif"
          alt=""
        />
      </div>
      <div
        class="flex justify-center items-center mt-[6rem] gap-[8rem] max-md:flex-col-reverse"
      >
        <img
          class="w-[25rem] h-auto max-md:mb-[6rem]"
          src="/selectie.gif"
          alt=""
        />
        <div
          class="w-[25rem] h-[26rem] rounded-xl bg-blue-400 p-3 text-white font-medium text-2xl drop-shadow-xl mb-[3rem]"
        >
          Tijdens het Spiegelspel ontstaat vanzelf interactie in het team,
          resulterend in waardevolle dialogen en zelfreflectie. De uitkomsten
          worden vervolgens vastgelegd in een concreet zelfevaluatierapport met
          sterke punten en ontwikkelpunten van het team. Dit rapport wordt
          overhandigd aan de teammanager en vormt een solide basis voor het
          opstellen van een effectief teamplan.
        </div>
      </div>
    </div>
  </div>
</main>
