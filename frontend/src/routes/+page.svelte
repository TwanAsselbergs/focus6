<script>
  import "../styles/tailwind.css";
  import { onMount } from "svelte";
  import Header from "../components/Header.svelte";
  import Footer from "../components/Footer.svelte";

  let posts = [];

  onMount(async () => {
    const res = await fetch(
      "http://localhost/focus6/wordpress/wp-json/wp/v2/posts",
    );
    posts = await res.json();
  });
</script>

<Header />

<main class="pt-28 h-screen bg-blue-500">
  <h1 class="text-3xl font-bold">Home</h1>
  <section>
    <h2 class="text-xl">Posts</h2>
    {#if posts.length > 0}
      {#each posts as post}
        <article>
          <h3>{post.title.rendered}</h3>
          <div>{@html post.content.rendered}</div>
        </article>
      {/each}
    {/if}
  </section>
</main>

<Footer />
