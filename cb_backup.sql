--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'SQL_ASCII';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

--
-- Data for Name: reticulas; Type: TABLE DATA; Schema: public; Owner: administrador
--

COPY reticulas (id, clave, carrera) FROM stdin;
1	ARQU-2010-204	ARQ
2	IBQA-2010-207	IBQ
3	IEME-2010-210	IEM
4	IGEM-2009-201	IGE
5	ISIC-2010-224	ISC
6	LADM-2010-234	LA
7	COPU-2010-205	LC
\.


--
-- Data for Name: asignaturas; Type: TABLE DATA; Schema: public; Owner: administrador
--

COPY asignaturas (id, nombre, clave, carrera, semestre, horas_teoricas, horas_practicas, horas_totales, fk_reticula) FROM stdin;
1	FUNDAMENTOS TEORICOS DEL DISEÑO	ARC1016	ARQ	2	2	2	4	ARQU-2010-204
3	MATEMATICAS APLICADAS A LA ARQ	ARC1022	ARQ	2	2	2	4	ARQU-2010-204
4	GEOMETRIA DESCRIPTIVA II	ARC1018	ARQ	2	2	2	4	ARQU-2010-204
5	ANAL CRIT DE LA ARQ Y EL ARTE II	ARC1006	ARQ	2	2	2	4	ARQU-2010-204
6	ANALISIS PROYECTUAL	ARC1009	ARQ	2	2	2	4	ARQU-2010-204
7	QUIMICA	BEF1057	IBQ	1	3	2	5	IBQA-2010-207
9	CALCULO DIFERENCIAL	BCF0901	IBQ	1	3	2	5	IBQA-2010-207
10	CALCULO INTEGRAL	BCF0902	IBQ	2	3	2	5	IBQA-2010-207
11	ALGEBRA LINEAL	BCF0903	IBQ	2	3	2	5	IBQA-2010-207
12	CALCULO VECTORIAL	ACF0904	IBQ	3	3	2	5	IBQA-2010-207
13	ELECTROMAGNETISMO	BEF1020	IBQ	3	3	2	5	IBQA-2010-207
14	ECUACIONES DIFERENCIALES	BCF0905	IBQ	4	3	2	5	IBQA-2010-207
15	PROGRAMACION Y METODOS NUMERICOS	BQF1020	IBQ	4	3	2	5	IBQA-2010-207
16	ESTADISTICA	BQF1007	IBQ	5	2	3	5	IBQA-2010-207
17	QUIMICA	AES1058	IEM	1	2	2	4	IEME-2010-210
18	CALCULO DIFERENCIAL	ACF0901	IEM	1	3	2	5	IEME-2010-210
19	DIBUJO ELECTROMECANICO	EMF1007	IEM	1	3	2	5	IEME-2010-210
20	INTRODUCCION A LA PROGRAMACION	EMH1016	IEM	1	1	3	4	IEME-2010-210
21	CALCULO INTEGRAL	ACF0902	IEM	2	3	2	5	IEME-2010-210
22	PROBABILIDAD Y ESTADISTICA	AEE1051	IEM	2	3	1	4	IEME-2010-210
23	CALCULO VECTORIAL	ACF0904	IEM	3	3	2	5	IEME-2010-210
24	ALGEBRA LINEAL	ACF0903	IEM	3	3	2	5	IEME-2010-210
25	ECUACIONES DIFERENCIALES	ACF0905	IEM	4	3	2	5	IEME-2010-210
26	FUNDAMENTOS DE QUIMICA	GEF0914	IGE	1	3	2	5	IGEM-2009-201
27	FUNDAMENTOS DE GESTION EMPRESARIAL	GEF0915	IGE	1	3	2	5	IGEM-2009-201
28	FUNDAMENTOS DE FISICA	GEC0913	IGE	1	2	2	4	IGEM-2009-201
29	CALCULO DIFERENCIAL	ACF0901	IGE	1	3	2	5	IGEM-2009-201
30	CALCULO INTEGRAL	ACF0902	IGE	2	3	2	5	IGEM-2009-201
31	PROBABILIDAD Y ESTADISTICA DESCRIP	GEF0929	IGE	3	2	3	5	IGEM-2009-201
32	ALGEBRA LINEAL	ACF0903	IGE	3	3	2	5	IGEM-2009-201
33	ESTADISTICA INTERFERENCIAL I	GEG0910	IGE	4	3	3	6	IGEM-2009-201
34	INVESTIGACION DE OPERACIONES	GEF0924	IGE	4	3	2	5	IGEM-2009-201
35	ESTADISTICA INTERFERENCIAL II	GEG0911	IGE	5	3	3	6	IGEM-2009-201
36	INGENIERIA DE PROCESOS	GEF0921	IGE	5	3	2	5	IGEM-2009-201
37	GESTION DE LA PRODUCCION I	GEC0916	IGE	6	2	2	4	IGEM-2009-201
38	CALIDAD APLICADA A LA GESTION EMPRE	GED0903	IGE	7	2	3	5	IGEM-2009-201
39	GESTION DE LA PRODUCCION II	GEC0917	IGE	7	2	2	4	IGEM-2009-201
40	CALCULO DIFERENCIAL	SCF0901	ISC	1	3	2	5	ISIC-2010-224
41	MATEMATICAS DISCRETAS	SCB1004	ISC	1	3	2	5	ISIC-2010-224
42	CALCULO INTEGRAL	SCF0902	ISC	2	3	2	5	ISIC-2010-224
43	QUIMICA GENERAL	SEC1058	ISC	2	2	2	4	ISIC-2010-224
44	ALGEBRA LINEAL	SCF0903	ISC	2	3	2	5	ISIC-2010-224
45	PROBABILIDAD Y ESTADISTICA	SEF1058	ISC	2	3	2	5	ISIC-2010-224
46	CALCULO VECTORIAL	SAF0904	ISC	3	3	2	5	ISIC-2010-224
47	FISICA GENERAL	SCF1008	ISC	3	3	2	5	ISIC-2010-224
48	ECUACIONES DIFERENCIALES	SCF0905	ISC	4	3	2	5	ISIC-2010-224
49	MATEMATICAS APLICADAS A LA ADM	LAD1027	LA	1	2	3	5	LADM-2010-234
50	ESTADISTICA PARA LA ADMON I	LAD1016	LA	2	2	3	5	LADM-2010-234
51	ESTADISTICA PARA LA ADMON II	LAD1017	LA	3	2	3	5	LADM-2010-234
52	METODOS CUANTITATIVOS PARA ADMON	LAD1028	LA	4	2	3	5	LADM-2010-234
53	MATEMATICAS FINANCIERAS	AEC1079	LA	4	2	3	5	LADM-2010-234
54	PRODUCCION 	LAF1032	LA	6	3	2	5	LADM-2010-234
55	ADMINISTRACION DE LA CALIDAD	LAD1001	LA	7	2	3	5	LADM-2010-234
56	CALCULO DIFERENCIAL E INTEGRAL	CDP1008	LC	1	2	3	5	COPU-2010-205
57	ESTADISTICA ADMINISTRATIVA I	CPC1022	LC	2	2	2	4	COPU-2010-205
59	ESTADISTICA ADMINISTRATIVA II	CPC1023	LC	3	2	2	4	COPU-2010-205
60	MATEMATICAS FINANCIERAS	CPC1032	LC	3	2	2	4	COPU-2010-205
61	ADMINISTRACION DE LA PROD Y OPER	CPC1003	LC	7	2	2	4	COPU-2010-205
63	FUNDAMENTOS TEORICOS DEL DISEÑO I	ARC1015	ARQ	1	2	2	4	ARQU-2010-204
64	FUNDAMENTOS DE INVESTIGACION	ACC0906	ARQ	1	2	2	4	ARQU-2010-204
65	ESTETICA	ARR1010	ARQ	1	2	1	3	ARQU-2010-204
66	 GEOMETRIA DESCRIPTIVA I	ARC1017	ARQ	1	2	2	4	ARQU-2010-204
67	ANAL CRIT DE LA ARQ Y EL ARTE I	ARC1005	ARQ	1	2	2	4	ARQU-2010-204
68	METODOLOGIA PARA EL DISEÑO 	ARC1023	ARQ	2	2	2	4	ARQU-2010-204
69	BIOLOGIA 	BEF1005	IBQ	1	3	2	5	IBQA-2010-207
70	FUNDAMENTOS DE INVESTIGACION	BCC0906	IBQ	1	2	2	4	IBQA-2010-207
71	QUIMICA ORGANICA I	BQF1022	IBQ	2	3	2	5	IBQA-2010-207
72	QUIMICA ANALITICA	BQG1021	IBQ	2	3	3	6	IBQA-2010-207
73	QUIMICA ORGANICA II	BQF1023	IBQ	3	3	2	5	IBQA-2010-207
74	DESARROLLO SUSTENTABLE	BCD0903	IBQ	3	2	3	5	IBQA-2010-207
75	TERMODINAMICA 	BEF1065	IBQ	3	3	2	5	IBQA-2010-207
76	BIOQUIMICA	BEJ1002	IBQ	4	4	2	6	IBQA-2010-207
77	FISICOQUIMICA	BQF1011	IBQ	4	3	2	5	IBQA-2010-207
78	BALANCE DE MATERIA Y ENERGIA	BEF1004	IBQ	4	3	2	5	IBQA-2010-207
79	ASEGURAMIENTO DE LA CALIDAD	BQQ1003	IBQ	4	1	2	3	IBQA-2010-207
80	BIOQUIMICA DEL NIT Y REG GENETICA	BQJ1004	IBQ	5	4	2	6	IBQA-2010-207
81	ANALISIS INSTRUMENTAL	BQF1002	IBQ	5	3	2	5	IBQA-2010-207
82	FENOMENOS DE TRANSPORTE I	BQJ1008	IBQ	5	4	2	6	IBQA-2010-207
83	INSTRUMENTACION DE CONTROL 	BEF1039	IBQ	5	3	2	5	IBQA-2010-207
84	FUNDAMENTOS DE INVESTIGACION	ACC0906	IEM	1	2	2	4	IEME-2010-210
85	ESTATICA	EME1012	IEM	2	3	1	4	IEME-2010-210
86	DESARROLLO SUSTENTABLE	ACD0908	IEM	2	2	3	5	IEME-2010-210
87	TECNOLOGIA DE LOS MATERIALES	EME1028	IEM	2	3	1	4	IEME-2010-210
88	ELECTRICIDAD Y MAGNETISMO	EMC1011	IEM	2	2	2	4	IEME-2010-210
89	DINAMICA	EMM1008	IEM	3	3	1	4	IEME-2010-210
90	PROCESOS DE MANUFACTURAS	AMC1022	IEM	3	2	2	4	IEME-2010-210
91	METROLOGIA Y NORMALIZACION	AEC1047	IEM	3	2	2	4	IEME-2010-210
92	ANALISIS Y SINTESIS DEL MECANISMO 	EME1005	IEM	4	3	1	4	IEME-2010-210
93	FUNDAMENTOS DE INVESTIGACION	ACC0906	IGE	1	2	2	4	IGEM-2009-201
94	DESARROLLO HUMANO	GEC0906	IGE	1	2	2	4	IGEM-2009-201
95	SOFTWARE DE APLICACION EJECUTIVO	GEB0931	IGE	2	1	4	5	IGEM-2009-201
96	LEGISLACION LABORAL	GEE0925	IGE	2	3	1	4	IGEM-2009-201
97	CONTABILIDAD ORIENT A LOS NEGOCIOS	GED0904	IGE	2	2	3	5	IGEM-2009-201
98	DINAMICA SOCIAL 	AEC1014	IGE	2	2	2	4	IGEM-2009-201
99	MARCO LEGAL DE LAS ORGANIZACIONES	GEC0926	IGE	3	2	2	4	IGEM-2009-201
100	COSTOS EMPRESARIALES 	GED0905	IGE	3	2	3	5	IGEM-2009-201
101	HABILIDADES DIRECTIVAS I	GEC0919	IGE	3	2	2	4	IGEM-2009-201
102	ECONOMIA EMPRESARIAL	GEF0907	IGE	3	3	2	5	IGEM-2009-201
103	INGENIERIA ECONOMICA 	GEF0922	IGE	4	3	2	5	IGEM-2009-201
104	INSTRUMENTOS DE PRESUPUESTACION EMP	GED0923	IGE	4	2	3	5	IGEM-2009-201
105	HABILIDADES DIRECTIVAS II	GEC0920	IGE	4	2	2	4	IGEM-2009-201
106	ENTORNO MACROECONOMICO	GEF0909	IGE	4	3	2	5	IGEM-2009-201
107	FINANZAS EN LAS ORGANIZACIONES 	GEF0912	IGE	5	3	2	5	IGEM-2009-201
108	GESTION DEL CAPITAL HUMANO	GEG0918	IGE	5	3	3	6	IGEM-2009-201
109	MERCADOTECNIA 	GEF0927	IGE	5	3	2	5	IGEM-2009-201
110	ADMON DE LA SALUD Y SEGURIDAD OCUPA	GEF0901	IGE	6	3	2	5	IGEM-2009-201
111	EL EMPRENDEDOR Y LA INNAVACION	GED0908	IGE	6	2	3	5	IGEM-2009-201
112	DISEÑO ORGANIZACIONAL	AED1015	IGE	6	2	3	5	IGEM-2009-201
113	SIST DE LA INFORMACION DE MERCA	GEC0930	IGE	6	2	3	5	IGEM-2009-201
114	PLAN DE NEGOCIOS 	GED0928	IGE	7	2	3	5	IGEM-2009-201
115	GESTION ESTRATEGICA	AED1035	IGE	7	2	3	5	IGEM-2009-201
116	DESARROLLO SUSTENTABLE	ACD0908	IGE	7	2	3	5	IGEM-2009-201
117	MERCADOTECNIA ELECTRONICA	AEB1045	IGE	7	1	4	5	IGEM-2009-201
118	TEORIA GENERAL DE LA ADMON	LAC1035	LA	1	2	2	4	LADM-2010-234
119	FUNDAMENTOS DE INVESTIGACION	ACC0906	LA	1	2	2	4	LADM-2010-234
120	CONTABILIDAD GENERAL	LAD1006	LA	1	2	3	5	LADM-2010-234
121	FUNCION ADMINISTRATIVA I	LAD1020	LA	2	3	2	5	LADM-2010-234
122	DERECHO LAB Y SEG SOCIAL	LAF1010	LA	2	3	2	5	LADM-2010-234
123	COMUNICACION CORPORATIVA	LAC1004	LA	2	2	2	4	LADM-2010-234
124	TALLER DE DESARROLLO HUMANO	LAC1034	LA	2	2	2	4	LADM-2010-234
125	COSTOS DE MANUFACTURA	LAD1008	LA	2	2	3	5	LADM-2010-234
126	FUNCION ADMINISTRATIVA II	LAD1020	LA	3	2	3	5	LADM-2010-234
127	DERECHO EMPRESARIAL	LAD1009	LA	3	2	3	5	LADM-2010-234
128	COMPORTAMIENTO ORGANIZACIONAL	LAD1003	LA	3	2	3	5	LADM-2010-234
129	DINAMICA SOCIAL 	LAC1013	LA	3	2	2	4	LADM-2010-234
130	CONTABILIDAD GERENCIAL	LAD1007	LA	3	2	3	5	LADM-2010-234
131	GEST ESTRAT DEL CAPITAL HUMANO I	LAD1023	LA	4	2	3	5	LADM-2010-234
132	PROCESOS ESTRUCTURALES	LAD1031	LA	4	2	3	5	LADM-2010-234
133	FUNDAMENTOS DE MERCADOTECNIA	LAF1021	LA	4	3	2	5	LADM-2010-234
134	ECONOMIA EMPRESARIAL	LAD1015	LA	4	2	3	5	LADM-2010-234
135	GEST ESTRAT DEL CAPITAL HUMANO II	LAD1024	LA	5	2	3	5	LADM-2010-234
136	DERECHO FISCAL	AEC1070	LA	5	2	2	4	LADM-2010-234
138	FUNDAMENTOS DE PROGRAMACION	SSE1002	ISC	1	2	3	5	ISIC-2010-224
139	TALLER DE ADMINISTRACION	SSE1005	ISC	1	1	3	4	ISIC-2010-224
140	FUNDAMENTOS DE INVESTIGACION	ACC0906	ISC	1	2	2	4	ISIC-2010-224
141	PROG ORIENT A OBJETOS	SCD1020	ISC	2	2	3	5	ISIC-2010-224
142	CONTABILIDAD FINANCIERA	SEC1008	ISC	2	2	2	4	ISIC-2010-224
143	ESTRUCTURA DE DATOS	SCD1007	ISC	3	2	3	5	ISIC-2010-224
144	CULTURA EMPRESARIAL	SCC1006	ISC	3	2	2	4	ISIC-2010-224
145	INVESTIGACION DE OPERACIONES	SCC1016	ISC	3	2	2	4	ISIC-2010-224
146	SISTEMAS OPERATIVOS	SCC1030	ISC	3	2	2	4	ISIC-2010-224
147	DESARROLLO SUSTENTABLE	ACD0908	LA	5	2	3	5	LADM-2010-234
148	MEZCLA DE MERCADOTECNIA	AEC1080	LA	5	2	2	4	LADM-2010-234
149	MACROECONOMIA	AEC1077	LA	5	2	2	4	LADM-2010-234
150	ADMINISTRACION FINANCIERA I	AED1068	LA	5	2	3	5	LADM-2010-234
151	GESTION DE LA RETRIBUCION 	LAM1022	LA	6	2	4	6	LADM-2010-234
152	SIST DE INFORMACION DE MERCA	LAD1033	LA	6	2	3	5	LADM-2010-234
153	ADMINISTRACION FINANCIERA II	LAD1002	LA	6	2	3	5	LADM-2010-234
154	PLAN DE NEGOCIOS 	LAB1029	LA	7	1	4	5	LADM-2010-234
155	PROCESOS DE DIRECCION	LAC1030	LA	7	2	2	4	LADM-2010-234
156	DIBUJO EN INGENIERIA 	BEO1012	IBQ	1	0	3	3	IBQA-2010-207
157	COMPORTAMIENTO ORGANIZACIONAL	BQW1005	IBQ	1	0	2	2	IBQA-2010-207
158	QUIMICA ORGANIZACIONAL	BQF1022	IBQ	2	3	2	5	IBQA-2010-207
159	FISICA	BQF1010	IBQ	2	3	2	5	IBQA-2010-207
160	TALLER DE ETICA 	BCA0907	IBQ	2	0	4	4	IBQA-2010-207
161	ADMON Y LESGON DE EMPRESAS	BQP1001	IBQ	3	3	0	3	IBQA-2010-207
162	INGENIERIA ECONOMICA 	BQP1015	IBQ	5	3	0	3	IBQA-2010-207
163	TALLER DE ETICA 	ACA0907	IEM	1	0	4	4	IEME-2010-210
164	TALLER DE ETICA 	ACA0907	IGE	2	0	4	4	IGEM-2009-201
165	TALLER DE INVESTIGACION II	ACA0910	IGE	6	0	4	4	IGEM-2009-201
166	TALLER DE ETICA 	SCA0907	ISC	1	0	4	4	ISIC-2010-224
167	METODOS NUMERICOS	SCC1021	ISC	4	2	2	4	ISIC-2010-224
168	TOPICOS AVANZADOS DE PROGRAMACION	SCD1036	ISC	4	2	3	5	ISIC-2010-224
169	FUNDAMENTO DE BASE DE DATOS	SCC1009	ISC	4	2	2	4	ISIC-2010-224
170	TALLER DE SISTEMAS OPERATIVOS	SCA1034	ISC	4	0	4	4	ISIC-2010-224
171	PRINCIPIOS ELECTRICOS Y APLICACIONES DIGITALES	SCD1022	ISC	4	2	3	5	ISIC-2010-224
172	INFORMATICA PARA LA ADMINISTRACION	LAV1025	LA	1	0	5	5	LADM-2010-234
173	TALLER DE ETICA	ACA0907	LA	1	0	4	4	LADM-2010-234
174	TALLER DE INVESTIGACION I	ACA0909	LA	6	0	4	4	LADM-2010-234
175	INNOVACION Y EMPRENDEDURISMO	LAA1026	LA	6	0	4	4	LADM-2010-234
176	TALLER DE DISEÑO I	ARM1028	ARQ	3	2	4	6	ARQU-2010-204
177	PROPIEDADES Y COMP DE LOS MATERIALES	ARC1013	ARQ	3	2	2	4	ARQU-2010-204
178	ESTRUCTURAS I	ARC1013	ARQ	3	2	2	4	ARQU-2010-204
179	TOPOGREFIA	ARC1037	ARQ	3	2	2	4	ARQU-2010-204
180	ANAL CRIT DE LA ARQ Y EL ARTE III	ARC1007	ARQ	3	2	2	4	ARQU-2010-204
181	TALLER DE LENGUAJE ARQ II	ARN1036	ARQ	3	0	6	6	ARQU-2010-204
182	TALLER DE LENGUAJE ARQ I	ARN1035	ARQ	2	0	6	6	ARQU-2010-204
183	TALLER DE DISEÑO II	ART1029	ARQ	4	2	4	6	ARQU-2010-204
184	TALLER DE CONSTRUCCION I	ARI1026	ARQ	4	4	2	6	ARQU-2010-204
185	ESTRUCTURAS II	ARC1014	ARQ	4	2	2	4	ARQU-2010-204
186	DESARROLLO SUSTENTABLE	ACD0908	ARQ	4	2	3	5	ARQU-2010-204
187	ANAL CRIT DE LA ARQ Y EL ARTE IV	ARC1008	ARQ	4	2	2	4	ARQU-2010-204
188	INSTALACIONES	ARC1020	ARQ	4	2	2	4	ARQU-2010-204
189	TALLER DE DISEÑO III	ART1030	ARQ	5	2	4	6	ARQU-2010-204
190	TALLER DE CONSTRUCCION II	ARJ1027	ARQ	5	4	2	6	ARQU-2010-204
191	ESTRUCTURAS DE CONCRETO	ARJ1012	ARQ	5	4	2	6	ARQU-2010-204
193	PENSAMIENTO ARQUITECTONICO CONPEMPORANEAO	ARC1024	ARQ	5	2	2	4	ARQU-2010-204
194	INSTALACIONES II	ARC1021	ARQ	5	2	2	4	ARQU-2010-204
192	ADMINISTRACION DE LA CONSTRUCCION I	ARC1003	ARQ	5	2	2	4	ARQU-2010-204
205	TALLER DE DISEÑO VI	ART1033	ARQ	8	2	4	6	ARQU-2010-204
195	TALLER DE DISEÑO IV	ART1031	ARQ	6	2	4	6	ARQU-2010-204
201	TALLER DE DISEÑO V	ART1032	ARQ	7	2	4	6	ARQU-2010-204
206	CONTABILIDAD BASICA	COC0408	ARQ	8	4	2	6	ARQU-2010-204
197	TALLER DE INVESTIGACION I	ACA0909	ARQ	6	0	4	4	ARQU-2010-204
202	TALLER DE INVESTIGACION II	ACA0910	ARQ	7	0	4	4	ARQU-2010-204
198	URBANISMO I	ARC1038	ARQ	6	2	2	4	ARQU-2010-204
203	URBANISMO II	ARC1039	ARQ	7	2	2	4	ARQU-2010-204
204	ADMON DE EMPRESAS CONSTRUCTORAS I	ARC1001	ARQ	7	2	2	4	ARQU-2010-204
196	ESTRUCTURAS DE ACERO	ARC1011	ARQ	6	2	2	4	ARQU-2010-204
199	ADMINISTRACION DE LA CONSTRUCCION II	ARC1004	ARQ	6	2	2	4	ARQU-2010-204
200	TALLER DE ETICA 	ARC0907	ARQ	6	0	4	4	ARQU-2010-204
232	INSTALACIONES ELECTRICAS	EME1016	IEM	6	3	3	6	IEME-2010-210
233	DISEÑO E INGENIERIA ASISTIDO POR COMPUTADORA	EMC1010	IEM	6	2	2	4	IEME-2010-210
234	MAQUINAS ELECTRICAS	EMJ1017	IEM	6	4	2	6	IEME-2010-210
235	TALLER DE INVESTIGACION I	ACA0909	IEM	6	0	4	4	IEME-2010-210
217	CIENCIA Y TEC DE FRUTAS Y CEREALES	ESP1003	IBQ	7	3	2	5	IBQA-2010-207
236	MAQUINAS Y EQUIPOS TERMICOS  II	EMC1019	IEM	7	2	2	4	IEME-2010-210
237	ADMINISTRACION Y TECNICAS DE MANTENIMIENTO	EMJ1001	IEM	7	4	2	6	IEME-2010-210
238	CONTROLES ELECTRICOS	EME1006	IEM	7	3	2	5	IEME-2010-210
218	TALLER DE INVESTIGACION I	BCA0910	IBQ	7	0	4	4	IBQA-2010-207
214	INGENIERIA DE BIOREACTORES	BQF1012	IBQ	7	3	2	5	IBQA-2010-207
213	MICROBIOLOGIA DE ALIMENTOS	ESP1002	IBQ	7	3	2	5	IBQA-2010-207
207	MICROBIOLOGIA	BEM1050	IBQ	6	2	4	6	IBQA-2010-207
215	OPERACIONES UNITARIAS II	BQJ1013	IBQ	7	4	2	6	IBQA-2010-207
208	CINETICA QUIMICA Y BIOLOGIA	BQF1005	IBQ	6	3	2	5	IBQA-2010-207
209	FENOMENO DE TRANSPORTE II	BQJ1009	IBQ	6	4	2	6	IBQA-2010-207
210	OPERACIONES UNITARIAS I	BQJ1017	IBQ	6	4	2	6	IBQA-2010-207
216	OPERACIONES UNITARIAS III	BQJ1019	IBQ	7	4	2	6	IBQA-2010-207
211	QUIMICA DE LOS ALIMENTOS	ESP1001	IBQ	6	3	2	5	IBQA-2010-207
212	SEGURIDAD E HIGIENE	BQW1024	IBQ	6	2	0	2	IBQA-2010-207
220	INGENIERIA Y GESTION AMBIENTAL	BQF1016	IBQ	8	3	2	5	IBQA-2010-207
219	NUTRICION HUMANA	ESP1005	IBQ	8	3	2	5	IBQA-2010-207
221	INGENIERIA DE PROCESOS	BQF1913	IBQ	8	2	3	5	IBQA-2010-207
222	INGENIERIA DE PROYECTOS	BQC1014	IBQ	8	2	2	4	IBQA-2010-207
223	CIENCIA Y TEC DE CARNES Y LACTEOS	ESP1004	IBQ	8	3	2	5	IBQA-2010-207
224	TALLER DE INVESTIGACION II	BCA0911	IBQ	8	0	4	4	IBQA-2010-207
225	DISEÑO DE ELEMENTOS DE MAQUINAS	EMF1009	IEM	5	3	2	5	IEME-2010-210
226	MECANICA DE FUIDOS	EME1020	IEM	5	3	1	4	IEME-2010-210
227	TRANSFERENCIA DE CALOR 	EME1030	IEM	5	3	1	4	IEME-2010-210
228	ANALISIS DE CIRCUITOS ELECTRICOS DE CD	EMF1004	IEM	5	3	2	5	IEME-2010-210
229	ELECTRONICA DIGITAL	AEC1022	IEM	5	2	2	4	IEME-2010-210
230	SISTEMAS Y MAQUNAS DE FLUIDOS	EMJ1026	IEM	6	4	2	6	IEME-2010-210
231	MAQUINAS Y EQUIPOS TERMICOS I	EMC1018	IEM	6	2	2	4	IEME-2010-210
239	SISTEMAS ELECTRICOS DE POTENCIAS	EMF1024	IEM	7	3	2	5	IEME-2010-210
240	TALLER DE INVESTIGACION II	ACA0910	IEM	7	0	4	4	IEME-2010-210
241	REFRIGERACION Y AIRE ACONDICIONADO	EMF1023	IEM	8	3	2	5	IEME-2010-210
242	INGENIERIA DE CONTROL CLASICO	EMJ1014	IEM	8	4	2	6	IEME-2010-210
243	AHORRO DE ENERGIA	EMJ1002	IEM	8	4	2	6	IEME-2010-210
244	SISTEMAS HIDRAULICOS Y NEUMATICOS DE POTENCIA	EMJ1025	IEM	8	4	2	6	IEME-2010-210
245	SUBESTACIONES ELECTRICAS	EMF1027	IEM	8	3	2	5	IEME-2010-210
246	FORMULACION Y EVALUACION DE PROYECTOS	EMC1013	IEM	8	2	2	4	IEME-2010-210
247	CADENA DE SUMINISTRO	GEF0902	IGE	8	3	2	5	IGEM-2009-201
248	ANALISIS Y EVALUACION DE PUESTOS	GSF1201	IGE	8	3	2	5	IGEM-2009-201
249	EVALUACION DEL DESEMPEÑO Y CAPACITACION	GCF1203	IGE	8	3	2	5	IGEM-2009-201
250	GESTION ESTRATEGICA DEL CAPITAL HUMANO	GCF1204	IGE	8	3	2	5	IGEM-2009-201
251	SEMINARIO DE LEGISLACION LABORAL INMP Y SEG SOC	GCD1205	IGE	8	2	3	5	IGEM-2009-201
252	DESARROLLO SUSTENTABLE	SCD0908	ISC	5	2	3	5	ISIC-2010-224
253	TELECOMUNICACIONES	SCC1035	ISC	5	2	2	4	ISIC-2010-224
254	TALLER DE BASE DE DATOS	SCA1033	ISC	5	0	4	4	ISIC-2010-224
255	SIMULACION	SCD1029	ISC	5	2	3	5	ISIC-2010-224
256	FUNDAMENTOS DE INGENIERIA DE SOFWARE	SCC1010	ISC	5	2	2	4	ISIC-2010-224
257	ARQUITECTURA DE COMPUTADORAS	SCD1003	ISC	5	2	3	5	ISIC-2010-224
258	LENGUAJES Y AUTOMATAS I	SCD1018	ISC	6	2	3	5	ISIC-2010-224
259	REDES DE COMPUTADORAS	SCD1028	ISC	6	2	3	5	ISIC-2010-224
260	ADMINISTRACION DE BASE DE DATOS	SCB1001	ISC	6	1	4	5	ISIC-2010-224
261	GRAFICACION	SCC1013	ISC	6	2	2	4	ISIC-2010-224
262	INGENIERIA DE SOFWARE	SCD1014	ISC	6	2	3	5	ISIC-2010-224
263	LENGUAJE DE INTERFAZ	SCC1017	ISC	6	2	2	4	ISIC-2010-224
264	LENGUAJES Y AUTOMATAS II	SCD1019	ISC	7	2	3	5	ISIC-2010-224
265	CONMUTACION Y ENRRUTAMIENTO DE BASE DE DATOS	SCD1004	ISC	7	2	3	5	ISIC-2010-224
266	TALLER DE INVESTIGACION I	SCA0909	ISC	7	0	4	4	ISIC-2010-224
267	GESTION DE PROYECTOS DE SOFWARE	SCG1012	ISC	7	3	3	6	ISIC-2010-224
268	SISTEMAS PROGRAMABLES	SCD1031	ISC	7	2	3	5	ISIC-2010-224
269	PROGRAMACION LOGICA FUNCIONAL	SCC1024	ISC	8	2	2	4	ISIC-2010-224
270	ADMINISTRACION DE REDES	SCA1004	ISC	8	0	4	4	ISIC-2010-224
271	TALLER DE INVESTIGACION II	SCA0910	ISC	8	0	4	4	ISIC-2010-224
272	PROGRAMACION WEB	SCD1026	ISC	8	2	3	5	ISIC-2010-224
273	ECONOMIA INTERNACIONAL	LAC1014	LA	7	2	2	4	LADM-2010-234
274	DIAGNOSTICO Y EVALUACION EMPRESARIAL	LAD1012	LA	7	2	3	5	LADM-2010-234
275	CONSULTORIA EMPRESARIAL	LAC1005	LA	8	2	2	4	LADM-2010-234
276	FORMULACION Y EVALUACION DE PROYECTOS	LAD1018	LA	8	2	3	5	LADM-2010-234
277	DESARROLLO ORGANIZACIONAL	LAD1011	LA	8	2	3	5	LADM-2010-234
278	INTRODUCCION ALA CONTABILIDAD FINANCIERA	CPM1030	LC	1	2	4	6	COPU-2010-205
279	ADMINISTRACION	CPC1001	LC	1	2	2	4	COPU-2010-205
280	CALCULO DIFERENCIAL E INTEGRAL	CPD1008	LC	1	2	3	5	COPU-2010-205
281	FUNDAMENTOS DE DERECHO	CPC1025	LC	1	2	2	4	COPU-2010-205
282	DESARROLLO HUMANO	CPC1018	LC	1	2	2	4	COPU-2010-205
283	FUNDAMENTOS DE INVESTIGACION	ACC0906	LC	1	2	2	4	COPU-2010-205
284	CONTABILIDAD FINANCIERA	CPM1012	LC	2	2	4	6	COPU-2010-205
285	ESTADISTICA ADMINISTRATIVA	CPC1022	LC	2	2	2	4	COPU-2010-205
58	ALGEBRA LINEAL	ACF0903	LC	2	3	2	5	COPU-2010-205
286	DERECHO MERCANTIL	CPC1016	LC	2	2	2	4	COPU-2010-205
287	COMUNICACION HUMANA	CPC1009	LC	2	2	2	4	COPU-2010-205
288	TALLER DE ETICA 	ACA0907	LC	2	0	4	4	COPU-2010-205
289	CONTABILIDAD FINANCIERA II	CPM1013	LC	3	2	4	6	COPU-2010-205
290	DERECHO LABORAL Y SEGURIDAD SOCIAL	CPC1015	LC	3	2	2	4	COPU-2010-205
291	DINAMICA SOCIAL	CPC1019	LC	3	2	2	4	COPU-2010-205
292	TALLER DE INFORMATICA I	CPC1040	LC	3	2	2	4	COPU-2010-205
293	MICROECONIMIA	CPC1034	LC	3	2	2	4	COPU-2010-205
294	CONTABILIDAD DE SOIEDADES	CPD1011	LC	4	2	3	5	COPU-2010-205
295	SISTEMA DE COSTOS HISTORICOS	CPD1038	LC	4	2	3	5	COPU-2010-205
296	FUNDAMENTOS DE AUDITORIA 	CPC1024	LC	4	2	2	4	COPU-2010-205
297	DERECHO TRIBUTARIO	CPC1017	LC	4	2	2	4	COPU-2010-205
298	GESTION DEL TALENTO HUMANO	CPC1026	LC	4	2	2	4	COPU-2010-205
299	TALLER DE INFORMATICA II	CPA1041	LC	4	0	4	4	COPU-2010-205
300	MACROECONOMIA	CPC1031	LC	4	2	2	4	COPU-2010-205
301	CONTABILIDAD AVANZADA	CPD1010	LC	5	2	3	5	COPU-2010-205
302	SISTEMA DE COSTOS PREDETERMINADOS	CPD1029	LC	5	2	3	5	COPU-2010-205
303	AUDITORIA PARA EFECTOS FINANCIEROS	CPD1006	LC	5	2	3	5	COPU-2010-205
304	MERCADOTECNIA	CPC1033	LC	5	2	2	4	COPU-2010-205
305	ANALISIS E INTERPRETACION DE ESTADOS FINANCIEROS	CPC1005	LC	5	2	2	4	COPU-2010-205
306	TALLER DE INVESTIGACION I	ACA0909	LC	5	0	4	4	COPU-2010-205
307	ECONOMIA INTERNACIONAL	CPC1020	LC	5	2	2	4	COPU-2010-205
308	CONTABILIDAD INTERNACIONAL	CPD1014	LC	6	2	3	5	COPU-2010-205
309	GESTION Y TOMA DE DESICIONES	CPF1027	LC	6	3	2	5	COPU-2010-205
310	AUDITORIA PARA EFECTOS FISCALES	CPD1007	LC	6	2	3	5	COPU-2010-205
311	IMPUESTOS PARA PERSONAS FISICAS	CPJ1029	LC	6	4	2	6	COPU-2010-205
312	PLANEACION FINANCIERA	CPC1036	LC	6	2	2	4	COPU-2010-205
313	TALLER DE INVESTIGACION II	ACA0910	LC	6	0	4	4	COPU-2010-205
314	DESARROLLO SUSTENTABLE	ACD0908	LC	6	2	3	5	COPU-2010-205
315	SEMINARIO DE CONTADURIA 	CPO1037	LC	7	0	3	3	COPU-2010-205
316	ADMINISTRACION ESTRATEGIA	CPC1002	LC	7	2	2	4	COPU-2010-205
317	ADMINISTRACION DE LA PROD Y DE LAS OPERACIONES	CPC1003	LC	7	2	2	4	COPU-2010-205
318	IMPUESTOS PARA PERSONAS MORALES	CPJ1028	LC	7	4	2	6	COPU-2010-205
319	ALTERNATIVAS DE INVERCION Y FINANCIAMIENTO	CPC1004	LC	7	2	2	4	COPU-2010-205
320	ELABORACION Y EVALUACION DE PROYECTOS DE INVERCION	CPH1021	LC	7	1	3	4	COPU-2010-205
321	OTROS IMPUESTOS Y CONTRIBUCIONES	CPJ1035	LC	8	4	2	6	COPU-2010-205
\.


