-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jul-2018 às 19:06
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc_bd`
--
CREATE DATABASE IF NOT EXISTS `tcc_bd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tcc_bd`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrativo`
--

CREATE TABLE `administrativo` (
  `idAdministrativo` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `permissao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula`
--

CREATE TABLE `aula` (
  `idAula` int(11) NOT NULL,
  `nmrPosicao` int(11) DEFAULT NULL,
  `Materia_idMateria` int(11) NOT NULL,
  `Professor_idProfessor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulacronogramadia`
--

CREATE TABLE `aulacronogramadia` (
  `Aula_idAula` int(11) NOT NULL,
  `CronogramaDia_idCronogramaDia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comum`
--

CREATE TABLE `comum` (
  `idComum` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `ultimo_nome` varchar(30) NOT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comum`
--

INSERT INTO `comum` (`idComum`, `nome`, `ultimo_nome`, `cpf`, `telefone`) VALUES
(5, 'Jorge', 'Batista', '', ''),
(7, 'Rubens', 'George', '', ''),
(8, 'Cesar', 'SobreoNome', NULL, NULL),
(14, 'Cezar', '123', NULL, NULL),
(15, 'Teste', 'Teste', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cronograma`
--

CREATE TABLE `cronograma` (
  `idCronograma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cronogramadia`
--

CREATE TABLE `cronogramadia` (
  `idCronogramaDia` int(11) NOT NULL,
  `nmr_aula` int(11) NOT NULL,
  `Cronograma_idCronograma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cronogramadiahorariosdisponiveisinstituicao`
--

CREATE TABLE `cronogramadiahorariosdisponiveisinstituicao` (
  `CronogramaDia_idCronogramaDia` int(11) NOT NULL,
  `HorariosDisponiveisInstituicao_idHorariosDisponiveisInstituicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horariodiario`
--

CREATE TABLE `horariodiario` (
  `idHorarioDiario` int(11) NOT NULL,
  `horarioInicial` date NOT NULL,
  `horarioFinal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horariodiariohorariosdisponiveisinstituicao`
--

CREATE TABLE `horariodiariohorariosdisponiveisinstituicao` (
  `HorarioDiario_idHorarioDiario` int(11) NOT NULL,
  `HorariosDisponiveisInstituicao_idHorariosDisponiveisInstituicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horariosdisponiveisinstituicao`
--

CREATE TABLE `horariosdisponiveisinstituicao` (
  `idHorariosDisponiveisInstituicao` int(11) NOT NULL,
  `tipoPeriodo` int(11) NOT NULL,
  `horarioInicial` date NOT NULL,
  `horarioFinal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horariosdisponiveisprofessores`
--

CREATE TABLE `horariosdisponiveisprofessores` (
  `idHorariosDisponiveisProfessores` int(11) NOT NULL,
  `horarioInicial` time NOT NULL,
  `horarioFinal` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `horariosdisponiveisprofessores`
--

INSERT INTO `horariosdisponiveisprofessores` (`idHorariosDisponiveisProfessores`, `horarioInicial`, `horarioFinal`) VALUES
(2, '13:32:00', '14:32:00'),
(3, '12:00:00', '15:00:00'),
(4, '04:00:00', '06:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `idInstituicao` int(11) NOT NULL,
  `nomeInstituicao` varchar(60) NOT NULL,
  `endereco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicaousuario`
--

CREATE TABLE `instituicaousuario` (
  `Instituicao_idInstituicao` int(11) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `idMateria` int(11) NOT NULL,
  `materia` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `idProfessor` int(11) NOT NULL,
  `nomeProfessor` varchar(45) NOT NULL,
  `HorariosDisponiveisProfessores_idHorariosDisponiveisProfessores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`idProfessor`, `nomeProfessor`, `HorariosDisponiveisProfessores_idHorariosDisponiveisProfessores`) VALUES
(1, 'Araujo', 2),
(2, 'Jurandir', 3),
(3, 'Sandra', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `idTurma` int(11) NOT NULL,
  `modulo` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `cod_turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmacomum`
--

CREATE TABLE `turmacomum` (
  `Turma_idTurma` int(11) NOT NULL,
  `Comum_idComum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmamateria`
--

CREATE TABLE `turmamateria` (
  `Materia_idMateria` int(11) NOT NULL,
  `Turma_idTurma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` char(32) NOT NULL,
  `Administrativo_idAdministrativo` int(11) DEFAULT NULL,
  `Comum_idComum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `email`, `senha`, `Administrativo_idAdministrativo`, `Comum_idComum`) VALUES
(4, 'email.email@email.com', '202cb962ac59075b964b07152d234b70', NULL, 5),
(6, 'jooj@jooj.com', '4297f44b13955235245b2497399d7a93', NULL, 7),
(7, 'cesar@email.com', '202cb962ac59075b964b07152d234b70', NULL, 11),
(8, 'email@email.com', 'e8d95a51f3af4a3b134bf6bb680a213a', NULL, 12),
(10, 'cesar@email.com', '202cb962ac59075b964b07152d234b70', NULL, 14),
(11, 'email@gmail.com', '4297f44b13955235245b2497399d7a93', NULL, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrativo`
--
ALTER TABLE `administrativo`
  ADD PRIMARY KEY (`idAdministrativo`);

--
-- Indexes for table `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`idAula`),
  ADD KEY `fk_Aula_Materia1_idx` (`Materia_idMateria`),
  ADD KEY `fk_Aula_Professor1_idx` (`Professor_idProfessor`);

--
-- Indexes for table `aulacronogramadia`
--
ALTER TABLE `aulacronogramadia`
  ADD PRIMARY KEY (`Aula_idAula`,`CronogramaDia_idCronogramaDia`),
  ADD KEY `fk_Aula_has_CronogramaDia_CronogramaDia1_idx` (`CronogramaDia_idCronogramaDia`),
  ADD KEY `fk_Aula_has_CronogramaDia_Aula1_idx` (`Aula_idAula`);

--
-- Indexes for table `comum`
--
ALTER TABLE `comum`
  ADD PRIMARY KEY (`idComum`);

--
-- Indexes for table `cronograma`
--
ALTER TABLE `cronograma`
  ADD PRIMARY KEY (`idCronograma`);

--
-- Indexes for table `cronogramadia`
--
ALTER TABLE `cronogramadia`
  ADD PRIMARY KEY (`idCronogramaDia`,`Cronograma_idCronograma`),
  ADD KEY `fk_CronogramaDia_Cronograma1_idx` (`Cronograma_idCronograma`);

--
-- Indexes for table `cronogramadiahorariosdisponiveisinstituicao`
--
ALTER TABLE `cronogramadiahorariosdisponiveisinstituicao`
  ADD PRIMARY KEY (`CronogramaDia_idCronogramaDia`,`HorariosDisponiveisInstituicao_idHorariosDisponiveisInstituicao`),
  ADD KEY `fk_CronogramaDia_has_HorariosDisponiveisInstituicao_Horario_idx` (`HorariosDisponiveisInstituicao_idHorariosDisponiveisInstituicao`),
  ADD KEY `fk_CronogramaDia_has_HorariosDisponiveisInstituicao_Cronogr_idx` (`CronogramaDia_idCronogramaDia`);

--
-- Indexes for table `horariodiario`
--
ALTER TABLE `horariodiario`
  ADD PRIMARY KEY (`idHorarioDiario`);

--
-- Indexes for table `horariodiariohorariosdisponiveisinstituicao`
--
ALTER TABLE `horariodiariohorariosdisponiveisinstituicao`
  ADD PRIMARY KEY (`HorarioDiario_idHorarioDiario`,`HorariosDisponiveisInstituicao_idHorariosDisponiveisInstituicao`),
  ADD KEY `fk_HorarioDiario_has_HorariosDisponiveisInstituicao_Horario_idx` (`HorariosDisponiveisInstituicao_idHorariosDisponiveisInstituicao`),
  ADD KEY `fk_HorarioDiario_has_HorariosDisponiveisInstituicao_Horario_idx1` (`HorarioDiario_idHorarioDiario`);

--
-- Indexes for table `horariosdisponiveisinstituicao`
--
ALTER TABLE `horariosdisponiveisinstituicao`
  ADD PRIMARY KEY (`idHorariosDisponiveisInstituicao`);

--
-- Indexes for table `horariosdisponiveisprofessores`
--
ALTER TABLE `horariosdisponiveisprofessores`
  ADD PRIMARY KEY (`idHorariosDisponiveisProfessores`);

--
-- Indexes for table `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`idInstituicao`);

--
-- Indexes for table `instituicaousuario`
--
ALTER TABLE `instituicaousuario`
  ADD PRIMARY KEY (`Instituicao_idInstituicao`,`Usuario_idUsuario`),
  ADD KEY `fk_Instituicao_has_Usuario_Usuario1_idx` (`Usuario_idUsuario`),
  ADD KEY `fk_Instituicao_has_Usuario_Instituicao_idx` (`Instituicao_idInstituicao`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`idMateria`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`idProfessor`),
  ADD KEY `fk_Professor_HorariosDisponiveisProfessores1_idx` (`HorariosDisponiveisProfessores_idHorariosDisponiveisProfessores`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`idTurma`);

--
-- Indexes for table `turmacomum`
--
ALTER TABLE `turmacomum`
  ADD PRIMARY KEY (`Turma_idTurma`,`Comum_idComum`),
  ADD KEY `fk_Turma_has_Comum_Comum1_idx` (`Comum_idComum`),
  ADD KEY `fk_Turma_has_Comum_Turma1_idx` (`Turma_idTurma`);

--
-- Indexes for table `turmamateria`
--
ALTER TABLE `turmamateria`
  ADD PRIMARY KEY (`Materia_idMateria`,`Turma_idTurma`),
  ADD KEY `fk_Materia_has_Turma_Turma1_idx` (`Turma_idTurma`),
  ADD KEY `fk_Materia_has_Turma_Materia1_idx` (`Materia_idMateria`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_Usuario_Administrativo1_idx` (`Administrativo_idAdministrativo`),
  ADD KEY `fk_Usuario_Comum1_idx` (`Comum_idComum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrativo`
--
ALTER TABLE `administrativo`
  MODIFY `idAdministrativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aula`
--
ALTER TABLE `aula`
  MODIFY `idAula` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comum`
--
ALTER TABLE `comum`
  MODIFY `idComum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cronograma`
--
ALTER TABLE `cronograma`
  MODIFY `idCronograma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cronogramadia`
--
ALTER TABLE `cronogramadia`
  MODIFY `idCronogramaDia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horariodiario`
--
ALTER TABLE `horariodiario`
  MODIFY `idHorarioDiario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horariosdisponiveisinstituicao`
--
ALTER TABLE `horariosdisponiveisinstituicao`
  MODIFY `idHorariosDisponiveisInstituicao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horariosdisponiveisprofessores`
--
ALTER TABLE `horariosdisponiveisprofessores`
  MODIFY `idHorariosDisponiveisProfessores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `idInstituicao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `idMateria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `idProfessor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `idTurma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `fk_Aula_Materia1` FOREIGN KEY (`Materia_idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Aula_Professor1` FOREIGN KEY (`Professor_idProfessor`) REFERENCES `professor` (`idProfessor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `aulacronogramadia`
--
ALTER TABLE `aulacronogramadia`
  ADD CONSTRAINT `fk_Aula_has_CronogramaDia_Aula1` FOREIGN KEY (`Aula_idAula`) REFERENCES `aula` (`idAula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Aula_has_CronogramaDia_CronogramaDia1` FOREIGN KEY (`CronogramaDia_idCronogramaDia`) REFERENCES `cronogramadia` (`idCronogramaDia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cronogramadia`
--
ALTER TABLE `cronogramadia`
  ADD CONSTRAINT `fk_CronogramaDia_Cronograma1` FOREIGN KEY (`Cronograma_idCronograma`) REFERENCES `cronograma` (`idCronograma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cronogramadiahorariosdisponiveisinstituicao`
--
ALTER TABLE `cronogramadiahorariosdisponiveisinstituicao`
  ADD CONSTRAINT `fk_CronogramaDia_has_HorariosDisponiveisInstituicao_Cronogram1` FOREIGN KEY (`CronogramaDia_idCronogramaDia`) REFERENCES `cronogramadia` (`idCronogramaDia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CronogramaDia_has_HorariosDisponiveisInstituicao_HorariosD1` FOREIGN KEY (`HorariosDisponiveisInstituicao_idHorariosDisponiveisInstituicao`) REFERENCES `horariosdisponiveisinstituicao` (`idHorariosDisponiveisInstituicao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `horariodiariohorariosdisponiveisinstituicao`
--
ALTER TABLE `horariodiariohorariosdisponiveisinstituicao`
  ADD CONSTRAINT `fk_HorarioDiario_has_HorariosDisponiveisInstituicao_HorarioDi1` FOREIGN KEY (`HorarioDiario_idHorarioDiario`) REFERENCES `horariodiario` (`idHorarioDiario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_HorarioDiario_has_HorariosDisponiveisInstituicao_HorariosD1` FOREIGN KEY (`HorariosDisponiveisInstituicao_idHorariosDisponiveisInstituicao`) REFERENCES `horariosdisponiveisinstituicao` (`idHorariosDisponiveisInstituicao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `instituicaousuario`
--
ALTER TABLE `instituicaousuario`
  ADD CONSTRAINT `fk_Instituicao_has_Usuario_Instituicao` FOREIGN KEY (`Instituicao_idInstituicao`) REFERENCES `instituicao` (`idInstituicao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Instituicao_has_Usuario_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `fk_Professor_HorariosDisponiveisProfessores1` FOREIGN KEY (`HorariosDisponiveisProfessores_idHorariosDisponiveisProfessores`) REFERENCES `horariosdisponiveisprofessores` (`idHorariosDisponiveisProfessores`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `turmacomum`
--
ALTER TABLE `turmacomum`
  ADD CONSTRAINT `fk_Turma_has_Comum_Comum1` FOREIGN KEY (`Comum_idComum`) REFERENCES `comum` (`idComum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Turma_has_Comum_Turma1` FOREIGN KEY (`Turma_idTurma`) REFERENCES `turma` (`idTurma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `turmamateria`
--
ALTER TABLE `turmamateria`
  ADD CONSTRAINT `fk_Materia_has_Turma_Materia1` FOREIGN KEY (`Materia_idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Materia_has_Turma_Turma1` FOREIGN KEY (`Turma_idTurma`) REFERENCES `turma` (`idTurma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Administrativo1` FOREIGN KEY (`Administrativo_idAdministrativo`) REFERENCES `administrativo` (`idAdministrativo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_Comum1` FOREIGN KEY (`Comum_idComum`) REFERENCES `comum` (`idComum`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
