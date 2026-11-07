<?php
declare(strict_types=1);

function e(?string $value): string {
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

$profile = [
    'name' => 'Manandi Priatama',
    'role' => 'Lulusan S1 Informatika | Teknisi IT',
    'tagline' => 'Lulusan Sarjana Informatika yang adaptif dan berorientasi pada pemecahan masalah, dengan pengalaman dalam dukungan teknis, pemeliharaan perangkat IT, jaringan, serta pelayanan pelanggan.',
    'about' => 'Saya merupakan lulusan S1 Informatika dari Universitas Teknologi Yogyakarta. Saya memiliki pengalaman dalam perbaikan dan pemeliharaan laptop serta ponsel, troubleshooting perangkat keras dan lunak, dukungan infrastruktur IT, pengelolaan jaringan, dan pelayanan pelanggan. Saya terbiasa bekerja secara mandiri maupun dalam tim, cepat mempelajari hal baru, dan berkomitmen memberikan solusi yang efektif.',
    'email' => 'priatamamanandi90@gmail.com',
    'whatsapp' => '6289650083790',
    'location' => 'Sleman, D.I. Yogyakarta',
];

$skills = ['Sistem Operasi', 'Troubleshooting Perangkat', 'Pemeliharaan Hardware', 'Jaringan Komputer', 'SQL', 'Pemrograman Dasar', 'Microsoft Office'];

$experiences = [
    [
        'title' => 'Freelance Teknisi Laptop dan HP',
        'period' => 'Maret 2019 – Sekarang',
        'place' => 'Freelance',
        'description' => 'Melayani perbaikan, perawatan, dan troubleshooting laptop serta ponsel. Berkonsultasi dengan klien untuk mendiagnosis kerusakan dan memberikan solusi yang transparan dan efisien.',
    ],
    [
        'title' => 'MD Floor Event',
        'period' => 'April 2019 – Juni 2019',
        'place' => 'Mirota Kampus Simanjuntak',
        'description' => 'Menjaga kerapian dan tata letak area toko, merekomendasikan produk sesuai kebutuhan pelanggan, menata display, serta melayani kebutuhan belanja pelanggan dengan ramah dan komunikatif.',
    ],
    [
        'title' => 'Asisten Teknisi',
        'period' => 'April 2018 – Maret 2019',
        'place' => 'Leppi Laptop',
        'description' => 'Mendiagnosis dan memperbaiki masalah hardware maupun software, merespons keluhan pelanggan, serta mengelola penjualan sparepart, aksesori, dan laptop bekas.',
    ],
    [
        'title' => 'Praktek Kerja Lapangan (PKL)',
        'period' => 'Maret 2017 – Mei 2017',
        'place' => 'PUSKOM UTY',
        'description' => 'Mendukung migrasi infrastruktur IT, pemeliharaan dan pembaruan hardware, perancangan serta instalasi jaringan, dan pemeliharaan rutin untuk menjaga stabilitas operasional.',
    ],
];

$education = [
    ['institution' => 'Universitas Teknologi Yogyakarta', 'program' => 'S1 Informatika', 'year' => 'Lulus 2026'],
    ['institution' => 'SMK YPKK 1 Sleman', 'program' => 'Rekayasa Perangkat Lunak', 'year' => 'Lulus 2018'],
];

$certification = 'Sertifikasi Kompetensi Keahlian Rekayasa Perangkat Lunak — Tiga Karya Media Consultant (2018), No. 03/Um/V/3KMC/2018';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= e($profile['tagline']) ?>">
    <meta name="theme-color" content="#101010">
    <title><?= e($profile['name']) ?> — Portofolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/main.js" defer></script>
</head>
<body>
<header class="site-header">
    <nav class="nav container" aria-label="Navigasi utama">
        <a class="brand" href="#beranda">PORTO<span>FOLIO.</span></a>
        <button class="menu-toggle" type="button" aria-label="Buka navigasi" aria-expanded="false">☰</button>
        <div class="nav-links">
            <a href="#beranda">Beranda</a>
            <a href="#tentang">Tentang</a>
            <a href="#keahlian">Keahlian</a>
            <a href="#pengalaman">Pengalaman</a>
            <a href="#pendidikan">Pendidikan</a>
            <a class="nav-cta" href="#kontak">Hubungi Saya <span>↗</span></a>
        </div>
    </nav>
</header>

<main>
    <section class="hero container" id="beranda">
        <div class="hero-copy reveal">

            <h1>Halo, saya <span class="accent"><?= e($profile['name']) ?>.</span><br>Berpengalaman dalam <span class="outline-text">dukungan IT.</span></h1>
            <p class="hero-description"><?= e($profile['tagline']) ?></p>
            <div class="hero-actions">
                <a class="button button-primary" href="#pengalaman">Lihat Pengalaman <span>↘</span></a>
                <a class="button button-secondary" href="#kontak">Mari Terhubung</a>
            </div>
            <div class="hero-meta">
                <span><span class="meta-icon">⌖</span> <?= e($profile['location']) ?></span>
                <span><span class="meta-icon">✳</span> <?= e($profile['role']) ?></span>
            </div>
        </div>
        <div class="hero-art reveal" aria-label="Ilustrasi dekoratif">
            <div class="art-glow"></div>
            <div class="art-card card-back"><span>IDEA</span><b>01</b></div>
            <div class="art-card card-front">
                <span class="code-label">INFORMATIKA / TEKNISI IT</span>
                <div class="code-mark">&lt;<span>code</span> /&gt;</div>
                <div class="art-line"></div>
                <div class="art-line short"></div>
                <div class="art-bottom"><span>SOLVE WITH PURPOSE</span><span>✳</span></div>
            </div>
            <span class="floating-tag tag-one">IT SUPPORT ✦</span>
            <span class="floating-tag tag-two">TROUBLESHOOTING ↗</span>
            <span class="art-spark">✳</span>
        </div>
        <a class="scroll-cue" href="#tentang"><span></span> GULIR UNTUK MENJELAJAH</a>
    </section>

    <section class="section container" id="tentang">
        <div class="section-heading reveal">
            <p class="eyebrow">01 / TENTANG SAYA</p>
            <h2>Teknologi, layanan, dan <span class="accent">pemecahan masalah.</span></h2>
        </div>
        <div class="about-grid">
            <div class="about-mark reveal"><span>HELLO</span><strong>!</strong><small>THIS IS MY SPACE</small></div>
            <div class="about-copy reveal">
                <h3>Profil profesional</h3>
                <p><?= e($profile['about']) ?></p>
                <p>Saya ingin terus mengembangkan kemampuan teknis dan memberikan dukungan yang dapat diandalkan bagi pengguna maupun organisasi.</p>
                <a class="text-link" href="#kontak">Punya ide untuk dikerjakan bersama? <span>↗</span></a>
            </div>
        </div>
    </section>

    <section class="section skills-section" id="keahlian">
        <div class="container">
            <div class="section-heading reveal">
                <p class="eyebrow">02 / KEAHLIAN</p>
                <h2>Keahlian <span class="accent">teknis.</span></h2>
                <p class="section-subtitle">Keahlian yang tercantum dalam CV dan pengalaman kerja saya.</p>
            </div>
            <div class="skills-list reveal">
                <?php foreach ($skills as $index => $skill): ?>
                    <div class="skill-item"><span class="skill-number"><?= sprintf('%02d', $index + 1) ?></span><span><?= e($skill) ?></span><span class="skill-star">✳</span></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section container" id="pengalaman">
        <div class="section-heading projects-heading reveal">
            <div><p class="eyebrow">03 / PENGALAMAN KERJA</p><h2>Pengalaman <span class="accent">profesional.</span></h2></div>
            <p class="section-subtitle">Pengalaman kerja dan praktik yang tercantum dalam CV saya.</p>
        </div>
        <div class="experience-list">
            <?php foreach ($experiences as $index => $experience): ?>
                <article class="experience-card reveal">
                    <div class="experience-number"><?= sprintf('%02d', $index + 1) ?></div>
                    <div class="experience-main">
                        <p class="project-category"><?= e($experience['period']) ?></p>
                        <h3><?= e($experience['title']) ?></h3>
                        <p class="experience-place"><?= e($experience['place']) ?></p>
                        <p class="project-description"><?= e($experience['description']) ?></p>
                    </div>
                    <span class="experience-arrow">↗</span>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section skills-section" id="pendidikan">
        <div class="container">
            <div class="section-heading reveal">
                <p class="eyebrow">04 / PENDIDIKAN & SERTIFIKASI</p>
                <h2>Dasar pendidikan <span class="accent">saya.</span></h2>
            </div>
            <div class="education-list reveal">
                <?php foreach ($education as $item): ?>
                    <article class="education-item">
                        <div><h3><?= e($item['institution']) ?></h3><p><?= e($item['program']) ?></p></div>
                        <span><?= e($item['year']) ?></span>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="certification reveal">
                <p class="eyebrow">SERTIFIKASI</p>
                <p><?= e($certification) ?></p>
            </div>
        </div>
    </section>

    <section class="contact-section" id="kontak">
        <div class="container contact-inner reveal">
            <p class="eyebrow">04 / KONTAK</p>
            <h2>Mari terhubung.<br><span class="accent">Diskusikan peluang kerja.</span></h2>
            <p class="contact-description">Silakan hubungi saya untuk peluang kerja, dukungan teknis, atau kolaborasi yang relevan.</p>
            <div class="contact-actions">
                <a class="button button-primary" href="https://wa.me/<?= e($profile['whatsapp']) ?>" target="_blank" rel="noopener noreferrer">Chat WhatsApp <span>↗</span></a>
                <a class="button button-secondary" href="mailto:<?= e($profile['email']) ?>">Kirim Email</a>
            </div>

        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container footer-inner"><a class="brand" href="#beranda">PORTO<span>FOLIO.</span></a><p>© <?= date('Y') ?> <?= e($profile['name']) ?>. Lulusan S1 Informatika • Teknisi IT</p><a href="#beranda" class="back-top">Kembali ke atas ↑</a></div>
</footer>
</body>
</html>
