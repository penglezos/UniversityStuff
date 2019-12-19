-- INNER JOIN ON TABLES
SELECT exoda_kat.exoda_kat_name,
	exoda.exoda_date,
    exoda.exoda_poso
FROM exoda
INNER JOIN exoda_kat on exoda_kat.exoda_kat_id = exoda.exoda_kat_id

-- ORDER DATES --
SELECT exoda_kat.exoda_kat_name,
	exoda.exoda_date,
    exoda.exoda_poso
FROM exoda
INNER JOIN exoda_kat on exoda_kat.exoda_kat_id = exoda.exoda_kat_id

ORDER BY exoda_date

-- INNER JOIN ON ESODA
SELECT esoda_katathgoria.esoda_kat_onoma,
	esoda.esoda_date,
    esoda.esoda_poso
FROM esoda
INNER JOIN esoda_katathgoria on esoda_katathgoria.esoda_cat_id = esoda.esoda_kat_id

ORDER BY esoda_date
