CREATE OR REPLACE FUNCTION fn_table_ofertar() RETURNS TRIGGER  AS
$$
BEGIN
	IF (TG_OP='INSERT') THEN 
		INSERT INTO ofertar_materias ("fk_asignatura","alumnos_grupo","alumnos_aceptados",
			"alumnos_inscritos","sc_reprob_1a","sc_cumple_req","reprobados","grupos_estimados",
			"alumnos_esperados","reprob_real")
		VALUES (NEW.id,37,0,0,0,0,0,0,0,0);
		RETURN NEW;
	END IF;
RETURN NULL;
END;
$$
LANGUAGE PLPGSQL;