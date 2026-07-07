-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2026 at 11:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lextra`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-1b6453892473a467d07372d45eb05abc2031647a', 'i:1;', 1781863438),
('laravel-cache-1b6453892473a467d07372d45eb05abc2031647a:timer', 'i:1781863438;', 1781863438),
('laravel-cache-livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6', 'i:1;', 1781833318),
('laravel-cache-livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6:timer', 'i:1781833318;', 1781833318),
('laravel-cache-setting_danger_color', 'a:0:{}', 2097161751),
('laravel-cache-setting_primary_color', 'a:1:{s:5:\"color\";s:5:\"green\";}', 2097211044),
('laravel-cache-setting_success_color', 'a:0:{}', 2097161751),
('laravel-cache-setting_warning_color', 'a:0:{}', 2097161751),
('laravel-cache-settings.all', 'a:101:{s:7:\"address\";s:295:\"{\"id\":\"<p>Sakura Garden City Tower Cattleya CAT 01-15<\\/p><p>Jl. Bina Marga No.88 Cipayung, Jakarta Timur<\\/p><p>DKI Jakarta 13820, Indonesia<\\/p>\",\"en\":\"<p>Sakura Garden City Tower Cattleya CAT 01-15<\\/p><p>Jl. Bina Marga No.88 Cipayung, Jakarta Timur<\\/p><p>DKI Jakarta 13820, Indonesia<\\/p>\"}\";s:5:\"email\";s:313:\"{\"id\":\"<p><a target=\\\"_blank\\\" rel=\\\"noopener noreferrer nofollow\\\" href=\\\"mailto:ask@lexterasurveyindonesia.com\\\">ask@lexterasurveyindonesia.com<\\/a><\\/p>\",\"en\":\"<p><a target=\\\"_blank\\\" rel=\\\"noopener noreferrer nofollow\\\" href=\\\"mailto:ask@lexterasurveyindonesia.com\\\">ask@lexterasurveyindonesia.com<\\/a><\\/p>\"}\";s:9:\"site_name\";s:81:\"{\"id\":\"<p>Lextera Survey Indonesia<\\/p>\",\"en\":\"<p>Lextera Survey Indonesia<\\/p>\"}\";s:18:\"open_hours_weekday\";s:15:\"\"09:00 - 21:00\"\";s:18:\"open_hours_weekend\";s:15:\"\"10:00 - 22:00\"\";s:7:\"favicon\";s:51:\"{\"path\":\"settings\\/01KE97DXCN3B6Z5MBVAJ8RFSXY.png\"}\";s:7:\"history\";s:347:\"{\"id\":\"<p><\\/p><p><img src=\\\"http:\\/\\/localhost:8000\\/storage\\/nhdtL4HfTY6HbhEfVMocS2kNAqb3gyNTUgevKopb.png\\\" data-id=\\\"nhdtL4HfTY6HbhEfVMocS2kNAqb3gyNTUgevKopb.png\\\"><\\/p>\",\"en\":\"<p><\\/p><p><img src=\\\"http:\\/\\/localhost:8000\\/storage\\/0EeaNtGErPItHTjIGrokvUKvrTXwSLUPBuI5hZV6.png\\\" data-id=\\\"0EeaNtGErPItHTjIGrokvUKvrTXwSLUPBuI5hZV6.png\\\"><\\/p>\"}\";s:6:\"vision\";s:549:\"{\"id\":\"<p><strong>VISI<\\/strong><\\/p><p>Menjadi <strong>perusahaan jasa kanopi terpercaya dan terdepan<\\/strong> yang dikenal akan kualitas pekerjaan, inovasi desain, serta pelayanan profesional, guna memberikan solusi perlindungan bangunan yang bernilai tinggi dan berkelanjutan.<\\/p>\",\"en\":\"<p><strong>VISION<\\/strong><\\/p><p>To become a <strong>trusted and leading canopy service company<\\/strong>, recognized for superior workmanship, innovative designs, and professional service, delivering high-value and sustainable exterior solutions.<\\/p>\"}\";s:7:\"mission\";s:2263:\"{\"id\":\"<p><strong>MISI<\\/strong><\\/p><p>Untuk mewujudkan visi tersebut, kami menetapkan misi sebagai berikut:<\\/p><ol start=\\\"1\\\"><li><p><strong>Memberikan hasil pekerjaan berkualitas tinggi<\\/strong> dengan menggunakan material terbaik dan standar pengerjaan profesional.<\\/p><\\/li><li><p><strong>Menyediakan solusi kanopi yang fungsional dan estetis<\\/strong>, sesuai dengan kebutuhan dan karakter bangunan pelanggan.<\\/p><\\/li><li><p><strong>Mengutamakan kepuasan pelanggan<\\/strong> melalui pelayanan yang ramah, transparan, dan responsif sejak tahap konsultasi hingga penyelesaian proyek.<\\/p><\\/li><li><p><strong>Menjaga ketepatan waktu dan efisiensi kerja<\\/strong> tanpa mengurangi kualitas hasil akhir.<\\/p><\\/li><li><p><strong>Mengembangkan sumber daya manusia yang kompeten<\\/strong>, jujur, dan bertanggung jawab di setiap proyek.<\\/p><\\/li><li><p><strong>Berinovasi secara berkelanjutan<\\/strong> mengikuti perkembangan desain, material, dan teknologi konstruksi modern.<\\/p><\\/li><li><p><strong>Membangun hubungan jangka panjang<\\/strong> dengan pelanggan berdasarkan kepercayaan dan hasil kerja yang konsisten.<\\/p><\\/li><\\/ol>\",\"en\":\"<p><strong>MISSION<\\/strong><\\/p><p>To achieve our vision, we are committed to the following missions:<\\/p><ol start=\\\"1\\\"><li><p><strong>Deliver high-quality workmanship<\\/strong> by using premium materials and professional construction standards.<\\/p><\\/li><li><p><strong>Provide functional and aesthetically pleasing canopy solutions<\\/strong> tailored to each client\\u2019s needs and building characteristics.<\\/p><\\/li><li><p><strong>Prioritize customer satisfaction<\\/strong> through transparent communication, friendly service, and responsive support from consultation to project completion.<\\/p><\\/li><li><p><strong>Ensure timely and efficient project execution<\\/strong> without compromising quality.<\\/p><\\/li><li><p><strong>Develop skilled, honest, and responsible human resources<\\/strong> across all levels of the organization.<\\/p><\\/li><li><p><strong>Continuously innovate<\\/strong> by adopting modern designs, materials, and construction technologies.<\\/p><\\/li><li><p><strong>Build long-term relationships with clients<\\/strong> based on trust, consistency, and proven results.<\\/p><\\/li><\\/ol>\"}\";s:13:\"icon_whatsapp\";s:51:\"{\"path\":\"settings\\/01KT4H06CXWEYHPKY29A9R85DE.png\"}\";s:16:\"terms-conditions\";s:11828:\"{\"id\":\"<p>Terakhir diperbarui: <strong>17 Agustus 1945<\\/strong><\\/p><p>Dokumen Syarat dan Ketentuan ini (&quot;Syarat &amp; Ketentuan&quot;) mengatur penggunaan layanan jasa pembuatan website, pengembangan sistem, dan maintenance website yang disediakan oleh <strong>Mulai Digital<\\/strong> (selanjutnya disebut &quot;Perusahaan&quot;, &quot;Kami&quot;). Dengan menggunakan layanan Kami, Anda (&quot;Klien&quot;, &quot;Pengguna&quot;) dianggap telah membaca, memahami, dan menyetujui seluruh isi Syarat &amp; Ketentuan ini.<\\/p><p><strong>1. Ruang Lingkup Layanan<\\/strong><\\/p><p>Perusahaan menyediakan layanan berikut, namun tidak terbatas pada:<\\/p><ul><li><p>Jasa pembuatan dan pengembangan website<\\/p><\\/li><li><p>Pengembangan sistem berbasis web<\\/p><\\/li><li><p>Maintenance, perawatan, dan pembaruan website<\\/p><\\/li><li><p>Optimalisasi performa dan keamanan website<\\/p><\\/li><li><p>Konsultasi teknis terkait website dan sistem<\\/p><\\/li><\\/ul><p>Detail layanan, ruang lingkup pekerjaan, waktu pengerjaan, serta biaya akan dijelaskan secara rinci dalam dokumen terpisah seperti Proposal, Surat Perjanjian Kerja (SPK), atau Invoice.<\\/p><p><strong>2. Hak dan Kewajiban Klien<\\/strong><\\/p><p>Klien wajib:<\\/p><ul><li><p>Memberikan informasi, data, konten, dan materi yang dibutuhkan secara lengkap dan benar<\\/p><\\/li><li><p>Memastikan bahwa seluruh konten yang diserahkan tidak melanggar hukum atau hak pihak ketiga<\\/p><\\/li><li><p>Melakukan pembayaran sesuai dengan kesepakatan dan tenggat waktu yang ditentukan<\\/p><\\/li><li><p>Memberikan feedback atau persetujuan dalam waktu yang wajar selama proses pengerjaan<\\/p><\\/li><\\/ul><p>Klien berhak:<\\/p><ul><li><p>Mendapatkan layanan sesuai dengan ruang lingkup yang telah disepakati<\\/p><\\/li><li><p>Mendapatkan laporan progres pekerjaan sesuai kesepakatan<\\/p><\\/li><li><p>Mengajukan revisi sesuai ketentuan yang telah disepakati<\\/p><\\/li><\\/ul><p><strong>3. Hak dan Kewajiban Perusahaan<\\/strong><\\/p><p>Perusahaan wajib:<\\/p><ul><li><p>Menyelesaikan pekerjaan sesuai dengan ruang lingkup dan jadwal yang disepakati<\\/p><\\/li><li><p>Menjaga kerahasiaan data dan informasi Klien<\\/p><\\/li><li><p>Memberikan dukungan teknis sesuai paket layanan yang dipilih<\\/p><\\/li><\\/ul><p>Perusahaan berhak:<\\/p><ul><li><p>Menunda atau menghentikan layanan apabila Klien melanggar Syarat &amp; Ketentuan<\\/p><\\/li><li><p>Menolak permintaan di luar ruang lingkup pekerjaan yang telah disepakati<\\/p><\\/li><li><p>Menggunakan hasil pekerjaan sebagai portofolio, kecuali disepakati lain secara tertulis<\\/p><\\/li><\\/ul><p><strong>4. Pembayaran<\\/strong><\\/p><ul><li><p>Seluruh biaya layanan akan diinformasikan dan disepakati sebelum pekerjaan dimulai<\\/p><\\/li><li><p>Pembayaran dilakukan sesuai termin yang tercantum dalam Invoice atau perjanjian<\\/p><\\/li><li><p>Keterlambatan pembayaran dapat mengakibatkan penundaan atau penghentian layanan<\\/p><\\/li><li><p>Biaya yang telah dibayarkan tidak dapat dikembalikan (non-refundable), kecuali disepakati lain secara tertulis<\\/p><\\/li><\\/ul><p><strong>5. Revisi dan Perubahan Pekerjaan<\\/strong><\\/p><ul><li><p>Jumlah revisi yang termasuk dalam layanan akan ditentukan dalam kesepakatan awal<\\/p><\\/li><li><p>Permintaan perubahan di luar ruang lingkup awal akan dikenakan biaya tambahan<\\/p><\\/li><li><p>Revisi tidak mencakup perubahan konsep besar yang berbeda dari kesepakatan awal<\\/p><\\/li><\\/ul><p><strong>6. Maintenance dan Dukungan Teknis<\\/strong><\\/p><ul><li><p>Layanan maintenance hanya berlaku selama masa kontrak aktif<\\/p><\\/li><li><p>Maintenance mencakup perbaikan bug, pembaruan sistem, dan monitoring sesuai paket<\\/p><\\/li><li><p>Perusahaan tidak bertanggung jawab atas kerusakan akibat penggunaan di luar ketentuan atau campur tangan pihak ketiga<\\/p><\\/li><\\/ul><p><strong>7. Kepemilikan Hak Kekayaan Intelektual<\\/strong><\\/p><ul><li><p>Hak kepemilikan website atau sistem akan menjadi milik Klien setelah seluruh kewajiban pembayaran diselesaikan<\\/p><\\/li><li><p>Perusahaan berhak menyimpan salinan kode sumber untuk keperluan backup dan portofolio<\\/p><\\/li><li><p>Lisensi pihak ketiga (plugin, tema, library) mengikuti ketentuan pemilik lisensi masing-masing<\\/p><\\/li><\\/ul><p><strong>8. Kerahasiaan Informasi<\\/strong><\\/p><ul><li><p>Kedua belah pihak sepakat untuk menjaga kerahasiaan seluruh informasi yang bersifat rahasia<\\/p><\\/li><li><p>Informasi rahasia tidak boleh dibagikan kepada pihak ketiga tanpa persetujuan tertulis<\\/p><\\/li><li><p>Ketentuan ini tetap berlaku meskipun kerja sama telah berakhir<\\/p><\\/li><\\/ul><p><strong>9. Pembatasan Tanggung Jawab<\\/strong><\\/p><ul><li><p>Perusahaan tidak bertanggung jawab atas kerugian tidak langsung, kehilangan data, atau kehilangan keuntungan<\\/p><\\/li><li><p>Perusahaan tidak menjamin bahwa layanan akan bebas dari kesalahan 100%<\\/p><\\/li><li><p>Klien bertanggung jawab penuh atas penggunaan website dan konten yang ditampilkan<\\/p><\\/li><\\/ul><p><strong>10. Force Majeure<\\/strong><\\/p><p>Perusahaan tidak bertanggung jawab atas keterlambatan atau kegagalan layanan akibat keadaan di luar kendali, termasuk namun tidak terbatas pada bencana alam, gangguan jaringan, kebijakan pemerintah, atau keadaan darurat lainnya.<\\/p><p><strong>11. Penghentian Layanan<\\/strong><\\/p><ul><li><p>Kerja sama dapat dihentikan oleh salah satu pihak dengan pemberitahuan tertulis<\\/p><\\/li><li><p>Penghentian layanan tidak menghapus kewajiban pembayaran yang telah berjalan<\\/p><\\/li><li><p>Data Klien akan diserahkan sesuai kesepakatan setelah kewajiban diselesaikan<\\/p><\\/li><\\/ul><p><strong>12. Hukum yang Berlaku<\\/strong><\\/p><p>Syarat &amp; Ketentuan ini diatur dan ditafsirkan berdasarkan hukum yang berlaku di Republik Indonesia.<\\/p><p><strong>13. Perubahan Syarat &amp; Ketentuan<\\/strong><\\/p><p>Perusahaan berhak mengubah Syarat &amp; Ketentuan ini sewaktu-waktu. Perubahan akan diinformasikan melalui website resmi atau media komunikasi lainnya.<\\/p><p><strong>14. Kontak<\\/strong><\\/p><p>Apabila Anda memiliki pertanyaan terkait Syarat &amp; Ketentuan ini, silakan menghubungi:<\\/p><p><strong>Mulai Digital<\\/strong><br>Email: <a target=\\\"_blank\\\" rel=\\\"noopener noreferrer nofollow\\\" href=\\\"mailto:email@mulaidigital.com\\\"><strong>email@mulaidigital.com<\\/strong><\\/a><br>WhatsApp: <strong>+6282186087887<\\/strong><\\/p><p>Dengan menggunakan layanan Kami, Anda menyatakan telah membaca, memahami, dan menyetujui seluruh Syarat &amp; Ketentuan ini.<\\/p>\",\"en\":\"<p>Last updated: August 17, 1945<\\/p><p>This Terms and Conditions document (&quot;Terms &amp; Conditions&quot;) governs the use of website creation, system development, and maintenance services provided by Mulai Digital (hereinafter referred to as &quot;Company&quot;, &quot;We&quot;, &quot;Us&quot;). By using our services, you (&quot;Client&quot;, &quot;User&quot;) are deemed to have read, understood, and agreed to the entire contents of these Terms &amp; Conditions.<\\/p><p>1. Scope of Services<\\/p><p>The Company provides the following services, but is not limited to:<\\/p><p>Website creation and development services<\\/p><p>Web-based system development<\\/p><p>Website maintenance, care, and updates<\\/p><p>Website performance and security optimization<\\/p><p>Technical consultations related to websites and systems<\\/p><p>Service details, scope of work, completion time, and costs will be detailed in a separate document such as a Proposal, Work Agreement (SPK), or Invoice.<\\/p><p>2. Client Rights and Obligations<\\/p><p>The Client is obliged to:<\\/p><p>Provide complete and accurate information, data, content, and materials as required.<\\/p><p>Ensure that all submitted content does not violate any laws or third party rights.<\\/p><p>Make payments in accordance with the agreed-upon terms and deadlines.<\\/p><p>Provide feedback or approval within a reasonable time during the work process.<\\/p><p>The Client has the right to:<\\/p><p>Receive services according to the agreed-upon scope.<\\/p><p>Receive work progress reports as agreed.<\\/p><p>Submit revisions according to the agreed-upon terms.<\\/p><p>3. Company Rights and Obligations<\\/p><p>The Company is obliged to:<\\/p><p>Complete work according to the agreed-upon scope and schedule.<\\/p><p>Maintain the confidentiality of Client data and information.<\\/p><p>Provide technical support according to the selected service package.<\\/p><p>The Company has the right to:<\\/p><p>Delay or terminate services if the Client violates the Terms &amp; Conditions.<\\/p><p>Refuse requests outside the agreed-upon scope of work.<\\/p><p>Use work results as a portfolio, unless otherwise agreed in writing.<\\/p><p>4. Payment<\\/p><p>All service fees will be disclosed and agreed upon. Before work begins<\\/p><p>Payment is made according to the terms stated in the invoice or agreement.<\\/p><p>Late payment may result in delays or termination of services.<\\/p><p>Fees paid are non-refundable, unless otherwise agreed in writing.<\\/p><p>5. Revisions and Changes to Work<\\/p><p>The number of revisions included in the service will be determined in the initial agreement.<\\/p><p>Change requests outside the initial scope will incur an additional fee.<\\/p><p>Revisions do not include major conceptual changes that differ from the initial agreement.<\\/p><p>6. Maintenance and Technical Support<\\/p><p>Maintenance services are only valid during the active contract period.<\\/p><p>Maintenance includes bug fixes, system updates, and monitoring according to the package.<\\/p><p>The Company is not responsible for damages resulting from use outside the terms or intervention by third parties.<\\/p><p>7. Intellectual Property Ownership<\\/p><p>The website or system ownership will belong to the Client after all payment obligations have been completed.<\\/p><p>The Company reserves the right to retain a copy of the source code for backup and portfolio purposes.<\\/p><p>Third-party licenses (plugins, themes, libraries) are subject to the terms of their respective license owners.<\\/p><p>8. Confidentiality of Information<\\/p><p>Both parties agree to maintain the confidentiality of all confidential information.<\\/p><p>Confidential information may not be shared with third parties without written consent.<\\/p><p>These provisions remain in effect even after the collaboration has ended.<\\/p><p>9. Limitation of Liability<\\/p><p>The Company is not responsible for indirect losses, data loss, or lost profits.<\\/p><p>The Company does not guarantee that the service will be 100% error-free.<\\/p><p>The Client is solely responsible for the use of the website and the content displayed.<\\/p><p>10. Force Majeure<\\/p><p>The Company is not responsible for delays or service failures due to circumstances beyond its control, including but not limited to natural disasters, network disruptions, government policies, or other emergencies.<\\/p><p>11. Termination of Services<\\/p><p>The collaboration may be terminated by either party with written notice.<\\/p><p>Termination of services does not extinguish outstanding payment obligations.<\\/p><p>Client data will be transferred as agreed upon after the obligations are completed.<\\/p><p>12. Applicable Law<\\/p><p>These Terms &amp; Conditions are governed by and construed in accordance with the laws of the Republic of Indonesia.<\\/p><p>13. Changes to Terms &amp; Conditions<\\/p><p>The Company reserves the right to change these Terms &amp; Conditions at any time. Changes will be announced through the official website or other communication media.<\\/p><p>14. Contact<\\/p><p>If you have any questions regarding these Terms &amp; Conditions, please contact:<\\/p><p>Mulai Digital<\\/p><p>Email: <a target=\\\"_blank\\\" rel=\\\"noopener noreferrer nofollow\\\" href=\\\"mailto:email@mulaidigital.com\\\">email@mulaidigital.com<\\/a><\\/p><p>WhatsApp: +6282186087887<\\/p><p>By using our services, you acknowledge that you have<\\/p>\"}\";s:14:\"privacy-policy\";s:6343:\"{\"id\":\"<p>Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, melindungi, dan mengelola informasi pribadi pengguna saat mengakses dan menggunakan website kami. Dengan menggunakan website ini, Anda dianggap telah membaca, memahami, dan menyetujui seluruh isi Kebijakan Privasi ini.<\\/p><p><strong>1. Informasi yang Kami Kumpulkan<\\/strong><\\/p><p>Kami dapat mengumpulkan informasi pribadi yang Anda berikan secara sukarela, antara lain:<\\/p><ul><li><p>Nama lengkap<\\/p><\\/li><li><p>Nomor telepon \\/ WhatsApp<\\/p><\\/li><li><p>Alamat email<\\/p><\\/li><li><p>Alamat lokasi proyek (jika diperlukan)<\\/p><\\/li><li><p>Informasi lain yang Anda sampaikan melalui formulir kontak atau komunikasi langsung<\\/p><\\/li><\\/ul><p>Selain itu, kami juga dapat mengumpulkan data non-pribadi secara otomatis seperti:<\\/p><ul><li><p>Alamat IP<\\/p><\\/li><li><p>Jenis perangkat dan browser<\\/p><\\/li><li><p>Halaman yang diakses<\\/p><\\/li><li><p>Waktu dan durasi kunjungan<\\/p><\\/li><\\/ul><p>Data ini digunakan untuk keperluan analisis dan peningkatan kualitas layanan website.<\\/p><p><\\/p><p><strong>2. Penggunaan Informasi<\\/strong><\\/p><p>Informasi yang kami kumpulkan digunakan untuk:<\\/p><ul><li><p>Menanggapi pertanyaan, permintaan, atau konsultasi dari pengguna<\\/p><\\/li><li><p>Memberikan informasi terkait layanan dan produk<\\/p><\\/li><li><p>Menghubungi pengguna terkait penawaran, estimasi, atau tindak lanjut proyek<\\/p><\\/li><li><p>Meningkatkan kualitas layanan dan pengalaman pengguna<\\/p><\\/li><li><p>Keperluan internal dan administratif<\\/p><\\/li><\\/ul><p>Kami <strong>tidak menjual, menyewakan, atau membagikan informasi pribadi<\\/strong> kepada pihak ketiga tanpa izin, kecuali diwajibkan oleh hukum.<\\/p><p><\\/p><p><strong>3. Perlindungan Data<\\/strong><\\/p><p>Kami berkomitmen untuk menjaga keamanan informasi pribadi pengguna dengan menerapkan langkah-langkah pengamanan yang wajar dan sesuai standar. Namun, kami menyadari bahwa tidak ada sistem keamanan yang sepenuhnya aman, sehingga kami tidak dapat menjamin keamanan data secara mutlak.<\\/p><p><\\/p><p><strong>4. Cookie<\\/strong><\\/p><p>Website kami dapat menggunakan cookie untuk meningkatkan pengalaman pengguna. Cookie membantu kami memahami perilaku pengunjung dan mengoptimalkan tampilan serta fungsi website. Pengguna dapat mengatur browser untuk menolak cookie, namun hal ini dapat memengaruhi pengalaman penggunaan website.<\\/p><p><\\/p><p><strong>5. Tautan ke Situs Pihak Ketiga<\\/strong><\\/p><p>Website ini dapat berisi tautan ke situs pihak ketiga. Kami tidak bertanggung jawab atas konten, kebijakan privasi, atau praktik dari situs-situs tersebut. Kami menyarankan pengguna untuk membaca kebijakan privasi masing-masing situs yang dikunjungi.<\\/p><p><\\/p><p><strong>6. Perubahan Kebijakan Privasi<\\/strong><\\/p><p>Kami berhak untuk memperbarui atau mengubah Kebijakan Privasi ini sewaktu-waktu tanpa pemberitahuan sebelumnya. Perubahan akan ditampilkan di halaman ini dan berlaku sejak tanggal diperbarui.<\\/p><p><\\/p><p><strong>7. Persetujuan<\\/strong><\\/p><p>Dengan menggunakan website ini, Anda menyatakan telah membaca dan menyetujui Kebijakan Privasi ini.<\\/p><p><\\/p><p><strong>8. Hubungi Kami<\\/strong><\\/p><p>Jika Anda memiliki pertanyaan terkait Kebijakan Privasi ini, silakan hubungi kami melalui informasi kontak yang tersedia di website.<\\/p>\",\"en\":\"<p>This Privacy Policy explains how we collect, use, protect, and manage users\\u2019 personal information when accessing and using our website. By using this website, you agree to the terms outlined in this Privacy Policy.<\\/p><p><strong>1. Information We Collect<\\/strong><\\/p><p>We may collect personal information that you voluntarily provide, including but not limited to:<\\/p><ul><li><p>Full name<\\/p><\\/li><li><p>Phone number \\/ WhatsApp<\\/p><\\/li><li><p>Email address<\\/p><\\/li><li><p>Project location (if required)<\\/p><\\/li><li><p>Any other information submitted through contact forms or direct communication<\\/p><\\/li><\\/ul><p>We may also collect non-personal information automatically, such as:<\\/p><ul><li><p>IP address<\\/p><\\/li><li><p>Device and browser type<\\/p><\\/li><li><p>Pages visited<\\/p><\\/li><li><p>Visit time and duration<\\/p><\\/li><\\/ul><p>This data is used for analytical purposes and to improve website performance.<\\/p><p><\\/p><p><strong>2. Use of Information<\\/strong><\\/p><p>The information we collect is used to:<\\/p><ul><li><p>Respond to inquiries, requests, or consultations<\\/p><\\/li><li><p>Provide information about our canopy services and products<\\/p><\\/li><li><p>Contact users regarding quotations, project follow-ups, or offers<\\/p><\\/li><li><p>Improve service quality and user experience<\\/p><\\/li><li><p>Internal administrative purposes<\\/p><\\/li><\\/ul><p>We <strong>do not sell, rent, or share personal information<\\/strong> with third parties without user consent, except when required by law.<\\/p><p><\\/p><p><strong>3. Data Protection<\\/strong><\\/p><p>We take reasonable and appropriate measures to protect users\\u2019 personal information. However, no data transmission or storage system can be guaranteed to be 100% secure, and we cannot ensure absolute data security.<\\/p><p><\\/p><p><strong>4. Cookies<\\/strong><\\/p><p>Our website may use cookies to enhance user experience. Cookies help us analyze visitor behavior and optimize website functionality. Users can choose to disable cookies through browser settings, although this may affect certain features of the website.<\\/p><p><\\/p><p><strong>5. Third-Party Links<\\/strong><\\/p><p>Our website may contain links to third-party websites. We are not responsible for the content, privacy policies, or practices of these external sites. We encourage users to review the privacy policies of any third-party websites they visit.<\\/p><p><\\/p><p><strong>6. Changes to This Privacy Policy<\\/strong><\\/p><p>We reserve the right to update or modify this Privacy Policy at any time without prior notice. Any changes will be posted on this page and take effect immediately.<\\/p><p><\\/p><p><strong>7. Consent<\\/strong><\\/p><p>By using this website, you acknowledge that you have read and agreed to this Privacy Policy.<\\/p><p><\\/p><p><strong>8. Contact Us<\\/strong><\\/p><p>If you have any questions regarding this Privacy Policy, please contact us through the contact information provided on this website.<\\/p>\"}\";s:15:\"whatsapp_number\";s:59:\"{\"id\":\"<p>+628988967889<\\/p>\",\"en\":\"<p>+628988967889<\\/p>\"}\";s:13:\"primary_color\";s:17:\"{\"color\":\"green\"}\";s:5:\"about\";s:3092:\"{\"id\":\"<p>PT Lextera Survey Indonesia resmi menjadi distributor produk ComNav Technology di Indonesia. Penunjukan ini menandai langkah strategis Lextera dalam memperkuat penyediaan solusi teknologi survei presisi, khususnya untuk kebutuhan pemetaan, konstruksi, perkebunan, pertambangan, dan infrastruktur.<\\/p><p>Presiden Direktur Lextera Survey Indonesia, Rudhi Wibawa N menyampaikan bahwa melalui kerja sama tersebut, Lextera akan mendistribusikan berbagai produk unggulan ComNav Tech, termasuk perangkat Global Navigasi Satellite System (GNSS) dan solusi positioning berakurasi tinggi yang telah digunakan secara luas di berbagai negara.<\\/p><p>\\u201cJadi, kami PT Lextera Survey Indonesia merupakan main distributor ComNav Tech dari Cina. Ada pun alat-alat yang kami bawa ke Indonesia di antaranya GNSS, Global Navigasi Satellite System,\\u201d ujar Rudhi saat ditemui di kantor barunya yang baru saja diresmikan di Jakarta, Selasa (20\\/1).<\\/p><p>GNSS adalah sistem navigasi berbasis satelit yang digunakan untuk menentukan posisi, kecepatan, dan waktu secara akurat di permukaan bumi. Teknologi ini memanfaatkan sinyal dari sejumlah satelit yang mengorbit bumi dan diterima oleh perangkat penerima (receiver) untuk menghitung lokasi dengan tingkat presisi tinggi.<\\/p><p>Selain penyediaan produk, Lextera juga menyiapkan layanan purna jual, pelatihan teknis, serta dukungan teknis bagi para pengguna.<\\/p><p>\\u201cJadi di Lextera ingin bangun konsep\\u00a0<em>one stop solution<\\/em>. Jadi kami menjual alat, siapkan teknisi, kami siapkan juga jasa untuk mengkalibrasi, malah kami juga ke depan ingin membangun sebuah sistem yang berbasis\\u00a0<em>cloud<\\/em>\\u00a0yang bisa digunakan oleh pelanggan,\\u201d<\\/p>\",\"en\":\"<p>We are a professional <strong>canopy construction and installation company<\\/strong> committed to providing high-quality, durable, and aesthetically pleasing exterior protection solutions for residential and commercial buildings.<\\/p><p>With years of experience in lightweight construction and canopy structures, we serve a wide range of projects, including <strong>residential canopies, carports, shop houses, office buildings, caf\\u00e9s, restaurants, warehouses, and industrial areas<\\/strong>. We understand that a canopy is not only a functional element to protect against sun and rain, but also an important architectural feature that enhances the overall appearance and value of a building.<\\/p><p>We use <strong>premium-quality materials<\\/strong> such as light steel, hollow steel, galvanized steel, polycarbonate, alderon, spandek roofing, and tempered glass, all handled by skilled and experienced professionals. Every project is carefully planned, structurally calculated, and executed with strict safety and quality standards.<\\/p><p>Customer satisfaction is our top priority. Therefore, we consistently focus on <strong>timely project completion, clean and precise workmanship, competitive pricing, and responsive after-sales service<\\/strong>. We believe that excellent results build long-term trust and lasting relationships with our clients.<\\/p>\"}\";s:8:\"nav_home\";s:44:\"{\"id\":\"<p>Beranda<\\/p>\",\"en\":\"<p>Home<\\/p>\"}\";s:9:\"nav_about\";s:45:\"{\"id\":\"<p>Tentang<\\/p>\",\"en\":\"<p>About<\\/p>\"}\";s:12:\"nav_services\";s:48:\"{\"id\":\"<p>Layanan<\\/p>\",\"en\":\"<p>Services<\\/p>\"}\";s:9:\"nav_pages\";s:45:\"{\"id\":\"<p>Halaman<\\/p>\",\"en\":\"<p>Pages<\\/p>\"}\";s:7:\"nav_faq\";s:52:\"{\"id\":\"<p>Pertanyaan Umum<\\/p>\",\"en\":\"<p>FAQs<\\/p>\"}\";s:8:\"nav_blog\";s:42:\"{\"id\":\"<p>Blog<\\/p>\",\"en\":\"<p>Blogs<\\/p>\"}\";s:9:\"nav_terms\";s:87:\"{\"id\":\"<p>Syarat dan Ketentuan<\\/p>\",\"en\":\"<p><strong>Terms conditions<\\/strong><\\/p>\"}\";s:11:\"nav_privacy\";s:64:\"{\"id\":\"<p>Kebijakan Privasi<\\/p>\",\"en\":\"<p>Privacy Policy<\\/p>\"}\";s:11:\"nav_gallery\";s:46:\"{\"id\":\"<p>Galeri<\\/p>\",\"en\":\"<p>Gallery<\\/p>\"}\";s:11:\"nav_contact\";s:46:\"{\"id\":\"<p>Kontak<\\/p>\",\"en\":\"<p>Contact<\\/p>\"}\";s:15:\"nav_contact_cta\";s:67:\"{\"id\":\"<p>Konsultasi Gratis<\\/p>\",\"en\":\"<p>Free Consultation<\\/p>\"}\";s:11:\"about_badge\";s:53:\"{\"id\":\"<p>Tentang Kami<\\/p>\",\"en\":\"<p>About Us<\\/p>\"}\";s:17:\"about_cta_primary\";s:57:\"{\"id\":\"<p>Layanan Kami<\\/p>\",\"en\":\"<p>Our Services<\\/p>\"}\";s:19:\"about_cta_secondary\";s:60:\"{\"id\":\"<p>Lihat Selengkapnya<\\/p>\",\"en\":\"<p>Read More<\\/p>\"}\";s:9:\"logo_dark\";s:51:\"{\"path\":\"settings\\/01KE97D4Y9PBASW315AA833DBM.png\"}\";s:10:\"logo_light\";s:51:\"{\"path\":\"settings\\/01KE97CP3VYEW8Y8E81YHA81Z5.png\"}\";s:16:\"footer_copyright\";s:82:\"{\"id\":\"<p>Seluruh hak cipta dilindungi.<\\/p>\",\"en\":\"<p>All rights reserved.<\\/p>\"}\";s:13:\"service_badge\";s:75:\"{\"id\":\"<p><strong>Layanan Kami<\\/strong><\\/p>\",\"en\":\"<p>Our Services<\\/p>\"}\";s:21:\"title_section_service\";s:78:\"{\"id\":\"<p>Layanan yang Kami Sediakan<\\/p>\",\"en\":\"<p>Services We Provide<\\/p>\"}\";s:24:\"subtitle_section_service\";s:204:\"{\"id\":\"<p>Berbagai layanan  berkualitas dengan product dalam pengerjaan profesional.<\\/p>\",\"en\":\"<p>A complete range of high-quality canopy services with modern design and professional workmanship.<\\/p>\"}\";s:11:\"cta_service\";s:68:\"{\"id\":\"<p>Lihat semua layanan<\\/p>\",\"en\":\"<p>See all services<\\/p>\"}\";s:13:\"profile_image\";s:51:\"{\"path\":\"settings\\/01KE97PZX5GFJMX4N5V1N6VZF0.png\"}\";s:10:\"blog_badge\";s:56:\"{\"id\":\"<p>Produk Baru<\\/p>\",\"en\":\"<p>News Product<\\/p>\"}\";s:10:\"blog_title\";s:59:\"{\"id\":\"<p>Produk Terbaru<\\/p>\",\"en\":\"<p>News Product<\\/p>\"}\";s:13:\"blog_subtitle\";s:136:\"{\"id\":\"<p>Update terbaru tentang teknologi, inovasi digital.<\\/p>\",\"en\":\"<p>The latest updates on technology, digital innovation.<\\/p>\"}\";s:8:\"blog_cta\";s:52:\"{\"id\":\"<p>Lihat semua<\\/p>\",\"en\":\"<p>View All<\\/p>\"}\";s:23:\"blog_search_placeholder\";s:68:\"{\"id\":\"<p>Cari artikel\\u2026<\\/p>\",\"en\":\"<p>Search articles..<\\/p>\"}\";s:18:\"testimonials_badge\";s:85:\"{\"id\":\"<p><strong>Testimoni Klien<\\/strong><\\/p>\",\"en\":\"<p>Client Testimonials<\\/p>\"}\";s:21:\"testimonials_subtitle\";s:146:\"{\"id\":\"<p>Cerita nyata dari klien yang telah menggunakan layanan kami.<\\/p>\",\"en\":\"<p>Real stories from clients who have used our services.<\\/p>\"}\";s:18:\"testimonials_title\";s:61:\"{\"id\":\"<p>Apa Kata Mereka<\\/p>\",\"en\":\"<p>What They Say<\\/p>\"}\";s:13:\"contact_badge\";s:55:\"{\"id\":\"<p>Hubungi Kami<\\/p>\",\"en\":\"<p>Contact us<\\/p>\"}\";s:19:\"contact_description\";s:112:\"{\"id\":\"<p>Hubungi kami sekarang dan dapatkan solusinya<\\/p>\",\"en\":\"<p>Contact us now and get the solution<\\/p>\"}\";s:13:\"contact_title\";s:62:\"{\"id\":\"<p>Mari Terhubung<\\/p>\",\"en\":\"<p>Connect With Us<\\/p>\"}\";s:18:\"contact_info_title\";s:68:\"{\"id\":\"<p>Informasi Kontak<\\/p>\",\"en\":\"<p>Contact Information<\\/p>\"}\";s:22:\"contact_label_whatsapp\";s:49:\"{\"id\":\"<p>WhatsApp<\\/p>\",\"en\":\"<p>WhatsApp<\\/p>\"}\";s:19:\"contact_label_email\";s:43:\"{\"id\":\"<p>Email<\\/p>\",\"en\":\"<p>Email<\\/p>\"}\";s:21:\"contact_label_address\";s:46:\"{\"id\":\"<p>Alamat<\\/p>\",\"en\":\"<p>Address<\\/p>\"}\";s:18:\"contact_label_name\";s:54:\"{\"id\":\"<p>Nama Lengkap<\\/p>\",\"en\":\"<p>Full Name<\\/p>\"}\";s:24:\"contact_placeholder_name\";s:78:\"{\"id\":\"<p>masukan nama lengkap anda<\\/p>\",\"en\":\"<p>Enter your full name<\\/p>\"}\";s:24:\"contact_label_email_form\";s:79:\"{\"id\":\"<p><strong>Email<\\/strong><\\/p>\",\"en\":\"<p><strong>Email<\\/strong><\\/p>\"}\";s:25:\"contact_placeholder_email\";s:64:\"{\"id\":\"<p>contoh@mail.com<\\/p>\",\"en\":\"<p>example@mail.com<\\/p>\"}\";s:27:\"contact_label_whatsapp_form\";s:62:\"{\"id\":\"<p>Nomor WhatsApp<\\/p>\",\"en\":\"<p>WhatsApp Number<\\/p>\"}\";s:28:\"contact_placeholder_whatsapp\";s:61:\"{\"id\":\"<p>+6282186087887<\\/p>\",\"en\":\"<p>+6282186087887<\\/p>\"}\";s:21:\"contact_label_subject\";s:64:\"{\"id\":\"<p><strong>Subjek<\\/strong><\\/p>\",\"en\":\"<p>Subject<\\/p>\"}\";s:27:\"contact_placeholder_subject\";s:290:\"{\"id\":\"<p>Contoh : Saya ingin informasi lebih lanjut mengenai  produck <a target=\\\"_blank\\\" rel=\\\"noopener noreferrer nofollow\\\" href=\\\"http:\\/\\/localhost:8000\\/admin\\\"><strong>Lextera Survey Indonesia<\\/strong><\\/a><\\/p>\",\"en\":\"<p>Example: I would like more information regarding...<\\/p>\"}\";s:27:\"contact_placeholder_message\";s:82:\"{\"id\":\"<p>Tuliskan pesan Anda di sini<\\/p>\",\"en\":\"<p>Type your message here<\\/p>\"}\";s:21:\"contact_button_submit\";s:58:\"{\"id\":\"<p>Kirim Pesan<\\/p>\",\"en\":\"<p>Submit Message<\\/p>\"}\";s:14:\"footer_tagline\";s:97:\"{\"id\":\"<p>Mewujudkan Product yang Berkualitas .<\\/p>\",\"en\":\"<p>Realizing Quality Products.<\\/p>\"}\";s:16:\"footer_nav_title\";s:51:\"{\"id\":\"<p>Navigasi<\\/p>\",\"en\":\"<p>Navigation<\\/p>\"}\";s:17:\"footer_help_title\";s:57:\"{\"id\":\"<p>Butuh Bantuan?<\\/p>\",\"en\":\"<p>Need Help?<\\/p>\"}\";s:20:\"footer_contact_title\";s:46:\"{\"id\":\"<p>Kontak<\\/p>\",\"en\":\"<p>Contact<\\/p>\"}\";s:17:\"service_cta_modal\";s:59:\"{\"id\":\"<p>Lihat Selengkapnya<\\/p>\",\"en\":\"<p>See more<\\/p>\"}\";s:16:\"blog_empty_title\";s:75:\"{\"id\":\"<p>Belum ada artikel<\\/p>\",\"en\":\"<p>There are no articles yet<\\/p>\"}\";s:22:\"blog_empty_description\";s:141:\"{\"id\":\"<p>Artikel baru akan muncul di sini setelah dipublikasikan.<\\/p>\",\"en\":\"<p>New articles will appear here as they are published.<\\/p>\"}\";s:20:\"blog_published_label\";s:56:\"{\"id\":\"<p>Dipublikasikan<\\/p>\",\"en\":\"<p>Published<\\/p>\"}\";s:16:\"blog_share_label\";s:45:\"{\"id\":\"<p>Bagikan<\\/p>\",\"en\":\"<p>Share<\\/p>\"}\";s:15:\"blog_back_label\";s:60:\"{\"id\":\"<p>Kembali ke Blog<\\/p>\",\"en\":\"<p>Back to Blog<\\/p>\"}\";s:18:\"blog_related_title\";s:64:\"{\"id\":\"<p>Artikel Terkait<\\/p>\",\"en\":\"<p>Related Articles<\\/p>\"}\";s:13:\"blog_view_all\";s:52:\"{\"id\":\"<p>Lihat semua<\\/p>\",\"en\":\"<p>View all<\\/p>\"}\";s:9:\"faq_badge\";s:40:\"{\"id\":\"<p>FAQ<\\/p>\",\"en\":\"<p>FAQs<\\/p>\"}\";s:9:\"faq_title\";s:90:\"{\"id\":\"<p>Pertanyaan yang Sering Diajukan<\\/p>\",\"en\":\"<p>Frequently Asked Questions<\\/p>\"}\";s:12:\"faq_subtitle\";s:219:\"{\"id\":\"<p>Temukan jawaban atas pertanyaan umum seputar layanan, proses, dan penggunaan website kami.<\\/p>\",\"en\":\"<p>Find answers to frequently asked questions about our services, processes and use of our website.<\\/p>\"}\";s:11:\"terms_title\";s:73:\"{\"id\":\"<p>Syarat dan Ketentuan<\\/p>\",\"en\":\"<p>Terms and Conditions<\\/p>\"}\";s:20:\"privacy-policy_title\";s:64:\"{\"id\":\"<p>Kebijakan Privasi<\\/p>\",\"en\":\"<p>Privacy Policy<\\/p>\"}\";s:13:\"gallery_badge\";s:46:\"{\"id\":\"<p>Galeri<\\/p>\",\"en\":\"<p>Gallery<\\/p>\"}\";s:13:\"gallery_title\";s:57:\"{\"id\":\"<p>Dokumentasi<\\/p>\",\"en\":\"<p>Documentation<\\/p>\"}\";s:19:\"gallery_description\";s:171:\"{\"id\":\"<p>Kumpulan dokumentasi kegiatan, proyek, dan momen terbaik kami.<\\/p>\",\"en\":\"<p>A collection of documentation of our activities, projects, and best moments.<\\/p>\"}\";s:26:\"gallery_search_placeholder\";s:64:\"{\"id\":\"<p>Cari galeri...<\\/p>\",\"en\":\"<p>Search gallery...<\\/p>\"}\";s:19:\"gallery_empty_title\";s:84:\"{\"id\":\"<p>Tidak ada galeri yang ditemukan.<\\/p>\",\"en\":\"<p>No galleries found.<\\/p>\"}\";s:25:\"gallery_empty_description\";s:163:\"{\"id\":\"<p>Coba gunakan kata kunci pencarian yang berbeda atau periksa kembali nanti.<\\/p>\",\"en\":\"<p>Try using different search keywords or check back later.<\\/p>\"}\";s:18:\"gallery_back_label\";s:65:\"{\"id\":\"<p>Kembali ke Galeri<\\/p>\",\"en\":\"<p>Back to Gallery<\\/p>\"}\";s:15:\"breadcrumb_home\";s:44:\"{\"id\":\"<p>Beranda<\\/p>\",\"en\":\"<p>Home<\\/p>\"}\";s:11:\"nav_product\";s:46:\"{\"id\":\"<p>Produk<\\/p>\",\"en\":\"<p>Product<\\/p>\"}\";s:13:\"product_badge\";s:46:\"{\"id\":\"<p>Produk<\\/p>\",\"en\":\"<p>Product<\\/p>\"}\";s:13:\"product_title\";s:56:\"{\"id\":\"<p>Produk Kami<\\/p>\",\"en\":\"<p>Our Products<\\/p>\"}\";s:26:\"product_search_placeholder\";s:65:\"{\"id\":\"<p>Cari produk...<\\/p>\",\"en\":\"<p>Search products...<\\/p>\"}\";s:16:\"product_subtitle\";s:123:\"{\"id\":\"<p>Produk Lextera Survey Indonesia berkulitas<\\/p>\",\"en\":\"<p>Lextera Survey Indonesia&#039;s quality products<\\/p>\"}\";s:19:\"product_empty_title\";s:74:\"{\"id\":\"<p>Belum ada produk<\\/p>\",\"en\":\"<p>There are no products yet<\\/p>\"}\";s:25:\"product_empty_description\";s:142:\"{\"id\":\"<p>Produk baru akan muncul di sini setelah dipublikasikan.<\\/p>\",\"en\":\"<p>New products will appear here once they are published.<\\/p>\"}\";s:19:\"product_share_label\";s:45:\"{\"id\":\"<p>Bagikan<\\/p>\",\"en\":\"<p>Share<\\/p>\"}\";s:11:\"product_cta\";s:69:\"{\"id\":\"<p>Pesan via Whatsapp<\\/p>\",\"en\":\"<p>Order via Whatsapp<\\/p>\"}\";s:16:\"product_view_all\";s:52:\"{\"id\":\"<p>Lihat semua<\\/p>\",\"en\":\"<p>View all<\\/p>\"}\";s:13:\"partner_badge\";s:81:\"{\"id\":\"<p>Mitra Kami dan Pelanggan<\\/p>\",\"en\":\"<p>Our Partners And Clients<\\/p>\"}\";s:13:\"partner_title\";s:89:\"{\"id\":\"<p>Dipercaya oleh Mitra Terbaik<\\/p>\",\"en\":\"<p>Trusted by the Best Partners<\\/p>\"}\";s:16:\"partner_subtitle\";s:178:\"{\"id\":\"<p>Kami bekerja sama dengan berbagai partner untuk menghadirkan solusi terbaik.<\\/p>\",\"en\":\"<p>We work together with various partners to present the best solutions.<\\/p>\"}\";s:10:\"Color_home\";s:18:\"{\"color\":\"yellow\"}\";}', 2097219373),
('laravel-cache-settings.url.favicon', 's:69:\"http://localhost:8000/storage/settings/01KE97DXCN3B6Z5MBVAJ8RFSXY.png\";', 2097161861),
('laravel-cache-settings.url.logo', 's:54:\"http://localhost:8000/assets-default/settings/logo.png\";', 2097161861),
('laravel-cache-settings.url.logo_dark', 's:69:\"http://localhost:8000/storage/settings/01KE97D4Y9PBASW315AA833DBM.png\";', 2097161861),
('laravel-cache-settings.url.logo_light', 's:69:\"http://localhost:8000/storage/settings/01KE97CP3VYEW8Y8E81YHA81Z5.png\";', 2097161861),
('laravel-cache-settings.url.og_image', 's:54:\"http://localhost:8000/assets-default/settings/logo.png\";', 2097161861);
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:169:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:12:\"manage pages\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:15:\"manage settings\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:21:\"view contact messages\";s:1:\"c\";s:3:\"web\";}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:12:\"ViewAny:Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:9:\"View:Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:11:\"Create:Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:11:\"Update:Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:11:\"Delete:Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:12:\"Restore:Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:16:\"ForceDelete:Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:19:\"ForceDeleteAny:Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:15:\"RestoreAny:Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:14:\"Replicate:Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:12:\"Reorder:Role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:12:\"ViewAny:Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:9:\"View:Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:11:\"Create:Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:11:\"Update:Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:11:\"Delete:Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:12:\"Restore:Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:16:\"ForceDelete:Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:19:\"ForceDeleteAny:Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:15:\"RestoreAny:Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:14:\"Replicate:Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:12:\"Reorder:Page\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:22:\"ViewAny:ContactMessage\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:19:\"View:ContactMessage\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:21:\"Create:ContactMessage\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:21:\"Update:ContactMessage\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:21:\"Delete:ContactMessage\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:22:\"Restore:ContactMessage\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:26:\"ForceDelete:ContactMessage\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:29:\"ForceDeleteAny:ContactMessage\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:25:\"RestoreAny:ContactMessage\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:24:\"Replicate:ContactMessage\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:22:\"Reorder:ContactMessage\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:36;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:19:\"ViewAny:HeroSection\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:37;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:16:\"View:HeroSection\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:38;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:18:\"Create:HeroSection\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:18:\"Update:HeroSection\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:40;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:18:\"Delete:HeroSection\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:41;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:19:\"Restore:HeroSection\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:42;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:23:\"ForceDelete:HeroSection\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:43;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:26:\"ForceDeleteAny:HeroSection\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:44;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:22:\"RestoreAny:HeroSection\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:45;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:21:\"Replicate:HeroSection\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:46;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:19:\"Reorder:HeroSection\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:47;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:11:\"ViewAny:Seo\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:48;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:8:\"View:Seo\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:49;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:10:\"Create:Seo\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:50;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:10:\"Update:Seo\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:51;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:10:\"Delete:Seo\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:52;a:4:{s:1:\"a\";i:53;s:1:\"b\";s:11:\"Restore:Seo\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:53;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:15:\"ForceDelete:Seo\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:54;a:4:{s:1:\"a\";i:55;s:1:\"b\";s:18:\"ForceDeleteAny:Seo\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:55;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:14:\"RestoreAny:Seo\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:56;a:4:{s:1:\"a\";i:57;s:1:\"b\";s:13:\"Replicate:Seo\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:57;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:11:\"Reorder:Seo\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:58;a:4:{s:1:\"a\";i:59;s:1:\"b\";s:15:\"ViewAny:Setting\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:59;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:12:\"View:Setting\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:60;a:4:{s:1:\"a\";i:61;s:1:\"b\";s:14:\"Create:Setting\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:61;a:4:{s:1:\"a\";i:62;s:1:\"b\";s:14:\"Update:Setting\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:62;a:4:{s:1:\"a\";i:63;s:1:\"b\";s:14:\"Delete:Setting\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:63;a:4:{s:1:\"a\";i:64;s:1:\"b\";s:15:\"Restore:Setting\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:64;a:4:{s:1:\"a\";i:65;s:1:\"b\";s:19:\"ForceDelete:Setting\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:65;a:4:{s:1:\"a\";i:66;s:1:\"b\";s:22:\"ForceDeleteAny:Setting\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:66;a:4:{s:1:\"a\";i:67;s:1:\"b\";s:18:\"RestoreAny:Setting\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:67;a:4:{s:1:\"a\";i:68;s:1:\"b\";s:17:\"Replicate:Setting\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:68;a:4:{s:1:\"a\";i:69;s:1:\"b\";s:15:\"Reorder:Setting\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:69;a:4:{s:1:\"a\";i:70;s:1:\"b\";s:12:\"ViewAny:User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:70;a:4:{s:1:\"a\";i:71;s:1:\"b\";s:9:\"View:User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:71;a:4:{s:1:\"a\";i:72;s:1:\"b\";s:11:\"Create:User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:72;a:4:{s:1:\"a\";i:73;s:1:\"b\";s:11:\"Update:User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:73;a:4:{s:1:\"a\";i:74;s:1:\"b\";s:11:\"Delete:User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:74;a:4:{s:1:\"a\";i:75;s:1:\"b\";s:12:\"Restore:User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:75;a:4:{s:1:\"a\";i:76;s:1:\"b\";s:16:\"ForceDelete:User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:76;a:4:{s:1:\"a\";i:77;s:1:\"b\";s:19:\"ForceDeleteAny:User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:77;a:4:{s:1:\"a\";i:78;s:1:\"b\";s:15:\"RestoreAny:User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:78;a:4:{s:1:\"a\";i:79;s:1:\"b\";s:14:\"Replicate:User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:79;a:4:{s:1:\"a\";i:80;s:1:\"b\";s:12:\"Reorder:User\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:80;a:4:{s:1:\"a\";i:81;s:1:\"b\";s:19:\"ViewAny:Testimonial\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:81;a:4:{s:1:\"a\";i:82;s:1:\"b\";s:16:\"View:Testimonial\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:82;a:4:{s:1:\"a\";i:83;s:1:\"b\";s:18:\"Create:Testimonial\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:83;a:4:{s:1:\"a\";i:84;s:1:\"b\";s:18:\"Update:Testimonial\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:84;a:4:{s:1:\"a\";i:85;s:1:\"b\";s:18:\"Delete:Testimonial\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:85;a:4:{s:1:\"a\";i:86;s:1:\"b\";s:19:\"Restore:Testimonial\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:86;a:4:{s:1:\"a\";i:87;s:1:\"b\";s:23:\"ForceDelete:Testimonial\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:87;a:4:{s:1:\"a\";i:88;s:1:\"b\";s:26:\"ForceDeleteAny:Testimonial\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:88;a:4:{s:1:\"a\";i:89;s:1:\"b\";s:22:\"RestoreAny:Testimonial\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:89;a:4:{s:1:\"a\";i:90;s:1:\"b\";s:21:\"Replicate:Testimonial\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:90;a:4:{s:1:\"a\";i:91;s:1:\"b\";s:19:\"Reorder:Testimonial\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:91;a:4:{s:1:\"a\";i:92;s:1:\"b\";s:15:\"ViewAny:Service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:92;a:4:{s:1:\"a\";i:93;s:1:\"b\";s:12:\"View:Service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:93;a:4:{s:1:\"a\";i:94;s:1:\"b\";s:14:\"Create:Service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:94;a:4:{s:1:\"a\";i:95;s:1:\"b\";s:14:\"Update:Service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:95;a:4:{s:1:\"a\";i:96;s:1:\"b\";s:14:\"Delete:Service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:96;a:4:{s:1:\"a\";i:97;s:1:\"b\";s:15:\"Restore:Service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:97;a:4:{s:1:\"a\";i:98;s:1:\"b\";s:19:\"ForceDelete:Service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:98;a:4:{s:1:\"a\";i:99;s:1:\"b\";s:22:\"ForceDeleteAny:Service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:99;a:4:{s:1:\"a\";i:100;s:1:\"b\";s:18:\"RestoreAny:Service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:100;a:4:{s:1:\"a\";i:101;s:1:\"b\";s:17:\"Replicate:Service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:101;a:4:{s:1:\"a\";i:102;s:1:\"b\";s:15:\"Reorder:Service\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:102;a:4:{s:1:\"a\";i:103;s:1:\"b\";s:15:\"ViewAny:Gallery\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:103;a:4:{s:1:\"a\";i:104;s:1:\"b\";s:12:\"View:Gallery\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:104;a:4:{s:1:\"a\";i:105;s:1:\"b\";s:14:\"Create:Gallery\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:105;a:4:{s:1:\"a\";i:106;s:1:\"b\";s:14:\"Update:Gallery\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:106;a:4:{s:1:\"a\";i:107;s:1:\"b\";s:14:\"Delete:Gallery\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:107;a:4:{s:1:\"a\";i:108;s:1:\"b\";s:15:\"Restore:Gallery\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:108;a:4:{s:1:\"a\";i:109;s:1:\"b\";s:19:\"ForceDelete:Gallery\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:109;a:4:{s:1:\"a\";i:110;s:1:\"b\";s:22:\"ForceDeleteAny:Gallery\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:110;a:4:{s:1:\"a\";i:111;s:1:\"b\";s:18:\"RestoreAny:Gallery\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:111;a:4:{s:1:\"a\";i:112;s:1:\"b\";s:17:\"Replicate:Gallery\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:112;a:4:{s:1:\"a\";i:113;s:1:\"b\";s:15:\"Reorder:Gallery\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:113;a:4:{s:1:\"a\";i:114;s:1:\"b\";s:11:\"ViewAny:Faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:114;a:4:{s:1:\"a\";i:115;s:1:\"b\";s:8:\"View:Faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:115;a:4:{s:1:\"a\";i:116;s:1:\"b\";s:10:\"Create:Faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:116;a:4:{s:1:\"a\";i:117;s:1:\"b\";s:10:\"Update:Faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:117;a:4:{s:1:\"a\";i:118;s:1:\"b\";s:10:\"Delete:Faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:118;a:4:{s:1:\"a\";i:119;s:1:\"b\";s:11:\"Restore:Faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:119;a:4:{s:1:\"a\";i:120;s:1:\"b\";s:15:\"ForceDelete:Faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:120;a:4:{s:1:\"a\";i:121;s:1:\"b\";s:18:\"ForceDeleteAny:Faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:121;a:4:{s:1:\"a\";i:122;s:1:\"b\";s:14:\"RestoreAny:Faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:122;a:4:{s:1:\"a\";i:123;s:1:\"b\";s:13:\"Replicate:Faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:123;a:4:{s:1:\"a\";i:124;s:1:\"b\";s:11:\"Reorder:Faq\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:124;a:4:{s:1:\"a\";i:125;s:1:\"b\";s:15:\"ViewAny:Product\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:125;a:4:{s:1:\"a\";i:126;s:1:\"b\";s:12:\"View:Product\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:126;a:4:{s:1:\"a\";i:127;s:1:\"b\";s:14:\"Create:Product\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:127;a:4:{s:1:\"a\";i:128;s:1:\"b\";s:14:\"Update:Product\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:128;a:4:{s:1:\"a\";i:129;s:1:\"b\";s:14:\"Delete:Product\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:129;a:4:{s:1:\"a\";i:130;s:1:\"b\";s:15:\"Restore:Product\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:130;a:4:{s:1:\"a\";i:131;s:1:\"b\";s:19:\"ForceDelete:Product\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:131;a:4:{s:1:\"a\";i:132;s:1:\"b\";s:22:\"ForceDeleteAny:Product\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:132;a:4:{s:1:\"a\";i:133;s:1:\"b\";s:18:\"RestoreAny:Product\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:133;a:4:{s:1:\"a\";i:134;s:1:\"b\";s:17:\"Replicate:Product\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:134;a:4:{s:1:\"a\";i:135;s:1:\"b\";s:15:\"Reorder:Product\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:135;a:4:{s:1:\"a\";i:136;s:1:\"b\";s:22:\"View:DashboardOverview\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:136;a:4:{s:1:\"a\";i:137;s:1:\"b\";s:18:\"ViewAny:OurPartner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:137;a:4:{s:1:\"a\";i:138;s:1:\"b\";s:15:\"View:OurPartner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:138;a:4:{s:1:\"a\";i:139;s:1:\"b\";s:17:\"Create:OurPartner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:139;a:4:{s:1:\"a\";i:140;s:1:\"b\";s:17:\"Update:OurPartner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:140;a:4:{s:1:\"a\";i:141;s:1:\"b\";s:17:\"Delete:OurPartner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:141;a:4:{s:1:\"a\";i:142;s:1:\"b\";s:18:\"Restore:OurPartner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:142;a:4:{s:1:\"a\";i:143;s:1:\"b\";s:22:\"ForceDelete:OurPartner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:143;a:4:{s:1:\"a\";i:144;s:1:\"b\";s:25:\"ForceDeleteAny:OurPartner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:144;a:4:{s:1:\"a\";i:145;s:1:\"b\";s:21:\"RestoreAny:OurPartner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:145;a:4:{s:1:\"a\";i:146;s:1:\"b\";s:20:\"Replicate:OurPartner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:146;a:4:{s:1:\"a\";i:147;s:1:\"b\";s:18:\"Reorder:OurPartner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:147;a:4:{s:1:\"a\";i:148;s:1:\"b\";s:23:\"ViewAny:ProductCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:148;a:4:{s:1:\"a\";i:149;s:1:\"b\";s:20:\"View:ProductCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:149;a:4:{s:1:\"a\";i:150;s:1:\"b\";s:22:\"Create:ProductCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:150;a:4:{s:1:\"a\";i:151;s:1:\"b\";s:22:\"Update:ProductCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:151;a:4:{s:1:\"a\";i:152;s:1:\"b\";s:22:\"Delete:ProductCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:152;a:4:{s:1:\"a\";i:153;s:1:\"b\";s:23:\"Restore:ProductCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:153;a:4:{s:1:\"a\";i:154;s:1:\"b\";s:27:\"ForceDelete:ProductCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:154;a:4:{s:1:\"a\";i:155;s:1:\"b\";s:30:\"ForceDeleteAny:ProductCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:155;a:4:{s:1:\"a\";i:156;s:1:\"b\";s:26:\"RestoreAny:ProductCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:156;a:4:{s:1:\"a\";i:157;s:1:\"b\";s:25:\"Replicate:ProductCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:157;a:4:{s:1:\"a\";i:158;s:1:\"b\";s:23:\"Reorder:ProductCategory\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:158;a:4:{s:1:\"a\";i:159;s:1:\"b\";s:14:\"ViewAny:Career\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:159;a:4:{s:1:\"a\";i:160;s:1:\"b\";s:11:\"View:Career\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:160;a:4:{s:1:\"a\";i:161;s:1:\"b\";s:13:\"Create:Career\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:161;a:4:{s:1:\"a\";i:162;s:1:\"b\";s:13:\"Update:Career\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:162;a:4:{s:1:\"a\";i:163;s:1:\"b\";s:13:\"Delete:Career\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:163;a:4:{s:1:\"a\";i:164;s:1:\"b\";s:14:\"Restore:Career\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:164;a:4:{s:1:\"a\";i:165;s:1:\"b\";s:18:\"ForceDelete:Career\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:165;a:4:{s:1:\"a\";i:166;s:1:\"b\";s:21:\"ForceDeleteAny:Career\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:166;a:4:{s:1:\"a\";i:167;s:1:\"b\";s:17:\"RestoreAny:Career\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:167;a:4:{s:1:\"a\";i:168;s:1:\"b\";s:16:\"Replicate:Career\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:168;a:4:{s:1:\"a\";i:169;s:1:\"b\";s:14:\"Reorder:Career\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:6:\"editor\";s:1:\"c\";s:3:\"web\";}}}', 1781998745);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `description_en` longtext DEFAULT NULL,
  `application_url` varchar(255) DEFAULT NULL,
  `open_date` date DEFAULT NULL,
  `close_date` date DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `title_en`, `slug`, `thumbnail`, `description`, `description_en`, `application_url`, `open_date`, `close_date`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(2, 'Staff Administratif', NULL, 'staff-administratif', 'careers/01KT4HEPXW3R0213ZT9VDCXAZ6.png', '<p>PT Kertas Padalarang membuka kesempatan bagi individu yang teliti, bertanggung jawab, dan memiliki kemampuan administrasi yang baik untuk bergabung sebagai <strong>Staf Administrasi</strong>. Posisi ini bertugas mendukung operasional perusahaan melalui pengelolaan dokumen, pengarsipan data, penyusunan laporan, serta koordinasi administrasi antar bagian.</p><h3>Kualifikasi</h3><ul><li><p>Pendidikan minimal D3/S1 semua jurusan.</p></li><li><p>Memiliki kemampuan administrasi dan pengarsipan dokumen yang baik.</p></li><li><p>Mampu mengoperasikan Microsoft Office (Word, Excel, PowerPoint).</p></li><li><p>Memiliki kemampuan komunikasi yang baik.</p></li><li><p>Teliti, disiplin, dan bertanggung jawab.</p></li><li><p>Mampu bekerja secara individu maupun tim.</p></li><li><p>Memiliki kemampuan manajemen waktu yang baik.</p></li></ul><h3>Tanggung Jawab</h3><ul><li><p>Mengelola dan mengarsipkan dokumen perusahaan.</p></li><li><p>Membantu penyusunan laporan administrasi.</p></li><li><p>Melakukan input dan pemeliharaan data.</p></li><li><p>Mendukung kebutuhan administrasi operasional perusahaan.</p></li><li><p>Berkoordinasi dengan departemen terkait dalam pengelolaan dokumen dan data.</p></li></ul><h3>Benefit</h3><ul><li><p>Gaji kompetitif sesuai kualifikasi.</p></li><li><p>Kesempatan pengembangan karier.</p></li><li><p>Lingkungan kerja profesional dan kolaboratif.</p></li><li><p>Program pelatihan dan pengembangan kompetensi.</p></li><li><p>Fasilitas kerja yang mendukung produktivitas.</p></li></ul>', '<p></p>', 'https://forms.gle/exampleCareerForm', '2026-06-02', '2026-06-30', 1, 1, '2026-06-02 16:07:49', '2026-06-02 16:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp_number` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `question_en` varchar(255) DEFAULT NULL,
  `answer` text NOT NULL,
  `answer_en` text DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `order_column` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `question_en`, `answer`, `answer_en`, `is_published`, `order_column`, `created_at`, `updated_at`) VALUES
