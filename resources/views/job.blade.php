<x-layout>
    <x-slot:heading>
      Job Details
    </x-slot:heading>

    <section class="fade-up" style="max-width: 520px;">
      <h2 style="font-size: 1.25rem; font-weight: 600; letter-spacing: -0.02em; margin-bottom: 1rem;">
        {{ $job['title'] }}
      </h2>

      <div style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 2rem;">
        <div style="display: flex; align-items: center; gap: 0.5rem;">
          <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.08em; color: #aaa; width: 70px;">Salary</span>
          <span style="font-size: 0.9rem; color: #555;">{{ $job['salary'] }}</span>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
          <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.08em; color: #aaa; width: 70px;">Location</span>
          <span style="font-size: 0.9rem; color: #555;">{{ $job['location'] }}</span>
        </div>
      </div>

      <a href="#"
         style="display: inline-block; padding: 0.6rem 1.5rem; border: 1px solid #1a1a1a; font-size: 0.85rem; font-weight: 500; letter-spacing: 0.02em; background: #1a1a1a; color: #fff; transition: all 0.2s ease;"
         onmouseover="this.style.background='#fff'; this.style.color='#1a1a1a';"
         onmouseout="this.style.background='#1a1a1a'; this.style.color='#fff';"
      >
        Apply
      </a>
    </section>

</x-layout>