--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

--
-- Name: fn_table_ofertar(); Type: FUNCTION; Schema: public; Owner: administrador
--

CREATE FUNCTION fn_table_ofertar() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
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
$$;


ALTER FUNCTION public.fn_table_ofertar() OWNER TO administrador;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: asignaturas; Type: TABLE; Schema: public; Owner: administrador; Tablespace: 
--

CREATE TABLE asignaturas (
    id integer NOT NULL,
    nombre character varying(100) NOT NULL,
    clave character varying(100) NOT NULL,
    carrera character varying(100) NOT NULL,
    semestre character varying(5) NOT NULL,
    horas_teoricas integer NOT NULL,
    horas_practicas integer NOT NULL,
    horas_totales integer NOT NULL,
    fk_reticula character varying(50) NOT NULL
);


ALTER TABLE public.asignaturas OWNER TO administrador;

--
-- Name: asignaturas_id_seq; Type: SEQUENCE; Schema: public; Owner: administrador
--

CREATE SEQUENCE asignaturas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.asignaturas_id_seq OWNER TO administrador;

--
-- Name: asignaturas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: administrador
--

ALTER SEQUENCE asignaturas_id_seq OWNED BY asignaturas.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: administrador; Tablespace: 
--

CREATE TABLE migrations (
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO administrador;

--
-- Name: ofertar_materias; Type: TABLE; Schema: public; Owner: administrador; Tablespace: 
--

CREATE TABLE ofertar_materias (
    id integer NOT NULL,
    fk_asignatura integer NOT NULL,
    alumnos_grupo integer NOT NULL,
    alumnos_aceptados integer NOT NULL,
    alumnos_inscritos integer NOT NULL,
    sc_reprob_1a integer NOT NULL,
    sc_cumple_req integer NOT NULL,
    reprobados integer NOT NULL,
    grupos_estimados double precision NOT NULL,
    alumnos_esperados integer NOT NULL,
    reprob_real integer NOT NULL
);


ALTER TABLE public.ofertar_materias OWNER TO administrador;

--
-- Name: ofertar_materias_id_seq; Type: SEQUENCE; Schema: public; Owner: administrador
--

CREATE SEQUENCE ofertar_materias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ofertar_materias_id_seq OWNER TO administrador;

--
-- Name: ofertar_materias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: administrador
--

ALTER SEQUENCE ofertar_materias_id_seq OWNED BY ofertar_materias.id;


--
-- Name: reticulas; Type: TABLE; Schema: public; Owner: administrador; Tablespace: 
--

CREATE TABLE reticulas (
    id integer NOT NULL,
    clave character varying(50) NOT NULL,
    carrera character varying(50) NOT NULL
);


ALTER TABLE public.reticulas OWNER TO administrador;

--
-- Name: reticulas_id_seq; Type: SEQUENCE; Schema: public; Owner: administrador
--

CREATE SEQUENCE reticulas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.reticulas_id_seq OWNER TO administrador;

--
-- Name: reticulas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: administrador
--

ALTER SEQUENCE reticulas_id_seq OWNED BY reticulas.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: administrador; Tablespace: 
--

CREATE TABLE users (
    id integer NOT NULL,
    username character varying(100) NOT NULL,
    password character varying(100) NOT NULL,
    remember_token character varying(100)
);


ALTER TABLE public.users OWNER TO administrador;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: administrador
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO administrador;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: administrador
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: administrador
--

ALTER TABLE ONLY asignaturas ALTER COLUMN id SET DEFAULT nextval('asignaturas_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: administrador
--

ALTER TABLE ONLY ofertar_materias ALTER COLUMN id SET DEFAULT nextval('ofertar_materias_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: administrador
--

ALTER TABLE ONLY reticulas ALTER COLUMN id SET DEFAULT nextval('reticulas_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: administrador
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Name: asignaturas_pkey; Type: CONSTRAINT; Schema: public; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY asignaturas
    ADD CONSTRAINT asignaturas_pkey PRIMARY KEY (id);


--
-- Name: ofertar_materias_pkey; Type: CONSTRAINT; Schema: public; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY ofertar_materias
    ADD CONSTRAINT ofertar_materias_pkey PRIMARY KEY (id);


--
-- Name: reticulas_clave_key; Type: CONSTRAINT; Schema: public; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY reticulas
    ADD CONSTRAINT reticulas_clave_key UNIQUE (clave);


--
-- Name: reticulas_pkey; Type: CONSTRAINT; Schema: public; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY reticulas
    ADD CONSTRAINT reticulas_pkey PRIMARY KEY (id);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: table_ofertar; Type: TRIGGER; Schema: public; Owner: administrador
--

CREATE TRIGGER table_ofertar AFTER INSERT ON asignaturas FOR EACH ROW EXECUTE PROCEDURE fn_table_ofertar();


--
-- Name: asignaturas_fk_reticula_fkey; Type: FK CONSTRAINT; Schema: public; Owner: administrador
--

ALTER TABLE ONLY asignaturas
    ADD CONSTRAINT asignaturas_fk_reticula_fkey FOREIGN KEY (fk_reticula) REFERENCES reticulas(clave) ON UPDATE CASCADE;


--
-- Name: ofertar_materias_fk_asignatura_fkey; Type: FK CONSTRAINT; Schema: public; Owner: administrador
--

ALTER TABLE ONLY ofertar_materias
    ADD CONSTRAINT ofertar_materias_fk_asignatura_fkey FOREIGN KEY (fk_asignatura) REFERENCES asignaturas(id) ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

