CREATE TABLE `tbllesson` (
  `LessonID` int(11) NOT NULL,
  `LessonChapter` varchar(90) NOT NULL,
  `LessonTitle` varchar(90) NOT NULL,
  `FileLocation` text NOT NULL,
  `Category` varchar(90) NOT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tblstudent` (
  `StudentID` int(11) NOT NULL,
  `Fname` varchar(90) NOT NULL,
  `Lname` varchar(90) NOT NULL,
  `Address` varchar(90) NOT NULL,
  `MobileNo` varchar(90) NOT NULL,
  `STUDUSERNAME` varchar(90) NOT NULL,
  `STUDPASS` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `tblusers` (
  `USERID` int(11) NOT NULL,
  `NAME` varchar(90) NOT NULL,
  `UEMAIL` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `TYPE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblusers`
--

INSERT INTO `tblusers` (`USERID`, `NAME`, `UEMAIL`, `PASS`, `TYPE`) VALUES
(3, 'alivia', 'alivia', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--

-- Indeks untuk tabel `tbllesson`
--
ALTER TABLE `tbllesson`
  ADD PRIMARY KEY (`LessonID`);

--
-- Indeks untuk tabel `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`StudentID`) USING BTREE;

--
-- Indeks untuk tabel `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`USERID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbllesson`
--
ALTER TABLE `tbllesson`
  MODIFY `LessonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
