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
-- Name: editorial; Type: TABLE; Schema: public; Owner: cursos
--

CREATE TABLE public.editorial (
    id integer NOT NULL,
    editorial character varying(100) NOT NULL,
    slug character varying(100) NOT NULL,
    created_by integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_by integer NOT NULL,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.editorial OWNER TO cursos;

--
-- Name: editorial_id_seq; Type: SEQUENCE; Schema: public; Owner: cursos
--

CREATE SEQUENCE public.editorial_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.editorial_id_seq OWNER TO cursos;

--
-- Name: editorial_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: cursos
--

ALTER SEQUENCE public.editorial_id_seq OWNED BY public.editorial.id;


--
-- Name: libro; Type: TABLE; Schema: public; Owner: cursos
--

CREATE TABLE public.libro (
    id integer NOT NULL,
    titulo character varying(100) NOT NULL,
    slug character varying(100) NOT NULL,
    autor_id integer NOT NULL,
    editorial_id integer NOT NULL,
    publicado_en date,
    created_by integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_by integer NOT NULL,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.libro OWNER TO cursos;

--
-- Name: libro_id_seq; Type: SEQUENCE; Schema: public; Owner: cursos
--

CREATE SEQUENCE public.libro_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.libro_id_seq OWNER TO cursos;

--
-- Name: libro_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: cursos
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
    verification_token character varying(255) DEFAULT NULL::character varying,
    status smallint DEFAULT 10 NOT NULL,
    created_at integer NOT NULL,
    updated_at integer NOT NULL
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
-- Name: editorial id; Type: DEFAULT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public.editorial ALTER COLUMN id SET DEFAULT nextval('public.editorial_id_seq'::regclass);


--
-- Name: libro id; Type: DEFAULT; Schema: public; Owner: cursos
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
1	Gabriel García Márquez	gabriel-garcia-marquez	1	1	2020-11-10 06:56:13	1	2020-11-10 06:56:13
\.


--
-- Data for Name: editorial; Type: TABLE DATA; Schema: public; Owner: cursos
--

COPY public.editorial (id, editorial, slug, created_by, created_at, updated_by, updated_at) FROM stdin;
1	norma	norma	1	2020-11-10 06:56:13	1	2020-11-10 06:56:13
2	libros y libres	libros-y-libres	1	2020-11-10 06:56:13	1	2020-11-10 06:56:13
\.


--
-- Data for Name: libro; Type: TABLE DATA; Schema: public; Owner: cursos
--

COPY public.libro (id, titulo, slug, autor_id, editorial_id, publicado_en, created_by, created_at, updated_by, updated_at) FROM stdin;
3	Relato de un náufrago	relato-de-un-naufrago	1	1	2020-01-10	1	2020-11-11 07:12:13	1	2020-11-11 07:12:13
4	Cien años de soledad	cien-anos-de-soledad	1	1	2020-01-10	1	2020-11-11 07:12:13	1	2020-11-11 07:12:13
\.


--
-- Data for Name: migration; Type: TABLE DATA; Schema: public; Owner: cursos
--

COPY public.migration (version, apply_time) FROM stdin;
m000000_000000_base	1605009269
m201108_121041_create_user_table	1605009271
m201108_121100_create_pais_table	1605009271
m201108_121214_create_autor_table	1605009271
m201110_114406_create_editorial_table	1605009271
m201110_114423_create_libro_table	1605009271
\.


--
-- Data for Name: pais; Type: TABLE DATA; Schema: public; Owner: cursos
--

COPY public.pais (id, pais, slug, created_by, created_at, updated_by, updated_at) FROM stdin;
1	Colombia	colombia	1	2020-11-10 06:56:13	1	2020-11-10 06:56:13
\.


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: cursos
--

COPY public."user" (id, username, auth_key, password_hash, password_reset_token, email, verification_token, status, created_at, updated_at) FROM stdin;
1	blonder413	lz5TXz5GjanzW6yCPW6Hp9I7Z8B552nA	$2y$13$EYMR8s55HL1q8gcA10m/De1Kow79RbXZb7Cq8Wk1.wB4YXro0J1eS	\N	blonder413@outlook.com	Ewu1BYsjBKvzUznD8rVkNJkbs0fXCHc8_1605009297	10	1605009297	1605009297
\.


--
-- Name: autor_id_seq; Type: SEQUENCE SET; Schema: public; Owner: cursos
--

SELECT pg_catalog.setval('public.autor_id_seq', 1, true);


--
-- Name: editorial_id_seq; Type: SEQUENCE SET; Schema: public; Owner: cursos
--

SELECT pg_catalog.setval('public.editorial_id_seq', 2, true);


--
-- Name: libro_id_seq; Type: SEQUENCE SET; Schema: public; Owner: cursos
--

SELECT pg_catalog.setval('public.libro_id_seq', 4, true);


--
-- Name: pais_id_seq; Type: SEQUENCE SET; Schema: public; Owner: cursos
--

SELECT pg_catalog.setval('public.pais_id_seq', 1, true);


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
-- Name: editorial editorial_pkey; Type: CONSTRAINT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public.editorial
    ADD CONSTRAINT editorial_pkey PRIMARY KEY (id);


--
-- Name: libro libro_pkey; Type: CONSTRAINT; Schema: public; Owner: cursos
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
-- Name: libro autorlibro; Type: FK CONSTRAINT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public.libro
    ADD CONSTRAINT autorlibro FOREIGN KEY (autor_id) REFERENCES public.autor(id);


--
-- Name: libro editoriallibro; Type: FK CONSTRAINT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public.libro
    ADD CONSTRAINT editoriallibro FOREIGN KEY (editorial_id) REFERENCES public.editorial(id);


--
-- Name: autor paisautor; Type: FK CONSTRAINT; Schema: public; Owner: cursos
--

ALTER TABLE ONLY public.autor
    ADD CONSTRAINT paisautor FOREIGN KEY (pais_id) REFERENCES public.pais(id);


--
-- PostgreSQL database dump complete
--

