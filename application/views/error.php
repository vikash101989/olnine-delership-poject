<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>400 Bad Request</title>
  <meta name="robots" content="noindex" />
  <style>
    :root{
      --bg:#0f172a;           /* slate-900 */
      --card:#111827;         /* gray-900 */
      --muted:#94a3b8;        /* slate-400 */
      --text:#e5e7eb;         /* gray-200 */
      --accent:#22d3ee;       /* cyan-400 */
      --accent-2:#a78bfa;     /* violet-400 */
      --danger:#ef4444;       /* red-500 */
      --ring: rgba(34,211,238,.25);
      --radius: 18px;
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      font-family:ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,"Helvetica Neue",Arial,"Noto Sans","Apple Color Emoji","Segoe UI Emoji";
      color:var(--text);
      background:
        radial-gradient(1200px 600px at 10% -10%, rgba(167,139,250,.15), transparent 60%),
        radial-gradient(1000px 600px at 110% 20%, rgba(34,211,238,.12), transparent 60%),
        var(--bg);
      display:grid;
      place-items:center;
      padding:24px;
    }
    .card{
      width:min(880px,100%);
      background:linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.02));
      border:1px solid rgba(148,163,184,.15);
      border-radius:var(--radius);
      box-shadow:0 10px 30px rgba(2,6,23,.35), inset 0 1px 0 rgba(255,255,255,.05);
      overflow:hidden;
    }
    .ribbon{
      display:flex;align-items:center;gap:8px;
      padding:10px 16px;
      background:linear-gradient(90deg, rgba(239,68,68,.15), transparent);
      color:#fecaca; /* red-200 */
      border-bottom:1px solid rgba(239,68,68,.3);
      font-weight:600; letter-spacing:.3px;
    }
    .wrap{padding:28px; display:grid; gap:18px}
    .status{
      display:flex;align-items:baseline;gap:14px;flex-wrap:wrap
    }
    .code{
      font-size:52px; font-weight:800; line-height:1;
      background:linear-gradient(90deg,var(--accent),var(--accent-2));
      -webkit-background-clip:text;background-clip:text;color:transparent
    }
    .label{font-size:18px; color:var(--muted)}
    .desc{color:#cbd5e1; line-height:1.7}
    .hint{
      display:grid; gap:10px;
      padding:16px; border:1px dashed rgba(148,163,184,.35);
      border-radius:12px; background:rgba(2,6,23,.35)
    }
    .hint h3{margin:0; font-size:14px; text-transform:uppercase; letter-spacing:.12em; color:#a5b4fc}
    .hint ul{margin:0; padding-left:18px}
    .hint li{margin:6px 0; color:#cbd5e1}
    .row{display:flex; gap:12px; flex-wrap:wrap; margin-top:6px}
    .btn{
      appearance:none; border:1px solid rgba(148,163,184,.35);
      background:transparent; color:var(--text);
      padding:10px 16px; border-radius:999px; cursor:pointer;
      transition:.2s ease; text-decoration:none; display:inline-flex; align-items:center; gap:8px;
    }
    .btn:hover{border-color:var(--accent); box-shadow:0 0 0 6px var(--ring)}
    .btn.primary{border-color:transparent; background:linear-gradient(90deg,var(--accent),var(--accent-2)); color:#0b1020; font-weight:700}
    .meta{
      display:flex; gap:10px; flex-wrap:wrap; margin-top:6px; color:var(--muted); font-size:12px
    }
    .meta .pill{
      padding:6px 10px; border:1px solid rgba(148,163,184,.25); border-radius:999px; backdrop-filter:blur(6px)
    }
    .mono{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}
    @media (max-width:520px){
      .code{font-size:42px}
      .wrap{padding:22px}
    }
  </style>
</head>
<body>
  <main class="card" role="main" aria-labelledby="title">
    <div class="ribbon">⚠️ 400 Bad Request</div>

    <div class="wrap">
      <div class="status">
        <div class="code" aria-hidden="true">400</div>
        <h1 id="title" class="label">Your browser sent a request this server couldn’t understand.</h1>
      </div>

      <p class="desc">
        The request was malformed or missing required parameters. If you typed the address, double-check the URL.
        If you followed a link, it may be broken or expired.
      </p>

      <section class="hint" aria-labelledby="why">
        <h3 id="why">Common reasons</h3>
        <ul>
          <li>Invalid URL, query string, or encoded characters.</li>
          <li>Request body not valid JSON/form data.</li>
          <li>Missing or incorrect headers (e.g., <span class="mono">Content-Type</span>).</li>
          <li>Request size exceeded the allowed limit.</li>
        </ul>
        <div class="row">
          <a class="btn primary" href="/" aria-label="Go to homepage">Go Home</a>
          <button class="btn" onclick="history.back()" aria-label="Go back to previous page">Go Back</button>
          <a class="btn" href="#" onclick="location.reload()" aria-label="Reload the page">Reload</a>
        </div>
        <div class="meta" aria-label="Technical details">
          <span class="pill">Method: <span class="mono" id="m">GET</span></span>
          <span class="pill">Path: <span class="mono" id="p">/</span></span>
          <span class="pill">Request-ID: <span class="mono" id="rid">req_xxxxxx</span></span>
        </div>
      </section>
    </div>
  </main>

  <script>
    // Fill a few helpful bits for debugging (no tracking, runs locally).
    (function () {
      try {
        document.getElementById('m').textContent = (window.performance.getEntriesByType('navigation')[0]?.type === 'navigate')
          ? (document.referrer ? 'GET' : 'GET') : 'GET';
      } catch(e){}
      document.getElementById('p').textContent = location.pathname + location.search;
      document.getElementById('rid').textContent = 'req_' + Math.random().toString(36).slice(2,8);
    }());
  </script>
</body>
</html>
