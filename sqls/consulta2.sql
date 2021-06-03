-- Filmes que o ator de nome “FULANO” participou
SELECT F.NmFilme
FROM Filme F
INNER JOIN FilmeParticipante FP ON (F.IdFilme = FP.IdFilme)
INNER JOIN Ator A ON (A.IdAtor = FP.IdAtor)
WHERE A.NmAtor = "FULANO"