--
-- Name: asignaturas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: administrador
--

SELECT pg_catalog.setval('asignaturas_id_seq', 321, true);


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: administrador
--

COPY migrations (migration, batch) FROM stdin;
\.


--
-- Data for Name: ofertar_materias; Type: TABLE DATA; Schema: public; Owner: administrador
--

COPY ofertar_materias (id, fk_asignatura, alumnos_grupo, alumnos_aceptados, alumnos_inscritos, sc_reprob_1a, sc_cumple_req, reprobados, grupos_estimados, alumnos_esperados, reprob_real) FROM stdin;
1	1	37	0	0	0	0	0	0	0	0
3	3	37	0	0	0	0	0	0	0	0
4	4	37	0	0	0	0	0	0	0	0
5	5	37	0	0	0	0	0	0	0	0
6	6	37	0	0	0	0	0	0	0	0
7	7	37	0	0	0	0	0	0	0	0
9	9	37	0	0	0	0	0	0	0	0
10	10	37	0	0	0	0	0	0	0	0
11	11	37	0	0	0	0	0	0	0	0
12	12	37	0	0	0	0	0	0	0	0
13	13	37	0	0	0	0	0	0	0	0
14	14	37	0	0	0	0	0	0	0	0
15	15	37	0	0	0	0	0	0	0	0
16	16	37	0	0	0	0	0	0	0	0
17	17	37	0	0	0	0	0	0	0	0
18	18	37	0	0	0	0	0	0	0	0
19	19	37	0	0	0	0	0	0	0	0
20	20	37	0	0	0	0	0	0	0	0
21	21	37	0	0	0	0	0	0	0	0
22	22	37	0	0	0	0	0	0	0	0
23	23	37	0	0	0	0	0	0	0	0
24	24	37	0	0	0	0	0	0	0	0
25	25	37	0	0	0	0	0	0	0	0
26	26	37	0	0	0	0	0	0	0	0
27	27	37	0	0	0	0	0	0	0	0
28	28	37	0	0	0	0	0	0	0	0
29	29	37	0	0	0	0	0	0	0	0
30	30	37	0	0	0	0	0	0	0	0
31	31	37	0	0	0	0	0	0	0	0
32	32	37	0	0	0	0	0	0	0	0
33	33	37	0	0	0	0	0	0	0	0
34	34	37	0	0	0	0	0	0	0	0
35	35	37	0	0	0	0	0	0	0	0
36	36	37	0	0	0	0	0	0	0	0
37	37	37	0	0	0	0	0	0	0	0
38	38	37	0	0	0	0	0	0	0	0
39	39	37	0	0	0	0	0	0	0	0
42	42	37	0	0	0	0	0	0	0	0
43	43	37	0	0	0	0	0	0	0	0
44	44	37	0	0	0	0	0	0	0	0
45	45	37	0	0	0	0	0	0	0	0
46	46	37	0	0	0	0	0	0	0	0
47	47	37	0	0	0	0	0	0	0	0
48	48	37	0	0	0	0	0	0	0	0
49	49	37	0	0	0	0	0	0	0	0
50	50	37	0	0	0	0	0	0	0	0
51	51	37	0	0	0	0	0	0	0	0
52	52	37	0	0	0	0	0	0	0	0
53	53	37	0	0	0	0	0	0	0	0
54	54	37	0	0	0	0	0	0	0	0
55	55	37	0	0	0	0	0	0	0	0
56	56	37	0	0	0	0	0	0	0	0
57	57	37	0	0	0	0	0	0	0	0
58	58	37	0	0	0	0	0	0	0	0
59	59	37	0	0	0	0	0	0	0	0
60	60	37	0	0	0	0	0	0	0	0
61	61	37	0	0	0	0	0	0	0	0
41	41	37	200	79	0	0	15	6	200	7
40	40	37	200	93	0	0	52	7	200	60
63	63	37	0	0	0	0	0	0	0	0
64	64	37	0	0	0	0	0	0	0	0
65	65	37	0	0	0	0	0	0	0	0
66	66	37	0	0	0	0	0	0	0	0
67	67	37	0	0	0	0	0	0	0	0
68	68	37	0	0	0	0	0	0	0	0
69	69	37	0	0	0	0	0	0	0	0
70	70	37	0	0	0	0	0	0	0	0
71	71	37	0	0	0	0	0	0	0	0
72	72	37	0	0	0	0	0	0	0	0
73	73	37	0	0	0	0	0	0	0	0
74	74	37	0	0	0	0	0	0	0	0
75	75	37	0	0	0	0	0	0	0	0
76	76	37	0	0	0	0	0	0	0	0
77	77	37	0	0	0	0	0	0	0	0
78	78	37	0	0	0	0	0	0	0	0
79	79	37	0	0	0	0	0	0	0	0
80	80	37	0	0	0	0	0	0	0	0
81	81	37	0	0	0	0	0	0	0	0
82	82	37	0	0	0	0	0	0	0	0
83	83	37	0	0	0	0	0	0	0	0
84	84	37	0	0	0	0	0	0	0	0
85	85	37	0	0	0	0	0	0	0	0
86	86	37	0	0	0	0	0	0	0	0
87	87	37	0	0	0	0	0	0	0	0
88	88	37	0	0	0	0	0	0	0	0
89	89	37	0	0	0	0	0	0	0	0
90	90	37	0	0	0	0	0	0	0	0
91	91	37	0	0	0	0	0	0	0	0
92	92	37	0	0	0	0	0	0	0	0
93	93	37	0	0	0	0	0	0	0	0
94	94	37	0	0	0	0	0	0	0	0
95	95	37	0	0	0	0	0	0	0	0
96	96	37	0	0	0	0	0	0	0	0
97	97	37	0	0	0	0	0	0	0	0
98	98	37	0	0	0	0	0	0	0	0
99	99	37	0	0	0	0	0	0	0	0
100	100	37	0	0	0	0	0	0	0	0
101	101	37	0	0	0	0	0	0	0	0
102	102	37	0	0	0	0	0	0	0	0
103	103	37	0	0	0	0	0	0	0	0
104	104	37	0	0	0	0	0	0	0	0
105	105	37	0	0	0	0	0	0	0	0
106	106	37	0	0	0	0	0	0	0	0
107	107	37	0	0	0	0	0	0	0	0
108	108	37	0	0	0	0	0	0	0	0
109	109	37	0	0	0	0	0	0	0	0
110	110	37	0	0	0	0	0	0	0	0
111	111	37	0	0	0	0	0	0	0	0
112	112	37	0	0	0	0	0	0	0	0
113	113	37	0	0	0	0	0	0	0	0
114	114	37	0	0	0	0	0	0	0	0
115	115	37	0	0	0	0	0	0	0	0
116	116	37	0	0	0	0	0	0	0	0
117	117	37	0	0	0	0	0	0	0	0
118	118	37	0	0	0	0	0	0	0	0
119	119	37	0	0	0	0	0	0	0	0
120	120	37	0	0	0	0	0	0	0	0
121	121	37	0	0	0	0	0	0	0	0
122	122	37	0	0	0	0	0	0	0	0
123	123	37	0	0	0	0	0	0	0	0
124	124	37	0	0	0	0	0	0	0	0
125	125	37	0	0	0	0	0	0	0	0
126	126	37	0	0	0	0	0	0	0	0
127	127	37	0	0	0	0	0	0	0	0
128	128	37	0	0	0	0	0	0	0	0
129	129	37	0	0	0	0	0	0	0	0
130	130	37	0	0	0	0	0	0	0	0
131	131	37	0	0	0	0	0	0	0	0
132	132	37	0	0	0	0	0	0	0	0
133	133	37	0	0	0	0	0	0	0	0
134	134	37	0	0	0	0	0	0	0	0
135	135	37	0	0	0	0	0	0	0	0
136	136	37	0	0	0	0	0	0	0	0
141	141	37	0	0	0	0	0	0	0	0
142	142	37	0	0	0	0	0	0	0	0
143	143	37	0	0	0	0	0	0	0	0
144	144	37	0	0	0	0	0	0	0	0
145	145	37	0	0	0	0	0	0	0	0
146	146	37	0	0	0	0	0	0	0	0
147	147	37	0	0	0	0	0	0	0	0
148	148	37	0	0	0	0	0	0	0	0
149	149	37	0	0	0	0	0	0	0	0
150	150	37	0	0	0	0	0	0	0	0
151	151	37	0	0	0	0	0	0	0	0
152	152	37	0	0	0	0	0	0	0	0
153	153	37	0	0	0	0	0	0	0	0
154	154	37	0	0	0	0	0	0	0	0
155	155	37	0	0	0	0	0	0	0	0
156	156	37	0	0	0	0	0	0	0	0
157	157	37	0	0	0	0	0	0	0	0
158	158	37	0	0	0	0	0	0	0	0
159	159	37	0	0	0	0	0	0	0	0
160	160	37	0	0	0	0	0	0	0	0
161	161	37	0	0	0	0	0	0	0	0
162	162	37	0	0	0	0	0	0	0	0
163	163	37	0	0	0	0	0	0	0	0
164	164	37	0	0	0	0	0	0	0	0
165	165	37	0	0	0	0	0	0	0	0
167	167	37	0	0	0	0	0	0	0	0
168	168	37	0	0	0	0	0	0	0	0
169	169	37	0	0	0	0	0	0	0	0
170	170	37	0	0	0	0	0	0	0	0
171	171	37	0	0	0	0	0	0	0	0
172	172	37	0	0	0	0	0	0	0	0
173	173	37	0	0	0	0	0	0	0	0
174	174	37	0	0	0	0	0	0	0	0
175	175	37	0	0	0	0	0	0	0	0
176	176	37	0	0	0	0	0	0	0	0
177	177	37	0	0	0	0	0	0	0	0
178	178	37	0	0	0	0	0	0	0	0
179	179	37	0	0	0	0	0	0	0	0
180	180	37	0	0	0	0	0	0	0	0
181	181	37	0	0	0	0	0	0	0	0
182	182	37	0	0	0	0	0	0	0	0
183	183	37	0	0	0	0	0	0	0	0
184	184	37	0	0	0	0	0	0	0	0
185	185	37	0	0	0	0	0	0	0	0
186	186	37	0	0	0	0	0	0	0	0
187	187	37	0	0	0	0	0	0	0	0
188	188	37	0	0	0	0	0	0	0	0
189	189	37	0	0	0	0	0	0	0	0
190	190	37	0	0	0	0	0	0	0	0
191	191	37	0	0	0	0	0	0	0	0
192	192	37	0	0	0	0	0	0	0	0
193	193	37	0	0	0	0	0	0	0	0
194	194	37	0	0	0	0	0	0	0	0
195	195	37	0	0	0	0	0	0	0	0
196	196	37	0	0	0	0	0	0	0	0
197	197	37	0	0	0	0	0	0	0	0
198	198	37	0	0	0	0	0	0	0	0
199	199	37	0	0	0	0	0	0	0	0
200	200	37	0	0	0	0	0	0	0	0
201	201	37	0	0	0	0	0	0	0	0
202	202	37	0	0	0	0	0	0	0	0
203	203	37	0	0	0	0	0	0	0	0
204	204	37	0	0	0	0	0	0	0	0
205	205	37	0	0	0	0	0	0	0	0
206	206	37	0	0	0	0	0	0	0	0
207	207	37	0	0	0	0	0	0	0	0
208	208	37	0	0	0	0	0	0	0	0
209	209	37	0	0	0	0	0	0	0	0
210	210	37	0	0	0	0	0	0	0	0
211	211	37	0	0	0	0	0	0	0	0
166	166	37	200	49	0	0	5	0	200	0
138	138	37	200	121	0	0	0	7	200	59
139	139	37	200	62	0	0	10	6	200	21
140	140	37	200	49	0	0	15	6	200	2
212	212	37	0	0	0	0	0	0	0	0
213	213	37	0	0	0	0	0	0	0	0
214	214	37	0	0	0	0	0	0	0	0
215	215	37	0	0	0	0	0	0	0	0
216	216	37	0	0	0	0	0	0	0	0
217	217	37	0	0	0	0	0	0	0	0
218	218	37	0	0	0	0	0	0	0	0
219	219	37	0	0	0	0	0	0	0	0
220	220	37	0	0	0	0	0	0	0	0
221	221	37	0	0	0	0	0	0	0	0
222	222	37	0	0	0	0	0	0	0	0
223	223	37	0	0	0	0	0	0	0	0
224	224	37	0	0	0	0	0	0	0	0
225	225	37	0	0	0	0	0	0	0	0
226	226	37	0	0	0	0	0	0	0	0
227	227	37	0	0	0	0	0	0	0	0
228	228	37	0	0	0	0	0	0	0	0
229	229	37	0	0	0	0	0	0	0	0
230	230	37	0	0	0	0	0	0	0	0
231	231	37	0	0	0	0	0	0	0	0
232	232	37	0	0	0	0	0	0	0	0
233	233	37	0	0	0	0	0	0	0	0
234	234	37	0	0	0	0	0	0	0	0
235	235	37	0	0	0	0	0	0	0	0
236	236	37	0	0	0	0	0	0	0	0
237	237	37	0	0	0	0	0	0	0	0
238	238	37	0	0	0	0	0	0	0	0
239	239	37	0	0	0	0	0	0	0	0
240	240	37	0	0	0	0	0	0	0	0
241	241	37	0	0	0	0	0	0	0	0
242	242	37	0	0	0	0	0	0	0	0
243	243	37	0	0	0	0	0	0	0	0
244	244	37	0	0	0	0	0	0	0	0
245	245	37	0	0	0	0	0	0	0	0
246	246	37	0	0	0	0	0	0	0	0
247	247	37	0	0	0	0	0	0	0	0
248	248	37	0	0	0	0	0	0	0	0
249	249	37	0	0	0	0	0	0	0	0
250	250	37	0	0	0	0	0	0	0	0
251	251	37	0	0	0	0	0	0	0	0
252	252	37	0	0	0	0	0	0	0	0
253	253	37	0	0	0	0	0	0	0	0
254	254	37	0	0	0	0	0	0	0	0
255	255	37	0	0	0	0	0	0	0	0
256	256	37	0	0	0	0	0	0	0	0
257	257	37	0	0	0	0	0	0	0	0
258	258	37	0	0	0	0	0	0	0	0
259	259	37	0	0	0	0	0	0	0	0
260	260	37	0	0	0	0	0	0	0	0
261	261	37	0	0	0	0	0	0	0	0
262	262	37	0	0	0	0	0	0	0	0
263	263	37	0	0	0	0	0	0	0	0
264	264	37	0	0	0	0	0	0	0	0
265	265	37	0	0	0	0	0	0	0	0
266	266	37	0	0	0	0	0	0	0	0
267	267	37	0	0	0	0	0	0	0	0
268	268	37	0	0	0	0	0	0	0	0
269	269	37	0	0	0	0	0	0	0	0
270	270	37	0	0	0	0	0	0	0	0
271	271	37	0	0	0	0	0	0	0	0
272	272	37	0	0	0	0	0	0	0	0
273	273	37	0	0	0	0	0	0	0	0
274	274	37	0	0	0	0	0	0	0	0
275	275	37	0	0	0	0	0	0	0	0
276	276	37	0	0	0	0	0	0	0	0
277	277	37	0	0	0	0	0	0	0	0
278	278	37	0	0	0	0	0	0	0	0
279	279	37	0	0	0	0	0	0	0	0
280	280	37	0	0	0	0	0	0	0	0
281	281	37	0	0	0	0	0	0	0	0
282	282	37	0	0	0	0	0	0	0	0
283	283	37	0	0	0	0	0	0	0	0
284	284	37	0	0	0	0	0	0	0	0
285	285	37	0	0	0	0	0	0	0	0
286	286	37	0	0	0	0	0	0	0	0
287	287	37	0	0	0	0	0	0	0	0
288	288	37	0	0	0	0	0	0	0	0
289	289	37	0	0	0	0	0	0	0	0
290	290	37	0	0	0	0	0	0	0	0
291	291	37	0	0	0	0	0	0	0	0
292	292	37	0	0	0	0	0	0	0	0
293	293	37	0	0	0	0	0	0	0	0
294	294	37	0	0	0	0	0	0	0	0
295	295	37	0	0	0	0	0	0	0	0
296	296	37	0	0	0	0	0	0	0	0
297	297	37	0	0	0	0	0	0	0	0
298	298	37	0	0	0	0	0	0	0	0
299	299	37	0	0	0	0	0	0	0	0
300	300	37	0	0	0	0	0	0	0	0
301	301	37	0	0	0	0	0	0	0	0
302	302	37	0	0	0	0	0	0	0	0
303	303	37	0	0	0	0	0	0	0	0
304	304	37	0	0	0	0	0	0	0	0
305	305	37	0	0	0	0	0	0	0	0
306	306	37	0	0	0	0	0	0	0	0
307	307	37	0	0	0	0	0	0	0	0
308	308	37	0	0	0	0	0	0	0	0
309	309	37	0	0	0	0	0	0	0	0
310	310	37	0	0	0	0	0	0	0	0
311	311	37	0	0	0	0	0	0	0	0
312	312	37	0	0	0	0	0	0	0	0
313	313	37	0	0	0	0	0	0	0	0
314	314	37	0	0	0	0	0	0	0	0
315	315	37	0	0	0	0	0	0	0	0
316	316	37	0	0	0	0	0	0	0	0
317	317	37	0	0	0	0	0	0	0	0
318	318	37	0	0	0	0	0	0	0	0
319	319	37	0	0	0	0	0	0	0	0
320	320	37	0	0	0	0	0	0	0	0
321	321	37	0	0	0	0	0	0	0	0
\.


--
-- Name: ofertar_materias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: administrador
--

SELECT pg_catalog.setval('ofertar_materias_id_seq', 321, true);


--
-- Name: reticulas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: administrador
--

SELECT pg_catalog.setval('reticulas_id_seq', 7, true);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: administrador
--

COPY users (id, username, password, remember_token) FROM stdin;
1	admin	$2y$10$FsiQDrFEwN3gEJRORRRet.9sQ1sG6s0GlkjPmFExXX6fSw.U/FP86	kgPj8SR7VR6x6GqL0fSFmj4LAaZg3xYzOrb9bscaphsrpIcwACpd6Y3kC9tS
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: administrador
--

SELECT pg_catalog.setval('users_id_seq', 1, true);


--
-- PostgreSQL database dump complete
--

