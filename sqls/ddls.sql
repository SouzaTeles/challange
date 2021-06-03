CREATE TABLE Filme (
    IdFilme int NOT NULL,
    NmFilme varchar(100) NOT NULL,
    AnoLancamento char(4) NOT NULL,
    PRIMARY KEY (IdFilme),
);
CREATE TABLE FilmeParticipante (
    IdFilmeParticipante int NOT NULL,
    IdFilme int NOT NULL,
    IdAtor int NOT NULL,
    PRIMARY KEY (IdFilmeParticipante),
    CONSTRAINT FK_Filme FOREIGN KEY (IdFilme) REFERENCES Filme (IdFilme),
    CONSTRAINT FK_Ator FOREIGN KEY (IdAtor) REFERENCES Ator (IdAtor)
);
CREATE TABLE FilmeDiretor (
    IdFilmeDiretor int NOT NULL,
    IdFilme int NOT NULL,
    IdAtor int NOT NULL,
    PRIMARY KEY (IdFilmeDiretor),
    CONSTRAINT FK_Filme FOREIGN KEY (IdFilme) REFERENCES Filme (IdFilme),
    CONSTRAINT FK_Ator FOREIGN KEY (IdAtor) REFERENCES Ator (IdAtor)
);
CREATE TABLE Ator (
    IdAtor int NOT NULL,
    NmAtor varchar(60) NOT NULL,
    PRIMARY KEY (IdAtor)
);
