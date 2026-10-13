<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Native - RupaCloud VPS</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #021024; color: #f1f5f9; display: flex; align-items: center; justify-content: center; min-height: 100vh; padding: 1.5rem; }
        .card { background: #052659; border: 1px solid #5483B3; border-radius: 1.5rem; padding: 2.5rem; max-width: 520px; width: 100%; box-shadow: 0 20px 40px rgba(0,0,0,0.5); text-align: center; }
        .badge { display: inline-block; background: #5483B3; color: white; padding: 0.35rem 1rem; border-radius: 9999px; font-size: 0.85rem; font-weight: 700; margin-bottom: 1.5rem; }
        h1 { font-size: 1.75rem; margin-bottom: 0.75rem; color: #C1E8FF; }
        p { color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem; }
        .info-grid { background: rgba(2, 16, 36, 0.6); border-radius: 1rem; padding: 1rem; text-align: left; font-family: monospace; font-size: 0.85rem; margin-bottom: 1.5rem; }
        .info-row { display: flex; justify-content: space-between; padding: 0.35rem 0; border-bottom: 1px solid rgba(255,255,255,0.06); }
        .info-row:last-child { border-bottom: none; }
        .status { color: #10b981; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <span class="badge">🚀 RupaCloud VPS Auto-Deploy</span>
        <h1>PHP Native Berhasil Live!</h1>
        <p>Aplikasi PHP berhasil di-deploy secara otomatis dari repositori GitHub langsung ke container VPS RupaCloud kamu.</p>
        <div class="info-grid">
            <div class="info-row"><span>Status:</span> <span class="status">ONLINE (Port 3000)</span></div>
            <div class="info-row"><span>PHP Version:</span> <span><?php echo phpversion(); ?></span></div>
            <div class="info-row"><span>Server Time:</span> <span><?php echo date('Y-m-d H:i:s'); ?> UTC</span></div>
            <div class="info-row"><span>Server Host:</span> <span><?php echo gethostname(); ?></span></div>
        </div>
        <p style="font-size: 0.8rem; color: #64748b; margin-bottom: 0;">Kamu bisa mengedit file <code>index.php</code> di repository kamu, lakukan <code>git push</code>, dan tonton auto-deploy berjalan otomatis!</p>
    </div>
</body>
</html>
