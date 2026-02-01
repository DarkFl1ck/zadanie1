CREATE TABLE IF NOT EXISTS dane_studenta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie_nazwisko VARCHAR(100),
    nr_albumu VARCHAR(10),
    data_wpisu TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO dane_studenta (imie_nazwisko, nr_albumu) 
SELECT 'Twoje Imie i Nazwisko', '89411'
WHERE NOT EXISTS (SELECT 1 FROM dane_studenta WHERE nr_albumu = '89411');
