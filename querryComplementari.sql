--  true query to field entity COPIA

SET @P = 0;
INSERT INTO COPIA(CODICE_UNIVOCO, ISBN_ID, NUM_COPIE, ID_BIBLIOTECA)
	SELECT (@p := @p + 1) p ,
	L.ISBN_ID, 1, (SELECT FLOOR(1 + RAND()*(12-1+1)) AS Random_Number)
    FROM LIBRI L 
    JOIN (
			SELECT 1 as number UNION
			SELECT 2 UNION
			SELECT 3 UNION
            SELECT 4 UNION
            SELECT 5 UNION
            SELECT 6 UNION
            SELECT 7 UNION
            SELECT 8 UNION
            SELECT 9 -- you can continue this line
			) n
	ON L.NUM_COPIE >=n.number;
    
-- FINE QUERY

-- Domanda 5
-- Nolleggio un libro

-- test per prendere solo un codice univoco (abbiamo scelto di prendere 
-- sempre quello col piu piccollo numero
-- SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
SELECT C.ISBN_ID, C.CODICE_UNIVOCO, C.ID_BIBLIOTECA
	FROM COPIA C
	LEFT JOIN LIBRI L
		ON C.ISBN_ID=L.ISBN_ID
	WHERE L.TITOLO="Get Smart"
	limit 1
     -- GROUP BY C.ISBN_ID
     ;

-- True inserimento in Nolleggia
INSERT INTO NOLLEGGIA(MATRICOLA, CODICE_UNIVOCO, ISBN_ID, ID_BIBLIOTECA,
	DATA_USCITA, DATA_RITORNO)
	SELECT (SELECT MATRICOLA FROM STUDENTE
		WHERE MATRICOLA="171440") , 
		C.CODICE_UNIVOCO CODICE_UNIVOCO, C.ISBN_ID ISBN_ID,
		C.ID_BIBLIOTECA ID_BIBLIOTECA, curdate(), curdate()+interval 5 day
	FROM COPIA C
	LEFT JOIN LIBRI L
		ON C.ISBN_ID=L.ISBN_ID
	WHERE L.TITOLO="South of Heaven West of Hell"
	limit 1;
-- DONE
      
      
SELECT MATRICOLA FROM STUDENTE
		WHERE MATRICOLA="171440";
            
;
 


--


 
-- test 
SELECT (SELECT MATRICOLA FROM STUDENTE
		WHERE MATRICOLA="170189") , 
		C.CODICE_UNIVOCO CODICE_UNIVOCO, C.ISBN_ID ISBN_ID,
		C.ID_BIBLIOTECA ID_BIBLIOTECA, curdate(), curdate()+interval 5 day
	FROM COPIA C
	LEFT JOIN LIBRI L
		ON C.ISBN_ID=L.ISBN_ID
	WHERE L.TITOLO="Get Smart"
	limit 1;
     -- GROUP BY C.ISBN_ID
     -- , curdate(), curdate()+interval 5 day;
-- success

-- test storico for single person
SELECT S.NOME , S.COGNOME, S.MATRICOLA, L.TITOLO, N.CODICE_UNIVOCO CU_LIBRO,
 N.DATA_USCITA, N.DATA_RITORNO, B.NOME_BIBLIOTECA
	FROM NOLLEGGIA N
    LEFT JOIN  STUDENTE S
		ON S.MATRICOLA= N.MATRICOLA
	LEFT JOIN LIBRI L
		ON N.ISBN_ID = L.ISBN_ID
	LEFT JOIN BIBLIOTECA B
		ON N.ID_BIBLIOTECA = B.ID_BIBLIOTECA
    WHERE N.MATRICOLA="170189";
-- success  


-- test storico for all rent
SELECT S.NOME , S.COGNOME, S.MATRICOLA, L.TITOLO, N.CODICE_UNIVOCO CU_LIBRO,
 N.DATA_USCITA, N.DATA_RITORNO
	FROM NOLLEGGIA N
    LEFT JOIN  STUDENTE S
		ON S.MATRICOLA= N.MATRICOLA
	LEFT JOIN LIBRI L
		ON N.ISBN_ID = L.ISBN_ID;
   -- WHERE N.MATRICOLA="170189";
-- success  

-- test storico for all rent in a range of date
SELECT S.NOME , S.COGNOME, S.MATRICOLA, L.TITOLO, N.CODICE_UNIVOCO CU_LIBRO,
 N.DATA_USCITA, N.DATA_RITORNO
	FROM NOLLEGGIA N
    LEFT JOIN  STUDENTE S
		ON S.MATRICOLA= N.MATRICOLA
	LEFT JOIN LIBRI L
		ON N.ISBN_ID = L.ISBN_ID
    WHERE N.DATA_USCITA >='2022-09-22' AND N.DATA_RITORNO <= '2022-09-27';
-- success

-- test storico for all rent almost termianted(prossime scadenze)
SELECT S.NOME , S.COGNOME, S.MATRICOLA, L.TITOLO, N.CODICE_UNIVOCO CU_LIBRO,
 N.DATA_USCITA, N.DATA_RITORNO
	FROM NOLLEGGIA N
    LEFT JOIN  STUDENTE S
		ON S.MATRICOLA= N.MATRICOLA
	LEFT JOIN LIBRI L
		ON N.ISBN_ID = L.ISBN_ID
   WHERE TIMESTAMPDIFF(DAY,CURDATE(),N.DATA_RITORNO)>0;
	
		-- AND N.MATRICOLA="170189" ; IF WE PRECISE THE STUDENT REG NUMBER
-- success

SELECT S.MATRICOLA FROM STUDENTE S
	WHERE  S.NOME = "liani"
;



-- Domanda 8 stat 1:
SELECT IFNULL(L.ANNO_PUB, "NOT VALID DATE") ANNO_PUBLICAZZIONE ,  IFNULL(SUM(L.NUM_COPIE),"0") AS NUMERO_COPIE
	FROM LIBRI L
	WHERE L.ANNO_PUB = "20100";
-- fine stat 1

-- Domanda 8 stat 2:
SELECT COUNT(N.ID_BIBLIOTECA)
	FROM NOLLEGGIA N
    WHERE N.ID_BIBLIOTECA="6";

-- fine stat 2


-- Domanda 8 stat 3:
SELECT A.NOME, A.COGNOME, COUNT(S.AUTORI_ID) AS LIBRI_PUBLICATI
	FROM SCRITTO_DA S
    LEFT JOIN AUTORI A
		ON S.AUTORI_ID = A.AUTORI_ID
        GROUP BY S.AUTORI_ID
	;
-- fine stat 3
-- SUCCESS

--



-- TEST
SELECT S.AUTORI_ID, COUNT(*) AS TOTAL
	FROM SCRITTO_DA S
    GROUP BY S.AUTORI_ID ;
-- DONE
--


-- test calcolo data
select curdate()+interval 5 day;
select "2022-09-20"+interval 30 day;