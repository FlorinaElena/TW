-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 09, 2020 la 06:29 AM
-- Versiune server: 10.4.11-MariaDB
-- Versiune PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `questions`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT 0,
  `choice` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Eliminarea datelor din tabel `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `choice`) VALUES
(1, 1, 1, 'A. la trecerea pe lângă grupuri organizate, coloane militare sau cortegii, dacă acestea se află pe drumurile cu o singură bandă de circulaţie pe sens; '),
(2, 1, 0, 'B. la întâlnirea indicatorului „Pistă obligatorie pentru biciclişti”; '),
(3, 1, 0, 'C. la trecerile la nivel cu calea ferată dublă sau simplă prevăzută cu bariere. '),
(4, 2, 0, 'A. roşie sau albă; '),
(5, 2, 1, 'B. roşie sau galbenă; '),
(6, 2, 0, 'C. galbenă sau albă.'),
(7, 3, 1, 'C. galbenă sau albă.'),
(8, 3, 0, 'B. da, dacă drumul este iluminat; '),
(9, 3, 0, 'C. da, dacă aceasta este semnalizată cu triunghiuri reflectorizante.'),
(10, 4, 0, 'A. să prezinte documentele de călătorie; '),
(11, 4, 0, 'B. să-l transporte la unitatea de poliţie; '),
(12, 4, 1, 'C. să permită controlul stării tehnice a vehiculului, precum şi al bunurilor transportate.'),
(13, 5, 0, 'A. să evitaţi ambalarea excesivă a motorului; '),
(14, 5, 0, 'B. să evitaţi bruscarea comenzilor autovehiculului; '),
(15, 5, 1, 'C. să acordaţi prioritate de trecere vehiculelor care circulă pe drum, indiferent de direcţia de mers. '),
(16, 6, 0, 'A. durere în zona afectată; '),
(17, 6, 1, 'B. durere şi poziţie nefirească; '),
(18, 6, 0, 'C. temperatură mărită şi transpiraţie abundentă.'),
(19, 7, 1, 'A. pe drumurile cu mai puţin de două benzi pe sensul de mers; '),
(20, 7, 0, 'B. în zona de acţionare a indicatorului „Circulaţie în ambele sensuri”; '),
(21, 7, 0, 'C. în dreptul căilor de acces care deservesc proprietăţi alăturate drumurilor publice. '),
(22, 8, 0, 'A. pentru conducerea autovehiculului de către o altă persoană decât proprietarul; '),
(23, 8, 1, 'B. pentru conducerea autovehiculului fără una dintre plăcuţele cu numărul de înmatriculare; '),
(24, 8, 0, 'C. noxele motorului ating limita legală admisă.'),
(25, 9, 0, 'A. de la cel puţin 100 m; '),
(26, 9, 0, 'B. de la cel puţin 150 m; '),
(27, 9, 1, 'C. de la cel puţin 200 m'),
(28, 10, 1, 'A. în intersecţiile cu sens giratoriu; '),
(29, 10, 0, 'B. în zona de acţiune a indicatorului „Staţionarea interzisă”; '),
(30, 10, 0, 'C. pe arterele cu un singur sens de circulaţie'),
(31, 11, 1, 'A. la trecerea la nivel cu calea ferată curentă cu bariere;'),
(32, 11, 0, 'B. la trecerea la nivel cu calea ferată curentă fără bariere;'),
(33, 11, 0, 'C. la trecerea la nivel cu calea ferată curentă industrială.'),
(34, 12, 0, 'A. vehiculul nu are efectuată inspecţia tehnică periodică; '),
(35, 12, 0, 'B. anvelopele au alte dimensiuni decât cele prevăzute în cartea de identitate a vehiculului; '),
(36, 12, 1, 'C. conducătorul auto refuză să se legitimeze. '),
(37, 13, 0, 'A. nerespectarea semnalelor poliţiştilor la trecerea coloanelor oficiale; '),
(38, 13, 1, 'B. conducerea sub influenţa unor produse sau substanţe stupefiante sau a unor medicamente cu efecte similare; '),
(39, 13, 0, 'C. depăşirea limitei legale de viteză cu peste 50 km/h.'),
(40, 14, 0, 'A. sustragerea de la obligaţia de a supune autovehiculul inspecţiei tehnice periodice; '),
(41, 14, 0, 'B. părăsirea locului accidentului care a avut ca urmare avarii; '),
(42, 14, 1, 'C. repararea autovehicului ce prezintă urme de accident, fără autorizaţia poliţiei.'),
(43, 15, 1, 'A. pe sectoarele de drum unde depăşirea este interzisă; '),
(44, 15, 0, 'B. în zona de acţiune a indicatorului „Staţionarea interzisă”; '),
(45, 15, 0, 'C. în dreptul căilor de acces care deservesc proprietăţile alăturate drumurilor publice.'),
(46, 16, 0, 'A. vehiculelor care circulă pe drumul judeţean, comunal sau local;'),
(47, 16, 0, 'B. vehiculelor care vin din dreapta;'),
(48, 16, 1, 'C. vehiculelor care circulă pe drumul naţional.'),
(49, 17, 1, 'A. după ce s-a stins lumina roşie intermitentă;'),
(50, 17, 0, 'B. după ce a trecut ultimul vagon;'),
(51, 17, 0, 'C. atunci când pleacă vehiculele aflate de cealaltă parte a căii ferate.'),
(52, 18, 1, 'A. membrii patrulelor şcolare de circulaţie, de la trecerile pentru pietoni din apropierea unităţilor de învăţământ;'),
(53, 18, 0, 'B. personalul autorizat din cadrul Ministerului Transporturilor;'),
(54, 18, 0, 'C. lucrătorii ce îşi desfăşoară activitatea în cadrul Administraţiei Drumurilor.'),
(55, 19, 0, 'A. nu este obligat să respecte semnificaţia semnalelor luminoase, deoarece nu i se adresează;'),
(56, 19, 0, 'B. este obligat să respecte semnificaţia semnalelor luminoase, doar dacă semaforul este însoţit de un semn adiţional care indică direcţiile cărora li se adresează semnalele;'),
(57, 19, 1, 'C. este obligat să respecte semnificaţia semnalelor luminoase ale acestuia, dacă un alt semafor instalat la intrarea în intersecţie are în funcţiune un semnal similar.'),
(58, 20, 0, 'A. atunci când vehiculul ce urmează a fi depăşit rulează cu viteza admisă de lege;'),
(59, 20, 1, 'B. în orice locuri şi situaţii în care vizibilitatea nu permite executarea manevrei;'),
(60, 20, 0, 'C. atunci când traficul rutier este aglomerat.'),
(61, 21, 1, 'A. mijloacele speciale de avertizare luminoasă şi sonoră deţinute ilegal; '),
(62, 21, 0, 'B. farurile suplimentare şi portbagajul suplimentar neautorizat; '),
(63, 21, 0, 'C. mijloacele tehnice de detectare a prezenţei aparatelor radar.'),
(64, 22, 1, 'A. să vă deplasaţi cu atenţie pe sectorul de drum îngustat; '),
(65, 22, 0, 'B. să acordaţi prioritate numai autocamioanelor şi autobuzelor care circulă din sens opus; '),
(66, 22, 0, 'C. să acordaţi prioritate vehiculelor care circulă din sens opus.'),
(67, 23, 0, 'A. să vă deplasaţi cu atenţie pe sectorul de drum îngustat; '),
(68, 23, 1, 'B. să acordaţi prioritate numai autocamioanelor şi autobuzelor care circulă din sens opus; '),
(69, 23, 0, 'C. să acordaţi prioritate vehiculelor care circulă din sens opus.'),
(70, 24, 0, 'A. autovehiculelor;'),
(71, 24, 0, 'B. pietonilor de pe sensul opus de circulaţie;'),
(72, 24, 1, 'C. tuturor vehiculelor cu care vă intersectaţi.'),
(73, 25, 1, 'A. da, dacă se aprind luminile de poziţie sau de staţionare;'),
(74, 25, 0, 'B. nu, întrucât în toate cazurile se interzice pe timpul nopţii staţionarea pe partea carosabilă;'),
(75, 25, 0, 'C. da, dacă în afara luminilor de poziţie, prezenţa autovehiculului este semnalizată şi cu ajutorul triunghiurilor reflectorizante.'),
(76, 26, 0, 'A. când conduceţi efectiv autovehiculul pe drumurile publice;'),
(77, 26, 0, 'B. când autovehiculul este oprit pe partea carosabilă;'),
(78, 26, 1, 'C. atât în timpul conducerii efective, cât şi atunci când autovehiculul este oprit.'),
(79, 27, 0, 'A. să arunce din vehicul obiecte, substanţe sau alte bunuri;'),
(80, 27, 0, 'B. să deschidă uşile, dacă vehiculul este oprit sau staţionat pe partea carosabilă;'),
(81, 27, 0, 'C. să folosească instalaţia de sonorizare cu care este echipat autoturismul.'),
(82, 28, 1, 'A. penal;'),
(83, 28, 0, 'B. contravenţional;'),
(84, 28, 0, 'C. amendă contravenţională şi reţinerea permisului de conducere.'),
(85, 29, 0, 'A. da, dacă extremitatea obiectelor este semnalizată cu un steag roşu;'),
(86, 29, 1, 'B. nu;'),
(87, 29, 0, 'C. da, dacă obiectele depăşesc lăţimea autovehiculului.'),
(88, 30, 0, 'A. amortizarea rapidă a trepidaţiilor datorate denivelărilor existente pe drumul public;'),
(89, 30, 1, 'B. protecţia suplimentară a persoanelor în cazul unui impact puternic al autovehiculului;'),
(90, 30, 0, 'C. posibilitatea conducerii relaxate, cu capul sprijinit de aceasta.');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `points`
--

CREATE TABLE `points` (
  `username` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `nr` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `points`
--

INSERT INTO `points` (`username`, `type`, `nr`) VALUES
('3', 1, 5),
('ioana', 1, 6),
('ioana', 1, 10),
('ioana', 1, 15),
('ioana', 2, 1),
('brendon', 1, 5),
('ioana', 1, 2),
('gina', 1, 1),
('', 1, 2),
('', 1, 2);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `questions`
--

INSERT INTO `questions` (`question_number`, `question`) VALUES
(1, 'Viteza de deplasare trebuie redusă până la 30 km/h în localități sau 50 km/h în afara localităților:'),
(2, 'Ce culoare pot avea lămpile cu lumină intermitentă din spatele autovehiculului?'),
(3, 'Poate staționa noaptea, pe un drum public, remorca unui autoturism? '),
(4, 'La cererea polițistului rutier, împreună cu reprezentantul autorităților abilitate, conducătorul auto este obligat:\n'),
(5, 'La plecarea de pe loc cu autovehiculul, vă revin următoarele obliga?ii:'),
(6, 'Semnele unei fracturi sunt:'),
(7, 'Se interzice staționarea voluntar?:'),
(8, 'Pentru care dintre faptele de mai jos se aplică puncte de penalizare?'),
(9, 'De la ce distanță față de vehiculul care circulă din sens opus, pe timp de noapte, conducătorul unui autovehicul este obligat să folosească lumina de întâlnire?'),
(10, 'În care dintre situațiile de mai jos este interzisă oprirea vehiculelor pe drumurile publice?'),
(12, 'Poliţistul rutier poate dispune imobilizarea unui vehicul atunci când: '),
(11, 'În care dintre situaţii sunteţi obligat să reduceţi viteza?'),
(13, 'Care dintre următoarele fapte constituie infracţiuni?'),
(14, 'Care dintre faptele de mai jos se consideră infracţiune şi se pedepseşte ca atare?'),
(15, 'Oprirea este interzisă:'),
(16, 'La intersecţia nedirijată dintre un drum naţional şi unul judeţean, comunal sau local, prioritatea de trecere se acordă:'),
(17, 'Când este permisă trecerea la nivel cu o cale ferată fără bariere, prevăzută cu semnalizare luminoasă, dacă tocmai a trecut un tren?'),
(18, 'Aveţi obligaţia de a opri imediat autovehiculul la semnalele adresate de:'),
(19, 'Dacă semaforul în funcţiune se află instalat de cealaltă parte a intersecţiei, conducătorul de autovehicul:'),
(20, 'Depăşirea nu este permisă:'),
(21, 'Ce bunuri sunt supuse confiscării, în conformitate cu legea circulaţiei?'),
(22, 'La întâlnirea panoului de pe stâlp aveţi obligaţia:'),
(23, 'În ce situaţie se dispune imobilizarea vehiculului? '),
(24, 'La ieşirea din zonele rezidenţiale sau pietonale, sunteţi obligat să acordaţi prioritate:'),
(25, 'Este permisă staţionarea autovehiculelor pe timpul nopţii pe partea carosabilă a unui drum comunal neiluminat?'),
(26, 'Când se aplică regulile conduitei preventive?'),
(27, 'Conducătorului auto i se interzice:'),
(28, 'Cum se pedepseşte conducerea pe drumurile publice a unui autovehicul din categoria C, de către o persoană al cărei permis este valabil pentru categoria B?'),
(29, 'Conducătorul unui autoturism poate transporta obiecte al căror gabarit depăşeşte, împreună cu încărcătura, dimensiunile acestuia?'),
(30, 'Perna de aer (AIRBAG-ul) asigură:');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(3, 'Ioana', 'ioana@yahoo.com', '061c742185dfa0bc39a0084c03f8e3d3'),
(4, 'Ana', 'ana@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Maria', 'maria@yahoo.com', '250cf8b51c773f3f8dc8b4be867a9a02'),
(6, 'Brendon', 'brendon@yahoo.com', 'c6f057b86584942e415435ffb1fa93d4'),
(7, 'Sarah', 'sarah@yahoo.com', '698d51a19d8a121ce581499d7b701668'),
(8, 'khadir', 'khadir@yahoo.com', 'e4e08e8dc5f69794b299161f6d185b18'),
(9, 'Harry', 'harry@yahoo.com', 'db05833c29e688b5ab54d5e8608a72ec'),
(10, 'gina', 'gina@yahoo.com', '7df27de84ed79a46d75c7c57ad00f76f'),
(11, 'maria-ana', 'mariaana@yahoo.com', '2671273a6011cf1d333c1336649ac519');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
