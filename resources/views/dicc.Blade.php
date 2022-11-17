<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="author" content="WB DataDic" />
    <meta name="description" content="bizsett_bd Data Dictionary." />
    <title>bizsett_bd Data Dictionary</title>
    <style type="text/css">
    table{
        width: 100%;
        margin-bottom: 30px;
    }
    abbr{
        cursor: help;
    }
    table, td, th{
        border-style: solid;
        border-width: 1px;
    }
    table caption{
        font-size: 120%;
        font-weight: bold;
    }
    caption{
        color: black;
    }
    td, th{
        border-color: silver;
    }
    tr:hover{
        color: #333;
        background-color: #F2F2F2;
    }
    th{
        background-color: silver;
    }
    td{
        color: gray;
    }
    ul{
        font-style: italic;
    }
    #title-sect{
        color: gray;
        text-align: right;
    }
    .proj-desc{
        text-align: right;
    }
    </style>
</head>
<body>
<div id="title-sect">
<h1>bizsett_bd<br> Data Dictionay</h1>
<p>
<em>2022-11-13</em>
</p>
<p class="proj-desc">
<em></em>
</p>
</div>
<h2>Alphabetic Index</h2>
<ul>
<li><a href='#buzones'>buzones</a></li>
<li><a href='#chats'>chats</a></li>
<li><a href='#ciudades'>ciudades</a></li>
<li><a href='#comentarios'>comentarios</a></li>
<li><a href='#departamentos'>departamentos</a></li>
<li><a href='#empleos'>empleos</a></li>
<li><a href='#emprendimientos'>emprendimientos</a></li>
<li><a href='#followers'>followers</a></li>
<li><a href='#inversionistas'>inversionistas</a></li>
<li><a href='#mensajes'>mensajes</a></li>
<li><a href='#notificaciones'>notificaciones</a></li>
<li><a href='#personas'>personas</a></li>
<li><a href='#publicaciones'>publicaciones</a></li>
<li><a href='#reacciones'>reacciones</a></li>
<li><a href='#tipo_documentos'>tipo_documentos</a></li>
<li><a href='#tipo_notificaciones'>tipo_notificaciones</a></li>
<li><a href='#tipo_persona'>tipo_persona</a></li>
</ul>
<table id='buzones'>
<caption>buzones</caption>
<tr><td colspan='11'>En esta entidad se registraran las criticas de los diferentes clientes </td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idbuzones</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla "buzon_sqr",  llenar este campo es obligatorio (not null).  Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>mensaje</td>
    <td>TEXT(1000)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>en este campo la persona podrá redactar y enviar su sugerencia, queja y reclamo.  llenar este campo es obligatorio (not null). Este campo es tipo de dato text.</td>
</tr>
<tr>
    <td>persona_idpersona</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td></td>
</tr>
<table id='chats'>
<caption>chats</caption>
<tr><td colspan='11'>Esta tabla tiene una relacion de uno a muchos conectada con users puesto que un user puede tener varios chats y tiene una relación de uno a muchos con la tabla de mensajes, puesto que un chat puede tener muchos mensajes.</td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idchat</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla chats,  llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment).  Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>sala</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo se guarda la sala que usa el chat.</td>
</tr>
<tr>
    <td>fecha</td>
    <td>DATE</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td>persona_idpersona</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td></td>
</tr>
<table id='ciudades'>
<caption>ciudades</caption>
<tr><td colspan='11'></td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idciudad</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla "ciudades",  llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment). Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>ciudad</td>
    <td>VARCHAR(50)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo se guarda el nombre de la ciudad</td>
</tr>
<tr>
    <td>departamento_iddepartamento</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>en está llave foranea se guarda el id del departamento al cual pertenece la ciudad</td>
</tr>
<table id='comentarios'>
<caption>comentarios</caption>
<tr><td colspan='11'>Esta tabla tiene una relacion de uno a muchos conectada con publicaciones y users puesto que una publicacion puede tener varios comentarios y un user puede hacer varios comentarios.
</td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idcomentarios</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla "comentarios",  llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment). Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>texto_com</td>
    <td>TEXT(1000)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo se hara una descripcion para el comentario, llenar este campo es obligatorio (not null). Este tiene un tipo de dato text.
</td>
</tr>
<tr>
    <td>fecha_com</td>
    <td>DATE</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo se guardara la fecha en la que se hizo el comentario, llenar este campo es obligatorio (not null). Este tiene un tipo de dato date
</td>
</tr>
<tr>
    <td>publicacion_idpublicacion</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo es la llave foranea (FK) de la tabla "publicaciones",  llenar este campo es obligatorio (not null). Este tiene un tipo de dato entero</td>
</tr>
<tr>
    <td>personas_idpersona</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td></td>
