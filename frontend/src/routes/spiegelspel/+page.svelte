<script>
  let formData = {
    name: "",
    email: "",
    message: "",
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    alert("Verstuurd");
  };
</script>

<header class="top-0 left-0 right-0 z-50 border-b bg-white">
  <nav>
    <div class="flex justify-between items-center">
      <div class="p-5">
        <a href="">
          <img src="/logo-spiegelspel.png" alt="Logo" class="" />
        </a>
      </div>
      <div class="pr-[10rem] text-black pt-2 max-lg:pr-[0rem] max-md:hidden">
        <ul class="flex font-semibold items-center">
          <li class="pr-10 text-2xl drop-shadow-lg">
            <a href="/">Doel Spiegelspel</a>
          </li>
          <li class="pr-10 text-2xl drop-shadow-lg">
            <a href="/">Het Spiegespel</a>
          </li>
          <li class="pr-10 text-2xl drop-shadow-lg"><a href="/">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<main>
  <img src="/spiegelspel-main.png" alt="" />
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
        class="w-[21rem] h-[18rem] bg-white rounded-xl max-lg:w-[18rem]"
      ></div>
      <div
        class="w-[21rem] h-[18rem] bg-white rounded-xl max-lg:w-[18rem]"
      ></div>
      <div
        class="w-[21rem] h-[18rem] bg-white rounded-xl max-lg:w-[18rem]"
      ></div>
    </div>
    <div class="flex justify-center items-center">
      <div
        class="mt-[4rem] w-[30rem] h-[4rem] rounded-xl bg-orange-400 max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden text-white text-4xl font-bold max-sm:w-[25rem]"
      >
        <div class="justify-center items-center flex">Kwaliteit</div>
      </div>
    </div>
    <div class="flex justify-center items-center gap-[20rem] max-sm:gap-[12rem]">
      <div
        class="w-[1rem] h-[2rem] bg-white max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden"
      ></div>
      <div
        class="w-[1rem] h-[2rem] bg-white max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden"
      ></div>
    </div>
    <div class="flex justify-center items-center gap-[20rem]">
      <div
        class="w-[28rem] h-[23rem] bg-gray-200 rounded-xl max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden max-sm:h-[18rem]"
      ></div>
    </div>
    <div class="flex justify-center items-center">
      <div
        class="mt-[4rem] w-[30rem] h-[4rem] rounded-xl bg-orange-400 max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden text-white text-4xl font-bold max-sm:w-[26rem]"
      >
        <div class="justify-center items-center flex">Samenwerken</div>
      </div>
    </div>
    <div class="flex justify-center items-center gap-[20rem] max-sm:gap-[12rem]">
      <div
        class="w-[1rem] h-[2rem] bg-white max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden"
      ></div>
      <div
        class="w-[1rem] h-[2rem] bg-white max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden"
      ></div>
    </div>
    <div class="flex justify-center items-center gap-[20rem]">
      <div
        class="w-[28rem] h-[23rem] bg-gray-200 rounded-xl max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden max-sm:h-[18rem]"
      ></div>
    </div>
    <div class="flex justify-center items-center">
      <div
        class="mt-[4rem] w-[30rem] h-[4rem] rounded-xl bg-orange-400 max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden text-white text-4xl font-bold max-sm:w-[26rem]"
      >
        <div class="justify-center items-center flex">Teamontwikkeling</div>
      </div>
    </div>
    <div class="flex justify-center items-center gap-[20rem] max-sm:gap-[12rem]">
      <div
        class="w-[1rem] h-[2rem] bg-white max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden"
      ></div>
      <div
        class="w-[1rem] h-[2rem] bg-white max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden"
      ></div>
    </div>
    <div class="flex justify-center items-center gap-[20rem]">
      <div
        class="w-[28rem] h-[23rem] bg-gray-200 rounded-xl max-md:block max-2xl:hidden max-xl:hidden max-lg:hidden max-sm:h-[18rem]"
      ></div>
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
      <div class="flex justify-center items-center mt-[6rem] gap-[6rem] max-md:flex-col-reverse">
        <img class="w-[30rem] h-auto max-sm:w-[25rem]" src="/denken.gif" alt="" />
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
      <div class="flex justify-center items-center mt-[6rem] gap-[10rem] max-md:flex-col">
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
        <img class="w-[25rem] h-auto max-sm:w-[20rem]" src="/bespreking.gif" alt="" />
      </div>
      <div class="flex justify-center items-center mt-[6rem] gap-[8rem] max-md:flex-col-reverse">
        <img class="w-[25rem] h-auto max-md:mb-[6rem]" src="/selectie.gif" alt="" />
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
      <div class=" bg-[#879EC8] w-full h-[100rem]">
        <div class="flex justify-center items-center">
          <h2
            class="max-sm:w-[25rem] h-[5rem] w-[70rem] max-md:w-[35rem] bg-orange-400 mt-[3rem] rounded-3xl flex justify-center items-center text-4xl font-bold text-white drop-shadow-xl max-lg:w-[55rem]"
          >
            Contact
          </h2>
        </div>
        <div class="flex items-center justify-center mt-[7rem]">
          <div
            class="relative bg-white rounded-xl w-[50rem] h-[43rem] max-lg:w-[40rem] max-sm:w-[25rem] max-sm:h-[29rem]"
          >
            <div class="w-[30rem] h-[40rem] float-right mr-[4rem] mt-[5rem] max-sm:w-[17rem] max-sm:mt-[2rem]">
              <form on:submit={handleSubmit} class="space-y-6">
                <div class="relative">
                  <input
                    type="text"
                    id="name"
                    bind:value={formData.name}
                    placeholder=" "
                    required
                    class="peer mt-1 block w-full p-4 pt-6 border border-gray-300 rounded-xl focus:ring-[#185CE6] focus:border-[#185CE6] placeholder-transparent"
                  />
                  <label
                    for="name"
                    class="absolute left-4
                          transition-all duration-200 text-gray-400 text-md
                          peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500
                          {formData.name
                      ? 'top-2 text-sm text-blue-500'
                      : 'top-[21px] text-gray-400 text-base'}"
                  >
                    Naam
                  </label>
                </div>

                <div class="relative">
                  <input
                    type="email"
                    id="email"
                    bind:value={formData.email}
                    placeholder=" "
                    required
                    class="peer mt-1 block w-full p-4 pt-6 border border-gray-300 rounded-xl focus:ring-[#185CE6] focus:border-[#185CE6] placeholder-transparent"
                  />
                  <label
                    for="email"
                    class="absolute left-4
                          transition-all duration-200 text-gray-400 text-md
                          peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500
                          {formData.email
                      ? 'top-2 text-sm text-blue-500'
                      : 'top-[21px] text-gray-400 text-base'}"
                  >
                    E-mailadres
                  </label>
                </div>

                <div class="relative">
                  <textarea
                    id="message"
                    bind:value={formData.message}
                    rows="5"
                    placeholder=" "
                    required
                    class="peer mt-1 block w-full p-4 pt-6 border border-gray-300 rounded-xl focus:ring-[#185CE6] focus:border-[#185CE6] placeholder-transparent resize-none"
                  ></textarea>
                  <label
                    for="message"
                    class="absolute left-4
                          transition-all duration-200 text-gray-400 text-md
                          peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500
                          {formData.message
                      ? 'top-2 text-sm text-blue-500'
                      : 'top-[21px] text-gray-400 text-base'}"
                  >
                    Bericht
                  </label>
                </div>

                <div class="text-center">
                  <button
                    type="submit"
                    class="w-full bg-orange-400 hover:bg-orange-500 text-white py-3 px-6 rounded-lg font-semibold transition-all"
                    >Verstuur</button
                  >
                </div>
              </form>
            </div>
          </div>
          <div
            class="absolute w-[23rem] h-[37rem] rounded-xl bg-orange-400 mr-[47rem] max-lg:mr-[0rem] max-lg:mt-[70rem]"
          >
            <div class="flex justify-center items-center">
              <div
                class="flex-col justify-center items-center h-[37rem] mt-[6rem]"
              >
                <div class="w-[20rem] h-[10rem]">
                  <div class="flex justify-between items-center">
                    <i class="fa-solid fa-location-dot text-white text-6xl"></i>
                    <h2 class="text-white text-xl font-bold">
                      Naam: A.Nijlant<br /> Bedrijfsnaam:focus6 <br /> Website: focus6.nl
                    </h2>
                  </div>
                </div>
                <div class="w-[20rem] h-[10rem]">
                  <div class="flex justify-between items-center">
                    <i class="fa-solid fa-envelope text-white text-6xl"></i>
                    <h2 class="text-white text-xl font-bold">
                      Email: a.nijlant@focus6.nl
                    </h2>
                  </div>
                </div>
                <div class="w-[20rem] h-[10rem]">
                  <div class="flex justify-between items-center">
                    <i class="fa-solid fa-phone text-white text-6xl"></i>
                    <h2 class="text-white text-xl font-bold">06-21937222</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
