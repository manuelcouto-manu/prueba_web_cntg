CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    cantidad INT DEFAULT 0,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_nombre (nombre)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertar algunos productos de ejemplo
INSERT INTO productos (nombre, descripcion, precio, cantidad) VALUES
('Laptop', 'Laptop Intel Core i5, 8GB RAM, 256GB SSD', 599.99, 5),
('Mouse', 'Mouse inalámbrico USB', 19.99, 50),
('Teclado', 'Teclado mecánico RGB', 79.99, 15),
('Monitor', 'Monitor 27 pulgadas 1440p', 299.99, 8);

### 2.6 Crear la Página Principal