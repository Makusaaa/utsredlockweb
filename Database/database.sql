CREATE DATABASE redlock;
USE redlock;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Jabatan` varchar(20) NOT NULL
);
INSERT INTO `users` (`ID`, `Nama`, `Alamat`, `Jabatan`) VALUES
(1, 'Max', 'Bekasi', 'Pekerja'),
(2, 'Ale', 'Lampung', 'Boss'),
(3, 'Hugo', 'Pekanbaru', 'Sekretaris'),
(4, 'Deevan', 'Bogor', 'Bendahara');
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;