<?php require __DIR__ . '/php/db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Guía PHP – Menú</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    :root{ --bg:#f7f7fa; --card:#fff; --line:#e8e8ef; --text:#1f2328; --muted:#6a737d; --link:#0a7; }
    *{ box-sizing:border-box; } body{ margin:0; background:var(--bg); color:var(--text); font:16px/1.5 system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif; }
    .wrap{ max-width:960px; margin:32px auto; padding:0 16px; display:grid; gap:18px; }
    .title{ margin:0; font-size:28px; font-weight:800; }
    .card{ background:var(--card); border:1px solid var(--line); border-radius:14px; padding:16px; box-shadow:0 1px 3px rgba(0,0,0,.04); }
    .sec{ margin:0 0 8px; font-size:18px; font-weight:800; }
    .menu{ display:grid; gap:6px; padding-left:18px; margin: 0; }
    .menu li{ margin:0; }
    a{ color:var(--link); text-decoration:none; }
    a:hover{ text-decoration:underline; }
    .muted{ color:var(--muted); font-size:13px; }
  </style>
</head>
<body>
  <main class="wrap">
    <header>
      <h1 class="title">Guía PHP – Menú</h1>
      <p class="muted">Opciones recuperadas dinámicamente desde MySQL.</p>
    </header>

    <?php
      $sql = "SELECT seccion, titulo, ruta
              FROM menu_opcion
              WHERE visible=1
              ORDER BY seccion IS NULL, seccion, orden, titulo";
      $res = $mysqli->query($sql);
      if (!$res) {
        echo '<div class="card"><strong>Error:</strong> ' . htmlspecialchars($mysqli->error, ENT_QUOTES, 'UTF-8') . '</div>';
      } else {
        $seccionActual = null;
        $bloqueAbierto = false;
        while ($row = $res->fetch_assoc()) {
          $sec = $row['seccion'] ?? 'Sin sección';
          if ($sec !== $seccionActual) {
            if ($bloqueAbierto) echo '</ul></div>';
            echo '<div class="card"><h2 class="sec">'. htmlspecialchars($sec, ENT_QUOTES, 'UTF-8') .'</h2><ul class="menu">';
            $seccionActual = $sec;
            $bloqueAbierto = true;
          }
          $titulo = htmlspecialchars($row['titulo'], ENT_QUOTES, 'UTF-8');
          $ruta   = htmlspecialchars($row['ruta'],   ENT_QUOTES, 'UTF-8');
          echo '<li><a href="'. $ruta .'">'. $titulo .'</a></li>';
        }
        if ($bloqueAbierto) echo '</ul></div>';
      }
    ?>
  </main>
</body>
</html>
