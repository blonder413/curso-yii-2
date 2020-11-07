--
-- PostgreSQL database dump
--

-- Dumped from database version 12.4 (Ubuntu 12.4-0ubuntu0.20.04.1)
-- Dumped by pg_dump version 12.4 (Ubuntu 12.4-0ubuntu0.20.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: autor; Type: TABLE; Schema: public; Owner: cursos
--

CREATE TABLE public.autor (
    id integer NOT NULL,
    nombre character varying(155) NOT NULL,
    slug character varying(155) NOT NULL,
    pais_id integer,
    created_by integer,
    created_at timestamp(0) without time zone,
    updated_by integer,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.autor OWNER TO cursos;

--
-- Name: autor_id_seq; Type: SEQUENCE; Schema: public; Owner: cursos
--

CREATE SEQUENCE public.autor_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.autor_id_seq OWNER TO cursos;

--
-- Name: autor_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: cursos
--

ALTER SEQUENCE public.autor_id_seq OWNED BY public.autor.id;


--
-- Name: libro; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.libro (
    id integer NOT NULL,
    titulo character varying(255),
    autor character varying(255),
    editorial character varying(255),
    publicado_en date
);


ALTER TABLE public.libro OWNER TO postgres;

--
-- Name: libro_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.libro_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.libro_id_seq OWNER TO postgres;

--
-- Name: libro_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.libro_id_seq OWNED BY public.libro.id;


--
-- Name: migration; Type: TABLE; Schema: public; Owner: cursos
--

CREATE TABLE public.migration (
    version character varying(180) NOT NULL,
    apply_time integer
);


ALTER TABLE public.migration OWNER TO cursos;

--
-- Name: pais; Type: TABLE; Schema: public; Owner: cursos
--

CREATE TABLE public.pais (
    id integer NOT NULL,
    pais character varying(155) NOT NULL,
    slug character varying(155) NOT NULL,
    created_by integer,
    created_at timestamp(0) without time zone,
    updated_by integer,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.pais OWNER TO cursos;

--
-- Name: pais_id_seq; Type: SEQUENCE; Schema: public; Owner: cursos
--

CREATE SEQUENCE public.pais_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pais_id_seq OWNER TO cursos;

--
-- Name: pais_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: cursos
--

ALTER SEQUENCE public.pais_id_seq OWNED BY public.pais.id;


--
-- Name: user; Type: TABLE; Schema: public; Owner: cursos
--

CREATE TABLE public."user" (
    id integer NOT NULL,
    username character varying(255) NOT NULL,
    auth_key character varying(32) NOT NULL,
    password_hash character varying(255) NOT NULL,
    password_reset_token character varying(255),
    email character varying(255) NOT NULL,
    status smallint DEFAULT 10 NOT NULL,
    created_at integer NOT NULL,
    updated_at integer NOT NULL,
    verification_token character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public."user" OWNER TO cursos;

--
-- Name: user_id_seq; Type: SEQUENCE; Schema: public; Owner: cursos
--

CREATE SEQUENCE public.user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_id_seq OWNER TO cursos;

--
-- Name: user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: cursos
--

ALTER SEQUENCE public.user_id_seq OWNED BY public."user".id;


--
-- Name: autor id; Type: DEFAULT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public.autor ALTER COLUMN id SET DEFAULT nextval('public.autor_id_seq'::regclass);


--
-- Name: libro id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.libro ALTER COLUMN id SET DEFAULT nextval('public.libro_id_seq'::regclass);


--
-- Name: pais id; Type: DEFAULT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public.pais ALTER COLUMN id SET DEFAULT nextval('public.pais_id_seq'::regclass);


--
-- Name: user id; Type: DEFAULT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public."user" ALTER COLUMN id SET DEFAULT nextval('public.user_id_seq'::regclass);


--
-- Data for Name: autor; Type: TABLE DATA; Schema: public; Owner: cursos
--

COPY public.autor (id, nombre, slug, pais_id, created_by, created_at, updated_by, updated_at) FROM stdin;
\.


--
-- Data for Name: libro; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.libro (id, titulo, autor, editorial, publicado_en) FROM stdin;
1	Relato de un náufrago	Gabriel García Márquez	Norma	1989-01-01
\.


--
-- Data for Name: migration; Type: TABLE DATA; Schema: public; Owner: cursos
--

COPY public.migration (version, apply_time) FROM stdin;
m000000_000000_base	1604777376
m130524_201442_init	1604777378
m190124_110200_add_verification_token_column_to_user_table	1604777378
m201104_112929_create_pais_table	1604777378
m201104_113505_create_autor_table	1604777378
\.


--
-- Data for Name: pais; Type: TABLE DATA; Schema: public; Owner: cursos
--

COPY public.pais (id, pais, slug, created_by, created_at, updated_by, updated_at) FROM stdin;
2	Perú	peru	1	0200-11-07 00:00:00	1	0200-11-07 00:00:00
3	Argentina	argentina	1	0200-11-07 00:00:00	1	0200-11-07 00:00:00
4	Chile	chile	1	0200-11-07 00:00:00	1	0200-11-07 00:00:00
5	Bolivia	bolivia	1	0200-11-07 00:00:00	1	0200-11-07 00:00:00
6	Uruguay	uruguay	1	0200-11-07 00:00:00	1	0200-11-07 00:00:00
1	República de Colombia	colombia	1	0200-11-07 00:00:00	1	2020-11-07 00:00:00
\.


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: cursos
--

COPY public."user" (id, username, auth_key, password_hash, password_reset_token, email, status, created_at, updated_at, verification_token) FROM stdin;
1	blonder413	blonder413	blonder413	\N	blonder413@outlook.com	10	1	1	\N
\.


--
-- Name: autor_id_seq; Type: SEQUENCE SET; Schema: public; Owner: cursos
--

SELECT pg_catalog.setval('public.autor_id_seq', 1, false);


--
-- Name: libro_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.libro_id_seq', 1, true);


--
-- Name: pais_id_seq; Type: SEQUENCE SET; Schema: public; Owner: cursos
--

SELECT pg_catalog.setval('public.pais_id_seq', 6, true);


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: cursos
--

SELECT pg_catalog.setval('public.user_id_seq', 1, true);


--
-- Name: autor autor_pkey; Type: CONSTRAINT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public.autor
    ADD CONSTRAINT autor_pkey PRIMARY KEY (id);


--
-- Name: libro libro_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.libro
    ADD CONSTRAINT libro_pkey PRIMARY KEY (id);


--
-- Name: migration migration_pkey; Type: CONSTRAINT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public.migration
    ADD CONSTRAINT migration_pkey PRIMARY KEY (version);


--
-- Name: pais pais_pkey; Type: CONSTRAINT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public.pais
    ADD CONSTRAINT pais_pkey PRIMARY KEY (id);


--
-- Name: user user_email_key; Type: CONSTRAINT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_email_key UNIQUE (email);


--
-- Name: user user_password_reset_token_key; Type: CONSTRAINT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_password_reset_token_key UNIQUE (password_reset_token);


--
-- Name: user user_pkey; Type: CONSTRAINT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- Name: user user_username_key; Type: CONSTRAINT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_username_key UNIQUE (username);


--
-- Name: autor paisautor; Type: FK CONSTRAINT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public.autor
    ADD CONSTRAINT paisautor FOREIGN KEY (pais_id) REFERENCES public.pais(id);


--
-- PostgreSQL database dump complete
--

