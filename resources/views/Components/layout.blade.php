<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Mark Matthew Masalunga — Developer Portfolio">
  <title>Mark Matthew Masalunga Portfolio</title>
  <script src="https://unpkg.com/lucide@latest"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      font-size: 16px;
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      color: #1a1a1a;
      background: #fff;
      line-height: 1.7;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    /* ── Navigation ── */
    .site-nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 100;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-bottom: 1px solid #eee;
    }

    .nav-inner {
      max-width: 960px;
      margin: 0 auto;
      padding: 0 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 60px;
    }

    .nav-logo {
      font-weight: 600;
      font-size: 1rem;
      letter-spacing: -0.02em;
    }

    .nav-links {
      display: flex;
      gap: 2rem;
      list-style: none;
    }

    .nav-links a {
      font-size: 0.85rem;
      font-weight: 400;
      color: #888;
      transition: color 0.2s ease;
      letter-spacing: 0.02em;
      text-transform: uppercase;
    }

    .nav-links a:hover,
    .nav-links a.active {
      color: #1a1a1a;
    }

    /* ── Mobile Menu ── */
    .mobile-toggle {
      display: none;
      background: none;
      border: none;
      cursor: pointer;
      padding: 4px;
    }

    .mobile-toggle svg {
      width: 22px;
      height: 22px;
      stroke: #1a1a1a;
    }

    .mobile-menu {
      display: none;
      position: fixed;
      top: 60px;
      left: 0;
      width: 100%;
      background: rgba(255, 255, 255, 0.98);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid #eee;
      padding: 1.5rem 2rem;
      z-index: 99;
    }

    .mobile-menu.open {
      display: block;
    }

    .mobile-menu a {
      display: block;
      padding: 0.75rem 0;
      font-size: 0.9rem;
      color: #888;
      border-bottom: 1px solid #f5f5f5;
      transition: color 0.2s ease;
    }

    .mobile-menu a:last-child {
      border-bottom: none;
    }

    .mobile-menu a:hover,
    .mobile-menu a.active {
      color: #1a1a1a;
    }

    @media (max-width: 640px) {
      .nav-links { display: none; }
      .mobile-toggle { display: block; }
    }

    /* ── Page Header ── */
    .page-header {
      padding-top: 120px;
      padding-bottom: 2rem;
      max-width: 960px;
      margin: 0 auto;
      padding-left: 2rem;
      padding-right: 2rem;
    }

    .page-header h1 {
      font-size: 1.5rem;
      font-weight: 600;
      letter-spacing: -0.03em;
      color: #1a1a1a;
    }

    .page-header .divider {
      width: 32px;
      height: 1px;
      background: #ccc;
      margin-top: 1rem;
    }

    /* ── Main Content ── */
    .main-content {
      max-width: 960px;
      margin: 0 auto;
      padding: 1rem 2rem 6rem;
    }

    /* ── Footer ── */
    .site-footer {
      border-top: 1px solid #eee;
      text-align: center;
      padding: 2rem;
      font-size: 0.75rem;
      color: #bbb;
      letter-spacing: 0.03em;
    }

    /* ── Utilities ── */
    .text-secondary { color: #888; }
    .text-sm { font-size: 0.875rem; }
    .text-xs { font-size: 0.75rem; }
    .font-medium { font-weight: 500; }
    .font-semibold { font-weight: 600; }
    .mt-1 { margin-top: 0.25rem; }
    .mt-2 { margin-top: 0.5rem; }
    .mt-3 { margin-top: 1rem; }
    .mt-4 { margin-top: 1.5rem; }
    .mb-2 { margin-bottom: 0.5rem; }
    .mb-3 { margin-bottom: 1rem; }
    .mb-4 { margin-bottom: 1.5rem; }

    /* ── Transitions ── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(16px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .fade-up {
      animation: fadeUp 0.6s ease forwards;
    }

    .fade-up-delay {
      animation: fadeUp 0.6s ease 0.15s forwards;
      opacity: 0;
    }

    .fade-up-delay-2 {
      animation: fadeUp 0.6s ease 0.3s forwards;
      opacity: 0;
    }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav class="site-nav" id="main-nav">
    <div class="nav-inner">
      <a href="/" class="nav-logo">Mark Matthew Masalunga</a>
      <ul class="nav-links">
        <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="/trabaho" class="{{ request()->is('trabaho') ? 'active' : '' }}">About</a></li>
        <li><a href="/projects" class="{{ request()->is('projects') ? 'active' : '' }}">Contact</a></li>
      </ul>
      <button class="mobile-toggle" id="mobile-toggle" aria-label="Toggle menu" onclick="document.getElementById('mobile-menu').classList.toggle('open')">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
      </button>
    </div>
  </nav>

  <div class="mobile-menu" id="mobile-menu">
    <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
    <a href="/trabaho" class="{{ request()->is('trabaho') ? 'active' : '' }}">About</a>
    <a href="/projects" class="{{ request()->is('projects') ? 'active' : '' }}">Contact</a>
  </div>

  <!-- Page Header -->
  <header class="page-header fade-up">
    <h1>{{ $heading }}</h1>
    <div class="divider"></div>
  </header>

  <!-- Main -->
  <main class="main-content fade-up-delay">
    {{ $slot }}
  </main>

  <script>
    lucide.createIcons();
  </script>
</body>
</html>