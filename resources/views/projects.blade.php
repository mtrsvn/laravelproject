<x-layout>
  <x-slot:heading>
    Contact
  </x-slot:heading>

  <section class="fade-up" style="max-width: 520px;">
    <p style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.1em; color: #aaa; margin-bottom: 0.75rem;">
      Get in touch
    </p>
    <p style="color: #555; font-size: 0.95rem; line-height: 1.8; margin-bottom: 2.5rem;">
      Feel free to reach out if you have questions, opportunities, or just want to connect.
    </p>

    <!-- Contact Items -->
    <div class="fade-up-delay" style="display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 3rem;">

      <a href="mailto:markmatthewmasalunga@gmail.com"
         style="display: flex; align-items: center; gap: 1rem; padding: 1.25rem; border: 1px solid #eee; transition: border-color 0.2s ease;"
         onmouseover="this.style.borderColor='#1a1a1a'"
         onmouseout="this.style.borderColor='#eee'"
      >
        <i data-lucide="mail" style="width: 20px; height: 20px; color: #1a1a1a;"></i>
        <div>
          <div style="font-size: 0.85rem; font-weight: 500; margin-bottom: 0.15rem;">Email</div>
          <div style="font-size: 0.8rem; color: #888;">markmatthewmasalunga@gmail.com</div>
        </div>
      </a>

      <a href="tel:+639055158317"
         style="display: flex; align-items: center; gap: 1rem; padding: 1.25rem; border: 1px solid #eee; transition: border-color 0.2s ease;"
         onmouseover="this.style.borderColor='#1a1a1a'"
         onmouseout="this.style.borderColor='#eee'"
      >
        <i data-lucide="phone" style="width: 20px; height: 20px; color: #1a1a1a;"></i>
        <div>
          <div style="font-size: 0.85rem; font-weight: 500; margin-bottom: 0.15rem;">Phone</div>
          <div style="font-size: 0.8rem; color: #888;">+63 905 515 8317</div>
        </div>
      </a>

      <a href="https://www.linkedin.com/in/mark-matthew-masalunga-953569338" target="_blank"
         style="display: flex; align-items: center; gap: 1rem; padding: 1.25rem; border: 1px solid #eee; transition: border-color 0.2s ease;"
         onmouseover="this.style.borderColor='#1a1a1a'"
         onmouseout="this.style.borderColor='#eee'"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#1a1a1a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>
        </svg>
        <div>
          <div style="font-size: 0.85rem; font-weight: 500; margin-bottom: 0.15rem;">LinkedIn</div>
          <div style="font-size: 0.8rem; color: #888;">View Profile</div>
        </div>
      </a>

      <a href="https://mtrsvn.live" target="_blank"
         style="display: flex; align-items: center; gap: 1rem; padding: 1.25rem; border: 1px solid #eee; transition: border-color 0.2s ease;"
         onmouseover="this.style.borderColor='#1a1a1a'"
         onmouseout="this.style.borderColor='#eee'"
      >
        <i data-lucide="globe" style="width: 20px; height: 20px; color: #1a1a1a;"></i>
        <div>
          <div style="font-size: 0.85rem; font-weight: 500; margin-bottom: 0.15rem;">Portfolio</div>
          <div style="font-size: 0.8rem; color: #888;">mtrsvn.live</div>
        </div>
      </a>

    </div>

  </section>

</x-layout>