-- Copyright (C) 2014 MariaDB Ab.
--
-- This program is free software; you can redistribute it and/or modify
-- it under the terms of the GNU General Public License as published by
-- the Free Software Foundation; version 2 of the License.
--
-- This program is distributed in the hope that it will be useful,
-- but WITHOUT ANY WARRANTY; without even the implied warranty of
-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
-- GNU General Public License for more details.
--
-- You should have received a copy of the GNU General Public License
-- along with this program; if not, write to the Free Software
-- Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1335  USA

# This part creates stored procedures required by the OpenGIS standards.
# script is prepared to be run with the --bootstrap server option

SET sql_mode='';



DROP PROCEDURE IF EXISTS AddGeometryColumn;
DROP PROCEDURE IF EXISTS DropGeometryColumn;

CREATE DEFINER=`root`@`localhost` PROCEDURE AddGeometryColumn(catalog varchar(64), t_schema varchar(64),
   t_name varchar(64), geometry_column varchar(64), t_srid int) SQL SECURITY INVOKER
begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' ADD ', geometry_column,' GEOMETRY REF_SYSTEM_ID=', t_srid); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end ;

CREATE DEFINER=`root`@`localhost` PROCEDURE DropGeometryColumn(catalog varchar(64), t_schema varchar(64),
   t_name varchar(64), geometry_column varchar(64)) SQL SECURITY INVOKER
begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' DROP ', geometry_column); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end ;



