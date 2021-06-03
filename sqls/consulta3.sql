-- - Listar os filmes do ano 2015 ordenados pelo quantidade de atores participantes e pelo título em ordem alfabética.
SELECT F.NmFilme, count(*) as QtdAtores
FROM Filme F
INNER JOIN FilmeParticipante FP on (F.IdFilme = FP.IdFilme)
WHERE F.AnoFilme = '2015'
GROUP BY F.NmFilme
ORDER BY count(*),
         F.NmFilme
