CREATE DATABASE IF NOT EXISTS Guia_php CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE Guia_php;

DROP TABLE IF EXISTS menu_opcion;
CREATE TABLE menu_opcion (
  id       INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  titulo   VARCHAR(120) NOT NULL,
  ruta     VARCHAR(255) NOT NULL,
  seccion  VARCHAR(80)  NULL,
  orden    INT          NOT NULL DEFAULT 0,
  visible  TINYINT(1)   NOT NULL DEFAULT 1
) ENGINE=InnoDB;

INSERT INTO menu_opcion (titulo, ruta, seccion, orden, visible) VALUES
('Ejercicio 4 – Mostrar valor generado y si es ≤50 o >50', 'php/valor-generado.php',            'Ejercicios 4–8', 10, 1),
('Ejercicio 5 – Tipos de variables',                        'php/tipos-variables.php',           'Ejercicios 4–8', 20, 1),
('Ejercicio 6 – Variable string (texto con 3 variables)',   'php/variable-string.php',           'Ejercicios 4–8', 30, 1),
('Ejercicio 7 – Estructura if (número aleatorio)',          'php/estructura-if.php',             'Ejercicios 4–8', 40, 1),
('Ejercicio 8 – Estructuras repetitivas (tabla del 2)',     'php/estructura-repetitivas.php',    'Ejercicios 4–8', 50, 1);

INSERT INTO menu_opcion (titulo, ruta, seccion, orden, visible) VALUES
('Ejercicio 9 – Form (texto y submit)',   'php/form-text-submit1.php',   'Formularios 9–13', 10, 1),
('Ejercicio 9 – Procesar',                'php/form-text-submit2.php',   'Formularios 9–13', 11, 0),

('Ejercicio 10 – Form (control radio)',   'php/form-control-radio1.php', 'Formularios 9–13', 20, 1),
('Ejercicio 10 – Procesar',               'php/form-control-radio2.php', 'Formularios 9–13', 21, 0),

('Ejercicio 11 – Form (checkbox)',        'php/form-checkbox1.php',      'Formularios 9–13', 30, 1),
('Ejercicio 11 – Procesar',               'php/form-checkbox2.php',      'Formularios 9–13', 31, 0),

('Ejercicio 12 – Form (select)',          'php/form-select1.php',        'Formularios 9–13', 40, 1),
('Ejercicio 12 – Procesar',               'php/form-select2.php',        'Formularios 9–13', 41, 0),

('Ejercicio 13 – Form (textarea)',        'php/textarea1.php',           'Formularios 9–13', 50, 1),
('Ejercicio 13 – Procesar',               'php/textarea2.php',           'Formularios 9–13', 51, 0);

INSERT INTO menu_opcion (titulo, ruta, seccion, orden, visible) VALUES
('Ejercicio 14 – Vectores (tradicionales)',     'php/vectores.php',                 'Archivos y Arreglos', 10, 1),

('Ejercicio 15 – Crear archivo de texto (form)', 'php/archivo-texto.php',           'Archivos y Arreglos', 20, 1),
('Ejercicio 15 – Guardar (procesar)',            'php/archivo-texto2.php',          'Archivos y Arreglos', 21, 0),

('Ejercicio 16 – Lectura de archivo de texto',   'php/lectura-archivo-texto.php',   'Archivos y Arreglos', 30, 1),

('Ejercicio 17 – Vectores (asociativos)',        'php/vectores-asociativos.php',    'Archivos y Arreglos', 40, 1),
('Ejercicio 18 – Funciones en PHP',              'php/funciones.php',               'Archivos y Arreglos', 50, 1);