</tr>
<table id='departamentos'>
<caption>departamentos</caption>
<tr><td colspan='11'>Está tabla tiene una relación de uno a muchos con la tabla ciudades ya que un departamento tiene muchas ciudades.</td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>iddepartamento</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla departamentos, llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment). Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>departamento</td>
    <td>VARCHAR(50)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo se guarda el nombre del departamento</td>
</tr>
<table id='empleos'>
<caption>empleos</caption>
<tr><td colspan='11'>Esta tabla tiene una relacion de uno a muchos conectada con la tabla emprendimiento puesto que una persona puede pertenecer a muchos empleos.
</td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idempleo</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla "empleo",  llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment). Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>evidencia_url</td>
    <td>VARCHAR(90)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo  el usuario subve su evidencia y es obligatorio llenarlo (not null). ESte campo tiene un tipo de dato varchar

</td>
</tr>
<tr>
    <td>cargo</td>
    <td>VARCHAR(100)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo se registrara al cargo al que aspira el usuario este es obligatorio llenarlo (not null). Este campo tiene un tipo de dato varchar
</td>
</tr>
<tr>
    <td>fecha</td>
    <td>DATE</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo se registrar la fecha este es obligatorio llenarlo (not null). Este campo tiene un tipo de dato date.
</td>
</tr>
<tr>
    <td>emprendimiento_idemprendimiento</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo es la llave foranea (FK) de la tabla "emprendimiento",  llenar este campo es obligatorio (not null). Este tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>users_idpersona</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td></td>
</tr>
<table id='emprendimientos'>
<caption>emprendimientos</caption>
<tr><td colspan='11'>en esta tabla se encontraran los datos de los emprendimientos de cada persona.Esta tabla tiene una relacion de uno a muchos conectada con la tabla  con la tabla persona, puesto que una persona tiene muchos emprendimientos y muchos emprendimientos pueden pertenecer a una sola persona;Esta tabla tiene una relacion de uno a muchos conectada con    seguidores puesto que un emprendimiento tiene muchos seguidores y muchos seguidores  pertenecen a un  emprendimientio,Esta tabla tiene una relacion de uno a muchos conectada con la tabla publicaciones, puesto que un emprendimiento tiene muchas publicaciones, Esta tabla tiene una relacion de uno a muchos conectada con la  con la tabla iinversionistas  puesto que un emprendimiento tienee muchos inversionistaas, Esta tabla tiene una relacion de uno a muchos conectada con la tabla empleo puesto que un emprendimiento tiene muchos eempleos.
</td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idemprendimiento</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla "emprendimiento",  llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment). Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>nombre</td>
    <td>VARCHAR(15)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>en este campo el usuario digirtara el nombre de su empresa, llenar este campo es obligatorio (not null). Este tiene un tipo de dato varchar.
</td>
</tr>
<tr>
    <td>categoria</td>
    <td>VARCHAR(90)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>en este campo el usuario seleccionara su clasificacion, llenar este campo es obligatorio (not null). Este tiene un tipo de dato varchar 
</td>
</tr>
<tr>
    <td>descripcion</td>
    <td>TEXT(1000)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo el usuario digirtara la descripcion de su empresa, llenar este campo es obligatorio (not null). Este tiene un tipo de dato text.
</td>
</tr>
<tr>
    <td>telefono</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo se guarda el telefono del emprendimiento</td>
</tr>
<tr>
    <td>direccion</td>
    <td>VARCHAR(45)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo se guarda la dirección del emprendimiento</td>
</tr>
<tr>
    <td>persona_idpersona</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo es la llave foranea (FK) de la tabla "persona",  llenar este campo es obligatorio (not null). Este tiene un tipo de dato entero.
</td>
</tr>
<tr>
    <td>ciudades_idciudad</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td></td>
</tr>
<table id='followers'>
<caption>followers</caption>
<tr><td colspan='11'></td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idfollowers</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla followers, llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment).  Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>emprendimientos_idemprendimiento</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo foraneo se guarda el id del emprendimiento al cual se está siguiendo.</td>
</tr>
<tr>
    <td>personas_idpersona</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td></td>
</tr>
<table id='inversionistas'>
<caption>inversionistas</caption>
<tr><td colspan='11'>Esta tabka tiene una relacion de uno a muchos conectada con la tala emprendimiento puesto que una persona puede tener varios inversionistas  </td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idinversionistas</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla "inversionistas",  llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment). Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>propuesta</td>
    <td>VARCHAR(200)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo es de tipo varchar (100)  el usuario sube la propuesta y es obligatorio llenarlo (not null)</td>
</tr>
<tr>
    <td>fecha</td>
    <td>DATE</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td>emprendimiento_idemprendimiento</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo es la llave foranea (FK) de la tabla "emprendimiento",  llenar este campo es obligatorio (not null). Este tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>users_idpersona</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td></td>
