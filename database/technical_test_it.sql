PGDMP                      |            technical_test_it    15.7    16.3     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16398    technical_test_it    DATABASE     �   CREATE DATABASE technical_test_it WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_United Kingdom.1252';
 !   DROP DATABASE technical_test_it;
                postgres    false            �            1259    16402    employee_data    TABLE     �   CREATE TABLE public.employee_data (
    id integer NOT NULL,
    employee_id character(10),
    employee_name character varying(60),
    email character varying(60),
    job_title character varying(30),
    department character varying(20)
);
 !   DROP TABLE public.employee_data;
       public         heap    postgres    false            �            1259    16407    employee_data_id_seq    SEQUENCE     �   CREATE SEQUENCE public.employee_data_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.employee_data_id_seq;
       public          postgres    false    214            �           0    0    employee_data_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.employee_data_id_seq OWNED BY public.employee_data.id;
          public          postgres    false    215            e           2604    16408    employee_data id    DEFAULT     t   ALTER TABLE ONLY public.employee_data ALTER COLUMN id SET DEFAULT nextval('public.employee_data_id_seq'::regclass);
 ?   ALTER TABLE public.employee_data ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    214            �          0    16402    employee_data 
   TABLE DATA           e   COPY public.employee_data (id, employee_id, employee_name, email, job_title, department) FROM stdin;
    public          postgres    false    214   �       �           0    0    employee_data_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.employee_data_id_seq', 2, true);
          public          postgres    false    215            g           2606    16413     employee_data employee_data_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.employee_data
    ADD CONSTRAINT employee_data_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.employee_data DROP CONSTRAINT employee_data_pkey;
       public            postgres    false    214            �   >   x�3�42464262TP�t��T-����L��,1,�s3s���s9=C��+F��� �[j     