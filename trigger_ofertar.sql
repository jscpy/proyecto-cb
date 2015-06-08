CREATE TRIGGER table_ofertar 
	AFTER INSERT ON asignaturas FOR EACH ROW
	EXECUTE PROCEDURE fn_table_ofertar();
