<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
  
  <link rel="canonical" href="https://diyhab.ru/">
  
  <title>D.I.Y.H.A.B — Полезный ресурс. VPN, создание сайтов и многое другое. Скоро запуск!</title>
  <meta name="title" content="D.I.Y.H.A.B — Полезный ресурс. VPN, создание сайтов и многое другое. Скоро запуск!">
  <meta name="description" content="D.I.Y.H.A.B — будущий ресурс. Наша команда готовит большой объем полезностей. Следите за запуском — здесь будет интересно и жарко. Обещаем, оно того стоит!">
  
  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://diyhab.ru/" />
  <meta property="og:title" content="D.I.Y.H.A.B — Полезный ресурс. VPN, создание сайтов и многое другое. Скоро запуск!" />
  <meta property="og:description" content="D.I.Y.H.A.B — будущий ресурс. Наша команда готовит большой объем полезностей. Следите за запуском — здесь будет интересно и жарко. Обещаем, оно того стоит!" />
  <meta property="og:image" content="bg.webp" />

  <style>
    :root {
      --text-color: #eaf2ff;
      --dot-color: #0ff0fc;
      --glow-1: rgba(15,240,252,0.4);
      --glow-2: rgba(106,17,203,0.35);
      --btn-bg: rgba(255,255,255,0.06);
      --btn-border: rgba(255,255,255,0.2);
    }

    body {
      margin: 0;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 32px;

      font-family: 'Montserrat', sans-serif;
      color: var(--text-color);
      overflow: hidden;
      user-select: none;

      background: linear-gradient(
        -45deg,
        #05050f,
        #0a0f2c,
        #160b3a,
        #2a0f5f,
        #0f2a5f,
        #003b6f
      );
      background-size: 600% 600%;
      animation: gradientFlow 22s ease infinite;
    }

    body.neon {
      --text-color: #ffffff;
      --dot-color: #00ffd5;
      --glow-1: rgba(0,255,213,0.8);
      --glow-2: rgba(255,0,200,0.7);
      --btn-bg: rgba(0,255,213,0.15);
      --btn-border: rgba(0,255,213,0.6);

      background: linear-gradient(
        -45deg,
        #02010a,
        #1a0033,
        #2b0066,
        #003b6f,
        #00ffd5,
        #ff00cc
      );
      background-size: 700% 700%;
      animation-duration: 14s;
    }

    @keyframes gradientFlow {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* === ТВОИ ПРАВКИ === */
    .container {
      text-align: center;
      font-weight: 700;
      font-size: clamp(50px, 9.4vw, 180px);
      letter-spacing: 0.05em;
      text-shadow:
        0 0 10px var(--glow-1),
        0 0 25px var(--glow-2);
      z-index: 2;
    }

    .container > span {
      font-weight: 400;
      display: block;
      font-size: 0.45em;
      /* margin-top: 0.25em; */
      letter-spacing: 0.08em;
    }

    .dots {
      display: inline-block;
      /* margin-left: 0.1em; */
    }

    .dots span {
      display: inline-block;
      animation: bounce 1.6s infinite ease-in-out both;
      color: var(--dot-color);
    }

    .dots span:nth-child(1) { animation-delay: 0s; }
    .dots span:nth-child(2) { animation-delay: 0.25s; }
    .dots span:nth-child(3) { animation-delay: 0.5s; }

    @keyframes bounce {
      0%   { transform: translateY(0); opacity: 0.3; }
      20%  { transform: translateY(-10px); opacity: 1; }
      40%  { transform: translateY(0); opacity: 0.6; }
      100% { transform: translateY(0); opacity: 0.3; }
    }

    /* === SYNTHWAVE GRAIN === */
    body::before {
      content: '';
      position: fixed;
      inset: 0;
      pointer-events: none;
      z-index: 1;

      background-image:
        repeating-linear-gradient(
          0deg,
          rgba(255,255,255,0.035),
          rgba(255,255,255,0.035) 1px,
          transparent 1px,
          transparent 2px
        ),
        repeating-linear-gradient(
          90deg,
          rgba(0,0,0,0.04),
          rgba(0,0,0,0.04) 1px,
          transparent 1px,
          transparent 2px
        );

      mix-blend-mode: overlay;
      animation: noiseMove 0.6s steps(2) infinite;
    }

    @keyframes noiseMove {
      0% { transform: translate(0,0); }
      25% { transform: translate(-1px,1px); }
      50% { transform: translate(1px,-1px); }
      75% { transform: translate(-1px,-1px); }
      100% { transform: translate(0,0); }
    }

    /* === NEON BUTTON === */
    .neon-btn {
      font-family: inherit;
      font-weight: 700;
      letter-spacing: 0.2em;
      padding: 14px 28px;
      border-radius: 999px;
      background: var(--btn-bg);
      border: 1px solid var(--btn-border);
      color: var(--text-color);
      cursor: pointer;
      z-index: 2;

      backdrop-filter: blur(8px);
      transition: all 0.3s ease;
      text-shadow: 0 0 8px var(--glow-1);
    }

    .neon-btn:hover {
      transform: translateY(-2px);
      box-shadow:
        0 0 12px var(--glow-1),
        0 0 30px var(--glow-2);
    }

    .neon-btn:active {
      transform: translateY(0);
    }
    p{
      text-align: center;
      line-height: 1.4;
      font-size: clamp(12px, 0.94vw, 18px);
      padding: 0 16px;
    }
  </style>
</head>
<body>

  <div class="container">
    D.I.Y.H.A.B
    <!-- <img src="diyhab-logo-crop.webp" alt="D.I.Y.H.A.B Logo" style="width: 100%; max-width: 900px; height: auto;"> -->
    <span>
      настраивается
      <span class="dots">
        <span>.</span><span>.</span><span>.</span>
      </span>
    </span>
  </div>
  
  <p>Будущий ресурс с полезной информацией и сервисами. Скоро запуск!</p>

  <button class="neon-btn" id="toggleNeon">
    NEON MODE
  </button>

  <script>
  const btn = document.getElementById('toggleNeon');
  const body = document.body;

  function updateButton() {
    btn.textContent = body.classList.contains('neon')
      ? 'NIGHT MODE'
      : 'NEON MODE';
  }

  btn.addEventListener('click', () => {
    body.classList.toggle('neon');
    updateButton();
  });

  // начальное состояние
  updateButton();
</script>

</body>
</html>
