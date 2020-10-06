
CREATE VIEW HistoriaClinica AS
--Query1
select m.nombre AS Nombre , e.tipo AS 'Tipo de examen' ,p.fecha AS Fecha, v.nombre AS  Vacuna, 
	p.sigDosis AS 'Siguiente Vacuna', d.nombre AS Desparacitante,p.sigDosis AS 'Siguiente Dosis' 
    from ((((cliente c join mascota m on c.idCedula= m.cliente_idCedula)
    	LEFT JOIN procedi p	on p.mascota_idMascotas= m.idMascotas)
        left join examenes e on p.examenes_idExam = e.idExam)
        left join vacunas v on  v.idVacun = p.vacunas_idVacun)
        left join despara d on d.idDespara = p.despara_idDespara WHERE m.numChip = 300
--Query2
select m.nombre AS Nombre, e.tipo AS 'Tipo de examen', p.fecha AS Fecha, v.nombre AS  Vacuna,
	p.sigDosis AS 'Siguiente Vacuna',d.nombre AS Desparacitante, p.sigDosis AS 'Siguiente Dosis'
    from ((((cliente c join mascota m on c.idCedula= m.cliente_idCedula)
    	LEFT JOIN procedi p	on p.mascota_idMascotas= m.idMascotas)
        left join examenes e on p.examenes_idExam = e.idExam)
        left join vacunas v on  v.idVacun = p.vacunas_idVacun)
        left join despara d on d.idDespara = p.despara_idDespara WHERE c.idCedula = 300      
    
--Query3
SELECT m.nombre AS 'Mascota', u.nombre AS 'Cliente', c.fecha AS 'Fecha del control',
	c.peso AS 'Peso',c.diagnos AS 'Diagnóstico',c.trata AS 'Tratamiento',c.observ AS 'Oberservación' 
	FROM( controles c JOIN mascota m ON c.mascota_idMascotas=m.idMascotas) 
	LEFT JOIN cliente u ON u.idCedula=m.cliente_idCedula
	WHERE u.idCedula= 100 ;
        
CREATE VIEW ListaMascotas as        
--Query4
SELECT c.nombre AS Nombre,c.apellido AS Apellido,c.idCedula AS Cédula, 
		m.nombre AS Mascota, m.numChip AS Chip, m.fecNacimi AS 'Fecha de nacimiento', 
		TIMESTAMPDIFF(YEAR,m.fecNacimi , NOW()) 'Edad Mascota'
FROM cliente c JOIN mascota m ON m.cliente_idCedula=c.idCedula
WHERE c.idCedula= 300

CREATE VIEW DetalleMascotas AS 
--Query4
SELECT * FROM mascota m WHERE m.numChip = 300 
--Query5
SELECT * , TIMESTAMPDIFF(YEAR,m.fecNacimi , NOW()) edad FROM mascota m;

CREATE VIEW DetallesCliente AS 
--Query6
SELECT * FROM cliente c WHERE c.idCedula = 100

CREATE VIEW MostrarCitas AS 
--Query7
SELECT c.fecha AS Fecha ,c.hora AS Hora ,c.motivo AS Motivo,
		s.servicios AS Servicio ,v.nombre AS Veterinario
		FROM (citas c JOIN servicios s ON c.servicios_idServi=s.idServi)
		LEFT JOIN veterin v ON v.idVeterin = s.veterin_idVeterin 
			WHERE c.cliente_idCedula = 100

CREATE VIEW ConsultarCita AS 
--Query8
SELECT c.fecha AS Fecha ,c.hora AS Hora ,c.motivo AS Motivo,
		s.servicios AS Servicio ,v.nombre AS Veterinario
FROM (citas c JOIN servicios s ON c.servicios_idServi=s.idServi)
			LEFT JOIN veterin v ON v.idVeterin = s.veterin_idVeterin 
			WHERE c.fecha > '2020-04-11' AND c.fecha <='2020-04-12';

CREATE VIEW ConsultarControles AS 
--Query9
SELECT  u.nombre AS Cliente, m.nombre AS Mascota,c.fecha AS Fecha,c.peso AS Peso,
	c.diagnos AS Diagnóstico,c.trata AS Tratamiento,c.observ AS Observación,
    v.nombre AS Veterinario, v.cargo AS Cargo  
	FROM((controles c JOIN mascota m ON c.mascota_idMascotas=m.idMascotas) 
	LEFT JOIN cliente u ON u.idCedula=m.cliente_idCedula)
    LEFT JOIN veterin v ON v.idVeterin=c.veterin_idVeterin 
	WHERE u.idCedula= 100 ;

CREATE VIEW ConsultarExamenes AS 
--Query10
select m.nombre  AS Mascota, p.fecha AS Fecha, e.tipo AS Tipo, 
	e.resulta AS Resultado, e.lab AS Laboratorio
    from ((cliente c join mascota m on c.idCedula= m.cliente_idCedula)
    	LEFT JOIN procedi p	on p.mascota_idMascotas= m.idMascotas)
        left join examenes e on p.examenes_idExam = e.idExam WHERE c.idCedula= 300;

CREATE VIEW ConsultarVacunas AS 
--Query11
select m.nombre AS Mascota, p.fecha AS Fecha,
	p.sigDosis AS 'Siguiente Dosis', v.nombre AS Vacuna
    from ((cliente c join mascota m on c.idCedula= m.cliente_idCedula)
    	LEFT JOIN procedi p	on p.mascota_idMascotas= m.idMascotas)
        left join vacunas v on p.vacunas_idVacun = v.idVacun WHERE c.idCedula= 100;

CREATE VIEW ConsultarDesparacitantes AS 
--Query12
select m.nombre AS Nombre, p.fecha AS Fecha, p.sigDosis AS 'Siguiente Dosis', d.nombre AS 'Desparacitante'
    from ((cliente c join mascota m on c.idCedula= m.cliente_idCedula)
    	LEFT JOIN procedi p	on p.mascota_idMascotas= m.idMascotas)
        left join despara d on p.despara_idDespara = d.idDespara WHERE c.idCedula= 100;

-- Consultar Cantidad de clientes por año y por mes
SELECT  YEAR(createdAt ) AS anio, MONTH(createdAt) AS mes ,count(nombre) AS cantidad
 FROM cliente c 
 GROUP BY MONTH (createdAt), YEAR (createdAt)

select u.usuLogin as username,u.usuPassword as password, usuEstado as visible, r.id_Rol as rol  
from (usuario_s u join usuario_s_roles r on u.usuUsuSesion = r.usuRolUsuSesion )


SELECT m.numChip , m.nombre , m.fecNacimi 
FROM (cliente c JOIN mascota m ON c.idCedula = m.cliente_idCedula ) 
WHERE c.idCedula = 100

select m.numChip, m.nombre, m.especie, m.sexo, m.raza, m.fecNacimi, m.fecEsterili , e.tipo AS 'Tipo de examen' ,p.fecha AS Fecha, v.nombre AS  Vacuna, 
	p.sigDosis AS 'Siguiente Vacuna', d.nombre AS Desparacitante,p.sigDosis AS 'Siguiente Dosis' 
    from ((((cliente c join mascota m on c.idCedula= m.cliente_idCedula)
    	LEFT JOIN procedi p	on p.mascota_idMascotas= m.idMascotas)
        left join examenes e on p.examenes_idExam = e.idExam)
        left join vacunas v on  v.idVacun = p.vacunas_idVacun)
        left join despara d on d.idDespara = p.despara_idDespara WHERE m.numChip = 300;

