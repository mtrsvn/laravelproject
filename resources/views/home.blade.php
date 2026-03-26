<x-layout>
  <x-slot:heading>
    Profile
  </x-slot:heading>

  <section style="display: flex; align-items: center; gap: 3rem; flex-wrap: wrap;">

    <!-- Profile Image -->
    <div class="fade-up" style="flex-shrink: 0;">
      <img
        src="{{ asset('assets/images/profile.png') }}"
        alt="Mark Matthew Masalunga"
        style="width: 180px; height: 180px; border-radius: 50%; object-fit: cover;"
      >
    </div>

    <!-- Bio -->
    <div class="fade-up-delay" style="flex: 1; min-width: 280px;">
      <p style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.1em; color: #aaa; margin-bottom: 0.5rem; line-height: 1.5;">
       Student Mobile and Web Developer
      </p>
      <h2 style="font-size: 1.75rem; font-weight: 600; letter-spacing: -0.03em; line-height: 1.3; margin-bottom: 1rem;">
        Mark Matthew Masalunga
      </h2>
      <p style="color: #666; font-size: 0.95rem; line-height: 1.8; margin-bottom: 1.5rem;">
        Hi! My name is Mark Matthew Masalunga, also known online as mtrsvn. I am currently in my third year of college, pursuing a Bachelor of Science in Information Technology (BSIT). I have a strong passion for creating dynamic, user-friendly, and efficient web and mobile applications.
      </p>
      <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
        <a
          href="/trabaho"
          style="display: inline-block; padding: 0.6rem 1.5rem; border: 1px solid #1a1a1a; font-size: 0.85rem; font-weight: 500; letter-spacing: 0.02em; transition: all 0.2s ease; background: #1a1a1a; color: #fff;"
          onmouseover="this.style.background='#fff'; this.style.color='#1a1a1a';"
          onmouseout="this.style.background='#1a1a1a'; this.style.color='#fff';"
        >
          About Me
        </a>
        <a
          href="/projects"
          style="display: inline-block; padding: 0.6rem 1.5rem; border: 1px solid #ccc; font-size: 0.85rem; font-weight: 500; letter-spacing: 0.02em; color: #666; transition: all 0.2s ease;"
          onmouseover="this.style.borderColor='#1a1a1a'; this.style.color='#1a1a1a';"
          onmouseout="this.style.borderColor='#ccc'; this.style.color='#666';"
        >
          Contact
        </a>
      </div>
    </div>

  </section>

</x-layout>
