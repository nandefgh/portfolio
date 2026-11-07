CREATE DATABASE IF NOT EXISTS portfolio_db
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE portfolio_db;

CREATE TABLE IF NOT EXISTS projects (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(150) NOT NULL,
  description TEXT NOT NULL,
  image_url VARCHAR(500) NOT NULL,
  project_url VARCHAR(500) NOT NULL DEFAULT '#kontak',
  category VARCHAR(100) NOT NULL DEFAULT 'Project',
  is_published TINYINT(1) NOT NULL DEFAULT 1,
  sort_order INT NOT NULL DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO projects (title, description, image_url, project_url, category, sort_order) VALUES
('Website Portofolio', 'Website pribadi untuk menampilkan profil, keterampilan, dan karya pilihan.', 'https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?auto=format&fit=crop&w=900&q=80', '#kontak', 'Web Development', 1),
('Desain Identitas Visual', 'Eksplorasi desain visual dengan pendekatan yang konsisten dan modern.', 'https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&w=900&q=80', '#kontak', 'Design', 2),
('Dashboard Informasi', 'Konsep antarmuka dashboard untuk menyajikan informasi dengan jelas.', 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=900&q=80', '#kontak', 'UI/UX', 3);
