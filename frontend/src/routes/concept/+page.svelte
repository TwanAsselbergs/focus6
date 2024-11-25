<script>
  import Header from "../../components/Header.svelte";
  import Footer from "../../components/Footer.svelte";
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
    <p class="w-4/6 pt-8 text-lg text-gray-700">
      Met het Spiegelconcept geeft u invulling aan een lerende organisatie. Met
      deze aanpak spiegel je je als professional, team en organisatie
      systematisch aan de hoogste kwaliteitsstandaarden en de behoeften vanuit
      je omgeving. Je gebruikt de leerpunten die hieruit naar voren komen om je
      dienstverlening te ontwikkelen.
      <br /> <br />
      In het Spiegelconcept ligt de focus op teamontwikkeling. Daar vindt de feitelijke
      dienstverlening immers plaats. Het Spiegelconcept is makkelijk schaalbaar.
      Daardoor is het concept ook organisatiebreed toepasbaar.
      <br /> <br />
      Uit ervaring weten we dat de motivatie van in publieke organisaties wel in
      orde is. Winst is vooral te behalen als professionals gaan samenwerken aan
      gedeelde doelen in het team. Daarbij dient het gesprek zich te richten op de
      prestaties en de kwaliteit van het team. Door de teamleden voortdurend in dialoog
      te laten gaan, wisselen zij verschillende perspectieven en zienswijzen uit..
      Zo leren de teamleden van elkaar en ontstaat ruimte voor vernieuwing. Het team
      ervaart energie, inspiratie en verbinding. Het team bouwt aan een lerende cultuur.
    </p>
  </div>

  <section>
    <div class="flex flex-col md:flex-row justify-center items-center mt-24">
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
          Uit ervaring weten we dat de motivatie van in publieke organisaties
          wel in orde is. Winst is vooral te behalen als professionals gaan
          samenwerken aan gedeelde doelen in het team. Daarbij dient het gesprek
          zich te richten op de prestaties en de kwaliteit van het team. Door de
          teamleden voortdurend in dialoog te laten gaan, wisselen zij
          verschillende perspectieven en zienswijzen uit.. Zo leren de teamleden
          van elkaar en ontstaat ruimte voor vernieuwing. Het team ervaart
          energie, inspiratie en verbinding. Het team bouwt aan een lerende
          cultuur.
        </p>
      </div>

      <!-- Image with Animation -->
      <img
        src="/spiegelconcept.png"
        alt="Visualisatie van het Spiegelconcept"
        class="rounded-3xl w-2/5 md:w-1/4 mt-10 md:mt-0 transition-transform duration-500 ease-in-out hover:scale-110"
      />
    </div>
    <div
      class="flex flex-col-reverse md:flex-row items-center md:justify-center my-24 md:my-48"
    >
      <!-- Image Container with Animation -->
      <div class="w-4/5 md:w-1/3 h-48 md:h-72 rounded-3xl md:mr-12">
        <img
          src="/samensturen.jpg"
          alt="Visualisatie van Samen Sturen"
          class="w-auto mt-10 mx-auto my-auto h-48 md:h-72 rounded-3xl md:mr-12 transition-transform duration-500 ease-in-out hover:scale-110"
        />
      </div>

      <!-- Text Content -->
      <div class="text-center md:w-1/3 md:ml-36">
        <h2 class="text-2xl md:text-3xl font-bold pb-6 md:pt-0">
          Samen Sturen
        </h2>
        <p
          class="w-10/12 flex justify-center items-center mx-auto flex-col text-lg transition-all duration-500 ease-in-out"
        >
          Vanuit een positieve insteek willen wij eraan bijdragen dat teams
          beter functioneren en plezier beleven in hun werk. De omgeving waarin
          de teams opereren is complex en cliënten en stakeholders zijn
          kritisch. Van het team vraagt dit daadkracht, professionaliteit en
          flexibiliteit. Op een praktische en speelse manier helpen we teams om
          deze dynamiek hanteerbaar te maken. Door als team samen sturing te
          geven aan deze ontwikkelingen kan zij de dienstverlening daarop
          aanpassen. Wij noemen dat Samen Sturen. Ieder draagt vanuit zijn eigen
          rol en verantwoordelijkheid bij aan de doelen van het team, of je nu
          manager, professional of ondersteuner bent.
        </p>
      </div>
    </div>
  </section>

  <!-- Subheader -->
  <div
    class="w-11/12 md:w-[78%] mx-auto bg-gray-100 flex justify-center items-center rounded-3xl mb-24"
  >
    <h2 class="text-gray-800 text-4xl md:text-5xl font-bold py-24">Aanpak</h2>
  </div>

  <section>
    <div class="flex flex-col md:flex-row justify-center items-center">
      <!-- Text Content -->
      <div class="md:w-1/2 flex justify-center items-center flex-col md:block">
        <h2
          class="text-center md:text-left text-2xl md:text-3xl font-bold pb-6"
        >
          Het TeamKompas
        </h2>
        <p
          class="w-10/12 md:w-full text-center md:text-left md:pr-48 text-lg transition-all duration-500 ease-in-out"
        >
          Om de koers van het team te bepalen starten we door samen met het team
          een TeamKompas te maken. De basis hiervoor zijn de overtuigingen en
          leidende principes van team. Het Teamkompas geeft het team koers voor
          de langere termijn. Vervolgens maken we het teamplan dat zo mogelijk
          gevoed wordt door (zelf-)evaluaties klant- en omgevingsonderzoek.
        </p>
      </div>

      <!-- Compass Image with Animation -->
      <img
        src="/teamkompas.png"
        alt="Visualisatie van TeamKompas"
        class="rounded-3xl w-2/5 md:w-1/4 mt-10 md:mt-0 transition-transform duration-500 ease-in-out hover:rotate-[15deg] hover:scale-105"
      />
    </div>

    <div
      class="flex flex-col-reverse md:flex-row items-center md:justify-center my-24 md:my-48"
    >
      <div class="w-4/5 md:w-1/3 h-48 md:h-72 rounded-3xl md:mr-12">
        <img
          src="/teamplan.png"
          alt="Visualisatie van Teamplan"
          class="w-auto mt-10 mx-auto my-auto h-48 md:h-72 rounded-3xl md:mr-12 transition-transform duration-500 ease-in-out hover:scale-105"
        />
      </div>

      <div class="text-center md:w-1/3 md:ml-36">
        <h2 class="text-2xl md:text-3xl font-bold pb-6 md:pt-0">
          Het Teamplan
        </h2>
        <p
          class="w-10/12 flex justify center items-center mx-auto flex-col text-lg transition-all duration-500 ease-in-out"
        >
          In het Teamplan legt het team de ambities voor de komende jaren vast,
          door haar doelen te bepalen. Aan deze doelen koppelt het team
          'eigenaren'. Zij dragen zorg voor de realisatie van deze doelen.
        </p>
        <br />
        <p
          class="w-10/12 flex justify center items-center mx-auto flex-col text-lg transition-all duration-500 ease-in-out"
        >
          Het teamplan wordt gevoed op basis van interne en externe analyses die
          we samen met het team uitvoeren. In workshops gaat het team zelf aan
          de slag en met direct resultaat. Het uitgangspunt is dat de teams zelf
          niets hoeven voor te bereiden en uit te werken. Een coach begeleidt
          het proces. De teamleden participeren actief en delen kennis en
          inzichten. Voor de workshops gebruiken we in praktijk ontwikkelde
          formats en spellen
        </p>
      </div>
    </div>
  </section>
  <section class="mb-16">
    <!-- Subheader -->
    <div
      class="w-11/12 md:w-[78%] mx-auto bg-gray-100 flex justify-center items-center rounded-3xl my-24"
    >
      <h2 class="text-gray-800 text-4xl md:text-5xl font-bold py-24">
        Implementatie
      </h2>
    </div>

    <div class="flex flex-col md:flex-row justify-center items-center">
      <div class="md:w-1/2 flex justify-center items-center flex-col md:block">
        <h2
          class="text-center md:text-left text-2xl md:text-3xl font-bold pb-6"
        >
          Analyse & Evaluatie
        </h2>
        <p
          class="w-10/12 md:w-full text-center md:text-left md:pr-48 text-lg transition-all duration-500 ease-in-out"
        >
          Jaarlijks maakt het team een nieuw teamplan. De zelfevaluatie en het
          klantenonderzoek komen jaarlijks terug. De andere analyse & evaluatie
          instrumenten worden gespreid over 3 jaar uitgevoerd. Eventueel kunnen
          alternatieve audits of evaluaties worden ingepland. Hiermee kan
          aangesloten worden op de 3 jarige certificeringscyclus.
        </p>
      </div>
      <img
        src="/evaluatie.png"
        alt="Teamkompaspng"
        class="rounded-3xl w-2/5 md:w-1/4 mt-10 md:mt-0 mb-5"
      />
    </div>
    <div class="flex flex-col md:flex-row justify-center items-center">
      <img
        src="/proces.png"
        alt="Teamkompaspng"
        class="rounded-3xl w-2/5 md:w-1/4 mt-10 md:mt-0 mb-5"
      />
      <div class="md:w-1/2 flex justify-center items-center flex-col md:block">
        <h2
          class="text-center md:text-left text-2xl md:text-3xl font-bold pb-6"
        >
          Cyclus Teamplan
        </h2>
        <p
          class="w-10/12 md:w-full text-center md:text-left md:pr-48 text-lg transition-all duration-500 ease-in-out"
        >
          Op teamniveau geeft het team invulling aan 'Samen sturen' middels een
          wekelijkse 'check-in', een maandelijkse 'check-out' en een 'refresh'
          per kwartaal. In een weekstart vindt de check-in plaats: het team komt
          in actie. Bij de check-up kijkt het team hoe de kritische processen
          lopen en of bijsturing nodig is. Bij de Refresh kijkt het team opnieuw
          naar het teamplan en bepaalt het team of zij nog de 'goede dingen'
          doet.
        </p>
      </div>
    </div>
  </section>
</main>

<Footer />
