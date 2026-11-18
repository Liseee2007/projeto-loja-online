<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kora Gestão · Desenvolvido por Anelise Lemes</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Playfair+Display:ital,wght@0,600;1,500;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    :root {
      --noir-950: #12080e;
      --noir-900: #1b0d15;
      --noir-800: #291521;
      --noir-border: rgba(255, 255, 255, 0.1);
      --pink-neon: #ff4d94;
      --pink-neon-hover: #ff2e82;
      --pink-soft: #ffe4ef;
      --pink-tint: #fff5f9;
      --pink-deep: #be185d;
      --surface-app: #fbf9fa;
      --surface-card: #ffffff;
      --border-app: #ece6e9;
      --ink-900: #181115;
      --ink-600: #5c4b53;
      --ink-400: #8f7c85;
    }

    * {
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
      background-color: #f6f2f4;
      color: var(--ink-900);
      margin: 0;
      -webkit-font-smoothing: antialiased;
    }

    .serif-italic {
      font-family: 'Playfair Display', Georgia, serif;
      font-style: italic;
      font-weight: 500;
    }

    .mono {
      font-family: 'JetBrains Mono', monospace;
      font-variant-numeric: tabular-nums;
    }

    .page-wrap {
      max-width: 1340px;
      margin: 0 auto;
      padding: 0 1.5rem;
    }

    /* Dark Editorial Hero Wrapper (Reference Layout) */
    .hero-dark-zone {
      background:
        radial-gradient(circle at 18% 20%, rgba(255, 77, 148, 0.16) 0%, transparent 45%),
        radial-gradient(circle at 82% 10%, rgba(236, 72, 153, 0.12) 0%, transparent 42%),
        var(--noir-950);
      color: #ffffff;
      padding-bottom: 15rem;
      position: relative;
    }

    /* Top Bar inside Dark Hero */
    .top-editorial-nav {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      padding: 1.35rem 0;
      border-bottom: 1px solid var(--noir-border);
    }

    .brand-emblem {
      display: inline-flex;
      align-items: center;
      gap: 0.65rem;
      text-decoration: none;
      color: #ffffff;
      font-weight: 800;
      font-size: 1.2rem;
      letter-spacing: -0.02em;
    }

    .brand-icon-box {
      width: 34px;
      height: 34px;
      border-radius: 9px;
      background: var(--pink-neon);
      color: var(--noir-950);
      display: grid;
      place-items: center;
      font-size: 1rem;
    }

    .author-signature-pill {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.36rem 0.9rem;
      border-radius: 999px;
      background: rgba(255, 77, 148, 0.12);
      border: 1px solid rgba(255, 77, 148, 0.35);
      color: #ffc2dc;
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 0.01em;
    }

    .author-signature-pill strong {
      color: #ffffff;
    }

    .hero-nav-links {
      display: flex;
      align-items: center;
      gap: 1.75rem;
    }

    .hero-nav-links a {
      color: rgba(255, 255, 255, 0.72);
      text-decoration: none;
      font-size: 0.86rem;
      font-weight: 500;
      transition: color 0.15s ease;
    }

    .hero-nav-links a:hover {
      color: var(--pink-neon);
    }

    /* Two-Column Asymmetric Hero Header (Exact Reference Structure) */
    .hero-split {
      display: grid;
      grid-template-columns: 1.05fr 0.95fr;
      align-items: end;
      gap: 2.5rem;
      padding-top: 4rem;
      padding-bottom: 1.5rem;
    }

    .hero-eyebrow {
      font-size: 0.74rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: rgba(255, 255, 255, 0.58);
      margin-bottom: 0.65rem;
    }

    .hero-giant-word {
      font-size: clamp(4rem, 8.2vw, 6.8rem);
      font-weight: 800;
      line-height: 0.94;
      letter-spacing: -0.045em;
      color: var(--pink-neon);
      margin: 0;
    }

    .hero-right-headline {
      font-size: clamp(2rem, 3.6vw, 3rem);
      font-weight: 700;
      line-height: 1.12;
      letter-spacing: -0.03em;
      color: #ffffff;
      margin: 0 0 1.1rem;
    }

    .hero-right-headline .serif-italic {
      display: block;
      font-size: clamp(2.15rem, 3.8vw, 3.2rem);
      color: #ffe4ef;
      font-weight: 500;
    }

    .hero-lead {
      font-size: 0.98rem;
      line-height: 1.65;
      color: rgba(255, 255, 255, 0.72);
      max-width: 490px;
      margin-bottom: 1.75rem;
    }

    .hero-cta-group {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 1.35rem;
    }

    .btn-neon-pill {
      background: var(--pink-neon);
      border: 0;
      color: var(--noir-950);
      font-weight: 700;
      font-size: 0.9rem;
      padding: 0.78rem 1.65rem;
      border-radius: 999px;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
      box-shadow: 0 8px 24px rgba(255, 77, 148, 0.32);
      transition: all 0.15s ease;
    }

    .btn-neon-pill:hover {
      background: var(--pink-neon-hover);
      color: #ffffff;
      transform: translateY(-1px);
    }

    .hero-underline-link {
      color: #ffffff;
      font-size: 0.9rem;
      font-weight: 600;
      text-decoration: none;
      border-bottom: 1.5px solid rgba(255, 255, 255, 0.45);
      padding-bottom: 3px;
      transition: border-color 0.15s ease, color 0.15s ease;
    }

    .hero-underline-link:hover {
      color: var(--pink-neon);
      border-bottom-color: var(--pink-neon);
    }

    /* Overlapping App Showcase Window */
    .showcase-overlap-section {
      margin-top: -12.5rem;
      padding-bottom: 4.5rem;
      position: relative;
      z-index: 10;
    }

    .showcase-stage {
      position: relative;
      padding-right: 1.25rem;
      padding-bottom: 1.5rem;
    }

    .desktop-window {
      background: var(--surface-app);
      border-radius: 22px;
      border: 1px solid rgba(24, 17, 21, 0.12);
      box-shadow: 0 32px 64px -16px rgba(18, 8, 14, 0.28);
      overflow: hidden;
    }

    /* Dark App Top Header (Matches Reference Screenshot) */
    .app-dark-bar {
      background: var(--noir-900);
      color: rgba(255, 255, 255, 0.8);
      padding: 0.7rem 1.4rem;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      font-size: 0.8rem;
      border-bottom: 1px solid var(--noir-border);
    }

    .app-quick-links {
      display: flex;
      align-items: center;
      gap: 1.25rem;
    }

    .app-quick-links button {
      border: 0;
      background: transparent;
      color: rgba(255, 255, 255, 0.7);
      font-size: 0.78rem;
      font-weight: 500;
      padding: 0;
      transition: color 0.15s ease;
    }

    .app-quick-links button:hover,
    .app-quick-links button.active {
      color: var(--pink-neon);
    }

    /* Desktop App Body: Dark Sidebar + Light Workspace */
    .app-body-grid {
      display: grid;
      grid-template-columns: 225px 1fr;
      min-height: 580px;
    }

    .app-dark-sidebar {
      background: var(--noir-900);
      padding: 1.25rem 0.85rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      color: #ffffff;
    }

    .sidebar-brand-row {
      display: flex;
      align-items: center;
      gap: 0.55rem;
      padding: 0.25rem 0.65rem 1.25rem;
      font-weight: 700;
      font-size: 1rem;
      color: #ffffff;
    }

    .sidebar-menu-list {
      display: flex;
      flex-direction: column;
      gap: 0.3rem;
    }

    .sidebar-item-btn {
      width: 100%;
      border: 0;
      background: transparent;
      color: rgba(255, 255, 255, 0.74);
      font-size: 0.85rem;
      font-weight: 600;
      padding: 0.62rem 0.85rem;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      text-align: left;
      transition: all 0.15s ease;
    }

    .sidebar-item-btn:hover {
      background: rgba(255, 255, 255, 0.07);
      color: #ffffff;
    }

    /* Bright Neon Pink Active Pill (Mirrors Lime Pill in Reference) */
    .sidebar-item-btn.active {
      background: var(--pink-neon);
      color: var(--noir-950);
      font-weight: 700;
    }

    .sidebar-item-left {
      display: flex;
      align-items: center;
      gap: 0.6rem;
    }

    .sidebar-count {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.72rem;
      padding: 0.08rem 0.45rem;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.12);
      color: #ffffff;
    }

    .sidebar-item-btn.active .sidebar-count {
      background: rgba(18, 8, 14, 0.16);
      color: var(--noir-950);
    }

    .sidebar-creator-card {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      padding: 0.8rem;
      font-size: 0.75rem;
      color: rgba(255, 255, 255, 0.72);
    }

    /* Light Workspace Canvas inside Window */
    .app-light-canvas {
      padding: 1.5rem 1.75rem 2.25rem;
      min-width: 0;
    }

    .canvas-top-tools {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 0.75rem;
      margin-bottom: 1.35rem;
    }

    .canvas-search {
      position: relative;
      width: 270px;
      max-width: 100%;
    }

    .canvas-search i {
      position: absolute;
      left: 0.85rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--ink-400);
      font-size: 0.82rem;
    }

    .canvas-search input {
      width: 100%;
      height: 36px;
      padding: 0 0.85rem 0 2.2rem;
      border-radius: 9px;
      border: 1px solid var(--border-app);
      background: #ffffff;
      font-size: 0.83rem;
      outline: none;
    }

    .canvas-search input:focus {
      border-color: var(--pink-neon);
      box-shadow: 0 0 0 3px rgba(255, 77, 148, 0.14);
    }

    .assistant-status-pill {
      display: inline-flex;
      align-items: center;
      gap: 0.45rem;
      background: var(--pink-tint);
      border: 1px solid #f9c6dc;
      color: var(--pink-deep);
      font-size: 0.78rem;
      font-weight: 600;
      padding: 0.36rem 0.8rem;
      border-radius: 9px;
    }

    .assistant-dot {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: var(--pink-neon);
    }

    .module-title-row {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      margin-bottom: 1.15rem;
    }

    .module-h2 {
      font-size: 1.55rem;
      font-weight: 800;
      letter-spacing: -0.03em;
      margin: 0;
    }

    .module-sub {
      font-size: 0.85rem;
      color: var(--ink-600);
      margin: 0.15rem 0 0;
    }

    .btn-app-pink {
      background: var(--pink-neon);
      border: 0;
      color: var(--noir-950);
      font-weight: 700;
      font-size: 0.84rem;
      padding: 0.54rem 1.05rem;
      border-radius: 9px;
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      transition: all 0.15s ease;
    }

    .btn-app-pink:hover {
      background: var(--pink-neon-hover);
      color: #ffffff;
    }

    .btn-app-white {
      background: #ffffff;
      border: 1px solid var(--border-app);
      color: var(--ink-900);
      font-weight: 600;
      font-size: 0.84rem;
      padding: 0.54rem 1rem;
      border-radius: 9px;
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      transition: all 0.15s ease;
    }

    .btn-app-white:hover {
      border-color: #d5c7ce;
      background: #fdfbfc;
    }

    /* Filter Chips Strip */
    .filter-pills-row {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 0.5rem;
      margin-bottom: 1rem;
    }

    .metric-chip {
      background: #ffffff;
      border: 1px solid var(--border-app);
      border-radius: 8px;
      padding: 0.3rem 0.72rem;
      font-size: 0.78rem;
      font-weight: 600;
      color: var(--ink-600);
    }

    .metric-chip.highlight {
      background: var(--pink-soft);
      border-color: #f9b8d4;
      color: var(--pink-deep);
    }

    /* White Data Surface inside App */
    .white-box {
      background: #ffffff;
      border: 1px solid var(--border-app);
      border-radius: 14px;
      overflow: hidden;
    }

    .white-box-bar {
      padding: 0.85rem 1.15rem;
      border-bottom: 1px solid var(--border-app);
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 0.65rem;
    }

    .form-control, .form-select {
      border-color: var(--border-app);
      border-radius: 8px;
      font-size: 0.84rem;
    }

    .form-control:focus, .form-select:focus {
      border-color: var(--pink-neon);
      box-shadow: 0 0 0 3px rgba(255, 77, 148, 0.14);
    }

    .table {
      margin-bottom: 0;
      font-size: 0.85rem;
    }

    .table thead th {
      background: #fcfafb;
      color: var(--ink-400);
      font-size: 0.7rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      padding: 0.75rem 1.15rem;
      border-bottom: 1px solid var(--border-app);
      white-space: nowrap;
    }

    .table tbody td {
      padding: 0.88rem 1.15rem;
      border-bottom: 1px solid var(--border-app);
      vertical-align: middle;
    }

    .table tbody tr:last-child td {
      border-bottom: none;
    }

    .table-hover tbody tr:hover {
      background-color: #fff9fc;
    }

    /* Status & Category Tags */
    .tag-pill {
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
      padding: 0.2rem 0.62rem;
      border-radius: 999px;
      font-size: 0.74rem;
      font-weight: 600;
      white-space: nowrap;
    }

    .tag-pill::before {
      content: "";
      width: 6px;
      height: 6px;
      border-radius: 50%;
    }

    .tag-ok {
      background: #ecfdf5;
      color: #047857;
    }
    .tag-ok::before { background: #10b981; }

    .tag-off {
      background: #f3f0f2;
      color: #6b5b63;
    }
    .tag-off::before { background: #9c8c94; }

    .tag-alert {
      background: var(--pink-soft);
      color: var(--pink-deep);
    }
    .tag-alert::before { background: var(--pink-neon); }

    .cat-label {
      display: inline-block;
      padding: 0.18rem 0.58rem;
      border-radius: 6px;
      font-size: 0.74rem;
      font-weight: 600;
      background: var(--pink-tint);
      color: var(--pink-deep);
      border: 1px solid #f9d0e2;
    }

    .mini-btn {
      border: 1px solid var(--border-app);
      background: #ffffff;
      color: var(--ink-900);
      font-size: 0.76rem;
      font-weight: 600;
      padding: 0.26rem 0.6rem;
      border-radius: 6px;
      transition: all 0.15s ease;
    }

    .mini-btn:hover {
      border-color: var(--pink-neon);
      background: var(--pink-tint);
      color: var(--pink-deep);
    }

    .icon-del-btn {
      width: 28px;
      height: 28px;
      border-radius: 6px;
      border: 0;
      background: transparent;
      color: var(--ink-400);
      display: inline-grid;
      place-items: center;
    }

    .icon-del-btn:hover {
      background: #fef2f2;
      color: #dc2626;
    }

    .stock-bar {
      width: 80px;
      height: 5px;
      background: #f1eaee;
      border-radius: 999px;
      overflow: hidden;
      margin-top: 4px;
    }

    .stock-bar-fill {
      height: 100%;
      border-radius: 999px;
      transition: width 0.25s ease;
    }

    /* Overlapping Mobile Mockup (Signature Reference Detail) */
    .floating-phone-mockup {
      position: absolute;
      right: 0;
      bottom: -1.25rem;
      width: 268px;
      background: #140b10;
      border-radius: 36px;
      padding: 10px;
      box-shadow: 0 28px 56px rgba(18, 8, 14, 0.36);
      border: 2px solid #38212e;
      z-index: 20;
    }

    .phone-screen {
      background: #fbf9fa;
      border-radius: 27px;
      overflow: hidden;
    }

    .phone-status-bar {
      background: #ffffff;
      padding: 0.45rem 1rem 0.25rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.68rem;
      font-weight: 700;
      color: var(--ink-900);
    }

    .phone-notch {
      width: 68px;
      height: 16px;
      background: #140b10;
      border-radius: 999px;
    }

    .phone-dark-header {
      background: var(--noir-900);
      color: #ffffff;
      padding: 0.65rem 0.9rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-size: 0.78rem;
      font-weight: 700;
    }

    .phone-menu-tag {
      background: rgba(255, 255, 255, 0.14);
      padding: 0.2rem 0.55rem;
      border-radius: 6px;
      font-size: 0.68rem;
      font-weight: 600;
    }

    .phone-body {
      padding: 0.85rem;
    }

    .phone-card-item {
      background: #ffffff;
      border: 1px solid var(--border-app);
      border-radius: 11px;
      padding: 0.6rem 0.72rem;
      margin-bottom: 0.5rem;
      font-size: 0.73rem;
    }

    /* Footer with Author Credit */
    .editorial-footer {
      background: var(--noir-950);
      color: rgba(255, 255, 255, 0.72);
      padding: 2.5rem 0;
      border-top: 1px solid var(--noir-border);
    }

    /* Modals */
    .modal-content {
      border: 1px solid var(--border-app);
      border-radius: 16px;
      box-shadow: 0 24px 48px rgba(18, 8, 14, 0.2);
    }

    .modal-header {
      border-bottom: 1px solid var(--border-app);
      padding: 1.15rem 1.45rem;
    }

    .modal-body {
      padding: 1.45rem;
    }

    .modal-footer {
      border-top: 1px solid var(--border-app);
      background: #fcfafb;
      padding: 0.95rem 1.45rem;
      border-bottom-left-radius: 16px;
      border-bottom-right-radius: 16px;
    }

    .form-label {
      font-size: 0.8rem;
      font-weight: 600;
      color: var(--ink-600);
      margin-bottom: 0.35rem;
    }

    .readonly-field {
      background-color: #f3eef1 !important;
      color: var(--ink-600) !important;
      font-family: 'JetBrains Mono', monospace;
    }

    .form-check-input:checked {
      background-color: var(--pink-neon);
      border-color: var(--pink-neon);
    }

    @media (max-width: 1100px) {
      .floating-phone-mockup {
        display: none;
      }
      .showcase-stage {
        padding-right: 0;
      }
    }

    @media (max-width: 860px) {
      .hero-split {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        padding-top: 2.5rem;
      }
      .app-body-grid {
        grid-template-columns: 1fr;
      }
      .app-dark-sidebar {
        border-bottom: 1px solid var(--noir-border);
      }
      .sidebar-menu-list {
        flex-direction: row;
        flex-wrap: wrap;
      }
      .sidebar-item-btn {
        width: auto;
      }
      .hero-nav-links {
        display: none;
      }
    }
  </style>
</head>
<body>

  <!-- Dark High-Contrast Editorial Hero (Reference Layout) -->
  <div class="hero-dark-zone">
    <div class="page-wrap">
      <!-- Top Header -->
      <header class="top-editorial-nav">
        <a href="#" class="brand-emblem" onclick="return false;">
          <span class="brand-icon-box"><i class="bi bi-box-seam-fill"></i></span>
          <span>Kora Gestão</span>
        </a>

        <nav class="hero-nav-links">
          <a href="#sistema">Painel ao vivo</a>
          <a href="#sistema" onclick="switchTab('produtos')">Catálogo</a>
          <a href="#sistema" onclick="switchTab('estoque')">Controle de estoque</a>
        </nav>

        <div class="author-signature-pill">
          <i class="bi bi-stars" style="color: var(--pink-neon);"></i>
          <span>Projeto desenvolvido por <strong>Anelise Lemes</strong></span>
        </div>
      </header>

      <!-- Two-Column Asymmetric Hero Header -->
      <div class="hero-split">
        <div>
          <div class="hero-eyebrow">SUA OPERAÇÃO, NO MESMO LUGAR</div>
          <h1 class="hero-giant-word">Gestão</h1>
        </div>

        <div>
          <h2 class="hero-right-headline">
            Menos Dispersão
            <span class="serif-italic">Mais Clareza na Loja</span>
          </h2>
          <p class="hero-lead">
            Cadastre categorias, fornecedores e produtos, acompanhe saldos físicos em tempo real e receba alertas imediatos antes que qualquer item entre em ruptura.
          </p>
          <div class="hero-cta-group">
            <a href="#sistema" class="btn-neon-pill">
              Explorar o sistema <i class="bi bi-arrow-down-right"></i>
            </a>
            <a href="#sistema" class="hero-underline-link" data-bs-toggle="modal" data-bs-target="#movimentacaoDialog" data-prod-id="2" data-mov-type="1">
              Registrar movimentação
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Overlapping Desktop + Mobile App Showcase -->
  <section class="showcase-overlap-section" id="sistema">
    <div class="page-wrap">
      <div class="showcase-stage">

        <!-- Desktop App Window -->
        <div class="desktop-window">
          <!-- Dark Top Strip inside Mockup -->
          <div class="app-dark-bar">
            <div class="d-flex align-items-center gap-2">
              <span class="fw-bold text-white">Kora</span>
              <span style="opacity: 0.35;">·</span>
              <span style="color: #ffb8d6;">Desenvolvido por Anelise Lemes</span>
            </div>
            <div class="app-quick-links">
              <button class="active" data-quick-tab="categorias" onclick="switchTab('categorias')">Categorias</button>
              <button data-quick-tab="fornecedores" onclick="switchTab('fornecedores')">Fornecedores</button>
              <button data-quick-tab="produtos" onclick="switchTab('produtos')">Produtos</button>
              <button data-quick-tab="estoque" onclick="switchTab('estoque')">Estoque</button>
            </div>
          </div>

          <!-- App Grid: Dark Sidebar + Light Content -->
          <div class="app-body-grid">
            <!-- Dark Sidebar -->
            <aside class="app-dark-sidebar">
              <div>
                <div class="sidebar-brand-row">
                  <i class="bi bi-grid-1x2-fill" style="color: var(--pink-neon);"></i>
                  <span>Operação</span>
                </div>

                <div class="sidebar-menu-list">
                  <button class="sidebar-item-btn active" data-tab="categorias" onclick="switchTab('categorias')">
                    <span class="sidebar-item-left"><i class="bi bi-tag"></i> Categorias</span>
                    <span class="sidebar-count" id="sideCountCat">4</span>
                  </button>
                  <button class="sidebar-item-btn" data-tab="fornecedores" onclick="switchTab('fornecedores')">
                    <span class="sidebar-item-left"><i class="bi bi-building"></i> Fornecedores</span>
                    <span class="sidebar-count" id="sideCountForn">3</span>
                  </button>
                  <button class="sidebar-item-btn" data-tab="produtos" onclick="switchTab('produtos')">
                    <span class="sidebar-item-left"><i class="bi bi-box-seam"></i> Produtos</span>
                    <span class="sidebar-count" id="sideCountProd">3</span>
                  </button>
                  <button class="sidebar-item-btn" data-tab="estoque" onclick="switchTab('estoque')">
                    <span class="sidebar-item-left"><i class="bi bi-arrow-left-right"></i> Estoque</span>
                    <span class="sidebar-count" id="sideCountEst">3</span>
                  </button>
                </div>
              </div>

              <div class="sidebar-creator-card mt-3">
                <div class="fw-bold text-white mb-1">Anelise Lemes</div>
                <div>Autora & Desenvolvedora do Sistema de Controle de Estoque.</div>
              </div>
            </aside>

            <!-- Light Content Area -->
            <div class="app-light-canvas">
              <!-- Top Search & Live Status -->
              <div class="canvas-top-tools">
                <div class="canvas-search">
                  <i class="bi bi-search"></i>
                  <input type="text" id="globalAppSearch" placeholder="Buscar na loja...">
                </div>

                <div class="d-flex flex-wrap align-items-center gap-2">
                  <div class="assistant-status-pill" id="liveAlertPill">
                    <span class="assistant-dot"></span>
                    <span id="liveAlertText">1 item abaixo do mínimo</span>
                  </div>
                </div>
              </div>

              <!-- Global Summary Chips -->
              <div class="filter-pills-row">
                <span class="metric-chip highlight">Valor em estoque: <strong class="mono" id="chipMoney">R$ 14.010,00</strong></span>
                <span class="metric-chip">Saldo físico: <strong class="mono" id="chipUnits">64 un.</strong></span>
                <span class="metric-chip">Catálogo: <strong class="mono" id="chipSkus">3 itens</strong></span>
              </div>

              <!-- VIEW 1: CATEGORIAS -->
              <div class="app-view" id="view-categorias">
                <div class="module-title-row">
                  <div>
                    <h3 class="module-h2">Categorias</h3>
                    <p class="module-sub">Organize os grupos de produtos do seu catálogo.</p>
                  </div>
                  <button class="btn-app-pink" data-bs-toggle="modal" data-bs-target="#categoriaDialog" data-mode="create">
                    <i class="bi bi-plus-lg"></i> Nova Categoria
                  </button>
                </div>

                <div class="white-box">
                  <div class="white-box-bar">
                    <div class="d-flex flex-wrap gap-2 flex-grow-1">
                      <input type="text" class="form-control tbl-search" data-table="tableCategorias" placeholder="Filtrar por nome ou descrição..." style="max-width: 260px;">
                      <select class="form-select tbl-status" data-table="tableCategorias" style="max-width: 155px;">
                        <option value="">Status: Todos</option>
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                      </select>
                    </div>
                    <span class="mono small text-secondary" id="rowsCatLabel">4 registro(s)</span>
                  </div>

                  <div class="table-responsive">
                    <table class="table table-hover" id="tableCategorias">
                      <thead>
                        <tr>
                          <th style="width: 65px;">Id</th>
                          <th>Nome</th>
                          <th>Descrição</th>
                          <th style="width: 110px;">Status</th>
                          <th class="text-end" style="width: 120px;">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-id="1" data-nome="Periféricos" data-desc="Teclados, mouses, headsets e webcams" data-ativo="true" data-status="Ativo">
                          <td class="mono text-secondary">#1</td>
                          <td class="fw-semibold">Periféricos</td>
                          <td class="text-secondary">Teclados, mouses, headsets e webcams</td>
                          <td><span class="tag-pill tag-ok">Ativo</span></td>
                          <td class="text-end text-nowrap">
                            <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#categoriaDialog" data-mode="edit">Editar</button>
                            <button class="icon-del-btn" title="Excluir" onclick="removeRow(this)"><i class="bi bi-trash3"></i></button>
                          </td>
                        </tr>
                        <tr data-id="2" data-nome="Monitores" data-desc="Monitores LED, IPS e Ultrawide" data-ativo="true" data-status="Ativo">
                          <td class="mono text-secondary">#2</td>
                          <td class="fw-semibold">Monitores</td>
                          <td class="text-secondary">Monitores LED, IPS e Ultrawide</td>
                          <td><span class="tag-pill tag-ok">Ativo</span></td>
                          <td class="text-end text-nowrap">
                            <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#categoriaDialog" data-mode="edit">Editar</button>
                            <button class="icon-del-btn" title="Excluir" onclick="removeRow(this)"><i class="bi bi-trash3"></i></button>
                          </td>
                        </tr>
                        <tr data-id="3" data-nome="Cabos e Adaptadores" data-desc="HDMI, DisplayPort, USB-C e hubs" data-ativo="true" data-status="Ativo">
                          <td class="mono text-secondary">#3</td>
                          <td class="fw-semibold">Cabos e Adaptadores</td>
                          <td class="text-secondary">HDMI, DisplayPort, USB-C e hubs</td>
                          <td><span class="tag-pill tag-ok">Ativo</span></td>
                          <td class="text-end text-nowrap">
                            <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#categoriaDialog" data-mode="edit">Editar</button>
                            <button class="icon-del-btn" title="Excluir" onclick="removeRow(this)"><i class="bi bi-trash3"></i></button>
                          </td>
                        </tr>
                        <tr data-id="4" data-nome="Hardware Legado" data-desc="Componentes descontinuados" data-ativo="false" data-status="Inativo">
                          <td class="mono text-secondary">#4</td>
                          <td class="fw-semibold">Hardware Legado</td>
                          <td class="text-secondary">Componentes descontinuados</td>
                          <td><span class="tag-pill tag-off">Inativo</span></td>
                          <td class="text-end text-nowrap">
                            <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#categoriaDialog" data-mode="edit">Editar</button>
                            <button class="icon-del-btn" title="Excluir" onclick="removeRow(this)"><i class="bi bi-trash3"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- VIEW 2: FORNECEDORES -->
              <div class="app-view d-none" id="view-fornecedores">
                <div class="module-title-row">
                  <div>
                    <h3 class="module-h2">Fornecedores</h3>
                    <p class="module-sub">Empresas distribuidoras vinculadas aos produtos.</p>
                  </div>
                  <button class="btn-app-pink" data-bs-toggle="modal" data-bs-target="#fornecedorDialog" data-mode="create">
                    <i class="bi bi-plus-lg"></i> Novo Fornecedor
                  </button>
                </div>

                <div class="white-box">
                  <div class="white-box-bar">
                    <div class="d-flex flex-wrap gap-2 flex-grow-1">
                      <input type="text" class="form-control tbl-search" data-table="tableFornecedores" placeholder="Buscar por Razão Social ou CNPJ..." style="max-width: 260px;">
                      <select class="form-select tbl-status" data-table="tableFornecedores" style="max-width: 155px;">
                        <option value="">Status: Todos</option>
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                      </select>
                    </div>
                    <span class="mono small text-secondary" id="rowsFornLabel">3 registro(s)</span>
                  </div>

                  <div class="table-responsive">
                    <table class="table table-hover" id="tableFornecedores">
                      <thead>
                        <tr>
                          <th style="width: 65px;">Id</th>
                          <th>Razão Social</th>
                          <th>CNPJ</th>
                          <th>Contato</th>
                          <th style="width: 110px;">Status</th>
                          <th class="text-end" style="width: 120px;">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-id="1" data-razao="TechBrasil Distribuidora Ltda" data-cnpj="12.345.678/0001-90" data-email="vendas@techbrasil.com.br" data-tel="(61) 3344-5566" data-ativo="true" data-status="Ativo">
                          <td class="mono text-secondary">#1</td>
                          <td class="fw-semibold">TechBrasil Distribuidora Ltda</td>
                          <td class="mono small">12.345.678/0001-90</td>
                          <td>
                            <div class="small">vendas@techbrasil.com.br</div>
                            <div class="mono text-secondary" style="font-size: 0.74rem;">(61) 3344-5566</div>
                          </td>
                          <td><span class="tag-pill tag-ok">Ativo</span></td>
                          <td class="text-end text-nowrap">
                            <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#fornecedorDialog" data-mode="edit">Editar</button>
                            <button class="icon-del-btn" title="Excluir" onclick="removeRow(this)"><i class="bi bi-trash3"></i></button>
                          </td>
                        </tr>
                        <tr data-id="2" data-razao="InfoSul Suprimentos S.A." data-cnpj="98.765.432/0001-10" data-email="comercial@infosul.com.br" data-tel="(11) 98877-6655" data-ativo="true" data-status="Ativo">
                          <td class="mono text-secondary">#2</td>
                          <td class="fw-semibold">InfoSul Suprimentos S.A.</td>
                          <td class="mono small">98.765.432/0001-10</td>
                          <td>
                            <div class="small">comercial@infosul.com.br</div>
                            <div class="mono text-secondary" style="font-size: 0.74rem;">(11) 98877-6655</div>
                          </td>
                          <td><span class="tag-pill tag-ok">Ativo</span></td>
                          <td class="text-end text-nowrap">
                            <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#fornecedorDialog" data-mode="edit">Editar</button>
                            <button class="icon-del-btn" title="Excluir" onclick="removeRow(this)"><i class="bi bi-trash3"></i></button>
                          </td>
                        </tr>
                        <tr data-id="3" data-razao="ConectaCabos Importação" data-cnpj="45.111.222/0001-33" data-email="" data-tel="(21) 3221-0099" data-ativo="false" data-status="Inativo">
                          <td class="mono text-secondary">#3</td>
                          <td class="fw-semibold">ConectaCabos Importação</td>
                          <td class="mono small">45.111.222/0001-33</td>
                          <td>
                            <div class="small text-muted fst-italic">E-mail não informado</div>
                            <div class="mono text-secondary" style="font-size: 0.74rem;">(21) 3221-0099</div>
                          </td>
                          <td><span class="tag-pill tag-off">Inativo</span></td>
                          <td class="text-end text-nowrap">
                            <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#fornecedorDialog" data-mode="edit">Editar</button>
                            <button class="icon-del-btn" title="Excluir" onclick="removeRow(this)"><i class="bi bi-trash3"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- VIEW 3: PRODUTOS -->
              <div class="app-view d-none" id="view-produtos">
                <div class="module-title-row">
                  <div>
                    <h3 class="module-h2">Produtos</h3>
                    <p class="module-sub">Cadastre, edite e organize o catálogo da loja.</p>
                  </div>
                  <button class="btn-app-pink" data-bs-toggle="modal" data-bs-target="#produtoDialog" data-mode="create">
                    <i class="bi bi-plus-lg"></i> Novo Produto
                  </button>
                </div>

                <div class="white-box">
                  <div class="white-box-bar">
                    <div class="d-flex flex-wrap gap-2 flex-grow-1">
                      <input type="text" class="form-control tbl-search" data-table="tableProdutos" placeholder="Nome ou código de barras..." style="max-width: 260px;">
                      <select class="form-select tbl-category" data-table="tableProdutos" style="max-width: 195px;">
                        <option value="">Categoria: Todas</option>
                        <option value="Periféricos">Periféricos</option>
                        <option value="Monitores">Monitores</option>
                        <option value="Cabos e Adaptadores">Cabos e Adaptadores</option>
                      </select>
                    </div>
                    <span class="mono small text-secondary" id="rowsProdLabel">3 registro(s)</span>
                  </div>

                  <div class="table-responsive">
                    <table class="table table-hover" id="tableProdutos">
                      <thead>
                        <tr>
                          <th style="width: 65px;">Id</th>
                          <th>Produto</th>
                          <th>Categoria</th>
                          <th>Fornecedor</th>
                          <th class="text-end">Preço Unit.</th>
                          <th>Status</th>
                          <th class="text-end" style="width: 120px;">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-id="1" data-nome="Teclado Mecânico RGB Switch Brown" data-ean="7898541200112" data-cat-id="1" data-cat-name="Periféricos" data-forn-id="1" data-forn-name="TechBrasil Distribuidora Ltda" data-preco="349.90" data-cadastro="10/11/2026 09:30" data-ativo="true">
                          <td class="mono text-secondary">#1</td>
                          <td>
                            <div class="fw-semibold">Teclado Mecânico RGB Switch Brown</div>
                            <div class="mono text-muted" style="font-size: 0.73rem;">EAN: 7898541200112</div>
                          </td>
                          <td><span class="cat-label">Periféricos</span></td>
                          <td class="text-secondary small">TechBrasil Distribuidora Ltda</td>
                          <td class="text-end mono fw-semibold text-nowrap">R$ 349,90</td>
                          <td><span class="tag-pill tag-ok">Ativo</span></td>
                          <td class="text-end text-nowrap">
                            <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#produtoDialog" data-mode="edit">Editar</button>
                            <button class="icon-del-btn" title="Excluir" onclick="removeRow(this)"><i class="bi bi-trash3"></i></button>
                          </td>
                        </tr>
                        <tr data-id="2" data-nome="Monitor 27'' IPS 144Hz Full HD" data-ean="7898541200457" data-cat-id="2" data-cat-name="Monitores" data-forn-id="2" data-forn-name="InfoSul Suprimentos S.A." data-preco="1299.00" data-cadastro="11/11/2026 14:15" data-ativo="true">
                          <td class="mono text-secondary">#2</td>
                          <td>
                            <div class="fw-semibold">Monitor 27'' IPS 144Hz Full HD</div>
                            <div class="mono text-muted" style="font-size: 0.73rem;">EAN: 7898541200457</div>
                          </td>
                          <td><span class="cat-label">Monitores</span></td>
                          <td class="text-secondary small">InfoSul Suprimentos S.A.</td>
                          <td class="text-end mono fw-semibold text-nowrap">R$ 1.299,00</td>
                          <td><span class="tag-pill tag-ok">Ativo</span></td>
                          <td class="text-end text-nowrap">
                            <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#produtoDialog" data-mode="edit">Editar</button>
                            <button class="icon-del-btn" title="Excluir" onclick="removeRow(this)"><i class="bi bi-trash3"></i></button>
                          </td>
                        </tr>
                        <tr data-id="3" data-nome="Cabo HDMI 2.1 Ultra High Speed 2m" data-ean="" data-cat-id="3" data-cat-name="Cabos e Adaptadores" data-forn-id="1" data-forn-name="TechBrasil Distribuidora Ltda" data-preco="59.90" data-cadastro="12/11/2026 16:40" data-ativo="true">
                          <td class="mono text-secondary">#3</td>
                          <td>
                            <div class="fw-semibold">Cabo HDMI 2.1 Ultra High Speed 2m</div>
                            <div class="text-muted fst-italic" style="font-size: 0.73rem;">Sem EAN</div>
                          </td>
                          <td><span class="cat-label">Cabos e Adaptadores</span></td>
                          <td class="text-secondary small">TechBrasil Distribuidora Ltda</td>
                          <td class="text-end mono fw-semibold text-nowrap">R$ 59,90</td>
                          <td><span class="tag-pill tag-ok">Ativo</span></td>
                          <td class="text-end text-nowrap">
                            <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#produtoDialog" data-mode="edit">Editar</button>
                            <button class="icon-del-btn" title="Excluir" onclick="removeRow(this)"><i class="bi bi-trash3"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- VIEW 4: ESTOQUE E MOVIMENTAÇÕES -->
              <div class="app-view d-none" id="view-estoque">
                <div class="module-title-row">
                  <div>
                    <h3 class="module-h2">Controle de Estoque</h3>
                    <p class="module-sub">Saldos físicos por localização e histórico de entradas e saídas.</p>
                  </div>
                  <div class="d-flex flex-wrap gap-2">
                    <button class="btn-app-white" data-bs-toggle="modal" data-bs-target="#estoqueDialog" data-stock-id="2">
                      <i class="bi bi-sliders"></i> Parâmetros
                    </button>
                    <button class="btn-app-pink" data-bs-toggle="modal" data-bs-target="#movimentacaoDialog" data-prod-id="2" data-mov-type="1">
                      <i class="bi bi-arrow-left-right"></i> Nova Movimentação
                    </button>
                  </div>
                </div>

                <div class="white-box mb-3">
                  <div class="table-responsive">
                    <table class="table table-hover" id="tableEstoque">
                      <thead>
                        <tr>
                          <th>Produto</th>
                          <th>Localização</th>
                          <th class="text-end">Qtd.</th>
                          <th>Mín / Máx</th>
                          <th>Situação</th>
                          <th class="text-end">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr data-id="1" data-prod-id="1" data-prod-name="Teclado Mecânico RGB Switch Brown" data-price="349.90" data-qty="18" data-min="10" data-max="50" data-loc="Corredor A - Prat. 02">
                          <td class="fw-semibold">Teclado Mecânico RGB Switch Brown</td>
                          <td class="text-secondary small">Corredor A - Prat. 02</td>
                          <td class="text-end mono fw-bold td-qty">18</td>
                          <td>
                            <div class="mono small text-secondary td-minmax">10 / 50</div>
                            <div class="stock-bar"><div class="stock-bar-fill td-bar" style="width: 36%; background: #10b981;"></div></div>
                          </td>
                          <td class="td-status"><span class="tag-pill tag-ok">Normal</span></td>
                          <td class="text-end text-nowrap">
                            <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#movimentacaoDialog" data-prod-id="1" data-mov-type="1">+ Entrada</button>
                            <button class="mini-btn" data-bs-toggle="modal" data-bs-target="#movimentacaoDialog" data-prod-id="1" data-mov-type="2">- Saída</button>
                          </td>
                        </tr>
                        <tr data-id="2" data-prod-id="2" data-prod-name="Monitor 27'' IPS 144Hz Full HD" data-price="1299.00" data-qty="4" data-min="5" data-max="20" data-loc="Corredor C - Pallet 01">
                          <td class="fw-semibold">Monitor 27'' IPS 144Hz Full HD</td>
                          <td class="text-secondary small">Corredor C - Pallet 01</td>
                          <td class="text-end mono fw-bold td-qty" style="color: var(--pink-deep);">4</td>
                          <td>
                            <div class="mono small text-secondary td-minmax">5 / 20</div>
                            <div class="stock-bar"><div class="stock-bar-fill td-bar" style="width: 20%; background: var(--pink-neon);"></div></div>
                          </td>
                          <td class="td-status"><span class="tag-pill tag-alert">Estoque Baixo</span></td>
                          <td class="text-end text-nowrap">
                            <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#movimentacaoDialog" data-prod-id="2" data-mov-type="1">+ Entrada</button>
                            <button class="mini-btn" data-bs-toggle="modal" data-bs-target="#movimentacaoDialog" data-prod-id="2" data-mov-type="2">- Saída</button>
                          </td>
                        </tr>
                        <tr data-id="3" data-prod-id="3" data-prod-name="Cabo HDMI 2.1 Ultra High Speed 2m" data-price="59.90" data-qty="42" data-min="15" data-max="100" data-loc="Gaveteiro 03">
                          <td class="fw-semibold">Cabo HDMI 2.1 Ultra High Speed 2m</td>
                          <td class="text-secondary small">Gaveteiro 03</td>
                          <td class="text-end mono fw-bold td-qty">42</td>
                          <td>
                            <div class="mono small text-secondary td-minmax">15 / 100</div>
                            <div class="stock-bar"><div class="stock-bar-fill td-bar" style="width: 42%; background: #10b981;"></div></div>
                          </td>
                          <td class="td-status"><span class="tag-pill tag-ok">Normal</span></td>
                          <td class="text-end text-nowrap">
                            <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#movimentacaoDialog" data-prod-id="3" data-mov-type="1">+ Entrada</button>
                            <button class="mini-btn" data-bs-toggle="modal" data-bs-target="#movimentacaoDialog" data-prod-id="3" data-mov-type="2">- Saída</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <!-- Histórico de Movimentações -->
                <div class="white-box">
                  <div class="white-box-bar">
                    <span class="fw-bold small">Histórico de Movimentações</span>
                    <span class="small text-secondary">Entradas e saídas recentes</span>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover" id="tableMovimentacoes">
                      <thead>
                        <tr>
                          <th>Data/Hora</th>
                          <th>Produto</th>
                          <th>Tipo</th>
                          <th class="text-end">Qtd.</th>
                          <th class="text-end">Saldo Final</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="mono small text-secondary text-nowrap">11/11/2026 14:30</td>
                          <td>Monitor 27'' IPS 144Hz Full HD</td>
                          <td><span class="tag-pill tag-ok">Entrada</span></td>
                          <td class="text-end mono fw-semibold text-success">+4</td>
                          <td class="text-end mono fw-bold">4</td>
                        </tr>
                        <tr>
                          <td class="mono small text-secondary text-nowrap">13/11/2026 15:20</td>
                          <td>Teclado Mecânico RGB Switch Brown</td>
                          <td><span class="tag-pill tag-alert">Saída</span></td>
                          <td class="text-end mono fw-semibold" style="color: var(--pink-deep);">-2</td>
                          <td class="text-end mono fw-bold">18</td>
                        </tr>
                        <tr>
                          <td class="mono small text-secondary text-nowrap">10/11/2026 10:00</td>
                          <td>Teclado Mecânico RGB Switch Brown</td>
                          <td><span class="tag-pill tag-ok">Entrada</span></td>
                          <td class="text-end mono fw-semibold text-success">+20</td>
                          <td class="text-end mono fw-bold">20</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Overlapping Mobile Mockup (Bottom Right - Mirrors Reference) -->
        <div class="floating-phone-mockup" aria-hidden="true">
          <div class="phone-screen">
            <div class="phone-status-bar">
              <span>9:41</span>
              <div class="phone-notch"></div>
              <span><i class="bi bi-wifi"></i> <i class="bi bi-battery-full"></i></span>
            </div>
            <div class="phone-dark-header">
              <span><i class="bi bi-box-seam-fill me-1" style="color: var(--pink-neon);"></i> Kora</span>
              <span class="phone-menu-tag">Mobile</span>
            </div>
            <div class="phone-body">
              <div class="fw-bold mb-1" style="font-size: 0.95rem;">Resumo Rápido</div>
              <div class="text-secondary mb-2" style="font-size: 0.68rem;">Sincronizado com o painel web</div>

              <div class="d-flex gap-1 mb-2">
                <span class="badge rounded-pill" style="background: var(--pink-neon); color: var(--noir-950); font-size: 0.64rem;">+ Novo item</span>
                <span class="badge rounded-pill bg-white text-dark border" style="font-size: 0.64rem;" id="phoneTotalBadge">64 un.</span>
              </div>

              <div class="phone-card-item">
                <div class="d-flex justify-content-between fw-semibold">
                  <span>Teclado RGB</span>
                  <span class="mono" id="phoneQty1">18 un.</span>
                </div>
                <div class="text-success" style="font-size: 0.65rem;">● Normal</div>
              </div>

              <div class="phone-card-item" style="border-color: #f9b8d4; background: var(--pink-tint);">
                <div class="d-flex justify-content-between fw-semibold">
                  <span>Monitor 27'' IPS</span>
                  <span class="mono" style="color: var(--pink-deep);" id="phoneQty2">4 un.</span>
                </div>
                <div style="font-size: 0.65rem; color: var(--pink-deep);" id="phoneStatus2">● Estoque Baixo</div>
              </div>

              <div class="phone-card-item mb-0">
                <div class="d-flex justify-content-between fw-semibold">
                  <span>Cabo HDMI 2.1</span>
                  <span class="mono" id="phoneQty3">42 un.</span>
                </div>
                <div class="text-success" style="font-size: 0.65rem;">● Normal</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Editorial Footer with Creator Credit -->
  <footer class="editorial-footer">
    <div class="page-wrap d-flex flex-wrap align-items-center justify-content-between gap-3">
      <div class="d-flex align-items-center gap-2">
        <span class="brand-icon-box" style="width: 28px; height: 28px; font-size: 0.85rem;"><i class="bi bi-box-seam-fill"></i></span>
        <span class="fw-bold text-white">Kora Gestão</span>
        <span style="opacity: 0.4;">·</span>
        <span>Sistema Web de Controle de Estoque</span>
      </div>
      <div class="small">
        Desenvolvido por <strong class="text-white">Anelise Lemes</strong> · 2026
      </div>
    </div>
  </footer>

  <!-- Toast -->
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="koraToast" class="toast align-items-center text-bg-dark border-0 shadow-lg" role="alert" style="border-radius: 10px;">
      <div class="d-flex">
        <div class="toast-body fw-medium" id="koraToastMsg">Salvo.</div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
      </div>
    </div>
  </div>

  <!-- MODAL: CATEGORIA -->
  <div class="modal fade" id="categoriaDialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold mb-0" id="catDialogTitle">Editar Categoria #1</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <form id="formCategoria">
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-2">
                <label class="form-label">Id</label>
                <input class="form-control readonly-field" id="catId" readonly>
              </div>
              <div class="col-md-7">
                <label class="form-label">Nome <span class="text-danger">*</span></label>
                <input class="form-control" id="catNome" required>
              </div>
              <div class="col-md-3 d-flex align-items-end">
                <div class="form-check form-switch mb-2">
                  <input class="form-check-input" type="checkbox" id="catAtivo" checked>
                  <label class="form-check-label fw-medium" for="catAtivo">Ativo</label>
                </div>
              </div>
              <div class="col-12">
                <label class="form-label">Descrição <span class="text-secondary fw-normal">(opcional)</span></label>
                <textarea class="form-control" id="catDesc" rows="3"></textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-app-white" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn-app-pink">Salvar Categoria</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- MODAL: FORNECEDOR -->
  <div class="modal fade" id="fornecedorDialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold mb-0" id="fornDialogTitle">Editar Fornecedor #1</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <form id="formFornecedor">
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-2">
                <label class="form-label">Id</label>
                <input class="form-control readonly-field" id="fornId" readonly>
              </div>
              <div class="col-md-6">
                <label class="form-label">Razão Social <span class="text-danger">*</span></label>
                <input class="form-control" id="fornRazao" required>
              </div>
              <div class="col-md-4">
                <label class="form-label">CNPJ <span class="text-danger">*</span></label>
                <input class="form-control mono" id="fornCnpj" required>
              </div>
              <div class="col-md-5">
                <label class="form-label">E-mail <span class="text-secondary fw-normal">(opcional)</span></label>
                <input type="email" class="form-control" id="fornEmail">
              </div>
              <div class="col-md-4">
                <label class="form-label">Telefone <span class="text-secondary fw-normal">(opcional)</span></label>
                <input class="form-control mono" id="fornTel">
              </div>
              <div class="col-md-3 d-flex align-items-end">
                <div class="form-check form-switch mb-2">
                  <input class="form-check-input" type="checkbox" id="fornAtivo" checked>
                  <label class="form-check-label fw-medium" for="fornAtivo">Ativo</label>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-app-white" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn-app-pink">Salvar Fornecedor</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- MODAL: PRODUTO -->
  <div class="modal fade" id="produtoDialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold mb-0" id="prodDialogTitle">Editar Produto #1</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <form id="formProduto">
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-2">
                <label class="form-label">Id</label>
                <input class="form-control readonly-field" id="prodId" readonly>
              </div>
              <div class="col-md-6">
                <label class="form-label">Nome do Produto <span class="text-danger">*</span></label>
                <input class="form-control" id="prodNome" required>
              </div>
              <div class="col-md-4">
                <label class="form-label">Código de Barras <span class="text-secondary fw-normal">(opcional)</span></label>
                <input class="form-control mono" id="prodEan">
              </div>
              <div class="col-md-6">
                <label class="form-label">Categoria <span class="text-danger">*</span></label>
                <select class="form-select" id="prodCategoria" required>
                  <option value="">Selecione...</option>
                  <option value="1" data-name="Periféricos">1 - Periféricos</option>
                  <option value="2" data-name="Monitores">2 - Monitores</option>
                  <option value="3" data-name="Cabos e Adaptadores">3 - Cabos e Adaptadores</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Fornecedor <span class="text-danger">*</span></label>
                <select class="form-select" id="prodFornecedor" required>
                  <option value="">Selecione...</option>
                  <option value="1" data-name="TechBrasil Distribuidora Ltda">1 - TechBrasil Distribuidora Ltda</option>
                  <option value="2" data-name="InfoSul Suprimentos S.A.">2 - InfoSul Suprimentos S.A.</option>
                  <option value="3" data-name="ConectaCabos Importação">3 - ConectaCabos Importação</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label">Preço Unitário <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text">R$</span>
                  <input type="number" class="form-control mono" id="prodPreco" step="0.01" min="0" required>
                </div>
              </div>
              <div class="col-md-5">
                <label class="form-label">Data Cadastro</label>
                <input class="form-control readonly-field" id="prodCadastro" readonly>
              </div>
              <div class="col-md-3 d-flex align-items-end">
                <div class="form-check form-switch mb-2">
                  <input class="form-check-input" type="checkbox" id="produtoAtivo" checked>
                  <label class="form-check-label fw-medium" for="produtoAtivo">Ativo</label>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-app-white" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn-app-pink">Salvar Produto</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- MODAL: CONFIGURAR ESTOQUE -->
  <div class="modal fade" id="estoqueDialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold mb-0" id="estDialogTitle">Configurar Estoque #2</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <form id="formEstoque">
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-2">
                <label class="form-label">Id</label>
                <input class="form-control readonly-field" id="estId" readonly>
              </div>
              <div class="col-md-10">
                <label class="form-label">Produto <span class="text-danger">*</span></label>
                <select class="form-select" id="estProd" required>
                  <option value="1">1 - Teclado Mecânico RGB Switch Brown</option>
                  <option value="2">2 - Monitor 27'' IPS 144Hz Full HD</option>
                  <option value="3">3 - Cabo HDMI 2.1 Ultra High Speed 2m</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label">Quantidade Atual <span class="text-danger">*</span></label>
                <input type="number" min="0" class="form-control mono" id="estQtd" required>
              </div>
              <div class="col-md-4">
                <label class="form-label">Estoque Mínimo <span class="text-danger">*</span></label>
                <input type="number" min="0" class="form-control mono" id="estMin" required>
              </div>
              <div class="col-md-4">
                <label class="form-label">Estoque Máximo <span class="text-danger">*</span></label>
                <input type="number" min="0" class="form-control mono" id="estMax" required>
              </div>
              <div class="col-12">
                <label class="form-label">Localização Física <span class="text-secondary fw-normal">(opcional)</span></label>
                <input class="form-control" id="estLoc">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-app-white" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn-app-pink">Salvar Configuração</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- MODAL: MOVIMENTAÇÃO -->
  <div class="modal fade" id="movimentacaoDialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold mb-0">Registrar Movimentação</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <form id="formMovimentacao">
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-7">
                <label class="form-label">Produto <span class="text-danger">*</span></label>
                <select class="form-select" id="movProduto" required>
                  <option value="1">1 - Teclado Mecânico RGB Switch Brown</option>
                  <option value="2">2 - Monitor 27'' IPS 144Hz Full HD</option>
                  <option value="3">3 - Cabo HDMI 2.1 Ultra High Speed 2m</option>
                </select>
              </div>
              <div class="col-md-5">
                <label class="form-label">Operação <span class="text-danger">*</span></label>
                <select class="form-select" id="movTipo" required>
                  <option value="1">Entrada</option>
                  <option value="2">Saída</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label">Quantidade <span class="text-danger">*</span></label>
                <input type="number" class="form-control mono" id="movQtd" min="1" value="6" required>
              </div>
              <div class="col-md-4">
                <label class="form-label">Saldo Anterior</label>
                <input class="form-control readonly-field" id="movAnterior" readonly>
              </div>
              <div class="col-md-4">
                <label class="form-label">Novo Saldo</label>
                <input class="form-control readonly-field fw-bold" id="movNova" readonly>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-app-white" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn-app-pink">Confirmar Movimentação</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    let currentTab = 'categorias';

    function switchTab(target) {
      currentTab = target;
      document.querySelectorAll('.sidebar-item-btn').forEach(b => b.classList.toggle('active', b.dataset.tab === target));
      document.querySelectorAll('.app-quick-links button').forEach(b => b.classList.toggle('active', b.dataset.quickTab === target));
      document.querySelectorAll('.app-view').forEach(v => v.classList.toggle('d-none', v.id !== `view-${target}`));
      document.getElementById('globalAppSearch').value = '';
    }

    function showToast(msg) {
      document.getElementById('koraToastMsg').textContent = msg;
      new bootstrap.Toast(document.getElementById('koraToast'), { delay: 2300 }).show();
    }

    // Busca rápida no painel
    document.getElementById('globalAppSearch').addEventListener('input', e => {
      const q = e.target.value.toLowerCase();
      document.querySelectorAll(`#view-${currentTab} tbody tr`).forEach(tr => {
        tr.style.display = tr.textContent.toLowerCase().includes(q) ? '' : 'none';
      });
    });

    // Filtros locais
    document.querySelectorAll('.tbl-search').forEach(inp => inp.addEventListener('input', () => filterTable(inp.dataset.table)));
    document.querySelectorAll('.tbl-status, .tbl-category').forEach(sel => sel.addEventListener('change', () => filterTable(sel.dataset.table)));

    function filterTable(tableId) {
      const table = document.getElementById(tableId);
      const box = table.closest('.white-box');
      const term = box.querySelector('.tbl-search')?.value.toLowerCase() || '';
      const status = box.querySelector('.tbl-status')?.value || '';
      const cat = box.querySelector('.tbl-category')?.value || '';

      table.querySelectorAll('tbody tr').forEach(tr => {
        const okText = tr.textContent.toLowerCase().includes(term);
        const okStatus = !status || tr.dataset.status === status;
        const okCat = !cat || tr.dataset.catName === cat;
        tr.style.display = (okText && okStatus && okCat) ? '' : 'none';
      });
    }

    function removeRow(btn) {
      btn.closest('tr').remove();
      syncAll();
      showToast('Registro removido.');
    }

    // Sincronizar indicadores e celular sobreposto
    function syncAll() {
      const catLen = document.querySelectorAll('#tableCategorias tbody tr').length;
      const fornLen = document.querySelectorAll('#tableFornecedores tbody tr').length;
      const prodLen = document.querySelectorAll('#tableProdutos tbody tr').length;
      const estRows = document.querySelectorAll('#tableEstoque tbody tr');

      document.getElementById('sideCountCat').textContent = catLen;
      document.getElementById('rowsCatLabel').textContent = `${catLen} registro(s)`;
      document.getElementById('sideCountForn').textContent = fornLen;
      document.getElementById('rowsFornLabel').textContent = `${fornLen} registro(s)`;
      document.getElementById('sideCountProd').textContent = prodLen;
      document.getElementById('rowsProdLabel').textContent = `${prodLen} registro(s)`;
      document.getElementById('sideCountEst').textContent = estRows.length;
      document.getElementById('chipSkus').textContent = `${prodLen} itens`;

      let units = 0;
      let money = 0;
      let lowCount = 0;

      estRows.forEach(tr => {
        const q = parseInt(tr.dataset.qty, 10) || 0;
        const min = parseInt(tr.dataset.min, 10) || 0;
        const price = parseFloat(tr.dataset.price) || 0;
        units += q;
        money += q * price;
        if (q <= min) lowCount++;

        const phoneQtyEl = document.getElementById(`phoneQty${tr.dataset.prodId}`);
        if (phoneQtyEl) phoneQtyEl.textContent = `${q} un.`;
        if (tr.dataset.prodId === '2') {
          const st2 = document.getElementById('phoneStatus2');
          if (st2) {
            st2.textContent = q <= min ? '● Estoque Baixo' : '● Normal';
            st2.style.color = q <= min ? 'var(--pink-deep)' : '#047857';
          }
        }
      });

      document.getElementById('chipUnits').textContent = `${units} un.`;
      document.getElementById('phoneTotalBadge').textContent = `${units} un.`;
      document.getElementById('chipMoney').textContent = money.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });

      const alertText = document.getElementById('liveAlertText');
      alertText.textContent = lowCount === 0
        ? 'Estoque em níveis normais'
        : `${lowCount} ${lowCount === 1 ? 'item abaixo' : 'itens abaixo'} do mínimo`;
    }

    // --- CATEGORIA ---
    let editCatTr = null;
    document.getElementById('categoriaDialog').addEventListener('show.bs.modal', e => {
      const btn = e.relatedTarget;
      editCatTr = btn?.dataset.mode === 'edit' ? btn.closest('tr') : null;

      if (editCatTr) {
        document.getElementById('catDialogTitle').textContent = `Editar Categoria #${editCatTr.dataset.id}`;
        document.getElementById('catId').value = editCatTr.dataset.id;
        document.getElementById('catNome').value = editCatTr.dataset.nome;
        document.getElementById('catDesc').value = editCatTr.dataset.desc;
        document.getElementById('catAtivo').checked = editCatTr.dataset.ativo === 'true';
      } else {
        const nextId = document.querySelectorAll('#tableCategorias tbody tr').length + 1;
        document.getElementById('catDialogTitle').textContent = 'Nova Categoria';
        document.getElementById('catId').value = nextId;
        document.getElementById('catNome').value = '';
        document.getElementById('catDesc').value = '';
        document.getElementById('catAtivo').checked = true;
      }
    });

    document.getElementById('formCategoria').addEventListener('submit', e => {
      e.preventDefault();
      const id = document.getElementById('catId').value;
      const nome = document.getElementById('catNome').value.trim();
      const desc = document.getElementById('catDesc').value.trim();
      const ativo = document.getElementById('catAtivo').checked;

      const html = `
        <td class="mono text-secondary">#${id}</td>
        <td class="fw-semibold">${nome}</td>
        <td class="text-secondary">${desc || '<span class="text-muted fst-italic">Sem descrição</span>'}</td>
        <td><span class="tag-pill ${ativo ? 'tag-ok' : 'tag-off'}">${ativo ? 'Ativo' : 'Inativo'}</span></td>
        <td class="text-end text-nowrap">
          <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#categoriaDialog" data-mode="edit">Editar</button>
          <button class="icon-del-btn" title="Excluir" onclick="removeRow(this)"><i class="bi bi-trash3"></i></button>
        </td>`;

      if (editCatTr) {
        Object.assign(editCatTr.dataset, { nome, desc, ativo: String(ativo), status: ativo ? 'Ativo' : 'Inativo' });
        editCatTr.innerHTML = html;
      } else {
        const tr = document.createElement('tr');
        Object.assign(tr.dataset, { id, nome, desc, ativo: String(ativo), status: ativo ? 'Ativo' : 'Inativo' });
        tr.innerHTML = html;
        document.querySelector('#tableCategorias tbody').appendChild(tr);
      }

      syncAll();
      bootstrap.Modal.getInstance(document.getElementById('categoriaDialog')).hide();
      showToast('Categoria salva.');
    });

    // --- FORNECEDOR ---
    let editFornTr = null;
    document.getElementById('fornecedorDialog').addEventListener('show.bs.modal', e => {
      const btn = e.relatedTarget;
      editFornTr = btn?.dataset.mode === 'edit' ? btn.closest('tr') : null;

      if (editFornTr) {
        document.getElementById('fornDialogTitle').textContent = `Editar Fornecedor #${editFornTr.dataset.id}`;
        document.getElementById('fornId').value = editFornTr.dataset.id;
        document.getElementById('fornRazao').value = editFornTr.dataset.razao;
        document.getElementById('fornCnpj').value = editFornTr.dataset.cnpj;
        document.getElementById('fornEmail').value = editFornTr.dataset.email;
        document.getElementById('fornTel').value = editFornTr.dataset.tel;
        document.getElementById('fornAtivo').checked = editFornTr.dataset.ativo === 'true';
      } else {
        const nextId = document.querySelectorAll('#tableFornecedores tbody tr').length + 1;
        document.getElementById('fornDialogTitle').textContent = 'Novo Fornecedor';
        document.getElementById('fornId').value = nextId;
        document.getElementById('fornRazao').value = '';
        document.getElementById('fornCnpj').value = '';
        document.getElementById('fornEmail').value = '';
        document.getElementById('fornTel').value = '';
        document.getElementById('fornAtivo').checked = true;
      }
    });

    document.getElementById('formFornecedor').addEventListener('submit', e => {
      e.preventDefault();
      const id = document.getElementById('fornId').value;
      const razao = document.getElementById('fornRazao').value.trim();
      const cnpj = document.getElementById('fornCnpj').value.trim();
      const email = document.getElementById('fornEmail').value.trim();
      const tel = document.getElementById('fornTel').value.trim();
      const ativo = document.getElementById('fornAtivo').checked;

      const html = `
        <td class="mono text-secondary">#${id}</td>
        <td class="fw-semibold">${razao}</td>
        <td class="mono small">${cnpj}</td>
        <td>
          <div class="small">${email || '<span class="text-muted fst-italic">E-mail não informado</span>'}</div>
          <div class="mono text-secondary" style="font-size: 0.74rem;">${tel || '—'}</div>
        </td>
        <td><span class="tag-pill ${ativo ? 'tag-ok' : 'tag-off'}">${ativo ? 'Ativo' : 'Inativo'}</span></td>
        <td class="text-end text-nowrap">
          <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#fornecedorDialog" data-mode="edit">Editar</button>
          <button class="icon-del-btn" title="Excluir" onclick="removeRow(this)"><i class="bi bi-trash3"></i></button>
        </td>`;

      if (editFornTr) {
        Object.assign(editFornTr.dataset, { razao, cnpj, email, tel, ativo: String(ativo), status: ativo ? 'Ativo' : 'Inativo' });
        editFornTr.innerHTML = html;
      } else {
        const tr = document.createElement('tr');
        Object.assign(tr.dataset, { id, razao, cnpj, email, tel, ativo: String(ativo), status: ativo ? 'Ativo' : 'Inativo' });
        tr.innerHTML = html;
        document.querySelector('#tableFornecedores tbody').appendChild(tr);
      }

      syncAll();
      bootstrap.Modal.getInstance(document.getElementById('fornecedorDialog')).hide();
      showToast('Fornecedor salvo.');
    });

    // --- PRODUTO ---
    let editProdTr = null;
    document.getElementById('produtoDialog').addEventListener('show.bs.modal', e => {
      const btn = e.relatedTarget;
      editProdTr = btn?.dataset.mode === 'edit' ? btn.closest('tr') : null;

      if (editProdTr) {
        document.getElementById('prodDialogTitle').textContent = `Editar Produto #${editProdTr.dataset.id}`;
        document.getElementById('prodId').value = editProdTr.dataset.id;
        document.getElementById('prodNome').value = editProdTr.dataset.nome;
        document.getElementById('prodEan').value = editProdTr.dataset.ean;
        document.getElementById('prodCategoria').value = editProdTr.dataset.catId;
        document.getElementById('prodFornecedor').value = editProdTr.dataset.fornId;
        document.getElementById('prodPreco').value = editProdTr.dataset.preco;
        document.getElementById('prodCadastro').value = editProdTr.dataset.cadastro;
        document.getElementById('produtoAtivo').checked = editProdTr.dataset.ativo === 'true';
      } else {
        const nextId = document.querySelectorAll('#tableProdutos tbody tr').length + 1;
        document.getElementById('prodDialogTitle').textContent = 'Novo Produto';
        document.getElementById('prodId').value = nextId;
        document.getElementById('prodNome').value = '';
        document.getElementById('prodEan').value = '';
        document.getElementById('prodCategoria').value = '1';
        document.getElementById('prodFornecedor').value = '1';
        document.getElementById('prodPreco').value = '';
        document.getElementById('prodCadastro').value = '18/11/2026 00:15';
        document.getElementById('produtoAtivo').checked = true;
      }
    });

    document.getElementById('formProduto').addEventListener('submit', e => {
      e.preventDefault();
      const id = document.getElementById('prodId').value;
      const nome = document.getElementById('prodNome').value.trim();
      const ean = document.getElementById('prodEan').value.trim();
      const catSel = document.getElementById('prodCategoria');
      const fornSel = document.getElementById('prodFornecedor');
      const catId = catSel.value;
      const catName = catSel.selectedOptions[0].dataset.name;
      const fornId = fornSel.value;
      const fornName = fornSel.selectedOptions[0].dataset.name;
      const precoNum = parseFloat(document.getElementById('prodPreco').value) || 0;
      const precoFmt = precoNum.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
      const cadastro = document.getElementById('prodCadastro').value;
      const ativo = document.getElementById('produtoAtivo').checked;

      const html = `
        <td class="mono text-secondary">#${id}</td>
        <td>
          <div class="fw-semibold">${nome}</div>
          <div class="${ean ? 'mono text-muted' : 'text-muted fst-italic'}" style="font-size: 0.73rem;">${ean ? 'EAN: ' + ean : 'Sem EAN'}</div>
        </td>
        <td><span class="cat-label">${catName}</span></td>
        <td class="text-secondary small">${fornName}</td>
        <td class="text-end mono fw-semibold text-nowrap">${precoFmt}</td>
        <td><span class="tag-pill ${ativo ? 'tag-ok' : 'tag-off'}">${ativo ? 'Ativo' : 'Inativo'}</span></td>
        <td class="text-end text-nowrap">
          <button class="mini-btn me-1" data-bs-toggle="modal" data-bs-target="#produtoDialog" data-mode="edit">Editar</button>
          <button class="icon-del-btn" title="Excluir" onclick="removeRow(this)"><i class="bi bi-trash3"></i></button>
        </td>`;

      if (editProdTr) {
        Object.assign(editProdTr.dataset, { nome, ean, catId, catName, fornId, fornName, preco: precoNum.toFixed(2), cadastro, ativo: String(ativo) });
        editProdTr.innerHTML = html;
      } else {
        const tr = document.createElement('tr');
        Object.assign(tr.dataset, { id, nome, ean, catId, catName, fornId, fornName, preco: precoNum.toFixed(2), cadastro, ativo: String(ativo) });
        tr.innerHTML = html;
        document.querySelector('#tableProdutos tbody').appendChild(tr);
      }

      syncAll();
      bootstrap.Modal.getInstance(document.getElementById('produtoDialog')).hide();
      showToast('Produto salvo.');
    });

    // --- ESTOQUE ---
    function refreshStockRow(tr) {
      const qty = parseInt(tr.dataset.qty, 10);
      const min = parseInt(tr.dataset.min, 10);
      const max = parseInt(tr.dataset.max, 10);
      const isLow = qty <= min;
      const pct = Math.min(100, max > 0 ? Math.round((qty / max) * 100) : 0);

      tr.children[1].textContent = tr.dataset.loc || 'Não informada';
      const qtyCell = tr.querySelector('.td-qty');
      qtyCell.textContent = qty;
      qtyCell.style.color = isLow ? 'var(--pink-deep)' : '';
      tr.querySelector('.td-minmax').textContent = `${min} / ${max}`;

      const bar = tr.querySelector('.td-bar');
      bar.style.width = `${pct}%`;
      bar.style.background = isLow ? 'var(--pink-neon)' : '#10b981';

      tr.querySelector('.td-status').innerHTML = isLow
        ? '<span class="tag-pill tag-alert">Estoque Baixo</span>'
        : '<span class="tag-pill tag-ok">Normal</span>';
    }

    document.getElementById('estoqueDialog').addEventListener('show.bs.modal', e => {
      const stockId = e.relatedTarget?.dataset.stockId || '2';
      const tr = document.querySelector(`#tableEstoque tbody tr[data-id="${stockId}"]`);
      if (!tr) return;
      document.getElementById('estDialogTitle').textContent = `Configurar Estoque #${tr.dataset.id}`;
      document.getElementById('estId').value = tr.dataset.id;
      document.getElementById('estProd').value = tr.dataset.prodId;
      document.getElementById('estQtd').value = tr.dataset.qty;
      document.getElementById('estMin').value = tr.dataset.min;
      document.getElementById('estMax').value = tr.dataset.max;
      document.getElementById('estLoc').value = tr.dataset.loc;
    });

    document.getElementById('formEstoque').addEventListener('submit', e => {
      e.preventDefault();
      const id = document.getElementById('estId').value;
      const tr = document.querySelector(`#tableEstoque tbody tr[data-id="${id}"]`);
      if (tr) {
        tr.dataset.qty = document.getElementById('estQtd').value;
        tr.dataset.min = document.getElementById('estMin').value;
        tr.dataset.max = document.getElementById('estMax').value;
        tr.dataset.loc = document.getElementById('estLoc').value.trim();
        refreshStockRow(tr);
        syncAll();
      }
      bootstrap.Modal.getInstance(document.getElementById('estoqueDialog')).hide();
      showToast('Parâmetros atualizados.');
    });

    // --- MOVIMENTAÇÃO ---
    const movProduto = document.getElementById('movProduto');
    const movTipo = document.getElementById('movTipo');
    const movQtd = document.getElementById('movQtd');
    const movAnterior = document.getElementById('movAnterior');
    const movNova = document.getElementById('movNova');

    function calcMovement() {
      const tr = document.querySelector(`#tableEstoque tbody tr[data-prod-id="${movProduto.value}"]`);
      const prev = parseInt(tr?.dataset.qty, 10) || 0;
      const delta = parseInt(movQtd.value, 10) || 0;
      const isEntry = movTipo.value === '1';
      movAnterior.value = prev;
      movNova.value = isEntry ? prev + delta : Math.max(0, prev - delta);
    }

    [movProduto, movTipo, movQtd].forEach(el => el.addEventListener('input', calcMovement));

    document.getElementById('movimentacaoDialog').addEventListener('show.bs.modal', e => {
      const btn = e.relatedTarget;
      if (btn?.dataset.prodId) movProduto.value = btn.dataset.prodId;
      if (btn?.dataset.movType) movTipo.value = btn.dataset.movType;
      movQtd.value = 6;
      calcMovement();
    });

    document.getElementById('formMovimentacao').addEventListener('submit', e => {
      e.preventDefault();
      const prodId = movProduto.value;
      const isEntry = movTipo.value === '1';
      const delta = parseInt(movQtd.value, 10) || 0;
      const next = parseInt(movNova.value, 10);

      const tr = document.querySelector(`#tableEstoque tbody tr[data-prod-id="${prodId}"]`);
      if (tr) {
        tr.dataset.qty = next;
        refreshStockRow(tr);

        const histBody = document.querySelector('#tableMovimentacoes tbody');
        histBody.insertAdjacentHTML('afterbegin', `
          <tr>
            <td class="mono small text-secondary text-nowrap">18/11/2026 00:15</td>
            <td>${tr.dataset.prodName}</td>
            <td><span class="tag-pill ${isEntry ? 'tag-ok' : 'tag-alert'}">${isEntry ? 'Entrada' : 'Saída'}</span></td>
            <td class="text-end mono fw-semibold ${isEntry ? 'text-success' : ''}" style="${isEntry ? '' : 'color: var(--pink-deep);'}">${isEntry ? '+' : '-'}${delta}</td>
            <td class="text-end mono fw-bold">${next}</td>
          </tr>`);
      }

      syncAll();
      bootstrap.Modal.getInstance(document.getElementById('movimentacaoDialog')).hide();
      showToast('Movimentação registrada.');
    });

    syncAll();
  </script>
</body>
</html>