</tr>
<table id='mensajes'>
<caption>mensajes</caption>
<tr><td colspan='11'>Esta tabla tiene una relacion de uno a muchos conectada con users puesto que un user puede tener varios buzones(Un usuario puede enviar a los administradores peticiones, quejas, reclamos o sugerencias).</td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idmensajes</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla "persona",  llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment).  Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>mensaje</td>
    <td>VARCHAR(45)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo se guarda el texto del mensaje.</td>
</tr>
<tr>
    <td>multimedia</td>
    <td>VARCHAR(45)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo se guarda el nombre con que está guardado la imagen</td>
</tr>
<tr>
    <td>fecha</td>
    <td>DATE</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td>chats_idchat</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td></td>
</tr>
<table id='notificaciones'>
<caption>notificaciones</caption>
<tr><td colspan='11'>en esta entidad se guaradará las notificaciones que lleguen a la cuenta del usuario. Está tabla tiene una relación de uno a muchos conectada con la tabla "notificaciones", puesto que muchas notificaciones pueden ser de un tipo de notificaciones y una notificación tiene un tipo de notificación. Por otro lado está conectada a la tabla persona siendo que una persona tiene muchas notificaciones y una notificacion llega aa una persona en especifico.</td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idnotificaciones</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla "notificaciones",  llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment).  Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>fecha</td>
    <td>DATE</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>en este campo se registrara la fecha en la que llego la noificacion.  llenar este campo es obligatorio (not null). Este tiene un tipo de dato date.
</td>
</tr>
<tr>
    <td>persona_idpersona</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo estará el id de la llave primaria de la tabla "persona".  llenar este campo es obligatorio (not null).  Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>tiponotificacion_tiponotificacion</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo estará el id de la llave primaria de la tabla "tiponotificacion".  llenar este campo es obligatorio (not null).  Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<table id='personas'>
<caption>personas</caption>
<tr><td colspan='11'>en esta entidad se van a almacenar los datos de la persona.Está tabla tiene una relación de uno a muchos conectada a la tabla "notificaciones" siendo que una persona tiene muchas notificaciones y una notificación llega a una persona en especifico. También, está conectada en una relación de uno a muchos a la tabla "tipopersona" siendo que una persona puede ser un tipo de persona y un tipo de persona pueden ser muchas personas. Por otro lado tiene otra relación de uno a muchos con la tabla "emprendimiento", pues que una persona...</td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idpersona</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla "persona",  llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment).  Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>nombre</td>
    <td>VARCHAR(50)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>en este campo quedará registrado el nombre de la persona. Llenar este campo es obligatorio (not null). Este tiene un tipo de dato varchar.</td>
</tr>
<tr>
    <td>apellidos</td>
    <td>VARCHAR(50)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>en este campo quedará registrado los apellidos de la persona.Llenar este campo es obligatorio (not null). Este tiene un tipo de dato varchar.</td>
</tr>
<tr>
    <td>correo</td>
    <td>VARCHAR(50)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>en este campo quedará registrado el correo electronico de la persona. Llenar este campo es obligatorio (not null). Este tiene un tipo de dato varchar.</td>
</tr>
<tr>
    <td>usuario</td>
    <td>VARCHAR(45)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>en este campo quedará registrado el nombre de usuario de la persona. Llenar este campo es obligatorio (not null). Este tiene un tipo de dato varchar.</td>
</tr>
<tr>
    <td>contrasena</td>
    <td>VARCHAR(45)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>en este campo quedará registrado la contraseña de la cuenta en nuestro software de la persona. Llenar este campo es obligatorio (not null).</td>
</tr>
<tr>
    <td>tipo_documento_idtipo_documento</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td>num_documento</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>en este campo quedará registrado el número de documento de la persona. Llenar este campo es obligatorio (not null).  Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>tipopersona_idtipopersona</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo estará el id de la llave primaria de la tabla "tipopersona" Llenar este campo es obligatorio (not null).  Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<table id='publicaciones'>
<caption>publicaciones</caption>
<tr><td colspan='11'>En esta tabla se encontraran los datos de las publicaciones de cada persona .esta tabla tiene una relacion de uno a muchos conectada  con la tabla comentarios puesto que una persona tiene muchas publicaciones y muchas publicaciones pueden pertenecer a una sola persona. Esta tabla tiene una relacion de uno a muchos conectada con multimedia  puesto que una publicacion puede tener mucho contenido multimedia y estos pertenece a una publicacion,En esta tabla  tiene una relacion de unoa muchos conectada con la tabla de comentario   puesto que un publicacion tiene muchos comentarios y este ultimo pertenece a una publicacion,En esta tabla tiene una relacion de uno a muchos conectada con la tabla reacciones  puesto que una publicacion tiene muchas reacciones y este ultimo pertenece a publicacion, En esta tabla tiene una relacion de uno amuchos conectada con la tabla promociones puesto que una publicacion tiene muchas promociones  y este ultimo pertenece a publicacion.</td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idpublicaciones</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla "publicaciones",  llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment). Este tipo de dato tiene un tipo de dato entero. Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>descripcion</td>
    <td>TEXT(1000)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo el usuario podra guargar los productos subidos anteriormente, llenar este campo es obligatorio (not null). Este tiene un tipo de dato varchar.
