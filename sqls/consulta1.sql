-- Atores do filme com título “XYZ”
SELECT A.NmAtor
FROM Ator A
INNER JOIN FilmeParticipante FP ON (A.IdAtor = FP.IdAtor)
INNER JOIN Filme F ON (F.IdFilme = FP.IdFilme)
WHERE F.NmFilme = "XYZ"