(3, 'Apa saja layanan yang disediakan oleh perusahaan ini?', 'What services does this company provide?', 'Kami menyediakan layanan pembuatan website, pengembangan sistem berbasis web, maintenance website, optimasi performa, serta konsultasi teknis sesuai kebutuhan bisnis Anda.', 'We provide website creation services, web-based system development, website maintenance, performance optimization, and technical consultation according to your business needs.', 1, 1, '2025-12-23 05:00:51', '2025-12-23 05:03:44'),
(6, 'Jenis kanopi apa saja yang tersedia?', 'What types of canopies do you offer?', 'Kami melayani berbagai jenis kanopi seperti kanopi baja ringan, kanopi Alderon, kanopi polycarbonate, kanopi besi hollow, kanopi carport, dan area parkir. Semua jenis kanopi dapat disesuaikan dengan desain, ukuran, dan kebutuhan bangunan Anda.', 'We offer various types of canopies including lightweight steel canopies, Alderon canopies, polycarbonate canopies, hollow steel canopies, carport canopies, and parking area canopies. All designs can be customized to your building’s needs.', 1, 1, '2026-01-06 02:11:59', '2026-01-06 02:11:59'),
(7, 'Berapa lama proses pemasangan kanopi?', 'How long does the canopy installation process take?', 'Durasi pemasangan tergantung pada ukuran dan jenis kanopi. Umumnya, pemasangan membutuhkan waktu 1–3 hari kerja setelah desain dan material disepakati. Kami selalu mengutamakan hasil yang rapi dan aman.', 'Installation time depends on the canopy size and material. Generally, the process takes 1–3 working days after the design and materials are approved. We always prioritize neat and safe workmanship.', 1, 3, '2026-01-06 02:12:26', '2026-01-06 02:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `tags` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`tags`)),
  `tags_en` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`tags_en`)),
  `order_column` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `title_en`, `description`, `description_en`, `thumbnail`, `images`, `is_published`, `tags`, `tags_en`, `order_column`, `created_at`, `updated_at`) VALUES
