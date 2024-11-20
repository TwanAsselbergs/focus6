<script>
  import Header from "../../components/Header.svelte";
  import Footer from "../../components/Footer.svelte";
  import clsx from "clsx";
  import { ScrollObserver } from "@/components/ScrollObserver";

  const items = [
    {
      title: "Loudness correction",
      content: "Ensure that your audio maintains consistent relative loudness across one or many recordings.",
    },
    {
      title: "Speech isolation",
      content: "Isolate and boost voices, using neural networks trained to distinguish speech from external noise.",
    },
    {
      title: "Noise reduction",
      content:
        "Eliminate all air conditioners, lawn mowers, noisy neighbors, and other background noises from your recording.",
    },
  ];
</script>

<Header />

<div class="min-h-screen w-screen px-8 py-12 md:px-0">
  <div class="pb-24 text-center text-sm text-white/30">Scroll down</div>

  <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <ScrollObserver class="relative grid grid-cols-2 gap-32">
      <ScrollObserver.TriggerGroup class="py-[50vh]">
        {#each items as item, index}
          <ScrollObserver.Trigger id={`features-${index}`} class="relative scroll-mt-[50vh]">
            {#if isActive}
              <div class="text-white relative -mx-8 -mb-4 rounded-2xl p-8 transition duration-300 hover:bg-white/10">
                <div class="font-epilogue text-4xl font-bold">{item.title}</div>
                <div class="mt-4 text-lg">{item.content}</div>
                <a href={`#features-${index}`} class="absolute inset-0"></a>
              </div>
            {:else}
              <div class="text-white/10 hover:text-white/30">
                <div class="font-epilogue text-4xl font-bold">{item.title}</div>
                <div class="mt-4 text-lg">{item.content}</div>
                <a href={`#features-${index}`} class="absolute inset-0"></a>
              </div>
            {/if}
          </ScrollObserver.Trigger>
        {/each}
      </ScrollObserver.TriggerGroup>
    </ScrollObserver>
  </div>
</div>

<Footer />
