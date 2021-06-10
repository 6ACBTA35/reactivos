Select
albums.name as Name,
albums.release-year as 'Release Year',
SUM(song.length) as 'Duration'
FROM albums 
JOIN song on albums.id-song.album_id
GROUP BY song.album_id
ORDER BY Duration DESC
LIMIT 1;