(5, 'MS-SAR5000', NULL, 'MS-SAR5000', NULL, 'galleries/thumbnails/01KVFE49MMXD62SMFQXQ5Z3M9A.png', '[\"galleries\\/images\\/01KVFE49NC6V54KSWP97FX0DZQ.png\",\"galleries\\/images\\/01KVFEA3KTR0ZCWH9TXPTV932F.png\"]', 1, '[\"500000\"]', '[]', 1, '2026-06-19 07:57:03', '2026-06-19 08:00:13'),
(6, 'N2 GNSS', NULL, 'N2 GNSS', NULL, 'galleries/thumbnails/01KVFEKGYSEWTNWS2PNEZ5NP24.png', '[]', 1, '[\"Rp.15.000.000\"]', '[]', 2, '2026-06-19 08:05:22', '2026-06-19 08:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `hero_sections`
--

CREATE TABLE `hero_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_text_en` varchar(255) DEFAULT NULL,
  `button_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_sections`
--

INSERT INTO `hero_sections` (`id`, `title`, `title_en`, `description`, `description_en`, `image`, `button_text`, `button_text_en`, `button_url`, `created_at`, `updated_at`) VALUES
(11, 'Monitoring Radar Ms-Sar5000', 'Sinognss Comnav Slope Monitoring Radar Ms-Sar5000', 'MS-SAR5000 adalah radar pemantauan stabilitas lereng canggih yang dikembangkan oleh ComNav Technology Co., Ltd. Sistem mutakhir ini dirancang khusus untuk pemantauan pergeseran waktu nyata dengan presisi tinggi, memberikan kemampuan peringatan dini untuk potensi longsor. Teknologinya yang tangguh memungkinkan deteksi akurat terhadap pergerakan sekecil apa pun, menjadikannya alat penting untuk memastikan keselamatan di daerah rawan longsor, lokasi pertambangan, zona konstruksi, dan lingkungan geologis tidak stabil lainnya.', 'The MS-SAR5000 is an advanced slope stability monitoring radar developed by ComNav Technology Co., Ltd. This cutting-edge system is specifically designed for high-precision, real-time displacement monitoring, providing early warning capabilities for potential slope failures. Its robust technology enables accurate detection of minute movements, making it an essential tool for ensuring safety in areas prone to landslides, mining sites, construction zones, and other geologically unstable environments.', 'hero/test5.png', 'Konsultasi Gratis Sekarang', 'Free Consultation Now', '/contacts', '2026-06-19 04:13:25', '2026-06-19 04:18:38'),
(13, 'GPS Geodetik SinoGNSS COMNAV N2 GNSS Palm RTK', 'GPS Geodetik SinoGNSS COMNAV N2 GNSS Palm RTK', 'Paket pembelian :\n1x set Base N2 SinoGNSS\n1x set Rover N2 SinoGNSS\n1x Controller R60\n1x Radio Eksternal CDL5\n1x Pole Carbon\n2x Alumunium Tripod\nGaransi 12 Bulan\nGratis Pelatihan di kantor kami', 'Purchase package:\n1x SinoGNSS N2 Base Set\n1x SinoGNSS N2 Rover Set\n1x R60 Controller\n1x CDL5 External Radio\n1x Carbon Pole\n2x Aluminum Tripods\n12-Month Warranty\nFree Training at our office', 'hero/test9.png', 'Konsultasi Gratis Sekarang', 'Free Consultation Now', '/contacts', '2026-06-19 10:03:07', '2026-06-19 10:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_11_06_031336_create_settings_table', 1),
(5, '2025_11_06_031402_create_pages_table', 1),
(6, '2025_11_06_032052_create_hero_sections_table', 1),
(7, '2025_11_06_032106_create_seos_table', 1),
(8, '2025_11_06_032326_create_contact_messages_table', 1),
(9, '2025_11_06_032445_create_permission_tables', 1),
(10, '2025_12_11_165115_create_testimonials_table', 2),
(11, '2025_12_12_061505_create_services_table', 3),
(12, '2025_12_12_161657_create_galleries_table', 4),
(13, '2025_12_15_034424_create_faqs_table', 5),
(14, '2025_12_16_062755_create_contact_messages_table', 6),
(15, '2025_12_19_115600_add_color_to_settings_type_enum', 7),
(16, '2025_12_21_213543_add_english_fields_to_hero_sections_table', 8),
(17, '2025_12_21_222905_alter_settings_value_to_json', 9),
(18, '2025_12_22_091800_add_category_to_settings_table', 10),
(19, '2025_12_22_154355_add_en_fields_to_services_table', 11),
(20, '2025_12_22_163847_add_english_columns_to_pages_table', 12),
(21, '2025_12_23_083926_add_english_fields_to_testimonials_table', 13),
(22, '2025_12_23_115246_add_english_fields_to_faqs_table', 14),
(23, '2025_12_23_122238_add_english_fields_to_galleries_table', 15),
(24, '2025_12_24_100509_create_products_table', 16),
(25, '2025_12_27_220128_create_our_partners_table', 17),
(26, '2026_06_02_000001_create_product_categories_table', 18),
(27, '2026_06_02_000002_create_careers_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 4),
(1, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `our_partners`
--

CREATE TABLE `our_partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_partners`
--

INSERT INTO `our_partners` (`id`, `name`, `logo`, `is_active`, `order`, `created_at`, `updated_at`) VALUES
(1, 'BCA', 'partners/01KDG5T494420VZ3F8CS7GPTFY.png', 1, 1, '2025-12-27 15:11:10', '2025-12-27 15:11:10'),
(7, 'Wika', 'partners/01KDPRHWDQ6PYBR6E4FW2359D5.png', 1, 2, '2025-12-30 04:34:09', '2025-12-30 04:34:09'),
(8, 'nindya', 'partners/01KDPRM3FMSARXBZYP8B2V6KWT.png', 1, 3, '2025-12-30 04:35:22', '2025-12-30 04:35:22'),
(9, 'waskita', 'partners/01KDPRMJ5ZMT96SKGN9TGZ3GD1.png', 1, 4, '2025-12-30 04:35:37', '2025-12-30 04:35:37'),
(10, 'id food', 'partners/01KDPRN2PQGH5Y44C42ETTV6E5.png', 1, 5, '2025-12-30 04:35:54', '2025-12-30 04:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `content_en` longtext DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `publish_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `title_en`, `slug`, `thumbnail`, `content`, `content_en`, `is_published`, `publish_at`, `created_by`, `created_at`, `updated_at`) VALUES
(13, 'Panduan Lengkap Memilih Kanopi yang Tepat untuk Rumah & Bangunan Komersial', 'Complete Guide to Choosing the Right Canopy for Homes & Commercial Buildings', 'panduan-lengkap-memilih-kanopi-yang-tepat-untuk-rumah-bangunan-komersial', 'pages/01KE97YT3B34CYXY31QTBR1B14.png', '<p>Kanopi bukan hanya berfungsi sebagai pelindung dari panas matahari dan hujan, tetapi juga memiliki peran penting dalam meningkatkan <strong>kenyamanan, keamanan, dan nilai estetika</strong> sebuah bangunan. Oleh karena itu, memilih jenis kanopi yang tepat menjadi langkah penting sebelum melakukan pemasangan.</p><p><strong>Mengapa Kanopi Sangat Dibutuhkan?</strong></p><p>Di Indonesia dengan kondisi cuaca yang panas dan curah hujan tinggi, kanopi menjadi solusi ideal untuk melindungi area luar seperti teras, carport, balkon, dan area parkir. Selain itu, kanopi juga membantu menjaga kendaraan, perabot, dan area bangunan tetap awet dan terlindungi.</p><p><strong>Jenis-Jenis Kanopi yang Umum Digunakan</strong></p><p>Berikut beberapa jenis kanopi yang paling banyak digunakan dan direkomendasikan:</p><p><strong>1. Kanopi Baja Ringan</strong></p><p>Kanopi baja ringan terkenal dengan kekuatan dan bobotnya yang ringan. Material ini anti karat, tahan lama, dan cocok untuk berbagai jenis bangunan seperti rumah, ruko, dan carport.</p><p><strong>2. Kanopi Alderon</strong></p><p>Kanopi Alderon memiliki keunggulan dalam meredam panas dan suara hujan. Cocok digunakan untuk area yang membutuhkan kenyamanan ekstra seperti teras rumah, cafe, dan balkon.</p><p><strong>3. Kanopi Polycarbonate</strong></p><p>Kanopi polycarbonate memberikan pencahayaan alami karena sifatnya yang transparan. Sangat cocok untuk area terbuka yang tetap membutuhkan cahaya tanpa mengorbankan perlindungan.</p><p><strong>4. Kanopi Besi Hollow</strong></p><p>Kanopi dengan rangka besi hollow memiliki struktur yang kokoh dan stabil, sangat ideal untuk carport dan area parkir kendaraan.</p><p><strong>Tips Memilih Kanopi yang Tepat</strong></p><p>Agar mendapatkan hasil maksimal, berikut beberapa tips sebelum memilih kanopi:</p><ul><li><p>Sesuaikan jenis kanopi dengan fungsi area</p></li><li><p>Pilih material berkualitas dan tahan cuaca</p></li><li><p>Pertimbangkan desain agar selaras dengan bangunan</p></li><li><p>Gunakan jasa profesional untuk hasil yang aman dan rapi</p></li></ul><p><strong>Gunakan Jasa Pemasangan Kanopi Profesional</strong></p><p>Menggunakan jasa pemasangan kanopi profesional memberikan banyak keuntungan, mulai dari hasil yang lebih rapi, struktur yang aman, hingga efisiensi waktu dan biaya.</p><p>Kami menyediakan layanan <strong>pemasangan, renovasi, dan perawatan kanopi</strong> dengan material berkualitas dan tenaga ahli berpengalaman.<br>Nikmati <strong>survey &amp; konsultasi GRATIS</strong>, estimasi biaya transparan, serta desain yang dapat disesuaikan dengan kebutuhan Anda.</p><p><strong>Kesimpulan</strong></p><p>Memilih kanopi yang tepat adalah investasi jangka panjang untuk kenyamanan dan keamanan bangunan Anda. Dengan material berkualitas dan pemasangan yang profesional, kanopi tidak hanya berfungsi sebagai pelindung, tetapi juga meningkatkan nilai estetika properti Anda.</p>', '<p>A canopy is not only a protection from sunlight and rain but also plays an important role in enhancing the <strong>comfort, safety, and aesthetic value</strong> of a building. Choosing the right type of canopy is a crucial step before installation.</p><p><strong>Why Is a Canopy Important?</strong></p><p>In Indonesia’s tropical climate with intense heat and heavy rainfall, canopies are an ideal solution for protecting outdoor areas such as terraces, carports, balconies, and parking spaces. They also help preserve vehicles, furniture, and building structures.</p><p><strong>Common Types of Canopies</strong></p><p>Here are some of the most commonly used and recommended canopy types:</p><p><strong>1. Lightweight Steel Canopy</strong></p><p>Lightweight steel canopies are known for their strength and durability. They are rust-resistant, long-lasting, and suitable for residential homes, shophouses, and carports.</p><p><strong>2. Alderon Canopy</strong></p><p>Alderon canopies excel at reducing heat and rain noise, making them ideal for terraces, cafes, and balconies where comfort is a priority.</p><p><strong>3. Polycarbonate Canopy</strong></p><p>Polycarbonate canopies allow natural light to pass through while still providing protection. Perfect for open areas that require brightness and coverage.</p><p><strong>4. Hollow Steel Canopy</strong></p><p>Hollow steel frame canopies offer a strong and stable structure, making them suitable for carports and parking areas.</p><p><strong>Tips for Choosing the Right Canopy</strong></p><p>To achieve the best results, consider the following tips:</p><ul><li><p>Match the canopy type to its intended function</p></li><li><p>Choose high-quality, weather-resistant materials</p></li><li><p>Ensure the design complements the building</p></li><li><p>Use professional installation services</p></li></ul><p><strong>Choose a Professional Canopy Installation Service</strong></p><p>Hiring a professional canopy service ensures neat workmanship, structural safety, and cost efficiency.</p><p>We provide <strong>canopy installation, renovation, and maintenance services</strong> using premium materials and experienced professionals.<br>Enjoy a <strong>FREE site survey and consultation</strong>, transparent pricing, and custom designs tailored to your needs.</p><p><strong>Conclusion</strong></p><p>Choosing the right canopy is a long-term investment for your property’s comfort and safety. With quality materials and professional installation, a canopy enhances both functionality and visual appeal.</p>', 1, '2026-01-05 15:41:54', NULL, '2026-01-05 15:41:57', '2026-01-06 08:49:42'),
(14, 'Keunggulan Menggunakan Jasa Pemasangan Kanopi Profesional', 'Advantages of Using Professional Canopy Installation Services', 'keunggulan-menggunakan-jasa-pemasangan-kanopi-profesional', 'pages/01KE97ZBMEVAYPC7FQNV3X4DA5.png', '<p>Memasang kanopi bukan sekadar menutup area luar dari panas dan hujan. Dibutuhkan perencanaan, pemilihan material, serta teknik pemasangan yang tepat agar kanopi aman, tahan lama, dan memiliki tampilan yang menarik. Inilah alasan mengapa menggunakan <strong>jasa pemasangan kanopi profesional</strong> menjadi pilihan terbaik.</p><p><strong>1. Perencanaan yang Tepat Sejak Awal</strong></p><p>Jasa profesional selalu memulai pekerjaan dengan survey lokasi dan konsultasi. Dari tahap ini, ukuran, desain, kemiringan, hingga jenis material kanopi ditentukan secara presisi sesuai kondisi bangunan.</p><p><strong>2. Material Berkualitas &amp; Sesuai Kebutuhan</strong></p><p>Setiap jenis kanopi memiliki fungsi dan karakteristik berbeda. Dengan menggunakan jasa profesional, Anda akan mendapatkan rekomendasi material terbaik seperti baja ringan, Alderon, polycarbonate, atau besi hollow sesuai kebutuhan dan anggaran.</p><p><strong>3. Pengerjaan Aman dan Rapi</strong></p><p>Kanopi yang dipasang tanpa perhitungan struktur berisiko membahayakan. Tim profesional memahami standar keamanan, teknik pemasangan, serta detail finishing agar hasil akhir rapi dan kokoh.</p><p><strong>4. Efisiensi Waktu dan Biaya</strong></p><p>Dengan tenaga ahli berpengalaman, proses pemasangan menjadi lebih cepat dan minim kesalahan. Hal ini justru menghemat biaya dibandingkan perbaikan akibat pemasangan yang kurang tepat.</p><p><strong>5. Garansi dan Layanan Purna Jual</strong></p><p>Jasa profesional umumnya memberikan garansi pekerjaan serta layanan perawatan jika dibutuhkan di kemudian hari.</p><p><strong>Kesimpulan</strong></p><p>Menggunakan jasa pemasangan kanopi profesional adalah investasi cerdas untuk jangka panjang. Anda tidak hanya mendapatkan kanopi yang kuat dan estetik, tetapi juga rasa aman dan kenyamanan maksimal.</p><p>Kami siap membantu dengan <strong>survey GRATIS</strong>, konsultasi desain, serta pemasangan kanopi berkualitas untuk rumah maupun bangunan komersial Anda.</p>', '<p>Installing a canopy is not just about covering an outdoor area from sun and rain. It requires proper planning, material selection, and correct installation techniques to ensure safety, durability, and aesthetic appeal. This is why using <strong>professional canopy installation services</strong> is the best choice.</p><p><strong>1. Proper Planning from the Start</strong></p><p>Professional services always begin with a site survey and consultation. During this stage, measurements, design, slope, and material selection are carefully planned based on the building’s condition.</p><p><strong>2. High-Quality Materials Based on Your Needs</strong></p><p>Each canopy type has different functions and characteristics. With professional services, you receive expert recommendations for materials such as lightweight steel, Alderon, polycarbonate, or hollow steel based on your needs and budget.</p><p><strong>3. Safe and Neat Installation</strong></p><p>Improperly installed canopies can pose safety risks. Professional teams follow structural standards and proper installation techniques to ensure a strong and neat final result.</p><p><strong>4. Time and Cost Efficiency</strong></p><p>Experienced professionals complete installations faster with minimal errors, helping you avoid costly repairs in the future.</p><p><strong>5. Warranty and After-Sales Service</strong></p><p>Professional services usually provide workmanship warranties and maintenance support when needed.</p><p><strong>Conclusion</strong></p><p>Using professional canopy installation services is a smart long-term investment. You gain a durable, aesthetic canopy along with safety and peace of mind.</p><p>We are ready to assist you with a <strong>FREE site survey</strong>, design consultation, and high-quality canopy installation for residential and commercial buildings.</p>', 1, '2026-01-05 15:44:17', NULL, '2026-01-05 15:44:20', '2026-01-06 08:49:59'),
(15, 'Tips Merawat Kanopi Agar Tetap Awet dan Tahan Lama', 'Tips for Maintaining Your Canopy to Stay Durable and Long-Lasting', 'tips-merawat-kanopi-agar-tetap-awet-dan-tahan-lama', 'pages/01KE97ZTX4B8EAKA9TSZ65MRQ2.png', '<p>Kanopi yang dirawat dengan baik tidak hanya terlihat lebih rapi, tetapi juga memiliki umur pakai yang lebih panjang. Perawatan rutin sangat penting untuk menjaga kekuatan struktur dan tampilan kanopi tetap optimal.</p><p><strong>1. Lakukan Pembersihan Secara Berkala</strong></p><p>Debu, kotoran, dan daun kering yang menumpuk dapat mempercepat kerusakan material. Bersihkan atap dan rangka kanopi secara rutin agar tetap bersih dan terawat.</p><p><strong>2. Periksa Rangka dan Sambungan</strong></p><p>Pastikan baut, sambungan, dan rangka dalam kondisi baik. Jika ditemukan karat atau baut longgar, segera lakukan perbaikan untuk mencegah kerusakan lebih lanjut.</p><p><strong>3. Cek Kondisi Atap Kanopi</strong></p><p>Atap kanopi seperti Alderon atau polycarbonate perlu diperiksa secara berkala untuk memastikan tidak ada retak, bocor, atau perubahan bentuk.</p><p><strong>4. Hindari Beban Berlebih</strong></p><p>Jangan meletakkan benda berat di atas kanopi karena dapat merusak struktur dan mengurangi kekuatannya.</p><p><strong>5. Gunakan Jasa Maintenance Profesional</strong></p><p>Untuk hasil maksimal, gunakan jasa perawatan kanopi profesional yang memahami struktur dan material kanopi dengan baik.</p><p><strong>Kesimpulan</strong></p><p>Perawatan rutin adalah kunci agar kanopi tetap awet, aman, dan nyaman digunakan. Dengan perawatan yang tepat, kanopi dapat bertahan dalam jangka waktu yang lama dan tetap terlihat menarik.</p><p>Kami menyediakan layanan <strong>maintenance kanopi dengan survey GRATIS</strong>, pengecekan menyeluruh, dan perbaikan profesional sesuai kebutuhan Anda.</p>', '<p>Properly maintained canopies not only look neater but also last much longer. Routine maintenance is essential to preserve structural strength and overall appearance.</p><p><strong>1. Perform Regular Cleaning</strong></p><p>Dust, dirt, and fallen leaves can accelerate material deterioration. Clean the canopy roof and frame regularly to keep it in good condition.</p><p><strong>2. Inspect the Frame and Connections</strong></p><p>Ensure that bolts, joints, and frames are secure. If rust or loose bolts are found, address them immediately to prevent further damage.</p><p><strong>3. Check the Canopy Roofing Condition</strong></p><p>Roofing materials such as Alderon or polycarbonate should be inspected periodically to detect cracks, leaks, or deformation.</p><p><strong>4. Avoid Excessive Loads</strong></p><p>Do not place heavy objects on the canopy, as this can damage the structure and reduce its strength.</p><p><strong>5. Use Professional Maintenance Services</strong></p><p>For optimal results, use professional canopy maintenance services that understand canopy structures and materials.</p><p><strong>Conclusion</strong></p><p>Routine maintenance is the key to keeping your canopy durable, safe, and comfortable. With proper care, your canopy will last longer and maintain its aesthetic appeal.</p><p>We offer <strong>professional canopy maintenance services with a FREE site survey</strong>, thorough inspections, and reliable repairs based on your needs.</p>', 1, '2026-01-05 15:47:02', NULL, '2026-01-05 15:47:06', '2026-01-06 08:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'manage pages', 'web', '2025-11-05 21:27:14', '2025-11-05 22:51:41'),
(2, 'manage settings', 'web', '2025-11-05 21:27:14', '2025-11-05 22:51:41'),
(3, 'view contact messages', 'web', '2025-11-05 21:27:14', '2025-11-05 22:51:41'),
(4, 'ViewAny:Role', 'web', '2025-11-05 21:30:33', '2025-11-05 22:51:41'),
(5, 'View:Role', 'web', '2025-11-05 21:30:33', '2025-11-05 22:51:41'),
(6, 'Create:Role', 'web', '2025-11-05 21:30:33', '2025-11-05 22:51:41'),
(7, 'Update:Role', 'web', '2025-11-05 21:30:33', '2025-11-05 22:51:41'),
(8, 'Delete:Role', 'web', '2025-11-05 21:30:33', '2025-11-05 22:51:41'),
(9, 'Restore:Role', 'web', '2025-11-05 21:30:33', '2025-11-05 22:51:41'),
(10, 'ForceDelete:Role', 'web', '2025-11-05 21:30:33', '2025-11-05 22:51:41'),
(11, 'ForceDeleteAny:Role', 'web', '2025-11-05 21:30:33', '2025-11-05 22:51:41'),
(12, 'RestoreAny:Role', 'web', '2025-11-05 21:30:33', '2025-11-05 22:51:41'),
(13, 'Replicate:Role', 'web', '2025-11-05 21:30:33', '2025-11-05 22:51:41'),
(14, 'Reorder:Role', 'web', '2025-11-05 21:30:33', '2025-11-05 22:51:41'),
(15, 'ViewAny:Page', 'web', '2025-11-05 21:54:49', '2025-11-05 22:51:41'),
(16, 'View:Page', 'web', '2025-11-05 21:54:49', '2025-11-05 22:51:41'),
(17, 'Create:Page', 'web', '2025-11-05 21:54:49', '2025-11-05 22:51:41'),
(18, 'Update:Page', 'web', '2025-11-05 21:54:49', '2025-11-05 22:51:41'),
(19, 'Delete:Page', 'web', '2025-11-05 21:54:49', '2025-11-05 22:51:41'),
(20, 'Restore:Page', 'web', '2025-11-05 21:54:49', '2025-11-05 22:51:41'),
(21, 'ForceDelete:Page', 'web', '2025-11-05 21:54:49', '2025-11-05 22:51:41'),
(22, 'ForceDeleteAny:Page', 'web', '2025-11-05 21:54:49', '2025-11-05 22:51:41'),
(23, 'RestoreAny:Page', 'web', '2025-11-05 21:54:49', '2025-11-05 22:51:41'),
(24, 'Replicate:Page', 'web', '2025-11-05 21:54:49', '2025-11-05 22:51:41'),
(25, 'Reorder:Page', 'web', '2025-11-05 21:54:49', '2025-11-05 22:51:41'),
(26, 'ViewAny:ContactMessage', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(27, 'View:ContactMessage', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(28, 'Create:ContactMessage', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(29, 'Update:ContactMessage', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(30, 'Delete:ContactMessage', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(31, 'Restore:ContactMessage', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(32, 'ForceDelete:ContactMessage', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(33, 'ForceDeleteAny:ContactMessage', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(34, 'RestoreAny:ContactMessage', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(35, 'Replicate:ContactMessage', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(36, 'Reorder:ContactMessage', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(37, 'ViewAny:HeroSection', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(38, 'View:HeroSection', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(39, 'Create:HeroSection', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(40, 'Update:HeroSection', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(41, 'Delete:HeroSection', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(42, 'Restore:HeroSection', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(43, 'ForceDelete:HeroSection', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(44, 'ForceDeleteAny:HeroSection', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(45, 'RestoreAny:HeroSection', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(46, 'Replicate:HeroSection', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(47, 'Reorder:HeroSection', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(48, 'ViewAny:Seo', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(49, 'View:Seo', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(50, 'Create:Seo', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(51, 'Update:Seo', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(52, 'Delete:Seo', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(53, 'Restore:Seo', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(54, 'ForceDelete:Seo', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(55, 'ForceDeleteAny:Seo', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(56, 'RestoreAny:Seo', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(57, 'Replicate:Seo', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(58, 'Reorder:Seo', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(59, 'ViewAny:Setting', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(60, 'View:Setting', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(61, 'Create:Setting', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(62, 'Update:Setting', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(63, 'Delete:Setting', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(64, 'Restore:Setting', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(65, 'ForceDelete:Setting', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(66, 'ForceDeleteAny:Setting', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(67, 'RestoreAny:Setting', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(68, 'Replicate:Setting', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(69, 'Reorder:Setting', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(70, 'ViewAny:User', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(71, 'View:User', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(72, 'Create:User', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(73, 'Update:User', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(74, 'Delete:User', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(75, 'Restore:User', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(76, 'ForceDelete:User', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(77, 'ForceDeleteAny:User', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(78, 'RestoreAny:User', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(79, 'Replicate:User', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(80, 'Reorder:User', 'web', '2025-11-05 22:06:15', '2025-11-05 22:51:41'),
(81, 'ViewAny:Testimonial', 'web', '2025-12-11 10:29:39', '2025-12-11 10:29:39'),
(82, 'View:Testimonial', 'web', '2025-12-11 10:29:39', '2025-12-11 10:29:39'),
(83, 'Create:Testimonial', 'web', '2025-12-11 10:29:39', '2025-12-11 10:29:39'),
(84, 'Update:Testimonial', 'web', '2025-12-11 10:29:39', '2025-12-11 10:29:39'),
(85, 'Delete:Testimonial', 'web', '2025-12-11 10:29:39', '2025-12-11 10:29:39'),
(86, 'Restore:Testimonial', 'web', '2025-12-11 10:29:39', '2025-12-11 10:29:39'),
(87, 'ForceDelete:Testimonial', 'web', '2025-12-11 10:29:39', '2025-12-11 10:29:39'),
(88, 'ForceDeleteAny:Testimonial', 'web', '2025-12-11 10:29:39', '2025-12-11 10:29:39'),
(89, 'RestoreAny:Testimonial', 'web', '2025-12-11 10:29:39', '2025-12-11 10:29:39'),
(90, 'Replicate:Testimonial', 'web', '2025-12-11 10:29:39', '2025-12-11 10:29:39'),
(91, 'Reorder:Testimonial', 'web', '2025-12-11 10:29:39', '2025-12-11 10:29:39'),
(92, 'ViewAny:Service', 'web', '2025-12-11 23:36:21', '2025-12-11 23:36:21'),
(93, 'View:Service', 'web', '2025-12-11 23:36:21', '2025-12-11 23:36:21'),
(94, 'Create:Service', 'web', '2025-12-11 23:36:21', '2025-12-11 23:36:21'),
(95, 'Update:Service', 'web', '2025-12-11 23:36:21', '2025-12-11 23:36:21'),
(96, 'Delete:Service', 'web', '2025-12-11 23:36:21', '2025-12-11 23:36:21'),
(97, 'Restore:Service', 'web', '2025-12-11 23:36:21', '2025-12-11 23:36:21'),
(98, 'ForceDelete:Service', 'web', '2025-12-11 23:36:21', '2025-12-11 23:36:21'),
(99, 'ForceDeleteAny:Service', 'web', '2025-12-11 23:36:21', '2025-12-11 23:36:21'),
(100, 'RestoreAny:Service', 'web', '2025-12-11 23:36:21', '2025-12-11 23:36:21'),
(101, 'Replicate:Service', 'web', '2025-12-11 23:36:21', '2025-12-11 23:36:21'),
(102, 'Reorder:Service', 'web', '2025-12-11 23:36:21', '2025-12-11 23:36:21'),
(103, 'ViewAny:Gallery', 'web', '2025-12-12 09:18:06', '2025-12-12 09:18:06'),
(104, 'View:Gallery', 'web', '2025-12-12 09:18:06', '2025-12-12 09:18:06'),
(105, 'Create:Gallery', 'web', '2025-12-12 09:18:06', '2025-12-12 09:18:06'),
(106, 'Update:Gallery', 'web', '2025-12-12 09:18:06', '2025-12-12 09:18:06'),
(107, 'Delete:Gallery', 'web', '2025-12-12 09:18:06', '2025-12-12 09:18:06'),
(108, 'Restore:Gallery', 'web', '2025-12-12 09:18:06', '2025-12-12 09:18:06'),
(109, 'ForceDelete:Gallery', 'web', '2025-12-12 09:18:06', '2025-12-12 09:18:06'),
(110, 'ForceDeleteAny:Gallery', 'web', '2025-12-12 09:18:06', '2025-12-12 09:18:06'),
(111, 'RestoreAny:Gallery', 'web', '2025-12-12 09:18:06', '2025-12-12 09:18:06'),
(112, 'Replicate:Gallery', 'web', '2025-12-12 09:18:06', '2025-12-12 09:18:06'),
(113, 'Reorder:Gallery', 'web', '2025-12-12 09:18:06', '2025-12-12 09:18:06'),
(114, 'ViewAny:Faq', 'web', '2025-12-14 20:47:55', '2025-12-14 20:47:55'),
(115, 'View:Faq', 'web', '2025-12-14 20:47:55', '2025-12-14 20:47:55'),
(116, 'Create:Faq', 'web', '2025-12-14 20:47:55', '2025-12-14 20:47:55'),
(117, 'Update:Faq', 'web', '2025-12-14 20:47:55', '2025-12-14 20:47:55'),
(118, 'Delete:Faq', 'web', '2025-12-14 20:47:55', '2025-12-14 20:47:55'),
(119, 'Restore:Faq', 'web', '2025-12-14 20:47:55', '2025-12-14 20:47:55'),
(120, 'ForceDelete:Faq', 'web', '2025-12-14 20:47:55', '2025-12-14 20:47:55'),
(121, 'ForceDeleteAny:Faq', 'web', '2025-12-14 20:47:55', '2025-12-14 20:47:55'),
(122, 'RestoreAny:Faq', 'web', '2025-12-14 20:47:55', '2025-12-14 20:47:55'),
(123, 'Replicate:Faq', 'web', '2025-12-14 20:47:55', '2025-12-14 20:47:55'),
(124, 'Reorder:Faq', 'web', '2025-12-14 20:47:55', '2025-12-14 20:47:55'),
(125, 'ViewAny:Product', 'web', '2025-12-24 03:07:54', '2025-12-24 03:07:54'),
(126, 'View:Product', 'web', '2025-12-24 03:07:54', '2025-12-24 03:07:54'),
(127, 'Create:Product', 'web', '2025-12-24 03:07:54', '2025-12-24 03:07:54'),
(128, 'Update:Product', 'web', '2025-12-24 03:07:54', '2025-12-24 03:07:54'),
(129, 'Delete:Product', 'web', '2025-12-24 03:07:54', '2025-12-24 03:07:54'),
(130, 'Restore:Product', 'web', '2025-12-24 03:07:54', '2025-12-24 03:07:54'),
(131, 'ForceDelete:Product', 'web', '2025-12-24 03:07:54', '2025-12-24 03:07:54'),
(132, 'ForceDeleteAny:Product', 'web', '2025-12-24 03:07:54', '2025-12-24 03:07:54'),
(133, 'RestoreAny:Product', 'web', '2025-12-24 03:07:54', '2025-12-24 03:07:54'),
(134, 'Replicate:Product', 'web', '2025-12-24 03:07:54', '2025-12-24 03:07:54'),
(135, 'Reorder:Product', 'web', '2025-12-24 03:07:54', '2025-12-24 03:07:54'),
(136, 'View:DashboardOverview', 'web', '2025-12-24 03:53:14', '2025-12-24 03:53:14'),
(137, 'ViewAny:OurPartner', 'web', '2025-12-27 15:14:38', '2025-12-27 15:14:38'),
(138, 'View:OurPartner', 'web', '2025-12-27 15:14:38', '2025-12-27 15:14:38'),
(139, 'Create:OurPartner', 'web', '2025-12-27 15:14:38', '2025-12-27 15:14:38'),
(140, 'Update:OurPartner', 'web', '2025-12-27 15:14:38', '2025-12-27 15:14:38'),
(141, 'Delete:OurPartner', 'web', '2025-12-27 15:14:38', '2025-12-27 15:14:38'),
(142, 'Restore:OurPartner', 'web', '2025-12-27 15:14:38', '2025-12-27 15:14:38'),
(143, 'ForceDelete:OurPartner', 'web', '2025-12-27 15:14:38', '2025-12-27 15:14:38'),
(144, 'ForceDeleteAny:OurPartner', 'web', '2025-12-27 15:14:38', '2025-12-27 15:14:38'),
(145, 'RestoreAny:OurPartner', 'web', '2025-12-27 15:14:38', '2025-12-27 15:14:38'),
(146, 'Replicate:OurPartner', 'web', '2025-12-27 15:14:38', '2025-12-27 15:14:38'),
(147, 'Reorder:OurPartner', 'web', '2025-12-27 15:14:38', '2025-12-27 15:14:38'),
(148, 'ViewAny:ProductCategory', 'web', '2026-06-02 15:36:16', '2026-06-02 15:36:16'),
(149, 'View:ProductCategory', 'web', '2026-06-02 15:36:16', '2026-06-02 15:36:16'),
(150, 'Create:ProductCategory', 'web', '2026-06-02 15:36:16', '2026-06-02 15:36:16'),
(151, 'Update:ProductCategory', 'web', '2026-06-02 15:36:16', '2026-06-02 15:36:16'),
(152, 'Delete:ProductCategory', 'web', '2026-06-02 15:36:16', '2026-06-02 15:36:16'),
(153, 'Restore:ProductCategory', 'web', '2026-06-02 15:36:16', '2026-06-02 15:36:16'),
(154, 'ForceDelete:ProductCategory', 'web', '2026-06-02 15:36:16', '2026-06-02 15:36:16'),
(155, 'ForceDeleteAny:ProductCategory', 'web', '2026-06-02 15:36:16', '2026-06-02 15:36:16'),
(156, 'RestoreAny:ProductCategory', 'web', '2026-06-02 15:36:16', '2026-06-02 15:36:16'),
(157, 'Replicate:ProductCategory', 'web', '2026-06-02 15:36:16', '2026-06-02 15:36:16'),
(158, 'Reorder:ProductCategory', 'web', '2026-06-02 15:36:16', '2026-06-02 15:36:16'),
(159, 'ViewAny:Career', 'web', '2026-06-02 16:01:51', '2026-06-02 16:01:51'),
(160, 'View:Career', 'web', '2026-06-02 16:01:51', '2026-06-02 16:01:51'),
(161, 'Create:Career', 'web', '2026-06-02 16:01:51', '2026-06-02 16:01:51'),
(162, 'Update:Career', 'web', '2026-06-02 16:01:51', '2026-06-02 16:01:51'),
(163, 'Delete:Career', 'web', '2026-06-02 16:01:51', '2026-06-02 16:01:51'),
(164, 'Restore:Career', 'web', '2026-06-02 16:01:51', '2026-06-02 16:01:51'),
(165, 'ForceDelete:Career', 'web', '2026-06-02 16:01:51', '2026-06-02 16:01:51'),
(166, 'ForceDeleteAny:Career', 'web', '2026-06-02 16:01:51', '2026-06-02 16:01:51'),
(167, 'RestoreAny:Career', 'web', '2026-06-02 16:01:51', '2026-06-02 16:01:51'),
(168, 'Replicate:Career', 'web', '2026-06-02 16:01:51', '2026-06-02 16:01:51'),
(169, 'Reorder:Career', 'web', '2026-06-02 16:01:51', '2026-06-02 16:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `name_id` varchar(255) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `description_id` longtext DEFAULT NULL,
  `description_en` longtext DEFAULT NULL,
  `price` decimal(15,2) NOT NULL DEFAULT 0.00,
  `sale_price` decimal(15,2) DEFAULT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `slug`, `is_active`, `sort_order`, `name_id`, `name_en`, `description_id`, `description_en`, `price`, `sale_price`, `images`, `created_at`, `updated_at`) VALUES
(4, 1, 'kanopi-baja-ringan-minimalis', 1, 1, 'Kanopi Baja Ringan Minimalis', 'Minimalist Lightweight Steel Canopy', '<p>Kanopi Baja Ringan Minimalis adalah solusi kanopi modern yang mengutamakan <strong>kekuatan, ketahanan, dan tampilan estetik</strong>. Menggunakan rangka baja ringan berkualitas tinggi yang anti karat dan tahan terhadap cuaca ekstrem, kanopi ini sangat cocok untuk penggunaan jangka panjang.</p><p>Desain minimalis membuat kanopi terlihat rapi, modern, dan menyatu dengan berbagai konsep bangunan, baik rumah tinggal, carport, teras, maupun ruko.</p><p>Layanan kami sudah termasuk <strong>survey GRATIS ke lokasi</strong>, konsultasi desain, serta pengerjaan oleh tenaga profesional berpengalaman.</p><p><strong>Keunggulan Produk:</strong></p><ul><li><p>Rangka baja ringan berkualitas &amp; anti karat</p></li><li><p>Desain minimalis modern</p></li><li><p>Tahan panas dan hujan</p></li><li><p>Cocok untuk rumah, carport, dan ruko</p></li><li><p>Custom ukuran dan model</p></li><li><p><strong>Gratis survey &amp; konsultasi</strong></p></li></ul>', '<p>The Minimalist Lightweight Steel Canopy is a modern canopy solution that prioritizes strength, durability, and aesthetic appearance. Built using high-quality lightweight steel that is rust-resistant and weatherproof, this canopy is ideal for long-term use.\nIts minimalist design creates a clean and modern look that blends seamlessly with various building concepts, including residential homes, carports, terraces, and shophouses.\nOur service includes a FREE on-site survey, design consultation, and installation by experienced professional technicians.\nProduct Advantages:\n* High-quality, rust-resistant lightweight steel frame\n* Modern minimalist design\n* Resistant to heat and rain\n* Suitable for homes, carports, and shophouses\n* Custom size and design available\n* Free survey &amp; consultation</p>', 3500000.00, 3000000.00, '[\"products\\/01KE7B9TQT864206ZQXWBPK224.png\"]', '2026-01-05 15:09:39', '2026-06-02 15:36:16'),
(5, 1, 'kanopi-alderon-premium', 1, 2, 'Kanopi Alderon Premium', 'Premium Alderon Canopy', '<p>Kanopi Alderon Premium dirancang untuk memberikan <strong>perlindungan maksimal sekaligus kenyamanan ekstra</strong>. Menggunakan material Alderon berkualitas tinggi yang kuat, tidak mudah pecah, serta mampu meredam panas dan suara hujan.</p><p>Kanopi ini sangat cocok untuk teras rumah, balkon, carport, cafe, maupun area komersial yang membutuhkan perlindungan optimal dengan tampilan modern.</p><p>Kami menyediakan <strong>survey GRATIS</strong>, estimasi biaya transparan, dan desain yang dapat disesuaikan dengan kebutuhan serta konsep bangunan Anda.</p><p><strong>Keunggulan Produk:</strong></p><ul><li><p>Material Alderon premium</p></li><li><p>Meredam panas dan kebisingan</p></li><li><p>Tampilan modern dan elegan</p></li><li><p>Cocok untuk rumah dan bangunan komersial</p></li><li><p>Custom warna dan ukuran</p></li><li><p><strong>Gratis survey &amp; estimasi biaya</strong></p></li></ul>', '<p>The Premium Alderon Canopy is designed to provide <strong>maximum protection while ensuring extra comfort</strong>. It uses high-quality Alderon material that is strong, impact-resistant, and capable of reducing heat and rain noise.</p><p>This canopy is ideal for residential terraces, balconies, carports, cafes, and commercial areas that require optimal protection with a modern appearance.</p><p>We provide a <strong>FREE site survey</strong>, transparent cost estimation, and designs tailored to your building needs and preferences.</p><p><strong>Product Advantages:</strong></p><ul><li><p>Premium Alderon material</p></li><li><p>Reduces heat and rain noise</p></li><li><p>Modern and elegant appearance</p></li><li><p>Suitable for residential and commercial buildings</p></li><li><p>Custom colors and sizes available</p></li><li><p><strong>Free survey &amp; cost estimation</strong></p></li></ul>', 5000000.00, 4500000.00, '[\"products\\/01KE7BKJ5GET42CBG3MC0G91PJ.jpg\"]', '2026-01-05 15:14:58', '2026-06-02 15:36:16'),
(6, 1, 'kanopi-polycarbonate-transparan', 1, 3, 'Kanopi Polycarbonate Transparan', 'Transparent Polycarbonate Canopy', '<p>Kanopi Polycarbonate Transparan menawarkan solusi perlindungan area terbuka dengan <strong>pencahayaan alami maksimal</strong>. Material polycarbonate dikenal kuat, tahan benturan, serta tahan panas dan cuaca ekstrem.</p><p>Kanopi ini sangat cocok untuk carport, taman, balkon, dan area parkir yang tetap membutuhkan cahaya alami tanpa mengorbankan fungsi perlindungan.</p><p>Layanan kami mencakup <strong>survey GRATIS ke lokasi</strong>, konsultasi desain, dan pemasangan profesional.</p><p><strong>Keunggulan Produk:</strong></p><ul><li><p>Material polycarbonate berkualitas tinggi</p></li><li><p>Transparan dengan tampilan modern</p></li><li><p>Tahan panas dan cuaca ekstrem</p></li><li><p>Cocok untuk berbagai jenis bangunan</p></li><li><p>Custom ukuran dan desain</p></li><li><p><strong>Gratis survey &amp; konsultasi</strong></p></li></ul>', '<p>The Transparent Polycarbonate Canopy provides protection for outdoor areas while allowing <strong>maximum natural light</strong>. Polycarbonate material is known for its strength, impact resistance, and durability against heat and extreme weather.</p><p>This canopy is ideal for carports, gardens, balconies, and parking areas that require brightness without sacrificing protection.</p><p>Our service includes a <strong>FREE on-site survey</strong>, design consultation, and professional installation.</p><p><strong>Product Advantages:</strong></p><ul><li><p>High-quality polycarbonate material</p></li><li><p>Transparent with a modern look</p></li><li><p>Resistant to heat and extreme weather</p></li><li><p>Suitable for various building types</p></li><li><p>Custom size and design available</p></li><li><p><strong>Free survey &amp; consultation</strong></p></li></ul>', 4500000.00, 3000000.00, '[\"products\\/01KE7BSNSXKFMDY7TWES85TTCR.png\"]', '2026-01-05 15:18:19', '2026-06-02 15:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `name_id` varchar(255) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `description_id` longtext DEFAULT NULL,
  `description_en` longtext DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `slug`, `is_active`, `sort_order`, `name_id`, `name_en`, `description_id`, `description_en`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'kanopi', 1, 1, 'Kanopi', 'Canopy', 'Pilihan produk kanopi untuk rumah, carport, teras, dan area komersial.', 'Canopy product options for homes, carports, terraces, and commercial areas.', 'products/01KE7B9TQT864206ZQXWBPK224.png', '2026-06-02 15:36:16', '2026-06-02 15:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2025-11-05 21:27:14', '2025-11-05 21:27:14'),
(2, 'editor', 'web', '2025-11-05 21:27:14', '2025-11-05 21:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(44, 2),
(45, 1),
(45, 2),
(46, 1),
(46, 2),
(47, 1),
(47, 2),
(48, 1),
(48, 2),
(49, 1),
(49, 2),
(50, 1),
(50, 2),
(51, 1),
(51, 2),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(56, 2),
(57, 1),
(57, 2),
(58, 1),
(58, 2),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(81, 2),
(82, 1),
(82, 2),
(83, 1),
(83, 2),
(84, 1),
(84, 2),
(85, 1),
(85, 2),
(86, 1),
(86, 2),
(87, 1),
(87, 2),
(88, 1),
(88, 2),
(89, 1),
(89, 2),
(90, 1),
(90, 2),
(91, 1),
(91, 2),
(92, 1),
(92, 2),
(93, 1),
(93, 2),
(94, 1),
(94, 2),
(95, 1),
(95, 2),
(96, 1),
(96, 2),
(97, 1),
(97, 2),
(98, 1),
(98, 2),
(99, 1),
(99, 2),
(100, 1),
(100, 2),
(101, 1),
(101, 2),
(102, 1),
(102, 2),
(103, 1),
(103, 2),
(104, 1),
(104, 2),
(105, 1),
(105, 2),
(106, 1),
(106, 2),
(107, 1),
(107, 2),
(108, 1),
(108, 2),
(109, 1),
(109, 2),
(110, 1),
(110, 2),
(111, 1),
(111, 2),
(112, 1),
(112, 2),
(113, 1),
(113, 2),
(114, 1),
(114, 2),
(115, 1),
(115, 2),
(116, 1),
(116, 2),
(117, 1),
(117, 2),
(118, 1),
(118, 2),
(119, 1),
(119, 2),
(120, 1),
(120, 2),
(121, 1),
(121, 2),
(122, 1),
(122, 2),
(123, 1),
(123, 2),
(124, 1),
(124, 2),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1),
(146, 1),
(147, 1),
(148, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(154, 1),
(155, 1),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `page`, `meta_title`, `meta_description`, `og_image`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Jasa Website Terbaik di Bandung', 'Kami adlah agensi jasa pembuatan website terbaik dikota bandung & Cimahi', 'seo/pexels-canvastudio-3194521.jpg', '2025-11-05 21:23:15', '2025-12-15 02:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `description_en` longtext DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `name_en`, `slug`, `icon`, `image`, `description`, `description_en`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(5, 'Product Baru Lextera Survey Indonesia', 'New Canopy Installation for Residential & Commercial Buildings', 'product-baru-lextera-survey-indonesia', 'services/icons/01KE78DS6A1SE8V7RPQCSQ8RP0.png', 'services/01KE78DS6E2T01GDC8K78KJK0Z.png', '<p>Kami menyediakan layanan <strong>pemasangan baru</strong> dengan desain modern, kokoh, dan disesuaikan dengan kebutuhan bangunan Anda. Layanan ini cocok untuk rumah tinggal, ruko, kantor, cafe, gudang, hingga area komersial lainnya.</p><p>Didukung oleh tim profesional berpengalaman, kami menggunakan material berkualitas seperti <strong>baja ringan, besi hollow, Alderon, Polycarbonate, dan Spandek</strong> yang terbukti kuat, tahan lama, serta minim perawatan.</p><p><strong>Keunggulan Layanan Kami:</strong></p><ol start=\"1\"><li><p><strong>Survey &amp; konsultasi GRATIS</strong> langsung ke lokasi</p></li><li><p>Desain custom sesuai kebutuhan dan konsep bangunan</p></li><li><p>Material berkualitas &amp; bergaransi</p></li><li><p>Pengerjaan rapi, cepat, dan profesional</p></li><li><p>Harga transparan &amp; kompetitif</p></li><li><p>Cocok untuk carport, teras, balkon, dan area parkir</p></li></ol><p>Kami berkomitmen menghadirkan yang tidak hanya berfungsi sebagai pelindung, tetapi juga meningkatkan nilai estetika dan kenyamanan properti Anda</p>', '<p>We provide <strong>professional new canopy installation services</strong> with modern, durable, and customized designs tailored to your building needs. Our services are suitable for residential houses, shophouses, offices, cafes, warehouses, and other commercial areas.</p><p>Supported by an experienced professional team, we use high-quality materials such as <strong>lightweight steel, hollow steel, Alderon, Polycarbonate, and Spandek roofing</strong>, ensuring long-lasting performance and minimal maintenance.</p><p><strong>Our Service Advantages:</strong></p><ol start=\"1\"><li><p><strong>FREE on-site survey and consultation</strong></p></li><li><p>Custom design based on your needs and building style</p></li><li><p>High-quality materials with warranty</p></li><li><p>Neat, fast, and professional workmanship</p></li><li><p>Transparent and competitive pricing</p></li><li><p>Ideal for carports, terraces, balconies, and parking areas</p></li></ol><p>We are committed to delivering canopies that provide protection while enhancing the aesthetics and value of your property.</p>', 1, 1, '2026-01-05 14:19:23', '2026-06-19 08:10:01'),
(6, 'Jasa Perawatan & Maintenance Kanopi Berkala', 'Canopy Maintenance & Periodic Inspection Service', 'jasa-perawatan-maintenance-kanopi-berkala', 'services/icons/01KE7A2X4YEND9SH35XEWPHPTR.png', 'services/01KE7A2X520E14HMCTEEQX9RGW.png', '<p>Layanan <strong>maintenance dan perawatan kanopi</strong> kami dirancang untuk menjaga kanopi tetap kuat, aman, dan terlihat seperti baru. Sangat direkomendasikan untuk kanopi yang sudah lama terpasang agar tetap optimal dan terhindar dari kerusakan yang lebih besar.</p><p>Perawatan meliputi pengecekan rangka, baut, sambungan, pembersihan atap kanopi, hingga perbaikan ringan bila diperlukan.</p><p>✨ <strong>Manfaat Maintenance Kanopi:</strong></p><ul><li><p>Memperpanjang umur kanopi</p></li><li><p>Mencegah karat dan kerusakan struktur</p></li><li><p>Menjaga tampilan tetap rapi &amp; bersih</p></li><li><p>Lebih hemat biaya dibandingkan perbaikan besar</p></li><li><p>Cocok untuk rumah, ruko, kantor, dan gedung komersial</p></li></ul><p>Kami menyediakan <strong>survey GRATIS</strong> untuk pengecekan awal kondisi kanopi Anda.</p>', '<p>Our <strong>canopy maintenance and inspection service</strong> is designed to keep your canopy strong, safe, and looking like new. This service is highly recommended for long-installed canopies to prevent major damage and maintain optimal performance.</p><p>Maintenance includes structure inspection, bolt tightening, joint checking, roof cleaning, and minor repairs if necessary.</p><p><strong>Maintenance Benefits:</strong></p><ol start=\"1\"><li><p>Extends canopy lifespan</p></li><li><p>Prevents rust and structural damage</p></li><li><p>Keeps the canopy clean and neat</p></li><li><p>More cost-effective than major repairs</p></li><li><p>Suitable for residential and commercial buildings</p></li></ol><p>We provide a <strong>FREE initial inspection and consultation</strong>.</p>', 1, 2, '2026-01-05 14:48:24', '2026-01-05 14:48:24'),
(7, 'Renovasi & Penggantian Kanopi Lama', 'Canopy Renovation & Replacement Service', 'renovasi-penggantian-kanopi-lama', 'services/icons/01KE7A858YQJ3C064A2S5NZHQJ.png', 'services/01KE7A8590NYP9W8PCG2AR95XW.png', '<p>Kanopi lama terlihat usang, bocor, atau tidak lagi sesuai dengan desain bangunan? Kami menyediakan layanan <strong>renovasi dan penggantian kanopi lama</strong> dengan konsep baru yang lebih modern, kuat, dan estetik.</p><p>Layanan ini mencakup pembongkaran kanopi lama, perbaikan rangka, serta pemasangan kanopi baru sesuai kebutuhan Anda.</p><p>✨ <strong>Keunggulan Layanan Renovasi:</strong></p><ul><li><p>Survey &amp; estimasi biaya GRATIS</p></li><li><p>Upgrade material &amp; desain</p></li><li><p>Pilihan model minimalis hingga modern</p></li><li><p>Pengerjaan aman dan profesional</p></li><li><p>Cocok untuk rumah, ruko, dan area komersial</p></li></ul><p>Solusi tepat untuk memperbarui tampilan bangunan tanpa harus membangun dari awal.</p>', '<p>Is your old canopy worn out, leaking, or no longer matching your building design? We offer <strong>canopy renovation and replacement services</strong> with a more modern, durable, and aesthetic concept.</p><p>Our service includes dismantling old canopies, structural improvements, and installing new canopies based on your needs.</p><p>✨ <strong>Renovation Service Advantages:</strong></p><ul><li><p>FREE site survey and cost estimation</p></li><li><p>Material and design upgrades</p></li><li><p>Minimalist to modern design options</p></li><li><p>Safe and professional workmanship</p></li><li><p>Suitable for residential and commercial properties</p></li></ul><p>The perfect solution to refresh your building’s appearance efficiently.</p>', 1, 3, '2026-01-05 14:51:16', '2026-01-05 14:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('37aJGzAIhwP3Qlzt4tfYMb01zMIywO5xoDEQ8eny', 6, 'localhost', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoidjRCeU9OTzhUOVlqMFRIaEhqaVNubnhOR1J2TnpjUHpSWGZDZjBpayI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJEpVbjRyUS5QYXFZY2pKa0N0b2RCVC5rSnZYSUgzR2hkRFUvZXJBcXFnTHNJLjJ5SWpkTkg2IjtzOjk6Il9wcmV2aW91cyI7YToyOntzOjM6InVybCI7czoyMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwIjtzOjU6InJvdXRlIjtzOjQ6ImhvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6ImxvY2FsZSI7czoyOiJlbiI7czo2OiJ0YWJsZXMiO2E6Mjp7czo0MDoiZTI4YTYwMjY0YTI4YTBmYzU5YzdkYzg2YmZmZDgyNDhfY29sdW1ucyI7YTo3OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6Mjoibm8iO3M6NToibGFiZWwiO3M6MjoiTm8iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjM6ImtleSI7czo1OiJsYWJlbCI7czozOiJLZXkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjg6ImNhdGVnb3J5IjtzOjU6ImxhYmVsIjtzOjg6IkNhdGVnb3J5IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJ0eXBlIjtzOjU6ImxhYmVsIjtzOjQ6IlR5cGUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6InZhbHVlIjtzOjU6ImxhYmVsIjtzOjU6IlZhbHVlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoiY3JlYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiQ3JlYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjA7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtiOjE7fWk6NjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiVXBkYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjA7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtiOjE7fX1zOjQwOiJiZGVmZTJjM2FmZGRhMjg2YTczN2VlNTU3M2FjZWIxNl9jb2x1bW5zIjthOjk6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJpbWFnZSI7czo1OiJsYWJlbCI7czo1OiJJbWFnZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToidGl0bGUiO3M6NToibGFiZWwiO3M6MTA6IlRpdGxlIChJRCkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjg6InRpdGxlX2VuIjtzOjU6ImxhYmVsIjtzOjEwOiJUaXRsZSAoRU4pIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MDtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MTt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjExOiJidXR0b25fdGV4dCI7czo1OiJsYWJlbCI7czoxMToiQnV0dG9uIChJRCkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE0OiJidXR0b25fdGV4dF9lbiI7czo1OiJsYWJlbCI7czoxMToiQnV0dG9uIChFTikiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjowO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7YjoxO31pOjU7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImJ1dHRvbl91cmwiO3M6NToibGFiZWwiO3M6MzoiVVJMIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoiY3JlYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiQ3JlYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjA7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtiOjE7fWk6NzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiVXBkYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjA7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtiOjE7fWk6ODthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJlbl9zdGF0dXMiO3M6NToibGFiZWwiO3M6MjoiRU4iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fX19', 1781912596),
('J1fTslzBeMUyOzW5VHD2XH9atSwQsp3j7DyskPlo', 6, 'localhost', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZjcxMjJHVVA1ZVFZS0ZHR015ck9GMEFldHZEOHl0eHBNQnFnV0RPbCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJEpVbjRyUS5QYXFZY2pKa0N0b2RCVC5rSnZYSUgzR2hkRFUvZXJBcXFnTHNJLjJ5SWpkTkg2IjtzOjk6Il9wcmV2aW91cyI7YToyOntzOjM6InVybCI7czoyNzoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2FkbWluIjtzOjU6InJvdXRlIjtzOjMwOiJmaWxhbWVudC5hZG1pbi5wYWdlcy5kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1781912352),
('UIzqPxc0JQbX4iOfMc08tHRCdhWmFxhDV3e9TREL', NULL, 'localhost', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.125.0 Chrome/148.0.7778.97 Electron/42.2.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYVRaN1NxMXBWTFZ3WFdLNE9MY2hNWE5zbGlNRm02TWxvTXByOVh6QSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1781912382),
('wmQ4TmFVVQzktekVAPsUrqAbWyI5K0BYSlEpaUmS', 6, 'localhost', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUHI0eVRqZURpcEZ1aU96UVc4Vm9ycXVEYXZwVWwzM09aeGJWb3VVQSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJEpVbjRyUS5QYXFZY2pKa0N0b2RCVC5rSnZYSUgzR2hkRFUvZXJBcXFnTHNJLjJ5SWpkTkg2IjtzOjk6Il9wcmV2aW91cyI7YToyOntzOjM6InVybCI7czoyNzoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2FkbWluIjtzOjU6InJvdXRlIjtzOjMwOiJmaWxhbWVudC5hZG1pbi5wYWdlcy5kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1781912355);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`value`)),
  `type` enum('text','image','video','color') NOT NULL DEFAULT 'text',
  `category` varchar(255) NOT NULL DEFAULT 'general',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `type`, `category`, `created_at`, `updated_at`) VALUES
(1, 'address', '{\"id\":\"<p>Sakura Garden City Tower Cattleya CAT 01-15<\\/p><p>Jl. Bina Marga No.88 Cipayung, Jakarta Timur<\\/p><p>DKI Jakarta 13820, Indonesia<\\/p>\",\"en\":\"<p>Sakura Garden City Tower Cattleya CAT 01-15<\\/p><p>Jl. Bina Marga No.88 Cipayung, Jakarta Timur<\\/p><p>DKI Jakarta 13820, Indonesia<\\/p>\"}', 'text', 'system', NULL, '2026-06-18 14:44:44'),
(4, 'email', '{\"id\":\"<p><a target=\\\"_blank\\\" rel=\\\"noopener noreferrer nofollow\\\" href=\\\"mailto:ask@lexterasurveyindonesia.com\\\">ask@lexterasurveyindonesia.com<\\/a><\\/p>\",\"en\":\"<p><a target=\\\"_blank\\\" rel=\\\"noopener noreferrer nofollow\\\" href=\\\"mailto:ask@lexterasurveyindonesia.com\\\">ask@lexterasurveyindonesia.com<\\/a><\\/p>\"}', 'text', 'system', NULL, '2026-06-18 14:51:53'),
(9, 'site_name', '{\"id\":\"<p>Lextera Survey Indonesia<\\/p>\",\"en\":\"<p>Lextera Survey Indonesia<\\/p>\"}', 'text', 'core', NULL, '2026-06-18 14:29:56'),
(14, 'open_hours_weekday', '\"09:00 - 21:00\"', 'text', 'general', NULL, NULL),
(15, 'open_hours_weekend', '\"10:00 - 22:00\"', 'text', 'general', NULL, NULL),
(23, 'favicon', '{\"path\":\"settings\\/01KE97DXCN3B6Z5MBVAJ8RFSXY.png\"}', 'image', 'core', '2025-11-06 06:54:36', '2026-01-06 08:40:28'),
(26, 'history', '{\"id\":\"<p><\\/p><p><img src=\\\"http:\\/\\/localhost:8000\\/storage\\/nhdtL4HfTY6HbhEfVMocS2kNAqb3gyNTUgevKopb.png\\\" data-id=\\\"nhdtL4HfTY6HbhEfVMocS2kNAqb3gyNTUgevKopb.png\\\"><\\/p>\",\"en\":\"<p><\\/p><p><img src=\\\"http:\\/\\/localhost:8000\\/storage\\/0EeaNtGErPItHTjIGrokvUKvrTXwSLUPBuI5hZV6.png\\\" data-id=\\\"0EeaNtGErPItHTjIGrokvUKvrTXwSLUPBuI5hZV6.png\\\"><\\/p>\"}', 'text', 'sections', '2025-12-11 19:52:49', '2026-06-18 14:34:35'),
(27, 'vision', '{\"id\":\"<p><strong>VISI<\\/strong><\\/p><p>Menjadi <strong>perusahaan jasa kanopi terpercaya dan terdepan<\\/strong> yang dikenal akan kualitas pekerjaan, inovasi desain, serta pelayanan profesional, guna memberikan solusi perlindungan bangunan yang bernilai tinggi dan berkelanjutan.<\\/p>\",\"en\":\"<p><strong>VISION<\\/strong><\\/p><p>To become a <strong>trusted and leading canopy service company<\\/strong>, recognized for superior workmanship, innovative designs, and professional service, delivering high-value and sustainable exterior solutions.<\\/p>\"}', 'text', 'content', '2025-12-11 20:12:28', '2026-01-05 23:12:07'),
(28, 'mission', '{\"id\":\"<p><strong>MISI<\\/strong><\\/p><p>Untuk mewujudkan visi tersebut, kami menetapkan misi sebagai berikut:<\\/p><ol start=\\\"1\\\"><li><p><strong>Memberikan hasil pekerjaan berkualitas tinggi<\\/strong> dengan menggunakan material terbaik dan standar pengerjaan profesional.<\\/p><\\/li><li><p><strong>Menyediakan solusi kanopi yang fungsional dan estetis<\\/strong>, sesuai dengan kebutuhan dan karakter bangunan pelanggan.<\\/p><\\/li><li><p><strong>Mengutamakan kepuasan pelanggan<\\/strong> melalui pelayanan yang ramah, transparan, dan responsif sejak tahap konsultasi hingga penyelesaian proyek.<\\/p><\\/li><li><p><strong>Menjaga ketepatan waktu dan efisiensi kerja<\\/strong> tanpa mengurangi kualitas hasil akhir.<\\/p><\\/li><li><p><strong>Mengembangkan sumber daya manusia yang kompeten<\\/strong>, jujur, dan bertanggung jawab di setiap proyek.<\\/p><\\/li><li><p><strong>Berinovasi secara berkelanjutan<\\/strong> mengikuti perkembangan desain, material, dan teknologi konstruksi modern.<\\/p><\\/li><li><p><strong>Membangun hubungan jangka panjang<\\/strong> dengan pelanggan berdasarkan kepercayaan dan hasil kerja yang konsisten.<\\/p><\\/li><\\/ol>\",\"en\":\"<p><strong>MISSION<\\/strong><\\/p><p>To achieve our vision, we are committed to the following missions:<\\/p><ol start=\\\"1\\\"><li><p><strong>Deliver high-quality workmanship<\\/strong> by using premium materials and professional construction standards.<\\/p><\\/li><li><p><strong>Provide functional and aesthetically pleasing canopy solutions<\\/strong> tailored to each client\\u2019s needs and building characteristics.<\\/p><\\/li><li><p><strong>Prioritize customer satisfaction<\\/strong> through transparent communication, friendly service, and responsive support from consultation to project completion.<\\/p><\\/li><li><p><strong>Ensure timely and efficient project execution<\\/strong> without compromising quality.<\\/p><\\/li><li><p><strong>Develop skilled, honest, and responsible human resources<\\/strong> across all levels of the organization.<\\/p><\\/li><li><p><strong>Continuously innovate<\\/strong> by adopting modern designs, materials, and construction technologies.<\\/p><\\/li><li><p><strong>Build long-term relationships with clients<\\/strong> based on trust, consistency, and proven results.<\\/p><\\/li><\\/ol>\"}', 'text', 'content', '2025-12-11 20:13:12', '2026-01-05 23:13:02'),
(29, 'icon_whatsapp', '{\"path\":\"settings\\/01KT4H06CXWEYHPKY29A9R85DE.png\"}', 'image', 'core', '2025-12-12 08:40:18', '2026-06-02 15:59:54'),
(30, 'terms-conditions', '{\"id\":\"<p>Terakhir diperbarui: <strong>17 Agustus 1945<\\/strong><\\/p><p>Dokumen Syarat dan Ketentuan ini (&quot;Syarat &amp; Ketentuan&quot;) mengatur penggunaan layanan jasa pembuatan website, pengembangan sistem, dan maintenance website yang disediakan oleh <strong>Mulai Digital<\\/strong> (selanjutnya disebut &quot;Perusahaan&quot;, &quot;Kami&quot;). Dengan menggunakan layanan Kami, Anda (&quot;Klien&quot;, &quot;Pengguna&quot;) dianggap telah membaca, memahami, dan menyetujui seluruh isi Syarat &amp; Ketentuan ini.<\\/p><p><strong>1. Ruang Lingkup Layanan<\\/strong><\\/p><p>Perusahaan menyediakan layanan berikut, namun tidak terbatas pada:<\\/p><ul><li><p>Jasa pembuatan dan pengembangan website<\\/p><\\/li><li><p>Pengembangan sistem berbasis web<\\/p><\\/li><li><p>Maintenance, perawatan, dan pembaruan website<\\/p><\\/li><li><p>Optimalisasi performa dan keamanan website<\\/p><\\/li><li><p>Konsultasi teknis terkait website dan sistem<\\/p><\\/li><\\/ul><p>Detail layanan, ruang lingkup pekerjaan, waktu pengerjaan, serta biaya akan dijelaskan secara rinci dalam dokumen terpisah seperti Proposal, Surat Perjanjian Kerja (SPK), atau Invoice.<\\/p><p><strong>2. Hak dan Kewajiban Klien<\\/strong><\\/p><p>Klien wajib:<\\/p><ul><li><p>Memberikan informasi, data, konten, dan materi yang dibutuhkan secara lengkap dan benar<\\/p><\\/li><li><p>Memastikan bahwa seluruh konten yang diserahkan tidak melanggar hukum atau hak pihak ketiga<\\/p><\\/li><li><p>Melakukan pembayaran sesuai dengan kesepakatan dan tenggat waktu yang ditentukan<\\/p><\\/li><li><p>Memberikan feedback atau persetujuan dalam waktu yang wajar selama proses pengerjaan<\\/p><\\/li><\\/ul><p>Klien berhak:<\\/p><ul><li><p>Mendapatkan layanan sesuai dengan ruang lingkup yang telah disepakati<\\/p><\\/li><li><p>Mendapatkan laporan progres pekerjaan sesuai kesepakatan<\\/p><\\/li><li><p>Mengajukan revisi sesuai ketentuan yang telah disepakati<\\/p><\\/li><\\/ul><p><strong>3. Hak dan Kewajiban Perusahaan<\\/strong><\\/p><p>Perusahaan wajib:<\\/p><ul><li><p>Menyelesaikan pekerjaan sesuai dengan ruang lingkup dan jadwal yang disepakati<\\/p><\\/li><li><p>Menjaga kerahasiaan data dan informasi Klien<\\/p><\\/li><li><p>Memberikan dukungan teknis sesuai paket layanan yang dipilih<\\/p><\\/li><\\/ul><p>Perusahaan berhak:<\\/p><ul><li><p>Menunda atau menghentikan layanan apabila Klien melanggar Syarat &amp; Ketentuan<\\/p><\\/li><li><p>Menolak permintaan di luar ruang lingkup pekerjaan yang telah disepakati<\\/p><\\/li><li><p>Menggunakan hasil pekerjaan sebagai portofolio, kecuali disepakati lain secara tertulis<\\/p><\\/li><\\/ul><p><strong>4. Pembayaran<\\/strong><\\/p><ul><li><p>Seluruh biaya layanan akan diinformasikan dan disepakati sebelum pekerjaan dimulai<\\/p><\\/li><li><p>Pembayaran dilakukan sesuai termin yang tercantum dalam Invoice atau perjanjian<\\/p><\\/li><li><p>Keterlambatan pembayaran dapat mengakibatkan penundaan atau penghentian layanan<\\/p><\\/li><li><p>Biaya yang telah dibayarkan tidak dapat dikembalikan (non-refundable), kecuali disepakati lain secara tertulis<\\/p><\\/li><\\/ul><p><strong>5. Revisi dan Perubahan Pekerjaan<\\/strong><\\/p><ul><li><p>Jumlah revisi yang termasuk dalam layanan akan ditentukan dalam kesepakatan awal<\\/p><\\/li><li><p>Permintaan perubahan di luar ruang lingkup awal akan dikenakan biaya tambahan<\\/p><\\/li><li><p>Revisi tidak mencakup perubahan konsep besar yang berbeda dari kesepakatan awal<\\/p><\\/li><\\/ul><p><strong>6. Maintenance dan Dukungan Teknis<\\/strong><\\/p><ul><li><p>Layanan maintenance hanya berlaku selama masa kontrak aktif<\\/p><\\/li><li><p>Maintenance mencakup perbaikan bug, pembaruan sistem, dan monitoring sesuai paket<\\/p><\\/li><li><p>Perusahaan tidak bertanggung jawab atas kerusakan akibat penggunaan di luar ketentuan atau campur tangan pihak ketiga<\\/p><\\/li><\\/ul><p><strong>7. Kepemilikan Hak Kekayaan Intelektual<\\/strong><\\/p><ul><li><p>Hak kepemilikan website atau sistem akan menjadi milik Klien setelah seluruh kewajiban pembayaran diselesaikan<\\/p><\\/li><li><p>Perusahaan berhak menyimpan salinan kode sumber untuk keperluan backup dan portofolio<\\/p><\\/li><li><p>Lisensi pihak ketiga (plugin, tema, library) mengikuti ketentuan pemilik lisensi masing-masing<\\/p><\\/li><\\/ul><p><strong>8. Kerahasiaan Informasi<\\/strong><\\/p><ul><li><p>Kedua belah pihak sepakat untuk menjaga kerahasiaan seluruh informasi yang bersifat rahasia<\\/p><\\/li><li><p>Informasi rahasia tidak boleh dibagikan kepada pihak ketiga tanpa persetujuan tertulis<\\/p><\\/li><li><p>Ketentuan ini tetap berlaku meskipun kerja sama telah berakhir<\\/p><\\/li><\\/ul><p><strong>9. Pembatasan Tanggung Jawab<\\/strong><\\/p><ul><li><p>Perusahaan tidak bertanggung jawab atas kerugian tidak langsung, kehilangan data, atau kehilangan keuntungan<\\/p><\\/li><li><p>Perusahaan tidak menjamin bahwa layanan akan bebas dari kesalahan 100%<\\/p><\\/li><li><p>Klien bertanggung jawab penuh atas penggunaan website dan konten yang ditampilkan<\\/p><\\/li><\\/ul><p><strong>10. Force Majeure<\\/strong><\\/p><p>Perusahaan tidak bertanggung jawab atas keterlambatan atau kegagalan layanan akibat keadaan di luar kendali, termasuk namun tidak terbatas pada bencana alam, gangguan jaringan, kebijakan pemerintah, atau keadaan darurat lainnya.<\\/p><p><strong>11. Penghentian Layanan<\\/strong><\\/p><ul><li><p>Kerja sama dapat dihentikan oleh salah satu pihak dengan pemberitahuan tertulis<\\/p><\\/li><li><p>Penghentian layanan tidak menghapus kewajiban pembayaran yang telah berjalan<\\/p><\\/li><li><p>Data Klien akan diserahkan sesuai kesepakatan setelah kewajiban diselesaikan<\\/p><\\/li><\\/ul><p><strong>12. Hukum yang Berlaku<\\/strong><\\/p><p>Syarat &amp; Ketentuan ini diatur dan ditafsirkan berdasarkan hukum yang berlaku di Republik Indonesia.<\\/p><p><strong>13. Perubahan Syarat &amp; Ketentuan<\\/strong><\\/p><p>Perusahaan berhak mengubah Syarat &amp; Ketentuan ini sewaktu-waktu. Perubahan akan diinformasikan melalui website resmi atau media komunikasi lainnya.<\\/p><p><strong>14. Kontak<\\/strong><\\/p><p>Apabila Anda memiliki pertanyaan terkait Syarat &amp; Ketentuan ini, silakan menghubungi:<\\/p><p><strong>Mulai Digital<\\/strong><br>Email: <a target=\\\"_blank\\\" rel=\\\"noopener noreferrer nofollow\\\" href=\\\"mailto:email@mulaidigital.com\\\"><strong>email@mulaidigital.com<\\/strong><\\/a><br>WhatsApp: <strong>+6282186087887<\\/strong><\\/p><p>Dengan menggunakan layanan Kami, Anda menyatakan telah membaca, memahami, dan menyetujui seluruh Syarat &amp; Ketentuan ini.<\\/p>\",\"en\":\"<p>Last updated: August 17, 1945<\\/p><p>This Terms and Conditions document (&quot;Terms &amp; Conditions&quot;) governs the use of website creation, system development, and maintenance services provided by Mulai Digital (hereinafter referred to as &quot;Company&quot;, &quot;We&quot;, &quot;Us&quot;). By using our services, you (&quot;Client&quot;, &quot;User&quot;) are deemed to have read, understood, and agreed to the entire contents of these Terms &amp; Conditions.<\\/p><p>1. Scope of Services<\\/p><p>The Company provides the following services, but is not limited to:<\\/p><p>Website creation and development services<\\/p><p>Web-based system development<\\/p><p>Website maintenance, care, and updates<\\/p><p>Website performance and security optimization<\\/p><p>Technical consultations related to websites and systems<\\/p><p>Service details, scope of work, completion time, and costs will be detailed in a separate document such as a Proposal, Work Agreement (SPK), or Invoice.<\\/p><p>2. Client Rights and Obligations<\\/p><p>The Client is obliged to:<\\/p><p>Provide complete and accurate information, data, content, and materials as required.<\\/p><p>Ensure that all submitted content does not violate any laws or third party rights.<\\/p><p>Make payments in accordance with the agreed-upon terms and deadlines.<\\/p><p>Provide feedback or approval within a reasonable time during the work process.<\\/p><p>The Client has the right to:<\\/p><p>Receive services according to the agreed-upon scope.<\\/p><p>Receive work progress reports as agreed.<\\/p><p>Submit revisions according to the agreed-upon terms.<\\/p><p>3. Company Rights and Obligations<\\/p><p>The Company is obliged to:<\\/p><p>Complete work according to the agreed-upon scope and schedule.<\\/p><p>Maintain the confidentiality of Client data and information.<\\/p><p>Provide technical support according to the selected service package.<\\/p><p>The Company has the right to:<\\/p><p>Delay or terminate services if the Client violates the Terms &amp; Conditions.<\\/p><p>Refuse requests outside the agreed-upon scope of work.<\\/p><p>Use work results as a portfolio, unless otherwise agreed in writing.<\\/p><p>4. Payment<\\/p><p>All service fees will be disclosed and agreed upon. Before work begins<\\/p><p>Payment is made according to the terms stated in the invoice or agreement.<\\/p><p>Late payment may result in delays or termination of services.<\\/p><p>Fees paid are non-refundable, unless otherwise agreed in writing.<\\/p><p>5. Revisions and Changes to Work<\\/p><p>The number of revisions included in the service will be determined in the initial agreement.<\\/p><p>Change requests outside the initial scope will incur an additional fee.<\\/p><p>Revisions do not include major conceptual changes that differ from the initial agreement.<\\/p><p>6. Maintenance and Technical Support<\\/p><p>Maintenance services are only valid during the active contract period.<\\/p><p>Maintenance includes bug fixes, system updates, and monitoring according to the package.<\\/p><p>The Company is not responsible for damages resulting from use outside the terms or intervention by third parties.<\\/p><p>7. Intellectual Property Ownership<\\/p><p>The website or system ownership will belong to the Client after all payment obligations have been completed.<\\/p><p>The Company reserves the right to retain a copy of the source code for backup and portfolio purposes.<\\/p><p>Third-party licenses (plugins, themes, libraries) are subject to the terms of their respective license owners.<\\/p><p>8. Confidentiality of Information<\\/p><p>Both parties agree to maintain the confidentiality of all confidential information.<\\/p><p>Confidential information may not be shared with third parties without written consent.<\\/p><p>These provisions remain in effect even after the collaboration has ended.<\\/p><p>9. Limitation of Liability<\\/p><p>The Company is not responsible for indirect losses, data loss, or lost profits.<\\/p><p>The Company does not guarantee that the service will be 100% error-free.<\\/p><p>The Client is solely responsible for the use of the website and the content displayed.<\\/p><p>10. Force Majeure<\\/p><p>The Company is not responsible for delays or service failures due to circumstances beyond its control, including but not limited to natural disasters, network disruptions, government policies, or other emergencies.<\\/p><p>11. Termination of Services<\\/p><p>The collaboration may be terminated by either party with written notice.<\\/p><p>Termination of services does not extinguish outstanding payment obligations.<\\/p><p>Client data will be transferred as agreed upon after the obligations are completed.<\\/p><p>12. Applicable Law<\\/p><p>These Terms &amp; Conditions are governed by and construed in accordance with the laws of the Republic of Indonesia.<\\/p><p>13. Changes to Terms &amp; Conditions<\\/p><p>The Company reserves the right to change these Terms &amp; Conditions at any time. Changes will be announced through the official website or other communication media.<\\/p><p>14. Contact<\\/p><p>If you have any questions regarding these Terms &amp; Conditions, please contact:<\\/p><p>Mulai Digital<\\/p><p>Email: <a target=\\\"_blank\\\" rel=\\\"noopener noreferrer nofollow\\\" href=\\\"mailto:email@mulaidigital.com\\\">email@mulaidigital.com<\\/a><\\/p><p>WhatsApp: +6282186087887<\\/p><p>By using our services, you acknowledge that you have<\\/p>\"}', 'text', 'sections', '2025-12-14 20:05:17', '2025-12-23 05:05:05'),
(31, 'privacy-policy', '{\"id\":\"<p>Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, melindungi, dan mengelola informasi pribadi pengguna saat mengakses dan menggunakan website kami. Dengan menggunakan website ini, Anda dianggap telah membaca, memahami, dan menyetujui seluruh isi Kebijakan Privasi ini.<\\/p><p><strong>1. Informasi yang Kami Kumpulkan<\\/strong><\\/p><p>Kami dapat mengumpulkan informasi pribadi yang Anda berikan secara sukarela, antara lain:<\\/p><ul><li><p>Nama lengkap<\\/p><\\/li><li><p>Nomor telepon \\/ WhatsApp<\\/p><\\/li><li><p>Alamat email<\\/p><\\/li><li><p>Alamat lokasi proyek (jika diperlukan)<\\/p><\\/li><li><p>Informasi lain yang Anda sampaikan melalui formulir kontak atau komunikasi langsung<\\/p><\\/li><\\/ul><p>Selain itu, kami juga dapat mengumpulkan data non-pribadi secara otomatis seperti:<\\/p><ul><li><p>Alamat IP<\\/p><\\/li><li><p>Jenis perangkat dan browser<\\/p><\\/li><li><p>Halaman yang diakses<\\/p><\\/li><li><p>Waktu dan durasi kunjungan<\\/p><\\/li><\\/ul><p>Data ini digunakan untuk keperluan analisis dan peningkatan kualitas layanan website.<\\/p><p><\\/p><p><strong>2. Penggunaan Informasi<\\/strong><\\/p><p>Informasi yang kami kumpulkan digunakan untuk:<\\/p><ul><li><p>Menanggapi pertanyaan, permintaan, atau konsultasi dari pengguna<\\/p><\\/li><li><p>Memberikan informasi terkait layanan dan produk<\\/p><\\/li><li><p>Menghubungi pengguna terkait penawaran, estimasi, atau tindak lanjut proyek<\\/p><\\/li><li><p>Meningkatkan kualitas layanan dan pengalaman pengguna<\\/p><\\/li><li><p>Keperluan internal dan administratif<\\/p><\\/li><\\/ul><p>Kami <strong>tidak menjual, menyewakan, atau membagikan informasi pribadi<\\/strong> kepada pihak ketiga tanpa izin, kecuali diwajibkan oleh hukum.<\\/p><p><\\/p><p><strong>3. Perlindungan Data<\\/strong><\\/p><p>Kami berkomitmen untuk menjaga keamanan informasi pribadi pengguna dengan menerapkan langkah-langkah pengamanan yang wajar dan sesuai standar. Namun, kami menyadari bahwa tidak ada sistem keamanan yang sepenuhnya aman, sehingga kami tidak dapat menjamin keamanan data secara mutlak.<\\/p><p><\\/p><p><strong>4. Cookie<\\/strong><\\/p><p>Website kami dapat menggunakan cookie untuk meningkatkan pengalaman pengguna. Cookie membantu kami memahami perilaku pengunjung dan mengoptimalkan tampilan serta fungsi website. Pengguna dapat mengatur browser untuk menolak cookie, namun hal ini dapat memengaruhi pengalaman penggunaan website.<\\/p><p><\\/p><p><strong>5. Tautan ke Situs Pihak Ketiga<\\/strong><\\/p><p>Website ini dapat berisi tautan ke situs pihak ketiga. Kami tidak bertanggung jawab atas konten, kebijakan privasi, atau praktik dari situs-situs tersebut. Kami menyarankan pengguna untuk membaca kebijakan privasi masing-masing situs yang dikunjungi.<\\/p><p><\\/p><p><strong>6. Perubahan Kebijakan Privasi<\\/strong><\\/p><p>Kami berhak untuk memperbarui atau mengubah Kebijakan Privasi ini sewaktu-waktu tanpa pemberitahuan sebelumnya. Perubahan akan ditampilkan di halaman ini dan berlaku sejak tanggal diperbarui.<\\/p><p><\\/p><p><strong>7. Persetujuan<\\/strong><\\/p><p>Dengan menggunakan website ini, Anda menyatakan telah membaca dan menyetujui Kebijakan Privasi ini.<\\/p><p><\\/p><p><strong>8. Hubungi Kami<\\/strong><\\/p><p>Jika Anda memiliki pertanyaan terkait Kebijakan Privasi ini, silakan hubungi kami melalui informasi kontak yang tersedia di website.<\\/p>\",\"en\":\"<p>This Privacy Policy explains how we collect, use, protect, and manage users\\u2019 personal information when accessing and using our website. By using this website, you agree to the terms outlined in this Privacy Policy.<\\/p><p><strong>1. Information We Collect<\\/strong><\\/p><p>We may collect personal information that you voluntarily provide, including but not limited to:<\\/p><ul><li><p>Full name<\\/p><\\/li><li><p>Phone number \\/ WhatsApp<\\/p><\\/li><li><p>Email address<\\/p><\\/li><li><p>Project location (if required)<\\/p><\\/li><li><p>Any other information submitted through contact forms or direct communication<\\/p><\\/li><\\/ul><p>We may also collect non-personal information automatically, such as:<\\/p><ul><li><p>IP address<\\/p><\\/li><li><p>Device and browser type<\\/p><\\/li><li><p>Pages visited<\\/p><\\/li><li><p>Visit time and duration<\\/p><\\/li><\\/ul><p>This data is used for analytical purposes and to improve website performance.<\\/p><p><\\/p><p><strong>2. Use of Information<\\/strong><\\/p><p>The information we collect is used to:<\\/p><ul><li><p>Respond to inquiries, requests, or consultations<\\/p><\\/li><li><p>Provide information about our canopy services and products<\\/p><\\/li><li><p>Contact users regarding quotations, project follow-ups, or offers<\\/p><\\/li><li><p>Improve service quality and user experience<\\/p><\\/li><li><p>Internal administrative purposes<\\/p><\\/li><\\/ul><p>We <strong>do not sell, rent, or share personal information<\\/strong> with third parties without user consent, except when required by law.<\\/p><p><\\/p><p><strong>3. Data Protection<\\/strong><\\/p><p>We take reasonable and appropriate measures to protect users\\u2019 personal information. However, no data transmission or storage system can be guaranteed to be 100% secure, and we cannot ensure absolute data security.<\\/p><p><\\/p><p><strong>4. Cookies<\\/strong><\\/p><p>Our website may use cookies to enhance user experience. Cookies help us analyze visitor behavior and optimize website functionality. Users can choose to disable cookies through browser settings, although this may affect certain features of the website.<\\/p><p><\\/p><p><strong>5. Third-Party Links<\\/strong><\\/p><p>Our website may contain links to third-party websites. We are not responsible for the content, privacy policies, or practices of these external sites. We encourage users to review the privacy policies of any third-party websites they visit.<\\/p><p><\\/p><p><strong>6. Changes to This Privacy Policy<\\/strong><\\/p><p>We reserve the right to update or modify this Privacy Policy at any time without prior notice. Any changes will be posted on this page and take effect immediately.<\\/p><p><\\/p><p><strong>7. Consent<\\/strong><\\/p><p>By using this website, you acknowledge that you have read and agreed to this Privacy Policy.<\\/p><p><\\/p><p><strong>8. Contact Us<\\/strong><\\/p><p>If you have any questions regarding this Privacy Policy, please contact us through the contact information provided on this website.<\\/p>\"}', 'text', 'sections', '2025-12-14 20:34:23', '2026-06-18 14:05:48'),
(32, 'whatsapp_number', '{\"id\":\"<p>+628988967889<\\/p>\",\"en\":\"<p>+628988967889<\\/p>\"}', 'text', 'system', '2025-12-15 02:38:43', '2026-06-18 14:39:45'),
(37, 'primary_color', '{\"color\":\"green\"}', 'color', 'theme', '2025-12-19 05:41:36', '2026-06-19 06:37:23'),
(38, 'about', '{\"id\":\"<p>PT Lextera Survey Indonesia resmi menjadi distributor produk ComNav Technology di Indonesia. Penunjukan ini menandai langkah strategis Lextera dalam memperkuat penyediaan solusi teknologi survei presisi, khususnya untuk kebutuhan pemetaan, konstruksi, perkebunan, pertambangan, dan infrastruktur.<\\/p><p>Presiden Direktur Lextera Survey Indonesia, Rudhi Wibawa N menyampaikan bahwa melalui kerja sama tersebut, Lextera akan mendistribusikan berbagai produk unggulan ComNav Tech, termasuk perangkat Global Navigasi Satellite System (GNSS) dan solusi positioning berakurasi tinggi yang telah digunakan secara luas di berbagai negara.<\\/p><p>\\u201cJadi, kami PT Lextera Survey Indonesia merupakan main distributor ComNav Tech dari Cina. Ada pun alat-alat yang kami bawa ke Indonesia di antaranya GNSS, Global Navigasi Satellite System,\\u201d ujar Rudhi saat ditemui di kantor barunya yang baru saja diresmikan di Jakarta, Selasa (20\\/1).<\\/p><p>GNSS adalah sistem navigasi berbasis satelit yang digunakan untuk menentukan posisi, kecepatan, dan waktu secara akurat di permukaan bumi. Teknologi ini memanfaatkan sinyal dari sejumlah satelit yang mengorbit bumi dan diterima oleh perangkat penerima (receiver) untuk menghitung lokasi dengan tingkat presisi tinggi.<\\/p><p>Selain penyediaan produk, Lextera juga menyiapkan layanan purna jual, pelatihan teknis, serta dukungan teknis bagi para pengguna.<\\/p><p>\\u201cJadi di Lextera ingin bangun konsep\\u00a0<em>one stop solution<\\/em>. Jadi kami menjual alat, siapkan teknisi, kami siapkan juga jasa untuk mengkalibrasi, malah kami juga ke depan ingin membangun sebuah sistem yang berbasis\\u00a0<em>cloud<\\/em>\\u00a0yang bisa digunakan oleh pelanggan,\\u201d<\\/p>\",\"en\":\"<p>We are a professional <strong>canopy construction and installation company<\\/strong> committed to providing high-quality, durable, and aesthetically pleasing exterior protection solutions for residential and commercial buildings.<\\/p><p>With years of experience in lightweight construction and canopy structures, we serve a wide range of projects, including <strong>residential canopies, carports, shop houses, office buildings, caf\\u00e9s, restaurants, warehouses, and industrial areas<\\/strong>. We understand that a canopy is not only a functional element to protect against sun and rain, but also an important architectural feature that enhances the overall appearance and value of a building.<\\/p><p>We use <strong>premium-quality materials<\\/strong> such as light steel, hollow steel, galvanized steel, polycarbonate, alderon, spandek roofing, and tempered glass, all handled by skilled and experienced professionals. Every project is carefully planned, structurally calculated, and executed with strict safety and quality standards.<\\/p><p>Customer satisfaction is our top priority. Therefore, we consistently focus on <strong>timely project completion, clean and precise workmanship, competitive pricing, and responsive after-sales service<\\/strong>. We believe that excellent results build long-term trust and lasting relationships with our clients.<\\/p>\"}', 'text', 'core', '2025-12-19 21:03:46', '2026-06-19 08:32:15'),
(39, 'nav_home', '{\"id\":\"<p>Beranda<\\/p>\",\"en\":\"<p>Home<\\/p>\"}', 'text', 'core', '2025-12-21 16:12:29', '2026-06-19 06:26:39'),
(40, 'nav_about', '{\"id\":\"<p>Tentang<\\/p>\",\"en\":\"<p>About<\\/p>\"}', 'text', 'general', '2025-12-21 16:12:53', '2025-12-21 16:12:53'),
(41, 'nav_services', '{\"id\":\"<p>Layanan<\\/p>\",\"en\":\"<p>Services<\\/p>\"}', 'text', 'core', '2025-12-21 16:13:21', '2026-06-19 06:33:47'),
(42, 'nav_pages', '{\"id\":\"<p>Halaman<\\/p>\",\"en\":\"<p>Pages<\\/p>\"}', 'text', 'general', '2025-12-21 16:14:21', '2025-12-21 16:14:53'),
(44, 'nav_faq', '{\"id\":\"<p>Pertanyaan Umum<\\/p>\",\"en\":\"<p>FAQs<\\/p>\"}', 'text', 'general', '2025-12-21 16:15:59', '2025-12-21 16:15:59'),
(45, 'nav_blog', '{\"id\":\"<p>Blog<\\/p>\",\"en\":\"<p>Blogs<\\/p>\"}', 'text', 'layout', '2025-12-21 16:16:29', '2025-12-23 04:13:26'),
(46, 'nav_terms', '{\"id\":\"<p>Syarat dan Ketentuan<\\/p>\",\"en\":\"<p><strong>Terms conditions<\\/strong><\\/p>\"}', 'text', 'layout', '2025-12-21 16:17:19', '2025-12-23 05:15:28'),
(47, 'nav_privacy', '{\"id\":\"<p>Kebijakan Privasi<\\/p>\",\"en\":\"<p>Privacy Policy<\\/p>\"}', 'text', 'layout', '2025-12-21 16:18:23', '2025-12-23 05:17:58'),
(48, 'nav_gallery', '{\"id\":\"<p>Galeri<\\/p>\",\"en\":\"<p>Gallery<\\/p>\"}', 'text', 'general', '2025-12-21 16:19:03', '2025-12-21 16:19:03'),
(49, 'nav_contact', '{\"id\":\"<p>Kontak<\\/p>\",\"en\":\"<p>Contact<\\/p>\"}', 'text', 'general', '2025-12-21 16:19:36', '2025-12-21 16:19:36'),
(50, 'nav_contact_cta', '{\"id\":\"<p>Konsultasi Gratis<\\/p>\",\"en\":\"<p>Free Consultation<\\/p>\"}', 'text', 'layout', '2025-12-21 16:20:59', '2026-01-06 02:19:21'),
(51, 'about_badge', '{\"id\":\"<p>Tentang Kami<\\/p>\",\"en\":\"<p>About Us<\\/p>\"}', 'text', 'layout', '2025-12-22 02:05:41', '2025-12-22 02:54:16'),
(52, 'about_cta_primary', '{\"id\":\"<p>Layanan Kami<\\/p>\",\"en\":\"<p>Our Services<\\/p>\"}', 'text', 'layout', '2025-12-22 02:07:19', '2025-12-22 02:51:15'),
(53, 'about_cta_secondary', '{\"id\":\"<p>Lihat Selengkapnya<\\/p>\",\"en\":\"<p>Read More<\\/p>\"}', 'text', 'layout', '2025-12-22 02:07:51', '2025-12-22 02:51:37'),
(56, 'logo_dark', '{\"path\":\"settings\\/01KE97D4Y9PBASW315AA833DBM.png\"}', 'image', 'core', '2025-12-22 05:57:00', '2026-01-06 08:40:03'),
(57, 'logo_light', '{\"path\":\"settings\\/01KE97CP3VYEW8Y8E81YHA81Z5.png\"}', 'image', 'core', '2025-12-22 05:57:25', '2026-01-06 08:39:48'),
(58, 'footer_copyright', '{\"id\":\"<p>Seluruh hak cipta dilindungi.<\\/p>\",\"en\":\"<p>All rights reserved.<\\/p>\"}', 'text', 'core', '2025-12-22 08:17:14', '2025-12-22 08:17:14'),
(59, 'service_badge', '{\"id\":\"<p><strong>Layanan Kami<\\/strong><\\/p>\",\"en\":\"<p>Our Services<\\/p>\"}', 'text', 'layout', '2025-12-22 09:19:30', '2025-12-22 09:19:30'),
(60, 'title_section_service', '{\"id\":\"<p>Layanan yang Kami Sediakan<\\/p>\",\"en\":\"<p>Services We Provide<\\/p>\"}', 'text', 'core', '2025-12-22 09:21:27', '2025-12-22 09:21:27'),
(61, 'subtitle_section_service', '{\"id\":\"<p>Berbagai layanan  berkualitas dengan product dalam pengerjaan profesional.<\\/p>\",\"en\":\"<p>A complete range of high-quality canopy services with modern design and professional workmanship.<\\/p>\"}', 'text', 'core', '2025-12-22 09:22:13', '2026-06-18 14:11:09'),
(62, 'cta_service', '{\"id\":\"<p>Lihat semua layanan<\\/p>\",\"en\":\"<p>See all services<\\/p>\"}', 'text', 'core', '2025-12-22 09:25:34', '2025-12-22 09:25:34'),
(63, 'profile_image', '{\"path\":\"settings\\/01KE97PZX5GFJMX4N5V1N6VZF0.png\"}', 'image', 'core', '2025-12-22 09:29:07', '2026-01-06 08:45:25'),
(64, 'blog_badge', '{\"id\":\"<p>Produk Baru<\\/p>\",\"en\":\"<p>News Product<\\/p>\"}', 'text', 'layout', '2025-12-22 09:33:52', '2026-06-19 08:42:19'),
(65, 'blog_title', '{\"id\":\"<p>Produk Terbaru<\\/p>\",\"en\":\"<p>News Product<\\/p>\"}', 'text', 'layout', '2025-12-22 09:34:29', '2026-06-19 08:43:57'),
(66, 'blog_subtitle', '{\"id\":\"<p>Update terbaru tentang teknologi, inovasi digital.<\\/p>\",\"en\":\"<p>The latest updates on technology, digital innovation.<\\/p>\"}', 'text', 'layout', '2025-12-22 09:35:15', '2025-12-30 02:48:32'),
(67, 'blog_cta', '{\"id\":\"<p>Lihat semua<\\/p>\",\"en\":\"<p>View All<\\/p>\"}', 'text', 'layout', '2025-12-22 09:35:42', '2025-12-22 09:35:42'),
(68, 'blog_search_placeholder', '{\"id\":\"<p>Cari artikel\\u2026<\\/p>\",\"en\":\"<p>Search articles..<\\/p>\"}', 'text', 'core', '2025-12-22 10:00:57', '2025-12-22 10:00:57'),
(69, 'testimonials_badge', '{\"id\":\"<p><strong>Testimoni Klien<\\/strong><\\/p>\",\"en\":\"<p>Client Testimonials<\\/p>\"}', 'text', 'layout', '2025-12-23 01:51:09', '2025-12-23 01:51:09'),
(71, 'testimonials_subtitle', '{\"id\":\"<p>Cerita nyata dari klien yang telah menggunakan layanan kami.<\\/p>\",\"en\":\"<p>Real stories from clients who have used our services.<\\/p>\"}', 'text', 'layout', '2025-12-23 01:52:59', '2025-12-23 01:54:00'),
(72, 'testimonials_title', '{\"id\":\"<p>Apa Kata Mereka<\\/p>\",\"en\":\"<p>What They Say<\\/p>\"}', 'text', 'layout', '2025-12-23 01:53:45', '2025-12-23 01:53:54'),
(73, 'contact_badge', '{\"id\":\"<p>Hubungi Kami<\\/p>\",\"en\":\"<p>Contact us<\\/p>\"}', 'text', 'layout', '2025-12-23 02:05:16', '2025-12-23 02:05:16'),
(74, 'contact_description', '{\"id\":\"<p>Hubungi kami sekarang dan dapatkan solusinya<\\/p>\",\"en\":\"<p>Contact us now and get the solution<\\/p>\"}', 'text', 'core', '2025-12-23 02:07:23', '2026-06-18 14:48:51'),
(75, 'contact_title', '{\"id\":\"<p>Mari Terhubung<\\/p>\",\"en\":\"<p>Connect With Us<\\/p>\"}', 'text', 'layout', '2025-12-23 02:08:04', '2025-12-23 03:08:56'),
(76, 'contact_info_title', '{\"id\":\"<p>Informasi Kontak<\\/p>\",\"en\":\"<p>Contact Information<\\/p>\"}', 'text', 'core', '2025-12-23 02:09:23', '2025-12-23 02:09:23'),
(77, 'contact_label_whatsapp', '{\"id\":\"<p>WhatsApp<\\/p>\",\"en\":\"<p>WhatsApp<\\/p>\"}', 'text', 'core', '2025-12-23 02:10:13', '2025-12-23 02:10:13'),
(78, 'contact_label_email', '{\"id\":\"<p>Email<\\/p>\",\"en\":\"<p>Email<\\/p>\"}', 'text', 'core', '2025-12-23 02:10:53', '2025-12-30 04:32:55'),
(79, 'contact_label_address', '{\"id\":\"<p>Alamat<\\/p>\",\"en\":\"<p>Address<\\/p>\"}', 'text', 'core', '2025-12-23 02:11:24', '2025-12-23 02:11:24'),
(80, 'contact_label_name', '{\"id\":\"<p>Nama Lengkap<\\/p>\",\"en\":\"<p>Full Name<\\/p>\"}', 'text', 'core', '2025-12-23 02:12:30', '2025-12-23 02:13:37'),
(81, 'contact_placeholder_name', '{\"id\":\"<p>masukan nama lengkap anda<\\/p>\",\"en\":\"<p>Enter your full name<\\/p>\"}', 'text', 'core', '2025-12-23 02:14:23', '2025-12-23 02:14:23'),
(82, 'contact_label_email_form', '{\"id\":\"<p><strong>Email<\\/strong><\\/p>\",\"en\":\"<p><strong>Email<\\/strong><\\/p>\"}', 'text', 'layout', '2025-12-23 02:17:25', '2025-12-23 02:17:25'),
(83, 'contact_placeholder_email', '{\"id\":\"<p>contoh@mail.com<\\/p>\",\"en\":\"<p>example@mail.com<\\/p>\"}', 'text', 'core', '2025-12-23 02:18:11', '2025-12-23 02:18:43'),
(84, 'contact_label_whatsapp_form', '{\"id\":\"<p>Nomor WhatsApp<\\/p>\",\"en\":\"<p>WhatsApp Number<\\/p>\"}', 'text', 'core', '2025-12-23 02:19:26', '2025-12-23 02:19:26'),
(85, 'contact_placeholder_whatsapp', '{\"id\":\"<p>+6282186087887<\\/p>\",\"en\":\"<p>+6282186087887<\\/p>\"}', 'text', 'core', '2025-12-23 02:20:07', '2025-12-23 02:20:07'),
(86, 'contact_label_subject', '{\"id\":\"<p><strong>Subjek<\\/strong><\\/p>\",\"en\":\"<p>Subject<\\/p>\"}', 'text', 'core', '2025-12-23 02:20:39', '2025-12-23 02:20:39'),
(87, 'contact_placeholder_subject', '{\"id\":\"<p>Contoh : Saya ingin informasi lebih lanjut mengenai  produck <a target=\\\"_blank\\\" rel=\\\"noopener noreferrer nofollow\\\" href=\\\"http:\\/\\/localhost:8000\\/admin\\\"><strong>Lextera Survey Indonesia<\\/strong><\\/a><\\/p>\",\"en\":\"<p>Example: I would like more information regarding...<\\/p>\"}', 'text', 'core', '2025-12-23 02:21:43', '2026-06-18 14:07:43'),
(88, 'contact_placeholder_message', '{\"id\":\"<p>Tuliskan pesan Anda di sini<\\/p>\",\"en\":\"<p>Type your message here<\\/p>\"}', 'text', 'core', '2025-12-23 02:32:47', '2025-12-23 02:32:47'),
(89, 'contact_button_submit', '{\"id\":\"<p>Kirim Pesan<\\/p>\",\"en\":\"<p>Submit Message<\\/p>\"}', 'text', 'core', '2025-12-23 02:39:28', '2025-12-23 02:39:28'),
(90, 'footer_tagline', '{\"id\":\"<p>Mewujudkan Product yang Berkualitas .<\\/p>\",\"en\":\"<p>Realizing Quality Products.<\\/p>\"}', 'text', 'layout', '2025-12-23 02:47:26', '2026-06-18 14:41:22'),
(91, 'footer_nav_title', '{\"id\":\"<p>Navigasi<\\/p>\",\"en\":\"<p>Navigation<\\/p>\"}', 'text', 'core', '2025-12-23 02:51:26', '2025-12-23 02:51:26'),
(92, 'footer_help_title', '{\"id\":\"<p>Butuh Bantuan?<\\/p>\",\"en\":\"<p>Need Help?<\\/p>\"}', 'text', 'core', '2025-12-23 02:52:51', '2025-12-23 02:52:51'),
(93, 'footer_contact_title', '{\"id\":\"<p>Kontak<\\/p>\",\"en\":\"<p>Contact<\\/p>\"}', 'text', 'core', '2025-12-23 02:53:30', '2025-12-23 02:53:30'),
(94, 'service_cta_modal', '{\"id\":\"<p>Lihat Selengkapnya<\\/p>\",\"en\":\"<p>See more<\\/p>\"}', 'text', 'core', '2025-12-23 03:41:59', '2025-12-23 03:41:59'),
(95, 'blog_empty_title', '{\"id\":\"<p>Belum ada artikel<\\/p>\",\"en\":\"<p>There are no articles yet<\\/p>\"}', 'text', 'core', '2025-12-23 03:51:48', '2025-12-23 03:51:48'),
(96, 'blog_empty_description', '{\"id\":\"<p>Artikel baru akan muncul di sini setelah dipublikasikan.<\\/p>\",\"en\":\"<p>New articles will appear here as they are published.<\\/p>\"}', 'text', 'core', '2025-12-23 03:52:26', '2025-12-23 03:52:26'),
(97, 'blog_published_label', '{\"id\":\"<p>Dipublikasikan<\\/p>\",\"en\":\"<p>Published<\\/p>\"}', 'text', 'core', '2025-12-23 03:58:02', '2025-12-23 03:58:02'),
(98, 'blog_share_label', '{\"id\":\"<p>Bagikan<\\/p>\",\"en\":\"<p>Share<\\/p>\"}', 'text', 'core', '2025-12-23 04:22:04', '2025-12-23 04:22:04'),
(99, 'blog_back_label', '{\"id\":\"<p>Kembali ke Blog<\\/p>\",\"en\":\"<p>Back to Blog<\\/p>\"}', 'text', 'core', '2025-12-23 04:25:03', '2025-12-23 04:25:03'),
(100, 'blog_related_title', '{\"id\":\"<p>Artikel Terkait<\\/p>\",\"en\":\"<p>Related Articles<\\/p>\"}', 'text', 'core', '2025-12-23 04:26:35', '2025-12-23 04:26:35'),
(101, 'blog_view_all', '{\"id\":\"<p>Lihat semua<\\/p>\",\"en\":\"<p>View all<\\/p>\"}', 'text', 'core', '2025-12-23 04:28:05', '2025-12-23 04:28:05'),
(102, 'faq_badge', '{\"id\":\"<p>FAQ<\\/p>\",\"en\":\"<p>FAQs<\\/p>\"}', 'text', 'core', '2025-12-23 04:48:31', '2025-12-23 04:48:31'),
(103, 'faq_title', '{\"id\":\"<p>Pertanyaan yang Sering Diajukan<\\/p>\",\"en\":\"<p>Frequently Asked Questions<\\/p>\"}', 'text', 'core', '2025-12-23 04:49:32', '2025-12-23 04:49:32'),
(104, 'faq_subtitle', '{\"id\":\"<p>Temukan jawaban atas pertanyaan umum seputar layanan, proses, dan penggunaan website kami.<\\/p>\",\"en\":\"<p>Find answers to frequently asked questions about our services, processes and use of our website.<\\/p>\"}', 'text', 'core', '2025-12-23 04:50:13', '2025-12-23 04:50:13'),
(105, 'terms_title', '{\"id\":\"<p>Syarat dan Ketentuan<\\/p>\",\"en\":\"<p>Terms and Conditions<\\/p>\"}', 'text', 'core', '2025-12-23 05:06:42', '2025-12-23 05:06:42'),
(106, 'privacy-policy_title', '{\"id\":\"<p>Kebijakan Privasi<\\/p>\",\"en\":\"<p>Privacy Policy<\\/p>\"}', 'text', 'core', '2025-12-23 05:14:49', '2025-12-25 13:50:12'),
(107, 'gallery_badge', '{\"id\":\"<p>Galeri<\\/p>\",\"en\":\"<p>Gallery<\\/p>\"}', 'text', 'core', '2025-12-23 05:38:43', '2025-12-23 05:39:03'),
(108, 'gallery_title', '{\"id\":\"<p>Dokumentasi<\\/p>\",\"en\":\"<p>Documentation<\\/p>\"}', 'text', 'core', '2025-12-23 05:39:48', '2025-12-30 04:32:24'),
(109, 'gallery_description', '{\"id\":\"<p>Kumpulan dokumentasi kegiatan, proyek, dan momen terbaik kami.<\\/p>\",\"en\":\"<p>A collection of documentation of our activities, projects, and best moments.<\\/p>\"}', 'text', 'core', '2025-12-23 05:40:29', '2025-12-23 05:40:29'),
(110, 'gallery_search_placeholder', '{\"id\":\"<p>Cari galeri...<\\/p>\",\"en\":\"<p>Search gallery...<\\/p>\"}', 'text', 'core', '2025-12-23 05:41:20', '2025-12-23 05:41:20'),
(111, 'gallery_empty_title', '{\"id\":\"<p>Tidak ada galeri yang ditemukan.<\\/p>\",\"en\":\"<p>No galleries found.<\\/p>\"}', 'text', 'core', '2025-12-23 05:43:12', '2025-12-23 05:43:12'),
(112, 'gallery_empty_description', '{\"id\":\"<p>Coba gunakan kata kunci pencarian yang berbeda atau periksa kembali nanti.<\\/p>\",\"en\":\"<p>Try using different search keywords or check back later.<\\/p>\"}', 'text', 'core', '2025-12-23 05:44:10', '2025-12-23 05:44:10'),
(113, 'gallery_back_label', '{\"id\":\"<p>Kembali ke Galeri<\\/p>\",\"en\":\"<p>Back to Gallery<\\/p>\"}', 'text', 'core', '2025-12-23 05:48:55', '2025-12-23 05:48:55'),
(114, 'breadcrumb_home', '{\"id\":\"<p>Beranda<\\/p>\",\"en\":\"<p>Home<\\/p>\"}', 'text', 'core', '2025-12-23 05:56:13', '2025-12-23 05:56:13'),
(116, 'nav_product', '{\"id\":\"<p>Produk<\\/p>\",\"en\":\"<p>Product<\\/p>\"}', 'text', 'core', '2025-12-24 04:37:29', '2025-12-24 04:37:29'),
(117, 'product_badge', '{\"id\":\"<p>Produk<\\/p>\",\"en\":\"<p>Product<\\/p>\"}', 'text', 'core', '2025-12-24 04:38:54', '2025-12-24 04:38:54'),
(118, 'product_title', '{\"id\":\"<p>Produk Kami<\\/p>\",\"en\":\"<p>Our Products<\\/p>\"}', 'text', 'core', '2025-12-24 04:40:42', '2025-12-24 04:40:42'),
(120, 'product_search_placeholder', '{\"id\":\"<p>Cari produk...<\\/p>\",\"en\":\"<p>Search products...<\\/p>\"}', 'text', 'core', '2025-12-24 06:10:43', '2025-12-24 06:10:43'),
(121, 'product_subtitle', '{\"id\":\"<p>Produk Lextera Survey Indonesia berkulitas<\\/p>\",\"en\":\"<p>Lextera Survey Indonesia&#039;s quality products<\\/p>\"}', 'text', 'core', '2025-12-24 06:26:24', '2026-06-18 14:43:13'),
(122, 'product_empty_title', '{\"id\":\"<p>Belum ada produk<\\/p>\",\"en\":\"<p>There are no products yet<\\/p>\"}', 'text', 'core', '2025-12-24 06:30:41', '2025-12-24 06:32:09'),
(123, 'product_empty_description', '{\"id\":\"<p>Produk baru akan muncul di sini setelah dipublikasikan.<\\/p>\",\"en\":\"<p>New products will appear here once they are published.<\\/p>\"}', 'text', 'core', '2025-12-24 06:31:29', '2025-12-24 06:31:29'),
(124, 'product_share_label', '{\"id\":\"<p>Bagikan<\\/p>\",\"en\":\"<p>Share<\\/p>\"}', 'text', 'core', '2025-12-24 07:07:14', '2025-12-24 07:07:14'),
(125, 'product_cta', '{\"id\":\"<p>Pesan via Whatsapp<\\/p>\",\"en\":\"<p>Order via Whatsapp<\\/p>\"}', 'text', 'layout', '2025-12-24 07:10:08', '2025-12-24 07:10:08'),
(126, 'product_view_all', '{\"id\":\"<p>Lihat semua<\\/p>\",\"en\":\"<p>View all<\\/p>\"}', 'text', 'core', '2025-12-27 14:53:39', '2025-12-27 14:53:39'),
(127, 'partner_badge', '{\"id\":\"<p>Mitra Kami dan Pelanggan<\\/p>\",\"en\":\"<p>Our Partners And Clients<\\/p>\"}', 'text', 'core', '2025-12-27 15:26:44', '2026-06-19 08:56:12'),
(128, 'partner_title', '{\"id\":\"<p>Dipercaya oleh Mitra Terbaik<\\/p>\",\"en\":\"<p>Trusted by the Best Partners<\\/p>\"}', 'text', 'core', '2025-12-27 15:28:15', '2025-12-27 15:28:15'),
(129, 'partner_subtitle', '{\"id\":\"<p>Kami bekerja sama dengan berbagai partner untuk menghadirkan solusi terbaik.<\\/p>\",\"en\":\"<p>We work together with various partners to present the best solutions.<\\/p>\"}', 'text', 'core', '2025-12-27 15:29:12', '2025-12-27 15:29:12'),
(130, 'Color_home', '{\"color\":\"yellow\"}', 'color', 'theme', '2026-06-19 06:35:13', '2026-06-19 06:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `message_en` text DEFAULT NULL,
  `rating` tinyint(4) DEFAULT NULL,
  `status` enum('pending','published','non_active') NOT NULL DEFAULT 'pending',
  `submitted_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `message`, `message_en`, `rating`, `status`, `submitted_at`, `published_at`, `created_at`, `updated_at`) VALUES
(4, 'Peter Frampton (Directors of ABCD)', 'Great products & support!', NULL, 5, 'published', NULL, '2026-06-17 14:57:54', '2026-01-05 16:41:42', '2026-06-18 14:58:02'),
(5, 'Danny Walberg (Directors of ABCD)', 'Awesome services!', NULL, 4, 'published', NULL, '2026-06-17 15:00:25', '2026-01-05 16:42:15', '2026-06-18 15:01:08'),
(6, 'Peter Frampton ', 'Directors of ABCD\n“Great products & support!”', NULL, 5, 'published', NULL, '2026-06-18 14:55:00', '2026-01-05 16:42:34', '2026-06-18 14:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Admin', 'admin@mail.com', NULL, '$2y$12$l.QyKV05tt1yICmLqkOVmeJK2MjRddKIEulXGNaQ4DWvdhk3DwjFm', 'xFXrA5spuFIm800nDahHbBOldH5s8bk5ENVaxunu0O8FTchfDXi9fZCQAYMx', '2025-11-06 01:38:39', '2025-12-15 02:27:14'),
(5, 'Editor', 'editor@mail.com', NULL, '$2y$12$Q7bMMuWGHwtYRnXo5s54M.B/oKHaEVf7t9y1W.IweOjMZs4q22.Fi', NULL, '2025-11-06 01:42:07', '2025-12-15 00:03:40'),
(6, 'rahmat', 'rahmat@mail.com', NULL, '$2y$12$JUn4rQ.PaqYcjJkCtodBT.kJvXIH3GhdDU/erAqqgLsI.2yIjdNH6', 'EafI66r96KbaBRGDbGk4pMLPS6A4wfNYiDdXWn7OwLaztbtAEkM4Y6h4uM6R', '2026-06-18 16:54:00', '2026-06-18 16:54:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `careers_slug_unique` (`slug`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_sections`
--
ALTER TABLE `hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `our_partners`
--
ALTER TABLE `our_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`),
  ADD KEY `pages_created_by_foreign` (`created_by`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_categories_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seos_page_unique` (`page`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`),
  ADD KEY `settings_category_index` (`category`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hero_sections`
--
ALTER TABLE `hero_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `our_partners`
--
ALTER TABLE `our_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
