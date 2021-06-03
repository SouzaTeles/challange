-- Listar os atores que trabalharam em filmes cujo diretor foi “SPIELBERG”
SELECT *
FROM Ator A
INNER JOIN FilmeParticipante FP ON (FP.IdAtor = A.IdAtor)
INNER JOIN FilmeDiretor FD ON (FP.IdFilme = FD.IdFilme)
WHERE FD.IdAtor in
    (SELECT IdAtor
     FROM Ator
     WHERE NmAtor = 'SPIELBERG')