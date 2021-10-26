-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 26 oct. 2021 à 13:04
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `intranet`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectdiscipline`
--

CREATE TABLE `affectdiscipline` (
  `id` int(11) NOT NULL,
  `Projet` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `affectfichier`
--

CREATE TABLE `affectfichier` (
  `id` int(11) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Avancement` int(11) NOT NULL,
  `Rev_Externe` varchar(255) NOT NULL,
  `Date_Modification` varchar(255) NOT NULL,
  `Modifie_Par` varchar(255) NOT NULL,
  `Version_Interne` varchar(255) NOT NULL,
  `Etape` varchar(255) NOT NULL,
  `Download` varchar(255) NOT NULL,
  `Codage` varchar(255) NOT NULL,
  `discipline` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `Projet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `affectprojet`
--

CREATE TABLE `affectprojet` (
  `id` int(11) NOT NULL,
  `NomGroupe` varchar(255) NOT NULL,
  `IdProjet` int(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `affecttype`
--

CREATE TABLE `affecttype` (
  `id` int(11) NOT NULL,
  `projet` varchar(255) NOT NULL,
  `discipline` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `autorisation`
--

CREATE TABLE `autorisation` (
  `id` int(11) NOT NULL,
  `nomComplet` varchar(50) NOT NULL,
  `dateSortie` date NOT NULL,
  `heureSortie` time NOT NULL,
  `heureRetour` time NOT NULL,
  `raison` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `motif` varchar(255) NOT NULL,
  `validateur` varchar(100) NOT NULL,
  `etat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `conge`
--

CREATE TABLE `conge` (
  `id` int(11) NOT NULL,
  `nomComplet` varchar(50) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `nbrJour` int(11) NOT NULL,
  `raison` varchar(255) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `interimaire` varchar(50) NOT NULL,
  `validateur` varchar(50) NOT NULL,
  `info` varchar(255) NOT NULL,
  `etat` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `discipline`
--

CREATE TABLE `discipline` (
  `id` int(11) NOT NULL,
  `discipline` varchar(200) NOT NULL,
  `date1` varchar(50) NOT NULL,
  `adder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `date1` varchar(255) NOT NULL,
  `finance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fichier`
--

CREATE TABLE `fichier` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `IdMessage` int(11) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `finance`
--

CREATE TABLE `finance` (
  `Id` int(11) NOT NULL,
  `FichierNom` varchar(255) NOT NULL,
  `Comment` varchar(1000) NOT NULL,
  `Admin` varchar(250) NOT NULL,
  `Code` varchar(250) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `succursale` varchar(255) NOT NULL,
  `date1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `idFrom` int(11) NOT NULL,
  `idTo` int(11) NOT NULL,
  `contenu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `nouveaute`
--

CREATE TABLE `nouveaute` (
  `id` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `admin` int(11) NOT NULL,
  `date1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pointage`
--

CREATE TABLE `pointage` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `cnxDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `projet` varchar(200) NOT NULL,
  `date1` varchar(50) NOT NULL,
  `adder` int(11) NOT NULL,
  `designation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `suivie`
--

CREATE TABLE `suivie` (
  `Id` int(11) NOT NULL,
  `FichierNom` varchar(255) NOT NULL,
  `Admin` varchar(255) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `succursale` varchar(255) NOT NULL,
  `date1` varchar(255) NOT NULL,
  `Comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `suivifact`
--

CREATE TABLE `suivifact` (
  `nom` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `date1` varchar(255) NOT NULL,
  `finance` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE `tache` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `validation` varchar(255) NOT NULL,
  `date_limite` varchar(255) NOT NULL,
  `commentaire_adm` varchar(500) NOT NULL,
  `dateDajout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `support` varchar(255) NOT NULL,
  `equipe` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `priorite` varchar(50) NOT NULL,
  `dateCreation` date NOT NULL,
  `informer` varchar(50) NOT NULL,
  `pieceJointe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `transfer`
--

CREATE TABLE `transfer` (
  `id` int(11) NOT NULL,
  `destinataire` varchar(50) NOT NULL,
  `objet` varchar(50) NOT NULL,
  `commentaire` varchar(50) NOT NULL,
  `fichier` varchar(50) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `date1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `date1` varchar(50) NOT NULL,
  `adder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `specialite` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `role` varchar(200) NOT NULL,
  `cin` varchar(10) NOT NULL,
  `date1` varchar(200) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `specialite`, `email`, `password`, `photo`, `sexe`, `role`, `cin`, `date1`, `telephone`) VALUES
(29, '', '', '', 'admin@admin.com', 'admin', '', '', '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affectdiscipline`
--
ALTER TABLE `affectdiscipline`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `affectfichier`
--
ALTER TABLE `affectfichier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `affectprojet`
--
ALTER TABLE `affectprojet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `affecttype`
--
ALTER TABLE `affecttype`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `autorisation`
--
ALTER TABLE `autorisation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `conge`
--
ALTER TABLE `conge`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `discipline`
--
ALTER TABLE `discipline`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nouveaute`
--
ALTER TABLE `nouveaute`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pointage`
--
ALTER TABLE `pointage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `suivie`
--
ALTER TABLE `suivie`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `suivifact`
--
ALTER TABLE `suivifact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tache`
--
ALTER TABLE `tache`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `affectdiscipline`
--
ALTER TABLE `affectdiscipline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `affectfichier`
--
ALTER TABLE `affectfichier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `affectprojet`
--
ALTER TABLE `affectprojet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `affecttype`
--
ALTER TABLE `affecttype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `autorisation`
--
ALTER TABLE `autorisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `conge`
--
ALTER TABLE `conge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `discipline`
--
ALTER TABLE `discipline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `fichier`
--
ALTER TABLE `fichier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `finance`
--
ALTER TABLE `finance`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `nouveaute`
--
ALTER TABLE `nouveaute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `pointage`
--
ALTER TABLE `pointage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `suivie`
--
ALTER TABLE `suivie`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `suivifact`
--
ALTER TABLE `suivifact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tache`
--
ALTER TABLE `tache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
