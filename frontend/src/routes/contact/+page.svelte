<script>
  import { onMount } from "svelte";
  import emailjs from "emailjs-com";
  import Header from "../../components/Header.svelte";
  import Footer from "../../components/Footer.svelte";

  let post = {};

  const CACHE_DURATION = 60 * 60 * 1000;

  let formData = {
    name: "",
    email: "",
    message: "",
  };

  const USER_ID = "cxFG-mKexUdTXtOZ4";
  const SERVICE_ID = "service_8j8xqta";
  const TEMPLATE_ID = "template_0bxy6d4";

  onMount(async () => {
    if (typeof localStorage !== "undefined") {
      const cachedPost = JSON.parse(localStorage.getItem("contactPost")) || {};
      const cachedTimestamp = localStorage.getItem("contactPostTimestamp");

      const isCacheValid =
        cachedTimestamp && Date.now() - cachedTimestamp < CACHE_DURATION;

      if (isCacheValid && cachedPost.id) {
        post = cachedPost;
      } else {
        const res = await fetch(
          "https://u230654.gluwebsite.nl/focus6/wordpress/wp-json/wp/v2/posts/21",
        );
        post = await res.json();
        localStorage.setItem("contactPost", JSON.stringify(post));
        localStorage.setItem("contactPostTimestamp", Date.now());
      }
    }
  });

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      await emailjs.send(SERVICE_ID, TEMPLATE_ID, formData, USER_ID);
      alert("Bericht succesvol verzonden.");
      formData = { name: "", email: "", message: "" };
    } catch (error) {
      alert("Er is iets misgegaan. Probeer het opnieuw.");
      console.error(error);
    }
  };
</script>

<Header />

<main class="mt-24">
  <!-- Header -->
  <div
    class="bg-[#1C2122] py-24 md:py-40 h-72 md:h-auto rounded-b-3xl md:rounded-r-full text-center"
  >
    <h1 class="text-4xl md:text-5xl font-bold text-white">Contact</h1>
    <p class="text-gray-400 font-semibold">Neem contact met ons op</p>
  </div>

  <div class="bg-white pt-16 md:pt-24 pb-16 md:pb-16">
    <div
      class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-24 items-center"
    >
      <!-- Text Content -->
      <div>
        <h2
          class="text-2xl font-bold text-gray-800 mb-4 text-center md:text-left"
        >
          Waarom contact opnemen?
        </h2>
        <p
          class="text-lg text-gray-700 mb-6 text-center md:text-left px-6 md:px-0"
        >
          {post.paragraph_1}
        </p>
        <p class="text-lg text-gray-700 text-center md:text-left px-6 md:px-0">
          {post.paragraph_2}
        </p>
        <div class="mt-8 space-y-5 md:space-y-3">
          <a
            href="mailto:{post.email}"
            aria-label="Email"
            class="flex items-center space-x-2 md:w-44 ml-10 md:ml-0"
          >
            <svg viewBox="0 0 29 29" style="width:20px" class="text-black">
              <path
                fill="currentColor"
                d="M5.135 5.37c-1.531 0-2.772 1.209-2.772 2.7v12.958c0 1.491 1.241 2.7 2.772 2.7h18.848c1.53 0 2.771-1.209 2.771-2.7V8.07c0-1.491-1.24-2.7-2.771-2.7H5.135zm0-1.62h18.848c2.449 0 4.434 1.934 4.434 4.32v12.958c0 2.386-1.985 4.32-4.434 4.32H5.135c-2.45 0-4.435-1.934-4.435-4.32V8.07c0-2.386 1.986-4.32 4.435-4.32z"
              ></path>
              <path
                fill="currentColor"
                d="M23.998 7.48c.335.306.35.819.036 1.145l-5.898 6.103 5.88 5.728c.298.29.323.745.075 1.062l-.075.083a.847.847 0 01-1.176 0l-5.844-5.693-1.832 1.896a.847.847 0 01-1.21 0l-1.833-1.896L6.277 21.6a.847.847 0 01-1.176 0 .795.795 0 010-1.145l5.88-5.728-5.897-6.103a.795.795 0 01.035-1.145.847.847 0 011.176.035l8.264 8.552 8.264-8.552a.847.847 0 011.175-.035z"
              ></path>
            </svg>
            <span class="text-gray-600 text-lg font-semibold hover:underline">
              {post.email}</span
            >
          </a>
          <a
            href="tel:{post.phone}"
            aria-label="Phone"
            class="flex items-center space-x-2 md:w-44 ml-10 md:ml-0"
          >
            <svg viewBox="0 0 29 29" style="width:20px" class="text-black">
              <path
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.7"
                d="M6.364 3.81c1.496-1.503 5.032-2.139 6.907-2.108 1.88-.218 1.273 8.104.313 8.263 0 0-3.039.384-3.125 1.275-.116 1.217 3.009 8.67 4.22 8.84.65.091 2.606-1.402 2.606-1.402 1.521-1.145 4.678 2.2 6.161 3.596.649.627.617 1.159-.059 1.947-1.181 1.322-4.29 3.439-5.52 3.266-2.988-.42-8.05-4.592-10.483-9.582-2.743-5.629-2.712-12.82-1.02-14.095z"
              ></path>
            </svg>
            <span class="text-gray-600 text-lg font-semibold hover:underline">
              {post.phone}
            </span>
          </a>
          <div class="flex items-center space-x-2 pb-6 ml-10 md:ml-0">
            <svg viewBox="0 0 29 29" style="width:20px" class="text-black">
              <g
                fill="none"
                fill-rule="evenodd"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.7"
              >
                <path d="M18.625 10.2a4 4 0 11-8 .001 4 4 0 018-.001z"></path>
                <path
                  d="M23.825 10.2c0-5.985-4.92-9-9.5-8.95C9.797 1.2 5.3 4.223 5.3 10.2c0 5.979 8.188 16.677 8.426 17.116.238.438.976.438 1.214 0 5.923-7.41 8.885-13.116 8.885-17.116z"
                ></path>
              </g>
            </svg>
            <span
              class="text-gray-600 text-sm md:text-md font-semibold flex flex-col md:block"
            >
              {post.address},&nbsp;<span>{post.postal_code},&nbsp;</span><span
                >{post.country}</span
              >
            </span>
          </div>
          <!-- svelte-ignore a11y_missing_attribute -->
          <iframe
            class="mx-auto w-80 md:w-full h-72 md:h-96 rounded-xl shadow-lg hover:shadow-xl transition-all duration-500"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2466.126017043672!2d5.091733076032587!3d52.10631317456642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6682d8497bc7f%3A0xffda77e8724abcfb!2sBurgemeester%20Norbruislaan%20111%2C%203555%20EE%20Utrecht%2C%20Netherlands!5e0!3m2!1sen!2sus!4v1697463838250!5m2!1sen!2sus"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="p-8">
        <h2
          class="text-3xl font-bold text-gray-800 text-center md:text-left mb-6"
        >
          Stuur ons een bericht
        </h2>
        <p class="text-lg text-gray-700 pb-8 text-center md:text-left">
          {post.paragraph_3}
        </p>
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
              class="w-full bg-[#185CE6] hover:bg-[#2B67E8] text-white py-3 px-6 rounded-lg font-semibold transition-all"
              >Verzenden</button
            >
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<Footer />