</td>
</tr>
<tr>
    <td>imagen</td>
    <td>VARCHAR(45)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td></td>
</tr>
<tr>
    <td>fecha</td>
    <td>DATE</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo el usuario podra guardar las fechas en las que hizo publicaciones, llenar este campo es obligatorio (not null). Este tiene un tipo de dato date.
</td>
</tr>
<tr>
    <td>emprendimiento_ideprendimiento</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo es la llave fornea (FK) de la tabla "emprendimiento",  llenar este campo es obligatorio (not null).  Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<table id='reacciones'>
<caption>reacciones</caption>
<tr><td colspan='11'>Esta tabla tiene una relacion de uno a muchos conectada con publicaciones y users puesto que una publicacion puede tener muchas reacciones y un user puede hacer muchas reacciones.</td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idreacciones</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla "reacciones",  llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment). Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>fecha</td>
    <td>DATE</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo se guardara la fecha en que se reaciono, llenar este campo es obligatorio (not null). Este tiene un tipo de dato date.
</td>
</tr>
<tr>
    <td>publicacion_idpublicacion</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo es la llave foranea (FK) de la tabla "publicaciones",  llenar este campo es obligatorio (not null). Este tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>personas_idpersona</td>
    <td>INT</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td></td>
</tr>
<table id='tipo_documentos'>
<caption>tipo_documentos</caption>
<tr><td colspan='11'></td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idtipo_documento</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla "tipodocumentos",  llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment).  Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>tipo_nombre</td>
    <td>VARCHAR(45)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo se guarda el nombre del tipo de documento.</td>
</tr>
<table id='tipo_notificaciones'>
<caption>tipo_notificaciones</caption>
<tr><td colspan='11'>En está tabla se encontraran los tipos de notificaciones que hay para denoniminar si lo que al usuario se le esta notificando es un comentario o una reaccion, publicacion de la cuenta que sigue, etc. Está tabla tiene una relación de uno a muchos conectada con la tabla "notificaciones", puesto que muchas notificaciones pueden ser de un tipo de notificaciones y una notificación tiene un tipo de notificación.</td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idtiponotificaciones</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla "tiponotificaciones", llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment).  Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>nombre_tipo</td>
    <td>VARCHAR(45)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>Este campo es donde se pondrán los nombres de cada tipo de notificación que haya. llenar este campo es obligatorio (not null). Este tiene un tipo de dato varchar.</td>
</tr>
<tr>
    <td>texto</td>
    <td>VARCHAR(300)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo se pondrá el texto según el tipo de notificación.  llenar este campo es obligatorio (not null). Este tiene un tipo de dato varchar.</td>
</tr>
<table id='tipo_persona'>
<caption>tipo_persona</caption>
<tr><td colspan='11'>en esta entidad se van a almacenar los los distintos tipos de persona.Está tabla tiene una relación de uno a muchos a la tabla "persona" siendo que una persona puede ser un tipo de persona y un tipo de persona pueden ser muchas personas.</td></tr>
<tr>
    <th>Column name</th>
    <th>DataType</th>
    <th><abbr title='Primary Key'>PK</abbr></th>
    <th><abbr title='Not Null'>NN</abbr></th>
    <th><abbr title='Unique'>UQ</abbr></th>
    <th><abbr title='Binary'>BIN</abbr></th>
    <th><abbr title='Unsigned'>UN</abbr></th>
    <th><abbr title='Zero Fill'>ZF</abbr></th>
    <th><abbr title='Auto Increment'>AI</abbr></th>
    <th>Default</th>
    <th>Comment</th>
</tr>
<tr>
    <td>idtipopersona</td>
    <td>INT</td>
    <td>&#10004;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td></td>
    <td>Este campo es la llave primaria (PK) de la tabla "tipopersona",  llenar este campo es obligatorio (not null). Este campo se incremente automaticamente con cada registro (Auto increment).  Este tipo de dato tiene un tipo de dato entero.</td>
</tr>
<tr>
    <td>nombre</td>
    <td>VARCHAR(45)</td>
    <td>&nbsp;</td>
    <td>&#10004;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class='attr'>&nbsp;</td>
    <td></td>
    <td>En este campo quedará registrado el nombre de cada tipo de persona.llenar este campo es obligatorio (not null). Este tiene un tipo de dato varchar.</td>
</tr>
</table>
</body>
</html>