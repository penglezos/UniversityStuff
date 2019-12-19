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
